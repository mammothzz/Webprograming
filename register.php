<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="Signup.css">
</head>
<body>
    <form action="register_db.php" method="post">
        <div class="cont">
            <div class="form sign-up">
                <img src="img/logos.png" class="logo">
                <label>
                    <span>E-mail</span>
                    <input type ="email"  name="Email" require>
                </label>
                <label>
                    <span>Fullname</span>
                    <input type ="text"  name="Fullname" require>
                </label>
                <label>
                    <span>Usename</span>
                    <input type ="text"  name="Username" require>
                </label>
                <label>
                    <span>Password</span>
                    <input type ="password"  name="password_1" require>
                </label>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                            <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                    </div>
                <?php endif ?>
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="success">
                    <h3>
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                    </div>
                <?php endif ?>
                <button type="submit" name="reg_user" class="submit" >Sign Up</button>
            </div>
        </div>
    </form>
    <div class="img">
        <div class="img__text ">
            <h2>One of us?</h2>
            <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img__btn">
            <a href="index.php">Sign In</a>
        </div>
    </div>
</body>
</html>