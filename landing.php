<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCAR3D: The portal for everything 3d.</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div id="container">
        
    <?php include 'navbar.php'; ?>
        <div class="scnd-container">
            <main>
                <div class="content">
                    <div class="landing">
                        <div class="landing-main">
                            <div class="landing-main-left">
                                <h1>SCARED OF 3D?<br>COMMUNITY ARTICLES<br>ON EVERYTHING 3D.</h1>
                                <h5>GAMES, ANIMATION, MOTION DESIGN, ETC.<br>FIND YOUR VICE ON SCAR3D.</h5>
                            </div>
                            <div class="landing-main-right">
                                <img src="images/3dicons.png" alt="Blender logo" class="landing">
                            </div>
                        </div>
                        <div class="landing-points">
                            <div class="bullet">
                                <span>NO READING LIMIT</span>
                            </div>
                            <div class="bullet">
                                <span>ARTICLES FROM INDUSTRY PROFESSIONALS</span>
                            </div>
                            <div class="bullet">
                                <span>ONLY EMAIL REQUIRED</span>
                            </div>
                        </div>
                        <div class="landing-reg">
                            <div class="reg-text">
                                <span>REGISTER NOW</span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        
            <?php include 'footer.php'; ?>
        </div>
    
    </div>
</body>
</html>