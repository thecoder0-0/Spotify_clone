<?php

function sanitizeFormPassword($inputText){
	
	$inputText=strip_tags($inputText);
	return $inputText;
	
}



function sanitizeFormUsername($inputText){
	
	$inputText=strip_tags($inputText);
	$inputText=str_replace(" ","", $inputText);
	return $inputText;
	
}
function sanitizeFormString($inputText){
	
	$inputText=strip_tags($inputText);
	$inputText=str_replace(" ","", $inputText);
	$inputText=ucfirst(strtolower($inputText));

	return $inputText;
	
}

if(isset($_POST['loginButton'])){
//Login button was pressed	
	
}
if(isset($_POST['registerButton'])){
//Register button was pressed	
 	$username= sanitizeFormUsername($_POST['username']);
	
	$firstName=sanitizeFormString($_POST['firstName']);
	$lastName=sanitizeFormString($_POST['lastName']);
	$email=sanitizeFormString($_POST['email']);
	$email2=sanitizeFormString($_POST['email2']);
	$password= sanitizeFormPassword($_POST['password']);
	$password2= sanitizeFormPassword($_POST['password2']);

}




?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welocome to Slotify!</title>
</head>

<body>
	<div id="inputContainer">
	   <form id="loginForm" action="register.php" method="post">
		   <h2>Login to your account</h2>
		   <p>
			   <label for="loginUsername">Username</label>
			   <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. Anupam321" required>
		   </p>
		   <p>
			    <label for="loginPassword">Password</label>
		   		<input id="loginPassword" name="loginPassword" type="password"  required>
		   </p>
		   
		   <button type="submit" name="loginButton">LOG IN</button>
		</form>
		
		
		
		<form id="registerForm" action="register.php" method="post">
		   <h2>Create your free account</h2>
		   <p>
			   <label for="username">Username</label>
			   <input id="username" name="username" type="text" placeholder="e.g. Anupam321" required>
		   </p>
			<p>
			   <label for="firstName">First name</label>
			   <input id="firstName" name="firstName" type="text" placeholder="e.g. Anupam" required>
		   </p>
			<p>
			   <label for="lastName">Last name</label>
			   <input id="lastName" name="lastName" type="text" placeholder="e.g. Srivastava" required>
		   </p>
			<p>
			   <label for="email">Email</label>
			   <input id="email" name="email" type="email" placeholder="e.g. anusrivastava0123@gmail.com" required>
		   </p>
			<p>
			   <label for="email2">Confirm email</label>
			   <input id="email2" name="email2" type="text" placeholder="e.g. anusrivastava0123@gmail.com" required>
		   </p>
			<p>
			   <label for="password">Password</label>
			   <input id="password" name="password" type="text" placeholder="your password" required>
		   </p>
			
		   <p>
			    <label for="password2">Confirm password</label>
		   		<input id="password2" name="password2" type="password" 
					   placeholder="your password"  required>
		   </p>
		   
		   <button type="submit" name="loginButton">LOG IN</button>
		</form>
	</div>
</body>
</html> 