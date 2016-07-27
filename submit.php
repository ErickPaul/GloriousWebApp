<?php
$nameErr ="";

$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("glorious", $connection);
if(isset($_POST['submit'])){ 
 if (empty($_POST["FName"])) {
    $nameErr = "Name is required";
  } else {
$FName = $_POST['FName'];
}
$LName = ($_POST['LName']);
$ID = $_POST['ID'];
$email = ($_POST['email']);
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$room = ($_POST['room']);
$in_date = $_POST['in_date'];
$out_date = $_POST['out_date'];
$data = mysql_query("SELECT * FROM booking WHERE room = '$room'") or die(mysql_error());
if(!mysql_num_rows($data)){

 $query = mysql_query("insert into booking(FName, LName, ID,email,phone,gender,room,in_date,out_date)
 values ('$FName', '$LName', '$ID','$email','$phone','$gender','$room','$in_date','$out_date')");
 

$query = mysql_query("insert into booked(room)
 values ('$room')");


 
 
 }

header("location:user.php");
}
else{
header("location:book.php");
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

mysql_close($connection);
 
 
 
 
 
 ?>