<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">

<td align="center">User Dashboard</td>
</tr>

<td>
<?php
if($_SESSION["username"]) 
{
?>
Welcome <?php echo $_SESSION["username"]; ?>.</br></br>
Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
</td>
</tr>
</body>
</html>
<html>

   

   <body>
   <center>
      <form action="text.php" method="post">
		
		<label>Enter Notes:</label>
		
		<div>
			<textarea rows="10" cols="60" name="content" required></textarea>
		</div>
		
		<input type="submit" name="submit" value="Submit">
		
	</form></br></br>
	<input type="button" onClick="location.href='Showdata.php';" value="ShowData"/>
	  </center>
   </body>

</html>