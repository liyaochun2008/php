<?php
include '../php_executions/testimonial.php';
?>
<!DOCTYPE html>
<html lang="en" style="width: 100%;">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>contact_us</title>
        <link rel="stylesheet" href="../css/style.css" />
    </head>
    <body id="testimonial" style="width: 100%;">
        <!-- form  -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Leave ur comments for us:</h1>
            <input id="name" name="name"   readonly/>
			<input id="user" name="user"   readonly/>
            <textarea id="comments" name="comments" placeholder="comments"></textarea>
			<input type="submit" value="submit"/>
            <div style="color: red;">
                <!-- cautions when meet problem in login -->
                <?php echo $result; ?>
            </div>
        </form>
    </body>
    <script>
		  // save the item detail and user info in localStorage
			document.getElementById('name').value = localStorage.getItem("item")
			document.getElementById('user').value = localStorage.getItem('user')
    </script>
</html>