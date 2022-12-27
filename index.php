<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social-media web</title>
    <!-- iconscout cdn -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- css -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav>
        <div class="container">
            <h2 class="log">
                Connect
            </h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search for creators, inspirations, and projects">
            </div>

            <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-photo">
                    <img src="./images/profile-1.jpg">
                </div>
            </div>
        </div>
    </nav>

    <!-- ---------main------------  -->
    <main>
        <div class="container">
            <!-- ===============left================ -->
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg">
                    </div>
                    <div class="handle">
                        <h4>SAMPLE</h4>
                        <p class="text-muted">
                            @sample
                        </p>
                    </div>
                </a>

                <!-- ======================= sidebar ================== -->

                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i></span><h3>Home</h3>
                    </a>

                    <a class="menu-item">
                        <span><i class="uil uil-compass"></i></span><h3>Explore</h3>
                    </a>

                    <a class="menu-item" id="notifications">
                        <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span><h3>Notifications</h3>
                        <!-- ========== Notification popup========== -->
                        <div class="notifications-popup">
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-2.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Benjamin</b> accepted your friend request
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>

                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-3.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>John Doe</b> commented on your post
                                    <small class="text-muted">1 HOUR AGO</small>
                                </div>
                            </div>

                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-4.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Mary Oppong</b> and <b>283 others</b> like your post
                                    <small class="text-muted">4 MINUTES AGO</small>
                                </div>
                            </div>
                            
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-5.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Doris Y.Lartey</b> commented on a post you are tagged in 
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>

                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-6.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Donald Trump</b> commented on a post you are tagged in 
                                    <small class="text-muted">2 HOUR AGO</small>
                                </div>
                            </div>

                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-7.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Jhone Smith</b> commented on a post you are tagged in 
                                    <small class="text-muted">2 HOUR AGO</small>
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------------end notification------------------ -->
                    </a>

                    <a class="menu-item" id="messages-notifications">
                        <span><i class="uil uil-envelope"><small class="notification-count">6</small></i></span><h3>Friends</h3>
                    </a>

                    <a class="menu-item">
                        <span><i class="uil uil-bookmark"></i></span><h3>Bookmarks</h3>
                    </a>

                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i></span><h3>Theme</h3>
                    </a>

                    <a class="menu-item" href="./contact-form/index.php">
                        <span><i class="uil uil-comment-lines"></i></span><h3>Contact Us</h3>
                    </a>

                    <a class="menu-item">
                        <span><i class="uil uil-setting"></i></span><h3>Settings</h3>
                    </a>
                </div>
                <!-- -------------------End of sidebar---------------------- -->
                <label for="create-post" class="btn btn-primary">Create Post</label>
            </div>

            <!-- ------------------End of left------------------- -->




            <!-- ============== middle ================= -->
            <div class="middle">
                <!-- ---------------------- stories ------------------ -->
                <div class="stories">
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-8.jpg">
                        </div>
                        <p class="name">Your Story</p>
                    </div>

                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-9.jpg">
                        </div>
                        <p class="name">Lilla James</p>
                    </div>

                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-10.jpg">
                        </div>
                        <p class="name">Winnie Hale</p>
                    </div>

                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-11.jpg">
                        </div>
                        <p class="name">Daniel Bale</p>
                    </div>

                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-12.jpg">
                        </div>
                        <p class="name">Jane Doe</p>
                    </div>

                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-13.jpg">
                        </div>
                        <p class="name">Tina White</p>
                    </div>
                </div>
                <!-- ------------------ End of Stories ----------------------- -->
                <form class="create-post">
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg">
                    </div>
                    <input type="text" placeholder="What's on your mind, Diana?" id="create-post">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>


                <!-- ---------------------------- Feeds ------------------------------ -->
                <div class="feeds">
                    <!-- ---------------------------- Feed 1st ------------------------------ -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-10.jpg">
                                </div>
                                <div class="info">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div> 
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-1.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,325 others</b></p>
                        </div>

                        <div class="caption">
                            <p> <b>Lana Rose</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>


                    <!-- ---------------------------- Feed 2 ------------------------------ -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-20.jpg">
                                </div>
                                <div class="info">
                                    <h3>Benjamin Dwayne</h3>
                                    <small>Miami, 2 HOURS AGO</small>
                                </div> 
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-4.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,325 others</b></p>
                        </div>

                        <div class="caption">
                            <p> <b>Lana Rose</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>


                    <!-- ---------------------------- Feed 3 ------------------------------ -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-18.jpg">
                                </div>
                                <div class="info">
                                    <h3>Malik Berry</h3>
                                    <small>Ghana, 1 MINUTES AGO</small>
                                </div> 
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-6.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,325 others</b></p>
                        </div>

                        <div class="caption">
                            <p> <b>Lana Rose</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>


                    <!-- ---------------------------- Feed 4 ------------------------------ -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-17.jpg">
                                </div>
                                <div class="info">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div> 
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-3.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,325 others</b></p>
                        </div>

                        <div class="caption">
                            <p> <b>Lana Rose</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>


                    <!-- ---------------------------- Feed 5 ------------------------------ -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-16.jpg">
                                </div>
                                <div class="info">
                                    <h3>Chris Brown</h3>
                                    <small>Dubai, 10 MINUTES AGO</small>
                                </div> 
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-5.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,325 others</b></p>
                        </div>

                        <div class="caption">
                            <p> <b>Lana Rose</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>


                    <!-- ---------------------------- Feed 6 ------------------------------ -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-8.jpg">
                                </div>
                                <div class="info">
                                    <h3>Michael David</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div> 
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-2.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,325 others</b></p>
                        </div>

                        <div class="caption">
                            <p> <b>Lana Rose</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>


                    <!-- ---------------------------- Feed 7 ------------------------------ -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-12.jpg">
                                </div>
                                <div class="info">
                                    <h3>Ama Jackie</h3>
                                    <small>Dubai, 5 MINUTES AGO</small>
                                </div> 
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-7.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,325 others</b></p>
                        </div>

                        <div class="caption">
                            <p> <b>Lana Rose</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>


                    <!-- --------------- End feed --------------------- -->
                </div>
                <!-- ------------------ end of feeds ----------------------- -->
            </div>
            <!-- ================================  End of Middle =============================== -->

            
            <!-- =================== right ================== -->
            <div class="right">
                <div class="messages">
                    <div class="heading">
                        
                        <h4>Friends</h4><a href="./ChatApp/index.php"><i class="uil uil-facebook-messenger"></i></a>
                    </div>
                    <!-- -------------------- Search bar -------------------- -->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search Friend" id="message-search">
                    </div>
                    <!-- -------------------- messages category ------------------- -->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(7)</h6>
                    </div>
                    <!-- ------------------------- Message ------------------------------- -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-17.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Edem Quist</h5>
                            <p class="text-muted">Just woke up bro!</p>
                        </div>
                    </div>

                    <!-- ------------------------- Message ------------------------------- -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-11.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Franca Deila</h5>
                            <p class="text-bold">Received bruh..Thanks!</p>
                        </div>
                    </div>

                    <!-- ------------------------- Message ------------------------------- -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-6.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Daniella Jackson</h5>
                            <p class="text-muted">lol u right</p>
                        </div>
                    </div>

                    <!-- ------------------------- Message ------------------------------- -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-5.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Juliet Makarey</h5>
                            <p class="text-bold">2 new messages</p>
                        </div>
                    </div>

                    <!-- ------------------------- Message ------------------------------- -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-4.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Jane Doe</h5>
                            <p class="text-bold">ok</p>
                        </div>
                    </div>

                    <!-- ------------------------- Message ------------------------------- -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-15.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Chantel Msiza</h5>
                            <p class="text-bold">Birthday Tomorrow!</p>
                        </div>
                    </div>
                </div>
                <!-- --------------------- end of messages -------------------= -->


                <!-- ------------------------- friend request ------------------------------- -->
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/profile-12.jpg">
                            </div>
                            <div>
                                <h5>Jennifer Lowrence</h5>
                                <p class="text-muted">
                                    8 mitual friends
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>


                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/profile-7.jpg">
                            </div>
                            <div>
                                <h5>Hajia Bintu</h5>
                                <p class="text-muted">
                                    2 mitual friends
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>


                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/profile-8.jpg">
                            </div>
                            <div>
                                <h5>Jackson Mensah</h5>
                                <p class="text-muted">
                                    15 mitual friends
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========================================= end right ================================== -->
        </div>
    </main>


