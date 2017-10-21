
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body id="page-top" >

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
			header('Location: /download/-_-/WinTiff-1.0-Setup.msi');
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
						<button type="submit" class="btn btn-success btn-lg" form="contactForm" name="submit"  >DOWNLOAD TRIAL</button>
					</div>
			</div>	
		</form>

</body>

</html>

<!--
 ;extension=php_mysql.dll
;extension=php_mysqli.dll

			
-->