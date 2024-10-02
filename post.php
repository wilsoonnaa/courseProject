<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['articleTitle'];
    $description = $_POST['articleDescription'];
    $content = $_POST['articleText'];
    $author = $_SESSION['user_id']; // Get the username from the session

    // Handle file upload
    $targetDir = "images/";
    $imageFileType = strtolower(pathinfo($_FILES["articleThumbnail"]["name"], PATHINFO_EXTENSION));
    $imageName = uniqid() . "." . $imageFileType; // Generate a unique filename
    $targetFile = $targetDir . $imageName;
    $uploadOk = 1;

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["articleThumbnail"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["articleThumbnail"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // If everything is ok, try to upload file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["articleThumbnail"]["tmp_name"], $targetFile)) {
            // Load existing posts
            $posts = [];
            if (file_exists('posts.json')) {
                $posts = json_decode(file_get_contents('posts.json'), true);
            }

            // Generate unique ID for the new post
            $postId = 'post_' . (count($posts) + 1);

            // Create post data
            $postData = [
                'id' => $postId,
                'title' => $title,
                'description' => $description,
                'content' => $content,
                'author' => $author,
                'thumbnail' => $imageName, // Store only the filename
                'timestamp' => date('Y-m-d H:i:s')
            ];

            // Add new post
            $posts[] = $postData;

            // Save updated posts
            if (file_put_contents('posts.json', json_encode($posts, JSON_PRETTY_PRINT)) === false) {
                echo "Error writing to posts.json";
            } else {
                echo "Post submitted successfully!";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
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
                <div class="content">
                    <div class="info">
                        <h1>WRITE A POST</h1>
                    </div>
                    <div class="blocks">
                        <div class="article2 border-gradient border-gradient-purple only-bottom">
                                <form id="articleForm" method="POST" enctype="multipart/form-data">
                                    <input type="text" id="articleTitle" name="articleTitle" placeholder="Article Name" required>
                                <br>
                                <div id="inputArea">
                                    <textarea id="articleDescription" name="articleDescription" rows="3" maxlength="300" placeholder="Write the article description here:" required></textarea>
                                <br>
                                    <textarea id="articleText" name="articleText" rows="20" placeholder="Write the text for your post here!" required></textarea>
                                <br>
                                    <input type="file" id="articleThumbnail" name="articleThumbnail" accept="image/*" required>
                                <br>
                                <button type="submit">Submit Article</button>
                                </div>
                                </form>
                        </div>
                        
                        <div class="sidebar hideOnMobile">
                        <?php include 'sb-post.php'; ?>
                        </div>
                    </div>
                </div>
            </main>
        
            <?php include 'footer.php'; ?>
        </div>
    
    </div>
</body>
</html>