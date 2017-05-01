<?php
//Start the session to see if the user is authenticated user. 
session_start(); 

//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['eventname']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$club= $_POST['club']; 
$eventname = $_POST['eventname']; 
$coordinator = $_POST['coordinator'];
$month = $_POST['month'];
$venue = $_POST['venue']; 
$participants = $_POST['participants'];
   
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
$query1="INSERT INTO conducts(club_name,event_name) VALUES ('$club[0]','$eventname')";
$query= "INSERT INTO clubevents (event_name,eventcoordinator,eventmonth,venue,noofparticipants) VALUES ('$eventname','$coordinator','$month','$venue','$participants')";   
//Execute query 
$results = mysql_query($query); 
$results1= mysql_query($query1);
 
//Check if query executes successfully 
if($results == FALSE){ 
echo mysql_error() . '<br>'; 
       echo'you are not authorized user';
}
    else{ 
    echo 'CLUB EVENT REGISTERED SUCCESSFULLY';
echo '<a href="main_page.html">Click here to go to the main page</a>'; 
} 
}
?>
