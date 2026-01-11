<?php include_once "../auth.php"; ?> 
<title> Server killed! </title>
<?php 
system("c:\WINDOWS\system32\cmd.exe /c taskkill /IM teknomw3_dedicated_edg.exe && exit");  
?>

Server killed!