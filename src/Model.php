<?php



class Model {
    
    protected $conn;
 
    
    public function __construct() {
    
        
        try {
            
            $this->conn = new PDO('mysql:host=localhost;dbname=blog_cms', 'root', 'root_2024');
            
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            
            die("database connection failure: " . $e->getMessage());
        }
    }

    public function query($query, $params = array()) {
        $result = $this->conn->prepare($query);
        $result->execute($params);
        return $result;
    }
 
    
}



// $model = new Model();
// $query = "SELECT * FROM blog_posts";
// $results = $model->query($query);
// foreach ($results as $row) {
//     print_r($row);
// }


 
?>