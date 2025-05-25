
<?php //old code of register
include "connect.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //GET form data
    $fullname = mysqli_real_escape_string($conn , $_POST['fullname']);
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $password = mysqli_real_escape_string($conn , $_POST['password']);
  
//check if email is already in db
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $result = $conn->query($checkEmail);

    if($result->num_rows > 0){
        echo "Email already has an account";
    }else{
        //create account
        //security - hashing
        
        $hashed_password = password_hash($password , PASSWORD_BCRYPT);
        $hashed_password = $password; // Plain text password

        $sql = "INSERT INTO users(fullname , email ,password) VALUES('$fullname' , '$email' , '$hashed_password')";
        if($conn->query($sql)===TRUE){
            echo "<script>
            alert('Account Created');
            window.location.href = 'index.php'
            </script>";
        }
        else{
            echo "Error" .$sql.$conn->error;
        }
    }

}
?>



<?php ///old code of login
include "connect.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //GET form data
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $password = mysqli_real_escape_string($conn , $_POST['password']);


//check if email is already in db
     $checkEmail = "SELECT * FROM users WHERE email='$email'";
     $result = $result = $conn->query($checkEmail);

     if($result->num_rows > 0){
    //     echo "Email already has an account";
         $user = $result->fetch_assoc();
        if(password_verify($password , $user['password'])){
            echo "login sucessful! , Welcome" . $user['fullname'];
        }
        else{
            echo "wrong password";
        }
     }

}
?>
