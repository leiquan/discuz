<?php

require './source/class/class_core.php';
$discuz = & discuz_core::instance();
$discuz->cachelist = $cachelist;
$discuz->init();

include template('start');
?>