<!-- =================== theme customization ===================== -->
<div class="customize-theme">
    <div class="card">
        <h2>Customize your view</h2>
        <p class="text-muted">Manage your font size, color, and background</p>

        <!-- ----------------- font size ------------------- -->

        <div class="font-size">
            <h4>Font Size</h4>
            <div>
                <h6>Aa</h6>
                <div class="choose-size">
                    <span class="font-size-1"></span>
                    <span class="font-size-2 active"></span>
                    <span class="font-size-3"></span>
                    <span class="font-size-4"></span>
                    <span class="font-size-5"></span>
                </div>
                <h3>Aa</h3>
            </div>
        </div>


        <!-- ------------- Primary colors ---------------- -->
        <div class="color">
            <h4>Color</h4>
            <div class="choose-color">
                <span class="color-1 active"></span>
                <span class="color-2"></span>
                <span class="color-3"></span>
                <span class="color-4"></span>
                <span class="color-5"></span>
            </div>
        </div>


        <!-- ------------------------- background color ----------------------- -->
        <div class="background">
            <h4>Background</h4>
            <div class="choose-bg">
                <div class="bg-1 active">
                    <span></span>
                    <h5 for="bg-1">Light</h5>
                </div>
                <div class="bg-2">
                    <span></span>
                    <h5 for="bg-2">Dim</h5>
                </div>
                <div class="bg-3">
                    <span></span>
                    <h5 for="bg-3">Lights Out</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./index.js"></script>
</body>

</html>