<?php include"includes/db.php";

$the_user_id        ="";
$username       ="";
$user_password  ="";
$user_firstname ="";
$user_lastname  ="";
$user_email     ="";

if(isset($_POST['submit']))
{
    //search for the user
   
        $the_user_id =  $_POST['userid'];
    

    $query = "SELECT * FROM users WHERE uid = $the_user_id ";
    $select_users_query = mysqli_query($connection,$query);  

      while($row = mysqli_fetch_assoc($select_users_query)) {

          $the_user_id        = $row['uid'];
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
           

      
      

        if(!empty($user_password)) { 

          $query_password = "SELECT user_password FROM users WHERE user_id =  $the_user_id";
          $get_user_query = mysqli_query($connection, $query_password);
        
            if($get_user_query)
          $row = mysqli_fetch_array($get_user_query);
            else
                die("error");

          $db_user_password = $row['user_password'];


        if($db_user_password != $user_password) {

            $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 12));

          }

          $query = "UPDATE users SET ";
            $query .="password   = '{$hashed_password}',";
          $query .="first_name  = '{$user_firstname}', ";
          $query .="last_name = '{$user_lastname}', ";
         
          $query .="email = '{$user_email}'";
          
          $query .= "WHERE user_id = {$the_user_id} ";
       
            $edit_user_query = mysqli_query($connection,$query);
       
           if($edit_user_query)

          echo "User Updated" . " <a href='view_all_users.php'>View Users?</a>";

            }  // if password empty check end

    
      
        } 

           // Post reques to update user end


    
?>