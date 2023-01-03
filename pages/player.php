<?php 
// Include the players.php file
 include '../php_executions/players.php';
?>
<!DOCTYPE html>
<html lang="en" style="height:100%">
<head>
	 <!-- Add character encoding and viewport for the page -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <!-- Add a title for the page -->
    <title>player</title>
	 <!-- Link to the style.css file -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<!-- Add a layout for the player page -->
<body id="player" style="height:100%">
	<!-- Display the player's full name in a heading element -->
    <h1>  <?php echo $fullname ?></h1> 
    <main style=<?php echo "background-image:url(../assets/images/".strtolower($key).".png)" ?>>
		<!-- Add a section to display the player's video -->
    <section>
		 <!-- Add a video element with controls and autoplay -->
        <video controls autoplay>
			  <!-- Add a source for the video file -->
            <source src=<?php echo "../assets/videos/".strtolower($key).".mp4" ?> type="video/mp4">
        </video>
    </section>
		<!-- Add a section to display the player's details -->
    <section>
		    <!-- Display the player's details in a paragraph element -->
       <p>
		  <?php echo $detail ?>
		</p>
    </section>
</main>
</body>

</html>