<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $user = "$username:$email:$password\n";
    file_put_contents('users.txt', $user, FILE_APPEND);
    
    $_SESSION['user_id'] = $username;
    $_SESSION['logged_in'] = true;
    
    header("Location: index.php");
    exit();
}
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
                <div class="content centercontent">
                    <div class="info2">
                        <h1>SIGN UP</h1>
                    </div>
                    <div class="blocks">
                        <div class="article3">
                            <form action="/signup.php" method="POST" class="passwordForm" id="signForm">
                                <div>
                                    <label for="username">Username</label>
                                    <input type="text" id="username" name="username" placeholder="Your username" required>
                                </div>
                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="test@mail.ru" required>
                                </div>
                                <div>
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Your password" required>
                                </div>
                                <div>
                                    <button type="submit">SIGN UP</button>
                                </div>
                            </form>
                        </div>
                        
                        </div>
                    </div>
            </main>
        
            <?php include 'footer.php'; ?>
        </div>
    
    </div>
</body>
</html>