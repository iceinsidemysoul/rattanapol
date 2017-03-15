<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- site-header -->
		<header class="site-header">
			<div class="row">
					<?php if (get_header_image()): ?>
					<div class="col-md-12"><img id="header-image" class="img-responsive" src="<?php header_image(); ?>"></div>
					<?php endif; ?>
			</div><!-- row-of-header_img -->
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>		
						</button>
					</div> <!-- navbar-header -->
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="http://localhost/wordpress">หน้าแรก</a></li>
							<li><a href="http://localhost/wordpress/%e0%b8%9b%e0%b8%a3%e0%b8%b0%e0%b8%a7%e0%b8%b1%e0%b8%95%e0%b8%b4%e0%b8%ab%e0%b8%99%e0%b9%88%e0%b8%a7%e0%b8%a2/">ประวัติหน่วย</a></li>
							<li><a href="http://localhost/wordpress/%e0%b8%97%e0%b8%b3%e0%b9%80%e0%b8%99%e0%b8%b5%e0%b8%a2%e0%b8%9a%e0%b8%ad%e0%b8%94%e0%b8%b5%e0%b8%95%e0%b8%9c%e0%b8%b9%e0%b9%89%e0%b8%9a%e0%b8%b1%e0%b8%87%e0%b8%84%e0%b8%b1%e0%b8%9a%e0%b8%9a%e0%b8%b1/">ทำเนียบอดีตผู้บังคับบัญชา</a></li>
							<li><a href="http://localhost/wordpress/ทำเนียบผู้บังคับบัญชา">ทำเนียบผู้บังคับบัญชา</a></li>
							<li><a href="http://localhost/wordpress/ภารกิจวิสัยทัศน์">ภารกิจ/วิสัยทัศน์</a></li>
							<li class="dropdown">
							  <a class="dropdown-toggle" data-toggle="dropdown" href="#">สถานที่เยี่ยมชมสักการะ <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="http://localhost/wordpress/พระพุทธชินราช/">พระพุทธชินราช</a></li>
								<li><a href="#">พระแม่เมรี</a></li>
								<li><a href="#">ศาลพระพรหม</a></li>
								<li><a href="#">หลวงปู่ทวด</a></li>
								<li><a href="#">ขุนพลแก้ว</a></li>
							  </ul>
						</ul>
					</div>
				</div>		
			</nav>
		</header><!-- site-header -->
	<div class="container">