<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<!--<link rel="stylesheet" type="text/css" href="css/slate-mobile-css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/home.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/dots.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/curtistuff.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/coursesectionsdirectory.css?<?php echo microtime();?>"> 
	<link rel="stylesheet" type="text/css" href="css/header.css?<?php echo microtime();?>"> -->	
	<style type="text/css">
		.body-backround{
	z-index: 0;
	position: relative;
	width: 100%; 
	background-color: rgba(255,255,255, 0.3); }
.window{
	background-image: url(img/1x1-d4d4d49b.png);
	height:120px;
	z-index: 0;
	/*overflow-y: hidden;*/
	background-color:red ;
}	/*homecss*/
.dot-baner{
	background: url(img/nodes-bg.jpg);
	height:96px;
	margin-top: 80px;
	width: 100%;
	display:flex;
	justify-content: flex-start;
	line-height: 25px;
	margin-bottom: 0px;
	border-bottom: solid 1px #999;
	box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.2);
}
.select-block{
	margin-left: 70px;
	font-size: 13px;
	font-family: 'Lato', sans-serif;
	display: inline-block;
}
.My-Progress{
	font-size:32px;
	margin-left: 25px;
}

.selection-box{
	color:#757575;
	border-width: 0px; 
	width: 150px;
	box-shadow: 0px 0px 1px 0px; 
	border-color: #DADADA;
	font-style: normal;
    font-variant-ligatures: normal;
    font-variant-caps: normal;
    font-variant-numeric: normal;
    font-variant-east-asian: normal;
    font-weight: 400;
    font-stretch: normal;
    font-size: 18px;
    line-height: 25px;
    font-family: Lato;
    -webkit-box-shadow: 0px 2px 0px 0px rgba(218,218,218,1);
	-moz-box-shadow: 0px 2px 0px 0px rgba(218,218,218,1);
	box-shadow: 0px 2px 0px 0px rgba(218,218,218,1);
}

.selection-box2{
	color:#757575;
	border-width: 0px; 
	width: 75px;
	box-shadow: 0px 0px 1px 0px; 
	border-color: #DADADA;
	font-style: normal;
    font-variant-ligatures: normal;
    font-variant-caps: normal;
    font-variant-numeric: normal;
    font-variant-east-asian: normal;
    font-weight: 400;
    font-stretch: normal;
    font-size: 18px;
    line-height: 25px;
    font-family: Lato;
    -webkit-box-shadow: 0px 2px 0px 0px rgba(218,218,218,1);
	-moz-box-shadow: 0px 2px 0px 0px rgba(218,218,218,1);
	box-shadow: 0px 2px 0px 0px rgba(218,218,218,1);
}
.selection-box::selection {
-webkit-box-shadow: 0px 0px 6px 2px rgba(0,72,255,1);
-moz-box-shadow: 0px 0px 6px 2px rgba(0,72,255,1);
box-shadow: 0px 0px 6px 2px rgba(0,72,255,1);
}
/*dotscss*/
body{
    font-family: times;
    font-family:'Crimson Text', serif;	
}
.header {
	background: black;
	line-height: 40px;
	height: 40px;
	color: white;
}
.spmainContent{
	padding-top: 60px;
	border-top: 1px solid gray;
	margin-top: 0px;
	display: flex;
	flex-direction: row;
}
.taskdashboard .container.left{
	margin: 40px 0 40px 0;

}
.container_left .iconFrame {
	display: inline-block;
}
.block{

		    margin-top: 60px;    
		    margin-bottom: 60px;
			height: 100px;
			width: 60px;
			padding: 100px;
			background-color: white;
			border: 20px solid gray;
			border-radius: 100%;
			text-align: center;
			font-family: sans-serif;
}

.inline {
            background-color: white;
            font-size: 40px;
            font-style: 40px;
            font-weight: 40px;
            font-family: 40px;
            text-decoration: line-through;
 }
/*Grading System Index (No Evidence, Entering, Progressing, Graduation Benchmark, Advancing, Excelling, Beyond Assessment)*/
/* DEFINE COLORS */
.ne, .en, .pr, .gb, .ad, .ex, .ba{
	border: solid 1px #020202;
}

