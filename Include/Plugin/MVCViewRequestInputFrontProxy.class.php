<?php
/**
* 
*/

namespace WPPFW\Plugin;

# Imports
use \WPPFW\MVC;

/**
* 
*/
class MVCViewRequestInputFrontProxy extends ServiceFrontProxy {
	
	/**
	* put your comment there...
	* 
	* @param mixed $defParams
	* @param mixed $defNames
	* @param mixed $structure
	*/
	protected function createMVCObjects($defParams, $defNames, $structure) {
		# Initialize
		$plugin =& $this->getPlugin();
		$inputs =& $plugin->getInputs();
		$namespace =& $plugin->getNamespace();
		# Creating objects
		$params = new MVC\MVCViewParams(
			$defParams['module'], 
			$defParams['controller'], 
			$defParams['action'], 
			$defParams['format'],
			$defParams['view'],
			$defParams['layout']
			);
		$structure = new MVC\MVCViewStructure(
			$namespace,
			$structure['module'], 
			$structure['controller'],
			$structure['controllerClassId'],
			$structure['view'],
			$structure['viewClassId']
			);
		$names = new MVC\MVCViewParams(
			$defNames['module'], 
			$defNames['controller'],
			$defNames['action'],
			$defNames['format'],
			$defNames['view'],
			$defNames['layout']
			);
		# Reading inputs
		$inputsReader = new MVC\MVCViewRequestParamsRouter($namespace->getNamespace(), $inputs->get(), $names, $params);
		# Get target 
		$target = $inputsReader->getOutParams();
		# Send objects back
		$this->setMVCObjects($target, $names, $structure);
	}

}