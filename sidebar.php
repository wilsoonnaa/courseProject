<?php
$defaultIcon = 'svg/Create.svg';
$hoverIcon = 'svg/Create2.svg';
?>

<div class="sidebar hideOnMobile">
                            <a href="post.php">
                            <div class="sb-post">
                                <span>POST</span>
                                <img src="<?php echo $defaultIcon; ?>" alt="Icon" data-default="<?php echo $defaultIcon; ?>" data-hover="<?php echo $hoverIcon; ?>">
                            </div>
                            </a>
                            <div class="sb-hot">
                                <div class="sb-hot-title">
                                    <span>Hot n' fresh</span>
                                    <img src="svg/Fire.svg" alt="Fire Symbol">
                                </div>
                                <div class="sb-hot-articles">
                                <div class="sb-hot-article">
                                        
                                        <div class="sb-hot-article-content">
                                            <a href="article.php">
                                            <p>No Longer Human</p>
                                            <small>Alex Wilson</small>
                                            </a>
                                        </div>
                                        
                                        <div class="sb-hot-article-img">
                                            <a href="article.php">
                                            <img src="images/nolongerhuman.jpg" alt="Article Img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sb-hot-article">
                                        
                                        <div class="sb-hot-article-content">
                                            <a href="post_post_1.php">
                                            <p>The Pinball Wizard</p>
                                            <small>Gloria Levine</small>
                                            </a>
                                        </div>
                                        
                                        <div class="sb-hot-article-img">
                                            <a href="post_post_1.php">
                                            <img src="images/pinballwizard.jpg" alt="Article Img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sb-hot-article">
                                        
                                        <div class="sb-hot-article-content">
                                            <a href="post_post_2.php">
                                            <p>Allegorithmic Joins Adobe</p>
                                            <small>Arti Sergeev</small>
                                            </a>
                                        </div>
                                        
                                        <div class="sb-hot-article-img">
                                            <a href="post_post_2.php">
                                            <img src="images/adobe.png" alt="Article Img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sb-hot-article">
                                        
                                        <div class="sb-hot-article-content">
                                            <a href="post_post_3.php">
                                            <p>GTA 3 Deathmatch Mode</p>
                                            <small>Gloria Levine</small>
                                            </a>
                                        </div>
                                        
                                        <div class="sb-hot-article-img">
                                            <a href="post_post_3.php">
                                            <img src="images/gta3.jpg" alt="Article Img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sb-hot-more">
                                    <div class="sb-hot-button">
                                        <a href="index.php">MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
document.addEventListener('DOMContentLoaded', function() {
    var post = document.querySelector('.sb-post');
    var img = post.querySelector('img');
    
    post.addEventListener('mouseover', function() {
        img.src = img.dataset.hover;
    });
    
    post.addEventListener('mouseout', function() {
        img.src = img.dataset.default;
    });
});
</script>