<?php
    include('Navbardropdown.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initia-scale=1.0">
    <title>Outstagram</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

      <!-- Post -->
    <section class="main">
        <div class="wrapper">
            <div class="left-col">
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/114.jpeg" alt=""></div>
                            <p class="username">@iam_linyi</p>
                        </div>
                        
                        <div class="menu-wrap">
                            <input type="checkbox" class="toggler">
                            <div class="hamburger"><div></div></div>
                            <div class="menu">
                              <div>
                                <div>
                                  <ul>
                                    <li><a style="color:red;" href="#">Delete</a></li>
                                    <li><a href="#">Go to post</a></li>
                                    <li><a href="#">Cancel</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <img src="img/113.jpg" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <img src="img/heart.png" class="icon" alt="">
                            <img src="img/messenger.png" class="icon" alt="">
                            <img src="img/send.png" class="icon" alt="">
                            <img src="img/save.png" class="save icon" alt="">
                        </div>
                        <p class="likes">100,012 likes</p>
                        <p class="description"><span>@iam_linyi </span>HELLO!! </p>
                        <div class="comment_contener">
                            <div class="comment_item"> 
                                <p><strong>@yugyeom</strong> wow!!!</p>
                            </div>
                        </div>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
                        <button class="comment-btn">post</button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="main">
        <div class="wrapper">
            <div class="left-col">
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/112.jpeg" alt=""></div>
                            <p class="username">@yugyeom</p>
                        </div>
                        
                        <div class="menu-wrap">
                            <input type="checkbox" class="toggler">
                            <div class="hamburger"><div></div></div>
                            <div class="menu">
                              <div>
                                <div>
                                  <ul>
                                    <li><a style="color:red;" href="#">Delete</a></li>
                                    <li><a href="#">Go to post</a></li>
                                    <li><a href="#">Cancel</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <img src="img/115.jpg" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <img src="img/heart.png" class="icon" alt="">
                            <img src="img/messenger.png" class="icon" alt="">
                            <img src="img/send.png" class="icon" alt="">
                            <img src="img/save.png" class="save icon" alt="">
                        </div>
                        <p class="likes">302,215 likes</p>
                        <p class="description"><span>@yugyeom</span>Good night </p>
                        <div class="comment_contener">
                            <div class="comment_item"> 
                                <p><strong>@iam_linyi</strong> OK </p>
                            </div>
                        </div>
                        <p class="post-time">5 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
                        <button class="comment-btn">post</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>