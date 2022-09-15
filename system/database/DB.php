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
        
        $sql = "INSERT INTO user VALUES(null, '$uname','$pword','$post', null)";
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


    function get_user_data()
    {
        $this->connect();
        $sql = "SELECT * FROM user ";
        $result = mysqli_query($this->connection, $sql);
        $row_num = mysqli_num_rows($result);
        if ($row_num == 0) {
            return false;
        } else {
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }
    }

    function delete_user($id)
    {
        $this->connect();
        $sql = "DELETE FROM user WHERE id='$id' ";
        $result = mysqli_query($this->connection, $sql);
        //$row = mysqli_fetch_assoc($result);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function delete_patient($id)
    {
        $this->connect();
        $sql = "DELETE FROM patient WHERE id='$id' ";
        $result = mysqli_query($this->connection, $sql);
        //$row = mysqli_fetch_assoc($result);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    //get total number of Doctor
    function get_doctor()
    {
        $this->connect();
        $sql = "SELECT * FROM doctb ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($this->connection, $sql);
        
        
            while ($row = mysqli_fetch_assoc($result)) {
                
                return $row;
            }
        
        
    }

    //get total number of Patient
    function get_patient()
    {
        $this->connect();
        $sql = "SELECT * FROM patient ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($this->connection, $sql);


        while ($row = mysqli_fetch_assoc($result)) {

            return $row;
        }
    }

    //get all of Patient
    function get_all_patient()
    {
        $this->connect();
        $sql = "SELECT * FROM patient;";
        $result = mysqli_query($this->connection, $sql);
        $row_num = mysqli_num_rows($result);
        if ($row_num == 0) {
            return false;
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        }
    }


    //get total number of Admin
    function get_admin()
    {
        $this->connect();
        $sql = "SELECT * FROM user WHERE Post='Admin' ORDER BY id DESC LIMIT 1 ;";
        $result = mysqli_query($this->connection, $sql);


        while ($row = mysqli_fetch_assoc($result)) {

            return $row;
        }
    }



}//end of class

$db_object = new DB();


