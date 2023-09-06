<?php
session_start();
include('connect.php');

// Define gas provider availability.
$gas_provider_availability = [
    'PRO GAS' => true,         
    'OLA ENERGIES' => true,    
    'TOTAL' => true            
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //  form fields are set
    if (isset($_POST['order_id'], $_POST['action'])) {
        $order_id = htmlspecialchars($_POST['order_id']);
        $action = $_POST['action'];

        // Fetch the order details from the database
        $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $order = mysqli_fetch_assoc($result);
            $gas_provider = $order['gas_provider'];

            if ($action === 'Approve') {
                // Check if the gas provider is available
                if (array_key_exists($gas_provider, $gas_provider_availability) && $gas_provider_availability[$gas_provider]) {
                    // Gas provider is available, update the order status to 'Approved' in the database
                    $sql = "UPDATE orders SET status = 'Approved' WHERE order_id = '$order_id'";
                    if (mysqli_query($conn, $sql)) {
                        echo "Order ID: $order_id has been approved.";
                    } else {
                        echo "Error: Failed to approve the order.";
                    }
                } else {
                    // Gas provider is not available, reject the order
                    $sql = "UPDATE orders SET status = 'Rejected' WHERE order_id = '$order_id'";
                    if (mysqli_query($conn, $sql)) {
                        echo "Order ID: $order_id has been rejected because the gas provider is not available.";
                    } else {
                        echo "Error: Failed to reject the order.";
                    }
                }
            } elseif ($action === 'Reject') {
                // Update the order status 
                $sql = "UPDATE orders SET status = 'Rejected' WHERE order_id = '$order_id'";
                if (mysqli_query($conn, $sql)) {
                    echo "Order ID: $order_id has been rejected.";
                } else {
                    echo "Error: Failed to reject the order.";
                }
            } else {
                echo "Error: Invalid action.";
            }
        } else {
            echo "Error: Order not found.";
        }
    } else {
        echo "Error: Incomplete data.";
    }
} else {
    header("Location: admin_dashboard.php");
    exit();
}
?>
