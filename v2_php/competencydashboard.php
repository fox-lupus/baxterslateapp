<?php include('otherphp/header.php'); ?>	
<?php include('otherphp/dots.php'); ?>
<script type="text/javascript">
	let = ['en', 'pr', 'gb', 'ad', 'ex', 'ba'];
	
	document.querySelectorAll("creditne");
	document.querySelectorAll("crediten");
	document.querySelectorAll("creditpr");
	document.querySelectorAll("creditgb");
	document.querySelectorAll("creditad");

/*  document.querySelectorAll(".credit.ex");
	document.querySelectorAll(".credit.ba");*/

	document.querySelectorAll("creditex");
	document.querySelectorAll("creditba");

function callcredit (content, creditframe) {

	return credit("ne","en","pr","gb","ad","ex","ba");
}
	console.log('content','creditframe');
	console.log(document.querySelectorAll("creditne")); 
	console.log(document.querySelectorAll("crediten")); 
	console.log(document.querySelectorAll("creditpr")); 
	console.log(document.querySelectorAll("creditgb")); 
	console.log(document.querySelectorAll("creditad")); 

 /*	console.log(document.querySelectorAll(".credit.ex")); 
	console.log(document.querySelectorAll(".credit.ba")); */
</script>
<style type="text/css">
	.standard_container{
		width: 500px;
		height: 160px;
		display: inline-grid;
		grid-template-columns: 250px 250px	/*30px 100px 10px 100px 10px 100px 30px*/;
 		grid-template-rows:50px 35px	/* 50px 35px repeat(3, 60px) */;
/* 		grid-column-gap: 5px;
		grid-row-gap: 5px;
	 	grid-template-areas: 
	    	"headline headline headline"
	    	"subhead subhead subhead"
	    	"credit. credit";
 		margin-bottom: 100px;*/

 		background: #ccc
 		-webkit-box-shadow: 7px 4px 5px 0px rgba(0,0,0,0.14);
		-moz-box-shadow: 7px 4px 5px 0px rgba(0,0,0,0.14);
		box-shadow: 7px 4px 5px 0px rgba(0,0,0,0.14);
		margin-top: 20px;

	}
	.headline {
	grid-column-start: 1;
  	grid-column-end: 3;
  	grid-row-start: 1;
  	grid-row-end: 1;

  	background-color: #b3b3b3;

  	border-radius: 8px 8px 0 0;
	}
	.subhead{
	grid-column-start: 1;
  	grid-column-end: 3;
  	grid-row-start: 2;
  	grid-row-end: 2;
  	/*background: #c55;*/
  	background: linear-gradient( #c44 , #b33  );
  	background-color: #b66;
	}
	}
	.creditaline {
		display: inline-block;

	}
	.creditframe{
		height: 50px;
		width: 500px;

		padding: 5px 0 5px 0;

		display: flex;
		flex-direction: row

	}
	.credit{
		width: 30%;
		height: 35px;

		background: #b66;

		margin:auto;
		margin-top: 0px;
		margin-bottom: 0px;

		padding: 0px 5px 0 0;

		border: solid 1px #444;
		border-radius: 3px;
	}
	.credit:last-child{
		padding: 0 0 0 5px;
	}
	.TextHolder{	
		border-top: solid 2px #ccc;

		height: 60px;

		display:  inline-block;
		border-radius: 0 0 8px 8px;
	}
	.CreditName{
		margin-left: 8px;
		font-weight: 500;
		font-family: 'EB Garamond', serif;
	}
</style>
<!-- <div class="mainContent">
	<div class="slategrades">

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
			 <div style="clear: both; float: right; margin-right: 25px;"></div> -->
		</div>
	</div>	

	<!-- do not touch -->
<div class="standard_container">
	<div class="headline">
		<span class="courseNum">HOW.1.0</span>
		<span class="courseName">Habits of Work</span>
	</div>
	<div class="subhead">
		<span>Working Toward: Entering</span>
	</div>
	<div class="creditaline">
		<div class="TextHolder">
			Preparedness
			<span class="CreditName"> </span>
			<div class="creditframe">
				<div class=credit>EN</div>
				<div class=credit>EN</div>
				<div class=credit>EN</div>
			</div>
		</div>
	</div>
</div>
<div onload="showContent(/*headline,subhead,creditaline,TextHolder,CreditName,credit*/);" ></div>
<script>
var standardblock = showContent;

