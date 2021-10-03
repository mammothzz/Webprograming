<?php require_once "forgot-password_db.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="gotpass.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password_db.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; 
                                unset($_SESSION['info']);?>
                        </div>
                        <?php
                    }
                    ?>
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
                        <span>Create new password</span>
                        <input type="password" name="password" require>
                    </label>
                    
                    <label>
                        <span>Confirm your password</span>
                        <input type="password" name="cpassword" require>
                    </label>
                    <button type="submit" name="change-password" class="submit" >Change</button>
                    
                    <p class="back">
                        <a href="index.php">Sing In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>