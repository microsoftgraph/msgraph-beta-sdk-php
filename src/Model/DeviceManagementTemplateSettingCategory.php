<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTemplateSettingCategory File
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
* DeviceManagementTemplateSettingCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTemplateSettingCategory extends DeviceManagementSettingCategory
{

     /** 
     * Gets the recommendedSettings
    * The settings this category contains
     *
     * @return DeviceManagementSettingInstance[]|null The recommendedSettings
     */
    public function getRecommendedSettings()
    {
        if (array_key_exists('recommendedSettings', $this->_propDict) && !is_null($this->_propDict['recommendedSettings'])) {
           $recommendedSettings = [];
           if (count($this->_propDict['recommendedSettings']) > 0 && is_a($this->_propDict['recommendedSettings'][0], 'DeviceManagementSettingInstance')) {
              return $this->_propDict['recommendedSettings'];
           }
           foreach ($this->_propDict['recommendedSettings'] as $singleValue) {
              $recommendedSettings []= new DeviceManagementSettingInstance($singleValue);
           }
           $this->_propDict['recommendedSettings'] = $recommendedSettings;
           return $this->_propDict['recommendedSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the recommendedSettings
    * The settings this category contains
    *
    * @param DeviceManagementSettingInstance[] $val The recommendedSettings
    *
    * @return DeviceManagementTemplateSettingCategory
    */
    public function setRecommendedSettings($val)
    {
        $this->_propDict["recommendedSettings"] = $val;
        return $this;
    }
    
}
