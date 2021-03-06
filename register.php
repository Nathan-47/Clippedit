 <?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- TAB ICON -->
<link rel="shortcut icon" type="image/x-icon" href=""/>
	
<!-- TAB HEADING -->
<title>Clippedit - Game and share clips around the world to win rewards!</title>
<link rel="icon" type="">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	  
<!-- STYLESHEETS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css.css"> 
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
	
<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Bungee&family=Varela+Round&display=swap" rel="stylesheet">
    
</head>
<body>
	
	
<!-- SIGNUP FORM -->		
<main>
<div class="wrapper-main">
<section class="section-default">
<h1>Sign Up</h1>
<h5>Create a clippedit account today!</h5>	
	
<form action="includes/signup.php" method="post">
<input type="text" name="uid" placeholder="Username">	
<input type="text" name="mail" placeholder="Email Address">	
<input type="password" name="pwd" placeholder="Password">	
<input type="password" name="pwd-repeat" placeholder="Re-enter password">	
<button type="submit" name="signup-submit">Sign Up</button>
<p>Already have an account?<a href="login.php">Sign In</a></p>	
</form>
	
</section>	
</div>	
</main>			
	
	
<!-- SCRIPTS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
    
</body>
</html>