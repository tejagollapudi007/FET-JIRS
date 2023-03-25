<?php

session_start();

$con = mysqli_connect('localhost', 'root',"");

mysqli_select_db($con,'jirs');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select *from user_info where username = '$name' ";

$result  = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Username already taken";
}else
{
    $reg = "insert into user_info(username, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo"Registration Successfull!!!!";
}

?>