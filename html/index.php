<h1>Hi There!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'db';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";
?>