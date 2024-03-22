<?php
	require('../connection.php');

	$name = $_POST['name'];
	$number = $_POST['mnumber'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
	$passwd = substr( str_shuffle( $chars ), 0, 8 );
	//print_r($_POST);die;
	$insize=mysqli_query($con,"insert into tbl_users (name,mailid,number,password,regdate) values('$name','$email','$number','$passwd','$date')")or die(mysqli_error($con));
	//echo $insize;die;
	if($insize)
	{ 
	/*$da="select * from tbl_users order by id desc limit 1";
	$data = mysqli_query($con,$da);
	$row = mysqli_fetch_array($data) or die(mysqli_error($con));			
		function clean_text($string)
		{
		$string = trim($string);
		$string = stripslashes($string);
		$string = htmlspecialchars($string);
		return $string;
		}
		

	require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.mail.yahoo.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';			
		//Sets the default SMTP server port
		$mail->SMTPDebug = 1;					
		//for debug
		
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username =$e_mail;					//Sets SMTP username
		$mail->Password =$pass;					//Sets SMTP password
		$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From =$e_mail;					//Sets the From email address for the message
		$mail->FromName = $comp_name;				//Sets the From name of the message
		$mail->AddAddress($row['mailid'],$row['name']);		//Adds a "To" address
		 
			$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
					
		$mail->IsHTML(true);
		 							//Sets message type to HTML				
		$mail->Subject = 'Your Digital Signature OTP For Agreement Signature';				//Sets the Subject of the message
		$mail->Body = " Welcome to ".$comp_name." This Is Your OTP For Agreement Signature ".$row['otp']."<br>
					  <br>
					 
					 
						After Clicking On Link  And Verifying Your OTP You Will Be Redirected To Company's Terms And Conditions Page 
					  <br>
					  <br>
					 Read Them Carefully And Then Upload Your Signature To Make Your Agreement With Company. 
					   
					   <br>
					   <br>
					   
					   Verification  OTP Link :<a href='".$domain."/client/verification/index.php'>Click Here</a>
					   <br>
					   <br>
					 
					 ";				//An HTML or plain text message body
		if($mail->Send())								//Send an Email. Return true on success or false on error
		{
			$error = 'Thank you for contacting us';
		}
		else
		{
			$error = 'There is an Error';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
		if(!$mail->Send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
			exit;
			}
			else
			{
			echo 'Message of Send email using Yahoo SMTP server has been sent';
			}
			*/
				echo "<script>window.location.href = 'sign-up.php';alert('Your Client Registration  Is Successfully, You will see on Client List '); </script> ";
				
	}
	
	else
		{
						  echo "<script>window.location.href = 'form-validation.php';alert('Please Contect to Developer '); </script> ";
		}
	
	
		
?>