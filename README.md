ApcCache
=============

The Alternative PHP Cache ([APC](http://www.php.net/manual/en/book.apc.php)) is a free and open opcode cache for PHP.
Its goal is to provide a free, open, and robust framework for caching and optimizing PHP intermediate code. This class
is in simple form, an Abstraction to the APC Library.


## Setup ##

 Add a `composer.json` file to your project:

```javascript
{
  "require": {
      "rcastera/apc": "v1.0.0"
  }
}
```

Then provided you have [composer](http://getcomposer.org) installed, you can run the following command:

```bash
$ composer.phar install
```

That will fetch the library and its dependencies inside your vendor folder. Then you can add the following to your
.php files in order to use the library

```php
require 'vendor/autoload.php';
```

Then you need to `use` the relevant class, for example:

```php
use rcastera\Apc\ApcCache;
```

Example
-----------
```php
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
```


Contributing
------------

1. Fork it.
2. Create a branch (`git checkout -b my_branch`)
3. Commit your changes (`git commit -am "Added something"`)
4. Push to the branch (`git push origin my_branch`)
5. Create an [Issue][1] with a link to your branch
6. Enjoy a refreshing Coke and wait
