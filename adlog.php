<html></html<html>
<head>
<title>

</title>
<script type="text/javascript">
var image1= new Image()
image1.src="img/1.jpg";
var image2= new Image()
image2.src="img/2.jpg";
var image3= new Image()
image3.src="img/3.jpg";
var image4= new Image()
image4.src="img/4.jpg";
var image5= new Image()
image5.src="img/5.jpg";
</script>
<link rel="stylesheet" style="text/css" href="main.css">
</head>
<body>
<div class='top'></div>
<div class='h'> <div class='slide'><img src="img/1.jpg" width="1145" height="300" name="slide"/>
 <script type="text/javascript">
 var step=1;
 function slideit()
 {
  document.images.slide.src=eval("image"+step+".src");
            if(step<5)
                step++;
            else
                step=1;
            setTimeout("slideit()",3000);
 
 
 }
 slideit();
 </script>
</body>
</div></div>
<div class='menu'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick="location.href='index.php'"><b1>HOME</b1></button>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button onclick="location.href='about.php'"><b1>ABOUT</b1></button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button onclick="location.href='contacts.php'"><b1>CONTACTS</b1></button>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button onclick="location.href='rooms.php'"><b1>ROOMS</b1></button>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button onclick="location.href='book.php'"><b1>CLICK HERE TO BOOK</b1></button>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button onclick="location.href='admin.php'"><b1>ADMIN</b1></button>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button onclick="location.href='gallery.php'"><b1>GALLERY</b1></button>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button onclick="location.href='help.php'"><b1>HELP</b1></button></div>
<div class='main'>
<div class='form'>
<form action="search.php" method="post"><br />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="submit" value="search" required="required">
<input type="search" name="search" value="">
</form>
<table width="300px" height="500px">
<tr>
<td>
 <center><font size="+2"><b style="color:#191B7E"><div style="background-color:#969BFB">Hotel Updates</div><br></b></font></center>
 <marquee direction="up" height="100%" onMouseOver="this.stop();" onMouseOut="this.start();">
<center><a href="meals.php" style="text-decoration:none"><font size="+1"><b>Meals</b></font></a></center><br>
            <center><a href="pay.php? style="text-decoration:none"><font size="+1"><b>Payment Procedure</b></font></a></center><br>
            <center><a href="wk.php?option=wevents" style="text-decoration:none"><font size="+1"><b>Weekend Events</b></font></a></center><br>
            <center><a href="gallery.php?option=gallery" style="text-decoration:none"><font size="+1"><b>Gallery</b></font></a></center><br>
           
		</marquee>
		</td>
		</tr>
		</table>
</div>
<div class='mid'>
<center>
<form id="cfm" action="adlog.php" method="post">
<h3>Enter customer's ID to confirm booking.</h3>
<table>
<tr>
<td><strong>CUSTOMER'S IDNO:</strong></td>
<td><input class="input" type="text" name="ID" value="" required="required"></td>
</tr>
<tr>
<td></td>
<td><input class="submit" type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
<?php
$nameErr ="";
$submit="submit";

$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("glorious", $connection);


if(isset($_POST['submit'])){
if (empty($_POST["ID"])) {
    $nameErr = "Name is required";
  } else {
$ID = $_POST['ID'];
}
mysql_connect("localhost", "root", "hazebee") or die("Could not connect to database.");
mysql_select_db("glorious") or die("Could not use database");
$query = "select ID from booking where ID=" . $_POST['ID'];
$result = mysql_query($query) or die("Error in the query: $query");
 if (mysql_num_rows($result) == 0) {
   echo("Sorry invalid IDNO");
   
 }
 else {
    $getquery=mysql_query("SELECT*FROM booking where ID=". $_POST['ID']);
 
 while($rows=mysql_fetch_assoc($getquery))
 
 {
 $FName=$rows['FName'] ;
  $LName=$rows['LName'] ;
 $ID=$rows['ID'] ;
 $email=$rows['email'] ;
 $phone=$rows['phone'] ;
  $gender=$rows['gender'] ;
 $room=$rows['room'] ;
 $in_date=$rows['in_date'] ;
 $out_date=$rows['out_date'] ;
 

 echo "<table border='1px'>";
 echo "<tr>";
 echo "<th>";
  echo "Name :";
 echo "</th>";
  echo "<td>";
  echo  $FName; echo"&nbsp &nbsp&nbsp";
    echo  $LName;
 echo "</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>";
  echo "IDNO :";
 echo "</th>";
  echo "<td>";
  echo  $ID;
 echo "</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>";
  echo "Email :";
 echo "</th>";
  echo "<td>";
  echo  $email;
 echo "</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>";
  echo "Phone NO :";
 echo "</th>";
  echo "<td>";
  echo  $phone;
 echo "</td>";
 echo "</tr>";
  echo "<tr>";
 echo "<th>";
  echo "Gender :";
 echo "</th>";
  echo "<td>";
  echo  $gender;
 echo "</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>";
  echo "Room :";
 echo "</th>";
  echo "<td>";
  echo  $room;
 echo "</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>";
  echo "Check In Date :";
 echo "</th>";
  echo "<td>";
  echo $in_date;
 echo "</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>";
  echo "Check Out Date :";
 echo "</th>";
  echo "<td>";
  echo  $out_date;
 echo "</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>";
  echo "Amount Paid :";
 echo "</th>";
  echo "<td>";
  echo  "Ksh.";
 echo "</td>";
 echo "</tr>";
 echo "</table><br />";

   
 
}  
}
}

?>
<form action="logout.php" method="post">
<input type="submit" name="submit" value="logout">

</form>

</center>

</div>
</div>

<div class='footer'><center>&copy davie 2015</center></div>

</html>