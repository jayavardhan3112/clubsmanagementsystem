 <?php 
//Destroy the session  
session_unset(); 
session_destroy(); 
//Redirect to login page 
header("location: login_page.php"); 
exit(); 
?>
