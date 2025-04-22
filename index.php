<?php
session_start();
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // do something
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin123") {
        $_SESSION["admin"] = true;
        $_SESSION["admin_id"] = 1; // ✅ Hardcoded admin ID
        header("Location: dashboard.php");
        exit();
    }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Pili Nuts Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">
    <div class="login-container">
        <h1>Pili Nuts Admin Login</h1>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
        </form>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </div>
</body>
</html>