<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
$current_user = $logged_in ? $_SESSION['user_id'] : null;
?>

<nav>
<div class="nv-content">
<ul class="nv-sidebar">
<li onclick="closeSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="#00FFD1" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
<li><?php if ($logged_in): ?>
    <a href="logout.php">Logout (<?php echo htmlspecialchars($current_user); ?>)</a>
<?php else: ?>
    <a href="login.php">Login</a>
<?php endif; ?></li>
<li><a href="post.php">Post</a></li>
<li><a href="index.php">Trending</a></li>
<li><a href="wiki.php">Wiki</a></li>
<li><a href="contacts.php">Contacts & Faq</a></li>
</ul>
<ul>
<li id="dt-logo" class="first"><a href="index.php" id="dt-logo">SCAR3D</a></li>
<li class="hideOnMobile nav-pd"><a class="highlight" href="index.php">Trending</a></li>
<li class="hideOnMobile"><a class="highlight" href="wiki.php">Wiki</a></li>
<li class="hideOnMobile"><a class="highlight" href="contacts.php">FAQ</a></li>
<li class="hideOnMobile"><a class="highlight" href="post.php">Post</a></li>
<li class="hideOnMobile last">
<?php if ($logged_in): ?>
    <a href="logout.php"><img class="acc-icon" src="svg/logout2.svg" alt="Logout"></a>
<?php else: ?>
    <a href="login.php"><img class="acc-icon" src="svg/Account.svg" alt="Login"></a>
<?php endif; ?>
</li>
<li class="menu-button last" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="#00FFD1" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
</ul>
</div>
</nav>