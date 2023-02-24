<?php

require_once ('./Smarty/libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->caching = true;

$smarty->cache_lifetime = 120;


// caching
$smarty->setCaching(true);

if(!$smarty->isCached('index.tpl')){
    $smarty->assign('name', 'Name1');
    $smarty->assign('address', 'Address');
}



$smarty->template_dir = './templates';

$smarty->compile_dir = './templates_c';

?>