<?php include_once "../auth.php"; ?> 

<?php
$file1 = 'E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\all.log';
$file2 = 'E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\chat.log';
$file3 = 'E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\cmds.log';
$file4 = 'E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\players.log';
$Date = date('d.m.Y.h.i');
$srcDir = 'E:\EDG-Isnipe\scripts\SinAdmin\server.cfg\logs';
$destDir = 'E:\EDG-Isnipe\scripts\SinAdmin\server.cfg\logs\Backup';

if (file_exists($file1)) {
	 rename("E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\all.log", "E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\all.$Date.log");
} else {
echo "all.log does not exist or is already backed up";
}

if (file_exists($file2)) {
	 rename("E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\chat.log", "E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\chat.$Date.log");
} else {
echo "chat.log does not exist or is already backed up";
}

if (file_exists($file3)) {
	 rename("E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\cmds.log", "E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\cmds.$Date.log");
} else {
echo "cmds.log does not exist or is already backed up";
}

if (file_exists($file4)) {
	 rename("E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\players.log", "E:\EDG-Isnipe\Scripts\SinAdmin\server.cfg\logs\backup\players.$Date.log");
} else {
echo "players.log does not exist or is already backed up";
}

if (file_exists($destDir)) {
  if (is_dir($destDir)) {
    if (is_writable($destDir)) {
      if ($handle = opendir($srcDir)) {
        while (false !== ($file = readdir($handle))) {
          if (is_file($srcDir . '/' . $file)) {
            rename($srcDir . '/' . $file, $destDir . '/' . $file);
          }
        }
        closedir($handle);
      } else {
        echo "$srcDir could not be opened.\n";
      }
    } else {
      echo "$destDir is not writable!\n";
    }
  } else {
    echo "$destDir is not a directory!\n";
  }
} else {
  echo "$destDir does not exist\n";
}
?>


<?php
$myFile = "E:\EDG-Isnipe\scripts\SinAdmin\server.cfg\ScriptFiles\PlayCount.txt";
if (file_exists($myFile)) {
    unlink($myFile);
} else {
    echo "PlayCount.txt does not exist";
}
?>
<?php
echo "Server Backup Succesfully";
?>
<html>
<html>

