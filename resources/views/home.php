<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
</head>
<style type="text/css">
	body{
		font-family: Arial,Helvetica,san-serif;
	}
	#MYPORTFOLIO{
		position: absolute;
		width: 300px;
		height: 150px;
		background-color: coral;
		color: white;
		bottom: 5px;
		animation: mymove 7s infinite;
		text-align: center;

	}
	@keyframes mymove {
		50%{ bottom: 300px; }
	
	}

{
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: coral ;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: darkred;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.sidenav a:hover {
  color: darkred;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body style="background-image: url(img/image.jpeg); background-repeat: no-repeat;background-size: cover;background-blend-mode:screen;"> 
            <div id="mySlidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="/home">Home</a>
			
			<a href="/about">About</a>
		
			<a href="/contact">Contact</a>
		
</div>
<span style="font-size: 30px;cursor: pointer; color: coral;" onclick="openNav()">&#9776;Menu</span>
<script type="text/javascript">
	function openNav() {
		document.getElementById('mySlidenav').style.width="200px";
	}
	function closeNav() {
		document.getElementById('mySlidenav').style.width="0px";
	}
</script>      
        <div id="MYPORTFOLIO">
        <h1 style="font-family: papyrus; font-size: 30px; color: rgb(0,25,0,25);">MY PORTFOLIO <br>Jennelyn Romero</h1>
        </div></div>
<table align="center" style="margin-top: 10%;margin-left: 20%;"><tr><td><h1 style="margin-top: 15%; color:black; font-family: papyrus;background-color: ;width: 400px;height: 150px; text-align: center;
"> <i><strong>"It is better to fail in originality than to succeed in imitation".</strong></i></h1></td></tr></table>
</body>
</html>