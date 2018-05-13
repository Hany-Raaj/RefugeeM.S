<?php
	 function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	
	
	if(isset($_POST['insert'])){
  include('config.php');  
			$a1= $_POST['a1'] ;
			$a2= $_POST['a2'] ;
			$a3 =  $_POST['a3'] ;			
			
			$a4= $_POST['a4'] ;
			$a5= $_POST['a5'] ;
			$a6 =  $_POST['a6'] ;
			$a7 =  $_POST['a7'] ;
			
		$sqlx = "INSERT INTO donate (a1,a2,a3,a4,a5,a6,a7) VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7')";
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
        <title>Contact | Kanchan Welfare Trust</title>
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
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:kanchanwelfaretrust001@gmail.com">kanchanwelfaretrust@gmail.com</a> </li>
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
                  
                  <a class="navbar-brand" href="index.php"><span style="font-size:25px;">Kanchan</span><span> Welfare Trust</span></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="causes.php">OUR ACTIVITIES</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a class="is-active"  href="donation.php">DONATION</a></li>
					

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">DONATE US <span class="title-under"></span></h1>
			<p class="page-description">
				Your little donation can save a life
			</p>
			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">DONATION FORM <span class="title-under"></span></h2>

					<form action="donation.php"method="POST">

						<div class="row">
                            <div class="form-group col-md-12">
	                            <input type="number" name="a1" class="form-control" placeholder="Amount*"  >
	                        </div>
	                        <div class="form-group col-md-6">
	                            <input type="text" name="a2" class="form-control" placeholder="First Name*"  >
	                        </div>
							<div class="form-group col-md-6">
	                            <input type="text" name="a3" class="form-control" placeholder="Last Name*"  >
	                        </div>

	                         <div class="form-group col-md-6">
	                            <input type="email" name="a4" class="form-control" placeholder="E-mail*"  >
	                        </div>
	                        
	                        <div class="form-group col-md-6">
	                            <input type="email" name="a5" class="form-control" placeholder="Phone*"  >
	                        </div>
	                        <div class="form-group col-md-12">
	                            <input type="email" name="a6" class="form-control" placeholder="Address*"  >
	                        </div>
							
						</div>

                        <div class="form-group">
                            <textarea name="a7" rows="5" class="form-control" placeholder="Message*" required></textarea>
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

					<h2 class="title-style-2"> KANCHAN WELFARE TRUST accounts <span class="title-under"></span></h2>
					<p>
						You can send your donation one these accounts.
					</p>

					<div class="contact-items">
						<ul class="list-unstyled contact-items-list">
                            <li class="contact-item">
                               <div class="row">
                                <div class="col-sm-2">
							         <img src="assets/images/donation/bkash-logo-FBB258B90F-seeklogo.com.png" style="width:45px;">
							    </div> 
							     <div class="col-sm-10"> 
							     (0088)01816585922<br>(0088)01726467823
							     </div>
							     </div>
							 </li>
							<li class="contact-item mt-3"><div class="row">
							    <div class="col-sm-2">
							         <img src="assets/images/donation/rupali-bank-limited,banani.jpg" style="width:45px;">
							    </div> 
							     <div class="col-sm-10"> 
							         Kanchan Welfare Trust,<br>A/c: 5702011001812,<br>Rupali Bank ltd. Basail Branch,<br>Tangail, Bangladesh
							     </div>
							</div></li>
							<li class="contact-item mt-3"><div class="row">
                                 <div class="col-sm-2">
							         <img src="assets/images/donation/paypal-logo-C83095A82C-seeklogo.com.png" style="width:45px;">
							    </div> 
							     <div class="col-sm-10"> 
							      sharifdp@yahoo.com
							     </div>
                                </div>
							</li>

							<li class="contact-item mt-3"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> kanchanwelfaretrust@gmail.com</li>
						</ul>
					</div>

					
					
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>

<!--
	<div id="contact-map" class="contact-map">
		
	</div>
-->


    <footer class="main-footer">
<!--

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <p>
                                    <strong>Sadaka</strong> ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
                                </p> 

                                <p>
                                    ILorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
                                </p>

                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    <li class="tweet"> 

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4 

                                    </li>

                                    <li class="tweet"> 

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4 

                                    </li>

                                    <li class="tweet"> 

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4 

                                    </li>

                                </ul>
                            </div>
                            
                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">
                        
                                            <div class="alert alert-success" role="alert">
                                              
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                              
                                            </div>
                                            
                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>
                                        
                                    </form>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>
-->

        <div class="footer-bottom">

            <div class="container text-right">
                 @ copyrights 2018 - by Kanchan Welfare Trust
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
