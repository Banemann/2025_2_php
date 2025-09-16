<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <script src="app.js" defer></script>
    <title>Document</title>
</head>
<body>
    
<div id="container">

    <nav>
        <a href="">Twitter</a>
        <a href="">Home</a>
        <a href="">Explore</a>
        <a href="">Notifications</a>
        <a href="">Messages</a>
        <a href="">Grok</a>
        <a href="">Bookmarks</a>
        <a href="">Jobs</a>
        <a href="">Communities</a>
        <a href="">Premium</a>
        <a href="">Verified Orgs</a>
        <a href="">Profile</a>
        <a href="">More</a>
        <button>
            Post
        </button>
        <div>
            Santiago Donoso
        </div>
    </nav>


    <main>
        <div class="post">
            <div class="post_content">
                <img class="thumbnail" src="images/1.jpg">            
                <p>What's happening?</p>
            </div>
            <div class="post_actions">
                <img src="images/media.png" alt="">
                <img src="images/gif.png" alt="">
                <img src="images/poll.png" alt="">
                <img src="images/emoji.png" alt="">
                <img src="images/schedule.png" alt="">
                <button>
                    Post
                </button>
            </div>
        </div>

        <div class="feed">
            <div class="feed_post">
                <div class="post_header">
                    <img class="thumbnail" src="images/2.jpg">            
                    <div class="user_info">
                        <p class="name">Elon Musk</p>
                        <p class="username">@elonmusk</p>
                        <p class="time">. 2h</p>
                    </div>
                </div>
                <div class="post_body">
                    <p>This is my first post!</p>
                    <img class="post_image" src="images/post1.jpg" alt="">
                </div>
            </div>
            <div class="feed_post">
                <div class="post_header">
                    <img class="thumbnail" src="images/3.jpg">            
                    <div class="user_info">
                        <p class="name">Julia Roberts</p>
                        <p class="username">@juliaroberts</p>
                        <p class="time">. 4h</p>
                    </div>
                </div>
                <div class="post_body">
                    <p>Yoooooooooooooooooooooo</p>
                    <img class="post_image" src="images/post1.jpg" alt="">
                </div>
            </div>
        </div>
    </main>


    <aside>
        <form>
            <input type="text" placeholder="search">
        </form>
        <div class="likes">
            <h2>
                You might like
            </h2>
            <div>
                <div class="title">
                    <p>Trending in Denmark</p>
                    <p>Hot</p>
                </div>
                <div class="more">...</div>
            </div>
            <div>
                <div class="title">
                    <p>Better schools in Europe</p>
                    <p>Wild</p>
                </div>
                <div class="more">...</div>
            </div>
            <div>
                <div class="title">
                    <p>More people going to work</p>
                    <p>Nicer</p>
                </div>
                <div class="more">...</div>
            </div> 
            <a href="">
                Show more
            </a>                       
        </div>
        <div class="trending">
            <h2>
                Who to follow
            </h2>

            <div>
                <img class="thumbnail" src="images/1.jpg">            
                <div class="user_info">
                    <p>Santiago Donoso</p>
                    <p>@santi</p>
                </div> 
                <button>
                    Follow
                </button>               
            </div>

            <div>
                <img class="thumbnail" src="images/2.jpg">
                <div class="user_info">
                    <p>Anna Madsen</p>
                    <p>@annamadsen</p>
                </div> 
                <button>
                    Follow
                </button>               
            </div>            

            <div>
                <img class="thumbnail" src="images/3.jpg">
                <div class="user_info">
                    <p>Mauri Che</p>
                    <p>@mache</p>
                </div> 
                <button>
                    Follow
                </button>               
            </div> 

            <a href="">
                Show more
            </a>

        </div>
    </aside>

</div>


</body>
</html>