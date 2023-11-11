<?php require_once('inc/connection.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in - user management system</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="login">
        <form action="index.php" method="post">
            <fieldset>
                <legend>
                    <h1>
                        login
                    </h1></legend>
                    <p class="error">Invalid Username or Password</p>
                    <p>
                        <label for="">Username:</label>
                        <input type="email" name="email" id="" placeholder="Email Address">
                    </p>
                    <p>
                        <label for="">Password:</label>
                        <input type="password" name="password" id="" placeholder="Password">
                    </p>
                    <p>
                        <button>Login</button>
                    </p>
                
            </fieldset>
        </form>
    </div>
    
</body>
</html>
<?php mysqli_close($connection); ?>