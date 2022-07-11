<?php

require_once "database.php";

class User extends Database{

    public function createUser($first_name, $last_name, $username, $password){
        
     $sql = "INSERT INTO `users` (`first_name`,`last_name`,`username`,`password`)
            VALUES ('$first_name', '$last_name', '$username', '$password')";

     if($this->conn->query($sql)){
        header("location: ../views");
     }
     else{
        die("Error in creating the user".$this->conn->connect_error);
     }
    }

    public function login($username,$password){

    $sql ="SELECT id, username, `password` FROM users WHERE username = '$username'";
    
    $result = $this -> conn -> query($sql);
    if($result->num_rows==1){
        $user_details = $result->fetch_assoc();
        if(password_verify($password, $user_details['password'])){
            session_start();

            $_SESSION['user_id'] = $user_details['id'];
            $_SESSION['username'] = $user_details['username'];
            
            header("location: ../views/dashboard.php");
            exit;
        }
        else{
            die("Password is incorrect");
        }
    }
    else{
        die("Username is incorrect");
    }
    }

    public function getUsers(){

        $sql = "SELECT id, first_name, last_name, username FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }
        else{
            die("Error in retrieving the users".$this->conn->error);
        }
    }

    public function getUser($user_id){
        $sql ="SELECT * FROM users WHERE id = $user_id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }
        else{
            die("Error in retrieving the user ".$this->conn->error);
        }
    }

}

?>