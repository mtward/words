<html>
 <head>
   <title>PHP Test</title>
 </head>
 <body>
   <?php 

  
$f_contents = file("wordlist.txt");
$line = $f_contents[array_rand($f_contents)];
$data = $line;
echo $data;
  
  ?>
  <br><br>
  <input type="image" src="zebra.jpg" onClick="history.go(0)" width="48" height="48">
 </body>
</html>
