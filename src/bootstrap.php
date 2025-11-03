<?php

declare( strict_types=1 );
// init_set( 'display_errors', '1' );

$page = $_GET['page'];

require dirname( __DIR__ ) . "/{$page}.php";
