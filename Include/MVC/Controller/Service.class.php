<?php
/**
* 
*/

namespace WPPFW\MVC\Controller;

# imports
use WPPFW\MVC;

/**
* 
*/
class ServiceController extends Base {
	
	/**
	* put your comment there...
	* 
	* @param MVC\IMVCServiceManager $serviceManager
	* @param {MVC\IMVCServiceManager|MVC\MVCStructure} $structure
	* @param {MVC\IMVCServiceManager|MVC\MVCParams|MVC\MVCStructure} $target
	* @return {ServiceController|MVC\IMVCServiceManager|MVC\MVCParams|MVC\MVCStructure}
	*/
	public function __construct(MVC\IMVCServiceManager & $serviceManager, MVC\MVCStructure & $structure, MVC\MVCParams & $target) {
		# Unit intialization
		parent::__construct($serviceManager, $structure, $target);
	}
	
	/**
	* put your comment there...
	* 
	* @param mixed $result
	*/
	public function getResponder(& $result) {
		# Initialize
		$structure =& $this->getStructure();
		$target =& $this->getTarget();
		# Getting responder class components
		$responderClass[] = '';
		$responderClass[] = $structure->getRootNS()->getNamespace();
		$responderClass[] = $structure->getModule(); # Module(s) namespave
		$responderClass[] = $target->getModule();  # Module name
		$responderClass[] = $structure->getController(); # Controller(s) Namespace
		$responderClass[] = implode('', array($target->getFormat(), $structure->getControllerClassId(), 'Responder')); # Responder name
		# Responder class
		$responderClass = implode('\\', $viewClass);
		die($responderClass);
		# Creating Responder
		$responder = new $responderClass($result);
		# Returning Responder
		return $responder;
	}

} # End class
