<?php /* Smarty version Smarty-3.1.12, created on 2013-10-15 10:57:40
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/googleAnalytics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124098590525d0384f32c43-97757770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5379595ed121e7ce724724a2127c2fc5fc30aa66' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/googleAnalytics.tpl',
      1 => 1381827403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124098590525d0384f32c43-97757770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'metaDescripcion' => 0,
    'metaKeywords' => 0,
    'DOMINIO' => 0,
    'categoria' => 0,
    'articulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_525d038501aca9_80920021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525d038501aca9_80920021')) {function content_525d038501aca9_80920021($_smarty_tpl) {?><meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metaDescripcion']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['metaKeywords']->value;?>
" />       
<link rel="icon" type="image/png" href="plantillas/img/favicon.ico" />

<base href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
"/>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
"/>
<!--la ruta canonical hay que poner la ruta para que google lo lea mejor y solo tenga una opcion en vez de varias rutas con www sin etc...Esto ES SOLO PARA BUSCADORES
ej: href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
 -->
<!--<base href="http://www.dominio.com" />-->
<!--<link href="http://www.dominio.com/plantillas/css/css.css" type="text/css" rel="stylesheet"/>-->



		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Libs CSS -->
		

		<!-- Favicons -->
		<link rel="shortcut icon" href="plantillas/img/favicon.ico">
		<link rel="apple-touch-icon" href="plantillas/img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="plantillas/img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="plantillas/img/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="plantillas/img/apple-touch-icon-144x144.png">
        
        

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44654743-1', 'neweraenterprisesgroup.com');
  ga('send', 'pageview');

</script>

<?php }} ?>