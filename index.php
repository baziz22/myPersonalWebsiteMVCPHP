<?php
// Show the details of error that could occurred and prevent Blank White Screen.
error_reporting(0);
ini_set( 'display_errors', 1 ); 
ini_set( 'display_startup_errors', 1 ); 
error_reporting( E_ALL );
require_once 'controllers/require.php';