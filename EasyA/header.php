<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>EasyA Theme</title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="root">
			<div class="layouts-main">
				<div class="page-home">
					<div class="header">
						<div class="header-public inverse false false">
							<div class="col-logo">
								<a href="#">
									<div class="logo"></div>
								</a>
								<button class="btn toggle-menu">
								<i class="fa fa-bars" aria-hidden="true">
								
								</i>
								</button>
							</div>
						
								
									<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
								
					
							<div class="col-buttons">
								<div class="header-buttons">
									<a class="btn btn-default" href="#">Log In</a>
									<a class="btn btn-default" href="#">Sign up</a>
								</div>
							</div>
						</div>
					</div>
					
					