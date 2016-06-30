<?php

// This is the database connection configuration.
return array(
	/*'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',*/
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=book_cat',
	'emulatePrepare' => true,
	'username' => 'bookcat',
	'password' => 'bookcat',
	'charset' => 'utf8',

);