.ne { 
	background: #9da39e;
	border-radius: 3px;
}
.en {
	background: #d94181;
	border-radius: 3px;
}

.pr {
	background: #ff7d00;
	border-radius: 3px;
}

.gb {
	background: #38a719;
	border-radius: 3px;
}

.ad {
	background: #008cc1;
	border-radius: 3px;
}

.ex {
	background: #6320ca;
	border-radius: 3px;
}

.ba {
	background: #0040ff;
	border-radius: 3px;
}

.portfolio-colors .container_left {
	width: 90vh;
}

.portfolio-colors .container_right {
	width: 26%;
	margin-bottom: 10px;
}

.portfolio-colors {
	padding:10px;
	color: white;
}

.portfolio-colors div {
	width: 30px;
	height: 30px;
	text-align: center;
	line-height: 30px;
	float: left;
	margin-right: 8px;
	font-family: 'Lato', sans-serif;
	font-size: 12px;	
}

@media screen and (width: 480px) {
	.standard_container{
	}
	.content{
		display: flex;
		 flex-direction: column;
	}

}

.ne, .en, .pr, .gb, .ad, .ex, .ba{
border: solid 1px #020202;
}

.standard_container .ne{ 
	background: #9da39e;
	border-radius: 3px;
}
.standard_container .en {
	background: #d94181;
	border-radius: 3px;
}

.standard_container .pr {
	background: #ff7d00;
	border-radius: 3px;
}

.standard_container .gb {
	background: #38a719;
	border-radius: 3px;
}

.standard_container .ad {
	background: #008cc1;
	border-radius: 3px;
}

.standard_container .ex {
	background: #6320ca;
	border-radius: 3px;
}

.standard_container .ba {
	background: #0040ff;
	border-radius: 3px;
}

.standard_container .headline {
	background: #a4a4a4;
	padding-left: 12px;
}

.standard_container .headline .courseNum {
	color: white;
	font-size: 25px;
	line-height: 45px;
	text-shadow: 1px 1px #666;
}

.standard_container .headline .courseName {
	font-size: 20px;
	color: #ddd;
	text-shadow: 1px 1px #666;
	padding-left: 10px;

}

.standard_container .subhead {
	padding-left: 12px;
	color: white;
	text-shadow: 1px 1px #666;
	font-family: 'Lato', sans-serif;
	font-size: 14px;
	line-height: 35px;

}


.standard_container .content {
	background:#f5f3f0;
	padding: 20px 12px;
	font-family: 'Lato', sans-serif;
	font-size: 15px;
	border-bottom: solid 1px #ccc;
	
}

.standard_container .content .creditsFrame{
	padding: 15px 20px 0px;
}

.standard_container .content .credit {
	display: inline-block;
	width: 110px;
	border: solid 1px #ccc;
	height: 30px;
	vertical-align: top;
	line-height: 30px;
	text-align: center;
	color: white;
    text-shadow: 1px 1px #555;
    font-weight: bold;
    border: solid 1px #020202;
}
.standard_container {
	/*width: 450px;
	border-radius: 7px;
	overflow: hidden;
	-webkit-box-shadow: 4px 10px 33px 5px rgba(255,255,255,0.11);
	-moz-box-shadow: 4px 10px 33px 5px rgba(255,255,255,0.11);
	box-shadow: 4px 10px 33px 5px rgba(255,255,255,0.11);
	margin-top: 30px;
	margin-left: 100px;
    margin-right: 10px;*/
    display: grid;
}

 .modge-podge {
 	padding-top: 60px; 
 	margin: auto;
 	max-width: 245px;
 }

