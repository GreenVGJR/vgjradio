<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login">Login</p>
 
        <form method="post" action="direct.php">
            <label>Username</label>
            <input type="text" name="username" class="form_login" required>

 
            <label>Password</label>
            <input type="password" name="password" class="form_login" required>
 
 
            <input type="submit" class="login" value="Login">
 
            <br/>
            <br/>
            <center>
                <p>Return to <a class="link" href="index.php">Page</a></p>
                <p>Belum punya Akun? <a class="link" href="register.php">Registasi</a></p>
            </center>
        </form>

    </div>
</body>
</html>