<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WINITION</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/screen.css">
	<link rel="stylesheet" href="css/styles.css">
    <link href="css/wintotheleft.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/jquery.validate.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="css/lightbox.min.css">
</head>

<body id="page-top" class="background-WYZ" >
<?php include_once("analyticstracking.php") ?>

	
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/"><img class="logo" src="img/profile.jpg"></a>
                <a class="logotext" href="/">INITION</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="WYZ.php">WYZ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
		
	
    <!-- Contact Section -->
    <section id="contact">
	
        <div >
            
	<?php

  if (isset($_POST['submit']))  {
  
  $serverName = "PANIC\WINITION";
  
$connectionInfo = array( "Database"=>"contacts", "UID"=>"zoom", "PWD"=>"password"); 

$con = sqlsrv_connect($serverName,$connectionInfo);

if(!$con){echo "Error in Database connection "; die(print_r(sqlsrv_errors(), true)); return false;}

$sql = "INSERT INTO P_Clients (vName,vEmail,vphone,vcompany,vnotes) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[company]','$_POST[message]')";
$test = "SELECT 1,1,1,1,1";

$stmt = sqlsrv_query($con,$sql);    

 if ($stmt) {
	 echo "Thank you for downloading WYZ" . "<br>" . "Please support our efforts into creating more amazing things.";
			$something = "Submission successful.";
			header('Location: /download/U_U/Setup_Wyz.msi');
 }
	 else {
		 echo "Please try again: " ;
		 $something = "Submission unsuccessful.";
	 die( print_r( sqlsrv_errors(), true));   
 }
 $output=$something;
 
 sqlsrv_free_stmt( $stmt);    
sqlsrv_close( $con);


  }
  
?>  



      
                <div class="boxed-left">
                  
					<br/>
					<p>
					<h5 style="color:white;">Tired of manipulating loads of data? Have no time to learn everything there is to learn about data manipulating software? Well here you go!</h5>
					</p>	
					<a class="example-image-link" href="img/portfolio/WYZ-app.png" data-lightbox="example-1">
					<center><img src="img/portfolio/WYZ-app.png" alt="WYZ Image" style="width:304px;height:228px;"></center>
					</a>
					<br>
						
						<h4 style="color:white;">If you have any questions or if there is something that would make our applications work better for you please let us know through the message box and we will get back to you right away.</h4>
						
                </div>
            </div>
		
	  <form name="sentMessage" id="contactForm" method="POST">
		 <div class="boxed-right">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name" id="iname" name="name" required />
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email" id="iemail" name="email" required />
						<p class="help-block text-danger"></p>
					</div>
					<div class="form-group">
						<input type="phone" class="form-control" placeholder="Phone" id="iphone" name="phone" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Company" id="icompany" name="company" required />
						<p class="help-block text-danger"></p>
					</div>
					<div class="form-group">
						<textarea rows="3" class="form-control" placeholder="Message" id="imessage" name="message"> </textarea>
						<p class="help-block text-danger"></p>
					</div>
					<div class="button-WinTiff">
						<button type="submit" class="btn btn-success btn-lg" form="contactForm" name="submit"  >DOWNLOAD</button>
					</div>
			</div>	
		</form>
			
			
					<div class="Adtower" style="text-align: right">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- AdCentral -->
						<ins class="adsbygoogle"
							 style="display:inline-block;width:300px;height:600px"
							 data-ad-client="ca-pub-9476615232006417"
							 data-ad-slot="5108956882"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>	
					
		<div class="row">
            </div>
							<div class="col-lg-12 text-center">
							<p>
							<h1 style="color:white;">ON THE HOUSE!</h1>
							</p>
							
							</div>
							
							<br>
							<br>
							<br>
							<br>
							 
							<br>
							<br>
    </section>
	
    <footer class="text-center">
        <div class="wintiff-footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <font size="5"><b>PRODUCTS</b></font>
                        <p>WinTiff<br>WinVoice<br>WYZ</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <font size="5"><b>FOLLOW US</b></font>
                        <ul class="list-inline">
                            <li>
                                <a href="https://plus.google.com/u/2/b/101701580879916244999/101701580879916244999/about" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/profile/view?id=222781743&trk=nav_responsive_tab_profile" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                 
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; WINITION 2014
                    </div>
					<br/><?php echo phpversion(); ?>
                </div>
            </div>
        </div>
    </footer>
	
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/wintotheleft.js"></script>


<script src="js/lightbox-plus-jquery.min.js"></script>
</body>

</html>

