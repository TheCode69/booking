<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "code";
    $password = "code@69code";
    $dbname = "housing";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO bookings (first_name, last_name, email, phone, age) 
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$age')";

if ($conn->query($sql) === TRUE) {
    // Output JavaScript for alert and redirection
    echo '<script>alert("Booking successful!");';
    echo 'window.location.href = "index.html?booking_success=1";</script>';
    exit; // Make sure to exit to prevent further execution
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>