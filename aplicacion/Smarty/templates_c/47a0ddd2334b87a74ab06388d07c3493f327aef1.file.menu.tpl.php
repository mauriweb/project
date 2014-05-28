<?php /* Smarty version Smarty-3.1.12, created on 2013-06-20 11:48:53
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55404973051b06e0b8fcc63-23108001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47a0ddd2334b87a74ab06388d07c3493f327aef1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/menu.tpl',
      1 => 1371721731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55404973051b06e0b8fcc63-23108001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b06e0b8fece5_56799732',
  'variables' => 
  array (
    'project' => 0,
    'studio' => 0,
    'service' => 0,
    'noticia' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b06e0b8fece5_56799732')) {function content_51b06e0b8fece5_56799732($_smarty_tpl) {?><header id="header" class="container clearfix">

	<a href="home" id="logo">
		<img src="plantillas/img/logo.png" alt="SmartStart">
	</a>

	<nav id="main-nav">
		
		<ul>
			<li <?php echo $_smarty_tpl->tpl_vars['project']->value;?>
>
				<a >Projects</a>
				<ul>
					<li><a href="products">Products</a></li>
					<li><a href="technological-products">Technological products</a></li>
                    <li><a href="transports">Transport</a></li>
                    <li><a href="graphics">Graphic</a></li>
                    <li><a href="installations">Installation</a></li>
                    
                    
				</ul>
			</li>
			<li <?php echo $_smarty_tpl->tpl_vars['studio']->value;?>
>
				<a >Studio</a>
				<ul>
					<li><a href="studio/about">About</a></li>
                    <li><a href="awars">Awards</a></li>
                    <li><a href="studio/press">Press</a></li>
                    <li><a href="exhibitions">Exhibitions</a></li>
                    <li><a href="studio/clients">Clients</a></li>
                    <li><a href="studio/dowload">Download</a></li>
				</ul>
			</li>
			<li <?php echo $_smarty_tpl->tpl_vars['service']->value;?>
>
				<a href="service">Services</a>
			</li>
            <li <?php echo $_smarty_tpl->tpl_vars['noticia']->value;?>
>
				<a href="news">News</a>
			</li>
			<li <?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
>
				<a href="contact">Contact</a>
			</li>
		</ul>

	</nav><!-- end #main-nav -->
	
</header><!-- end #header --><?php }} ?>