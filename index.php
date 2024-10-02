<?php
session_start();

// Simple session check
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load the posts from the JSON file
$postsJson = file_get_contents('posts.json');
$posts = json_decode($postsJson, true);

// Sort posts by timestamp in descending order (newest first)
usort($posts, function($a, $b) {
    $timeA = isset($a['timestamp']) ? strtotime($a['timestamp']) : 0;
    $timeB = isset($b['timestamp']) ? strtotime($b['timestamp']) : 0;
    return $timeB - $timeA;
});

function createPostPage($post) {
    $filename = 'post_' . $post['id'] . '.php';
    $content = file_get_contents('template.php');
    $content = str_replace('{{TITLE}}', htmlspecialchars($post['title']), $content);
    $content = str_replace('{{AUTHOR}}', htmlspecialchars($post['author']), $content);
    $content = str_replace('{{DATE}}', date('F j, Y', strtotime($post['timestamp'])), $content);
    $content = str_replace('{{CONTENT}}', htmlspecialchars($post['content']), $content);
    $content = str_replace('{{THUMBNAIL}}', htmlspecialchars($post['thumbnail']), $content);
    file_put_contents($filename, $content);
}

// Create individual post pages
foreach ($posts as $post) {
    createPostPage($post);
}

// HTML output starts here
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
                        <h1>LATEST ARTICLES</h1>
                    </div>
                    <div class="blocks">
                        <div class="articles border-gradient border-gradient-purple only-bottom">
                        <?php foreach ($posts as $post): ?>
    <a class="article-link" href="post_<?php echo htmlspecialchars($post['id']); ?>.php">
        <div class="article">
            <div class="article-text">
                <div class="article-title">
                    <?php echo htmlspecialchars($post['title']); ?>
                </div>
                <div class="article-desc">
                    <?php echo htmlspecialchars($post['description']); ?>
                </div>
                <div class="article-info">
                    <div class="article-date"><?php echo date('F j, Y', strtotime($post['timestamp'])); ?></div>
                    <div class="article-author"><?php echo htmlspecialchars($post['author']); ?></div>
                </div>
            </div>
            <div class="article-img">
                <img src="images/<?php echo htmlspecialchars($post['thumbnail']); ?>" alt="Article Cover">
            </div>
        </div>
    </a>
<?php endforeach; ?>
                        </div>
                        <div class="sidebar hideOnMobile">
                            <div class="sb-post">
                                <span>POST</span>
                                <img src="svg/Create.svg" alt="Post button">
                            </div>
                            <div class="sb-wiki">
                                <div class="wiki-title">
                                    <span>CATEGORIES</span>
                                    <img src="svg/Create.svg" alt="Wiki icon">
                                </div>
                                <div class="wiki-list">
                                    <ul>
                                        <li>Animation</li>
                                        <li>Character</li>
                                        <li>Concept</li>
                                        <li>Environment</li>
                                    </ul>
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