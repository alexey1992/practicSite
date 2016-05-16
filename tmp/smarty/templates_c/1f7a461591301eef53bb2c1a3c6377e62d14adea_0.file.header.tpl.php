<?php
/* Smarty version 3.1.30-dev/68, created on 2016-05-16 03:49:36
  from "C:\OpenServer\domains\mySiteTest\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/68',
  'unifunc' => 'content_57391920dcf001_09368362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f7a461591301eef53bb2c1a3c6377e62d14adea' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mySiteTest\\views\\default\\header.tpl',
      1 => 1463359725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_57391920dcf001_09368362 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
   <head>
            <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css"/>
   </head>
   <body>
     <div id="header">
        <h1>my shop -интернет магазин</h1>
     </div>
     
     
     <?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          
<div id = "centerColumn">

    centerColumn<?php }
}
