<?php

class Jobogor{

    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "jobogor";
    var $table ;
    var $conn;

    function __construct($table){
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=jobogor", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
            $this->table= $table;
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
    }
    function insert($field,$values){

        $sql = "INSERT INTO $this->table ($field) VALUES ($values)";
      //  echo $sql;
        // use exec() because no results are returned
        $this->conn->exec($sql);
//echo "New record created successfully";
  
    }
    function imageupload($name,$photoname){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Check if file was uploaded without errors
            if(isset($_FILES["$name"]) && $_FILES["$name"]["error"] == 0){
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES["$name"]["name"];
                $filetype = $_FILES["$name"]["type"];
                $filesize = $_FILES["$name"]["size"];
            
                // Verify file extension
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                echo $ext;
                if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
            
                // Verify file size - 5MB maximum
                $maxsize = 5 * 1024 * 1024;
                if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
            
                // Verify MYME type of the file
                if(in_array($filetype, $allowed)){
                    // Check whether file exists before uploading it
                    if(file_exists("file/$photoname.$ext")){
                        echo $photoname . " is already exists.";
                    } else{
                        move_uploaded_file($_FILES["$name"]["tmp_name"], "file/$photoname.$ext" );
                        //echo "Your file was uploaded successfully.";
                    } 
                } else{
                    echo "Error: There was a problem uploading your file. Please try again."; 
                }
            } else{
                echo "Error: " . $_FILES["$name"]["error"];
            }
        }

    }

    function docupload($name,$photoid){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Check if file was uploaded without errors
            if(isset($_FILES["$name"]) && $_FILES["$name"]["error"] == 0){
                // $allowed = 'pdf';
                $filename = $_FILES["$name"]["name"];
                $filetype = $_FILES["$name"]["type"];
                $filesize = $_FILES["$name"]["size"];
            
                // Verify file extension
                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                echo $ext;
                if($ext != "pdf") die("Error: Please select a valid file format.");
            
                // Verify file size - 5MB maximum
                $maxsize = 5 * 1024 * 1024;
                if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
            
                // Verify MYME type of the file
                if(in_array($filetype, $allowed)){
                    // Check whether file exists before uploading it
                    if(file_exists("file/pel-$namefile.$ext")){
                        echo $filename . " is already exists.";
                    } else{
                        move_uploaded_file($_FILES["$name"]["tmp_name"], "file/pel-$namefile.$ext" );
                        //echo "Your file was uploaded successfully.";
                    } 
                } else{
                    echo "Error: There was a problem uploading your file. Please try again."; 
                }
            } else{
                echo "Error: " . $_FILES["$name"]["error"];
            }
        }

    }

    function getdata( $field, $key){
        //echo "SELECT * FROM pelamar WHERE $field = '$key' ";
        $stmt = $this->conn->query("SELECT * FROM $this->table WHERE $field = '$key' LIMIT 1 ");
        
        $data = $stmt->fetch();
        
        return $data;
        //print_r ($data);
    }

    function login( $email, $password){
        //echo "SELECT * FROM $this->table WHERE email = '$email' AND password = '$password' LIMIT 1 ";
        $stmt = $this->conn->query("SELECT * FROM $this->table WHERE email = '$email' AND password = '$password' LIMIT 1 ");
        
        $data = $stmt->fetch();
        
        return $data;
        //print_r ($data);
    }
    function updatedata( $value, $field, $key){
   //     echo "UPDATE $this->table set $value WHERE $field = '$key'  ";
        $stmt = $this->conn->query("UPDATE $this->table set $value WHERE $field = '$key'  ");
        
       
        
        //return $data;
        //print_r ($data);
    }

    



};

?>