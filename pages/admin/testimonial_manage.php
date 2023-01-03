<?php
include "../../php_executions/jdbc.php";
include "../../php_executions/admin/testimonial_manage.php";
$sql_name ="SELECT * FROM `comments` order by ID;";
$result_name = $conn->query($sql_name); 
$conn->close(); 
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

	<body id="admin_testimonial" style="height: 100%;">
		<!-- print out each form -->
		<?php 
			   while($row = $result_name->fetch_assoc()) { 
				   echo "<form action=".htmlspecialchars($_SERVER["PHP_SELF"])." method='post'>
				   <ul>
				   <li>
				    <input readonly value=".$row["id"]."  name=id><input readonly value=".$row["state"]."  name=state><input readonly value=".$row["itemname"]."  name='itemname'> </input><textarea readonly name='comments'>".$row["comments"]."</textarea>
				    <input type=submit value=".($row["state"]==1?"hidden(showing)":"show(hidding)")."></input> 
				  </li>
				   </ul>
				   </form>";
			   } 
		?>
	</body>
</html>