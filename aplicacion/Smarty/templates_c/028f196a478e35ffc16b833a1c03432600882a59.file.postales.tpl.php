<?php /* Smarty version Smarty-3.1.12, created on 2012-10-26 11:10:17
         compiled from "..\templates\postales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2803150811aa46f9536-19822697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '028f196a478e35ffc16b833a1c03432600882a59' => 
    array (
      0 => '..\\templates\\postales.tpl',
      1 => 1351242327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2803150811aa46f9536-19822697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50811aa47f4341_78294103',
  'variables' => 
  array (
    'exCat' => 0,
    'eCat' => 0,
    'nRep' => 0,
    'exito' => 0,
    'mCat' => 0,
    'v' => 0,
    'eFImagen' => 0,
    'eFNombre' => 0,
    'contenido' => 0,
    'errorImagen' => 0,
    'errorNombre' => 0,
    'thumb' => 0,
    'eFCategoria' => 0,
    'errorCategoria' => 0,
    'eFDescripcion' => 0,
    'eFResumen' => 0,
    'errorTexto1' => 0,
    'errorTexto' => 0,
    'cambiarNombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50811aa47f4341_78294103')) {function content_50811aa47f4341_78294103($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style type="text/css">
.error {
	font-size: 12px;
	color: #F00;
}
.errorF{
	background-color: #F78181;
	border: thin solid #F00;
	color: #FFF;
}
.errorR{
	background-color:#F6CECE;
	border: thin solid #F00;
	color: #FFF;
}
</style>

</head>

<body>
<?php echo $_smarty_tpl->tpl_vars['exCat']->value;?>

<?php echo $_smarty_tpl->tpl_vars['eCat']->value;?>

<?php echo $_smarty_tpl->tpl_vars['nRep']->value;?>

<?php echo $_smarty_tpl->tpl_vars['exito']->value;?>

<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="background-color:#F60; color:#FFF; font-size:30px;">ALTA POSTALES</td>
  </tr>
  <tr>
    <td style="font-size:16px; color:#F90; text-decoration:underline;">Alta Categorias</td>
  </tr>
  <tr>
    <td>
    
<form action="altaDePostales.php" method="post">   
    <table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Nueva categoria:</td>
    <td><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre" /></td>
    <td colspan="2">Categorias:</td>
    <td colspan="2" rowspan="2"><label for="categorias"></label>
      <select name="categorias" size="6" id="categorias">
       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mCat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['v']->value['nombre'];?>
</option> <!--el id es de la tabla y nombre de la tabla que pertenezca-->

        <?php } ?>
      </select></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="enviar1" id="enviar1" value="Enviar" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</table>

 </form>    
    
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-size:16px; color:#F90; text-decoration:underline;">Alta postales</td>
  </tr>
  <tr>
    <td>
<form action="altaDePostales.php" method="post" enctype="multipart/form-data">     
    <table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Postal:</td>
    <td><label for="Examinar"></label>
      <input type="file" name="Examinar" id="Examinar" <?php echo $_smarty_tpl->tpl_vars['eFImagen']->value;?>
 /></td>
  </tr>
  <tr>
    <td>Nombre:</td>
    <td><input <?php echo $_smarty_tpl->tpl_vars['eFNombre']->value;?>
 type="text" name="nombre2" id="nombre2" value="<?php echo $_smarty_tpl->tpl_vars['contenido']->value['nombre2'];?>
"/></td>
    <td>&nbsp;</td>
    <td><?php echo $_smarty_tpl->tpl_vars['errorImagen']->value;?>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $_smarty_tpl->tpl_vars['errorNombre']->value;?>
</td>
    <td><input name="thumb" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['contenido']->value['thumb'];?>
" /><input name="fotoG" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['contenido']->value['fotoG'];?>
" /></td>
    <td rowspan="3"><?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
</td>
  </tr>
  <tr>
    <td>Categoria:</td>
    <td><label for="categoria"></label>
      <select <?php echo $_smarty_tpl->tpl_vars['eFCategoria']->value;?>
 name="categoria" id="categoria" value="<?php echo $_smarty_tpl->tpl_vars['contenido']->value['categoria'];?>
">
      <option selected="selected" value="0">selecciona</option>
       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mCat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
       	<?php if ($_smarty_tpl->tpl_vars['contenido']->value['categoria']==$_smarty_tpl->tpl_vars['v']->value['id']){?><!--el id es de la tabla y categoria pertenece a el id del selected, eq significa =  -->
        
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['v']->value['nombre'];?>
</option><!--el id es de la tabla y nombre de la tabla que pertenezca-->
        
        <?php }else{ ?>
        
         <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['nombre'];?>
</option>
        <?php }?>
         
        <?php } ?>
      </select></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $_smarty_tpl->tpl_vars['errorCategoria']->value;?>
</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>Descripción:</td>
    <td rowspan="2"><label for="descripcion"></label>
      <textarea <?php echo $_smarty_tpl->tpl_vars['eFDescripcion']->value;?>
 name="descripcion" id="descripcion" cols="45" rows="5" ><?php echo $_smarty_tpl->tpl_vars['contenido']->value['descripcion'];?>
</textarea></td>
    <td>Resumen:</td>
    <td rowspan="2"><label for="resumen"></label>
      <textarea  <?php echo $_smarty_tpl->tpl_vars['eFResumen']->value;?>
 name="resumen" id="resumen" cols="45" rows="5"><?php echo $_smarty_tpl->tpl_vars['contenido']->value['resumen'];?>
</textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $_smarty_tpl->tpl_vars['errorTexto1']->value;?>
</td>
    <td>&nbsp;</td>
    <td><?php echo $_smarty_tpl->tpl_vars['errorTexto']->value;?>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="enviar" id="enviar" value="enviar" /></td>
    <td>&nbsp;</td>
    <td><input name="cambiarNombre" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cambiarNombre']->value;?>
<?php echo $_smarty_tpl->tpl_vars['contenido']->value['cambiarNombre'];?>
" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  </form>
    </td>
  </tr>
  <tr>
    <td style="background-color:#F60;">&nbsp;</td>
  </tr>
</table>



</body>
</html>
<?php }} ?>