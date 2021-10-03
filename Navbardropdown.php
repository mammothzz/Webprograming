<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initia-scale=1.0">
    <title>Outstagram</title>

    <link rel="stylesheet" href="test.css">
</head>

<body>
    
    <nav class="navbar">
        <div class="nav-wrapper">
            <img src="img/logo.PNG" class="logo">
            <input type="text" class="search-box" placeholder="search">
            <div class="nav-icon">
                <a href="homepage.php"><img src="img/home.PNG" class="icon"></a>
                <a href="inbox.php"><img src="img/messenger.PNG" class="icon"></a>
                <a href="search.php"><img src="img/explore.PNG" class="icon"></a>
                <img src="img/like.PNG" class="icon" onclick="toggle();">
                <div class="dropdown">
                    <ul>
                        <li>
                            <img src="img/like 1.png" class="like-picture">
                            <a href="#"><b>Zara</b> started following you.</a>
                        </li>
                        <li>
                            <img src="img/like 1.png" class="like-picture">
                            <a href="#"><b>Zara</b> like your post.</a>
                        </li>
                        <li>
                            <img src="img/like 2.png" class="like-picture">
                            <a href="#"><b>James</b> like your post.</a>
                        </li>
                        <li>
                            <img src="img/like3.png" class="like-picture">
                            <a href="#"><b>Chip</b> and <b>Dale</b> started following you.</a>
                        </li>
                    </ul>
                </div>

                <script>
                    function toggle(){
                        const dropdown = document.querySelector('.dropdown');
                        dropdown.classList.toggle('active');
                    }
                </script>
                <a onclick="toggleuser();"><div class="icon user-picture"></div></a>
                <div class="User-dropdown">
                    <ul>
                        <li>
                            <img src="img/user-icon.png" class="user-icon">
                            <a href="Profile.php">Profile</a>
                        </li>
                        <li>
                            <img src="img/bookmark.png" class="user-icon">
                            <a href="#">Saved</a>
                        </li>
                        <li>
                            <img src="img/gear.png" class="user-icon">
                            <a href="Editprofile.php">Edit Profile</a>
                        </li>
                        <li>
                            <img src="img/logout.png" class="user-icon">
                            <a href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <script>
                    function toggleuser(){
                        const dropdown = document.querySelector('.User-dropdown');
                        dropdown.classList.toggle('active');
                    }
                </script>

            </div>
        </div>
      </nav>

</body>
</html>