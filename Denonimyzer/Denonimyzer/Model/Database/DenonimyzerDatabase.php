<?php

namespace Denonimyzer\Model\Database;

use Basis\Model\Database\AbstractDatabase;

/**
 * Class responsible for persistent data related to anonymous user tracking.       
 */
class DenonimyzerDatabase extends AbstractDatabase {

	/**
	 * Create all database tables used by this plugin.
	 */
	public static function activate() {
	
		self::create_foo_table();
	}
	
	/**
	 * Delete all database tables used by this plugin.
	 */
	public static function deactivate() {
	
		self::drop_foo_table();
	}
	
	/**
	 * Protected constructor for singleton class.
	 */
	protected function __construct() {
		// nothing to do here
	}
	

}

?>