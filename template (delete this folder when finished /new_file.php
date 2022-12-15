<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
<?php
	print "<h1>".$_POST['username']."</h1>";
?>
<?php
	print "<h1>".$_POST['password']."</h1>";
?>

<?php
  if(isset($_POST['submit'])){
    include_once("./connection.php"); //知识点：PHP文件中嵌套其它PHP文件
$sql ="SELECT * FROM `user` WHERE `user`.`username` ='".$_POST['username']."';"; 
echo $sql;
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "姓名: " . $row["username"];
    }
}
$conn->close();
}
?>



  <form method="post">
	<div>
	  <label for='x'> username </label>
   <input id='x'  type='text' name='username'/>
   </div>
   <div>
   <label for='y'> password </label>
   <input id='y'  type='text' name='password'/>
   </div>
   <input type='submit'  name = 'submit' value  ='登录'/>
   <input type='reset'/>
	</body>
</form>
</html>
