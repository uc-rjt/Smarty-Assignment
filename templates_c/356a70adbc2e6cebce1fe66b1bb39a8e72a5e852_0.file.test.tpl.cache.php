<?php
/* Smarty version 4.3.0, created on 2023-02-24 11:08:15
  from 'C:\xampp\htdocs\Project\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f88c8f21cb76_95582896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356a70adbc2e6cebce1fe66b1bb39a8e72a5e852' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\templates\\test.tpl',
      1 => 1677233292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63f88c8f21cb76_95582896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),4=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),5=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),6=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),7=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),8=>array('file'=>'C:\\xampp\\htdocs\\Project\\Smarty\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),));
$_smarty_tpl->compiled->nocache_hash = '122778895363f88c8f170319_97117527';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'configure.config', null, 0);
?>


<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'Info'), 0, false);
?>

<h1><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'variable');?>
</h1>
<h2><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'variable');?>
</h2>

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
    name: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 - Phone: <?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$__section_loopindex_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['names']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_loopindex_0_total = $__section_loopindex_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_loopindex'] = new Smarty_Variable(array());
if ($__section_loopindex_0_total !== 0) {
for ($__section_loopindex_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_loopindex']->value['index'] = 0; $__section_loopindex_0_iteration <= $__section_loopindex_0_total; $__section_loopindex_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_loopindex']->value['index']++){
?>
    <li><?php echo $_smarty_tpl->tpl_vars['names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_loopindex']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_loopindex']->value['index'] : null)];?>
</li>
<?php
}
}
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>

    <pre><li><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</li></pre>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<p><?php echo json_encode($_smarty_tpl->tpl_vars['users']->value);?>
</p>



<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=smarty">Click here to go to smarty page</a>

<h1><?php echo (defined('smarty_const') ? constant('smarty_const') : null);?>
</h1>

<h1>current dir: <?php echo dirname($_smarty_tpl->source->filepath);?>
<h1>



        <pre>
            address: <?php echo ($_smarty_tpl->tpl_vars['address']->value).(' concat this string');?>

        char count: <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['address']->value, $tmp);?>

        word count: <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['address']->value, $tmp);?>

        Date: <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>

        default: <?php echo (($tmp = $_smarty_tpl->tpl_vars['address']->value ?? null)===null||$tmp==='' ? "(none)" ?? null : $tmp);?>

        escape: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>


                Combining Modifiers: <?php echo smarty_modifier_spacify(mb_strtoupper((string) $_smarty_tpl->tpl_vars['address']->value ?? '', 'UTF-8'));?>


                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['appendname']) ? $_smarty_tpl->tpl_vars['appendname']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['first'] = 'fname';
$_smarty_tpl->_assignInScope('appendname', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['appendname']) ? $_smarty_tpl->tpl_vars['appendname']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['last'] = 'lname';
$_smarty_tpl->_assignInScope('appendname', $_tmp_array);?>The first name is <?php echo $_smarty_tpl->tpl_vars['appendname']->value['first'];?>
.The last name is <?php echo $_smarty_tpl->tpl_vars['appendname']->value['last'];?>
.<ul><?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?><li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li><?php }
}
?></ul><ul><?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?><li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li><?php }} else { ?>no iteration<?php }
?></ul><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myColors']->value, 'color');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>

    <?php if ($_smarty_tpl->tpl_vars['name']->value == 'rajat sachan') {?>
        access granted
    
    <?php } else { ?>
        access denied

        <?php }?>


        
        <?php echo smarty_function_counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>
<br />
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />

        
        <?php echo smarty_function_html_checkboxes(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'seperator'=>'<br/>'),$_smarty_tpl);?>


        <?php echo smarty_function_html_image(array('file'=>'https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png'),$_smarty_tpl);?>


                <?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>


        <?php echo smarty_function_html_select_time(array('use_24_hours'=>true),$_smarty_tpl);?>




    </pre>






<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
