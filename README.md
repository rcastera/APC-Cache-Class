ApcCache
=============

The Alternative PHP Cache (APC) is a free and open opcode cache for PHP. Its goal is to provide a
free, open, and robust framework for caching and optimizing PHP intermediate code. This class is in
simple form, an Abstraction to the APC Library.


Example
-----------
    <?php
    require 'vendor/autoload.php';

    use rcastera\Apc\ApcCache;

    // Create a new object with properties to store in cache.
    $object = new stdClass;
    $object->name = 'Richard';
    $object->age = 30;

    // Store the object in cache.
    ApcCache::store('rich', $object, 3600);

    // Now check if it exists and fetch it.
    if (ApcCache::exists('rich')) {
        $person = ApcCache::fetch('rich');
    }

    // Output the name property value.
    echo $person->name;

    // Delete this specific key in cache.
    ApcCache::delete('rich');

    // Delete all cache.
    ApcCache::clear();



Contributing
------------

1. Fork it.
2. Create a branch (`git checkout -b my_branch`)
3. Commit your changes (`git commit -am "Added something"`)
4. Push to the branch (`git push origin my_branch`)
5. Create an [Issue][1] with a link to your branch
6. Enjoy a refreshing Coke and wait
