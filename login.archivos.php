<?php
if(isset($_POST["login_submit"])){
    require "bd.archivos.php";
    $mailuid=$_POST["mailid"];
    $password=$_POST["psw"];

    if(empty($mailuid) || empty($password)) {
        header("Location: ../login-brain.php?error=emptyfields");
    exit();
    }
    else {
        $sql="SELECT * FROM users WHERE uidusers=? OR emailUsers=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../login-brain.php?error=sqlerror");
            exit(); 
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $results=mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($results)){
                $pswcheck=password_verify($password, $row["pswUsers"]);
                if($pswcheck==false){
                    header("Location: ../login-brain.php?error=wrongpsw");
                    exit();  
                }
                elseif($pswcheck==true){
                    session_start();
                    $_SESSION["userId"]=$row["idusers"];
                    $_SESSION["userUid"]=$row["uidusers"];

                    header("Location: ../login-brain.php?success=loggedin");
                    exit();   
                }
                else {
                    header("Location: ../login-brain.php?error=wrongID");
                    exit();   
                }
            }
            else{
                header("Location: ../login-brain.php?error=noUser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../login-brain.php");
    exit();
}