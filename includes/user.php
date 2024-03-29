<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $username;


    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM tb_usuarios WHERE correoe = :user AND clave = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM tb_usuarios WHERE correoe = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['NOMBRECOMPLETO'];
            $this->username = $currentUser['CORREOE'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getUser(){
        return $this->username;
    }
}

?>