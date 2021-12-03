<?php

$service = require dirname ( __DIR__ ) . '/Nouvu-Framework/service.php';

$app = $service( 'userdata' );

$app -> repository -> reset( 'app.system.directory.site', __DIR__ );

$app -> kernel -> send();
