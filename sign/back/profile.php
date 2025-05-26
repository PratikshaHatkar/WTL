<?php
$host = "localhost";
$user = "root";  // or your DB user
$pass = "";      // your DB password
$dbname = "department";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = intval($_GET['id']); // Get ID from URL

$sql = "SELECT * FROM computer WHERE id = $id";
$result = $conn->query($sql);
$employee = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <link rel="stylesheet" href="../frontend/style.css">

</head>
<body>
  <div class="proinfo">
    <button id="back" onclick="window.history.back()">Back</button>
    <div class="profi">
      <div class="img">
        <img src="https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg" alt="">
      </div>
      <div class="bolet">
        <li><label>Name:</label> <?= htmlspecialchars($employee['fullname']) ?></li>
        <li><label>Education:</label> <?= htmlspecialchars($employee['qualification']) ?></li>
        <li><label>Role:</label> <?= htmlspecialchars($employee['role']) ?></li>
        <li><label>Email:</label> <?= htmlspecialchars($employee['email']) ?></li>
        <li><label>Experience:</label> <?= htmlspecialchars($employee['experience']) ?></li>
        <li><label>Area of Interest:</label> <?= htmlspecialchars($employee['aoi']) ?></li>
      </div>
    </div>
    <div class="detail">
      <h3>Information</h3>
      Additional description or notes can go here...
    </div>
  </div>
</body>
</html>
