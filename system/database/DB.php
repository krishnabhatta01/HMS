<?php

class db{

        private $server;
        private $dbname;
        private $username;
        private $password;
        private $connection;

    function __construct()
    {
        $this->server = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'official';
    }


    function connect()
    {
        $this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->dbname) or die('Error connecting to DB');
    }

    //create users
    function user($user)
    {
        $this->connect();
        extract($user);
        
        $sql = "INSERT INTO user VALUES(null, '$username','$password','$Post')";
        $result = mysqli_query($this->connection, $sql);
        if ($result == true) {
                return true;
            
        } else {
            return false;
        }
    }


    //Login
    function login($username, $password, $post)
    {
        $this->connect();

        $username = mysqli_real_escape_string($this->connection, $username);
        $password = mysqli_real_escape_string($this->connection, $password);
        $sql = "SELECT * FROM user WHERE username='$username' and password='$password' and Post='$post ";
        $result = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result) == 1){
           
                return true;
            
        } else {
            return false;
        }
    }

    //create patient
    function patient($patient)
    {
        $this->connect();
        extract($patient);

        $sql = "INSERT INTO patient VALUES(null, '$fname','$lname','$gender','$email','$phone','$uname','$pword')";
        $result = mysqli_query($this->connection, $sql);
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }


}//end of class

$db_object = new DB();


