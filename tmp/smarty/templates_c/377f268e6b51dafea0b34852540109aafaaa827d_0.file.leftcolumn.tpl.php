<?php
/* Smarty version 3.1.29, created on 2016-07-15 21:58:05
  from "D:\xampp\htdocs\myshop.local\views\default\leftcolumn.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5789404d571f05_46961697',
  'file_dependency' => 
  array (
    '377f268e6b51dafea0b34852540109aafaaa827d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\myshop.local\\views\\default\\leftcolumn.tpl',
      1 => 1468612684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5789404d571f05_46961697 ($_smarty_tpl) {
?>

<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        <?php
$_from = $_smarty_tpl->tpl_vars['rsCategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />

            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['children'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_child_1_saved_item = isset($_smarty_tpl->tpl_vars['child']) ? $_smarty_tpl->tpl_vars['child'] : false;
$_smarty_tpl->tpl_vars['child'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['child']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
$__foreach_child_1_saved_local_item = $_smarty_tpl->tpl_vars['child'];
?>
                    --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a><br />
                <?php
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_1_saved_local_item;
}
if ($__foreach_child_1_saved_item) {
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_1_saved_item;
}
?>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
    </div>
    <div class="menuCaption">Корзина</div>
    <a href="/cart/" title="Перейти в корзину">В корзине</a>
    <span id="cartCntItems">
        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {?>
            <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>

            <?php } else { ?> Пусто
        <?php }?>
    </span>
    <div class="dropcart">
        <a href="#" alt="Дропнуть корзину" id="dropCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" onclick="dropCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;">Дропнуть корзину</a>
    </div>
</div><?php }
}
