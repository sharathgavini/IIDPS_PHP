<?php include"includes/db.php";

$uid    ="";
$username       ="";
$user_password  ="";
$user_firstname ="";
$user_lastname  ="";
$user_email     ="";

if(isset($_POST['submit']))
{
    //search for the user
   
        $uid =  $_POST['userid'];
    

    $query = "SELECT * FROM users WHERE uid = $uid ";
    $select_users_query = mysqli_query($connection,$query);  

      while($row = mysqli_fetch_assoc($select_users_query)) {

          $uid        = $row['uid'];
          $username       = $row['uname'];
          $user_password  = $row['password'];
          $user_firstname = $row['first_name'];
          $user_lastname  = $row['last_name'];
          $user_email     = $row['email'];
      
}
}
?>
 <html>
 <head></head>
 <body>
     <form action="" method="post" >             
         
          <div class="form-group">
             <label for="title">Firstname</label>
              <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="first_name">
          </div>
          
           <div class="form-group">
             <label for="post_status">Lastname</label>
              <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="last_name">
          </div> <div class="form-group">
           
         
</div>
          
     <!--
          <div class="form-group">
             <label for="post_image">Post Image</label>
              <input type="file"  name="image">
          </div>
     -->
     
          <div class="form-group">
             <label for="post_tags">Username</label>
              <input type="text" value="<?php echo $username; ?>" class="form-control" name="uname" disabled>
          </div>
          
          <div class="form-group">
             <label for="post_content">Email</label>
              <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="email">
          </div>
          
          <div class="form-group">
             <label for="post_content">Password</label>
              <input type="password" value="<?php //echo $user_password; ?>" class="form-control" name="password">
          </div>
       <div class="form-group">
              <input class="btn btn-primary" type="submit" name="update" value="Update User">
          </div>
     
     
     </form>
 </body>
 </html>
<?php 

if(isset($_POST['update'])) {
        
            $user_firstname   = $_POST['first_name'];
            $user_lastname    = $_POST['last_name'];
            $user_email    = $_POST['email'];
            $user_password = $_POST['password'];
           

      
      

        if(!empty($password)) { 

          $query_password = "SELECT password FROM users WHERE uid =  $uid";
          $get_user_query = mysqli_query($connection, $query_password);
        
            if($get_user_query)
          $row = mysqli_fetch_array($get_user_query);
            else
                die("error");

          $db_user_password = $row['user_password'];


        if($db_user_password != $user_password) {

            $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);

          }

         //UPDATE `users` SET `email` = 'sharatchandrah@gmail.com' WHERE `users`.`uid` = 3;
          /*
            $query="UPDATE USERS SET uname='$username',";
    $query.="email='$email'";
    $query.="WHERE uid=$id";*/
            $query="UPDATE USERS SET first_name='$first_name',";
            $query.="last_name='$last_name',";
            $query.="email='$email',";
            $query.="password='$password'";
            $query.="WHERE uid=$uid";
    $result=mysqli_query($connection,$query);
    if($result)
        echo "Worked!";
    else
        die ("Failed!");
           

          echo "User Updated" . " <a href='view_all_users.php'>View Users?</a>";

            }  // if password empty check end

    
      
        } 

           // Post reques to update user end


    
?>