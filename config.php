<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'worldbi_events';

try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8mb4', $DATABASE_USER, $DATABASE_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    exit('Failed to connect to database!');
}
?>

 <!--  



    // $conference =mysqli_connect('localhost','worldbi_newconference','conference@321','worldbi_conference') or die(mysqli_connect_error());
    
    // $conn =mysqli_connect('localhost','root','','worldbi_events') or die(mysqli_connect_error());


//     $host      = "localhost"; 
    
//     $username  = "worldbigroup";
    
//     $password  = "J2G4mh:Y2n";
    
//     $dbname    = "worldbigroup_brandprotectiondb";
    
//     $conn = mysqli_connect($host, $username, $password, $dbname);
    
//     if(!$conn) {
//         die("Connection Failed!!!" . mysqli_connect_error());
//     }
    
    // $dbquery = "create database if not exists worldbigroup_worldbi";
    
    // $dbresponse = mysqli_query($conn, $dbquery);
    
    // if(!$dbresponse) {
    //     die("Database Not Created!!!");
    // }
    // else {
    //     mysqli_select_db($conn, "worldbigroup_worldbi");
    //     $tbquery = "create table if not exists buy_ticket(
    //         id int primary key auto_increment,
    //         full_name varchar(50),
    //         email varchar(50),
    //         company varchar(50),
    //         number int,
    //         event_name varchar(50),
    //         m_message text, 
    //         buy_time datetime
    //         );";
            
    //     $tbresponse = mysqli_query($conn, $tbquery);
        
    //     if(!$tbresponse) {
    //         die("table not created!!!");
    //     }
    // }
// ?>  -->