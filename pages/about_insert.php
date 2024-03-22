<?php
	include('../connection.php');
	$aid=$_GET['aid'];
	$name = $_POST['name'];
	$number = $_POST['mnumber'];
	$email = $_POST['email'];
	$reg = $_POST['regdate'];	
	
			
	

	//$insize=mysqli_query($con,"insert into tbl_about_us (heder_name,title_name,description,heder_image,small_image,homedec,homeimage) values ('$heder','$stitle ','$desc','$img1','$img2','$hdesc','$img3')");
$insize=mysqli_query($con,"update tbl_users set name='$name',number='$number',mailid='$email',regdate='$reg' where id='$aid'");
	//$insize=mysqli_query($con,"update from tbl_about_us set heder_name='$heder' where id=6");
if($insize)
			{
					  echo "<script>window.location.href = 'tables.php';alert('Client Updated Sucessfully '); </script> ";
		
					die;
			} 
	
				else
				{
					
						  echo "<script>window.location.href = 'tables.php';alert('Please Contect to Developer '); </script> ";
	}
	//	}
  //  if($check !== false) {
    //    echo "File is an image - " . $check["mime"] . ".";
    //    $uploadOk = 1;
    //} else {
    //    echo "File is not an image.";
     //   $uploadOk = 0;
 //   }
//}
?>