<?php
/**
 * @uses        Wrapper class to APC
 * @author      Richard Castera
 * @link        http://www.richardcastera.com/projects/code/php5-session-class
 * @see         http://www.php.net/manual/en/book.apc.php
 * @license     GNU LESSER GENERAL Public LICENSE
 */

class static ApcCache {
	
	public function __construct() {}
	public function __destruct() {}

	/**
   * @uses		Retrieves cached information from APC's data store.
   * @param	  None.
   * @return  Array.
   */
	public function cacheInfo() {
		return apc_cache_info();
	}

	/**
   * @uses		Checks if APC key exists.
   * @param	  String $key - A string, or an array of strings, that contain keys.
   * @return  Variant - Returns TRUE if the key exists, otherwise FALSE Or if an array was passed to keys, then an array is returned that contains all existing keys, or an empty array if none exist.
   */
	public function cacheExists($key) {
		return apc_exists($key);
	}

	/**
   * @uses		Cache a variable in the data store.
   * @param	  String $key - Store the variable using this name. keys are cache-unique, so storing a second value with the same key will overwrite the original value.
   * @param	  String $data - The variable to store.
   * @param	  String $ttl - Time To Live; store var in the cache for ttl seconds. After the ttl has passed, the stored variable will be expunged 
   *												from the cache (on the next request). If no ttl is supplied (or if the ttl is 0), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.). 
   * @return  Boolean - Returns TRUE on success or FALSE on failure.
   */
	public function cacheStore($key, $data, $ttl = 0) {
		return apc_store($key, $data, $ttl);
	}

	/**
   * @uses		Checks if APC key exists.
   * @param	  String $key - The key used to store the value (with apc_store()). If an array is passed then each element is fetched and returned.
   * @return  Boolean - The stored variable or array of variables on success; FALSE on failure.
   */
	public function cacheFetch($key) {
		return apc_fetch($key);
	}

	/**
   * @uses		Removes a stored variable from the cache.
   * @param	  String $key - The key used to store the value (with apc_store()).
   * @return  Boolean - Returns TRUE on success or FALSE on failure.
   */
	public function cacheDelete($key) {
		return apc_delete($key);
	}

	/**
   * @uses		Clears the APC cache.
   * @param	  None.
   * @return  Boolean - Returns TRUE on success or FALSE on failure.
   */
	public function cacheClear() {
		return apc_clear_cache();
	}

}