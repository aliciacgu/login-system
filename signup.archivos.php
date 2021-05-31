<?php
if(isset($_POST["signup-submit"])) {

    require "bd.archivos.php";

    $username = $_POST["id"];
    $email = $_POST["mail"];
    $password = $_POST["psw"];
    $password_confirm = $_POST["psw-confirmation"];

    if (empty($username) || empty($email) || empty($password) || empty($password_confirm)) {
        header("Location: ../signup.php?error=emptyfields&id=".$username."&mail=".$email);
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?error=invalidemailandid");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&id=".$username);
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidid&mail=".$email);
        exit();
    }
    elseif($password !== $password_confirm) {
        header("Location: ../signup.php?error=passwordsdontmatch&mail=".$email."&id=".$username);
        exit();
    }
    else {
        $sql="SELECT uidusers FROM users WHERE uidusers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck=mysqli_stmt_num_rows($stmt);
            if($resultcheck>0){
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();   
            }
            else{
                $sql="INSERT INTO users (uidusers, emailUsers, pswUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else{
                    $hashedPsw = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPsw);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?success=signedup");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}
else {
    header("Location: ../signup.php");
    exit();
}