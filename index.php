<!DOCTYPE html>
<html lang="en" style="height:100%">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fan clubs</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body id='index' style="height:100%">
	<!-- // block menu fixed and dragable  -->
    <ul class="menu" onmousedown="touch(this)" onmousemove="move(event)" onmouseup="clear()">
        <li>MORE INFO</li>
    </ul>
	<!-- import header  -->
    <?php include 'pages/header.php' ?>
	<!-- import pages by using iframe -->
    <iframe id='iframe' src='pages/home.php' width=100% frameborder=0 ></iframe>
	<!-- fixed footer -->
    <footer>
      <p>Copyright FC Barcelona 2022</p>
    </footer>
</body>
<script>
	//make menu box dragable
    let flag;
    let target;
    let pinpoint;
    let main = document.getElementsByClassName("menu")[0];
    document.getElementsByTagName('iframe')[0].style.height = window.innerWidth > 800 ? 'calc(100% - 152px)' : 'calc(100% - 219px)'
    // reset the position of menu box when window size changed
	window.onresize = () => {
        main.style.left = '180px'
        main.style.top = '180px'
        document.getElementsByTagName('iframe')[0].style.height = window.innerWidth > 800 ? 'calc(100% - 152px)' : 'calc(100% - 219px)'
    }
    let menu = ["Home", "Shop", "Gallery->", "Contact Us"]
    touch = (tar) => {
        target = tar
        flag = true;
    }
	//monitor the x y axis when drag the menu 
    move = (e) => {
        if (flag) {
            target.style.left = e.pageX - 85 + "px"
            target.style.top = e.pageY - 55 + "px"
        }
    }
    onmouseup = (e) => {
        flag = false;
    }
	// change iframe address to switch pages
    clickMenu = (e) => {
        if (!e.target.innerText.includes('-')) {
            pinpoint = e.target.innerText;
            let url;
            switch (e.target.innerText) {
                case "Home":
                    url = 'home.php';
                    break
                case "Shop":
                    url = 'shop.php';
                    break
                case "Contact Us":
                    url = 'contact_us.php';
                    break
                default:
                    url = 'player.php';
            }
            document.getElementsByTagName('iframe')[0].src = 'pages/' + url
        }
		
		//change menu list and menus states when click menus
        let xhr = new XMLHttpRequest();
        xhr.open("get", "php_executions/change.php?name=" + e.target.innerText);
        xhr.send()
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelectorAll(".menu li").forEach((item, index) => index && main.removeChild(item))
                menu = this.responseText.split(',')
                menu.map(item => {
                    let li = document.createElement("li")
                    li.innerText = item;
                    if (item == pinpoint) {
                        li.style.backgroundColor = "#d2206a"
                        li.style.color = "white"
                        li.style.borderRadius = "24px"
                    }
                    li.onclick = clickMenu
                    main.appendChild(li)
                })
            }
        };
    }
    menu.map(item => {
        let li = document.createElement("li")
        li.innerText = item;
        li.onclick = clickMenu
        main.appendChild(li)
    })

	//refresh header when login by access the localstorage
    setInterval(()=>{
      if(localStorage.getItem('login')){
        localStorage.removeItem('login')
        window.location.href="index.php"
      }
    },500)
</script>
</html>