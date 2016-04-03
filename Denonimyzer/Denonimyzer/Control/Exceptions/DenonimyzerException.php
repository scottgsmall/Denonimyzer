<?php

namespace Denonimyzer\Control\Exceptions;

use Basis\Control\Exceptions\BasisException;

/**
 *
 * @author scottsmall
 *        
 */
class DenonimyzerException extends BasisException {

	/**
	 *
	 * @see \Exception
	 *
	 */
	public function __construct( $message = null, $code = null, $previous = null ) {

		parent::__construct( $message = null, $code = null, $previous = null );
	}

}

?>