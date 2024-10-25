<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "personal_information";

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $fathers_name = $_POST["fathers_name"];
    $mothers_name = $_POST["mothers_name"];
    $nid = $_POST["nid"];
    $educations = $_POST["educations"];
  

    $stmt = $conn->prepare("INSERT INTO information(first_name, last_name, fathers_name, mothers_name, nid, educations) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $first_name, $last_name, $fathers_name, $mothers_name, $nid, $educations);

    if ($stmt->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();


?>