<?php

$service = require dirname ( __DIR__ ) . '/Nouvu/service.php';

$app = $service( 'userdata' );

$app -> repository -> set( 'app.system.directory.site', __DIR__ );

$app -> kernel -> send();
