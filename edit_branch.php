<?php
//Start the session to see if the user is authenticated user. 
session_start(); 

$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['festname']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$club= $_POST['club']; 
$festname = $_POST['festname']; 
$festtype = $_POST['festtype'];
$festlevel = $_POST['festlevel'];
$duration = $_POST['duration']; 
$budget = $_POST['budget'];
   
}


//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = mysql_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('clubsmanagementsystem'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
  
$query= "INSERT INTO fest (fest_name,festtype,festlevel,duration,budget) VALUES ('$festname','$festtype','$festlevel','$duration','$budget')";   
//Execute query 
$results = mysql_query($query); 

 
//Check if query executes successfully 
if($results == FALSE){
echo mysql_error() . '<br>'; 
 echo'you are not authotized user';
}
    else {
    echo 'FEST REGISTERED SUCCESSFULLY';
echo '<a href="main_page.html">Click here to go to the main page</a>'; 
} 
}
?>
