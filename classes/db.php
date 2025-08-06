<?php
class DB
{
    public $hostname;
    public $username;
    public $password;
    public $database;
    public $connect;

    public function __construct($hostname, $username, $password, $database)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }

    public function connect()
    {
        $this->connect =  mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
    }
}
