<?php include('otherphp/header.php'); ?>	
<?php include('otherphp/dots.php'); ?>
<script type="text/javascript">
	let = ['ne' 'en', 'pr', 'gb', 'ad', 'ex', 'ba'];
	
	document.querySelectorAll("creditne");
	document.querySelectorAll("crediten");
	document.querySelectorAll("creditpr");
	document.querySelectorAll("creditgb");
	document.querySelectorAll("creditad");
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
    console.log(document.querySelectorAll("creditex")); 
	console.log(document.querySelectorAll("creditba")); 
</script>
<style type="text/css">
	.standard_container{
		display: inline-grid;
		width: 500px;
		grid-template-columns: 250px 250px	/*30px 100px 10px 100px 10px 100px 30px*/;
 		grid-template-rows:50px 35px	/* 50px 35px repeat(3, 60px) */;
 		/*grid-column-gap: 5px;
		grid-row-gap: 5px;
	 	*//*grid-template-areas: 
	    	"headline headline headline"
	    	"subhead subhead subhead"
	    	"creditalign creditalign creditalign";*/
 		/*margin-bottom: 100px;*/
 		background: #ccc
 		-webkit-box-shadow: 7px 4px 5px 0px rgba(0,0,0,0.14);
		-moz-box-shadow: 7px 4px 5px 0px rgba(0,0,0,0.14);
		box-shadow: 7px 4px 5px 0px rgba(0,0,0,0.14);
		margin: 10px;

}

