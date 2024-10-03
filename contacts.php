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
                    <div class="breadcrumbs">
                            <span>/ <a href="">Contacts & Faq</a> /</span>
                        </div>
                        <h1>Contacts & FAQ</h1>
                    </div>
                    <div class="blocks">
                        <div class="article2">
                            
                            <section class="accordion">
                                <div class="tab">
                                  <input type="checkbox" name="accordion-1" id="cb2">
                                  <label for="cb2" class="tab__label">WHAT IS SCAR3D.NET?</label>
                                  <div class="tab__content">
                                    <p>SCAR3D's goal is to empower artists and game developers to share blog posts about various game ideas, art concepts, techniques and more!</p>
                                    <p>Based on oldschool 3D forums, we seek to become a knowledge base for professionals and hobbyists alike who prefer a feed catered to their artistic tastes.</p>
                                  </div>
                                </div>
                                <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb3">
                                    <label for="cb3" class="tab__label">How can I post?</label>
                                    <div class="tab__content">
                                      <p>Anyone with an account can post as many times as they want! You can <a href="signup.php">sign up here.</a></p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb4">
                                    <label for="cb4" class="tab__label">How can I learn game art?</label>
                                    <div class="tab__content">
                                      <p>Our wiki is constantly updated with the best resources for learning on every category of game art. <a href="wiki.php">Check it out here.</a></p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb5">
                                    <label for="cb5" class="tab__label">I forgot my password</label>
                                    <div class="tab__content">
                                      <p>No worries! Simply head over to the <a href="forgot.php">password recovery page.</a></p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb6">
                                    <label for="cb6" class="tab__label">Contacts</label>
                                    <div class="tab__content">
                                      <p>For questions about the site or any other business inquiries, please email: <a href="mailto:avorobiovwilson@gmail.com">avorobiovwilson@gmail.com</a></p>
                                      <p>You can view the website's source code on <a href="https://github.com/wilsoonnaa/courseProject">Github.</a></p>
                                    </div>
                                  </div>
                            </section>
                        </div>
                        <?php include 'sidebar.php'; ?>
                    </div>
                </div>
            </main>
        
            <?php include 'footer.php'; ?>
        </div>
    
    </div>
</body>
</html>