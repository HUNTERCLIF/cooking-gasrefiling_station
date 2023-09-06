<!DOCTYPE html>
<html>
<head>
  <title>Cooking Gas Refilling Station Management System - Login</title>
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

    .login-form {
      max-width: 300px;
      margin: 0 auto;
      background: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form label {
      display: block;
      margin-bottom: 10px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .login-form input[type="submit"] {
      width: 100%;
      padding: 8px;
      background: #333;
      color: #fff;
      border: none;
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
        <li><a href="login.php">Login</a></li>
        <li><a href="quantity.php">Quantity</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="login">
      <h2>Login</h2>
      <div class="login-form">
        <form action="process_login.php" method="post">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required><br><br>
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required><br><br>
          
          <input type="submit" value="Login">
        </form>
      </div>
    </section>
  </main>
</body>
</html>
