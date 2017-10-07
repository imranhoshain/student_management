<?php
namespace App\admin\auth;
use App\Connection;
use PDO;
use PDOException;
class Auth extends Connection{
    private $id;
    private $user;
    private $email;
    private $password;
    public function set($data = array()){
        if(array_key_exists('id',$data)){
            $this->id = $data['id'];
        }
        if(array_key_exists('user',$data)){
            $this->user = $data['user'];
        }
        if(array_key_exists('email',$data)){
            $this->email = $data['email'];
        }
        if(array_key_exists('password',$data)){
            $this->password = $data['password'];
        }
        return $this;
    }
    public function store(){
        try {
            $query = ("INSERT INTO `auth`(`user`, `email`, `password`) VALUES(:user, :email, :password)");
            $stmt = $this->con->prepare($query);
            $result = $stmt->execute(array(
            ':user' => $this->user,
            ':email' => $this->email,
            'password' => $this->password
            ));
            if($result){
                $_SESSION['store'] = "Admin Sucessfully Inserted";
                header('location: login.php');
            }
        }
        catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "</div>";
            die();
        }
    }
    public function login(){
        try {
            $query = ("SELECT * FROM `auth`");
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "</div>";
            die();
        }
    }
}