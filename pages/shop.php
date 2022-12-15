<!-- judge if user logged in or not -->
<?php
$res = "";
session_start();
if (count($_SESSION)) {
    $res = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en" style="height:100%">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="height:100%" id='shop'>
    <section>
       <ul>
        <li>
            <img src='../assets/images/clothes1.jpg'/>
            <p>UCL - FC Barcelona home shirt 22/23</p>
            <p>104,99 €</p>
			<!-- if login show the order button  -->
            <button  <?php echo strlen($res)>0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?></button>
        </li>
        <li>
            <img src='../assets/images/clothes2.jpg'/>
            <p>UCL - FC Barcelona home shirt 22/23 - Junior</p>
            <p>104,99 €</p>
            <button  <?php echo strlen($res)>0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?></button>
        </li>
        <li>
            <img src='../assets/images/clothes3.jpg'/>
            <p>UCL - FC Barcelona third shirt 22/23</p>
            <p>104,99 €</p>
            <button  <?php echo strlen($res)>0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?></button>
        </li>
        <li>
            <img src='../assets/images/clothes4.jpg'/>
            <p>LFP - FC Barcelona away Shirt 22/23</p>
            <p>94,99 €</p>
            <button>Order Now</button>
        </li>
        <li>
            <img src='../assets/images/clothes1.jpg'/>
            <p>UCL - FC Barcelona home shirt 22/23</p>
            <p>104,99 €</p>
            <button  <?php echo strlen($res)>0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?></button>
        </li>
        <li>
            <img src='../assets/images/clothes2.jpg'/>
            <p>UCL - FC Barcelona home shirt 22/23 - Junior</p>
            <p>104,99 €</p>
            <button  <?php echo strlen($res)>0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?></button>
        </li>
        <li>
            <img src='../assets/images/clothes3.jpg'/>
            <p>UCL - FC Barcelona third shirt 22/23</p>
            <p>104,99 €</p>
            <button  <?php echo strlen($res)>0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?></button>
        </li>
        <li>
            <img src='../assets/images/clothes4.jpg'/>
            <p>LFP - FC Barcelona away Shirt 22/23</p>
            <p>94,99 €</p>
            <button>Order Now</button>
        </li>
        <li>
            <img src='../assets/images/clothes1.jpg'/>
            <p>UCL - FC Barcelona home shirt 22/23</p>
            <p>104,99 €</p>
            <button  <?php echo strlen($res)>0?'':'disabled'?>><?php echo $res?'Order Now':'MemberShip Only'?></button>
        </li>
       </ul>
    </section>
</body>
<script>
   // move from left to right by changing marginLeft dynamically in javascript
   let flag =true
   document.querySelectorAll('button').forEach(item=>{ 
     //click order pop out alert
    item.onclick =()=> alert('Thanks for your order!') 
    // hover to stop the movement
    item.onmouseover=()=>flag=false
    item.onmouseout=()=>flag=true
   })
    let target = document.getElementsByTagName('ul')[0];
    let speed=3;
    setInterval(() => {
        if(flag){
        target.style.marginLeft = target.style.marginLeft?target.style.marginLeft.split('px')[0]-speed+'px':'10px';
        if(target.style.marginLeft.split("px")[0]<-1422) target.style.marginLeft='10px'
        }
    }, 1000/60);
</script>
</html>
