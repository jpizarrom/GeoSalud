<?php
/**
 * 
 * EGMapLayer Class 
 * 
 * Applies different type of layers to the map
 *
 * @author Antonio Ramirez Cobos
 * @link www.ramirezcobos.com
 *
 * 
 * @copyright 
 * 
 * Copyright (c) 2010 Antonio Ramirez Cobos
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software 
 * and associated documentation files (the "Software"), to deal in the Software without restriction, 
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, 
 * subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial 
 * portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
 * LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
 * NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, 
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 */
class EGMapLayer extends EGMapBase{
	/**
	 * 
	 * Traffic layer
	 * @var string
	 */
	const TRAFFIC 	= 'google.maps.TrafficLayer';
	/**
	 * 
	 * Bicycling layer
	 * @var string
	 */
	const BICYCLING = 'google.maps.BicyclingLayer';
	/**
	 * 
	 * Panoramio layer
	 * @var string
	 */
	const PANORAMIO = 'google.maps.panoramio.PanoramioLayer';
	/**
	 * 
	 * Required Libraries array
	 * @var array
	 */
	protected $_libraries = array(
		self::TRAFFIC => '',
		self::BICYCLING => '',
		self::PANORAMIO => 'panoramio',
	);
	/**
	 * 
	 * Type of layer pointer
	 * @var string
	 */
	protected $_layer = self::TRAFFIC;
	/**
	 * 
	 * Class constructor
	 * @param string $type
	 */
	public function __construct( $type = self::TRAFFIC ){
		$this->setLayer( $type );
	}
	/**
	 * 
	 * Sets the type of layer
	 * @param string $type
	 */
	public function setLayer( $type ){
		if($type === self::TRAFFIC || $type === self::BICYCLING || $type === self::PANORAMIO )
			$this->_layer = $type;
	}
	/**
	 * 
	 * Returns required library name
	 */
	public function getLibraryName(){
		return $this->_libraries[$this->_layer];
	}
	/**
	 * 
	 * Returns javascript code
	 * @param string $map_js_name
	 */
	public function toJs($map_js_name = 'map'){
		
		$return  = 'var '.$this->getJsName().'=new '.$this->_layer.'();'.PHP_EOL;
		$return .= $this->getJsName().'.setMap('.$map_js_name.');'.PHP_EOL;
		
		return $return;
	}
	
}