<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ofd";
$port = "3307";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (!preg_match("/^[0-9]{10,15}$/", $phoneno)) {
        die("<script>alert('Invalid phone number! Must be 10-15 digits.'); window.location.href='signup.php';</script>");
    }
  
    echo "Password entered: " . $password; 

    
    if (empty($password)) {
        echo "<script>
                alert('Password cannot be empty!');
                window.location.href='signup.php';
              </script>";
        exit();
    }

    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO users (username, phone, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $phone, $email, $password);

    if ($stmt->execute()) {
        echo "<script>
                alert('Registration successful!');
                window.location.href='login.php'; // Redirect to login page
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $stmt->error . "');
                window.location.href='signup.php';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>
