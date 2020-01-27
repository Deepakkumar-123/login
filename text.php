<?php 
$conn = mysqli_connect('localhost','root','','project');
 if(!$conn)
{
	die(mysqli_error());
}
 
if(isset($_POST['submit']))
{
	$textareaValue = trim($_POST['content']);
	$sql = "insert into textarea_values (textarea_content) values ('".$textareaValue."')";
	$rs = mysqli_query($conn, $sql);
	$affectedRows = mysqli_affected_rows($conn);
	
	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
}
?>
<?php 
	if(isset($successMsg))
	{
		print_r($successMsg);
		
	}
?>