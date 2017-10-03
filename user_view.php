<?php include "includes/functions.php";
              readTable();
             ?>
             <div>
            <div class="container">
       <div class="col-sm-6">
         <?php
           while($row=mysqli_fetch_assoc($result))
           {
               ?>
               <?php
               echo "Name: ".$row['first_name']." Email:".$row['email'];
               echo "<br>";
                   echo "<br>";
               ?>
               <?php
           }
           ?>
       </div>
        </div>
        </div>