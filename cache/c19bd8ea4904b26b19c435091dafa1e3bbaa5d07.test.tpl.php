<?php
/* Smarty version 4.3.0, created on 2023-02-24 05:38:23
  from 'C:\xampp\htdocs\Project\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f83f3fb18841_99395539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f434f604a1156fea8f990963db69513a01e5ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\test.tpl',
      1 => 1677213500,
      2 => 'file',
    ),
    'f877318ff8ea386c61e3be6a082342accc516538' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\header.tpl',
      1 => 1677139103,
      2 => 'file',
    ),
    'b22533037a06b907cebe109859f5db3fbd1b7327' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\footer.tpl',
      1 => 1677139227,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_63f83f3fb18841_99395539 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <title>Info from header file</title>
</head>

<body>
    
    <pre>
    Name: Rajat Sachan
    Address: Some filler &amp; text
    Date: Feb 24, 2023
    </pre>

        <select>
    <option value="1">name1</option>
<option value="2">name2</option>
<option value="3">name3</option>
<option value="4" selected="selected">name4</option>
<option value="5">name5</option>

    </select>

                <h3>name1</h3>
            <h3>name2</h3>
            <h3>name3</h3>
            <h3>name4</h3>
            <h3>name5</h3>
    
            <pre>
        name: name1 - Phone: 9999
        </pre>

            <pre>
        name: name2 - Phone: 9999
        </pre>

            <pre>
        name: name3 - Phone: 9999
        </pre>

            <pre>
        name: name4 - Phone: 9999
        </pre>

            <pre>
        name: name5 - Phone: 9999
        </pre>

    
<p>[{"name":"name1","phone":"9999"},{"name":"name2","phone":"9999"},{"name":"name3","phone":"9999"},{"name":"name4","phone":"9999"},{"name":"name5","phone":"9999"}]</p>


    


    

</body>

</html><?php }
}
