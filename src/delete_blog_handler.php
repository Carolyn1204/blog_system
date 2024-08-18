<?php
    require_once 'Post.php';

    $id = $_GET["id"];
    
    $post = new Post();
    
    try {
    $post->deletePostById( $id );
    echo ("<script> window.location = '../index.php';</script>");

    } catch ( Exception $e ) {
        echo "Delete failure". $e->getMessage() ."";
    }
?>