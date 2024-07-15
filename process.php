<?php
$servername = "localhost";
$username = "id22267043_shekhar"; 
$password = "Speedmath@123"; 
$dbname = "id22267043_conformation";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $candi = $_POST['candi'];
    $gen = $_POST['gen'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $guardian = $_POST['guardian'];
    $guardian_contact = $_POST['guardian_contact'];


    $sql = "INSERT INTO submissions (candi, gen, fname, mname, lname, dob, age, height, weight, contact, email, guardian, guardian_contact)
    VALUES ('$candi', '$gen', '$fname', '$mname', '$lname', '$dob', '$age', '$height', '$weight', '$contact', '$email', '$guardian', '$guardian_contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "<h1>Invalid Request</h1>";
}
?>  

