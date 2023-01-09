<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
a.one
{
float:center;
color:black;
}
a.one:hover
{
float:center;
background:white;
color:red;
font-size:15;
text:bold;
}
td.one
{
float:center;
color:black;
}
td.one:hover
{
float:center;
background:white;
color:red;
font-size:15;
text:bold;
width:25%;
}

.bu
{
height:42px;
background-color:white;
margin:10px 5px;
fint-size:10px;
color:black;
padding:5px 20px;
text-decoration:none;
border-radius:5px;
float:right;
}
.bu:hover
{
background-color:orange;
}

.button 
{
border:30%;
border-spacing:30%;
font-family:Arial;
text-transform:uppercase;
width:20%;
height:6%;
border-radius:20px;
}

img.one
{
width:200px;
height:200px;
background:red;
transition:width 2s;
-webkit-transition: width 2s;
}
img.one
 {
  transform: rotate(15deg);
}

img.two
{
width:200px;
height:200px;
background:red;
transition:width 2s;
-webkit-transition: width 2s;
}
img.two 
{
  transform: skewX(10deg);
}
img.three
{
width:200px;
height:200px;
background:red;
transition:width 2s;
-webkit-transition: width 2s;
}
img.three 
{
  transform: skewX(10deg);
}

fieldset
{
background-color:#ffe6ff;

}
</style>

</head>
<body style="background-color:">
<div style="height:100%;width:100%;border:1px;background-color:;">





<div style="height:25%;width:100%;border:1px;background-color:black;">
<center><img src="img/logo1.png" height=55% width=80%></center>
<a class=bu href=login.php><b>Log In</b></a>
<a class=bu href=sign.php><b>Sign Up</b></a>

</div>
<div style="height:10%;width:100%;border:1px;">

<table align=center height=100% width=100% style="background-color:#d7bde2;">

<tr>
<td align=center class=one><a href="special.php" class=one><b>Our Speciality</b></a></td>

<td align=center class=one><a href="gallery.php" class=one><b>Gallery</b></a></td>
<td align=center class=one><a href="package.php" class=one><b>Popular Packages</b></a></td>
<td align=center class=one><a href="contact2.php" class=one><b>Contact Us</b></a></td>
<td align=center class=one><a href="about.php" class=one><b>About Us</b></a></td>
</font>

</tr>
</table>
</div>

<div  style="height:65%;width:100%;">


<div style="width:50%;height:100%;float:left;background-color:white
" >
<br><center>
<h1>Let's Go Anywhere... </h1>
<form name=f1  method="post" action="">
<fieldset style="border-radius:5px;width:60%">
<legend><h3>Login Here</h3></legend>
<br><b>Username </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=txtnm id=txtnm placeholder="enter your name" pattern="\D+" 
required ><br><br>
<b>Password </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=password name=txtps id=txtps placeholder="enter your password" required 
><br><br>
<input type=submit value=login class=button name=btnlog><br><br>
</fieldset>
</form>
</center>
</div>
<div  style="width:50%;height:100%;float:right;top:10px;background-color:white" ><br>
<br><center>&nbsp;&nbsp;&nbsp;
<img class=two src="img/log1.jpg" height=100px width=100px>
&nbsp;&nbsp;&nbsp;
<img class=one src="img/log2.jpg" height=100px width=100px>
&nbsp;&nbsp;&nbsp;
<img class=three src="img/log3.jpg" height=100px width=100px>
</center>
<br>
<center>&nbsp;&nbsp;&nbsp;
<img class=one src="img/log4.jpg" height=80px width=100px>
&nbsp;&nbsp;&nbsp;
<img class=two src="img/log5.jpg" height=80px width=100px>
&nbsp;&nbsp;&nbsp;
<img class=one src="img/log6.jpg" height=80px width=100px>
</center>
</div>
</div>
</div>
</div>
</center>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("tour",$cn);
if(isset($_POST["btnlog"]))
{
$u=$_POST["txtnm"];
$p=$_POST["txtps"];
$q="select * from admin where username='$u' and password='$p'";
$result=mysql_query($q);
if($a=mysql_fetch_array($result))
{
$_SESSION['username']=$u;
echo header("location:profile.php");
}
else
{
echo"<script>alert('Incorrect Username or Password')</script>";
mysql_close($cn);
}
}
?>