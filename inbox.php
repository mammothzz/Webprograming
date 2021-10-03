<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>

    <link rel="stylesheet" href="inbox.css">
</head>

<body>
    <!-- Navbar -->
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
                    function toggle() {
                        const dropdown = document.querySelector('.dropdown');
                        dropdown.classList.toggle('active');
                    }
                </script>
                <a onclick="toggleuser();">
                    <div class="icon user-picture"></div>
                </a>
                <div class="User-dropdown">
                    <ul>
                        <li>
                            <img src="img/user-icon.png" class="user-icon">
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <img src="img/bookmark.png" class="user-icon">
                            <a href="#">Saved</a>
                        </li>
                        <li>
                            <img src="img/gear.png" class="user-icon">
                            <a href="#">Setting</a>
                        </li>
                        <li>
                            <img src="img/replace.png" class="user-icon">
                            <a href="#">Switch Accounts</a>
                        </li>
                        <li>
                            <img src="img/logout.png" class="user-icon">
                            <a href="#">Logout</a>
                        </li>
                    </ul>
                </div>
                <script>
                    function toggleuser() {
                        const dropdown = document.querySelector('.User-dropdown');
                        dropdown.classList.toggle('active');
                    }
                </script>

            </div>
        </div>
    </nav>

    <div class="bg-container">
        <div class="inbox-container">
            <div class="user-online">
                <div class="user-online-header">
                    Message
                </div>

                <!-- Chat select -->
                <div class="user-message-select">

                    <!-- user select here -->
                    <div class="user-box" id="user" onclick="openChat()">

                        <!-- Profile -->
                        <div class="user-proflie">
                            <img src="img/114.jpeg" alt="proflie" width="100%" />
                            <div class="online-status"></div>
                        </div>

                        <div class="user-info">
                            <!-- Name -->
                            <div class="user-info-name">
                                @iam_linyi
                            </div>

                            <!-- Last Message -->
                            <div class="user-info-message">
                                What?!
                            </div>
                        </div>

                    </div>
                    <!-- end user -->

                </div>
            </div>

            <div class="message-show">

                <!-- None message show -->
                <div id="message-none" class="message-none-wrapper">
                    <div class="message-exp-ico">
                        <img src="img/comment.png" width="100%" />
                    </div>
                    <div class="message-exp-text">
                        Your message here
                    </div>
                </div>
                <!-- End message none -->

                <!-- Message show -->
                <div id="message-show" class="message-show-wrapper">

                    <!-- Partner's name -->
                    <div class="message-username">
                        @iam_linyi
                    </div>

                    <!-- Message dialog -->
                    <div class="message-cont">

                        <!-- Partner massage (Left) -->
                        <div class="message-box partner-box">

                            <!-- Profile -->
                            <div class="user-proflie">
                                <img src="img/114.jpeg" alt="proflie" height="100%" />
                            </div>

                            <!-- Message text -->
                            <div class="partner-msg">
                                Hi! make friend
                            </div>

                            <div class="blank-box"></div>

                        </div>

                        <!-- Owner message (Right) -->
                        <div class="message-box owner-box">

                            <div class="blank-box"></div>

                            <!-- Message text -->
                            <div class="owner-msg">
                                What?!
                            </div>
                        </div>

                    </div>

                    <!-- Input -->
                    <div class="message-send">
                        <div class="message-send-area">
                            <input type="text" class="text-input" placeholder="Message here...">
                            <button class="send-btn">
                                <img src="img/paper-plane.png" alt="" height="60%">
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End message show -->

            </div>
        </div>
    </div>

    <script>
        function openChat() {
            document.getElementById("message-show").style.visibility = 'visible';
            document.getElementById("message-none").style.visibility = 'hidden';
            document.getElementById("user").classList.add('active');
        }
    </script>

</body>

</html>