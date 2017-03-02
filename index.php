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
 </body>
</html>
