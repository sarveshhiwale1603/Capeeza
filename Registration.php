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
            // echo"<script>alert('success')</script> window.location='Registration.php'";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Services - Capeeza</title>
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
        .blue {

            height: 125px;
            justify-content: center;
            /* border-top: 5px solid #59CCBA; */
            border-radius: 15px;
        }

        h3 {
            line-height: 40px;

        }
    </style>
      <style>
     .regi{
        color: #ff5821 !important;
    }
    .Service{
        color:cyan !important;
    }
</style>

</head>

<body>


    <?php include ("include/header.php")?>

    <!-- ======= Hero Section ======= -->
    <section id="hero2" class="d-flex flex-column justify-content-center align-items-center"
        style="background: url('assets/img/hero-bg.jpg') center center;">
        <div class="container" data-aos="fade-in">
            <h1>Registration</h1>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-up">Registration</h2>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <!-- <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li> -->
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="blue card shadow text-center ">
                            <h3>GST Registration</h3>
                        </div>

                    </div>


                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3> Pan & Tan</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Copyrights</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Logo/Trademark Registration</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Patents</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>FSSAI</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Liquor Licence</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>PF & ESIC</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Maharera Registration</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Professional Tax Registration</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Udyam / MSME Registration</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>ISO Registration</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Digital Signatur</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>NGO/Trust Registration</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Shop Act</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Arm Licence</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>SSI Registration</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>E-Way Bill Registration</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Govt. Contractor Registration</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Labour Licence</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Pollution Certificate</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <div class="blue card shadow text-center ">
                            <h3>Fire NOC</h3>
                        </div>
                    </div>

                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <img src="assets/img/hero-bg.jpg" width="100%" alt="">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <form  method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <input type="tel" name="Phone" class="form-control" id="Phone"
                                        placeholder="Phone No" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <select class="form-select" name="services" aria-label="Default select example">
                                        <option selected disabled>Services</option>
                                        <option value="GST_Registration">GST Registration</option>
                                        <option value="Pan_&_Tan"> Pan & Tan</option>
                                        <option value="Copyrights">Copyrights</option>
                                        <option value="Logo/Trademark_Registration">Logo/Trademark Registration</option>
                                        <option value="Patents">Patents</option>
                                        <option value="FSSAI">FSSAI</option>
                                        <option value="Liquor_Licence">Liquor Licence</option>
                                        <option value="PF_&_ESIC"> PF & ESIC</option>
                                        <option value="Maharera_Registration">Maharera Registration</option>
                                        <option value="Professional_Tax_Registration">Professional Tax Registration
                                        </option>
                                        <option value="Udyam/MSME_Registration">Udyam / MSME Registration</option>
                                        <option value="ISO_Registration">ISO Registration</option>
                                        <option value="Digital_Signatur">Digital Signature</option>
                                        <option value="NGO/Trust_Registration">NGO/Trust Registration</option>
                                        <option value="Shop_Act">Shop Act</option>
                                        <option value="Arm_Licence">Arm Licence</option>
                                        <option value="SSI_Registration">SSI Registration</option>
                                        <option value="E-Way_Bill_Registration">E-Way Bill Registration</option>
                                        <option value="Govt._Contractor_Registration">Govt. Contractor Registration
                                        </option>
                                        <option value="Labour_Licence">Graduate</option>
                                        <option value="Pollution_Certificate">Graduate</option>
                                        <option value="Fire_NOC">Graduate</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="address" rows="1" placeholder="Address"
                                    required></textarea>
                            </div>
                            <div class="text-center my-3"><button type="submit" name="submit1" >Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </section><!-- End Portfolio Section -->


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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>