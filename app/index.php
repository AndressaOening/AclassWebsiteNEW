<?php
// Simple PHP info page to verify the setup
echo "<h1>PHP Application is running!</h1>";

// Database connection test
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$db = getenv('DB_NAME');

echo "<h2>Database Connection Test:</h2>";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color:green'>Connected to database successfully!</p>";
} catch(PDOException $e) {
    echo "<p style='color:red'>Database Connection Error: " . $e->getMessage() . "</p>";
}

// Display PHP info
echo "<h2>PHP Info:</h2>";
phpinfo();
?>