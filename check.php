<?php
$svalue=$_POST['svalue'];
$server='localhost';
$password='A394840a';
$baza='mysql_db1';
$user='mysql1_user';
$connect=mysqli_connect($server,$user,$password,$baza);
$sql1='SELECT '.$svalue.' FROM users';
$result= mysqli_query($connect,$sql1);
while($togh=mysqli_fetch_assoc($result)){
    echo $togh[$svalue].'<br>';
};
?>