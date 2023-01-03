<?php
include "../../php_executions/jdbc.php";
include "../../php_executions/admin/player_edit.php";
$sql_name ="SELECT * FROM `players` order by ID;";
$result_name = $conn->query($sql_name); $conn->close(); 
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
	<head>
		<style>
			ul li {
				list-style-type: none;
			}
			ul li span {
				float: left;
			}
			ul li textarea {
				margin-left: 5px;
				width: 300px;
				height: 80px;
			}
		</style>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>fan clubs</title>
		<link rel="stylesheet" href="../../css/style.css" />
	</head>

	<body id="adminmenu" style="height: 100%;">
		<!-- print out the form -->
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<ul>
			<?php 
			   while($row = $result_name->fetch_assoc()) { 
				   echo "<li><span>Player ".$row["id"].":</span></input><input value=".$row["fullname"]."  name=fullname".$row["id"]."></input><textarea name=details".$row["id"].">".$row["details"]."</textarea></li>";
			   } ?>
			<input type=submit></input>
		</ul>
		</form>
	</body>
</html>