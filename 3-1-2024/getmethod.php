
<?php
   if( $_GET["name"] || $_GET["age"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_GET['name'] )) {
         die ("invalid name and name should be alpha");
      }
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "getmethod.html" method = "GET">
        Name: <input type = "text" name = "name" />
        Age: <input type = "text" name = "age" />
        <input type = "submit" />
     </form>
</body>
</html>

