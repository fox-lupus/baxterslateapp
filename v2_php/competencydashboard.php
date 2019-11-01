<?php include('otherphp/header.php'); ?>	
<?php include('otherphp/dots.php'); ?>
<script type="text/javascript">
	let = ['en', 'pr', 'gb', 'ad', 'ex', 'ba'];
	
	document.querySelectorAll("credit ne");
	document.querySelectorAll("credit en");
	document.querySelectorAll("credit pr");
	document.querySelectorAll("credit gb");
	document.querySelectorAll("credit ad");

/*  document.querySelectorAll(".credit .ex");
	document.querySelectorAll(".credit .ba");*/

	document.querySelectorAll("credit ex");
	document.querySelectorAll("credit ba");

function callcredit(content, creditsFrame) {

	return credit("ne","en","pr","gb","ad","ex","ba");
}

	console.log(document.querySelectorAll("credit ne")); 
	console.log(document.querySelectorAll("credit en")); 
	console.log(document.querySelectorAll("credit pr")); 
	console.log(document.querySelectorAll("credit gb")); 
	console.log(document.querySelectorAll("credit ad")); 

 /*	console.log(document.querySelectorAll(".credit .ex")); 
	console.log(document.querySelectorAll(".credit .ba")); */
</script>
<style type="text/css">
	.standard_container{
		width: 500px;
		display: grid;
		grid-template-columns:30px 100px 10px 100px 10px 100px 30px;
 		grid-template-rows: 40px 20px repeat(3, 60px) ;
/* 		grid-column-gap: 5px;
		grid-row-gap: 5px;
	 	grid-template-areas: 
	    	"headline headline headline"
	    	"subhead subhead subhead"
	    	"credit . credit";*/
 		margin-bottom: 100px;
	}
	.headline{
	grid-column-start: 1;
  	grid-column-end: 8;
  	grid-row-start: 1;
  	grid-row-end: 1;
	}
	.subhead{
	grid-column-start: 1;
  	grid-column-end: 8;
  	grid-row-start: 2;
  	grid-row-end: 2;
  	background: #333;
	}
	.creditsframe{
	}
</style>
<div class="mainContent">
<!--	<div class="slategrades">

		<div class="portfolio-border">
			
			<div>Portfolios:</div>

			<div class="portfolio-colors">
				<div class="en">EN</div> 
				<div class="pr">PR</div> 
				<div class="gb">GB</div>
				<div class="ad">AD</div>
				<div class="ex">EX</div>  
				<div class="ba">BA</div>
			</div>
			<div style="clear: both; float: right; margin-right: 25px;"></div>
		</div>
	</div>	-->
		<div class="standard_container">
			<div class="headline">
				<span>headline</span>
			</div>
			<div class="subhead">
			</div>
			<div class="creditsFrame">
				<div class="credit "></div>
				<div class="credit "></div>
				<div class="credit "></div>
			</div>
			<div class="creditsFrame">
				<div class="credit "></div>
				<div class="credit "></div>
				<div class="credit "></div>
			</div>
			<div class="creditsFrame">
				<div class="credit "></div>
				<div class="credit "></div>
				<div class="credit "></div>
			</div>

		</div>

	<!-- <div class="standard_container">

		<div class="headline">
			<span class="courseNum">HOW.1.0</span>
			<span class="courseName">Habits of Work</span>
		</div>

		<div class="subhead en">Working Toward: Entering</div>
		
		<div class="content">
			Preparedness
			<div class="creditsFrame">
				<div class="credit en">EN</div>
				<div class="credit ne">NE</div>
				<div class="credit pr">PR</div><img src="img/checkmarken.png">

			</div>
		</div>

		<div class="content">
			Engagement
			<div class="creditsFrame">
				<div class="credit en">EN</div>
				<div class="credit pr">PR</div>
				<div class="credit pr">PR</div><img src="img/checkmarken.png">
			</div>
		</div>

		<div class="content">
			Work Completion
			<div class="creditsFrame">
				<div class="credit en">EN</div>
				<div class="credit en">EN</div>
				<div class="credit en">EN</div><img src="img/checkmarken.png">
			</div>
		</div>

	</div>


	<div class="standard_container">
		<div class="headline">
			<span class="courseNum">HUM.2.0.0</span>
			<span class="courseName">Reading</span>
		</div>

		<div class="subhead pr">Working Toward: Progressing</div>
		
		<div class="content">
			Craft and Structure
			<div class="creditsFrame">
				<div class="credit pr">PR</div>
				<div class="credit pr">PR</div>
				<div class="credit pr">PR</div><img src="img/checkmarkpr.png">
			</div>
		</div>

		<div class="content">
			Key Ideas and Details
			<div class="creditsFrame">
				<div class="credit en">EN</div>
				<div class="credit pr">PR</div>
				<div class="credit pr">PR</div><img src="img/checkmarken.png">
			</div>
		</div>

		<div class="content">
			Citing Evidence
			<div class="creditsFrame">
				<div class="credit pr">PR</div>
				<div class="credit gb">GB</div>
				<div class="credit gb">GB</div><img src="img/checkmarkpr.png">
			</div>
		</div>

	</div>

	
	<div class="standard_container">

		<div class="headline">
			<span class="courseNum">DES 1.0.0</span>
			<span class="courseName">Design Process</span>
		</div>

		<div class="subhead gb">Working Toward: Graduation Benchmark</div>
		
		<div class="content">
			Analyze and optimize
			<div class="creditsFrame">
				<div class="credit gb">GB</div>
				<div class="credit gb">GB</div>
				<div class="credit gb">GB</div><img src="img/checkmarkgb.png">
			</div>
		</div>

		<div class="content">
			Develop Solution
			<div class="creditsFrame">
				<div class="credit pr">PR</div>
				<div class="credit gb">GB</div>
				<div class="credit gb">GB</div><img src="img/checkmarkpr.png">
			</div>
		</div>

		<div class="content">
			Identify Problems
			<div class="creditsFrame">
				<div class="credit gb">GB</div>
				<div class="credit pr">PR</div>
				<div class="credit pr">PR</div><img src="img/checkmarkpr.png">
			</div>
		</div>

	</div>


	<div class="standard_container">

		<div class="headline">
			<span class="courseNum">SCI.4.0.0</span>
			<span class="courseName">Climate Change</span>
		</div>

		<div class="subhead ad">Working Toward: Advancing</div>
		
		<div class="content">
			CC Science & Engineering Practices
			<div class="creditsFrame">
				<div class="credit ad">AD</div>
				<div class="credit ad">AD</div>
				<div class="credit gb">GB</div><img src="img/checkmarkgb.png">
			</div>
		</div>

		<div class="content">
			CC Crosscutting Concepts
			<div class="creditsFrame">
				<div class="credit ad">AD</div>
				<div class="credit ad">AD</div>
				<div class="credit ad">AD</div><img src="img/checkmarkad.png">
			</div>
		</div>

		<div class="content">
			Cycles Core Concepts
			<div class="creditsFrame">
				<div class="credit ad">AD</div>
				<div class="credit gb">GB</div>
				<div class="credit gb">GB</div><img src="img/checkmarkgb.png">
			</div>
		</div>

		<div class="content">
			Systems Core Concepts
			<div class="creditsFrame">
				<div class="credit ad">AD</div>
				<div class="credit ad">AD</div>
				<div class="credit ad">AD</div><img src="img/checkmarkad.png">
			</div>
		</div>

	</div> --->
</div>

<?php include('otherphp/footer.php'); ?>	