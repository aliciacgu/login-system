<?php
    require "login-body.php";
?>


    <main>
        <div>
            <section>
            <h1>Signup</h1>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]=="emptyfields"){
                        echo "<p>Fill in all fields</p>";
                    }
                    elseif($_GET["error"]=="invalidemailandid"){
                        echo "<p>Invalid Email and ID</p>";
                    }
                    elseif($_GET["error"]=="invalidemail"){
                        echo "<p>Invalid Email</p>";
                    }
                    elseif($_GET["error"]=="invalidid"){
                        echo "<p>Invalid ID</p>";
                    }
                    elseif($_GET["error"]=="passwordsdontmatch"){
                        echo "<p>Your confirmation password doesn't match</p>";
                    }
                    elseif($_GET["error"]=="sqlerror"){
                        echo "<p>Problems connecting to the DB</p>";
                    }
                    elseif($_GET["error"]=="usertaken"){
                        echo "<p>That user is already taken</p>";
                    }
                }
            ?>
            <form action="archivos/signup.archivos.php" method="post">
                <input type="text" name="id" placeholder="Username">
                <input type="text" name="mail" placeholder="Email">
                <input type="password" name="psw" placeholder="Password">
                <input type="password" name="psw-confirmation" placeholder="Password confirmation">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
            </section>
    </main>

<?php
?>