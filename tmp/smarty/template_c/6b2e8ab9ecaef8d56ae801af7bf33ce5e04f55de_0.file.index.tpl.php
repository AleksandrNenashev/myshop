<?php
/* Smarty version 4.3.2, created on 2023-07-24 00:12:27
  from 'C:\OSPanel\domains\myshop\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64bd97bb647f89_82602155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b2e8ab9ecaef8d56ae801af7bf33ce5e04f55de' => 
    array (
      0 => 'C:\\OSPanel\\domains\\myshop\\views\\default\\index.tpl',
      1 => 1690146636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../includes/header.tpl' => 1,
    'file:../includes/sadebarMenu.tpl' => 1,
    'file:../includes/footer.tpl' => 1,
  ),
),false)) {
function content_64bd97bb647f89_82602155 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:../includes/sadebarMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"><?php echo '</script'; ?>
>
</html><?php }
}
