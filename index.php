<html>
 <head>
   <title>Wonderous Ward Word Generator</title>
 </head>
 <body>
<font size="30">
   <?php 

  
$f_contents = file("wordlist.txt");
$line = $f_contents[array_rand($f_contents)];
echo $line;
  
  ?>
 </font>
  <br><br>
  <input type="image" src="zebra.jpg" onClick="history.go(0)">
 </body>
</html>
