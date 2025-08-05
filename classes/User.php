<?php
include("DB.php");

class User extends DB
{

    public function __construct($hostname, $username, $password, $database)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }

    public  function get()
    {
        return $this->connect->query("SELECT * FROM users")->fetch_all(MYSQLI_ASSOC);
    }

    public  function getById($id)
    {
        return $this->connect->query("SELECT * FROM users WHERE id='$id'")->fetch_assoc();
    }

    public function create($name, $username, $password)
    {
        return $this->connect->query("INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')");
    }

    public function update($id, $name, $username, $password)
    {
        return $this->connect->query("UPDATE users SET name='$name', username='$username', password='$password' WHERE id='$id'");
    }

    public function delete($id)
    {
        return $this->connect->query("DELETE FROM users WHERE id='$id'");
    }
}
