<!-- judge if user logged in or not -->
<?php
include "../php_executions/jdbc.php";
$res = "";
session_start();
if (count($_SESSION)) {
    $res = $_SESSION['user'];
}
$sql_name ="SELECT * FROM `comments` where state=1 order by date desc;";
$result_name = $conn->query($sql_name); 
$sql_name ="SELECT * FROM `shop` order by id;";
$result_items = $conn->query($sql_name); 
$prices = array(); 
$items = array(); 
while($row =$result_items->fetch_assoc()) {
	Array_push($prices,$row["price"]); 
	Array_push($items,$row["item"]); 
}
$conn->close(); 
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>shop</title>
		<link rel="stylesheet" href="../css/style.css" />
	</head>
	<body style="height: 100%;" id="shop">
		<section>
			<ul>
				<li>
					<img src="../assets/images/clothes1.jpg" />
					<p><?php echo $items[0]?></p>
					<p><?php echo $prices[0]?> €</p>
					<!-- if login show the order button  -->
					<button <?php echo strlen($res)>
						0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?>
					</button>
				</li>
				<li>
					<img src="../assets/images/clothes2.jpg" />
					<p><?php echo $items[1]?></p>
					<p><?php echo $prices[1]?> €</p>
					<button <?php echo strlen($res)>
						0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?>
					</button>
				</li>
				<li>
					<img src="../assets/images/clothes3.jpg" />
					<p><?php echo $items[2]?></p>
					<p><?php echo $prices[2]?> €</p>
					<button <?php echo strlen($res)>
						0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?>
					</button>
				</li>
				<li>
					<img src="../assets/images/clothes4.jpg" />
				    <p><?php echo $items[3]?></p>
					<p><?php echo $prices[3]?> €</p>
					<button <?php echo strlen($res)>
						0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?>
					</button>
				</li>
				<li>
					<img src="../assets/images/clothes1.jpg" />
					<p><?php echo $items[0]?></p>
					<p><?php echo $prices[0]?> €</p>
					<button <?php echo strlen($res)>
						0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?>
					</button>
				</li>
				<li>
					<img src="../assets/images/clothes2.jpg" />
					<p><?php echo $items[1]?></p>
					<p><?php echo $prices[1]?> €</p>
					<button <?php echo strlen($res)>
						0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?>
					</button>
				</li>
				<li>
					<img src="../assets/images/clothes3.jpg" />
					<p><?php echo $items[2]?></p>
					<p><?php echo $prices[2]?> €</p>
					<button <?php echo strlen($res)>
						0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?>
					</button>
				</li>
				<li>
					<img src="../assets/images/clothes4.jpg" />
					<p><?php echo $items[3]?></p>
					<p><?php echo $prices[3]?> €</p>
					<button <?php echo strlen($res)>
						0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?>
					</button>
				</li>
				<li>
					<img src="../assets/images/clothes1.jpg" />
					<p><?php echo $items[0]?></p>
					<p><?php echo $prices[0]?> €</p>
					<button <?php echo strlen($res)>
						0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?>
					</button>
				</li>
			</ul>
			<div>
				<?php 
			    while($row = $result_name->fetch_assoc()) { echo "
				<p>". $row["itemname"]." ".$row["username"]." ".$row["date"]."</p>
				<p>".$row["comments"]."</p>
				"; } ?>
			</div>
		</section>
	</body>
	<script>
		// move from left to right by changing marginLeft dynamically in javascript
		let flag = true;
		document.querySelectorAll('button').forEach((item) => {
			//click order pop out alert
			item.onclick = (e) =>
				giveComments(
					e.target.previousSibling.previousSibling.previousSibling.previousSibling
						.innerText
				);
			// hover to stop the movement
			item.onmouseover = () => (flag = false);
			item.onmouseout = () => (flag = true);
		});
		let target = document.getElementsByTagName('ul')[0];
		let speed = 3;
		setInterval(() => {
			if (flag) {
				target.style.marginLeft = target.style.marginLeft
					? target.style.marginLeft.split('px')[0] - speed + 'px'
					: '10px';
				if (target.style.marginLeft.split('px')[0] < -1422)
					target.style.marginLeft = '10px';
			}
		}, 1000 / 60);

		let giveComments = (tar) => {
			let text = 'Would you like to give us feedback?';
			if (confirm(text) == true) {
				window.location = 'testimonial.php';
				localStorage.setItem('item', tar);
			}
		};
	</script>
</html>