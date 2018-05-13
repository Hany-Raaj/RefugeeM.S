<?php
	 function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	
	
	if(isset($_POST['insert'])){
  include('config.php');  
			$a1= $_POST['email'] ;
			$a2= $_POST['name'] ;
			$a3 =  $_POST['message'] ;
			
		$sqlx = "INSERT INTO contact (a1,a2,a3) VALUES ('$a1','$a2','$a3')";
        try{
            $update_Result = mysqli_query($conn, $sqlx);		
            if($update_Result)
            {
                if(mysqli_affected_rows($conn) > 0)
                {
					phpAlert("Thank you Sir, We will reply you very soon");
					}else{   
				}
			}
			else {  }
			} catch (Exception $ex) {
			
         
		}
	}
	
	?>


<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Contact | Help Forum</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+8801816585922   </a>,<a href="tel:"> +447550741345 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:kanchanwelfaretrust001@gmail.com">help@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="https://www.facebook.com/kanchanwelfare.trust.5" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>

                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.php"><span style="font-size:25px;">Help</span><span>Forum</span></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="causes.php">OUR ACTIVITIES</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a class="is-active"  href="contact.php">CONTACT</a></li>
                  

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
			<p class="page-description">
				We will try to response your message as soon as possible
			</p>
			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>

					<form action="contact.php" class=" " method="POST">

						<div class="row">

							<div class="form-group col-md-6">
	                            <input type="text" name="name" class="form-control" placeholder="Name*" required>
	                        </div>

	                         <div class="form-group col-md-6">
	                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
	                        </div>
							
						</div>

                        <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Message*" required></textarea>
                        </div>

                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							
                        </div>	

                         <div class="form-group">
                            <button type="submit"name="insert" class="btn btn-primary pull-right">Send message</button>
 
                        </div>

                        <div class="clearfix"></div>

					</form>

				</div>

				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2"> HELP FORUM CONTACTS <span class="title-under"></span></h2>
					<p>
						<b>Help Forum</b> always waiting for your help. If you want to contact with us then it will pleasure to us!
					</p>

					<div class="contact-items">
						<ul class="list-unstyled contact-items-list">
                            <li class="contact-item">
                               <div class="row">
                                <div class="col-sm-2">
							         <span class="contact-icon"> <i class="fa fa-map-marker"></i></span>
							    </div> 
							     <div class="col-sm-10"> 
							    Help Forum<br>Dhanmondi<br>Dhanmondi, Dhaka, Bangladesh
							     </div>
							     </div>
							 </li>
							<li class="contact-item"><div class="row">
							    <div class="col-sm-2">
							         <span class="contact-icon"> <i class="fa fa-phone"></i></span>
							    </div> 
							     <div class="col-sm-10"> +8801816585922<br>+8801724927937<br>+447550741345<br>+44(0)1312373850</div>
							</div></li>
							<li class="contact-item"><div class="row">
							    HelpLine
                                 <div class="col-sm-2">
							         <span class="contact-icon"> <i class="fa fa-phone"></i></span>
							    </div> 
							     <div class="col-sm-10"> +8801816585922<br>+8801724927937<br>+447550741345
							     </div>
                                </div>
							</li>

							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> help@gmail.com</li>
						</ul>
					</div>

					
					
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>


    <footer class="main-footer">

        <div class="footer-bottom">

            <div class="container text-right">
                 @ copyrights 2018 - by king's coders
            </div>
        </div>
        
    </footer>




       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>


        <!-- Google map  -->
        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>


        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
