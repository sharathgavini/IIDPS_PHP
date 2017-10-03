
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
   


  <body>
  <br>
  <h3><center>IIDPS</center></h3>

<br>
<br>
          
<div class="container form-tab"><div class="tab">
          <button class="tablinks" onclick="openCity(event, 'Create')">Create</button>
          <button class="tablinks" onclick="openCity(event, 'Read')">Read</button>
          <button class="tablinks" onclick="openCity(event, 'Modify')">Modify</button>
          <button class="tablinks" onclick="openCity(event, 'Encrypt')">Encrypt</button>
          <button class="tablinks" onclick="openCity(event, 'Decrypt')">Decrypt</button>
          <lbutton class="tablinks last-button"><a href="index.php">Logout</a></lbutton>
        </div>
        
        <div id="Create" class="tabcontent">
          <h3>Create</h3>
          <p>Create a new file:</p>
          <form action="" method="post">
              <input type="text" name="fname" placeholder="enter the file name you want to create">
              <input type="submit" name="submit" class="btn" onclick="submit();">Create
          </form>
          <script type="text/javascript">
$(document).ready(function(){
	$('a[class="tablinks"]').on('show.bs.tab', function(e) {
		localStorage.setItem('activeTab', $(e.target).attr('href'));
	});
	var activeTab = localStorage.getItem('activeTab');
	if(activeTab){
		$('#myTab a[href="' + activeTab + '"]').tab('show');
	}
});
</script>

          <?php
            if(isset($_POST['submit']))
            {
                $fname=$_POST['fname'];
                $handle=fopen($fname,'w');
                if($handle)
                {
                    echo"<center>File created successfully";
                    fclose($handle);
                }
                else
                    echo"<center>File could not be created";
            }
            ?>
        </div>
        
        <div id="Read" class="tabcontent">
          <h3>Read</h3>
          <p>Read an existing file:</p> 
          <form action="" method="post">
              <input type="submit">Click Me
          </form>
          <?php
            //header("Location:file_write.php");
            ?>
        </div>
        
        <div id="Modify" class="tabcontent">
          <h3>Modify</h3>
          <p>Modify an existing file:</p>
        </div>
         <div id="Encrypt" class="tabcontent">
          <h3>Encrypt</h3>
          <p>Encrypt a file:</p>
        </div>
          <div id="Decrypt" class="tabcontent">
          <h3>Decrypt</h3>
          <p>Decrypt an encypted file:</p>
        </div>
          
          <div id="Logout" class="tabcontent">
              
          </div>
        </div>  </body>
</html>