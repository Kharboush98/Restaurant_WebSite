<?php
session_start();
if(isset($_SESSION['loggedin']))
$name=$_SESSION['name1'];
else
{
$name=$_POST['name'];
$table=$_POST['table'];
}
$_SESSION['name1']=$name;
$_SESSION['table']=$table;

header("Location:/MainPage/index.php");

?>