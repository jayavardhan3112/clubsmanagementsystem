
 
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


$club_name= $_POST['club']; 
 /*Create query*/ 
$qry = 'SELECT * FROM trip WHERE club_name="athletics"'; 

/*Execute query*/ 
$result = mysql_query($qry);
echo '<h1>The Trip Details are - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th>club_name</th> 
<th> trip year </th>
<th> place </th>
<th> achievements </th>
<th> number of students </th>
<th> budget </th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['club_name'].'</td>
<td>'.$row['tripyear'].'</td>
<td>'.$row['place'].'</td>
<td>'.$row['achievements'].'</td>
<td>'.$row['noofpeople'].'</td>
<td>'.$row['budget'].'</td>
</tr>'; 
}

echo '</table>';
 
?>
