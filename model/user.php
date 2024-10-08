<?php

class User{
    public $id;
    public $username;
    public $password;

    public function __construct($id, $username, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;


    }

public function logIn(User $user, mysqli $conn){
    $query_string = "SELECT * FROM user 
    WHERE username '$user->username' 
    AND password = '$user->password' :";

    return $conn->query($query_string);


}

}



