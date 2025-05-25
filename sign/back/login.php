<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password']; // Do NOT hash here

    // Check if email exists
    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify hashed password from DB
        if (password_verify($password, $user['password'])) {
            echo '<div style="padding: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 15px;">
            Login successful! Welcome ' . htmlspecialchars($user['fullname']) . '
          </div>';
        } else {
             echo "<script>alert('Wrong password!');
             window.location.href = 'index.php';
             </script>";
        }
    } else {
         echo "<script>alert('Email is Not Found!');
         window.location.href = 'index.php';
         </script>";
    }
}
?>
