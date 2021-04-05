<?php


namespace staffAuthenticationModel;
include_once 'dbConn/Database.php';

class fogModel extends \dbConn\Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function updatePassword($username,$password){
        $query="UPDATE `user` SET `password`='$password' WHERE `username`='$username'";
        $this->conn->query($query);

    }

}