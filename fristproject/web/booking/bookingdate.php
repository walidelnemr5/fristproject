<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fristproject";
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error){die("Connection failed: " . $connection->connect_error);}
$booking_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$booking_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$booking_mobile = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
$booking_date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
$booking_time = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_STRING);
$booking_serv_title = filter_input(INPUT_POST, 'Department', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO booking(`booking_id`,`booking_email`, `booking_mobile`, `booking_date`, `booking_time`, `booking_serv_title`) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
if ($stmt){
    $stmt->bind_param("isssss", $booking_id, $booking_email, $booking_mobile, $booking_date, $booking_time, $booking_serv_title);
    if ($stmt->execute()) {
        echo "Booking details inserted successfully.";
        // echo $_POST['Department'];
        header("location:booking.php");
        } 
        else {
            echo "Error: " . $stmt->error;}
            $stmt->close();} else {
                echo "Error: " . $connection->error;}
                $connection->close();?>

    
    
   