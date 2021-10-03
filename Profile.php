<?php 
    require_once('connection.php');
    require_once('Navbardropdown.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="test.css">
    <script src="https://kit.fontawesome.com/865e368061.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://www.google.com/jsapi"></script>

</head>
<body>



    <section class="profile_area">
        <div class="container">
            <div class="profile">
                <div class="profile_ima">
                    <img src="img/profile.jpg" class="userimg">
                </div>
                <div class="profile_info">
                    

                        <?php
                            $select_stmt = $db->prepare("SELECT * FROM tbl_person");
                            $select_stmt->execute();

                            

                           while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <div class="profile_info--top">
                            <h1> <?php echo $row["username"]; ?> </h1>
                            <a href="Editprofile.php?update_id=<?php echo $row["id"]; ?>" >Edit Profile</a>
                        </div>
                        <div class="status-bar">
                        <p> <?php echo $row["bio"]; ?> </p>
                        <p style="color:blue;cursor:pointer"> <?php echo $row["website"]; ?> </p>
                           </div>

                            
                        <?php } ?>

                    
                    <div class="profile_info--center">

                        <span><strong>7</strong> posts </span>

                        <a class="trigger_popup_fricc"><strong>4</strong> followers </a>
                        <div class="hover_bkgr_fricc">
                            <span class="helper"></span>
                            <div class="followers">
                                <div class="popupCloseButton">&times;</div>
                                <h3>followers</h3>
                                <div class="following_img">
                                    <img src="img/followers1.jpg" alt="">
                                    <p>@sk8soxer</p>
                                    <button class="button_follow" onClick = "document.location = 'Editprofile.html' "> Remove </button>
                                </div>
                                <div class="following_img">
                                    <img src="img/followers2.jpg" alt="">
                                    <p>@kokingka</p>
                                    <button class="button_follow" onClick = "document.location = 'Editprofile.html' "> Remove </button>
                                </div>
                                <div class="following_img">
                                    <img src="img/followers3.jpg" alt="">
                                    <p>@sosoalive</p>
                                    <button class="button_follow" onClick = "document.location = 'Editprofile.html' "> Remove </button>
                                </div>
                                <div class="following_img">
                                    <img src="img/followers4.jpg" alt="">
                                    <p>@browsuga</p>
                                    <button class="button_follow" onClick = "document.location = 'Editprofile.html' "> Remove </button>
                                </div>
            
        
                            </div>
                        </div>
                        
                        
                        <a class="trigger_popup_fricc2"><strong>2</strong> following</a>
                        <div class="hover_bkgr_fricc2">
                            <span class="helper2"></span>
                            <div class="following">
                                <div class="popupCloseButton2">&times;</div>
                                <h3>following</h3>
                                    <div class="following_img">
                                        <img src="img/following1.JPG" alt="">
                                        <p>@iam_linyi</p>
                                        <button class="button_follow" onClick = "document.location = 'Editprofile.html' "> following </button>
                                    </div>
                                    <div class="following_img">
                                        <img src="img/following2.JPG" alt="">
                                        <p>@yugyeom</p>
                                        <button class="button_follow" onClick = "document.location = 'Editprofile.html' "> following </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tabs_area">
        <div class="container">
            <div class="tabs">
                <div onclick="switchTab(event, 'tb_1')" class="tab-item active"><i class="fas fa-th"></i><strong>POSTS</strong></div>
                <div onclick="switchTab(event, 'tb_2')" class="tab-item"><i class="far fa-bookmark"></i><strong>SAVED</strong></div>
                <div onclick="switchTab(event, 'tb_3')" class="tab-item"><i class="fas fa-tags"></i><strong>TAGGED</strong></div>
            </div>

            <div class="tab_content">
                <div id="tb_1" class="tab_content--item">
                    <div class="gallery_grid">
                            <?php 
                                $select_stmt = $db->prepare('SELECT * FROM tbl_file'); 
                                $select_stmt->execute();

                                while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <div class="grid-img">                   
                                    <img src="img/<?php echo $row['image']; ?>" alt="">
                                </div>
                            <?php } ?>
                    </div>
                    <div class="btnn">
                        <a href="addimg.php" class="btn-success">Upload</a>
                        <a href="tableimg.php" class="btn-edit">Edit</a>
                    </div>
                </div>

                <div id="tb_2" class="tab_content--item tb_2">
                
                    <a class="trigger_popup_fricc3">+New Collection</a>
                    <div class="hover_bkgr_fricc3">
                        <span class="helper3"></span>
                        <div class="save">
                            <div class="popupCloseButton3">&times;</div>
                            <h3>Add From Saved</h3>
                            <div class="save_img">
                                <img src="img/1.png" alt="">
                                <img src="img/2.png" alt="">
                                <img src="img/6.png" alt="">
                        </div>
                    </div>
                
                </div>

                <div id="tb_3" class="tab_content--item tb_3">
                    
                </div>

            </div>
        </div>
    </section>


    
    <script src="script.js"></script>
    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>