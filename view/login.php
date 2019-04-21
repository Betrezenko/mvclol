<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<body>

<form action="/controller/login_action.php" method="POST">
    <label for="label_login">Login</label>
    <input type="text" name="login" placeholder="Login" id="label_login" required><br />
    <label for="label_pass">Password</label>
    <input type="password" name="pass" placeholder="Password" id="label_pass" required><br />
    <input type="submit" value="Login">
</form>
</body>
</html>