<?php /* Smarty version Smarty-3.1.12, created on 2013-12-03 12:39:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188361698529cb350a5fc80-07420838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bde0602c4d45641696ea075d8538d53bfbcae810' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/menu.tpl',
      1 => 1386070760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188361698529cb350a5fc80-07420838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529cb350a78d70_62600633',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529cb350a78d70_62600633')) {function content_529cb350a78d70_62600633($_smarty_tpl) {?>
	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="inicio" style="padding-top:10px;">
			<img src="plantillas/assets/img/logo.png" alt="logo" class="img-responsive" />
			</a>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="plantillas/assets/img/menu-toggler.png" alt="" />
			</a> 
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<li class="dropdown" id="header_notification_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
						data-close-others="true">
					<i class="fa fa-warning"></i>
					<span class="badge">6</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li>
							<p>You have 14 new notifications</p>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;">
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-success"><i class="fa fa-plus"></i></span>
									New user registered. 
									<span class="time">Just now</span>
									</a>
								</li>
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-danger"><i class="fa fa-bolt"></i></span>
									Server #12 overloaded. 
									<span class="time">15 mins</span>
									</a>
								</li>
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span>
									Server #2 not responding.
									<span class="time">22 mins</span>
									</a>
								</li>
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-info"><i class="fa fa-bullhorn"></i></span>
									Application error.
									<span class="time">40 mins</span>
									</a>
								</li>
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-danger"><i class="fa fa-bolt"></i></span>
									Database overloaded 68%. 
									<span class="time">2 hrs</span>
									</a>
								</li>
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-danger"><i class="fa fa-bolt"></i></span>
									2 user IP blocked.
									<span class="time">5 hrs</span>
									</a>
								</li>
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span>
									Storage Server #4 not responding.
									<span class="time">45 mins</span>
									</a>
								</li>
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-info"><i class="fa fa-bullhorn"></i></span>
									System Error.
									<span class="time">55 mins</span>
									</a>
								</li>
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-danger"><i class="fa fa-bolt"></i></span>
									Database overloaded 68%. 
									<span class="time">2 hrs</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="external">   
							<a href="#">See all notifications <i class="m-icon-swapright"></i></a>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="imagenes/imgTrabajadores/SusanaAnton.png"/>
					<span class="username">Susana Antón</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a></li>
						<li><a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a></li>
						<li><a href="inbox.html"><i class="fa fa-envelope"></i> My Inbox <span class="badge badge-danger">3</span></a></li>
						<li><a href="#"><i class="fa fa-tasks"></i> My Tasks <span class="badge badge-success">7</span></a></li>
						<li class="divider"></li>
						<li><a href="javascript:;" id="trigger_fullscreen"><i class="fa fa-move"></i> Full Screen</a></li>
						<li><a href="extra_lock.html"><i class="fa fa-lock"></i> Lock Screen</a></li>
						<li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
    <div class="clearfix"></div><?php }} ?>