<?php
    session_start();
    include('server.php'); 
?>
<?php
    if(isset($_POST["submit"])){
        $captcha=$_POST["g-recaptcha-response"];
        $secretkey="6LccEqccAAAAAM_BV65kGfsks_hXuvOm71Voep2o";
        $url='https://www.google.com/recaptcha/api/siteverify?secret='.urldecode($secretkey).'$response='.urldecode($captcha).'';
        $response = file_get_contents($url);
        $responseKey = json_decode($response,true);
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <form action="login_db.php" method="post">
        <div class="cont">
            <div class="form sign-in">
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
                <img src="img/logos.png" class="logo">
                
                <label>
                    <span>Usename</span>
                    <input type ="text"  name="username" require>
                </label>
                <label>
                    <span>Password</span>
                    <input type ="password"  name="password" require>
                </label>
                <p class="forgot-pass">
                    <a href="forgot-password.php">Forgot Password? </a>
                    
                </p>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h3>
                            <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                        </h3>
                    </div>
                <?php endif ?>
                <div class="g-recaptcha" data-sitekey="6LccEqccAAAAAPwtVTVabqAH9aA5UtBwhnmlutgv"></div>
                <button type="submit" name="login_user" class="submit">Sign In</button>

            </div>
        </div>
    </form>
    <div class="img">
        <div class="img__text ">
          <h2>New here?</h2>
          <p>Sign up and discover great amount </p>
          <p>of new opportunities!</p>
        </div>
        <div class="img__btn">
          <a href="register.php">Sign Up</a>
        </div>
    </div>

</body>
</html>