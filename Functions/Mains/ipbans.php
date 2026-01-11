<?php
$ipadress =($_POST["ipaddress"]);
$ip =($_POST["ipaddress"]);
$ips=($_POST["ipaddress"]);
$fn75 ="ipbans.txt";
if (isset($_POST['ipadress']))
$fn75 ="./ipbans.txt";
       		 $ipadress =stripslashes($_POST["ipaddress"]);
    		 $fp = fopen($fn75,"a+") or die ("Error opening file in write mode or can´t find file!");
		 fputs($fp, "\r\n".$ipadress.':'.$ip.'-'.$ips."\r\n");
                 fclose($fp);  
?>

<?php include_once "forward.html"; ?> 