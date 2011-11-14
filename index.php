<?php
	error_reporting(E_ALL ^ E_STRICT);
	ini_set('display_errors', 'On');

	require('Class.ApcCache.php');

	$object = new stdClass;

	$object->name = 'Richard';
	$object->age = 34;

	//ApcCache::cacheStore('rich', 'is the man', 3600);
	ApcCache::cacheStore('rich', $object, 3600);


	$richard = ApcCache::cacheFetch('rich');

	echo $richard->name;

?>