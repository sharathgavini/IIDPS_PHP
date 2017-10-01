<?php include "includes/db.php";

$query="SELECT password FROM users WHERE uid=6 ";

$result=mysqli_query($connection,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$hash=$row['password'];
$password='123456';
echo "Hash is ".$hash;
if(password_verify($password,$hash))
    echo "<br>you remember it right";
else
    echo "<br>try again";
//echo " hash is ".mysqli_query($connection,$query);
?>