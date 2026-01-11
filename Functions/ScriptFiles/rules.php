<?php include_once "../auth.php"; ?> 
<?php
$fn4 = "E:\EDG-Isnipe\scripts\SinAdmin\server.cfg\ScriptFiles\\rules.txt";
if (isset($_POST['content']))

{

    $content = stripslashes($_POST['content']);

    $fp = fopen($fn4,"w") or die ("Error opening file in write mode!");

    fputs($fp,$content);

    fclose($fp) or die ("Error closing file!");

}
;
?>


Admin Script CFG
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

    <textarea rows="50" cols="80" name="content"><?php readfile($fn4); ?></textarea>

    <input type="submit" value="Submit!"> 

</form>