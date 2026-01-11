<?php include_once "../auth.php"; ?> 
<?php
$fn003 = "E:\\EDG-Isnipe\scripts\SinAdmin\server.cfg\logs\all.log";
if (isset($_POST['content']))

{

    $content = stripslashes($_POST['content']);

    $fp = fopen($fn003,"w") or die ("Error opening file in write mode!");

    fputs($fp,$content);

    fclose($fp) or die ("Error closing file!");

}
;
?>


All Log
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

    <textarea rows="50" cols="70" name="content"><?php readfile($fn003); ?></textarea>


</form>