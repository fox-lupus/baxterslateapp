<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	<link rel="stylesheet" type="text/css" href="css/slate-mobile-css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/home.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/dots.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/cssstuff.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/coursesectionsdirectory.css?<?php echo microtime();?>"> 
	<link rel="stylesheet" type="text/css" href="css/header.css?<?php echo microtime();?>"> 	
	<style type="text/css">
	</style>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text?<?php echo microtime();?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto<?php echo microtime();?>" rel="stylesheet">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Zilla+Slab?<?php echo microtime();?>" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato?<?php echo microtime();?>" rel="stylesheet">	
	<style type="text/css">
		 /* Dropdown Button */
		.dropbtn {
		  background-color: #333333;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
		  cursor: pointer;
		  line-height: 38px;
			padding-left: 10px;
			padding-right: 10px;
			margin: 0 20px 0 20px;
			padding: 0 0px 0 0px;
		}

		/* Dropdown button on hover & focus */
		.dropbtn:hover, .dropbtn:focus {
		  background-color: #2980B9;
		}

		/* The container <div> - needed to position the dropdown content */
		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		/*.menu:hover {
			border-radius: 2px;
			background:#335F76;
			padding: 0 20px 0 20px;
			margin: 0 0px 0 0px;
		}*/

	/* Dropdown Content (Hidden by Default) */
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		right: 18px;
		z-index: 1;
		max-width: 250px;
	   	box-shadow: 10px 10px 5px grey;
	   	text-align: center;

	    border-radius: 2px;

	    box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12),0 5px 5px -3px rgba(0,0,0,0.2);
	    display: none;

		background: #ddd;
		overflow: hidden;


	}

		/* Links inside the dropdown */
		.dropdown-content a {
		  color: black;
		  
		  text-decoration: none;
		  display: block;
		  padding: 0 0px;
		  font-weight: bold;
		  /*font-weight: 300;
    	  font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
    	  text-rendering: optimizeLegibility;*/
		  border-top: solid 1px #eee;
		  border-bottom: solid 1px #888;
		  font-size: 18px;
		
	}
	 .dropdown-content a:first-child {
		border-top: none;
	}
	 .dropdown-content a:last-child {
		border-bottom: none;
	}

	.dropdown-content a:hover {
		background: #fff;
	}
		/* Change color of dropdown links on hover */
		.dropdown-content a:hover {background-color: #ddd}

		/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
		.show {display:block;} 
	</style>
</head>
<body>
	<!-- from w3schools Tutorial including css https://www.w3schools.com/howto/howto_js_dropdown.asp -->
<script type="text/javascript">
	/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>	
<div class="NavMobile">
	<div class="slate-logo">
		<svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 392.4" height="38">
			<g fill="#fff">
			<path d="M493.5 190.5h-33.9v92.1H500v22.9h-66.2V60.1h66v22.5h-40.2v84.2h33.9M126.4 60.1v222.5h37.1v23.2H99.1V60.1m-52.5 67V95.8s0-10.7-8.8-10.6c-8 .1-7.1 11.3-7.1 11.3V122s-.3 5.5 2.1 12.1l39.1 69.8c5.7 10 4.9 16.6 5 23.4.1 3.4 0 22.8 0 49.7 0 16.2-13.6 28.5-36.6 29.5-.9 0-1.8.1-2.8.1-26 .1-37.6-14.5-37.5-31.7v-39.5h26.6s-.2 33.1 0 35.5-.2 11.7 11.5 11.8c10.9.1 12.5-8.7 12.6-11.8v-40c-.1-4.1-1.5-11.2-5.1-17.4-1.3-2.3-29.8-50.1-32.5-55.5-6.6-12.9-10.8-19.4-10.7-32.3.2-12.9 0-36.3 0-40.6 0-11.2 10.8-25.3 35.1-25.5C60.9 59.5 72 76.5 72 85.2l-.2 41.9"/><circle cx="197.4" cy="353.4" r="14.5"/><path d="M188.5 383.2l4.5 9.2v-9.1z"/><circle cx="303.8" cy="353.6" r="14.5"/><path d="M323.8 310.6m29.6-5.1v-223h-29.3V60.1h86.2v22.4h-28.9v223"/><circle cx="251" cy="80.8" r="14.5"/><path d="M328.4 215.7h-30.1L267 45h-5.7l-2.2-4.2-4-4.8 3.2-33.7s-1.8-2.4-6.8-2.4-6.9 2.4-6.9 2.4l3.2 33.6-4.3 4.8-1.8 4.2h-6.1L204 215.7h-32.4s-2.6 1.7-2.6 7 2.6 7 2.6 7h29.8l-22.6 122.1 6.2 19.7 2.9 10.5 5 10.2.5-10.1s1.2-5.5 3.1-14.5c-7.4-.5-13.3-6.7-13.3-14.2 0-7.9 6.4-14.2 14.2-14.2 1.7 0 3.4.3 4.9.9l20.9-110.4h56.6l20.1 110.2c.2 0 .3-.1.5-.1 1.1-.3 2.2-.4 3.4-.4 7.9 0 14.2 6.4 14.2 14.2 0 7.2-5.4 13.2-12.4 14.1 1.8 8.7 2.9 14.1 2.9 14.1l.8 4.5.1 5.7 3.1-5.9 2.2-4.3 2.1-10.3 5-20-5.9-38.1 2.6-.5 1 6.7c.2 1.3 1.4 2.2 2.8 2 1.3-.2 2.2-1.4 2-2.8l-1-6.7c0 .2.1.4.1.4 1.2-.2 2.1-1.3 2-2.5v-.4c-.3-1.2-1.4-2.1-2.7-1.9l-1-6.3c-.2-1.3-1.4-2.2-2.8-2-1.3.2-2.2 1.4-2 2.8l1 6.8-2.7.5-14.7-79.9H328s2.6-1.7 2.6-7-2.2-6.9-2.2-6.9zm-102.6 0l22.9-120.8c-6.7-1.1-11.9-7-11.9-14 0-7.9 6.4-14.2 14.2-14.2 7.9 0 14.2 6.4 14.2 14.2 0 6.5-4.3 11.9-10.3 13.7L277 215.8h-51.2z"/>
			</g>
		</svg>
	</div>
		
		<div class="flexbox-container">
				<div class="Searc-moblie">
			<form>
				<input type="text" placeholder="Search">
			</form>
		</div>
		
		<svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="bitmap">
	    		<path fill="white" d="M32.6 28.6C34.7 25.6 36 22 36 18 36 8 28 0 18 0S0 8 0 18c0 9.9 8 18 18 18 4 0 7.6-1.3 
	    		10.6-3.4L44 
	    		48l4-4-15.4-15.4zM4 18c0-7.7 6.3-14 14-14s14 6.3 14 14-6.3 14-14 14S4 25.7 4 18z"/>
		</svg>
		
		<div class="Search" id="search-bar">
			<form>
				<input type="text" placeholder="Search">
			</form>
		</div>
		
		<!-- <div class="menu">
			<span class="menu-text">Menu</span>
			<div class="dropdown_menu">
				<a href="slatedashboard.php">Slate Dashboard</a>
				<a href="coursesectionsdirectory.php">Course Sections Directory</a>
				<a href="competencydashboard.php">Competency Dashboard</a>
				<a href="taskdashboard.php">Task Dashboard</a>
				<a href="contactus.php">Contact Us</a>
			</div>
		</div> -->
		<div class="dropdown">
 			<button onclick="myFunction()" class="dropbtn">Menu</button>
			<div id="myDropdown" class="dropdown-content">
				<a href="slatedashboard.php">Slate Dashboard</a>
				<a href="coursesectionsdirectory.php">Course Sections Directory</a>
				<a href="competencydashboard.php">Competency Dashboard</a>
				<a href="taskdashboard.php">Task Dashboard</a>
				<a href="contactus.php">Contact Us</a>
  			</div>
		</div>
	</div>
</div>