<?php

// Assuming you have a database connection established, replace these placeholders with your actual values.
$servername = "localhost";
$username = ""; 
$password = ""
$dbname = "email"; 

$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    exit("Invalid format!");
}

$api_key = "api_key=YOUR_ACTUAL_API_KEY";
$email_param = "email=$email";

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1/?$api_key&$email_param",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true
]);

$response = curl_exec($ch);

$data = json_decode($response, true);

curl_close($ch);

if ($data['deliverability'] === "UNDELIVERABLE") {
    exit("Undeliverable");
}

if ($data["is_disposable_email"]["value"] === true) {
    exit("Disposable");
}

// Check if the email already exists in the database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace 'your_table_name' with your actual table name
$sql_check = "SELECT * FROM usernames WHERE email = '$email'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    // Email already exists, give an error message
    exit("Error: Email already exists in the database.");
}

// Replace 'your_table_name' with your actual table name
$sql_insert = "INSERT INTO usernames(email) VALUES ('$email')";
if ($conn->query($sql_insert) === TRUE) {
    echo "Data saved successfully.";
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}

$conn->close();
?>
