<?php
$ipadress =($_POST["ipaddress"]);
$data="'\n\r'";
$fn75 ="ipbans.txt";
if (isset($_POST['ipadress']))
$fn75 ="./ipbans.txt";
       		 $ipadress =stripslashes($_POST["ipaddress"]);
    		 $fp = fopen($fn75,"a+") or die ("Error opening file in write mode or can´t find file!");
		 fputs($fp, "\n\r".$ipadress."\n\r");
                 fclose($fp);  



?>