<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
</head>
<style >
	#image{
	background-image: url("");
	background-size: cover;
	position: relative;
	height: 500px;
}#text{
	background-color: white;
	color: blue;
	font-size: 20px;
	font-weight: bold;
	margin: 0 auto;
	padding: 10px;
	width: 50%;
	position: absolute;
	left: 50%;
	transform: translate(-50%, -50%);
	mix-blend-mode: screen;
	text-align: center;
	top: 15%;
}
nav{
	padding: 10px 10px 10px 10px;
	color: yellow
	text-align:left;
}
nav:hover{
	background-color:pink;
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
  background-color: purple ;
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
h1{

}
</style>
<body style="background-image: url(img/imagetwo.jpg); background-repeat: no-repeat;background-size: cover;background-blend-mode: screen;" >

<div id="mySlidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="/home">Home</a>
			
			<a href="/about">About</a>
		
			<a href="/contact">Contact</a>
		
</div>
<span style="font-size: 30px;cursor: pointer;color: purple;" onclick="openNav()">&#9776;Menu</span>
<script type="text/javascript">
	function openNav() {
		document.getElementById('mySlidenav').style.width="200px";
	}
	function closeNav() {
		document.getElementById('mySlidenav').style.width="0px";
	}
</script>
<table align="center"><tr><td><h1 style="color: white; background-color:;width: 400px;height: 50px;text-align: center;">This is my About Page</h1><h1 align="center">Education<br>@Seirin High School</address></h1></td></tr></table>

<h1 style="margin-top: 15%; text-align: center;"><i>"No matter how many points you have at the end of the game,if you're not happy,that's not a victory"<br>-Tetsuya Kuroko</i></h1>

<div class="image">

</div>
</body>
</html>