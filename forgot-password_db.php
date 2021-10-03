<?php
    session_start();
    include('server.php');
    $email = "";
    $name = "";
    

    if(isset($_POST['recovery'])){
        header('location: forgot-password.php');
        
    }
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE user SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: outsagram@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: newset-otp.php');
                    exit();
                }else{
                    array_push($errors, "Failed while sending code!");
                    header('location: forgot-password.php');
                    
                }
            }else{
                array_push($errors, "Something went wrong!");
                header('location: Something went wrong!');
            }
        }else{
            array_push($errors, "This email address does not exist!");
            header('location: forgot-password.php');
            
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp = mysqli_real_escape_string($conn, $_POST['otp']);
        $query = "SELECT * FROM user WHERE code = '$otp'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            $fetch_data = mysqli_fetch_assoc($result);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            array_push($errors, "You've entered incorrect code!");
          
        }
    }



    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if($password !== $cpassword){
            $_SESSION['error'] = "Confirm password not matched!";
            header("location: new-password.php");
            
        }else{
            $email = $_SESSION['email']; //getting this email using session
            $password = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE user SET  password = '$password' WHERE email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                
                $_SESSION['success'] = "Your password changed. Now you can login with your new password.";
                header('Location: index.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }


?>