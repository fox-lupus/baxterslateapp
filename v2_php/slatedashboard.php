<?php include('otherphp/header.php'); ?>

<div class="mainContent slatedashboard">

	<div class="pageTitle">My Dashboard</div>

	<div class="container_left">

		<!--<div class="section">
			<div class="title">Courses</div>-->

			<div class="iconFrame">

			<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

			<script>
		
				$(function(){
					$('.accordion .title').click(function(){
						var parent = $(this).parent();
						var body = $('.body', parent);
						if(body.css('display') == 'none') body.slideDown(250);
						else body.slideUp(250);
					})
				})	
			</script>

			<div class="accordion">
		
				<div class="item">
					<div class="title">Courses</div>
					<div class="body">Advisory 9</div>
					<div class="body">Flex Friday Project</div>
					<div class="body">Guitar Lab</div>
					<div class="body">Pre Calculus</div>
					<div class="body">Advanced Algebra</div>
					<div class="body">Wellness I</div>
					<div class="body">Electronics II</div>
				</div>

				<div class="item">
					<div class="title">Tools</div>
					<div class="body">Competency Dashboard</div>
					<div class="body">Task Dashboard</div>
				
				</div>
				
				<div class="item">
					<div class="title">Name</div>
					<div class="body">My Profile</div>
					<div class="body">Edit Profile</div>
					<div class="body">My Drafts</div>
					<div class="body">Log Out</div>

				</div>
				
				<!--<a href="https://baxter.slatepowered.net/sections/spring1819-ADV009-1" class="dashboardLink">
					
					<div class="default_icon"></div>

					Advisory 9
				</a>

				<a href="https://baxter.slatepowered.net/sections/spring1819-FLX900-304" class="dashboardLink">
					<div class="default_icon"></div>
					Flex Friday Project
				</a>

				<a href="https://baxter.slatepowered.net/sections/spring1819-SCI250-3" class="dashboardLink">
					<div class="default_icon"></div>
					Physical Science
				</a>

				<a href="https://baxter.slatepowered.net/sections/spring1819-MAT200-4" class="dashboardLink">
					<div class="default_icon"></div>
					Advanced Algebra
				</a>

				<a href="https://baxter.slatepowered.net/sections/spring1819-COS100-2" class="dashboardLink">
					<div class="default_icon"></div>
					Intro to Computer Science
				</a>

				<a href="https://baxter.slatepowered.net/sections/spring1819-ENG202-1" class="dashboardLink">
					<div class="default_icon"></div>
					Coming of Age
				</a>

				<a href="https://baxter.slatepowered.net/sections/spring1819-SPA350-1" class="dashboardLink">
					<div class="default_icon"></div>
					Spanish III/IV
				</a>

				<div style="clear: both"></div>
				

			</div>
		</div>

		<div class="section">
			<div class="title">Tools</div>
			<a href ="https://baxter.slatepowered.net/cbl/dashboards/demonstrations/student#me" class="dashboardLink">
				<img src="img/2nd.png">
				Competency Dashboard
			</a>
			<a href ="https://baxter.slatepowered.net/cbl/dashboards/tasks/student#me/all" class="dashboardLink">
				<img src="img/2nd.png">
				Task Dashboard
			</a>

			<div style="clear: both"></div>

			<div class="body"></div>
		</div>

		<div class="section">
			<div class="title">Name</div>
			<a href ="https://baxter.slatepowered.net/people/curtisruel" class="dashboardLink">
				<img src="img/3rd.png">
				My Profile
			</a>
			<a href ="https://baxter.slatepowered.net/profile" class="dashboardLink">
				<img src="img/4th.png">
				Edit Profile
			</a>
			<a href ="https://baxter.slatepowered.net/drafts" class="dashboardLink">
				<img src="img/5th.png">
				My Drafts
			</a>
			<a href ="https://baxter.slatepowered.net/dashboard" class="dashboardLink">
				<img src="img/5th.png">
				Log Out
			</a>-->

			<div style="clear: both"></div>

			<div class="body"></div>
			
		</div>
	</div>

	<div class="container_right">
		<div class="section">
			<div class="title">Calendar</div>
			<div class="body">No future events scheduled</div>
			<a href="coursesectionsdirectory.php">Browse Catalog</a>	
		</div>
	</div>	

</div>