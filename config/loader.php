<?php
 
$loader = new \Phalcon\Loader();
 
$loader->registerNamespaces(array(
    'App\Frontend' => __DIR__ . '/../apps/Frontend/',
));
 
$loader->register();
 
?>
