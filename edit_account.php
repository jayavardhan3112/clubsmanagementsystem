<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['rollno']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$club = $_POST['club']; 
$rollno = $_POST['rollno']; 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['emailid']; 
    $date = $_POST['dob'];
    $hall = $_POST['hall']; 
    $sex = $_POST['group1']; 
     $branch = $_POST['branch'];
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
$query = "INSERT INTO student (roll_no,fname,lname,email_id,dob,gender,hallofresidence,branch) VALUES ('$rollno','$fname'        ,'$lname','$email','$date','$sex','$hall','$branch')"; 
//Execute query 
$results = mysql_query($query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo 'Data inserted successfully! '; 
} 

?>
