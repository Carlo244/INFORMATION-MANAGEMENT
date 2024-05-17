<?php 
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
	<title>ORDERS</title>
</head>
<body>
<div class="fields">
    <form action="get.php" method="GET">
        <h1>Welcome</h1>
        <ul>
          <li>Kanin - 10php</li>
          <li>Sisilog - 70php</li>
          <li>Bacsilog - 80php</li>
        </ul>
        <label for="order" required>Choose your order:</label>
        <select name="order" id="order">
        <option value="kanin" >Kanin</option>
        <option value="sisilog" >Sisilog</option>
        <option value="bacsilog"  >Bacsilog</option>
        </select>
        <br><br>
        <label for="orders">ilang order po</label>
        <input type="text" name="hm" required>
        <br><br>
        <label for="money">bayad po</label>
        <input type="text" name="cash" required>
        <br><br>
        <input type="submit" value="Submit" name="calc">
      </form>
      
      <a href="login.php">Logout</a>
      </div>
</body>
</html>