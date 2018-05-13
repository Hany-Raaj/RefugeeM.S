<?php
	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	
	//contact
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
	
	if(isset($_POST['delete'])){
		include('config.php');  
		$id= $_POST['id'] ;
		
		$query = "DELETE FROM contact WHERE id='$id'";
		if (mysqli_query($conn, $query)) {
			phpAlert("Data Deleted Successfully...") ;
			} else {
			echo 'Failed';
		}
		
	}
	
	if(isset($_POST['send'])){
		
		
		$contact=$_POST['email'];
		$subject="Reply From Welfare";
		$message=$_POST['message'];
		
		
		require_once('mailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "ssl";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 465;             
		$mail->AddAddress($contact);
		$mail->Username="matsolutionsinc4@gmail.com";  
		$mail->Password="I Love Crypto Fiat Money";            
		$mail->SetFrom('matsolutionsinc4@gmail.com','Welfare');
		$mail->AddReplyTo("matsolutionsinc4@gmail.com","Welfare");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
		phpAlert("Success  ");
	}
	
	//donate
	
	
	if(isset($_POST['delete2'])){
		include('config.php');  
		$id= $_POST['id'] ;
		
		$query = "DELETE FROM donate WHERE id='$id'";
		if (mysqli_query($conn, $query)) {
			phpAlert("Data Deleted Successfully...") ;
			} else {
			echo 'Failed';
		}
		
	}
	
	
	//POST
	
	if(isset($_POST['postinsert'])){
		include('config.php');  
		$a2= $_POST['a2'] ;
		$a4= $_POST['a4'] ;
		$a6= $_POST['a6'] ;
		
		
		$sqlx = "INSERT INTO code (a2,a4,a6) VALUES ('$a2','$a4','$a6')";
        try{
            $update_Result = mysqli_query($conn, $sqlx);		
            if($update_Result)
            {
                if(mysqli_affected_rows($conn) > 0)
                {
					phpAlert("succes");
					}else{   
				}
			}
			else {  }
			} catch (Exception $ex) {
			
			
		}
	}	
	
	if(isset($_POST['deletepost'])){
		include('config.php');  
		$id= $_POST['id'] ;
		
		$query = "DELETE FROM code WHERE id='$id'";
		if (mysqli_query($conn, $query)) {
			phpAlert("Data Deleted Successfully...") ;
			} else {
			echo 'Failed';
		}
		
	}
	
	//file upload
	if(!empty($_FILES['uploaded_file']))
	{
		$path = "upload/";
		$path = $path . basename( $_FILES['uploaded_file']['name']);
		$fname =basename( $_FILES['uploaded_file']['name']);
		
		if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
			
			phpAlert("File been uploaded");
			} else{
			phpAlert("File Not upload");
		}
	} 


	
	
?>


