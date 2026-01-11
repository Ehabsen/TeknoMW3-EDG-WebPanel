<?php include_once "../auth.php"; ?> 
<title> Server started! </title>

<?php 
system("c:\WINDOWS\system32\cmd.exe /c taskkill /IM Teknomw3_dedicated_edg.exe && exit");  
?>

<?php 
sleep(2);
?> 

<?php include_once "Server starter.php"; ?> 

