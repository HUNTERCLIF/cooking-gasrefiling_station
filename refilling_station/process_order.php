<?php
session_start();
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form fields are set
    if (isset($_POST['customer_name'], $_POST['gas_provider'])) {
        // Sanitize and store the form data
        $customer_name = htmlspecialchars($_POST['customer_name']);
        $gas_provider = htmlspecialchars($_POST['gas_provider']);

        $gas_prices = [
            'PRO GAS' => 1280,
            'OLA ENERGIES' => 1270,
            'TOTAL' => 1180
        ];

        // Checking if the selected gas provider exists in the gas_prices array
        if (array_key_exists($gas_provider, $gas_prices)) {
            $total_price = $gas_prices[$gas_provider];
            $order_date = date('Y-m-d H:i:s'); 

            // Insert the order data into the database
            $sql = "INSERT INTO orders (gas_provider, quantity, order_date, total_price) 
                    VALUES ('$gas_provider', 1, '$order_date', '$total_price')";

            // Execute the SQL query
            if (mysqli_query($conn, $sql)) {
                echo "<h1>Order Placed Successfully!</h1>";
                echo "<p>Customer Name: $customer_name</p>";
                echo "<p>Gas Provider: $gas_provider</p>";
                echo "<p>Total Price: $total_price</p>";
                echo "<p>Order Date: $order_date</p>";
                echo "<p><a href='quantity.php'>Make Another Order</a></p>";
                echo "<p><a href='index.php'>Logout</a></p>";
            } else {
            
                echo "<h1>Error: Failed to Place Order</h1>";
                echo "<p>Please try again later.</p>";
            }
        } else {

            echo "<h1>Error: Invalid Gas Provider</h1>";
            echo "<p>Please choose a valid gas provider.</p>";
        }
    } else {
        echo "<h1>Error: Incomplete Order Data</h1>";
    }
} else {
    header("Location: quantity.php");
    exit();
}
?>
