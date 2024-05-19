<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        $checkEmail = "SELECT * FROM register WHERE email = '$email'";
        $result = $conn->query($checkEmail);
        if ($result->num_rows > 0) {
            echo "Email Address Already Exists!";
        } else {
            $insertQuery = "INSERT INTO register (name, password, email) VALUES ('$name', '$password', '$email')";
            if ($conn->query($insertQuery) === TRUE) {
                header("location: hello.php");
                echo "New record created successfully";
            } else {
                echo "Error: " . $conn->error;
            }
        }
    } 
}   

?>
