<?php

//the class giving the database connection
//if someone need database connection, has to extend that class from the thi class database and use $conn

namespace dbConn;
class Database
{
    public $conn;
    public function __construct(){

        $this->conn=new \mysqli('localhost','root','','weddinglk','3306');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

    }

    public function __destruct()
    {
        $this->conn->close();
    }

}