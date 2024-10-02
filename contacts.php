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
                    <div class="info">
                        <h1>Contacts & FAQ</h1>
                    </div>
                    <div class="blocks">
                        <div class="article2">
                            
                            <section class="accordion">
                                <div class="tab">
                                  <input type="checkbox" name="accordion-1" id="cb2">
                                  <label for="cb2" class="tab__label">Animation</label>
                                  <div class="tab__content">
                                    <p>Using <code>&lt;input type="checkbox"&gt;</code> allows to have several tabs open at the same time.</p>
                                  </div>
                                </div>
                                <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb3">
                                    <label for="cb3" class="tab__label">Modeling</label>
                                    <div class="tab__content">
                                      <p>Using <code>&lt;input type="checkbox"&gt;</code> allows to have several tabs open at the same time.</p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb4">
                                    <label for="cb4" class="tab__label">Character Art</label>
                                    <div class="tab__content">
                                      <p>Using <code>&lt;input type="checkbox"&gt;</code> allows to have several tabs open at the same time.</p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb5">
                                    <label for="cb5" class="tab__label">Environment Art</label>
                                    <div class="tab__content">
                                      <p>Using <code>&lt;input type="checkbox"&gt;</code> allows to have several tabs open at the same time.</p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb6">
                                    <label for="cb6" class="tab__label">Graphics Programming</label>
                                    <div class="tab__content">
                                      <p>Using <code>&lt;input type="checkbox"&gt;</code> allows to have several tabs open at the same time.</p>
                                    </div>
                                  </div>
                            </section>
                        </div>
                        <div class="sidebar hideOnMobile">
                            <div class="sb-post">
                                <span>POST</span>
                                <img src="svg/Create.svg" alt="Post button">
                            </div>
                            <div class="sb-hot">
                                <div class="sb-hot-title">
                                    <span>Hot n' fresh</span>
                                    <img src="svg/Fire.svg" alt="Fire Symbol">
                                </div>
                                <div class="sb-hot-articles">
                                    <div class="sb-hot-article">
                                        <div class="sb-hot-article-content">
                                            <p>Blender Glass Shader</p>
                                            <small>Alexander Wilson</small>
                                        </div>
                                        <div class="sb-hot-article-img">
                                            <img src="images/nolongerhuman.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="sb-hot-article">
                                        <div class="sb-hot-article-content">
                                            <p>Blender Glass Shader</p>
                                            <small>Alexander Wilson</small>
                                        </div>
                                        <div class="sb-hot-article-img">
                                            <img src="images/nolongerhuman.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="sb-hot-article">
                                        <div class="sb-hot-article-content">
                                            <p>Blender Glass Shader</p>
                                            <small>Alexander Wilson</small>
                                        </div>
                                        <div class="sb-hot-article-img">
                                            <img src="images/nolongerhuman.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="sb-hot-article">
                                        <div class="sb-hot-article-content">
                                            <p>Blender Glass Shader</p>
                                            <small>Alexander Wilson</small>
                                        </div>
                                        <div class="sb-hot-article-img">
                                            <img src="images/nolongerhuman.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sb-hot-more">
                                    <div class="sb-hot-button">
                                        <a href="index.html">MORE</a>
                                    </div>
                                </div>
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