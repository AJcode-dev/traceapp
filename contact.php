<?php

if($_POST["name"]) {
    $recipient="codded.d128@gmail.com";
    $senderFname=$_GET["fname"];
    $senderLname=$_GET["lname"];
    $senderEmail=$_GET["email"];
    $subject=$_GET["subject"];
    $message=$_GET["message"];

    $mailBody="Name: $senderFname\n".
    "Email: $senderEmail\n".
    "$message";
    
    mail($recipient, $subject, $mailBody, "From: $senderFname <$senderEmail>");

    $thankYou ="<p>Thank you for choosing TracLine, a representative will contact you.</p>";
}
   else{
    $thankYou ="<p>sorry</p>";
       }
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trsnceline</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.html"><img src="images/about/image6.jpeg" alt="" style="margin-top:-7px;" class="img-responsive" /></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.html" >Home</a></li>
                <li role="presentation"><a href="services.html">Services</a></li>
                <li role="presentation"><a href="track.html">Track</a></li>
                <li role="presentation"><a href="portfolio.html">About</a></li>
                <li role="presentation"><a href="contact.php" class="active">Contact</a></li>
                <li role="presentation"><a href="account.php">My ACCOUNT</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="contact">
    <div class="container">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Contact Us</h2>
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Traceline appreciates your interest,Thank you.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-md-7">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51626.70886405715!2d-0.22105001589576345!3d5.597715470419004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9084b2b7a773%3A0xbed14ed8650e2dd3!2sAccra!5e0!3m2!1sen!2sgh!4v1582348927419!5m2!1sen!2sgh"  width="100%" height="380" frameborder="0" style="border:0" ></iframe>
      </div>
    </div>

    <div class="contact-info">
      <div class="col-md-5">
        <h2>We Are TRACELINE</h2>
        <h3>That Inspires Our Customers & Clients</h3>
        <p>Use the contact options below or Complete the form to get in touch with our customer support.</p>
        <ul>
          <li><i class="fa fa-home fa-2x"></i> Accra, Ghana</li>
          <li><i class="fa fa-phone fa-2x"></i> +233 30 29 54815</li>
          <li><i class="fa fa-envelope fa-2x"></i> traceline@email.com</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="contact-form">
    <div class="container">
     
        <div class="col-md-12">
          <div id="sendmessage">
          <?= $thankYou; ?>
          </div>
          <!-- <div id="errormessage"></div> -->
          <form action="contact.php" method="POST" role="form" class="">
            <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="fname" class="form-control" id="fname" placeholder="Your First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="lname" id="lname" placeholder="Your Last Name" data-rule="lname" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-12">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit"  class="btn btn-primary btn-lg" style="background-color:#C0392B;">Send Message</button></div>
          </div>
          </form>
        </div>
      </div>  
    
  </div>

  <footer>
    <div class="footer">
      <div class="container">
        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
          <h2 style="color:Red;">TRACELINE</h2>
          <p>Traceline is an enterprising transpotort and haulage facilitator, committed connecting customers with their goods in transit.</p>
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
          <h3>Legal</h3>
          <ul>
            <li>Terms Of Use</li>
            <hr>
            <li>Privacy Policy</li>
            <hr>
            <li>Fraud Prevention </li>
          </ul>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
          <h3>CONTACT INFO</h3>
          <ul>
            <li><i class="fa fa-home fa-2x"></i> Accra, Ghana</li>
            <hr>
            <li><i class="fa fa-phone fa-2x"></i> +233 30 29 54815</li>
            <hr>
            <li><i class="fa fa-envelope fa-2x"></i> traceline@email.com</li>
          </ul>
        </div>

      </div>
    </div>

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="credits">
           
             Designed by <a href="">Aj.code</a>
            </div>
          </div>
          <div class="col-md-6">
            <ul class="pull-right">
              <li role="presentation"><a href="index.html" class="active">Home</a></li>
              <li role="presentation"><a href="services.html">Services</a></li>
              <li role="presentation"><a href="track.html">Track</a></li>
              <li role="presentation"><a href="portfolio.html">About</a></li>
              <li role="presentation"><a href="contact.php">Contact</a></li>
              <li role="presentation"><a href="account.php">My ACCOUNT</a></li>
            </ul>
          </div>
        </div>
        <div class="pull-right">
          <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
        </div>
      </div>
    </div>
  </footer>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/functions.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
