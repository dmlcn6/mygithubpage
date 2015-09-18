<html>
	<head>
		<title>Exploration1 CI</title>
	</head>
	<body>

			<h1> Welcome to the Form Validation Exploration</h1>
			<p> Code Igniter has a Library specifically for validating forms and another library for sanitizing the data items before the are uploaded to your database</p
			
			<?php echo validation_errors(); ?>
	
			<?php echo form_open('form'); ?>
			<hr>
			<h3><a href="http://trico.me/">Home</a></h3>
			<h3><a href="http://trico.me/index.php/about">About</a></h3>
			<hr>
			
			<h4> Please fill out this form incorrectly to test the Form controller where each error message is being generated. </h4> 
			
			<h5>Username</h5>
			<input type="text" name="username" value="" size="50" />

			<h5>Password</h5>
			<input type="text" name="password" value="" size="50" />

			<h5>Password Confirm</h5>
			<input type="text" name="passconf" value="" size="50" />

			<h5>Email Address</h5>
			<input type="text" name="email" value="" size="50" />

			<div><input type="submit" value="Submit" /></div>

		</form>
		
	</body>
</html>