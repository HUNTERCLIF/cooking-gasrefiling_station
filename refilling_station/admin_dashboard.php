<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Cooking Gas Refilling Station</title>
    
    <!-- Add your CSS styles here here-->

</head>
<body>
    <h1>Welcome to Admin Dashboard</h1>

    <?php
    include('connect.php');

    // Fetch all the orders from the database
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // orders in a table
        echo "<table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Gas Provider</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Order Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['order_id']."</td>
                    <td>".$row['customer_name']."</td>
                    <td>".$row['gas_provider']."</td>
                    <td>".$row['quantity']."</td>
                    <td>".$row['total_price']."</td>
                    <td>".$row['order_date']."</td>
                    <td>
                        <form action='approve_reject_order.php' method='post'>
                            <input type='hidden' name='order_id' value='".$row['order_id']."'>
                            <input type='submit' name='action' value='Approve'>
                            <input type='submit' name='action' value='Reject'>
                        </form>
                    </td>
                </tr>";
        }

        echo "</tbody>
            </table>";
    } else {
        echo "<p>No orders found.</p>";
    }

    ?>

</body>
</html>
