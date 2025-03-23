<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

$success_message = isset($_SESSION["success"]) ? $_SESSION["success"] : "";
unset($_SESSION["success"]); // Remove message after displaying
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .popup {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #28a745; /* Green color for success */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: none;
        }
    </style>
</head>
<body>

<?php if (!empty($success_message)): ?>
    <div class="popup" id="success-popup">
        <?php echo $success_message; ?>
    </div>
    <script>
        document.getElementById("success-popup").style.display = "block"; // Show pop-up
        setTimeout(() => {
            document.getElementById("success-popup").style.display = "none";
        }, 3000); // Hide pop-up after 3 seconds
    </script>
<?php endif; ?>

<h1>Welcome to Home Page</h1>
<p>You are logged in as: <?php echo $_SESSION["email"]; ?></p>
<a href="logout.php">Logout</a>

</body>
</html>