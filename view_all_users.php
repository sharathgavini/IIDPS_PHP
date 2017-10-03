<html>
<head></head>
<body>
      <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                           
            
                        </tr>
                    </thead>
                    
                          <tbody>
                          
      
      <?php include "includes/db.php";
        
        $query = "SELECT * FROM users";
        $select_users = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc($select_users)) {
            $user_id             = $row['uid'];
            $username            = $row['uname'];
            $user_password       = $row['password'];
            $user_firstname      = $row['first_name'];
            $user_lastname       = $row['last_name'];
            $user_email          = $row['email'];
          
        
            
            echo "<tr>";
            
            echo "<td>$user_id </td>";
            echo "<td>$username</td>";
            echo "<td>$user_firstname</td>";
                
      //        
      //        $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
      //        $select_categories_id = mysqli_query($connection,$query);  
      //
      //        while($row = mysqli_fetch_assoc($select_categories_id)) {
      //        $cat_id = $row['cat_id'];
      //        $cat_title = $row['cat_title'];
      //
      //        
      //        echo "<td>{$cat_title}</td>";
      //            
      //        }
      //        
            echo "<td>$user_lastname</td>";
            echo "<td>$user_email</td>";
          
            
      //        $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
      //        $select_post_id_query = mysqli_query($connection,$query);
      //        while($row = mysqli_fetch_assoc($select_post_id_query)){
      //        $post_id = $row['post_id'];
      //        $post_title = $row['post_title'];
      //            
      //            echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
      //        
      //        
      //        }
            
            
      
            
         /*
            echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
            echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
            echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
            echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
            echo "</tr>";
       */
        }
      
      
      
      
          ?>
      
      
       
                </tbody>
                </table>
                
  </body>
</html>