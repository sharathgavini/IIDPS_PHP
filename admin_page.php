
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tabs.css">
    <script src="js/tabs.js"></script>
  </head>

  <body>
<br>
<br>
<br>
<div class="container"><div class="tab">
          <button class="tablinks" onclick="openCity(event, 'Add User')">Add a User</button>
          <button class="tablinks" onclick="openCity(event, 'View Users')">View Users</button>
          <button class="tablinks" onclick="openCity(event, 'Modify Users')">Modify Users</button>
          <button class="tablinks" onclick="openCity(event, 'Delete Users')">Delete Users</button>
          <button class="tablinks" onclick="openCity(event, 'Block Users')">Block Users</button>          
          <button class="tablinks" onclick="openCity(event, 'View User Patterns')">View User Patterns</button>
          <button class="tablinks" onclick="openCity(event, 'View Graphs')">View Graphs</button>
          <lbutton class="tablinks last-button"><a href="index.php">Logout</a></lbutton>
        </div>
        
        <div id="Add User" class="tabcontent">
          <h3>Add</h3>
          <p>Create a new user:</p>
          <?php include "register.php";
            if(isset($_POST['submit1']))
            {
                include "profile.php";
            }
            ?>
        </div>
        
        <div id="Modify Users" class="tabcontent">
          <h3>Modify Users</h3>
          <p>Modify an existing user details:</p>
          <form action="" method="post">
              <input type="text" placeholder="Enter the user id" name="userid">
              <input type="submit" value="Update details" class="btn btn-primary" name="submit">
          </form>
          <?php 
            include"update.php";
            ?>
        </div>
        
        <div id="Delete Users" class="tabcontent">
          <h3>Delete</h3>
          <p>Delete an existing user:</p>
        </div>
         <div id="Block Users" class="tabcontent">
          <h3>Block</h3>
          <p>Block  an existing user:</p>
        </div>
          <div id="View Users" class="tabcontent">
          <h3>View</h3>
          <p>View  all users:</p>
           <?php include "view_all_users.php";
              ?>
        </div>
          
          <div id="View User Patterns" class="tabcontent">
          <h3>View User Patterns</h3>
          <p>View user's behaviour patterns:</p>
        </div>
          <div id="View Graphs" class="tabcontent">
          <h3>View Graph</h3>
          <p>View graph of a specified user:</p>
        </div>
          
          
        </div>  </body>
</html>