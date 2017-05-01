
 
<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 

 /*Connect to mysql server*/ 
$link = mysql_connect('localhost', 'root', '');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error());
 } 

/*Select database*/ 
$db = mysql_select_db('clubsmanagementsystem'); 
if(!$db)
{
 die("Unable to select database"); 
}


 
 /*Create query*/ 
$qry = 'SELECT * FROM membersof,student WHERE club_name="carrom" AND student.roll_no=membersof.roll_no'; 

/*Execute query*/ 
$result = mysql_query($qry);
echo '<h1>The Student Details are - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> roll_no </th> 
<th> fname </th>
<th> lname </th>
<th> email_id </th>
<th> phone_no </th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['roll_no'].'</td>
<td>'.$row['fname'].'</td>
<td>'.$row['lname'].'</td>
<td>'.$row['email_id'].'</td>
<td>'.$row['phone_no'].'</td>
</tr>'; 
}

echo '</table>';
 
?>
