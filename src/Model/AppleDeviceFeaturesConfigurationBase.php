<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleDeviceFeaturesConfigurationBase File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AppleDeviceFeaturesConfigurationBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleDeviceFeaturesConfigurationBase extends DeviceConfiguration
{

     /** 
     * Gets the airPrintDestinations
    * An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
     *
     * @return AirPrintDestination[]|null The airPrintDestinations
     */
    public function getAirPrintDestinations()
    {
        if (array_key_exists('airPrintDestinations', $this->_propDict) && !is_null($this->_propDict['airPrintDestinations'])) {
           $airPrintDestinations = [];
           if (count($this->_propDict['airPrintDestinations']) > 0 && is_a($this->_propDict['airPrintDestinations'][0], 'AirPrintDestination')) {
              return $this->_propDict['airPrintDestinations'];
           }
           foreach ($this->_propDict['airPrintDestinations'] as $singleValue) {
              $airPrintDestinations []= new AirPrintDestination($singleValue);
           }
           $this->_propDict['airPrintDestinations'] = $airPrintDestinations;
           return $this->_propDict['airPrintDestinations'];
        }
        return null;
    }
    
    /** 
    * Sets the airPrintDestinations
    * An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
    *
    * @param AirPrintDestination[] $val The airPrintDestinations
    *
    * @return AppleDeviceFeaturesConfigurationBase
    */
    public function setAirPrintDestinations($val)
    {
        $this->_propDict["airPrintDestinations"] = $val;
        return $this;
    }
    
}
