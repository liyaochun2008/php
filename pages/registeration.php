<?php
include '../php_executions/registeration.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>registeration</title>
        <link rel="stylesheet" href="../css/style.css" />
    </head>

    <body id="register" style="height: 100%;">
		    <!-- send the form data to the current PHP page for processing -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>sign up your own account</h1>
			<!-- form inputs for user to enter their desired username, password, nickname, birthday, email, and phone number -->
            <p><label for="username">username:</label> <input id="username" name="username" /></p>
            <p><label for="password">password:</label> <input id="password" name="password" /></p>
            <p><label for="nickname">nickname:</label> <input id="nickname" name="nickname" /></p>
            <p>
                <label for="birthday">birthday:</label>
                <input id="birthday" name="birthday" type="date" />
            </p>
            <p><label for="email">email:</label> <input id="email" name="email" /></p>
            <p>
                <label for="phoneNumber">phoneNumber:</label>
                <input id="phoneNumber" name="phoneNumber" />
            </p>
            <input value="create" type="submit" />
            <input value="reset" type="button" />
			 <div style="color:red ">
			<!-- cautions when meet problem in login -->
            <?php echo $result;?>
        </div>
        </form>
    </body>
</html>