<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementCollectionSettingInstance File
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
* DeviceManagementCollectionSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementCollectionSettingInstance extends DeviceManagementSettingInstance
{

     /** 
     * Gets the value
    * The collection of values
     *
     * @return DeviceManagementSettingInstance[]|null The value
     */
    public function getValue()
    {
        if (array_key_exists('value', $this->_propDict) && !is_null($this->_propDict['value'])) {
           $value = [];
           if (count($this->_propDict['value']) > 0 && is_a($this->_propDict['value'][0], 'DeviceManagementSettingInstance')) {
              return $this->_propDict['value'];
           }
           foreach ($this->_propDict['value'] as $singleValue) {
              $value []= new DeviceManagementSettingInstance($singleValue);
           }
           $this->_propDict['value'] = $value;
           return $this->_propDict['value'];
        }
        return null;
    }
    
    /** 
    * Sets the value
    * The collection of values
    *
    * @param DeviceManagementSettingInstance[] $val The value
    *
    * @return DeviceManagementCollectionSettingInstance
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
    
}
