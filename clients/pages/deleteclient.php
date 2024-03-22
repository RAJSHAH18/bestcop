<?php
	include('../connection.php');
	
	if(isset($_REQUEST['aid']))
	{	
		$id=$_REQUEST['aid'];
		
		$qry=mysqli_query($con,"delete from tbl_users where id ='$id'") or die(mysqli_error());
		$row=mysqli_fetch_array($qry);
		
	
	header("location:tables.php");	
	}
	else
	{
		echo "<script>window.location.href = 'tables.php';alert('Please Contact to developer'); </script> ";
	}
?>