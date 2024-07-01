<?php require '../config.php';?>
<?php include_once BL.'functions/db.php';  ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(empty($email) || empty($password)){
        echo "All fields are required.";
        exit;}
        $password = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `admins` ( admin_email, admin_password) VALUES ( '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
        header("location:index.php");}
        else{
        echo "Error: " . $sql . "<br>" . $conn->error;}
        $conn->close();}?>
