
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
			<center><a href="index.php?option=cdrive" style="text-decoration:none"><font size="+1"><b>Special Offers</b></font></a></center><br>
            <center><a href="index.php?option=news" style="text-decoration:none"><font size="+1"><b>News</b></font></a></center><br>
            <center><a href="index.php?option=sports" style="text-decoration:none"><font size="+1"><b>Meals</b></font></a></center><br>
            <center><a href="index.php?option=admission" style="text-decoration:none"><font size="+1"><b>Payment Procedure</b></font></a></center><br>
            <center><a href="index.php?option=wevents" style="text-decoration:none"><font size="+1"><b>Weekend Events</b></font></a></center><br>
			<center><a href="gallery.php?option=gallery" style="text-decoration:none"><font size="+1"><b>Menu</b></font></a></center><br>
            <center><a href="gallery.php?option=gallery" style="text-decoration:none"><font size="+1"><b>Gallery</b></font></a></center><br>
           
		</marquee>
		</td>
		</tr>
		</table>
</div>
<div class='mid'>
<center>
<br /><br /><br/>
<h3>PAY KSH.
<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("glorious", $connection);



if(isset($_POST['submit'])){
if (empty($_POST["ID"])) {
    $nameErr = "Name is required";
  } else {
$ID = $_POST['ID'];
}
mysql_connect("localhost", "root", "") or die("Could not connect to database.");
mysql_select_db("glorious") or die("Could not use database");
$query = "select ID from booking where ID='$ID'";
$result = mysql_query($query) or die("Error in the query: $query");
 if (mysql_num_rows($result) == 0) {
   echo("Sorry invalid IDNO");
   
 }
 else {
    $sql="SELECT out_date,in_date FROM booking where ID='$ID'";
    $result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count>0){
	 echo "<table><tr><th></th></tr>";
 }
 while($rows=mysql_fetch_assoc($result))
 {
 $out_date=$rows['out_date'] ;
  $in_date=$rows['in_date'] ;
  $room=2500;
  
  $diff=$diff = abs(strtotime($out_date) - strtotime($in_date));
  $years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$adays=($years*365)+($months*30)+$days;
$amount=$room*$adays;
echo $amount;

 }
 }
 }
 
?>
 VIA M-PESA<br/><br />
 Our m-pesa Our paybill NO is :<strong>244100</strong><br /><br /><br /><br />
 Click <a href="customer.php" >here <a> to confirm booking.
 </center>
</h3>

</div>
</div>
</div>



</html>