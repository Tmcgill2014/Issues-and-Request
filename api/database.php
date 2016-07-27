<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "Issues";
    private $username = "root";
    private $password = "";
    public $conn;

    // get the database connection
    public function getConnection(){ $this->conn = null;

       $this->conn = @new mysqli("localhost", "Issues", "root", "");
//            $this->conn = new mysqli($this->$host, $this->$username, $this->$password, $this->$db_name);
       if ($mysqli->connect_error) {
          die('Connect Error: ' . $mysqli->connect_error);
       }

        return $this->conn;
    }
}
?>