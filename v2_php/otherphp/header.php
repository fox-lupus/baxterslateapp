<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/slate-mobile-css.css?<?php echo microtime();?>"> 	
	<link rel="stylesheet" type="text/css" href="css/home.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/dots.css?<?php echo microtime();?>">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Zilla+Slab?<?php echo microtime();?>" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato?<?php echo microtime();?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/header.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/curtistuff.css?<?php echo microtime();?>">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text?<?php echo microtime();?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto?<?php echo microtime();?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/coursesectionsdirectory.css?<?php echo microtime();?>">


	<style type="text/css">
html, body{
		margin: 0px;
		padding: 0px;
		width: 100%;
	-webkit-font-smoothing: antialiased;
 	-moz-osx-font-smoothing: grayscale;
}
body{
	position: absolute;
}
.nav{
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;

	height: 40px;

	background: #333333;

	position: fixed;  
	top: 0px;
	
	z-index: 30;
	width: 100%;
	/*border-bottom-right-radius: 2px;
	border-bottom-left-radius: 2px;*/
	}
.menu {
	line-height: 38px;
	padding-left: 10px;
	padding-right: 10px;

	float: left;
	margin-right: 35px;
	margin-left: 10px;
	position: relative;
}
.menu:hover{
	border-radius: 10px;
	background:#335F76;

}
.menu-text {
	font-size:27px;
	text-decoration:none;
	color:#fff;
}
.dropdown_menu {
	position: absolute;
	width: 140px;
	top: 41px;
   	box-shadow: 10px 10px 5px grey;

    border-radius: 7px;

    box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12),0 5px 5px -3px rgba(0,0,0,0.2);
    display: none;

	background: #ccc;
	overflow: hidden;

	z-index: 20;
}
.dropdown_menu a {
	padding: 0 20px;
	font-weight: bold;
	text-decoration: none;	
	display: block;
	border-top: solid 1px #eee;
	border-bottom: solid 1px #888;
	color: black;
}
.dropdown_menu a:first-child {
	border-top: none;
}
.dropdown_menu a:last-child {
	border-bottom: none;
}
.dropdown_menu a:hover {
	background: #ddd;
}
.menu:hover .dropdown_menu {
	display: block;

}
.search{
	float: left;

	margin: 5px 0 0 10px;
}
.search form input	{
	border: 1px solid #ccc;
	border-radius: 11px;
	padding-top: 0 18px;
	line-height: 30px;
	font-size: 16px;
	width:160px;
	height: 30px; 
	margin: 0 0 5px 0;
}
</style>
</head>
<body>
<div class="nav">
	<div class="menu ">
		<a href="" class="menu-text">Menu</a>
		<div class="dropdown_menu">
			<a href="">Courses</a>
			<a href="">Tools</a>
			<a href="">Profile</a>
		</div>
	</div>
	<div class="Search">
		<form>
			<input type="text" placeholder="Search...">
		</form>
	</div>
</div>