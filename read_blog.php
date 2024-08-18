<?php
require_once 'src/Post.php';
require 'vendor/autoload.php';

use League\CommonMark\CommonMarkConverter;

$converter = new CommonMarkConverter();

$id = $_GET["id"];

$post = new Post();
$result = $post->getPostById($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    h1 {
        margin-top: 80px;
        margin-bottom: 50px;
    }

    .mb-5 {
        font-weight: 600;
        font-size: 18px;
    }

    .form-label {
        font-size: 22px;
        font-weight: 700;
        font-style: italic;
    }
</style>

<body>
    <div class="container col-md-6">
        <h1>Read Blog</h1>
        <?php foreach($result as $row):?>
        <div class="mb-5">
            <label for="title" class="form-label">Title:</label><br>
            <?php echo $row["title"]; ?>     
        </div>
        <div class="mb-5">
            <label for="author" class="form-label">Author:</label><br>
            <?php echo $row["author"]; ?>  
        </div>
        <div class="mb-5">
            <label for="content" class="form-label">Content:</label><br>
            <?php $html = $converter->convertToHtml($row["content"]);
                echo $html; 
            ?>  
        </div>
        <?php endforeach; ?>
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>

</body>

</html>