.contactustinyfont{
	font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
    text-rendering: optimizeLegibility;
    color: #646464;
    font-size: 12px;
    letter-spacing: .5px;
    text-transform: uppercase;
}
.contactusmainfont{
	color: #333;
    font-weight: 300;
    font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
    text-rendering: optimizeLegibility;
    font-size: 30px;
    margin-bottom: 20px; 
    margin: 20px;
}
.textInput {
	padding: 5px;
	border: solid 1px #ccc;
	width: 220px;
}
.textInput2 {
	height: 100px;
	width: 230px;
}
.boxcontactus{
	width: 95%;
	overflow: hidden;
	box-shadow: 1px 1px 1px 1px gray;
	box-decoration-break: #e6e2d8;
	margin-left: 0px;
    margin-right: 10px;
    margin: 0px;

}
.sendbutton{
	background-color: #31a0da;
    color: #fff;
    border: none;
    border-bottom: 1px solid rgba(51,51,51,0.2);
    text-align: center;
    font-size: 15px;
    width: 60px;
    height: 25px;
}
.slatedashboard{
	color: #333;
    font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
    text-rendering: optimizeLegibility;
    font-size: 25px;
    margin: 0px auto;
	padding: 0 15px;
	margin: 0px auto;
	display: flex;
	flex-direction: column;
}

@media screen and (min-width: 1000px) {
	.slatedashboard {
		padding: 50px 200px 0 200px;
	}
}

.slatedashboard2{
	color: #333;
    font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
    text-rendering: optimizeLegibility;
    font-size: 16px;
    margin: 0px auto;
	padding: 0 15px;
	margin: 0px auto;
	display: flex;
	flex-direction: column;
	
}

.slatedashboard .row{
	display: inline-block;
	margin-top: 10px;
}

.slatedashboard .row2{
	display: inline-block;
	position: relative;
	width: 120px;
}

.container.right, .container.left {
    display: flex;
	flex-direction: column;
	border: 1px solid #333333;
	border-radius: 5px;	
	-webkit-box-shadow: 5px 7px 6px 0px rgba(102,102,102,0.41);
	-moz-box-shadow: 5px 7px 6px 0px rgba(102,102,102,0.41);
	box-shadow: 5px 7px 6px 0px rgba(102,102,102,0.41);
}
@media screen and (max-width: 400px) {

	.slatedashboard {
		width: auto;
	}
	
	.slatedashboard .container_left {
		float: none;
		width: 100vh;
		display: flex;
		flex-direction: column;
	}

	.slatedashboard .container_right {
		float: none;
		max-width: 500px;
	}
}



.slatedashboard .pageTitle {
	font-size: 30px;
	margin: 50px;
	border-bottom: solid 1px #ccc;
    margin-left: 10px;
    margin-right: 10px;
}

.slatedashboard .section {
    box-sizing: border-box;
    padding: 5px 0;
    border-radius: 0px;
    display: inline-block;
    text-align: center;
   	max-width: 500px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap-reverse;
    height: 260px;
    background-color: #fff;
    
}


.slatedashboard .section1 {
    box-sizing: border-box;
    padding: 5px 0;
    border-radius: 0px;
    display: inline-block;
    text-align: center;
   	max-width: 500px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap-reverse;
    height: 50px;
    background-color: #fff;
    margin: 0 0 0 30px;
    
}

.slatedashboard .section2 {
    box-sizing: border-box;
    padding: 5px 0;
    border-radius: 0px;
    display: inline-block;
    text-align: center;
   	max-width: 500px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap-reverse;
    height: 150px; 
    background-color: #fff;

}

.slatedashboard .section .title {
    padding: 5px 0;
    font-size: 1.6667em;
    border-bottom: solid 1px #ccc;
    margin-left: 10px;
    margin-right: 10px;
    text-align: center;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    display: inline-block;
}

.slatedashboard .section1 .title1 {
    padding: 5px 0;
    font-size: 1em;
    border-bottom: solid 1px #ccc;
    margin-left: 10px;
    margin-right: 10px;
    text-align: center;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    display: inline-block;
}

.slatedashboard .section2 .title2 {
    padding: 5px 0;
    font-size: 1em;
    border-bottom: solid 1px #ccc;
    margin-left: 10px;
    margin-right: 10px;
    text-align: center;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    display: inline-block;
}

.slatedashboard .flex{
	display: flex;
	flex-direction: row;
	max-width: 500px;
	margin-left: 10px;
    margin-right: 10px;
    text-align: center;
}

.slatedashboard .tinyfont{
	color: #949494;
	font-size: 0.875em;
	display: inline-block;
	position: absolute;
	left: 10px;
	bottom: -50px;
	margin-bottom: 10px;
}

