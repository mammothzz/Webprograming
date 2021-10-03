<?php require_once "forgot-password_db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="gotpass.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password_db.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    
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
                    
                    <label>
                        <span>Enter email address</span>
                        <input type ="email"  name="email" require>
                    </label>
                    <button type="submit" name="check-email" class="submit" >Continue</button>
                    <p class="back">
                        <a href="index.php">Sing In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>