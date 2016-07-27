
<html>
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
<center><p>You can make your payments through M-PESA.<br />Our paybill NO is :<strong>244100</strong></p></center>
<br /><br /><br />
<center>
<form id="book" name="book" action="submit.php" method="post">
<table>
<tr>
<td><h2>Enter Information</h2></td>
</tr>
<tr>
<td><strong>First Name :</strong></td>
<td><input class="input"name="FName" type="text" value="" required="required"></td>
</tr>
<tr>
<td><strong>Second Name :</strong></td>
<td><input class="input"name="LName" type="text" value="" required="required"></td>
</tr>
<tr>
<td><strong>ID No/Passport No  :</strong></td>
<td><input class="input"name="ID" type="text" value="" required="required"></td>
</tr>

<tr>
<td><strong>Email :</strong></td>
<td><input class="input"name="email" type="text" value="" required="required"></td>
</tr>
<tr>
<td><strong>Phone No :</strong></td>
<td><input class="input"name="phone" type="text" value="" required="required"></td>
</tr>
<tr>
<td><strong>Gender :</strong></td>
<td><select class="input" name="gender" required="required">
<option>Male</option>
<option>Female</option>

</select></td>
</tr>
<tr>
<td><strong>Room No :</strong></td>
<td><select class="input" name="room" required="required">
<option>1A</option>
<option>2A</option>
<option>3A</option>
<option>4A</option>
<option>5A</option>
<option>6A</option>
<option>7A</option>
<option>8A</option>
<option>9A</option>
<option>10A</option>
<option>1B</option>
<option>2B</option>
<option>3B</option>
<option>4B</option>
<option>5B</option>
<option>6B</option>
<option>7B</option>
<option>8B</option>
<option>9B</option>
<option>10B</option>

</select></td>
</tr>
<tr>
<td><strong>Check in Date :</strong></td>
<td><input class="input"name="in_date" type="date" value="" required="required"></td>
</tr>
<tr>
<td><strong>Check out Date :</strong></td>
<td><input class="input"name="out_date" type="date" value="" required="required"></td>
</tr>
<tr><td></td></tr>
<tr>
<td></td>
<td>
<input class="submit" name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
</form>
<center>
</div>
</div>

<div class='footer'><center>&copy davie 2015</center></div>

</html>