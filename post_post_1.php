<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Post</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div id="container">
    <?php include 'navbar.php'; ?>
    
        <div class="scnd-container">
            <main>
                <div class="content">
                    <div class="info">
                        <h1>First Post</h1>
                        <div class="subinfo">
                            <div class="subinfoauthor">
                                <h6>John Doe</h6>
                            </div>
                            <div class="subinfodate">
                                <h6>October 1, 2024</h6>
                            </div>
                        </div>
                    </div>
                    <div class="blocks">
                        <div class="post-parent">
                            <div class="post-content">
                                <div class="thumbnail"><img src="images/nolongerhuman.jpg" alt="Post thumbnail"></div>
                                <div class="post-text border-gradient border-gradient-purple only-bottom">
                                <p>Content of the first post...</p>
                                </div>
                                <div class="post-share">
                                    <a href="#">SHARE THIS ARTICLE</a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar hideOnMobile">
                        <?php include 'sb-post.php'; ?>
                        </div>
                    </div>
                </div>
            </main>
        
            <?php include 'footer.php'; ?>
        </div>
    
    </div>
</body>
</html>