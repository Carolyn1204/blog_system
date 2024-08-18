<?php
require_once 'src/Post.php';

$post = new Post();

$results = $post->get_allPost();

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
        margin-top: 80px;
        margin-bottom: 30px;
    }

    .table {
        margin-top: 50px;
    }

    .table thead th {
        background-color: lightgray;
        font-size: 20px;
    }

    .table tr{
        height: 50px;
        line-height: 50px;
    }
</style>

<body>
    <div class="container col-md-6">
        <h1>Blog CMS</h1>
        <table class="table">
            <a href="add_blog.php" class="btn btn-primary">Add a New Blog</a>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Created_at</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($results as $row): ?>
                    <tr>
                        <th scope="row"><?php echo $row["id"]?></th>
                        <td><a href="read_blog.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]?></a></td>
                        <td><?php echo $row["author"]?></td>
                        <td><?php echo $row["created_at"]?></td>
                        <td>
                            <a href="edit_blog.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="src/delete_blog_handler.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                


            </tbody>
        </table>
    </div>

</body>

</html>