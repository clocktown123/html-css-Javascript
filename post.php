<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $title = $_POST['title'];

    $content = $_POST['content'];

    echo"<h1>$title</h1><p>$content</p>";
}
?>


<!DOCTYPE html>
<html>
<head>
<style>
    h1 {
        font-family: Arial, sans-serif;
        font-size: 30px;
    }
</style>
    <title>My Blog</title>
</head>
<body>
    <h1>Welcome to my Blog</h1>
    <form action="post.php" method="post">

        <input type="text" name ="title" placeholder="Title"><br>

        <textarea name="content" placeholder="Content"></textarea><br>

        <input type="submit" value="Submit Post">
    </form>
</body>
</html>
