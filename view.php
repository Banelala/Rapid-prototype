<!doctype html>
<html>
<head>
    <title>View</title>
</head>
<body>
<form action="readfile.php" method="get">
    Filename: <input type="text" name="file" />
    <input type="submit" value="View" />
</form>
<?php
session_start();
$full_path = sprintf("/srv/uploads/%s", $_SESSION['username']);
echo"<p>Username: ";
echo$_SESSION['username'];
echo"</p >";
//Display files
$d = dir($full_path);
echo"<form action='batchDelete.php' method='get'>";
while (($file = $d->read()) !== false){
   
    if($file != '.' && $file != '..'){
        echo"<p><input type='checkbox' name='fileList[]'  value='".$file."' />"."filename:".$file."</p >";   //display file list by checkbox
    }
}
$d->close();

echo"  <input type='submit' value='Delete' /></form>";
?>
<!--Navigator-->
<ul>
  <li><a href='upload.html'>Upload files</a></li>
  <li><a href="logout.php">Log out</a></li>
</ul>
</body>
</html>