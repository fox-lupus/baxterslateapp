<?php include('otherphp/header.php'); ?>
<style type="text/css">
	.container-header{
		margin-top: 50px;
		height: 120px;
		overflow: hidden;
		position: relative;
	}
	.container-header img {
		width: 100%;
		position: absolute;
	}
	.px-backgound{
		background: #fff;
		opacity: 0.8;
		height: 120px;
		position: absolute;
		width: 100%;
	}
	.link-container{
		display: flex;
		justify-content: center;
	}
</style>
<div class="container-header">
	<img src="img/header.jpg">
	<div class="px-backgound">
		
	</div>
	<div class="link-container">
		<div class="">link1 </div>
		<div class="">link2 </div>
	</div>
</div>

<?php include('otherphp/footer.php');?>