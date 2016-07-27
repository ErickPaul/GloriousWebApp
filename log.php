<?php
ob_start();
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("glorious", $connection);

$email=$_POST['email']; 
$password = $_POST['password']; 

$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM admin WHERE email='$email' and password='$password'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
 
header("location:adlog.php");
}
else {
echo "Wrong email or Password";
header("location:admin.php");
}
?>