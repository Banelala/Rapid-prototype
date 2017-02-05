<?php
session_start();
$fileList = $_GET["fileList"];
for($i=0;$i<sizeof($fileList);$i++)
{
    $full_path = sprintf("/srv/uploads/%s/%s", $_SESSION['username'],$fileList[$i]);
    unlink($full_path);
}
  header("Location:view.php");
  exit;
?>