<?php
/* Smarty version 4.3.0, created on 2023-02-24 05:38:23
  from 'C:\xampp\htdocs\Project\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f83f3fa4a448_29109941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f434f604a1156fea8f990963db69513a01e5ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\test.tpl',
      1 => 1677213500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63f83f3fa4a448_29109941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->compiled->nocache_hash = '153377209563f83f3fa037d5_97184037';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'Info'), 0, false);
?>

    
    <pre>
    Name: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>

    Address: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>

    Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>

    </pre>

        <select>
    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['names']->value,'selected'=>"4"),$_smarty_tpl);?>

    </select>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
        <h3><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <pre>
        name: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 - Phone: <?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>

        </pre>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<p><?php echo json_encode($_smarty_tpl->tpl_vars['users']->value);?>
</p>


    


    
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
