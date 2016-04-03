<?php

namespace Denonimyzer\Control\Activation;

use Basis\Control\Activation\AbstractActivator;

/**
 * Class responsible for activating/deactivating plugin.       
 */
class DenonimyzerActivator extends AbstractActivator {

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Basis\Control\Activation\AbstractActivator::get_activatable_classes()
	 *
	 */
	protected function get_activatable_classes() {

	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Basis\Control\Activation\AbstractActivator::deactivate_plugin()
	 *
	 */
	protected function deactivate_plugin() {

	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Basis\Control\Activation\AbstractActivator::get_prerequisite_plugins()
	 *
	 */
	protected function get_prerequisite_plugins() {

		return array( 'Basis' => 'Basis/basis.php', 'Infusionsoft API Plugin' => 'infusionsoft-api/infusionsoft-api.php' );
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Basis\Control\Activation\AbstractActivator::activate_plugin()
	 *
	 */
	protected function activate_plugin() {

	}
	
	/**
	 * Protected constructor for singleton class.
	 */
	protected function __construct() {
		// nothing to do here
	}

}

?>