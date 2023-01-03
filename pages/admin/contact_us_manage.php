<?php
include "../../php_executions/jdbc.php";
$sql_name ="SELECT * FROM `contacts` order by ID;";
$result_name = $conn->query($sql_name); 
$conn->close(); 
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>fan clubs</title>
		<link rel="stylesheet" href="../../css/style.css" />
	</head>

	<body style="height: 100%;" id='contact_admin'>
		<div>
			<!-- display contacts sentence by sentence  -->
		<?php 
			    while($row = $result_name->fetch_assoc()) { 
					echo "
				<p>". $row["name"]." ".$row["email"]." ".$row["phone"]."</p>
				<p>".$row["message"]."</p>
				"; 
				} 
		?>
		</div>
	</body>
</html>