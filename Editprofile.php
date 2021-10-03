<?php 
    require_once('connection.php');

    if (isset($_REQUEST['update_id'])) {
        try {
            $id = $_REQUEST['update_id'];
            $select_stmt = $db->prepare("SELECT * FROM tbl_person WHERE id = :id");
            $select_stmt->bindParam(':id', $id);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }

    if (isset($_REQUEST['btn_update'])) {
        $username_up = $_REQUEST['txt_username'];
        $bio_up = $_REQUEST['txt_bio'];
        $website_up = $_REQUEST['txt_website'];

        if (empty($username_up)) {
            $errorMsg = "Please Enter Username";
        } else if (empty($bio_up)) {
            $errorMsg = "Please Enter Bio";
        } else if (empty($website_up)) {
            $errorMsg = "Please Enter Website";
        } else {
            try {
                if (!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE tbl_person SET username = :username_up, bio = :bio_up, website = :website_up WHERE id = :id");
                    $update_stmt->bindParam(':username_up', $username_up);
                    $update_stmt->bindParam(':bio_up', $bio_up);
                    $update_stmt->bindParam(':website_up', $website_up);
                    $update_stmt->bindParam(':id', $id);

                    if ($update_stmt->execute()) {
                        $updateMsg = "Record update successfully...";
                        header("refresh:2;Profile.php");
                    }
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="editprofile.css">
    <script src="https://kit.fontawesome.com/865e368061.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://www.google.com/jsapi"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">

</head>
<body>

    <div class="container">
    <?php 
         if (isset($errorMsg)) {
    ?>
        <div class="alert alert-danger">
            <strong>Wrong! <?php echo $errorMsg; ?></strong>
        </div>
    <?php } ?>
    

    <?php 
         if (isset($updateMsg)) {
    ?>
        <div class="alert alert-success">
            <strong>Success! <?php echo $updateMsg; ?></strong>
        </div>
    <?php } ?>


    <div class="box1">
        <div class="box2">
            <strong>Edit Profile</strong>
        </div>        
            <div class="profile_ima">
                <img src="img/profile.jpg" class="userimg">
            </div>
        
        <div class="box3">
        <form method="post" class="form-horizontal mt-5">
            
            <div class="form-group text-center">
                <div class="row">
                    <label for="userame" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" name="txt_username" class="form-control" value="<?php echo $username; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="row">
                    <label for="bio" class="col-sm-3 control-label">Bio</label>
                    <div class="col-sm-8">
                        <input type="text" name="txt_bio" class="form-control" value="<?php echo $bio; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="row">
                    <label for="website" class="col-sm-3 control-label">Website</label>
                    <div class="col-sm-8">
                        <input type="text" name="txt_website" class="form-control" value="<?php echo $website; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="col-md-12 mt-3">
                    <input type="submit" name="btn_update" class="btn btn-success" value="Update">
                    <a href="Profile.php" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>