.slatedashboard .normalfont{
	color: #333;
	font-size: 15px;
	font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
	display: inline-block;
	position: absolute;
	left: 10px;
	bottom: -90px;
}

.slatedashboard .normalfont2{
	color: #333;
	font-size: 15px;
	font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
	display: inline-block;
	position: absolute;
	left: 30px;
	bottom: -20px;
}

.slatedashboard .section .body {
    padding: 5px 0;
    font-size: 14px;
    background-color: #fff;
}

.slatedashboard .section2 .body2 {
    padding: 5px 0;
    font-style: italic;
    font-size: 16px;
}

.slatedashboard .section .iconFrame {
    padding: 15px 0;
    background-color: #fff;
}

.slatedashboard ..slatedashboard .section .title {
    padding: 5px 0;
    font-size: 22px;
    border-bottom: solid 1px #ccc;
    margin-left: 10px;
    margin-right: 10px;
    text-align: center;
    width: 500px;
    display: flex;
    flex-direction: column;
    display: inline-block;
    background-color: #fff;

} .default_icon {
	width: 90px; height: 90px; 
	background: #31A0DA; 
	border: solid 1px #31A0DA; border-radius: 25px;
	margin: 0 auto 10px;
}

.dashboardLink {
	font-size: 14px;
	text-align: center;
	color: black;
	text-decoration: none;
	width: 100px;
	display: block;
	padding: 5px;
	height: 160px;
	display: flex;
	flex-direction: column;
	float: left;
}

.dashboardLink:hover {
	color: blue;
}


.calendarstuff{
	float: right;
}


.taskdashboard{
	/*width: 80%;*/
	/*padding: 0 15px;*/
	margin: 0px auto;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	display: inline-block;

}
@media screen and (max-width: 500px){
.taskdashboard{
	width: 100%;	
}
}


/*.taskdashboard .container {
	width: 60vh;
	margin-right: 30px;
}

.taskdashboard .container.left {
	/*float: left;
	background-color: #e3e3e3;
	height: 100%

}*/

.taskdashboard .container.right {
	/*float: right;*/
	/*height: 150px;*/
}


.taskdashboard .headline{
	background:#808080;
	padding-left: 12px;
	margin: 0 0 0 0;
}

.taskdashboard .headline .select-block {
	margin: 11px 8px;
	float: right;
}

.taskdashboard .courseNum{
	color: white;
	font-size: 25px;
	line-height: 45px;
	text-shadow: 1px 1px #666;
}
.taskdashboard .courseName{
	font-size: 20px;
	color: #ddd;
	text-shadow: 1px 1px #666;
	padding-left: 10px;
}
.taskdashboard .subhead{
	background: #d6d3c9;
	padding-left: 12px;
	color: gray;
	font-family: 'Lato', sans-serif;
	font-size: 14px;
	line-height: 35px;
}

.taskdashboard .subhead2{
	background: #f2efe6;
	padding-left: 12px;
	color: gray;
	font-family: 'Lato', sans-serif;
	font-size: 14px;
	line-height: 35px;
	height: 60px;
 	text-align: center
}
.taskdashboard .content{
	background: #f5f3f0;
	padding: 20px 12px;
	font-family: 'inherit', sans-serif;
	font-size: 15px;
	border-bottom: solid 1px #ccc;
}
.taskdashboard .other{
	padding: 15px 20px 0px;
}
.taskdashboard .other2{
	display: inline-block;
	width: 31%;
	border: solid 1px #ccc;
	height: 30px;
}
.textstuff{
	float: right;
}
.taskdashboardtinyfont{
	font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
    text-rendering: optimizeLegibility;
	margin-top: 0px;
    color: #646464;
    font-size: 12px;
    letter-spacing: .5px;
    text-transform: uppercase;
}

