<?php
$con=mysqli_connect('localhost','root','','timetable');
$sel=mysqli_query($con,"select * from attendance");




?>




<!DOCTYPE html>
<head>
	<title>
    </title>
    

    <style type="text/css">
		    	*{
			margin:0 auto;
		}
		td{
			text-align: center;
		}

    </style>
	
</head>


<body>
<table width="1000" border="1">
  <tr>
    <td width="161">Days/time</td>
    <td width="130">9-10</td>
    <td width="130">10-11</td>
    <td width="130">11-12</td>
    <td width="130">12-1</td>
    <td width="130">1-2</td>
    <td width="130">2-3</td>
    <td width="130">3-4</td>
    <td width="130">4-5</td>
  </tr>


	<?php $row=mysqli_fetch_array($sel);
		if($row['day']=="MON"){

	 ?>

  <tr>
    <td>Monday</td>
    <td colspan="2">DE <?= $row['9-10'] ?></td>
    <td>DBMS <?= $row['11-12'] ?></td>
    <td>&nbsp;</td>
    <td colspan="2">DBMS LAB(A2)  <?= $row['1-2'] ?></td>
   
    <td colspan="2">DE LAB(A2)  <?= $row['3-4'] ?></td>
   
  </tr>
<?php } ?>

  <tr>
    <td>Tuesday</td>
    <td>DE</td>
    <td>COA</td>
    <td colspan="2">SE LAB(A2)</td>
  
    <td>&nbsp;</td>
    <td>DM</td>
    <td>FOM</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Wednesday</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>SE</td>
    <td>&nbsp;</td>
    <td>DBMS</td>
    <td>COA</td>
    <td>DM</td>
    <td>FOM</td>
  </tr>
  <tr>
    <td>Thursday</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>DM</td>
    <td>&nbsp;</td>
    <td>DBMS</td>
    <td>COA</td>
    <td>SE</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Friday</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>COA</td>
    <td>SE</td>
    <td>DM</td>
    <td>FOM</td>
  </tr>
</table>
</body>
</html>