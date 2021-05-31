<?php
    require "login-body.php";
?>


    <main>
    <?php
        if(isset($_SESSION["userId"])) {
            echo "<p>You are logged in!</p>";
        }
        else {
            echo "<p>Your are logged out!</p>";
        }
        ?>
    </main>

<?php
?>