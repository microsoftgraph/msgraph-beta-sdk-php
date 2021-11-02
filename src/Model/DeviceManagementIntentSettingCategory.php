<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementIntentSettingCategory File
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
* DeviceManagementIntentSettingCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementIntentSettingCategory extends DeviceManagementSettingCategory
{

     /** 
     * Gets the settings
    * The settings this category contains
     *
     * @return DeviceManagementSettingInstance[]|null The settings
     */
    public function getSettings()
    {
        if (array_key_exists('settings', $this->_propDict) && !is_null($this->_propDict['settings'])) {
           $settings = [];
           if (count($this->_propDict['settings']) > 0 && is_a($this->_propDict['settings'][0], 'DeviceManagementSettingInstance')) {
              return $this->_propDict['settings'];
           }
           foreach ($this->_propDict['settings'] as $singleValue) {
              $settings []= new DeviceManagementSettingInstance($singleValue);
           }
           $this->_propDict['settings'] = $settings;
           return $this->_propDict['settings'];
        }
        return null;
    }
    
    /** 
    * Sets the settings
    * The settings this category contains
    *
    * @param DeviceManagementSettingInstance[] $val The settings
    *
    * @return DeviceManagementIntentSettingCategory
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
}
