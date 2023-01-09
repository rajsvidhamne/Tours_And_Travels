<?php
session_start();
?>



<html>
<head>
<style>
.button
{
height:08px;
background-color:white;
margin:10px 5px;
fint-size:10px;
color:black;
padding:5px 20px;
text-decoration:none;
border-radius:5px;
float:center;
}
.button:hover
{
background-color:orange;
}


.bu
{
height:30px;
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
.but
{
height:20px;
background-color:white;
margin:5px 15px;
font-size:20;
color:black;
padding:5px 15px;
text-decoration:none;
border-radius:5px;
float:center;
}
.but:hover
{
background-color:orange;
}

.change_content:after {
  content: "";
  animation: changetext 10s infinite linear;
  color: red;
}

@keyframes changetext {
  0% {
    content: "Darjeeling";
  }
  10% {
    content: "Agra";
  }
  20% {
    content: "Gujrat";
  }

  30% {
    content: "Jaipur";
  }
  40% {
    content: "Kerala";
  }
  50% {
    content: "Delhi";
  }
  60% {
    content: "Mumbai";
  }
70% {
    content: "Madhya Pradesh";
  }
80% {
    content: "Hyderabad";
  }
90% {
    content: "Karnataka";
  }
100% {
    content: "Jammu & Kashmir";
  }
}
th
{
font size:5;
font-face:'Castellar';
color:#660066;
}
td
{
align:center;
}
</style>
</head>
<body style="background-image:URL('img/pl.jpg');">
<div style="height:100%;width:100%">
<div style="height:23%;width:100%;border:1px;background-color:black;">
<center><img src="img/logo1.png" height=58% width=80%></center>
<a class=bu href=user.php><b>Profile</b></a>


</div>
<div style="height:70%;width:100%;border:1px;">

<center><h1>Welcome  
<?php
echo $_SESSION['username'];?>
<br>
<?php
echo "  Are You Ready  Travelling To ";
?><span class="change_content"> </span> 
<span style="margin-top: -10px;"> | </span> </center>
<hr>
<table align=center width=100% border=1px>
<tr height=50px>
<th><font size=4 face='Castellar' color=#660066 >Package Name</th>
<th><font size=4 face='Castellar' color=#660066 >Date</th>
<th><font size=4 face='Castellar' color=#660066 >Name</th>
<th><font size=4 face='Castellar' color=#660066 >Contact No.</th>
<th><font size=4 face='Castellar' color=#660066 >Age</th>
<th><font size=4 face='Castellar' color=#660066 >District</th>
<th><font size=4 face='Castellar' color=#660066 >Pincode</th>

<th><font size=4 face='Castellar' color=#660066 >Aadhar Card No.</th>

</font>
</tr>

<?php

$cn=mysql_connect("localhost","root");
$db=mysql_select_db("tour",$cn);
$q="select * from tourbook";
$rs=mysql_query($q);
while($a=mysql_fetch_array($rs))
{

$pid=$a['pakagenm'];
$pnm=$a['date'];
$pr=$a['firstname'];
$pcn=$a['contact'];
$page=$a['age'];
$pstate=$a['state'];
$pnc=$a['pincode'];
$pan=$a['aadharno'];


echo "<tr height=40px>";
 echo "
<td><font size=5>$pid</font></td>
<td><font size=5><center>$pnm</center></font></td>
<td><font size=5><center>$pr</center></font></td>
<td><font size=5><center>$pcn</center></font></td>
<td><font size=5><center>$page</center></font></td>
<td><font size=5><center>$pstate</center></font></td>
<td><font size=5><center>$pnc</center></font></td>
<td><font size=5><center>$pan</center></font></td>";


echo "</tr>";
}
mysql_close($cn);
?>

</table>

</div>
</div>
</body>
</html>
