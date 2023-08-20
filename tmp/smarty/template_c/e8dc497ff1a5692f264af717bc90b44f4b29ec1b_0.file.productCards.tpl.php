<?php
/* Smarty version 4.3.2, created on 2023-08-13 23:19:30
  from 'C:\OSPanel\domains\myshop\views\includes\productCards.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d93ad277ca11_38589774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8dc497ff1a5692f264af717bc90b44f4b29ec1b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\myshop\\views\\includes\\productCards.tpl',
      1 => 1691957968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d93ad277ca11_38589774 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recProducts']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
            <div class="card" style="width: 12rem;">
                <img src="img/products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['image'];?>
" class="card-img-top" alt="...">
                <div class="card-body">
                    <h8 class="card-title"><?php echo $_smarty_tpl->tpl_vars['prod']->value['name_ru'];?>
</h8>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['prod']->value['description'];?>
</p>
                    <a href="/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
/" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
