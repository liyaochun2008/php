<?php
include '../php_executions/contact_us.php';
?>
<!DOCTYPE html>
<html lang="en" style="width:100%"  >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact_us</title>
	<!-- Add a link to the style.css file -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body id="contact" style="width:100%">
	<!-- form  -->
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		  <!-- Add a heading for the form -->
     <h1>send us a message:</h1>
		 <!-- Add labels for the form inputs -->
     <input placeholder="Name" name="name"/>
     <input placeholder="Email"  name="email"/>
     <input placeholder="Phone"  name="phone"/>
     <textArea placeholder="message"  name="message"></textArea>
		 <!-- Add a submit button for the form -->
     <input type='submit' value='submit'/>
	    <div style="color:red ">
			<!-- cautions when meet problem in login -->
            <?php echo $result;?>
        </div>
   </form>
</body>
</html>
