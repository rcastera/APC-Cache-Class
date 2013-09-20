ApcCache
=============

The Alternative PHP Cache (APC) is a free and open opcode cache for PHP. Its goal is to provide a
free, open, and robust framework for caching and optimizing PHP intermediate code. This class is in
simple form, an Abstraction to the APC Library.


Examples
-----------
    //Include the class.
    require('Class.ApcCache.php');

    // Create a new object with properties.
    $object = new stdClass;
    $object->name = 'Richard';
    $object->age = 30;

    // Store the object in cache.
    ApcCache::cacheStore('rich', $object, 3600);

    // Now fetch it.
    $person = ApcCache::cacheFetch('rich');

    // Output the properties value.
    echo $person->name;

    // Output information currently in cache.
    print_r(Apc::cacheInfo());

    // Delete this specific key in cache.
    ApcCache::cacheDelete('rich');

    // Delete all cache.
    Apc::cacheClear();


Contributing
------------

1. Fork it.
2. Create a branch (`git checkout -b my_branch`)
3. Commit your changes (`git commit -am "Added something"`)
4. Push to the branch (`git push origin my_branch`)
5. Create an [Issue][1] with a link to your branch
6. Enjoy a refreshing Coke and wait
