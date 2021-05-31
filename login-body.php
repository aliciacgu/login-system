<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login system</title>
</head>
<body>
    <header>
    <div>
    <?php
        if(isset($_SESSION["userId"])) {
            echo '<form action="archivos/logout.archivos.php" method="post">
                    <button type="submit" name="logout_submit">Logout</button>
                    </form>';
        }
        else {
            echo '<form action="archivos/login.archivos.php" method="post">
                    <input type="text" name="mailid" placeholder="Username/Email">
                    <input type="pasword" name="psw" placeholder="Pasword">
                    <button type="submit" name="login_submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>';
        }
    ?>
        
        
    </div>
    </header>
    <?php
      
    ?>
</body>
</html>