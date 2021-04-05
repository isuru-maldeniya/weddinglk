<?php


namespace staffAuthenticationModel;
include_once 'dbConn/Database.php';

class authModel extends \dbConn\Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username,$password){
//        return true;
        $query="SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";

        $conn1=new \mysqli('localhost','root','','weddinglk','3306');

        $result=$this->conn->query($query);
        if($result->num_rows>=1){
            return true;
        }else {
            return false;
        }
    }


}