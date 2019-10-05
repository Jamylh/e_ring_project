<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = "e-ring";

$conn = mysqli_connect($host,$user,$pass,$db);
        mysqli_set_charset($conn,"utf8");

if(!$conn){
    echo mysqli_connect_error("خطأ في الاتصال"), mysqli_connect_error();

}

function close_db(){
    global $conn;
    mysqli_close($conn);
}

?>