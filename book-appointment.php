<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dental_clinic";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$service = $_POST['service'];

// Insert data into database
$sql = "INSERT INTO appointments (name, email, phone, date, time, service) 
        VALUES ('$name', '$email', '$phone', '$date', '$time', '$service')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
