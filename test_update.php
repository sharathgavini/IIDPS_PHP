<?php include"includes/db.php";
if(isset($_POST['update']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $id=$_POST['uid'];
    $query="UPDATE USERS SET uname='$username',";
    $query.="email='$email'";
    $query.="WHERE uid=$id";
    $result=mysqli_query($connection,$query);
    if($result)
        echo "Worked!";
    else
        die ("Failed!");
    
}
?>








<html>
    <head>
        <body>
            <form action="" method="post">
                <input type="text" name="username">
                <br>
                <input type="text" name="email">
                <input type="text" name="uid">
                <input type="submit" name="update" value="test">
            </form>
        </body>
    </head>
</html>