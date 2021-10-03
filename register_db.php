<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['Email']);
        $fullname = mysqli_real_escape_string($conn, $_POST['Fullname']);
        $username = mysqli_real_escape_string($conn, $_POST['Username']);
        $password = mysqli_real_escape_string($conn, $_POST['password_1']);

        if (empty($email)) {
            array_push($errors, "Email is required");
            $_SESSION['error'] = "Email is required";
            header("location: register.php");
        }
        else if (empty($fullname)) {
            array_push($errors, "Fullname is required");
            $_SESSION['error'] = "Fullname is required";
            header("location: register.php");
        }
        else if (empty($username)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
            header("location: register.php");
        }
        
        else if (empty($password)) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = " Password is required ";
            header("location: register.php");
        }

        $user_check_query = "SELECT * FROM user WHERE Username = '$username' OR Email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {
            if ($result['Username'] === $username) {
                array_push($errors, "Username already exists");
                $_SESSION['error'] = " Username already exists ";
                header("location: register.php");
            }
            if ($result['Email'] === $email) {
                array_push($errors, "Email already exists");
                $_SESSION['error'] = " Email already exists ";
                header("location: register.php");
            }
        }

        if (count($errors) === 0) {
            $password_1 = md5($password);

            $sql = "INSERT INTO user (Fullname,Username, Email, password) VALUES ('$fullname','$username', '$email', '$password_1')";
            mysqli_query($conn, $sql);

            $_SESSION['success'] = "Sign Up completed";
            header('location: register.php');
        } else {
            header("location: register.php");
        }
    }
