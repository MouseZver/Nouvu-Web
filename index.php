<?php

$app = require dirname ( __DIR__ ) . '/Nouvu-Framework/service.php';

$app( 'userdata' ) -> kernel -> send();
