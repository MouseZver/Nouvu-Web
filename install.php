<?php

$service = require dirname ( __DIR__ ) . '/Nouvu/service.php';

$app = $service( 'userdata' );

$app -> repository -> set( 'app.system.directory.site', __DIR__ );

$app -> repository -> add( 'config.database:mysql', [
	'dbname'	=> 'nouvu',
	'username'	=> 'root',
	'password'	=> '',
	'host'		=> '127.0.0.1',
] );

$migrate = new \Nouvu\Resources\System\Migrate( $app );

$migrate -> run();
