<?php

$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}
mysqli_select_db($con, 'portfolio');

$Name=$_POST['name'];
$Email=$_POST['email'];
$Message=$_POST['message'];

$query = "insert into userdata(name,email,message)
values('$Name','$Email','$Message')";

$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'portfolio');



echo "$query";
mysqli_query($con,$query );
header('location:portfo2.php');
?>