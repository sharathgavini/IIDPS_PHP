<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabs Test</title>
    <script src="js/tabs.js"></script>
    <link rel="stylesheet" href="css/tabs.css">
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
   <div class="container form-tab">
       <div class="tab">
         <button class="tablinks" onclick="openCity(event, 'London')">London</button>
         <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
         <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
       </div>
       
       <div id="London" class="tabcontent">
         <h3>London</h3>
         <p>London is the capital city of England.</p>
       </div>
       
       <div id="Paris" class="tabcontent">
         <h3>Paris</h3>
         <p>Paris is the capital of France.</p> 
       </div>
       
       <div id="Tokyo" class="tabcontent">
         <h3>Tokyo</h3>
         <p>Tokyo is the capital of Japan.</p>
       </div>
   </div>
    
</body>
</html>