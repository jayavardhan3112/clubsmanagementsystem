<?php 

//Collect POST values 
$login = $_POST['login']; 
$password = $_POST['password']; 
if($login && $password){ 
//Connect to mysql server 
$link = mysql_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link) { 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('clubsmanagementsystem'); 
if(!$db) { 
die("Unable to select database"); 
} 
    $result=mysql_query("select roll_no,pwd from student where roll_no='$login'");
        $row=mysql_fetch_array($result);
if(($row['roll_no']==$login) && ($row['pwd']==$password)){
$count = 1;
} 
    
} 
else{ 
//Login failed 
include('login_page_error.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
//if query was successful it should fetch 1 matching record from the table. 
if( $count == 1){ 
//Login successful set session variables and redirect to main page. 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $login; 
header('location:studentlogin.php'); 
} 
else{ 
//Login failed 
include('login_page_error.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 



?>
