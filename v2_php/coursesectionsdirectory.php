<?php include('otherphp/header.php'); ?>
<?php include('otherphp/top-head.php'); ?>`
<style type="text/css">
	@media only screen and (max-width: 1600px) {

	.special_table tr td:before {
			content: attr(data-label);
			
			display: table-cell;
			text-align: right;
			font-weight: bold;
		}
		.special_table tr th {
			display: none;
		}
		.special_table tr td {
			display: table-row;
		}
		.special_table tr {
			display: inline-block;
			border-top: 1px gray solid;
			border-bottom: 1px gray solid;
			margin-top:10px; 
		}
		.special_table tr:first-of-type {
			border-top: 1px solid #ccc;
		}
		.special_table {
			display: flex;
			flex-wrap: wrap;
		}
		.special_table tr .subhead{
			display: none
		}
		tr:nth-child(odd) {
		background:none;
		}
	}

</style>
<div class="container-of-directory">
	<div class="head-of-page">Course Sections Directory</div>
	<div class="Filter">
		<span>Filters</span>
		<div class="Sections-contiainer">
			<div class="sections-text">	
					<span>TERM</span>
       			<select class="section" name="location"> 
                	<option value="">Any</option>
					<option selected="SELECTED" value="*current">Current</option>
					<option value="spring1819">spring1819</option>
					<option value="fall1819">fall1819</option>
					<option value="term">2018-19</option>
					<option value="spring1718">spring1718</option>
					<option value="t2017-2">winter1718</option>
					<option value="t2017-1">fall1718</option>
					<option value="y2017">2017-18</option>
					<option value="t2016-3">Term 3</option>
					<option value="y2016">2016-17</option>          
        		</select>
        	</div>
			<div class="sections-text">	
					<span>COURSE</span>
				<select class="section" name="course">
   		            <option value="">Any</option>
   					<option value="2170">2170</option>
					<option value="2670">2670</option>
					<option value="3160">2D Geometry</option>
					<option value="4290">4290</option>
					<option value="9100">9100</option>
					<option value="MUS102">a Cappella</option>
					<option value="MAT200">Advanced Algebra</option>
					<option value="SCI401">Advanced Chemistry Lab</option>
					<option value="1095">Advanced Engineering</option>
					<option value="EPE500">Advanced Engineering</option>
					<option value="2575">Advanced Public Speaking</option>
					<option value="ENG453">Advanced Public Speaking</option>
					<option value="8110">Advisory 10</option>
					<option value="ADV010">Advisory 10</option>
					<option value="8111">Advisory 11</option>
					<option value="ADV011">Advisory 11</option>
					<option value="8112">Advisory 12</option>
					<option value="ADV012">Advisory 12</option>
					<option value="8109">Advisory 9</option>
					<option value="ADV009">Advisory 9</option>
					<option value="3132">Algebra</option>
					<option value="3140">Algebraic Techniques</option>
					<option value="EPM100">Algebraic Techniques</option>
					<option value="SOC200">American Studies</option>
					<option value="ART303">Animation</option>
					<option value="1600">Art Fundamentals</option>
					<option value="ART100">Art Fundamentals</option>
					<option value="SOC451">Art History</option>
					<option value="8550">BASE</option>
					<option value="BASE">BASE</option>
					<option value="BAS400">BASE</option>
					<option value="EPE200">CAD &amp; Geometry</option>
					<option value="1020">CAD I: Parametric Mod &amp; Design</option>
					<option value="MAT501">Calculus 1</option>
					<option value="3310">Calculus 1: Foundations</option>
					<option value="4295">Calculus-Based Physics</option>
					<option value="DES302">CAM (Computer Aided Machining)</option>
					<option value="5040">Chinese Handwriting &amp; Calligraphy</option>
					<option value="4200">Climate Change</option>
					<option value="CChange">Climate Change Sprint Class</option>
					<option value="ENG202">Coming of Age</option>
					<option value="1210">Composites</option>
					<option value="DES203">Composites</option>
					<option value="2610">Confronting Genocide</option>
					<option value="2315">Constitution: Action Research</option>
					<option value="2310">Constitution: Debate &amp; Discuss</option>
					<option value="WEL210">Couch to 5k</option>
					<option value="6100">Couch to 5K Fitness</option>
					<option value="DES105">Design Thinking</option>
					<option value="MAT330">Designing Statistical Studies</option>
					<option value="EPM500">Differential Equations</option>
					<option value="1661">Digital Art</option>
					<option value="ART203">Digital Art</option>
					<option value="HUM125">Digital Org and Communication</option>
					<option value="2340">Digital Storytelling</option>
					<option value="ENG250">Digital Storytelling</option>
					<option value="1625">Drawing 1</option>
					<option value="ART201">Drawing I</option>
					<option value="1630">Drawing II</option>
					<option value="ART301">Drawing II</option>
					<option value="2570">Dystopia/Utopia</option>
					<option value="ENG301">Dystopia/Utopia</option>
					<option value="SOC100">Early Civilization</option>
					<option value="HUMINTWinter">ELA Intensive</option>
					<option value="1060">Electronics I</option>
					<option value="ELE100">Electronics I</option>
					<option value="1070">Electronics II</option>
					<option value="EPE300">Engineering I</option>
					<option value="EPE400">Engineering II</option>
					<option value="9201">Engineering Pathway</option>
					<option value="1050">Entrepreneurship</option>
					<option value="EPM200">EP Advanced Algebra</option>
					<option value="3635">EP Advanced Precalculus</option>
					<option value="EPM350">EP Advanced Precalculus</option>
					<option value="EPAS">EP Algebra Support</option>
					<option value="EPAS-1">EP Algebra Support</option>
					<option value="3610">EP Algebraic Techniques</option>
					<option value="EPH200">EP American Studies</option>
					<option value="4620">EP Biochem</option>
					<option value="EPS250">EP Biology</option>
					<option value="3640">EP Calculus</option>
					<option value="EPM400">EP Calculus</option>
					<option value="EPS450">EP Calculus-based Physics</option>
					<option value="1825">EP Computer Science</option>
					<option value="EPC200">EP Computer Science I</option>
					<option value="EPC300">EP Computer Science II</option>
					<option value="3660">EP Differential Equations</option>
					<option value="EPS100">EP Earth Science</option>
					<option value="1985">EP Engineering 10</option>
					<option value="EPH400">EP Entrepreneurship</option>
					<option value="EPH300">EP Global Perspectives</option>
					<option value="EPHEALTH">EP Health</option>
					<option value="4040">EP Human Evolutionary Anatomy</option>
					<option value="2675">EP Humanities 11</option>
					<option value="2680">EP Humanities 12</option>
					<option value="EPM150">EP Intermediate Algebra</option>
					<option value="EPS200">EP Introduction to Chemistry</option>
					<option value="0004">EP Linear Algebra</option>
					<option value="EPM450">EP Multivariate Calculus</option>
					<option value="0005">EP Numerical Methods</option>
					<option value="4640">EP Physical Chem</option>
					<option value="EPS300">EP Physical Chemistry</option>
					<option value="EPS400">EP Physics</option>
					<option value="3630">EP Precalculus</option>
					<option value="EPM300">EP Precalculus</option>
					<option value="1099">EP Study Block</option>
					<option value="EPS102">EP Writing Intensive/EarthSci</option>
					<option value="0003">EP-9 Intro to CAD</option>
					<option value="ENG452">Film Studies</option>
					<option value="FLX900">Flex Friday Project</option>
					<option value="FLL100">Focus Learning Lab</option>
					<option value="8415">Focused Learning Lab T1</option>
					<option value="8435">Focused Learning Lab T3</option>
					<option value="SCI402">Forensics</option>
					<option value="SCI301">Forest,Wetland,&amp;MarineEcology</option>
					<option value="5100">French I</option>
					<option value="FRE100">French I</option>
					<option value="5110">French II</option>
					<option value="FRE200">French II</option>
					<option value="5130">French III/IV</option>
					<option value="FRE350">French III/IV</option>
					<option value="MAT300">Functional Analysis</option>
					<option value="3150">Functions</option>
					<option value="4220">Genetics</option>
					<option value="bioforev">Genetics Ind Study</option>
					<option value="4205">GIS-based Climate Change</option>
					<option value="SOC300">Global Perspectives</option>
					<option value="2330">Global South</option>
					<option value="1640">Graphic Design I</option>
					<option value="ART202">Graphic Design I</option>
					<option value="1645">Graphic Design II</option>
					<option value="ART302">Graphic Design II</option>
					<option value="1400">Guitar Lab</option>
					<option value="MUS103">Guitar Lab</option>
					<option value="6000">Health</option>
					<option value="5240">Hispanic Culture</option>
					<option value="4110">Human Evolutionary Anatomy</option>
					<option value="2011">Humanities 9</option>
					<option value="HUMINT">Humanities Intensive</option>
					<option value="9000">Humanities Standards Hall</option>
					<option value="1710">Illustration</option>
					<option value="ART204">Illustration</option>
					<option value="SCI302">Immunology</option>
					<option value="0008">Independent Study</option>
					<option value="1220">Industrial/Product Design</option>
					<option value="MAT150">Intermediate Algebra</option>
					<option value="1015">Intro to Arduino Programming</option>
					<option value="COS100">Intro to Computer Science</option>
					<option value="DES100">Introduction to Design</option>
					<option value="1000">Introduction to Engineering</option>
					<option value="1200">Introduction to FabLab</option>
					<option value="GIS100">Introduction to GIS</option>
					<option value="3210">Introduction to Logic</option>
					<option value="1800">Introduction to Programming</option>
					<option value="JAZZ">Jazz Band</option>
					<option value="SCI200">Life Science</option>
					<option value="ENG402">Lit Seminar</option>
					<option value="DES301">Luthiery</option>
					<option value="5050">Mah Jong &amp; Chinese Chess</option>
					<option value="5000">Mandarin I</option>
					<option value="MAN100">Mandarin I</option>
					<option value="5010">Mandarin II</option>
					<option value="MAN200">Mandarin II</option>
					<option value="MAN300">Mandarin III</option>
					<option value="5025">Mandarin III/IV</option>
					<option value="0007">Math Fundamentals</option>
					<option value="MATHFUN">Math Fundamentals</option>
					<option value="MATHFUNWinter">Math Intensive</option>
					<option value="MAT125">Math Reasoning</option>
					<option value="4120">Matter &amp; Substances</option>
					<option value="4280">Mechanics</option>
					<option value="1250">Mechanisms</option>
					<option value="DES202">Mechanisms</option>
					<option value="4010">Micro-Anatomy &amp; Physiology</option>
					<option value="4011">Micro-Anatomy &amp; Physiology</option>
					<option value="6200">Mind Wise</option>
					<option value="2030">Model UN</option>
					<option value="SOC353">Model UN</option>
					<option value="3105">Modeling in Math</option>
					<option value="2545">Modern Capitalism</option>
					<option value="ENG302">Multicultural Lit</option>
					<option value="2370">Multicultural Literature</option>
					<option value="MUS104">Music Comp &amp; Tech</option>
					<option value="1410">Music Comp &amp; Technology I</option>
					<option value="1420">Music Comp &amp; Technology II</option>
					<option value="1440">Music Ensemble</option>
					<option value="MUS101">Music Ensemble</option>
					<option value="1445">Music Ensemble: A Cappella</option>
					<option value="SCI352">Nuclear Chemistry &amp; EMagnetism</option>
					<option value="SCI353">Oceanography</option>
					<option value="2020">Personal Finance</option>
					<option value="1655">Photography, Analogue</option>
					<option value="SCI250">Physical Science</option>
					<option value="3220">Polynomial/Rational Functions</option>
					<option value="MAT401">Precalculus (Functions)</option>
					<option value="ART304">Printmaking</option>
					<option value="3300">Probability</option>
					<option value="3130">Problem Solving with Algebra</option>
					<option value="COS200">Programming I</option>
					<option value="1885">Programming Studio</option>
					<option value="COS300">Programming Studio II</option>
					<option value="2100">Research: Reading Nonfiction</option>
					<option value="SCI351">River &amp; Stormwater Analysis</option>
					<option value="2130">Sci-Fi</option>
					<option value="ENG201">Science Fiction</option>
					<option value="ENG401">Science, Tech, &amp; Ethics</option>
					<option value="2550">Science, Tech, Ethics</option>
					<option value="2389">Shakespeare Seminar</option>
					<option value="ENG451">Shakespeare Seminar</option>
					<option value="ENG300">Short Stories</option>
					<option value="2131">Social Action Research</option>
					<option value="3010">Social Decision Making</option>
					<option value="2140">Social Movements</option>
					<option value="ENG100">Society, Power, and Innovation</option>
					<option value="5200">Spanish I</option>
					<option value="SPA100">Spanish I</option>
					<option value="5210">Spanish II</option>
					<option value="SPA200">Spanish II</option>
					<option value="5225">Spanish III/IV</option>
					<option value="SPA350">Spanish III/IV</option>
					<option value="STEM100">STEM Math and Science</option>
					<option value="STEM 100">STEM Math and Science</option>
					<option value="9300">Study Session</option>
					<option value="9203">Summit</option>
					<option value="SUM500">Summit</option>
					<option value="2150">Technical Communication</option>
					<option value="1450">Theater: Performance</option>
					<option value="THE201">Theatre: Performance</option>
					<option value="3120">Transformational Gemetry</option>
					<option value="3230">Trig &amp; Exponential Functions</option>
					<option value="HUM300S">US Economic History</option>
					<option value="4130">Waves &amp; Mechanics</option>
					<option value="WEL100">Wellness I</option>
					<option value="WEL200">Wellness II</option>
					<option value="1260">Woodworking</option>
					<option value="DES201">Woodworking</option>
					<option value="6300">Yoga</option>
					<option value="WEL205">Yoga and Mindfulness I</option>
					<option value="WEL305">Yoga and Mindfulness II</option>
       			</select>
       		</div>
       		<div class="sections-text">	
					<span>LOCATION</span>
				<select class="section" name="course">
	                <option value="">Any</option>
					<option value="room-209">Room 209</option>
					<option value="room-210">Room 210</option>
					<option value="room-211">Room 211</option>
					<option value="room-213">Room 213</option>
					<option value="room-215">Room 215</option>
					<option value="room-216">Room 216</option>
					<option value="room-218">Room 218</option>
					<option value="room-219">Room 219</option>
					<option value="room-220">Room 220</option>
					<option value="room-221">Room 221</option>
					<option value="room-226-art">Room 226 (Art)</option>
					<option value="room-228-music">Room 228(Music)</option>
					<option value="room-angelou">Room Angelou</option>
					<option value="room-bernoulli">Room Bernoulli</option>
					<option value="room-confucius">Room Confucius</option>
					<option value="room-darwin">Room Darwin</option>
					<option value="room-euclid">Room Euclid</option>
					<option value="room-fablab">Room FabLab</option>
					<option value="room-gr_annex">Room GR Annex</option>
					<option value="room-greeley">Room Greeley</option>
					<option value="room-green_salt">Room Green Salt</option>
					<option value="room-grey_salt">Room Grey Salt</option>
					<option value="room-hopper">Room Hopper</option>
					<option value="room-kayyam">Room Kayyam</option>
					<option value="room-khayyam">Room Khayyam</option>
					<option value="room-lancaster">Room Lancaster</option>
					<option value="room-longfellow">Room Longfellow</option>
					<option value="room-mirzakhani">Room Mirzakhani</option>
					<option value="room-newton">Room Newton</option>
					<option value="room-occam">Room Occam</option>
					<option value="room-pasteur">Room Pasteur</option>
					<option value="room-schneider">Room Schneider</option>
					<option value="room-turing">Room Turing</option>
					<option value="room-verne">Room Verne</option>
					<option value="room-wyeth">Room Wyeth</option>
					<option value="room-xeno">Room Xeno</option>
        		</select>
       		</div>
       		<div class="sections-text">	
					<span>SCHEDULE</span>
       			<select class="section" name="location">
	                <option value="">Any</option>
					<option value="A">A</option>
					<option value="Advisory">Advisory</option>
					<option value="AM Session">AM Session</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					<option value="E">E</option>
					<option value="MidBlock">MidBlock</option>
					<option value="PM Session">PM Session</option>
        		</select>
        	</div>
       	</div>
		<button class="botton-1">Apply Filters</button>
		<button class="botton-2">Reset Filters</button>
		
	</div>
	<div class="directory"> 
		
		<table class="special_table">
			<thead>
	            <tr>
	                <th scope="col">Code</th>
	                <th scope="col">Teachers</th>
	                <th scope="col">Students</th>
	                <th scope="col">Location</th>
	                <th scope="col">Schedule</th>
	            </tr>
	        </thead>
	        <tbody>
        
            <tr>
                <th colspan="5">
                    Advanced Algebra</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT200-3">spring1819-MAT200-3</a></td>
                    <td><a href="/people/gyock" title="Gretchen Yock&thinsp;(Teacher)" ><span class="name ">Gretchen Yock</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT200-4">spring1819-MAT200-4</a></td>
                    <td><a href="/people/juliakosowsky" title="Julia Kosowsky&thinsp;(Teacher)" ><span class="name ">Julia Kosowsky</span></a></td>
                    <td>25</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT200-5">spring1819-MAT200-5</a></td>
                    <td><a href="/people/juliakosowsky" title="Julia Kosowsky&thinsp;(Teacher)" ><span class="name ">Julia Kosowsky</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT200-6">spring1819-MAT200-6</a></td>
                    <td><a href="/people/gyock" title="Gretchen Yock&thinsp;(Teacher)" ><span class="name ">Gretchen Yock</span></a></td>
                    <td>18</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Advanced Chemistry Lab</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI401-1">spring1819-SCI401-1</a></td>
                    <td><a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Advanced Engineering</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPE500-1">spring1819-EPE500-1</a></td>
                    <td><a href="/people/jamory" title="Jon Amory&thinsp;(Teacher)" ><span class="name ">Jon Amory</span></a></td>
                    <td>11</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Advanced Public Speaking</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG453-1">spring1819-ENG453-1</a></td>
                    <td><a href="/people/agilman" title="Adam Gilman&thinsp;(Teacher)" ><span class="name ">Adam Gilman</span></a></td>
                    <td>11</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Advisory 10</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV010-1">spring1819-ADV010-1</a></td>
                    <td><a href="/people/awaters" title="Alex Waters&thinsp;(Teacher)" ><span class="name ">Alex Waters</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV010-2">spring1819-ADV010-2</a></td>
                    <td><a href="/people/msullivan" title="Molly Sullivan&thinsp;(Teacher)" ><span class="name ">Molly Sullivan</span></a></td>
                    <td>12</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV010-3">spring1819-ADV010-3</a></td>
                    <td><a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV010-4">spring1819-ADV010-4</a></td>
                    <td></td>
                    <td>13</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV010-5">spring1819-ADV010-5</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a>, <a href="/people/eli" title="Enyue Li&thinsp;(Teacher)" ><span class="name ">Enyue Li</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV010-6">spring1819-ADV010-6</a></td>
                    <td><a href="/people/jguerette" title="Jordan Guerette&thinsp;(Teacher)" ><span class="name ">Jordan Guerette</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV010-7">spring1819-ADV010-7</a></td>
                    <td><a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV010-8">spring1819-ADV010-8</a></td>
                    <td><a href="/people/dconnor" title="David Connor&thinsp;(Teacher)" ><span class="name ">David Connor</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Advisory 11</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV011-1">spring1819-ADV011-1</a></td>
                    <td><a href="/people/kvirmalo" title="Katelyn Virmalo&thinsp;(Teacher)" ><span class="name ">Katelyn Virmalo</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV011-2">spring1819-ADV011-2</a></td>
                    <td><a href="/people/blucy" title="Breanne Lucy&thinsp;(Teacher)" ><span class="name ">Breanne Lucy</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV011-3">spring1819-ADV011-3</a></td>
                    <td><a href="/people/hlarsson" title="Halsted Larsson&thinsp;(Administrator)" ><span class="name ">Halsted Larsson</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV011-4">spring1819-ADV011-4</a></td>
                    <td><a href="/people/agilman" title="Adam Gilman&thinsp;(Teacher)" ><span class="name ">Adam Gilman</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV011-5">spring1819-ADV011-5</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a></td>
                    <td>18</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV011-6">spring1819-ADV011-6</a></td>
                    <td><a href="/people/mbarnes" title="Matthew Barnes&thinsp;(Teacher)" ><span class="name ">Matthew Barnes</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Advisory 12</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV012-1">spring1819-ADV012-1</a></td>
                    <td><a href="/people/gyock" title="Gretchen Yock&thinsp;(Teacher)" ><span class="name ">Gretchen Yock</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV012-2">spring1819-ADV012-2</a></td>
                    <td><a href="/people/avickerson" title="Amanda Vickerson&thinsp;(Teacher)" ><span class="name ">Amanda Vickerson</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV012-3">spring1819-ADV012-3</a></td>
                    <td><a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV012-4">spring1819-ADV012-4</a></td>
                    <td><a href="/people/mlawrence" title="Megan Lawrence&thinsp;(Teacher)" ><span class="name ">Megan Lawrence</span></a>, <a href="/people/bolson" title="Brian Olson&thinsp;(Teacher)" ><span class="name ">Brian Olson</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV012-5">spring1819-ADV012-5</a></td>
                    <td><a href="/people/jdaigle" title="Jenn Daigle&thinsp;(Teacher)" ><span class="name ">Jenn Daigle</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV012-6">spring1819-ADV012-6</a></td>
                    <td></td>
                    <td>14</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Advisory 9</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV009-1">spring1819-ADV009-1</a></td>
                    <td><a href="/people/sbuhlman" title="Sarah Buhlman&thinsp;(Teacher)" ><span class="name ">Sarah Buhlman</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV009-2">spring1819-ADV009-2</a></td>
                    <td><a href="/people/sstutzman" title="Sunny Stutzman&thinsp;(Teacher)" ><span class="name ">Sunny Stutzman</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV009-3">spring1819-ADV009-3</a></td>
                    <td><a href="/people/juliakosowsky" title="Julia Kosowsky&thinsp;(Teacher)" ><span class="name ">Julia Kosowsky</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV009-4">spring1819-ADV009-4</a></td>
                    <td><a href="/people/jdoughty" title="Jonathan Doughty&thinsp;(Teacher)" ><span class="name ">Jonathan Doughty</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV009-5">spring1819-ADV009-5</a></td>
                    <td><a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV009-6">spring1819-ADV009-6</a></td>
                    <td><a href="/people/korr" title="Kelly Orr&thinsp;(Teacher)" ><span class="name ">Kelly Orr</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ADV009-7">spring1819-ADV009-7</a></td>
                    <td><a href="/people/rturkewitz" title="Rebecca Turkewitz&thinsp;(Teacher)" ><span class="name ">Rebecca Turkewitz</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>Advisory</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
American Studies</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC200-4">spring1819-SOC200-4</a></td>
                    <td><a href="/people/korr" title="Kelly Orr&thinsp;(Teacher)" ><span class="name ">Kelly Orr</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC200-5">spring1819-SOC200-5</a></td>
                    <td><a href="/people/korr" title="Kelly Orr&thinsp;(Teacher)" ><span class="name ">Kelly Orr</span></a></td>
                    <td>19</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Animation</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ART303-1">spring1819-ART303-1</a></td>
                    <td><a href="/people/mbarnes" title="Matthew Barnes&thinsp;(Teacher)" ><span class="name ">Matthew Barnes</span></a></td>
                    <td>12</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Art History</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC451-1">spring1819-SOC451-1</a></td>
                    <td><a href="/people/korr" title="Kelly Orr&thinsp;(Teacher)" ><span class="name ">Kelly Orr</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
BASE</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-BAS400-2">spring1819-BAS400-2</a></td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
CAD &amp; Geometry</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPE200-1">spring1819-EPE200-1</a></td>
                    <td><a href="/people/jamory" title="Jon Amory&thinsp;(Teacher)" ><span class="name ">Jon Amory</span></a></td>
                    <td>31</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Calculus 1</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT501-1">spring1819-MAT501-1</a></td>
                    <td><a href="/people/gyock" title="Gretchen Yock&thinsp;(Teacher)" ><span class="name ">Gretchen Yock</span></a></td>
                    <td>8</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
CAM (Computer Aided Machining)</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-DES302-1">spring1819-DES302-1</a></td>
                    <td><a href="/people/sstutzman" title="Sunny Stutzman&thinsp;(Teacher)" ><span class="name ">Sunny Stutzman</span></a></td>
                    <td>10</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Coming of Age</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG202-1">spring1819-ENG202-1</a></td>
                    <td><a href="/people/blucy" title="Breanne Lucy&thinsp;(Teacher)" ><span class="name ">Breanne Lucy</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG202-2">spring1819-ENG202-2</a></td>
                    <td><a href="/people/blucy" title="Breanne Lucy&thinsp;(Teacher)" ><span class="name ">Breanne Lucy</span></a></td>
                    <td>19</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG202-3">spring1819-ENG202-3</a></td>
                    <td><a href="/people/blucy" title="Breanne Lucy&thinsp;(Teacher)" ><span class="name ">Breanne Lucy</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Design Thinking</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-DES105-1">spring1819-DES105-1</a></td>
                    <td><a href="/people/hlarsson" title="Halsted Larsson&thinsp;(Administrator)" ><span class="name ">Halsted Larsson</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-DES105-2">spring1819-DES105-2</a></td>
                    <td><a href="/people/sstutzman" title="Sunny Stutzman&thinsp;(Teacher)" ><span class="name ">Sunny Stutzman</span></a></td>
                    <td>11</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Designing Statistical Studies</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT330-4">spring1819-MAT330-4</a></td>
                    <td><a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT330-5">spring1819-MAT330-5</a></td>
                    <td><a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>21</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT330-6">spring1819-MAT330-6</a></td>
                    <td><a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Differential Equations</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPM500-2">spring1819-EPM500-2</a></td>
                    <td><a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a></td>
                    <td>9</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Digital Org and Communication</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-HUM125-1">spring1819-HUM125-1</a></td>
                    <td><a href="/people/msullivan" title="Molly Sullivan&thinsp;(Teacher)" ><span class="name ">Molly Sullivan</span></a></td>
                    <td>8</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Digital Storytelling</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG250-2">spring1819-ENG250-2</a></td>
                    <td><a href="/people/agilman" title="Adam Gilman&thinsp;(Teacher)" ><span class="name ">Adam Gilman</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Drawing II</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ART301-1">spring1819-ART301-1</a></td>
                    <td><a href="/people/dconnor" title="David Connor&thinsp;(Teacher)" ><span class="name ">David Connor</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Dystopia/Utopia</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG301-1">spring1819-ENG301-1</a></td>
                    <td><a href="/people/rturkewitz" title="Rebecca Turkewitz&thinsp;(Teacher)" ><span class="name ">Rebecca Turkewitz</span></a></td>
                    <td>12</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG301-2">spring1819-ENG301-2</a></td>
                    <td><a href="/people/rturkewitz" title="Rebecca Turkewitz&thinsp;(Teacher)" ><span class="name ">Rebecca Turkewitz</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Early Civilization</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC100-5">spring1819-SOC100-5</a></td>
                    <td><a href="/people/awaters" title="Alex Waters&thinsp;(Teacher)" ><span class="name ">Alex Waters</span></a></td>
                    <td>24</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC100-6">spring1819-SOC100-6</a></td>
                    <td><a href="/people/awaters" title="Alex Waters&thinsp;(Teacher)" ><span class="name ">Alex Waters</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Electronics I</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ELE100-1">spring1819-ELE100-1</a></td>
                    <td><a href="/people/alukas" title="Alan Lukas&thinsp;(Teacher)" ><span class="name ">Alan Lukas</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ELE100-2">spring1819-ELE100-2</a></td>
                    <td><a href="/people/alukas" title="Alan Lukas&thinsp;(Teacher)" ><span class="name ">Alan Lukas</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Engineering II</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPE400-1">spring1819-EPE400-1</a></td>
                    <td><a href="/people/jamory" title="Jon Amory&thinsp;(Teacher)" ><span class="name ">Jon Amory</span></a></td>
                    <td>21</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPE400-2">spring1819-EPE400-2</a></td>
                    <td><a href="/people/jamory" title="Jon Amory&thinsp;(Teacher)" ><span class="name ">Jon Amory</span></a></td>
                    <td>8</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Advanced Algebra</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPM200-1">spring1819-EPM200-1</a></td>
                    <td><a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Advanced Precalculus</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPM350-1">spring1819-EPM350-1</a></td>
                    <td><a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Biology</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPS250-1">spring1819-EPS250-1</a></td>
                    <td><a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPS250-2">spring1819-EPS250-2</a></td>
                    <td><a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Calculus</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPM400-1">spring1819-EPM400-1</a></td>
                    <td><a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a></td>
                    <td>9</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Calculus-based Physics</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPS450-1">spring1819-EPS450-1</a></td>
                    <td><a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Computer Science II</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPC300-1">spring1819-EPC300-1</a></td>
                    <td><a href="/people/hlarsson" title="Halsted Larsson&thinsp;(Administrator)" ><span class="name ">Halsted Larsson</span></a></td>
                    <td>6</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Global Perspectives</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPH300-1">spring1819-EPH300-1</a></td>
                    <td><a href="/people/korr" title="Kelly Orr&thinsp;(Teacher)" ><span class="name ">Kelly Orr</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Intermediate Algebra</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPM150-1">spring1819-EPM150-1</a></td>
                    <td><a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Multivariate Calculus</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPM450-1">spring1819-EPM450-1</a></td>
                    <td><a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>11</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Physics</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPS400-1">spring1819-EPS400-1</a></td>
                    <td><a href="/people/tdeangelis" title="Tyler DeAngelis&thinsp;(Teacher)" ><span class="name ">Tyler DeAngelis</span></a></td>
                    <td>10</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Precalculus</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPM300-1">spring1819-EPM300-1</a></td>
                    <td><a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
EP Writing Intensive/EarthSci</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPS102-1">spring1819-EPS102-1</a></td>
                    <td><a href="/people/juliakosowsky" title="Julia Kosowsky&thinsp;(Teacher)" ><span class="name ">Julia Kosowsky</span></a></td>
                    <td>23</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-EPS102-2">spring1819-EPS102-2</a></td>
                    <td><a href="/people/juliakosowsky" title="Julia Kosowsky&thinsp;(Teacher)" ><span class="name ">Julia Kosowsky</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Flex Friday Project</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-101">spring1819-FLX900-101</a></td>
                    <td></td>
                    <td>34</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-191">spring1819-FLX900-191</a></td>
                    <td><a href="/people/blucy" title="Breanne Lucy&thinsp;(Teacher)" ><span class="name ">Breanne Lucy</span></a></td>
                    <td>2</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-201">spring1819-FLX900-201</a></td>
                    <td><a href="/people/sstutzman" title="Sunny Stutzman&thinsp;(Teacher)" ><span class="name ">Sunny Stutzman</span></a>, <a href="/people/dconnor" title="David Connor&thinsp;(Teacher)" ><span class="name ">David Connor</span></a></td>
                    <td>4</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-202">spring1819-FLX900-202</a></td>
                    <td><a href="/people/sstutzman" title="Sunny Stutzman&thinsp;(Teacher)" ><span class="name ">Sunny Stutzman</span></a>, <a href="/people/dconnor" title="David Connor&thinsp;(Teacher)" ><span class="name ">David Connor</span></a></td>
                    <td>0</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-251">spring1819-FLX900-251</a></td>
                    <td><a href="/people/jamory" title="Jon Amory&thinsp;(Teacher)" ><span class="name ">Jon Amory</span></a></td>
                    <td>31</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-252">spring1819-FLX900-252</a></td>
                    <td><a href="/people/jamory" title="Jon Amory&thinsp;(Teacher)" ><span class="name ">Jon Amory</span></a></td>
                    <td>5</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-301">spring1819-FLX900-301</a></td>
                    <td><a href="/people/hlarsson" title="Halsted Larsson&thinsp;(Administrator)" ><span class="name ">Halsted Larsson</span></a>, <a href="/people/jdaigle" title="Jenn Daigle&thinsp;(Teacher)" ><span class="name ">Jenn Daigle</span></a>, <a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>19</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-302">spring1819-FLX900-302</a></td>
                    <td><a href="/people/hlarsson" title="Halsted Larsson&thinsp;(Administrator)" ><span class="name ">Halsted Larsson</span></a>, <a href="/people/jdaigle" title="Jenn Daigle&thinsp;(Teacher)" ><span class="name ">Jenn Daigle</span></a>, <a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>19</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-303">spring1819-FLX900-303</a></td>
                    <td><a href="/people/hlarsson" title="Halsted Larsson&thinsp;(Administrator)" ><span class="name ">Halsted Larsson</span></a>, <a href="/people/jdaigle" title="Jenn Daigle&thinsp;(Teacher)" ><span class="name ">Jenn Daigle</span></a>, <a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-304">spring1819-FLX900-304</a></td>
                    <td><a href="/people/hlarsson" title="Halsted Larsson&thinsp;(Administrator)" ><span class="name ">Halsted Larsson</span></a>, <a href="/people/jdaigle" title="Jenn Daigle&thinsp;(Teacher)" ><span class="name ">Jenn Daigle</span></a>, <a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-351">spring1819-FLX900-351</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a>, <a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a>, <a href="/people/alukas" title="Alan Lukas&thinsp;(Teacher)" ><span class="name ">Alan Lukas</span></a>, <a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a>, <a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>27</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-352">spring1819-FLX900-352</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a>, <a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a>, <a href="/people/alukas" title="Alan Lukas&thinsp;(Teacher)" ><span class="name ">Alan Lukas</span></a>, <a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a>, <a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>0</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-353">spring1819-FLX900-353</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a>, <a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a>, <a href="/people/alukas" title="Alan Lukas&thinsp;(Teacher)" ><span class="name ">Alan Lukas</span></a>, <a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a>, <a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>34</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-354">spring1819-FLX900-354</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a>, <a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a>, <a href="/people/alukas" title="Alan Lukas&thinsp;(Teacher)" ><span class="name ">Alan Lukas</span></a>, <a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a>, <a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>0</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-355">spring1819-FLX900-355</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a>, <a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a>, <a href="/people/alukas" title="Alan Lukas&thinsp;(Teacher)" ><span class="name ">Alan Lukas</span></a>, <a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a>, <a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-356">spring1819-FLX900-356</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a>, <a href="/people/agalvin" title="Alaina Galvin&thinsp;(Teacher)" ><span class="name ">Alaina Galvin</span></a>, <a href="/people/alukas" title="Alan Lukas&thinsp;(Teacher)" ><span class="name ">Alan Lukas</span></a>, <a href="/people/pmoxhay" title="Peter Moxhay&thinsp;(Teacher)" ><span class="name ">Peter Moxhay</span></a>, <a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-401">spring1819-FLX900-401</a></td>
                    <td><a href="/people/mbarnes" title="Matthew Barnes&thinsp;(Teacher)" ><span class="name ">Matthew Barnes</span></a></td>
                    <td>17</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-451">spring1819-FLX900-451</a></td>
                    <td><a href="/people/agilman" title="Adam Gilman&thinsp;(Teacher)" ><span class="name ">Adam Gilman</span></a>, <a href="/people/jguerette" title="Jordan Guerette&thinsp;(Teacher)" ><span class="name ">Jordan Guerette</span></a>, <a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a>, <a href="/people/kvirmalo" title="Katelyn Virmalo&thinsp;(Teacher)" ><span class="name ">Katelyn Virmalo</span></a></td>
                    <td>39</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-452">spring1819-FLX900-452</a></td>
                    <td><a href="/people/agilman" title="Adam Gilman&thinsp;(Teacher)" ><span class="name ">Adam Gilman</span></a>, <a href="/people/jguerette" title="Jordan Guerette&thinsp;(Teacher)" ><span class="name ">Jordan Guerette</span></a>, <a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a>, <a href="/people/kvirmalo" title="Katelyn Virmalo&thinsp;(Teacher)" ><span class="name ">Katelyn Virmalo</span></a></td>
                    <td>33</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-453">spring1819-FLX900-453</a></td>
                    <td><a href="/people/agilman" title="Adam Gilman&thinsp;(Teacher)" ><span class="name ">Adam Gilman</span></a>, <a href="/people/jguerette" title="Jordan Guerette&thinsp;(Teacher)" ><span class="name ">Jordan Guerette</span></a>, <a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a>, <a href="/people/kvirmalo" title="Katelyn Virmalo&thinsp;(Teacher)" ><span class="name ">Katelyn Virmalo</span></a></td>
                    <td>41</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-501">spring1819-FLX900-501</a></td>
                    <td><a href="/people/korr" title="Kelly Orr&thinsp;(Teacher)" ><span class="name ">Kelly Orr</span></a>, <a href="/people/mlawrence" title="Megan Lawrence&thinsp;(Teacher)" ><span class="name ">Megan Lawrence</span></a>, <a href="/people/bolson" title="Brian Olson&thinsp;(Teacher)" ><span class="name ">Brian Olson</span></a>, <a href="/people/rturkewitz" title="Rebecca Turkewitz&thinsp;(Teacher)" ><span class="name ">Rebecca Turkewitz</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-502">spring1819-FLX900-502</a></td>
                    <td><a href="/people/korr" title="Kelly Orr&thinsp;(Teacher)" ><span class="name ">Kelly Orr</span></a>, <a href="/people/mlawrence" title="Megan Lawrence&thinsp;(Teacher)" ><span class="name ">Megan Lawrence</span></a>, <a href="/people/bolson" title="Brian Olson&thinsp;(Teacher)" ><span class="name ">Brian Olson</span></a>, <a href="/people/rturkewitz" title="Rebecca Turkewitz&thinsp;(Teacher)" ><span class="name ">Rebecca Turkewitz</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-503">spring1819-FLX900-503</a></td>
                    <td><a href="/people/mlawrence" title="Megan Lawrence&thinsp;(Teacher)" ><span class="name ">Megan Lawrence</span></a>, <a href="/people/bolson" title="Brian Olson&thinsp;(Teacher)" ><span class="name ">Brian Olson</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-701">spring1819-FLX900-701</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a>, <a href="/people/sbuhlman" title="Sarah Buhlman&thinsp;(Teacher)" ><span class="name ">Sarah Buhlman</span></a>, <a href="/people/jdoughty" title="Jonathan Doughty&thinsp;(Teacher)" ><span class="name ">Jonathan Doughty</span></a></td>
                    <td>34</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-702">spring1819-FLX900-702</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a>, <a href="/people/sbuhlman" title="Sarah Buhlman&thinsp;(Teacher)" ><span class="name ">Sarah Buhlman</span></a>, <a href="/people/jdoughty" title="Jonathan Doughty&thinsp;(Teacher)" ><span class="name ">Jonathan Doughty</span></a></td>
                    <td>0</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLX900-703">spring1819-FLX900-703</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a>, <a href="/people/sbuhlman" title="Sarah Buhlman&thinsp;(Teacher)" ><span class="name ">Sarah Buhlman</span></a>, <a href="/people/jdoughty" title="Jonathan Doughty&thinsp;(Teacher)" ><span class="name ">Jonathan Doughty</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>AM Session</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Focus Learning Lab</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLL100-3">spring1819-FLL100-3</a></td>
                    <td><a href="/people/bolson" title="Brian Olson&thinsp;(Teacher)" ><span class="name ">Brian Olson</span></a></td>
                    <td>3</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FLL100-4">spring1819-FLL100-4</a></td>
                    <td></td>
                    <td>6</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Forensics</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI402-2">spring1819-SCI402-2</a></td>
                    <td><a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>24</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Forest,Wetland,&amp;MarineEcology</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI301-4">spring1819-SCI301-4</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI301-5">spring1819-SCI301-5</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
French I</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FRE100-1">spring1819-FRE100-1</a></td>
                    <td><a href="/people/jguerette" title="Jordan Guerette&thinsp;(Teacher)" ><span class="name ">Jordan Guerette</span></a></td>
                    <td>18</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FRE100-2">spring1819-FRE100-2</a></td>
                    <td><a href="/people/jguerette" title="Jordan Guerette&thinsp;(Teacher)" ><span class="name ">Jordan Guerette</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
French II</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FRE200-1">spring1819-FRE200-1</a></td>
                    <td><a href="/people/jguerette" title="Jordan Guerette&thinsp;(Teacher)" ><span class="name ">Jordan Guerette</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FRE200-2">spring1819-FRE200-2</a></td>
                    <td><a href="/people/jguerette" title="Jordan Guerette&thinsp;(Teacher)" ><span class="name ">Jordan Guerette</span></a></td>
                    <td>9</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
French III/IV</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-FRE350-1">spring1819-FRE350-1</a></td>
                    <td><a href="/people/jguerette" title="Jordan Guerette&thinsp;(Teacher)" ><span class="name ">Jordan Guerette</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Functional Analysis</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT300-3">spring1819-MAT300-3</a></td>
                    <td><a href="/people/jdaigle" title="Jenn Daigle&thinsp;(Teacher)" ><span class="name ">Jenn Daigle</span></a>, <a href="/people/rmorrow" title="Rachael Morrow&thinsp;(Teacher)" ><span class="name ">Rachael Morrow</span></a>, <a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>21</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT300-6">spring1819-MAT300-6</a></td>
                    <td><a href="/people/jdaigle" title="Jenn Daigle&thinsp;(Teacher)" ><span class="name ">Jenn Daigle</span></a>, <a href="/people/rmorrow" title="Rachael Morrow&thinsp;(Teacher)" ><span class="name ">Rachael Morrow</span></a>, <a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT300-7">spring1819-MAT300-7</a></td>
                    <td><a href="/people/jdaigle" title="Jenn Daigle&thinsp;(Teacher)" ><span class="name ">Jenn Daigle</span></a>, <a href="/people/rmorrow" title="Rachael Morrow&thinsp;(Teacher)" ><span class="name ">Rachael Morrow</span></a>, <a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Global Perspectives</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC300-2">spring1819-SOC300-2</a></td>
                    <td><a href="/people/awaters" title="Alex Waters&thinsp;(Teacher)" ><span class="name ">Alex Waters</span></a></td>
                    <td>23</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC300-3">spring1819-SOC300-3</a></td>
                    <td><a href="/people/agilman" title="Adam Gilman&thinsp;(Teacher)" ><span class="name ">Adam Gilman</span></a></td>
                    <td>24</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC300-4">spring1819-SOC300-4</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a>, <a href="/people/awaters" title="Alex Waters&thinsp;(Teacher)" ><span class="name ">Alex Waters</span></a></td>
                    <td>21</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC300-5">spring1819-SOC300-5</a></td>
                    <td><a href="/people/agilman" title="Adam Gilman&thinsp;(Teacher)" ><span class="name ">Adam Gilman</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Graphic Design I</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/COURSE_SECTION-034">COURSE_SECTION-034</a></td>
                    <td><a href="/people/mbarnes" title="Matthew Barnes&thinsp;(Teacher)" ><span class="name ">Matthew Barnes</span></a></td>
                    <td>1</td>
                    <td>Room 226 (Art)</td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Graphic Design II</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ART302-1">spring1819-ART302-1</a></td>
                    <td><a href="/people/mbarnes" title="Matthew Barnes&thinsp;(Teacher)" ><span class="name ">Matthew Barnes</span></a></td>
                    <td>4</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Guitar Lab</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MUS103-1">spring1819-MUS103-1</a></td>
                    <td><a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a></td>
                    <td>9</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Illustration</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ART204-1">spring1819-ART204-1</a></td>
                    <td><a href="/people/mbarnes" title="Matthew Barnes&thinsp;(Teacher)" ><span class="name ">Matthew Barnes</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Immunology</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI302-2">spring1819-SCI302-2</a></td>
                    <td><a href="/people/tdeangelis" title="Tyler DeAngelis&thinsp;(Teacher)" ><span class="name ">Tyler DeAngelis</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI302-3">spring1819-SCI302-3</a></td>
                    <td><a href="/people/tdeangelis" title="Tyler DeAngelis&thinsp;(Teacher)" ><span class="name ">Tyler DeAngelis</span></a></td>
                    <td>13</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Independent Study</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/COURSE_SECTION-031">COURSE_SECTION-031</a></td>
                    <td><a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
            
                <tr>
                    <td><a href="/sections/COURSE_SECTION-032">COURSE_SECTION-032</a></td>
                    <td><a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
            
                <tr>
                    <td><a href="/sections/COURSE_SECTION-033">COURSE_SECTION-033</a></td>
                    <td><a href="/people/asample" title="Allison Sample&thinsp;(Teacher)" ><span class="name ">Allison Sample</span></a></td>
                    <td>11</td>
                    <td></td>
                    <td></td>
                </tr>
            
                <tr>
                    <td><a href="/sections/COURSE_SECTION-035">COURSE_SECTION-035</a></td>
                    <td><a href="/people/mlawrence" title="Megan Lawrence&thinsp;(Teacher)" ><span class="name ">Megan Lawrence</span></a></td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
            
                <tr>
                    <td><a href="/sections/COURSE_SECTION-036">COURSE_SECTION-036</a></td>
                    <td><a href="/people/mbarnes" title="Matthew Barnes&thinsp;(Teacher)" ><span class="name ">Matthew Barnes</span></a></td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Intermediate Algebra</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT150-2">spring1819-MAT150-2</a></td>
                    <td><a href="/people/jdaigle" title="Jenn Daigle&thinsp;(Teacher)" ><span class="name ">Jenn Daigle</span></a>, <a href="/people/avickerson" title="Amanda Vickerson&thinsp;(Teacher)" ><span class="name ">Amanda Vickerson</span></a></td>
                    <td>9</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Intro to Computer Science</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-COS100-2">spring1819-COS100-2</a></td>
                    <td><a href="/people/prawson" title="Pamela Rawson&thinsp;(Administrator)" ><span class="name ">Pamela Rawson</span></a></td>
                    <td>19</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Introduction to GIS</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-GIS100-3">spring1819-GIS100-3</a></td>
                    <td><a href="/people/tdeangelis" title="Tyler DeAngelis&thinsp;(Teacher)" ><span class="name ">Tyler DeAngelis</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Life Science</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI200-2">spring1819-SCI200-2</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a></td>
                    <td>21</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI200-3">spring1819-SCI200-3</a></td>
                    <td><a href="/people/sfeldman" title="Sam Feldman&thinsp;(Teacher)" ><span class="name ">Sam Feldman</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Luthiery</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-DES301-1">spring1819-DES301-1</a></td>
                    <td><a href="/people/sstutzman" title="Sunny Stutzman&thinsp;(Teacher)" ><span class="name ">Sunny Stutzman</span></a></td>
                    <td>7</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Mandarin I</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAN100-1">spring1819-MAN100-1</a></td>
                    <td><a href="/people/eli" title="Enyue Li&thinsp;(Teacher)" ><span class="name ">Enyue Li</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAN100-2">spring1819-MAN100-2</a></td>
                    <td><a href="/people/eli" title="Enyue Li&thinsp;(Teacher)" ><span class="name ">Enyue Li</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Mandarin II</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAN200-1">spring1819-MAN200-1</a></td>
                    <td><a href="/people/eli" title="Enyue Li&thinsp;(Teacher)" ><span class="name ">Enyue Li</span></a></td>
                    <td>25</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Mandarin III</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAN300-1">spring1819-MAN300-1</a></td>
                    <td><a href="/people/eli" title="Enyue Li&thinsp;(Teacher)" ><span class="name ">Enyue Li</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Math Reasoning</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/MAT125-001">MAT125-001</a></td>
                    <td><a href="/people/avickerson" title="Amanda Vickerson&thinsp;(Teacher)" ><span class="name ">Amanda Vickerson</span></a></td>
                    <td>3</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT125-1">spring1819-MAT125-1</a></td>
                    <td><a href="/people/avickerson" title="Amanda Vickerson&thinsp;(Teacher)" ><span class="name ">Amanda Vickerson</span></a></td>
                    <td>4</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Model UN</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SOC353-1">spring1819-SOC353-1</a></td>
                    <td><a href="/people/rturkewitz" title="Rebecca Turkewitz&thinsp;(Teacher)" ><span class="name ">Rebecca Turkewitz</span></a></td>
                    <td>41</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Multicultural Lit</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG302-1">spring1819-ENG302-1</a></td>
                    <td><a href="/people/kvirmalo" title="Katelyn Virmalo&thinsp;(Teacher)" ><span class="name ">Katelyn Virmalo</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG302-2">spring1819-ENG302-2</a></td>
                    <td><a href="/people/kvirmalo" title="Katelyn Virmalo&thinsp;(Teacher)" ><span class="name ">Katelyn Virmalo</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Music Comp &amp; Tech</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MUS104-1">spring1819-MUS104-1</a></td>
                    <td><a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a></td>
                    <td>18</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Nuclear Chemistry &amp; EMagnetism</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI352-1">spring1819-SCI352-1</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a></td>
                    <td>19</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Oceanography</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI353-1">spring1819-SCI353-1</a></td>
                    <td><a href="/people/jdoughty" title="Jonathan Doughty&thinsp;(Teacher)" ><span class="name ">Jonathan Doughty</span></a></td>
                    <td>24</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI353-2">spring1819-SCI353-2</a></td>
                    <td><a href="/people/jdoughty" title="Jonathan Doughty&thinsp;(Teacher)" ><span class="name ">Jonathan Doughty</span></a></td>
                    <td>23</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Physical Science</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI250-3">spring1819-SCI250-3</a></td>
                    <td><a href="/people/jdoughty" title="Jonathan Doughty&thinsp;(Teacher)" ><span class="name ">Jonathan Doughty</span></a></td>
                    <td>18</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SCI250-4">spring1819-SCI250-4</a></td>
                    <td><a href="/people/jdoughty" title="Jonathan Doughty&thinsp;(Teacher)" ><span class="name ">Jonathan Doughty</span></a></td>
                    <td>24</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Precalculus (Functions)</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-MAT401-2">spring1819-MAT401-2</a></td>
                    <td><a href="/people/gyock" title="Gretchen Yock&thinsp;(Teacher)" ><span class="name ">Gretchen Yock</span></a></td>
                    <td>18</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Printmaking</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ART304-1">spring1819-ART304-1</a></td>
                    <td><a href="/people/dconnor" title="David Connor&thinsp;(Teacher)" ><span class="name ">David Connor</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ART304-2">spring1819-ART304-2</a></td>
                    <td><a href="/people/dconnor" title="David Connor&thinsp;(Teacher)" ><span class="name ">David Connor</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Programming I</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-COS200-1">spring1819-COS200-1</a></td>
                    <td><a href="/people/hlarsson" title="Halsted Larsson&thinsp;(Administrator)" ><span class="name ">Halsted Larsson</span></a></td>
                    <td>8</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Science, Tech, &amp; Ethics</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG401-3">spring1819-ENG401-3</a></td>
                    <td><a href="/people/rturkewitz" title="Rebecca Turkewitz&thinsp;(Teacher)" ><span class="name ">Rebecca Turkewitz</span></a></td>
                    <td>14</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Short Stories</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG300-1">spring1819-ENG300-1</a></td>
                    <td><a href="/people/kvirmalo" title="Katelyn Virmalo&thinsp;(Teacher)" ><span class="name ">Katelyn Virmalo</span></a></td>
                    <td>20</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG300-2">spring1819-ENG300-2</a></td>
                    <td><a href="/people/kvirmalo" title="Katelyn Virmalo&thinsp;(Teacher)" ><span class="name ">Katelyn Virmalo</span></a></td>
                    <td>10</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Society, Power, and Innovation</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-ENG100-6">spring1819-ENG100-6</a></td>
                    <td><a href="/people/blucy" title="Breanne Lucy&thinsp;(Teacher)" ><span class="name ">Breanne Lucy</span></a></td>
                    <td>19</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Spanish I</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SPA100-1">spring1819-SPA100-1</a></td>
                    <td><a href="/people/sbuhlman" title="Sarah Buhlman&thinsp;(Teacher)" ><span class="name ">Sarah Buhlman</span></a>, <a href="/people/mlawrence" title="Megan Lawrence&thinsp;(Teacher)" ><span class="name ">Megan Lawrence</span></a></td>
                    <td>24</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Spanish II</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SPA200-2">spring1819-SPA200-2</a></td>
                    <td><a href="/people/sbuhlman" title="Sarah Buhlman&thinsp;(Teacher)" ><span class="name ">Sarah Buhlman</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Spanish III/IV</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SPA350-1">spring1819-SPA350-1</a></td>
                    <td><a href="/people/mlawrence" title="Megan Lawrence&thinsp;(Teacher)" ><span class="name ">Megan Lawrence</span></a></td>
                    <td>19</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SPA350-2">spring1819-SPA350-2</a></td>
                    <td><a href="/people/mlawrence" title="Megan Lawrence&thinsp;(Teacher)" ><span class="name ">Megan Lawrence</span></a></td>
                    <td>11</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Summit</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SUM500-21">spring1819-SUM500-21</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a>, <a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SUM500-22">spring1819-SUM500-22</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a>, <a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a></td>
                    <td>12</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SUM500-23">spring1819-SUM500-23</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a>, <a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SUM500-24">spring1819-SUM500-24</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a>, <a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a></td>
                    <td>18</td>
                    <td></td>
                    <td>D</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-SUM500-25">spring1819-SUM500-25</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a>, <a href="/people/dlevasseur" title="Dustin Levasseur&thinsp;(Teacher)" ><span class="name ">Dustin Levasseur</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Theatre: Performance</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-THE201-1">spring1819-THE201-1</a></td>
                    <td><a href="/people/drawson" title="David Rawson&thinsp;(Teacher)" ><span class="name ">David Rawson</span></a></td>
                    <td>10</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Wellness I</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-WEL100-2">spring1819-WEL100-2</a></td>
                    <td><a href="/people/sbuhlman" title="Sarah Buhlman&thinsp;(Teacher)" ><span class="name ">Sarah Buhlman</span></a></td>
                    <td>22</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-WEL100-4">spring1819-WEL100-4</a></td>
                    <td><a href="/people/emarcus" title="Erica Marcus&thinsp;(Teacher)" ><span class="name ">Erica Marcus</span></a></td>
                    <td>19</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Wellness II</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-WEL200-2">spring1819-WEL200-2</a></td>
                    <td><a href="/people/sbuhlman" title="Sarah Buhlman&thinsp;(Teacher)" ><span class="name ">Sarah Buhlman</span></a></td>
                    <td>23</td>
                    <td></td>
                    <td>E</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Woodworking</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-DES201-2">spring1819-DES201-2</a></td>
                    <td><a href="/people/dconnor" title="David Connor&thinsp;(Teacher)" ><span class="name ">David Connor</span></a></td>
                    <td>16</td>
                    <td></td>
                    <td>A</td>
                </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-DES201-3">spring1819-DES201-3</a></td>
                    <td><a href="/people/sstutzman" title="Sunny Stutzman&thinsp;(Teacher)" ><span class="name ">Sunny Stutzman</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>B</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Yoga and Mindfulness I</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-WEL205-2">spring1819-WEL205-2</a></td>
                    <td><a href="/people/emarcus" title="Erica Marcus&thinsp;(Teacher)" ><span class="name ">Erica Marcus</span></a></td>
                    <td>15</td>
                    <td></td>
                    <td>C</td>
                </tr>
            
        
            <tr>
                <th colspan="5">
Yoga and Mindfulness II</th>
            </tr>
            
                <tr>
                    <td><a href="/sections/spring1819-WEL305-1">spring1819-WEL305-1</a></td>
                    <td><a href="/people/emarcus" title="Erica Marcus&thinsp;(Teacher)" ><span class="name ">Erica Marcus</span></a></td>
                    <td>18</td>
                    <td></td>
                    <td>A</td>
                </tr>    
        </tbody>
    </table>
	</div>
</div>

<?php include'otherphp/footer.php';?>