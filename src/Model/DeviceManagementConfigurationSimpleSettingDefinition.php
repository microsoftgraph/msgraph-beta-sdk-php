<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSimpleSettingDefinition File
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
* DeviceManagementConfigurationSimpleSettingDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSimpleSettingDefinition extends DeviceManagementConfigurationSettingDefinition
{
    /**
    * Gets the defaultValue
    * Default setting value for this setting
    *
    * @return DeviceManagementConfigurationSettingValue|null The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict) && !is_null($this->_propDict["defaultValue"])) {
            if (is_a($this->_propDict["defaultValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingValue")) {
                return $this->_propDict["defaultValue"];
            } else {
                $this->_propDict["defaultValue"] = new DeviceManagementConfigurationSettingValue($this->_propDict["defaultValue"]);
                return $this->_propDict["defaultValue"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultValue
    * Default setting value for this setting
    *
    * @param DeviceManagementConfigurationSettingValue $val The defaultValue
    *
    * @return DeviceManagementConfigurationSimpleSettingDefinition
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dependedOnBy
    * list of child settings that depend on this setting
     *
     * @return DeviceManagementConfigurationSettingDependedOnBy[]|null The dependedOnBy
     */
    public function getDependedOnBy()
    {
        if (array_key_exists('dependedOnBy', $this->_propDict) && !is_null($this->_propDict['dependedOnBy'])) {
           $dependedOnBy = [];
           if (count($this->_propDict['dependedOnBy']) > 0 && is_a($this->_propDict['dependedOnBy'][0], 'DeviceManagementConfigurationSettingDependedOnBy')) {
              return $this->_propDict['dependedOnBy'];
           }
           foreach ($this->_propDict['dependedOnBy'] as $singleValue) {
              $dependedOnBy []= new DeviceManagementConfigurationSettingDependedOnBy($singleValue);
           }
           $this->_propDict['dependedOnBy'] = $dependedOnBy;
           return $this->_propDict['dependedOnBy'];
        }
        return null;
    }
    
    /** 
    * Sets the dependedOnBy
    * list of child settings that depend on this setting
    *
    * @param DeviceManagementConfigurationSettingDependedOnBy[] $val The dependedOnBy
    *
    * @return DeviceManagementConfigurationSimpleSettingDefinition
    */
    public function setDependedOnBy($val)
    {
        $this->_propDict["dependedOnBy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dependentOn
    * list of parent settings this setting is dependent on
     *
     * @return DeviceManagementConfigurationDependentOn[]|null The dependentOn
     */
    public function getDependentOn()
    {
        if (array_key_exists('dependentOn', $this->_propDict) && !is_null($this->_propDict['dependentOn'])) {
           $dependentOn = [];
           if (count($this->_propDict['dependentOn']) > 0 && is_a($this->_propDict['dependentOn'][0], 'DeviceManagementConfigurationDependentOn')) {
              return $this->_propDict['dependentOn'];
           }
           foreach ($this->_propDict['dependentOn'] as $singleValue) {
              $dependentOn []= new DeviceManagementConfigurationDependentOn($singleValue);
           }
           $this->_propDict['dependentOn'] = $dependentOn;
           return $this->_propDict['dependentOn'];
        }
        return null;
    }
    
    /** 
    * Sets the dependentOn
    * list of parent settings this setting is dependent on
    *
    * @param DeviceManagementConfigurationDependentOn[] $val The dependentOn
    *
    * @return DeviceManagementConfigurationSimpleSettingDefinition
    */
    public function setDependentOn($val)
    {
        $this->_propDict["dependentOn"] = $val;
        return $this;
    }
    
    /**
    * Gets the valueDefinition
    * Definition of the value for this setting
    *
    * @return DeviceManagementConfigurationSettingValueDefinition|null The valueDefinition
    */
    public function getValueDefinition()
    {
        if (array_key_exists("valueDefinition", $this->_propDict) && !is_null($this->_propDict["valueDefinition"])) {
            if (is_a($this->_propDict["valueDefinition"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingValueDefinition")) {
                return $this->_propDict["valueDefinition"];
            } else {
                $this->_propDict["valueDefinition"] = new DeviceManagementConfigurationSettingValueDefinition($this->_propDict["valueDefinition"]);
                return $this->_propDict["valueDefinition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the valueDefinition
    * Definition of the value for this setting
    *
    * @param DeviceManagementConfigurationSettingValueDefinition $val The valueDefinition
    *
    * @return DeviceManagementConfigurationSimpleSettingDefinition
    */
    public function setValueDefinition($val)
    {
        $this->_propDict["valueDefinition"] = $val;
        return $this;
    }
    
}
