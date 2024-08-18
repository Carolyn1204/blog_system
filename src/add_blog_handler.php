<?php
require_once 'Post.php';
require '../vendor/autoload.php';

use Respect\Validation\Validator as v;

if (isset($_POST)) {
    $title = htmlspecialchars($_POST["title"]);
    $author = htmlspecialchars($_POST["author"]);
    $content = htmlspecialchars($_POST["content"]);

    if (v::notEmpty()->validate($title) && v::notEmpty()->validate($author) && v::notEmpty()->validate($content)) {
        $post = new Post();
        $post->createPost($title, $author, $content);
        echo ("<script type='text/javascript'>alert(`Add Successfully!`);</script>");
        echo ("<script> window.location = '../index.php';</script>");
    } else {
        echo ("<script type='text/javascript'>alert(`Title, Author and Content cannot be empty!`);</script>");
        echo ("<script> window.location = '../add_blog.php';</script>");
    }

}



?>