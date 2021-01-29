<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
</head>
<style type="text/css">

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
  background-color: powderblue ;
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
<body style="background-image:url(img/image_2.jpeg);background-repeat: no-repeat;background-size: cover;" >

<div id="mySlidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="/home">Home</a>
			
			<a href="/about">About</a>
		
			<a href="/contact">Contact</a>
		
</div>
<span style="font-size: 30px;cursor: pointer;color: skyblue;" onclick="openNav()">&#9776;Menu</span>
<script type="text/javascript">
	function openNav() {
		document.getElementById('mySlidenav').style.width="200px";
	}
	function closeNav() {
		document.getElementById('mySlidenav').style.width="0px";
	}
</script>
<h1 align="center" style="color:black; background-color: none;">This is my Contact Page</h1> 
<h1 align="center" style="font-size: 25px;">laravelcsshtml@gmail.com<br>09123456789<br>Address:Malasiqui,Pangasinan</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer align="center"><i>"There's no such thing as useless effort"</i></footer>           
</body>
</html>