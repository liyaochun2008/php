<?php 
 include '../php_executions/players.php';
?>
<!DOCTYPE html>
<html lang="en" style="height:100%">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>player</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="player" style="height:100%">
    <h1>  <?php echo $fullname ?></h1> 
    <main style=<?php echo "background-image:url(../assets/images/".strtolower($key).".png)" ?>>
    <section>
        <video controls autoplay>
            <source src=<?php echo "../assets/videos/".strtolower($key).".mp4" ?> type="video/mp4">
        </video>
    </section>
    <section>
       <p>
		  <?php echo $detail ?>
		</p>
    </section>
</main>
</body>

</html>