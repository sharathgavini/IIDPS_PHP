<?php include "db.php";


function login()
{
    global $connection,$result;
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT *FROM users where uname='$username'";
    $result=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($username=='admin'&&$password=='admin')
        header("Location:register.php");
    else if(password_verify($password,$hash))
        header("Location:user_page.php");
    else
        echo "<center>invalid username/password";
}
    
    
function insertUser()
{
        global $connection;

    $username=$_POST['username'];
    $password=$_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $username=mysqli_real_escape_string($connection,$username);
    $password=mysqli_real_escape_string($connection,$password);
    $first_name=mysqli_real_escape_string($connection,$first_name);
    $last_name=mysqli_real_escape_string($connection,$last_name);
    $email=mysqli_real_escape_string($connection,$email);
    $password=password_hash($password,PASSWORD_BCRYPT);

 $query="INSERT INTO users(uid,uname,password,first_name,last_name,email)";
 $query.="VALUES('NULL','$username','$password','$first_name','$last_name','$email')";
 $result=mysqli_query($connection,$query);
 
}
function createTable()
{
    global $connection,$result;
    $query="CREATE TABLE `iidps`.`che2rry` ( `create_count` INT(2) NOT NULL , `read_count` INT(2) NOT NULL , `write_count` INT(2) NOT NULL , `encrypt_count` INT(2) NOT NULL ) ENGINE = InnoDB;";
    $result=mysqli_query($connection,$query);
    if(!$result)
        echo "Die ".mysqli_error($connection);
    else
        echo "live";
    
}
function checkUser()
{
    global $connection,$userErr,$result;
    $username=$_POST['username'];
    $query="SELECT *FROM users where uname='$username'";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0)
    {
        $userErr.='Username exists';
    }
}
?>