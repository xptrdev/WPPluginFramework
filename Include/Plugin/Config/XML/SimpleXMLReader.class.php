<?php
/**
* 
*/

namespace WPPFW\Plugin\Config\XML;

# Imports
use WPPFW\HDT\XML\SimpleXMLReaderPrototype;

/**
* 
*/
class PluginSimpleXMLReaderPrototype extends SimpleXMLReaderPrototype {
	
	/**
	* put your comment there...
	* 
	*/
	public function getObjectArrayModel() {
		return array('params' => array());
	}
}
