<?php
session_start();
$_SESSION['username'] = $_GET["username"];
$h = fopen("/home/ww/users.txt", "a");
fwrite($h,$_SESSION['username']);
fwrite($h,"\n");
fclose($h);
$full_path = sprintf("/srv/uploads/%s", $_SESSION['username']);
mkdir($full_path,0777);
header("Location: upload.html");
exit;
?>