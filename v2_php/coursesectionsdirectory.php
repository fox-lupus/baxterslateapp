<?php include('otherphp/header.php'); ?>
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
		
		<table>

			<tr>
				<th>Code</th> 
				<th>Teachers</th> 
				<th>Students</th> 
				<th>Schedule</th>
			</tr>

			<tr>
				<td class="subhead">Advanced Algebra</td>
			</tr>

			<tr>
				<td><a href="">spring1819-MAT200-3</a></td>
				<td><a>2</a></td> 
				<td>3</td>
				<td>4</td>
			</tr>

			<tr>
				<td><a>1</a></td>
				<td><a>2</a></td> 
				<td>3</td>
				<td>4</td>
			</tr>

			<tr>
				<td><a>1</a></td>
				<td><a>2</a></td> 
				<td>3</td>
				<td>4</td>
			</tr>

			<tr>
				<td><a>1</a></td>
				<td><a>2</a></td> 
				<td>3</td>
				<td>4</td>
			</tr>

		</table>	
	</div>
</div>








	
<?php include'otherphp/footer.php';?>