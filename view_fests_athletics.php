
 
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
$qry = 'SELECT * FROM fest,organizes WHERE club_name="athletics" AND organizes.fest_name=fest.fest_name'; 

/*Execute query*/ 
$result = mysql_query($qry);
echo '<h1>The Fest Details are - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th>fest_name</th> 
<th> fest_type </th>
<th> fest_level </th>
<th> fest_duration </th>
<th> budget </th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['fest_name'].'</td>
<td>'.$row['festtype'].'</td>
<td>'.$row['festlevel'].'</td>
<td>'.$row['duration'].'</td>
<td>'.$row['budget'].'</td>
</tr>'; 
}

echo '</table>';
 
?>
