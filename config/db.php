<?php

class db{
    //database connection properties
    protected $host ='localhost';
    protected $user ='root';
    protected $password = '';
    protected $database ='blog';

    //conection property
    public $con = null;


    //call constracture
    public function __construct(){
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo"Fail".$this->con->connect_error;
        }
        echo'connection Successful!';

    }

    public function __destruct(){
        $this->closeConnection();
    }

    //for mysql closing connection
    protected function closeConnection(){
        if ($this->con!=null){
            $this->con->close();
            $this->con=null;
        }
    }
  
}