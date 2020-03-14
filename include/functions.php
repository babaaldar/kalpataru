<?php
/**
 * Implements db_connect
 * Provides the connection if already exists otherwise creates a new connection nd returns it
 * 
 * @return connection or an error
 */
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}
 function db_connect()
 {
     static $connection;

     if(!isset($connection)){
         $config = parse_ini_file("config.ini");
         $connection = mysqli_connect($config['host'],$config['username'],$config['password'],$config['dbname']);
        //  dd(isset($connection));
     }

     if($connection === false){
         return mysqli_connect_error();
        //  dd(isset($connection));
     }
     

     return $connection;
 }

 function db_query($query){
     //connect to the database
     $connection = db_connect();
    // dd(isset($connection));
    // dd($query);
     $result = mysqli_query($connection,$query);
    //  dd(($result));
     return $result;
 }

 function db_select($query){
     $result = db_query($query);
     if($result === false){
         return false;
     }

     $rows = array();
     while($row = mysqli_fetch_assoc($result)){
         $rows[] = $row;
     }

    //  dd($rows);

     return $rows;
 }

function db_error(){
    $connection = db_connect();
    dd(mysqli_error($connection));
    return mysqli_error($connection);
}

function sanitize_input($value){
    $connection = db_connect();
    if(!isset($connection)){
        dd("in sanitize");
    }
    return mysqli_real_escape_string($connection,$value);
}

function dd($var){
    // var_dump("error");
    die(var_dump($var));
}

?>