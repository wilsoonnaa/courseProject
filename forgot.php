<?php
session_start();

// Redirect to index if user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // In a real application, you would send a password reset email here
    // For this example, we'll just show an alert and redirect
    echo "<script>
        alert('Password reset instructions have been sent to your email.');
        window.location.href = 'login.php';
    </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCAR3D: Forgot Password</title>
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
                        <h1>Forgot Password</h1>
                    </div>
                    <div class="blocks">
                        <div class="article3">
                            <form action="" method="POST" class="passwordForm" id="forgotForm">
                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="flex-backup">
                                    <button type="submit">Submit</button>
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