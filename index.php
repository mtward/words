<html>
 <head>
   <title>PHP Test</title>
 </head>
 <body>
   <?php 
  
$var = file_get_contents('wordlist.txt'); //Take the contents from the file to the variable
$result = explode(',',$var); //Split it by ','
echo = $result[array_rand($result)]; //Return a random entry from the array.
  
  ?>
 </body>
</html>
