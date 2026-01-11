<?php include_once "../auth.php"; ?> 
<?php
$fn002 = "E:\EDG-Isnipe\scripts\SinAdmin\server.cfg\ScriptFiles\\errorlog.txt";
if (isset($_POST['content']))

{

    $content = stripslashes($_POST['content']);

    $fp = fopen($fn002,"w") or die ("Error opening file in write mode!");

    fputs($fp,$content);

    fclose($fp) or die ("Error closing file!");

}
;
?>


Error Log
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

    <textarea rows="50" cols="80" name="content"><?php readfile($fn002); ?></textarea>

    <input type="submit" value="Submit!"> 

</form>