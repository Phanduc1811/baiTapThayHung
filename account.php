<!DOCTYPE html>
<html>
<head>
<title>Account</title>
<?php
include_once 'pages/headLink.php';
?>			
</head>
<body>
	<!--header-->
	<?php
	include_once './pages/header.php';
	?>
  <!--End-header-->
	
	<div class="container">
		<div class="account">
			<h2 class="account-in">Account</h2>
				<form>
				<div>
					<span>First Name*</span>
					<input type="text">
				</div> 	
				<div>			
					<span class="name-in">Last Name*</span>
					<input type="text"> 
				</div>			
				<div> 	
					<span class="mail">Email*</span>
					<input type="text"> 
				</div>
				<div> 
					<span class="word">Password*</span>
					<input type="password">
				</div>				
					<input type="submit" value="Login"> 
				</form>
		</div>
	</div>
		<!---->
		<?php
		include_once './pages/footer.php';
		?>
</body>
</html>