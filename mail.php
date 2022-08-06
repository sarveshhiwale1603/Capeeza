<?php
	if(isset($_POST['submit1'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
        $services=$_POST['services'];
		$address=$_POST['address'];

		$to='sarveshhiwale07@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."address :"."\n\n".$address. "/n"."service :"."/n/n".$services;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			// echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
            echo"<script>alert('success')</script> window.location='Registration.php'";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>