<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	 $uid=$_SESSION['uid'];
?>
<html>
<title>Bike Portal</title>
<style>

p
{
	color:#ffffff;
	text-align: center;
	text-transform: uppercase;
	 font-size:15px;
}

ul {
	padding:30px;
	
  list-style-type: none;
  overflow: hidden;
  background:black;
   background-repeat: no-repeat;
   background-size: 1420px  200px;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
   border-radius:0px;
}

li {
  float: left;
}

li a {
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  border-radius:8px;
}

li a:hover {
  background-color: brown;
}

.active {
  background-color: brown;
}

#footer {
   padding: 30px;
  background:black;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {

  padding:150px 250px 400px 20px;
  background:url("images/re.jpg");
  background-repeat: no-repeat;
  background-size: 1420px  600px;
  border-radius:5px;
   border-radius:10px;
    text-align:left;
   font-size:60px;
   color:#ffffff;
   color:white;
}

</style>
</head>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a class="active" href="adminhome.php"><strong>Admin Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="booking.php"><strong>Booking Details</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="viewu.php"><strong>User Details</a></li>
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">Online Bike Rental portal</div>



<table width="98%" align="center">

<tr>
		<td colspan="10" align="center"><strong>View Your Booking Status</strong></td>
  </tr>

	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="7%"><div align="center" class="style6"><strong>Booking Id</strong> </div></td>
		     <td width="11%"><div align="center" class="style6"><strong>Bike Name</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Version</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>From</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>To</strong> </div></td>
			   <td width="10%"><div align="center" class="style6"><strong>Amount</strong> </div></td>
			     <td width="10%"><div align="center" class="style6"><strong>License</strong> </div></td>
				  <td width="10%"><div align="center" class="style6"><strong>Name</strong> </div></td>
				   <td width="10%"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
				    <td width="10%"><div align="center" class="style6"><strong>Address</strong> </div></td>
				  </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from book where uid='$uid'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$bid=$row['bid'];
		$uid=$row['uid'];
		$qry1=mysql_query("select * from bikes where id='$bid'");
		$row1=mysql_fetch_array($qry1);
		$qry2=mysql_query("select * from register where id='$uid'");
		$row2=mysql_fetch_array($qry2);
		?>

        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		  <td><div align="center"><?php echo $row1['name'];?></div></td>
		     <td><div align="center"><?php echo $row1['model'];?></div></td>
			  <td><div align="center"><?php echo $row['frm'];?></div></td>
			   <td><div align="center"><?php echo $row['to'];?></div></td>
			   <td><div align="center"><?php echo $row['amount'];?></div></td>
				 <td><div align="center"><img src="images\<?php echo $row['license'];?>"  width="100" height="100"/></div></td>
				<td><div align="center"><?php echo $row2['name'];?></div></td>
				<td><div align="center"><?php echo $row2['phone'];?></div></td>
				<td><div align="center"><?php echo $row2['address'];?></div></td>
				   		 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		?>
				<tr>

		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>






<div id="footer"> <p>copyrights & designedby@Bike Portal</p>
</div>