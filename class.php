<?php

class Jobogor{

    var $servername = "localhost";
    var $username = "username";
    var $password = "password";
    var $dbname = "myDBPDO";
    var $conn;
    function __construct($table){
        try {
            $this -> conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this ->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo   "<br>" . $e->getMessage();
            }
    }

    



};

?>