<?php
$uname="";
$first_name="";
$last_name="";
$email="";
$password="";
$uid="";
if(isset($_POST['submit']))
{
    $uid=$_POST['userid'];
    $query="SELECT *from users where uid=$uid";
    $result=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($result))
    {
        $uname=$row['uname'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $email=$row['email'];
        $password=$row['password'];
    }
    
    //echo "User id is .".$uid;
}


?>
 <form action="" method="post">
    <div class="form-group">
   <label for="userid">User id:</label>
   
       <input type="text" value="<?php echo $uid ?>" disabled class="form-control">
        <div class="form-group">
             <label for="post_tags">Username</label>
              <input type="text" value="<?php echo $uname; ?>" class="form-control" name="uname" disabled>
        </div>
   
        </div>
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" value="<?php echo $first_name?>" name="first_name">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" value="<?php echo $last_name?>" name="last_name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" value="<?php echo $email?>" name="email">
        </div>
        <div class="form-group">
            <label for="password">Change Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
              <input class="btn btn-primary" type="submit" name="update" value="Update User">
          </div>
        
 </form>

<?php
    if(isset($_POST['update']))
    {
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="UPDATE USERS SET first_name='$first_name',";
        $query.="last_name='$last_name',";
        if(!empty($password))
        {
            $password=password_hash($password,PASSWORD_BCRYPT);
             $query.="email='$email',";
        
        $query.="password='$password' ";
            
        }
        else
            {
            $query.="email='$email' ";
            }
        $query.="WHERE uid=$uid";
        $result=mysqli_query($connection,$query);
        if($result)
            echo "Successful";
        else
            echo "Failed ".mysqli_error($connection);
        
    }
    
?>
        