.taskdashboard-item{
	height: 30px;
	width: 200px;
	background-color: white;
	color: #333;
    font-size: 16px;
    font-weight: 400;
    font-family: Lato;
}
.taskdashboard-nub4,.taskdashboard-nub3,.taskdashboard-nub2,.taskdashboard-nub {
	align-items: center;
    border-radius: 0.25em 0 0 0.25em;
    display: flex;
    font-size: 1.5em;
    font-weight: bold;
    justify-content: center;
    width: 1em;
    height: 40px;
    float: left;
}
.taskdashboard-nub{
	background-color: #8bd7f4;

}
.taskdashboard-nub2{
	background-color: #b2d681;

}
.taskdashboard-nub3{
	background-color: #f17a62;

}
.taskdashboard-nub4{
	background-color: #fbf372;
}
.taskdashboard-container{
	width: 400px;
	margin: 0px;		
}
.taskdashboard-category{
	border-radius: 0 0.4375em 0 0;
    color: #949494;
    font-size: 0.75em;
    margin-bottom: -0.75em;
    padding: 0.625em 0.875em 0;
    text-transform: uppercase;
    margin: 0px;
    margin-left: 20px;
    margin-right: 20px;
}
.taskdashboard-title{
	/*flex: 1;*/
	display: inline-block;
	line-height: 1.33333;
	color: #333;
    font-size: 16px;
    font-family: Lato;
    /*margin-left: 30px;
    margin-right: 30px;*/
}
/*.taskdashboard-statussetup{
	float: right;
	height: 10px;
}*/
.taskdashboard-status{
	background-color: #a2dff6;
	border-radius: 0.25em 0 0 0.25em;
    margin-left: 1em;
    align-items: center;
    display: flex;
    font-size: 0.8125em;
    justify-content: center;
    padding: 0.125em 0.5em;
    line-height: 1.33333;
    font-family: Lato;
    font-weight: 400;
    float: right;
}
.taskdashboard-status2{
	background-color: #bedc94;
	border-radius: 0.25em 0 0 0.25em;
    margin-left: 1em;
    align-items: center;
    display: flex;
    font-size: 0.8125em;
    justify-content: center;
    padding: 0.125em 0.5em;
    line-height: 1.33333;
    font-family: Lato;
    font-weight: 400;
    float: right;
}
.taskdashboard-status3{
	background-color: #f38e79;
	border-radius: 0.25em 0 0 0.25em;
    margin-left: 1em;
    align-items: center;
    display: flex;
    font-size: 0.8125em;
    justify-content: center;
    padding: 0.125em 0.5em;
    line-height: 1.33333;
    font-family: Lato;
    font-weight: 400;
    float: right;
}
.taskdashboard-status4{
	background-color: #fbf372;
	border-radius: 0.25em 0 0 0.25em;
    margin-left: 1em;
    align-items: center;
    display: flex;
    font-size: 0.8125em;
    justify-content: center;
    padding: 0.125em 0.5em;
    line-height: 1.33333;
    font-family: Lato;
    font-weight: 400;
    float: right;
}
.taskdashboard-date{
	background-color: #d1effb;
	border-radius: 0 0.25em 0.25em 0;
    font-weight: bold;
    align-items: center;
    display: flex;
    font-size: 0.8125em;
    justify-content: center;
    padding: 0.125em 0.5em;
    line-height: 1.33333;
    font-family: Lato;
    float: right;
}
.taskdashboard-date2{
	background-color: #d5e9ba;
	border-radius: 0 0.25em 0.25em 0;
    font-weight: bold;
    align-items: center;
    display: flex;
    font-size: 0.8125em;
    justify-content: center;
    padding: 0.125em 0.5em;
    line-height: 1.33333;
    font-family: Lato;
    float: right;
}
.taskdashboard-date3{
	background-color: #f7b5a8;
	border-radius: 0 0.25em 0.25em 0;
    font-weight: bold;
    align-items: center;
    display: flex;
    font-size: 0.8125em;
    justify-content: center;
    padding: 0.125em 0.5em;
    line-height: 1.33333;
    font-family: Lato;
    float: right;
}
.taskdashboard-date4{
	background-color: #fcf58b;
	border-radius: 0 0.25em 0.25em 0;
    font-weight: bold;
    align-items: center;
    display: flex;
    font-size: 0.8125em;
    justify-content: center;
    padding: 0.125em 0.5em;
    line-height: 1.33333;
    font-family: Lato;
    float: right;
}
.taskdashboard-data{
	background-color: white;
    cursor: pointer;
    flex: 1;
    display: block;
    color: #333;
    font-size: 16px;
    font-weight: 400;
    font-family: Lato;
    line-height: 1.5;
    height: 30px;
}