function showContent (/*headline,subhead,creditaline,TextHolder,CreditName,credit*/) {
	document.open();
    document.write("return '<div class=standard_container>'+'<div class=headline>'+'<span>'DES.2.0.0'</span>'+'<span>'Aesthetics & Meaning'</span>'+'<div class=subhead>'+'<span>'Working Toward: Entering'</span>'+'<div class=creditaline> [<div class=TextHolder>'+'<span>'Aesthetics & Meaning'</span>]'+'<span class=CreditName>'+'<div class=creditframe>'+'<div class=credit>'+'<span>'EN'</span>'+'<div class=credit>'+'<span>'EN'</span>'+'<div class=credit>'+'<span>'EN'</span></div> </div> </div> </div> </div>';");
    document.close();
/*return '<div class=standard_container>'+'<div class=headline>'+'<span>"DES.2.0.0"</span>'+'<span>"Aesthetics & Meaning"</span>'+'<div class=subhead>'+'<span>"Working Toward: Entering"</span>'+'<div class=creditaline> [<div class=TextHolder>'+'<span>"Aesthetics & Meaning"</span>]'+'<span class=CreditName>'+'<div class=creditframe>'+'<div class=credit>'+'<span>"EN"</span>'+'<div class=credit>'+'<span>"EN"</span>'+'<div class=credit>'+'<span>"EN"</span></div> </div> </div> </div> </div>';*/

}
console.log('headline','subhead','creditaline','TextHolder','CreditName','credit', standardblock);
</script>

	<!-- <div class="standard_container">

		<div class="headline">
			<span class="courseNum">HOW.1.0</span>
			<span class="courseName">Habits of Work</span>
		</div>

		<div class="subhead en">Working Toward: Entering</div>
		
		<div class="content">
			Preparedness
			<div class="creditframe">
				<div class="crediten">EN</div>
				<div class="creditne">NE</div>
				<div class="creditpr">PR</div><img src="img/checkmarken.png">

			</div>
		</div>

		<div class="content">
			Engagement
			<div class="creditframe">
				<div class="crediten">EN</div>
				<div class="creditpr">PR</div>
				<div class="creditpr">PR</div><img src="img/checkmarken.png">
			</div>
		</div>

		<div class="content">
			Work Completion
			<div class="creditframe">
				<div class="crediten">EN</div>
				<div class="crediten">EN</div>
				<div class="crediten">EN</div><img src="img/checkmarken.png">
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
			<div class="creditframe">
				<div class="creditpr">PR</div>
				<div class="creditpr">PR</div>
				<div class="creditpr">PR</div><img src="img/checkmarkpr.png">
			</div>
		</div>

		<div class="content">
			Key Ideas and Details
			<div class="creditframe">
				<div class="crediten">EN</div>
				<div class="creditpr">PR</div>
				<div class="creditpr">PR</div><img src="img/checkmarken.png">
			</div>
		</div>

		<div class="content">
			Citing Evidence
			<div class="creditframe">
				<div class="creditpr">PR</div>
				<div class="creditgb">GB</div>
				<div class="creditgb">GB</div><img src="img/checkmarkpr.png">
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
			<div class="creditframe">
				<div class="creditgb">GB</div>
				<div class="creditgb">GB</div>
				<div class="creditgb">GB</div><img src="img/checkmarkgb.png">
			</div>
		</div>

		<div class="content">
			Develop Solution
			<div class="creditframe">
				<div class="creditpr">PR</div>
				<div class="creditgb">GB</div>
				<div class="creditgb">GB</div><img src="img/checkmarkpr.png">
			</div>
		</div>

		<div class="content">
			Identify Problems
			<div class="creditframe">
				<div class="creditgb">GB</div>
				<div class="creditpr">PR</div>
				<div class="creditpr">PR</div><img src="img/checkmarkpr.png">
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
			<div class="creditframe">
				<div class="creditad">AD</div>
				<div class="creditad">AD</div>
				<div class="creditgb">GB</div><img src="img/checkmarkgb.png">
			</div>
		</div>

		<div class="content">
			CC Crosscutting Concepts
			<div class="creditframe">
				<div class="creditad">AD</div>
				<div class="creditad">AD</div>
				<div class="creditad">AD</div><img src="img/checkmarkad.png">
			</div>
		</div>

		<div class="content">
			Cycles Core Concepts
			<div class="creditframe">
				<div class="creditad">AD</div>
				<div class="creditgb">GB</div>
				<div class="creditgb">GB</div><img src="img/checkmarkgb.png">
			</div>
		</div>

		<div class="content">
			Systems Core Concepts
			<div class="creditframe">
				<div class="creditad">AD</div>
				<div class="creditad">AD</div>
				<div class="creditad">AD</div><img src="img/checkmarkad.png">
			</div>
		</div>

	</div> --->
</div>

<?php include('otherphp/footer.php'); ?>	