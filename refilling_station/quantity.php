<!DOCTYPE html>
<html>
<head>
  <title>Cooking Gas Refilling Station Management System - Quantity</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('https://media.istockphoto.com/id/494257144/photo/lpg-gas-bottles-lpg-plant.jpg?s=612x612&w=0&k=20&c=_gpPdaplbeMVwi3NYdWmxfbzWfyIwJK6zhrhR6BcJaQ=');
      background-size: cover;
      background-repeat: no-repeat;
    }

    header {
      background-color: cyan;
      color: #fff;
      padding: 10px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline;
      margin-right: 10px;
    }

    main {
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }

    th {
      background-color: #333;
      color: #fff;
    }

    .order-btn {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 5px 10px;
      border-radius: 3px;
      cursor: pointer;
    }

  </style>
</head>
<body>
    <header>
      <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="quantity.php">Quantity</a></li>
      </ul>
      </nav>
    </header>

    <main>
      <section id="quantity">
        <h2>Quantity Page</h2>
        <table>
        <thead>
          <tr>
            <th>PRO GAS</th>
            <th>OLA ENERGIES</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><b>6 KG-	1,280</b> <button class="order-btn" onclick="submitOrder('PRO GAS', '6 KG')">Order</button></td>
            <td><b>6 KG-	1,270</b> <button class="order-btn" onclick="submitOrder('OLA ENERGIES', '6 KG')">Order</button></td>
            <td><b>6 KG-	1,180 </b><button class="order-btn" onclick="submitOrder('TOTAL', '6 KG')">Order</button></td>
          </tr>
          <tr>
            <td><b>13 KG-2,900</b> <button class="order-btn" onclick="submitOrder('PRO GAS', '13 KG')">Order</button></td>
            <td><b>13 KG-2,700</b> <button class="order-btn" onclick="submitOrder('OLA ENERGIES', '13 KG')">Order</button></td>
            <td><b>13 KG-2,800</b> <button class="order-btn" onclick="submitOrder('TOTAL', '13 KG')">Order</button></td>
          </tr>
          <tr>
            <td><b>22.5 KG-5,020</b> <button class="order-btn" onclick="submitOrder('PRO GAS', '22.5 KG')">Order</button></td>
            <td><b>22.5 KG-4,800</b> <button class="order-btn" onclick="submitOrder('OLA ENERGIES', '22.5 KG')">Order</button></td>
            <td><b>22.5 KG-5,000</b> <button class="order-btn" onclick="submitOrder('TOTAL', '22.5 KG')">Order</button></td>
          </tr>
        </tbody>
        </table>
      </section>
      <form action="process_order.php" method="post" id="orderForm">
          <label for="customer_name">Customer Name:</label>
          <input type="text" name="customer_name" id="customer_name" required>
          <br>
          <label for="gas_provider">Gas Type:</label>
          <select name="gas_provider" id="gas_provider" required>
            <option value="PRO GAS">PRO GAS</option>
            <option value="OLA ENERGIES">OLA ENERGIES</option>
            <option value="TOTAL">TOTAL</option>
          </select>
          <br>
          <label for="quantity">Quantity:</label>
          <input type="text" name="quantity" id="quantity" required>
          <br>
          <button type="submit">Place Order</button>
    </main>
</body>
</html>
