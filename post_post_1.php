<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pinball Wizard</title>
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
                        <div class="breadcrumbs">
                            <span>/ <a href="index.php">Trending</a> / The Pinball Wizard /</span>
                        </div>
                        <h1>The Pinball Wizard</h1>
                        <div class="subinfo">
                            <div class="subinfoauthor">
                                <h6>Gloria Levine</h6>
                            </div>
                            <div class="subinfodate">
                                <h6>October 1, 2024</h6>
                            </div>
                        </div>
                    </div>
                    <div class="blocks">
                        <div class="post-parent">
                            <div class="post-content">
                                <div class="thumbnail"><img src="images/pinballwizard.jpg" alt="Post thumbnail"></div>
                                <div class="post-text border-gradient border-gradient-purple only-bottom">
                                <p>The time has come to reimagine the iconic pinball game and sprinkle some magic into it, and that&#039;s exactly what The Pinball Wizard does. This dungeon crawler from Frosty Pop invites you to dash, hurl, and flip your way to the top of the tower castle while leveling up skills, looting treasure, and fighting monsters.Get (quite literally) thrown into action, explore the castle, and open new rooms with the keys you&#039;ve found to restore the power of The Eye and bring peace to the world. Each dungeon is an area inside the tower. You need to survive and get to the top of it alive. The Pinball Wizard will be released on October 27 on Steam. Check it out and don&#039;t forget to join our Reddit page and our Telegram channel, follow us on Instagram and Twitter, where we share breakdowns, the latest news, awesome artworks, and more.</p>
                                </div>
                                <div class="post-share">
                                    <a href="#" onclick="shareArticle(); return false;">SHARE THIS ARTICLE <img src="svg/Share.svg" alt=""></a>
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