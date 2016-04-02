<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Composer requirements
    |--------------------------------------------------------------------------
    |
    | These fields are required for the composer.json file. Any fields that
    | are specified on the command line will override the values provided
    | in this file.
    |
    */ 
	'vendor'	=> 'smarch',
	'name'		=> 'ballon',
	'author'	=> 'SmarchSoftware',
	'email'		=> 'packages@smarchsoftware.com',


    /*
    |--------------------------------------------------------------------------
    | Base Path.
    |--------------------------------------------------------------------------
    |
    | Where your package files should be stored. Relative to your base_path().
    |
    | i.e. a package called "My\Package" with a path of 'workbench' would
    | have all it's files in "<root>\workbench\my\package\src\"
    |
    */ 
	'path'		=> 'packages',


    /*
    |--------------------------------------------------------------------------
    | Make files
    |--------------------------------------------------------------------------
    |
    | These fields are required for the composer.json file. Any fields that
    | are specified on the command line will override the values provided
    | in this file.
    |
    */ 
	'config' => 'yes',
    'controller' => 'yes',
	'migration' => 'yes',
	'model' => 'yes',
	'routes' => 'yes',
	'facade' => 'no',
	'middleware' => 'no',
	'policy' => 'no',
	'requests' => 'no',
	'seed' => 'yes',
	'test' => 'no',


    /*
    |--------------------------------------------------------------------------
    | Database Table Fields
    |--------------------------------------------------------------------------
    |
    | These fields are required for the composer.json file. Any fields that
    | are specified on the command line will override the values provided
    | in this file.
    |
    */
	'table'		=> '',
	'pk'		=> 'id',
	'fields'	=> ''

];