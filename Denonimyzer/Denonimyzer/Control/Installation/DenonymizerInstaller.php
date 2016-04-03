<?php

namespace Denonimyzer\Control\Installation;

use Basis\Control\Installation\AbstractInstaller;

/**
 * Class responsible for installing/deinstalling plugin.       
 */
class DenonymizerInstaller extends AbstractInstaller {

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Basis\Control\Installation\AbstractInstaller::uninstall_plugin()
	 *
	 */
	protected function uninstall_plugin() {

	}
	
	/**
	 * Protected constructor for singleton class.
	 */
	protected function __construct() {
		// nothing to do here
	}

}

?>