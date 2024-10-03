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
                            <div class="sb-wiki">
                                <a href="wiki.php">
                                <div class="wiki-title">
                                    <span>Resources</span>
                                    <img src="images/Literature.png" alt="Wiki icon">
                                </div>
                                </a>
                                <div class="wiki-list">
                                    <ul>
                                        <li><a href="wiki.php">Animation</a></li>
                                        <li><a href="wiki.php">Modeling</a></li>
                                        <li><a href="wiki.php">Character Art</a></li>
                                        <li><a href="wiki.php">Environment Art</a></li>
                                        <li><a href="wiki.php">Graphics</a></li>
                                    </ul>
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