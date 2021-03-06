<!DOCTYPE html>
<html>
<head>
	<title>Detail Admin - Tables showcase</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- bootstrap -->
	<link href="<?=WEB_VIEW_PATH?>/css/bootstrap/bootstrap.css" rel="stylesheet" />
	<link href="<?=WEB_VIEW_PATH?>/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
	<link href="<?=WEB_VIEW_PATH?>/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="<?=WEB_VIEW_PATH?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?=WEB_VIEW_PATH?>/css/elements.css" />
	<link rel="stylesheet" type="text/css" href="<?=WEB_VIEW_PATH?>/css/icons.css" />

	<!-- libraries -->
	<link href="<?=WEB_VIEW_PATH?>/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

	<!--[if lt IE 9]>
	<script src="<?=WEB_VIEW_PATH?>/js/googlecode.html5.js"></script>
	<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<!-- navbar -->
<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<a class="brand" href="index.html"><img src="<?=WEB_VIEW_PATH?>/image/logo.png" /></a>

		<ul class="nav pull-right">
			<li class="hidden-phone">
				<input class="search" type="text" />
			</li>
			<li class="notification-dropdown hidden-phone">
				<a href="#" class="trigger">
					<i class="icon-warning-sign"></i>
					<span class="count">8</span>
				</a>
				<div class="pop-dialog">
					<div class="pointer right">
						<div class="arrow"></div>
						<div class="arrow_border"></div>
					</div>
					<div class="body">
						<a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
						<div class="notifications">
							<h3>You have 6 new notifications</h3>
							<a href="#" class="item">
								<i class="icon-signin"></i> New user registration
								<span class="time"><i class="icon-time"></i> 13 min.</span>
							</a>
							<a href="#" class="item">
								<i class="icon-signin"></i> New user registration
								<span class="time"><i class="icon-time"></i> 18 min.</span>
							</a>
							<a href="#" class="item">
								<i class="icon-envelope-alt"></i> New message from Alejandra
								<span class="time"><i class="icon-time"></i> 28 min.</span>
							</a>
							<a href="#" class="item">
								<i class="icon-signin"></i> New user registration
								<span class="time"><i class="icon-time"></i> 49 min.</span>
							</a>
							<a href="#" class="item">
								<i class="icon-download-alt"></i> New order placed
								<span class="time"><i class="icon-time"></i> 1 day.</span>
							</a>
							<div class="footer">
								<a href="#" class="logout">View all notifications</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="notification-dropdown hidden-phone">
				<a href="#" class="trigger">
					<i class="icon-envelope-alt"></i>
				</a>
				<div class="pop-dialog">
					<div class="pointer right">
						<div class="arrow"></div>
						<div class="arrow_border"></div>
					</div>
					<div class="body">
						<a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
						<div class="messages">
							<a href="#" class="item">
								<img src="<?=WEB_VIEW_PATH?>/image/contact-img.png" class="display" />
								<div class="name">Alejandra Galván</div>
								<div class="msg">
									There are many variations of available, but the majority have suffered alterations.
								</div>
								<span class="time"><i class="icon-time"></i> 13 min.</span>
							</a>
							<a href="#" class="item">
								<img src="<?=WEB_VIEW_PATH?>/image/contact-img2.png" class="display" />
								<div class="name">Alejandra Galván</div>
								<div class="msg">
									There are many variations of available, have suffered alterations.
								</div>
								<span class="time"><i class="icon-time"></i> 26 min.</span>
							</a>
							<a href="#" class="item last">
								<img src="<?=WEB_VIEW_PATH?>/image/contact-img.png" class="display" />
								<div class="name">Alejandra Galván</div>
								<div class="msg">
									There are many variations of available, but the majority have suffered alterations.
								</div>
								<span class="time"><i class="icon-time"></i> 48 min.</span>
							</a>
							<div class="footer">
								<a href="#" class="logout">View all messages</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
					Your account
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="personal-info.html">Personal info</a></li>
					<li><a href="#">Account settings</a></li>
					<li><a href="#">Billing</a></li>
					<li><a href="#">Export your data</a></li>
					<li><a href="#">Send feedback</a></li>
				</ul>
			</li>
			<li class="settings hidden-phone">
				<a href="personal-info.html" role="button">
					<i class="icon-cog"></i>
				</a>
			</li>
			<li class="settings hidden-phone">
				<a href="signin.html" role="button">
					<i class="icon-share-alt"></i>
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- sidebar -->
<div id="sidebar-nav">
	<ul id="dashboard-menu">
		<li>
			<a href="index.html">
				<i class="icon-home"></i>
				<span>Home</span>
			</a>
		</li>
		<li>
			<a href="chart-showcase.html">
				<i class="icon-signal"></i>
				<span>Charts</span>
			</a>
		</li>
		<li>
			<a class="dropdown-toggle" href="#">
				<i class="icon-group"></i>
				<span>Users</span>
				<i class="icon-chevron-down"></i>
			</a>
			<ul class="submenu">
				<li><a href="user-list.html">User list</a></li>
				<li><a href="new-user.html">New user form</a></li>
				<li><a href="user-profile.html">User profile</a></li>
			</ul>
		</li>
		<li>
			<a class="dropdown-toggle" href="#">
				<i class="icon-edit"></i>
				<span>Forms</span>
				<i class="icon-chevron-down"></i>
			</a>
			<ul class="submenu">
				<li><a href="form-showcase.html">Form showcase</a></li>
				<li><a href="form-wizard.html">Form wizard</a></li>
			</ul>
		</li>
		<li>
			<a href="gallery.html">
				<i class="icon-picture"></i>
				<span>Gallery</span>
			</a>
		</li>
		<li>
			<a href="calendar.html">
				<i class="icon-calendar-empty"></i>
				<span>Calendar</span>
			</a>
		</li>
		<li class="active">
			<a href="tables.html">
				<div class="pointer">
					<div class="arrow"></div>
					<div class="arrow_border"></div>
				</div>
				<i class="icon-th-large"></i>
				<span>Tables</span>
			</a>
		</li>
		<li>
			<a class="dropdown-toggle ui-elements" href="#">
				<i class="icon-code-fork"></i>
				<span>UI Elements</span>
				<i class="icon-chevron-down"></i>
			</a>
			<ul class="submenu">
				<li><a href="ui-elements.html">UI Elements</a></li>
				<li><a href="icons.html">Icons</a></li>
			</ul>
		</li>
		<li>
			<a href="personal-info.html">
				<i class="icon-cog"></i>
				<span>My Info</span>
			</a>
		</li>
		<li>
			<a class="dropdown-toggle" href="#">
				<i class="icon-share-alt"></i>
				<span>Extras</span>
				<i class="icon-chevron-down"></i>
			</a>
			<ul class="submenu">
				<li><a href="code-editor.html">Code editor</a></li>
				<li><a href="grids.html">Grids</a></li>
				<li><a href="signin.html">Sign in</a></li>
				<li><a href="signup.html">Sign up</a></li>
			</ul>
		</li>
	</ul>
</div>
<!-- end sidebar -->
