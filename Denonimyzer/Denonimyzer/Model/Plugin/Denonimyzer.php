<?php

namespace Denonimyzer\Model\Plugin;

use Basis\Model\Plugin\AbstractPlugin;
use Denonimyzer\Model\Database\DenonimyzerDatabase;

/**
 * Main plugin class for Denonimyzer plugin.
 */
class Denonimyzer extends AbstractPlugin {

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Basis\Model\Plugin\AbstractPlugin::get_plugin_components()
	 *
	 */
	protected function get_plugin_components() {

		return array( 
				// Control components
				
				// Model components
				DenonimyzerDatabase::get_instance(), 
		
				// View components
		
				);
	}

	/**
	 * Protected constructor for singleton class.
	 */
	protected function __construct() {
		// nothing to do here
	}

}

?>