<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Admin | Help Forum</title>
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
		<style type="text/css">
			body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
			}
			table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
			}
			
			h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
			}
			
			table td {
			transition: all .5s;
			}
			
			/* Table */
			.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
			}
			
			.data-table th, 
			.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
			}
			.data-table caption {
			margin: 7px;
			}
			
			/* Table Header */
			.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
			}
			
			/* Table Body */
			.data-table tbody td {
			color: #353535;
			}
			.data-table tbody td:first-child,
			.data-table tbody td:nth-child(4),
			.data-table tbody td:last-child {
			text-align: left;
			}
			
			.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
			}
			.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
			}
			
			/* Table Footer */
			.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: left;
			}
			.data-table tfoot th:first-child {
			text-align: left;
			}
			.data-table tbody td:empty
			{
			background-color: #ffcccc;
			}
		</style>
		
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
							
							<a class="navbar-brand" href="index.php"><span style="font-size:25px;">Help</span><span> Forum</span></a>
							
						</div>
						
						<div id="navbar" class="navbar-collapse collapse pull-right">
							
							<ul class="nav navbar-nav">
								
								<li><a href="index.php">HOME</a></li>
								<li><a href="about.php">ABOUT US</a></li>
								<li><a href="causes.php">OUR ACTIVITIES</a></li>
								<li><a href="gallery.php">GALLERY</a></li>
								<li><a   href="contact.php">CONTACT</a></li>
								<li><a href="donation.php">DONATION</a></li><li><a class="is-active" href="admin.php">ADMIN</a></li>
								
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
		
		<!-- sec1-->
		<div class="main-container fadeIn animated">
			
			<div class="container"style="background-color:lightgray;">
				
				<div class="row">
					
					<div class="col-md-12 col-sm-12 col-form">
						
						<h2 class="title-style-2">POST  <span class="title-under"></span></h2>
						
						<form action="admin.php" class=" " method="POST">
							
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="id" class="form-control" placeholder="Enter ID*" required>
									<button type="submit"name="deletepost" class="btn btn-primary pull-right">Delete</button>
								</div>
								
							</div>
							
							<div class="form-group">
								
								
							</div>
							
							<div class="clearfix"></div>
							
						</form>	
						
						<div class="section-content">
							<div class="row table-responsive">				
								<table class=" data-table">		
									<thead>
										<tr>
											<th>ID</th>
											<th>Img</th>
											<th>Heading</th>
								 						
										</tr>
									</thead>
									<tbody>
										
										<?php					
											
											
											include('config.php');
											$search_Query = "select * from code ";   
											$search_Result = mysqli_query($connect, $search_Query); 
											if($search_Result)
											{
												if(mysqli_num_rows($search_Result))
												{
													while($row = mysqli_fetch_array($search_Result))
													{
														//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
														echo '<tr>	
														<td>'.$row['id'].'</td>
														<td>'.$row['a2'].'</td>
														<td>'.$row['a4'].'</td>
												 
														
														</tr>';	
													}
												}else{}
												}else{     
											}
											
											
											
											
											
											
											
											
											
											
										?>
									</tbody>
								</table>
								<div class="clearfix"style="padding-bottom:50px;"></div>
								<!-- Infinity Loadmore Button -->						
							</div>
						</div> 
						
										<div class="box-header with-border">
											<h3 class="box-title">IMG Uploader</h3>
										</div>
										
										<form enctype="multipart/form-data" action="admin.php" method="POST">
											<div class="col-xs-3">
												<button type="submit" value="Upload">Upload</button>
											</div>
											<div class="col-xs-3">
												<input type="file" name="uploaded_file" style="color: gray;padding-bottom:10px;" ></input>
											</div>				       
											</form>	
											
											
											
											<div class="col-md-3">
												<button type="submit" id="myBtn"      class="btn btn-info pull-right">File Manager</button>
											</div>					
													<div class="modal fade" id="myModal" role="dialog" >
												<div class="modal-dialog"style="height:0px;width:1000px;">    
													<!-- Modal content-->
													<div class="modal-content"style="height:550px;">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">File Manager </h4>
														</div>
														<div class="modal-body"style="height:430px;">
															<iframe src="upload" width="100%" height="100%" frameborder="0" allowfullscreen overflow-x='hidden' overflow-y='hidden' marginwidth='0' marginheight='0'></iframe>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													</div>     
												</div>
											</div> 									
											
					
											
											
						</br>
						<form action="admin.php" class=" " method="POST">
							
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="a2" class="form-control" placeholder="img name*"  >
								</div>
								
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="a4" class="form-control" placeholder="header"  >
								</div>
								
							</div>
							
							<div class="form-group">
								<textarea name="a6" rows="5" class="form-control" placeholder="Details*"  ></textarea>
							</div>
							
							<div class="form-group alerts">
								
								<div class="alert alert-success" role="alert">
									
								</div>
								
								<div class="alert alert-danger" role="alert">
									
								</div>
								
							</div>	
							
							<div class="form-group">
								<button type="submit"name="postinsert" class="btn btn-primary pull-right">Post</button>
								
							</div>
							
							<div class="clearfix"></div>
							
						</form>	
 
						
					</div>
					
					
					
					
				</div> <!-- /.row -->
				
				
			</div>
			
			
			
		</div>	
		
		
		
		
		
		<!-- sec2-->
		<div class="main-container fadeIn animated">
			
			<div class="container"style="background-color:lightgray;">
			
 
				
				<div class="row">
					
					<div class="col-md-12 col-sm-12 col-form">
						
						<h2 class="title-style-2">CONTACT  <span class="title-under"></span></h2>
						
						<form action="admin.php" class=" " method="POST">
							
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="id" class="form-control" placeholder="Enter ID*" required>
									<button type="submit"name="delete" class="btn btn-primary pull-right">Delete</button>
								</div>
								
							</div>
							
							<div class="form-group">
								
								
							</div>
							
							<div class="clearfix"></div>
							
						</form>	
						
						<div class="section-content">
							<div class="row table-responsive">				
								<table class=" data-table">		
									<thead>
										<tr>
											<th>ID</th>
											<th>Email</th>
											<th>Name</th>
											<th>Message</th>								
										</tr>
									</thead>
									<tbody>
										
										<?php					
											
											
											include('config.php');
											$search_Query = "select * from contact ";   
											$search_Result = mysqli_query($connect, $search_Query); 
											if($search_Result)
											{
												if(mysqli_num_rows($search_Result))
												{
													while($row = mysqli_fetch_array($search_Result))
													{
														//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
														echo '<tr>	
														<td>'.$row['id'].'</td>
														<td>'.$row['a1'].'</td>
														<td>'.$row['a2'].'</td>
														<td>'.$row['a3'].'</td>
														
														</tr>';	
													}
												}else{}
												}else{     
											}
											
											
											
											
											
											
											
											
											
											
										?>
									</tbody>
								</table>
								<div class="clearfix"style="padding-bottom:50px;"></div>
								<!-- Infinity Loadmore Button -->						
							</div>
						</div> 
						
						
						
						
						
						<form action="admin.php" class=" " method="POST">
							
							<div class="row">
								<div class="form-group col-md-6">
									<input type="email" name="email" class="form-control" placeholder="Send to*" required>
								</div>
								
							</div>
							
							<div class="form-group">
								<textarea name="message" rows="5" class="form-control" placeholder="Repty*" required></textarea>
							</div>
							
							<div class="form-group alerts">
								
								<div class="alert alert-success" role="alert">
									
								</div>
								
								<div class="alert alert-danger" role="alert">
									
								</div>
								
							</div>	
							
							<div class="form-group">
								<button type="submit"name="send" class="btn btn-primary pull-right">Send message</button>
								
							</div>
							
							<div class="clearfix"></div>
							
						</form>
						
					</div>
					
					
					
				</div> <!-- /.row -->
				
				
			</div>
			
			
			
		</div>
		
		
		
		
		
		
		
		<!-- sec3-->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
		<script>
			$(document).ready(function(){
				$("#myBtn").click(function(){
					$("#myModal").modal();
				});
			});
		</script>
			
			
			</body>
			</html>
						