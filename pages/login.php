<?php
// Include the login.php file
include '../php_executions/login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	 <!-- Add character encoding and viewport for the page -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Add a title for the page -->
    <title>login in</title>
	 <!-- Link to the style.css file -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<!-- Add a layout for the login page -->
<body id="login" style="height:100%">
  <!-- Create a form for logging in -->
    <!-- Submit the form to the same PHP page -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		  <!-- Add a heading for the form -->
        <h1> login in our website</h1>
		   <!-- Add inputs for the username and password -->
        <p><!-- Add an ID and placeholder for the username input -->
            <input id="username" placeholder='username' name='username' />
        </p>
        <p> <!-- Add an ID and placeholder for the password input -->
            <input id="password" placeholder='password'  name='password'/>
        </p>
		    <!-- Display any error messages in a div element -->
        <div style="color:red ">
			<!-- cautions when meet problem in login -->
            <?php echo $result;?>
        </div>

        <input value="login in" type='submit' />
        <div>no accounts? <a href='registeration.php'>sign up</a> </div>
    </form>
</body>
</html>