.text{
    background: white;
}

.taskdashboard-row{
	border: solid 1px #ccc;
	height: 75px;
	font-family: sans-serif;
}

.taskdashboard-item{
	margin-top: 0.75em;
	margin: 0;
	display: list-item;
}
.upcomingeventsmainfont{
	color: #333;
    font-weight: 300;
    line-height: 1;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
    text-rendering: optimizeLegibility;
    font-size: 30px;
}

.accordion {
	max-width: 500px;
	border: solid 1px #ccc;
	font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
	font-size: 22px;
	text-align: center;
	border-radius: 3px;
	box-shadow: 0 0.125em 0.375em rgba(0,0,0,0.2);
	margin-bottom: 15px;
	margin-top: 10px;

}

.competencyaccordion {
	width: 100px;
	margin: 10px;
	border: solid 1px #ccc;
	font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
	font-size: 22px;
	text-align: center;
	border-radius: 3px;

	box-shadow: 0 0.125em 0.375em rgba(0,0,0,0.2);

}

.accordion .title {
	padding: 5px;
	background: rgb(49, 160, 218);
	color: white;
	cursor: pointer;
	border-bottom: solid 1px white;
}

.accordion .body {
	padding: 5px;
	font-size: 15px;
	line-height: 25px;
	display: none;
	background: rgba(148, 148, 148, 0.08);
}

.section1, .container_left, .container_right, .pageTitle {
	/*box-shadow: 3px 3px 10px -1px rgba(128,128,128,0.64);*/

}
.headline, .content{
	padding:0 20px 0 0;
}/*curtstuffcss*/
.container-of-directory {
	max-width: 800px;
	margin: 0 auto; 
	background: #d6fbef;
	box-shadow: 10px 4px 7px 0px rgba(0,0,0,0.1);
	/*border: solid #9E9E9E 1px;*/
	border:  solid 1px rgba(100,100,100,0.1);
}

.head-of-page {
	border-bottom: 1px solid #D4D4D4;
	margin-bottom: 20px;
	margin-top: 50px;
	margin-left: 5px;
	font-size:1.5em; 
	font-family: Sanchez,Lato,Rockwell,"Rockwell Std",Georgia,serif;
}

.Filter {
	border-radius: 3px;
	background: #EEEEEE;
	padding: 15px;
	box-shadow: 0 0.125em 0.375em rgba(0,0,0,0.2);
	font-size: 15px;
}

.Filter span {
	display: block;
	font-size: 20px;
}

.botton-1, .botton-2 {
	margin-top: 20px; 
	margin-left: 10PX; 
	border: 0px;
	border-bottom: 1px solid rgba(100,100,100,0.4);
	border-radius: 5px;
	font-size: 17px;
	padding:5px 10px 5px 10px;
}

.botton-2:hover {
	background-color: rgba(255,255,255,0.4)
}

.botton-1:hover	{
	background-color: rgba(49, 160, 218, 0.5)
}

.botton-1 {
	color: #fff;
	background-color: #31a0da;

}

.Sections-contiainer {
	display: flex;
	justify-content: flex-start;
	align-items: center;
	flex-wrap: wrap;
	flex-direction: row;
}


.section {
	background-color: #f5f5f5;
	border: 0px;
	border-bottom: 1px solid #aaa;
	font-size: 15px;
	margin-bottom: 20px;
}

.section:hover {
	border-bottom: 1px solid #42b0cb;
}

.sections-text	{
	margin: 5px 10px 10px 15px;
}

.sections-text span {
	font-size: small;
	font: Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
}

.directory {
	background-color: white;
	-webkit-border-horizontal-spacing: 0px;
    -webkit-border-vertical-spacing: 0px;
    font-family: Lato, "Lucida Grande", Verdana, "Helvetica Neue", sans-serif;
}

