<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Careers - Capeeza</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/images/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .img-fluid {
      border-radius: 10px;
    }
   
    .career{
        color:cyan !important;
    }
    @media (max-width: 768px) {
        .career{
      color:#ff5821 !important;
    } 
    }
    /* .resume::placeholder {
  color:rgb(133,130,130);
  opacity: 1;
  } */
  </style>

</head>

<body>


  <?php include ("include/header.php")?>

  <!-- ======= Hero Section ======= -->
  <section id="hero2" class="d-flex flex-column justify-content-center align-items-center"
    style="background: url('assets/img/hero-bg.jpg') center center;">
    <div class="container" data-aos="fade-in">
      <h1>Careers</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Careers</h2>
          <p data-aos="fade-up">Find Career Opportunities Here...</p>
        </div>


        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-12 col-lg-12 mt-4">
            <form enctype="multipart/form-data" method="post"  role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                <input class="form-control" type="text" name="sender_name" placeholder="Your Name" required/>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input class="form-control" type="email" name="sender_email" placeholder="Your Email" required/>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="tel" name="phone" class="form-control" id="phone" maxlength="10" placeholder="Phone No" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-select" name="subject" aria-label="Default select example">
                    <option selected disabled>Qualification</option>
                    <option value="CA">Chartered Accountant (CA)</option>
                    <option value="post_graduate">Post Graduate</option>
                    <option value="graduate">Graduate</option>
                    <option value="under_graduate">Under Graduate</option>
                  </select>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="Salary" class="form-control" id="Salary" placeholder="Salary Expectation"
                    required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" onfocus="(this.type='file')" name="attachment" id="Resume" placeholder="Upload Resume"
                    required>
                </div>
              </div>
              <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
               <div class="text-center mt-3"><button name="button" type="submit" value="Submit">Send Message</button></div>
            </form>
          </div>

        </div>


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include ("include/footer.php")?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<?php

if(isset($_POST['button']) && isset($_FILES['attachment']))
{

	
	//Load POST data from HTML form
	$sender_name = $_POST["subject"]; //sender name
	$reply_to_email = $_POST["sender_email"]; //sender email, it will be used in "reply-to" header
	$subject	 = $_POST["sender_name"]; //subject for the email
	$message	 = $_POST["message"]; //body of the email
  $Salary  = $_POST["Salary"];
  $phone  = $_POST["phone"];

  $details = "Name : ".$subject."\n"."Phone : ".$phone."\n"."Email : ".$reply_to_email."\n"."Qualification : ".$sender_name."\n"."Expected Salary : ".$Salary."\n"."Message : ".$message ;

	$from_email		 = ''.$reply_to_email.''; //from mail, sender email address
	$recipient_email = 'sarveshhiwale07@gmail.com'; //recipient email address
  

	//Get uploaded file data using $_FILES array
	$tmp_name = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server
	$name	 = $_FILES['attachment']['name']; // get the name of the file
	$size	 = $_FILES['attachment']['size']; // get size of the file for size validation
	$type	 = $_FILES['attachment']['type']; // get type of the file
	$error	 = $_FILES['attachment']['error']; // get the error (if any)

	//validate form field for attaching the file
	if($error > 0)
	{
		die('Upload error or No files uploaded');
	}

	//read from the uploaded file & base64_encode content
	$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
	$content = fread($handle, $size); // reading the file
	fclose($handle);				 // close upon completion

	$encoded_content = chunk_split(base64_encode($content));
	$boundary = md5("random"); // define boundary with a md5 hashed value

	//header
	$headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
	$headers .= "From:".$from_email."\r\n"; // Sender Email
	$headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email address to reach back
	$headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
	$headers .= "boundary = $boundary\r\n"; //Defining the Boundary
		
	//plain text
	$body = "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
	$body .=  chunk_split(base64_encode($details));

		
	//attachment
	$body .= "--$boundary\r\n";
	$body .="Content-Type: $type; name=".$name."\r\n";
	$body .="Content-Disposition: attachment; filename=".$name."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";

	$body .= $encoded_content; // Attaching the encoded file with email
    
	
	$sentMailResult = mail($recipient_email, $subject, $body, $headers);

	if($sentMailResult )
	{
    ?>
<script>swal({
          icon:"success",
                title: "Apply Successfully !",
                text: "Thank you.",
                timer: 2000,
                showConfirmButton: false,
              });
      
  </script> 
    <?php
	echo "<h3>File Sent Successfully.<h3>";
	}
	else
	{
	die("Sorry but the email could not be sent.
					Please go back and try again!");
	}
}
?>


</body>

</html>