@media only screen and (max-width: 550px) {

	 .standard_container{
  		grid-template-columns: 50% 50%;
  	}

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
  	background: linear-gradient( #d94181 , #ca274f );
  	background-color: #b66;
	}

	.subhead2{
	grid-column-start: 1;
  	grid-column-end: 3;
  	grid-row-start: 2;
  	grid-row-end: 2;
  	/*background: #c55;*/
 	background-image: linear-gradient(#ffa200, #ff7d00);
  	background-color: #ffa200;
	}

	.subhead3{
	grid-column-start: 1;
  	grid-column-end: 3;
  	grid-row-start: 2;
  	grid-row-end: 2;
  	/*background: #c55;*/
  	background-image: linear-gradient(#5dc02a, #38a719);
 	background-color: #5dc02a;
	}

	.subhead4{
	grid-column-start: 1;
  	grid-column-end: 3;
  	grid-row-start: 2;
  	grid-row-end: 2;
  	/*background: #c55;*/
  	background-image: linear-gradient(#008cc1, #005ea8);
  	background-color: #008cc1;
	}

	}
	.creditalign {
		/*display: inline-block;*/
		grid-column-start: 1;
    	grid-column-end: 3;
   	 	grid-row-start: 3;
		grid-row-end: 3;

	}
	.creditframe{
		height: 40px;
		width: 500px;

		padding: 5px 0 5px 0;

		display: flex;
		flex-direction: row

	}
	.credit,.credit2,.credit3,.credit4,.credit5,.credit6,.credit7,.credit8{
		width: 30%;
		height: 30px;
		margin:auto;
		margin-top: 0px;
		margin-bottom: 0px;


		padding: 0px 5px 0 0;

		border: solid 1px #444;
		border-radius: 3px;
		text-align: center;
		font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
		font-weight: bold;
	}
	.credit{
		background: #d94181;

		color: #f5f5f5;
	}

	.credit2{
		background: #ffa200;
		color: #f5f5f5;
		}

	.credit3{
		background: #5dc02a;
		color: #f5f5f5;
	}

	.credit4{
		background: #008cc1;
		color: #f5f5f5;
	}

	.credit5{
		background: #9da39e;
		color: #f5f5f5;
	}

	.credit6{
		background: #6320ca;
		color: #f5f5f5;
	}

	.credit7{
		background: #0040ff;
		color: #f5f5f5;
	}

	.credit8{
		color: #f5f5f5;
	}
	.credit:last-child{
		padding: 0 0 0 5px;
	}
	.TextHolder{	
		border-top: solid 2px #ccc;

		/*height: 60px;*/
		margin-bottom: 10px;

		display:  inline-block;
		border-radius: 0 0 8px 8px;
		font: normal normal 400 16px/1.5 Lato,"Lucida Grande",Verdana,"Helvetica Neue",sans-serif;
	}
	.CreditName{
		margin-left: 8px;
		font-weight: 500;
		font-family: 'EB Garamond', serif;
	}
</style>
<script type="text/javascript">
document.getElementById("standard_container").className = "standard_container";
</script>

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
			 <div style="clear: both; float: right; margin-right: 25px;"></div> 
		</div>
	</div>	

	<div class="standard_container">
		<div class="headline">
			<span class="courseNum">HOW.1.0</span>
			<span class="courseName">Habits of Work</span>
		</div>
		<div class="subhead">
			<span>Working Toward: Entering</span>
		</div>
		<div class="creditalign">
			<div class="TextHolder">
				Preparedness
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit>EN</div>
					<div class=credit5>NE</div>
					<div class=credit2>PR</div>
				</div>
			</div>

			<div class="TextHolder">
				Engagement
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit>EN</div>
					<div class=credit2>PR</div>
					<div class=credit2>PR</div>
				</div>
			</div>

			<div class="TextHolder">
				Work Completion
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit>EN</div>
					<div class=credit>EN</div>
					<div class=credit>EN</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="standard_container">
		<div class="headline">
			<span class="courseNum">SCI.2.0.0</span>
			<span class="courseName">Matter & Energy</span>
		</div>
		<div class="subhead2">
			<span>Working Toward: Progressing</span>
		</div>
		<div class="creditalign">
			<div class="TextHolder">
				M&E Science & Engineering Practices
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit2>PR</div>
					<div class=credit2>PR</div>
					<div class=credit2>PR</div>
				</div>
			</div>

			<div class="TextHolder">
				M&E Crosscutting Concepts
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit2>PR</div>
					<div class=credit2>PR</div>
					<div class=credit3>GB</div>
				</div>
			</div>

			<div class="TextHolder">
				Reactions Core Ideas
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit2>PR</div>
					<div class=credit3>GB</div>
					<div class=credit3>GB</div>
				</div>
			</div>

			<div class="TextHolder">
				Structures Core Ideas
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit3>GB</div>
					<div class=credit3>GB</div>
					<div class=credit3>GB</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="standard_container">
		<div class="headline">
			<span class="courseNum">HUM.3.0.0</span>
			<span class="courseName">Speaking & Listening</span>
		</div>
		<div class="subhead3">
			<span>Working Toward: Graduation Benchmark</span>
		</div>
		<div class="creditalign">
			<div class="TextHolder">
				Presentation
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit2>PR</div>
					<div class=credit3>GB</div>
					<div class=credit3>GB</div>
				</div>
			</div>

			<div class="TextHolder">
				Discussion
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit3>GB</div>
					<div class=credit3>GB</div>
					<div class=credit3>GB</div>
				</div>
			</div>
		</div>
	</div>

	<div class="standard_container">
		<div class="headline">
			<span class="courseNum">DES.4.0.0</span>
			<span class="courseName">Computer Science</span>
		</div>
		<div class="subhead4">
			<span>Working Toward: Advancing</span>
		</div>
		<div class="creditalign">
			<div class="TextHolder">
				Code Design
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit3>GB</div>
					<div class=credit3>GB</div>
					<div class=credit4>AD</div>
				</div>
			</div>

			<div class="TextHolder">
				Information Technology
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit3>GB</div>
					<div class=credit4>AD</div>
					<div class=credit4>AD</div>
				</div>
			</div>

			<div class="TextHolder">
				Professional Practices
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit4>AD</div>
					<div class=credit4>AD</div>
					<div class=credit4>AD</div>
				</div>
			</div>

			<div class="TextHolder">
				Programming Techniques
				<span class="CreditName"> </span>
				<div class="creditframe">
					<div class=credit4>AD</div>
					<div class=credit8></div>
					<div class=credit8></div>
				</div>
			</div>
		</div>
	</div>

<div onload="showContent(/*headline,subhead,creditalign,TextHolder,CreditName,credit*/);" ></div>
<script>
var standardblock = showContent;

function showContent (/*headline,subhead,creditalign,TextHolder,CreditName,credit*/) {
	document.open();
    document.write("return '<div class=standard_container>'+'<div class=headline>'+'<span>'DES.2.0.0'</span>'+'<span>'Aesthetics & Meaning'</span>'+'<div class=subhead>'+'<span>'Working Toward: Entering'</span>'+'<div class=creditalign> [<div class=TextHolder>'+'<span>'Aesthetics & Meaning'</span>]'+'<span class=CreditName>'+'<div class=creditframe>'+'<div class=credit>'+'<span>'EN'</span>'+'<div class=credit>'+'<span>'EN'</span>'+'<div class=credit>'+'<span>'EN'</span></div> </div> </div> </div> </div>';");
    document.close();
/*return '<div class=standard_container>'+'<div class=headline>'+'<span>"DES.2.0.0"</span>'+'<span>"Aesthetics & Meaning"</span>'+'<div class=subhead>'+'<span>"Working Toward: Entering"</span>'+'<div class=creditalign> [<div class=TextHolder>'+'<span>"Aesthetics & Meaning"</span>]'+'<span class=CreditName>'+'<div class=creditframe>'+'<div class=credit>'+'<span>"EN"</span>'+'<div class=credit>'+'<span>"EN"</span>'+'<div class=credit>'+'<span>"EN"</span></div> </div> </div> </div> </div>';*/

}
console.log('headline','subhead','creditalign','TextHolder','CreditName','credit', standardblock);
</script>
</div>

<?php include('otherphp/footer.php'); ?>	