th, td, tr {
	border: solid 0px gray;
}

table {
	border-collapse: collapse;
	width: 100%;
	margin: auto;
	line-height: 15px
  }

th, td {
  	padding-right: 40px;
  	padding-left: 8px;
  	text-align: left;
	font-family: sans-serif;
	line-height: 28px;
}

th {
	font-weight: normal;
	border-bottom: solid 1px rgba(100,100,100,0.5);
	font-size: 14px;
	line-height: 21px;
	color: #777;
}

tr .subhead {
	font-weight: bold;
}

td {
	font-size: 13px
}

tr:nth-child(odd) {
	background: #EDEDED;
}

td a {
	color: blue;
	text-decoration: none;
}


td a:hover {
	text-decoration: underline;
}/*coursesectiondirectirycss*/
html, body{
		margin: 0px;
		padding: 0px;
		width: 100%;
	-webkit-font-smoothing: antialiased;
 	-moz-osx-font-smoothing: grayscale;
 	
 	z-index:2;
 	background: #fff
}
body{
	position: absolute;
}
/*.taskcolumn{
	width: 80%;
	padding: 0 15px;
	margin: 0px auto;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	display: inline-block;
}

@media screen and (max-width: 500px){
.taskcolumn{
	width: 100%;	
}
}

.taskcolumn .container {
	width: 60vh;
	margin-right: 30px;
}

.taskcolumn .container.left {
	float: left;
	background-color: #e3e3e3;
	height: 100%

}*/

.bottombackground {
	background: #323232;
	height: 10vw;
	width: 100%;
}
.nav{
	display: block;
	height: 40px;
	box-shadow: 10px;
	background: #333333;
	position: fixed;  
	top: 0px;
	
	z-index: 30;
	width: 100%;
	/*border-bottom-right-radius: 2px;
		border-bottom-left-radius: 2px;
	/*box-shadow: 0 0 0.5em rgba(0,0,0,0.6);
	box-shadow: 3px 3px 10px -1px rgba(128,128,128,0.64);*/
	box-shadow: 0px 3px 8px 1px rgba(158,158,158,0.53);
	}
.nav .flexbox-container {
	display: inline-flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	float: right;
	border-radius: 1px;
	height: 40px;
	width: 100%
	position: absolute;
}
@media screen and (max-width: 600px){
 .nav .flexbox-container{
 	margin: auto;
 	float: right;

 }

 .nav .flexbox-container img{
 	display: none;
 }
 .nav .Search{
 	display: none;
 }
 .nav .slate-logo {
 	display: none;
 }
  .Searc-moblie {
 	display: block;
 }
}
@media screen and (min-width: 600px){
 	.Searc-moblie {
 		display: none;
	}
	.nav .Search{
 		display: inline-block;
 	}
}
.bitmap{
	height: 20px;
	/*transform: rotate(35deg);*/
	margin-left:6px;
}

.slate-logo {
	display: inline-block;

	height:auto;
	z-index: 31; 

	margin-left: 5px;
}

.nav .Search{
	/*display: inline-block;	*/
}
.nav .Search form input{
	border-radius: 2px;/*
	border: 1px solid #;*/

	border: none;
	
	padding: 0 0px 1px 5px;
	line-height: 30px;
	font-size: 16px;
	width:57px;
	height: 24px; 
	transition: width 100ms;
	/*color: white;*/
	/*transition-timing-function: cubic-bezier(0.4,0.8,0.2,0.5) ;*/
	box-shadow: none;
	background: #565656;
}

.nav .Search form input:focus{
	width: 160px;
	color: black;
	border-bottom: 1px solid #08a;
	height: 24px;
	padding: 0 0px 0 5px;
}

.menu {
	line-height: 38px;
	padding-left: 10px;
	padding-right: 10px;
}
.menu:hover {
	border-radius: 10px;
	background:#335F76;
}
.menu-text {
	font-size:20px;
	text-decoration:none;
	color:#fff;
}

