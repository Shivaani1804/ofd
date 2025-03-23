<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('ofd logo.jpg');
            background-size: cover;
            background-position: center;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.2);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease-in-out;
        }
        .login-container:hover {
            transform: scale(1.05);
        }
        h2 {
            color: black;
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 600;
        }
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: black;
            font-weight: 600;
        }
        .input-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.3);
            color: black;
            font-size: 16px;
            outline: none;
            transition: all 0.3s;
        }
        .input-group input:focus {
            border-color: brown;
            background: rgba(255, 255, 255, 0.5);
            transform: scale(1.02);
        }
        .input-group input::placeholder {
            color: black;
        }
        .login-btn {
            width: 100%;
            padding: 12px;
            background: brown;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: bold;
        }
        .login-btn:hover {
            background: #8b0000;
            transform: scale(1.05);
        }
        .forgot-password {
            margin-top: 10px;
        }
        .forgot-password a {
            color: black;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: color 0.3s;
        }
        .forgot-password a:hover {
            text-decoration: underline;
            color: brown;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="method1.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text"  name="email" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password"name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
            No Account<a href="signup.php">Create One!</a>

        </form>
    </div>
</body>
</html>
