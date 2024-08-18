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
    <title>Blog CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    h1 {
        margin-top:50px;
        margin-bottom:30px;
    }

    .form-label {
        font-size: 18px;
        font-weight: 600;
    }
</style>

<body>
    <div class="container col-md-6">
        <h1>Edit Blog</h1>
        <form action="src/edit_blog_handler.php" method="post">
            <input type="text" name="hiddenId" style="visibility:hidden;" value="<?php echo $id; ?>">
            <!-- <span name="hiddenId" style="visibility:hidden;"><?php echo $id; ?></span> -->
            <?php foreach($result as $row):?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $row["title"]; ?>">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="<?php echo $row["author"]; ?>"> 
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea type="text" class="form-control" id="content" style="height: 500px" name="content"><?php echo $row["content"]; ?></textarea>
            </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>

</body>

</html>