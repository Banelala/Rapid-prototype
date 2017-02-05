<?php
session_start();
$_SESSION['username'] = $_GET["username"];
$h = fopen("/home/ww/users.txt", "r");
while( !feof($h) ){
        if($_SESSION['username'] == trim(fgets($h))){
            header("Location: upload.html");
            exit;
        }	
}
echo "No such user";
fclose($h);
?>