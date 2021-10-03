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
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="gotpass.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="reset-code.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info'];
                                unset($_SESSION['info']); ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                            <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                    </div>
                <?php endif ?>
                    
                    <label>
                        <span>Enter code</span>
                        <input type="number" name="otp" require>
                    </label>
                    <button type="submit" name="check-reset-otp" class="submit" >Submit</button>
                    <p class="back">
                        <a href="index.php">Sing In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>