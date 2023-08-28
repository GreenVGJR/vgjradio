<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login">Registasi</p>
 
        <form method="post" action="redirect.php">
            <label>Username</label>
            <input type="text" name="username" class="form_login" required>

 
            <label>Password</label>
            <input type="password" name="password" class="form_login" required>
 
 
            <input type="submit" name="register" class="register" value="Create">
 
            <br/>
            <br/>
            <center>
                <p>Return to <a class="link" href="index.php">Page</a></p>
            </center>
        </form>

    </div>
</body>
</html>