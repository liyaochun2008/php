<?php
include '../php_executions/login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login in</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="login" style="height:100%">
	<!-- form in login -->
	<!-- send the form to self php page -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1> login in our website</h1>
        <p>
            <input id="username" placeholder='username' name='username' />
        </p>
        <p>
            <input id="password" placeholder='password'  name='password'/>
        </p>
        <div style="color:red ">
			<!-- cautions when meet problem in login -->
            <?php echo $result;?>
        </div>

        <input value="login in" type='submit' />
        <div>no accounts? <a href='registeration.php'>sign up</a> </div>
    </form>
</body>
</html>