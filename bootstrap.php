<?php

Autoloader::add_core_namespace('Less');

Autoloader::add_classes(array(
	'Less\\Asset'             => __DIR__.'/classes/asset.php',
	'Less\\Asset_Instance'    => __DIR__.'/classes/asset/instance.php',
	'Less\\Compiler_Node'    => __DIR__.'/classes/compiler/node.php',
	'Less\\Compiler_Lessphp'    => __DIR__.'/classes/compiler/lessphp.php',
));