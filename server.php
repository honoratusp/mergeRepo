<?php 
echo "honoratus peter";
$con = mysql_connect('localhost','root','','tbl');
if(!conn){
    die('server connection failure'.mysql_connect_error());
}else{
    echo"Server connection available";
}
?>