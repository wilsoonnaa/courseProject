<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($storedUsername, $storedEmail, $storedPassword) = explode(':', $user);
        if ($email === $storedEmail && password_verify($password, $storedPassword)) {
            $_SESSION['user_id'] = $storedUsername;
            $_SESSION['logged_in'] = true;
            header("Location: index.php");
            exit();
        }
    }
    echo "<script>alert('Incorrect email or password. Please try again.');</script>";
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
                        <h1>LOG IN</h1>
                    </div>
                    <div class="blocks">
                        <div class="article3">
                            <form action="/login.php" method="POST" class="passwordForm" id="loginForm">
                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="test@mail.ru" required>
                                </div>
                                <div>
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Your password" required>
                                </div>
                                <div>
                                    <button type="submit">Log In</button>
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