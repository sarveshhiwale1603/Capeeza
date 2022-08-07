<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Careers - Capeeza</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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
            <form method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone No" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-select" name="Qualification" aria-label="Default select example">
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
                  <input type="text" class="form-control" onfocus="(this.type='file')" name="Resume" id="Resume" placeholder="Upload Resume"
                    required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
               <div class="text-center"><button name="submitBtn" type="submit">Send Message</button></div>
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
if(isset($_POST['submitBtn'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$Qualification=$_POST['Qualification'];
$Salary=$_POST['Salary'];
$message=$_POST['message'];
$Resume=$_POST['Resume'];

$to='sarveshhiwale07@gmail.com'; // Receiver Email ID, Replace with your email ID
$subject='Career Form Submission';
$message="Name : ".$name."\n"."Phone : ".$phone."\n"."Salary : ".$Salary."\n"."Qualification : ".$Qualification."\n"."Meassage : ".$message."\n"."Resume : ".$Resume;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)){?>
<script>swal({
      icon:"success",
            title: "Order Registered!",
            text: "Thank you.",
            timer: 2000,
            showConfirmButton: false,
          });
// swal("Message Sent!", "Thank you for contacting us.", "success");
  
</script> 

<?php
  // echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        // echo"<script>alert('success')</script> window.location='Registration.php'";
}
else{
  echo "Something went wrong!";
}
}
?>

</body>

</html>