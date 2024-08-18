<?php
   
    require_once 'Model.php';

    class Post extends Model {
        public function __construct() {
            
            parent::__construct();
            
        }

        public function get_allPost() {
            $query = "SELECT * FROM blog_posts";
            $result = $this->query($query);
            return $result;
        }

        public function createPost($title, $author, $content) {

            $query = "INSERT INTO blog_posts (title, author, content, created_at) VALUES (:title, :author, :content, NOW())";
            $params = array(':title' => $title, ':author' => $author, ':content' => $content);
            $this->query($query, $params);
        }

        public function getPostById($id) {
            $query = "SELECT * FROM blog_posts WHERE id = :id";
            $params = array(':id' => $id);
            $result = $this->query($query, $params);
           //return $result->fetch(PDO::FETCH_ASSOC);
           return $result;
            }

        public function updatePostById($id, $title, $author, $content) {
            $query = "UPDATE blog_posts SET title = :title, author = :author, content = :content, created_at = NOW() WHERE id = :id";
            $params = array(':id' => $id, ':title' => $title, ':author' => $author, ':content' => $content);
            $this->query($query, $params);
        }

        public function deletePostById($id) {
            $query = "DELETE FROM blog_posts WHERE id = :id";
            $params = array(':id' => $id);
            $this->query($query, $params);
        }

        
}

// $post = new Post();

// $results = $post->get_allPost();
// foreach ($results as $row) {
//        // echo $row["author"];
//        print_r($row);

// }


?>