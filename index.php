<?php
	// Include the class.
	require('Class.ApcCache.php');

	// Create a new object with properties.
	$object = new stdClass;
	$object->name = 'Richard';
	$object->age = 30;

	// Store the object in cache.
	ApcCache::cacheStore('rich', $object, 3600);

	// Now check if it exists and fetch it.
	if (Apc::cacheExists('rich')) {
		$person = ApcCache::cacheFetch('rich');	
	}
	
	// Output the properties value.
	echo $person->name;

	// Output information currently in cache.
	print_r(Apc::cacheInfo());

	// Delete this specific key in cache.
	ApcCache::cacheDelete('rich');

	// Delete all cache.
	Apc::cacheClear();
