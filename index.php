<?php

define('smarty_const', 'some constant');

require('./smartyHeader.php');

$msg = 'Hello from message';

$name = 'rajat sachan';

$address = 'Some filler & text';

$title = "Some title";

$smarty->assign('name',$name);

$smarty->assign('address', $address);

// arrays
$smarty->assign('id', array(1,2,3,4,5));
$smarty->assign('names', array('name1', 'name2','name3', 'name4', 'name5'));

$smarty->assign('users', array(
    array('name'=>'name1', 'phone'=>'9999'),
    array('name'=>'name2', 'phone'=>'9999'),
    array('name'=>'name3', 'phone'=>'9999'),
    array('name'=>'name4', 'phone'=>'9999'),
    array('name'=>'name5', 'phone'=>'9999'),
));

$smarty->assign('cust_ids', array(1000,1001,1002,1003));

$smarty->assign('cust_names', array('n1','n2', 'n3','n4'));

$smarty->assign('start', 10);
$smarty->assign('to', 5);

$arr = array('red', 'green', 'blue');
$smarty->assign('myColors', $arr);



$smarty->display('test.tpl')

?>