.dropdown_menu {
	position: absolute;
	width: 180px;
	top: 35px;
	right: 0px;
   	box-shadow: 10px 10px 5px grey;
   	text-align: center;

    border-radius: 2px;

    box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12),0 5px 5px -3px rgba(0,0,0,0.2);
    display: none;

	background: #ddd;
	overflow: hidden;

	z-index: 20;

}
.menu .dropdown_menu a {
	padding: 0 5px;
	font-weight: bold;
	text-decoration: none;	
	display: block;
	border-top: solid 1px #eee;
	border-bottom: solid 1px #888;
	color: black;
	font-size: medium;
}

.menu .dropdown_menu a:first-child {
	border-top: none;
}
.menu .dropdown_menu a:last-child {
	border-bottom: none;
}
.menu .dropdown_menu a:hover {
	background: #fff;
}
.menu:hover .dropdown_menu {
	display: block;
}

.calendar{
	padding: 25px 20px;
	background: white;
	text-align: center;
	display: inline-block;
}
.calendar-text {
	text-align: unset;
	width:320px;}
.calendar-span{
	font-size:30px;
	padding-left: unset;
	padding-right: 35px;
}
.slate-thing{
	margin-top: 35px;
	padding:15px;	
	font-size: 15px;
	font-family: Lato, "Lucida Grande", Verdana, "Helvetica Neue", sans-serif;

	border:2px solid #D4D4D4;
	background: #E5EBEE;
}
.slate-thing a{
	text-decoration:none;
	color:#861B8A;
}


.container-logo{
	padding: 15px 15px 25px 15px;
	
	background: rgba(233, 233, 233, 0.9);
}
.logo {
	margin:10px 10px 5px 10px;}
.logo img{
	/*float:left;*/
	width: 110px;
	margin-right:auto; 
	float: left;
	margin-left: 5px;
	margin-right: 3px;
}
.text-Academy {
	padding-top: 8px;
	font-size: 27px;
	color: #31A0DA;
}
.text-Open-source{
	font-size: 18px;

	color: #B49D94;
}
.main_content {
	position: relative;
}
/*Upcoming Events*/
.upcomingeventscontainer {
	margin-top: 70px;
}
.upcomingevents {
display: inline-block;
 margin-left: 30px;
}
.upcomingevents span{
	font-size: 30px;
	font-family: 'Crimson Text', serif;
}
.Searc-moblie{
 /*display: none	*/
}
.Searc-moblie form input{
	border-radius: 2px;/*
	border: 1px solid #;*/

	border: none;
	
	padding: 0 0px 1px 5px;
	line-height: 30px;
	font-size: 16px;
	width:57px;
	height: 24px; 
	transition: width 100ms;
	/*color: white;*/
	/*transition-timing-function: cubic-bezier(0.4,0.8,0.2,0.5) ;*/
	box-shadow: none;
	background: #efefef;
}

/*footer.css*/
.footer{

}/*headercss*/
	</style>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text?<?php echo microtime();?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto<?php echo microtime();?>" rel="stylesheet">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Zilla+Slab?<?php echo microtime();?>" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato?<?php echo microtime();?>" rel="stylesheet">	
	
</head>
<body>	
<div class="nav">
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
		<div class="Search" id="search-bar">
			<form>
				<input type="text" placeholder="Search">
			</form>
		</div>
		<svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="bitmap">
	    		<path fill="white" d="M32.6 28.6C34.7 25.6 36 22 36 18 36 8 28 0 18 0S0 8 0 18c0 9.9 8 18 18 18 4 0 7.6-1.3 
	    		10.6-3.4L44 
	    		48l4-4-15.4-15.4zM4 18c0-7.7 6.3-14 14-14s14 6.3 14 14-6.3 14-14 14S4 25.7 4 18z"/>
		</svg>
		<div class="menu">
			<span class="menu-text">Menu</span>
			<div class="dropdown_menu">
				<a href="slatedashboard.php">Slate Dashboard</a>
				<a href="coursesectionsdirectory.php">Course Sections Directory</a>
				<a href="competencydashboard.php">Competency Dashboard</a>
				<a href="taskdashboard.php">Task Dashboard</a>
				<a href="upcomingevents.php">Upcoming Events</a>
				<a href="contactus.php">Contact Us</a>
			</div>
		</div>
	</div>
</div>