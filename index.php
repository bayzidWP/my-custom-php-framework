<?php

declare(strict_types=1);

// init_set( 'display_errors', '1' );
// init_set( 'display_errors', 'On' );

$page = $_GET['page'];

require __DIR__ . "/{$page}.php";
