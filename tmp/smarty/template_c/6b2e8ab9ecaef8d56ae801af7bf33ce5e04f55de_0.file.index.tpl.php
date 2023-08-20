<?php
/* Smarty version 4.3.2, created on 2023-08-20 17:12:25
  from 'C:\OSPanel\domains\myshop\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e21f49c4ae30_67628180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b2e8ab9ecaef8d56ae801af7bf33ce5e04f55de' => 
    array (
      0 => 'C:\\OSPanel\\domains\\myshop\\views\\default\\index.tpl',
      1 => 1692540741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../includes/head.tpl' => 1,
    'file:../includes/header.tpl' => 1,
    'file:../includes/sidebarMenu.tpl' => 1,
    'file:../includes/productCards.tpl' => 1,
    'file:../includes/footer.tpl' => 1,
  ),
),false)) {
function content_64e21f49c4ae30_67628180 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:../includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="wrapper">
        <?php $_smarty_tpl->_subTemplateRender("file:../includes/sidebarMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div id="content">
        <h5>Последние поступления</h5>
        <?php $_smarty_tpl->_subTemplateRender("file:../includes/productCards.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</html><?php }
}
