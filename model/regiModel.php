<?php


namespace model;
use Cassandra\Date;

include_once 'dbConn/Database.php';

class regiModel extends \dbConn\Database
{
    private $r;
    public function __construct()
    {
        parent::__construct();
    }

    public function register($name,$username,$email,$tel,$pass){
        $query="INSERT INTO `user`( `username`, `password`, `name`, `email`, `contact`) VALUES ('$username','$pass','$name','$email',$tel)";
        $result=$this->conn->query($query);
        return $this->conn->insert_id;
        $this->r=$result;
//        header("Location: firstview.php");
    }

    public function updatePassword($username,$password){
        $query="UPDATE `user` SET `password`='$password' WHERE `username`='$username'";
        $this->conn->query($query);
    }
    public function userNameRepititionCheck($username){
        $query="SELECT * FROM `user` WHERE `username`='$username'";
        $result=$this->conn->query($query);
        if($result->num_rows>=1){
            return true;
        }else{
            return false;
        }
    }

    public function  getEmail($username){
        $query="SELECT `email`,`name` FROM `user` WHERE `username`='$username'";
        $result=$this->conn->query($query);
        if($result->num_rows>0){
            return $result->fetch_assoc();
        }
    }
    public function addRoll($user_id,$roll){

        $date1=date("Y-m-d");
        $date2=date_create("2000-01-01");
        $default_id=1;
//        echo "\nbefore";
        $query="INSERT INTO `roll`(`roll_type`, `start_date`, `user_id`, `admin_id`) VALUES ($roll,'$date1',$user_id,$default_id)";
        $result=$this->conn->query($query);
        $res=$this->conn->insert_id;
//        echo "$result";
//        echo "\nafter";
//        echo "\n$this->r";
    }

}