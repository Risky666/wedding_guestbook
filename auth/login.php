<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Wedding Organizer</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #fffaf0, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #ffffff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            border: 2px solid #d4af37;
        }
        h2 {
            color: #d4af37;
            margin-bottom: 24px;
            font-size: 26px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 20px;
            border: 1px solid #d4af37;
            border-radius: 8px;
            font-size: 16px;
            background-color: #fffefb;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #d4af37;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #c5a12f;
        }
    </style>
</head>
<body>

<form method="post" action="login_process.php"> <!--Ketika form disubmit akan mengarah ke login_process.php untuk logikanya -->
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" required><br> 
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

</body>
</html>
