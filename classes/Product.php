<?php
require_once('../inc/config.php');

class Product
{

    public $host = DB_HOST;
    public $dbname  = DB_NAME;
    public $user = DB_USER;
    public $pass = DB_PASSWORD;


    public $conn;
    public $err;



    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->dbname
        );
        if (!$this->conn) {
            $this->error = "Connection fail" . $this->conn->connect_error;
            return false;
        }
    }

    public function Create($query)
    {
    }
    //Read Data from Database
    public function Select($query)
    {

        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            
            $data = array();
            while($row = $result->fetch_assoc()){
                array_push($data,$row);
            }
            //return the data as array
            return $data;
        } else {
            //return false if data < 0
            return false;
        }
    }

    public function Update()
    {
    }

    public function Delete()
    {
    }
}
