<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnmanagedDeviceDiscoveryTask File
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
* UnmanagedDeviceDiscoveryTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnmanagedDeviceDiscoveryTask extends DeviceAppManagementTask
{

     /** 
     * Gets the unmanagedDevices
    * Unmanaged devices discovered in the network.
     *
     * @return UnmanagedDevice[]|null The unmanagedDevices
     */
    public function getUnmanagedDevices()
    {
        if (array_key_exists('unmanagedDevices', $this->_propDict) && !is_null($this->_propDict['unmanagedDevices'])) {
           $unmanagedDevices = [];
           if (count($this->_propDict['unmanagedDevices']) > 0 && is_a($this->_propDict['unmanagedDevices'][0], 'UnmanagedDevice')) {
              return $this->_propDict['unmanagedDevices'];
           }
           foreach ($this->_propDict['unmanagedDevices'] as $singleValue) {
              $unmanagedDevices []= new UnmanagedDevice($singleValue);
           }
           $this->_propDict['unmanagedDevices'] = $unmanagedDevices;
           return $this->_propDict['unmanagedDevices'];
        }
        return null;
    }
    
    /** 
    * Sets the unmanagedDevices
    * Unmanaged devices discovered in the network.
    *
    * @param UnmanagedDevice[] $val The unmanagedDevices
    *
    * @return UnmanagedDeviceDiscoveryTask
    */
    public function setUnmanagedDevices($val)
    {
        $this->_propDict["unmanagedDevices"] = $val;
        return $this;
    }
    
}
