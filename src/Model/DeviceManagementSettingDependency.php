<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingDependency File
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
* DeviceManagementSettingDependency class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingDependency extends Entity
{

    /**
    * Gets the constraints
    * Collection of constraints for the dependency setting value
    *
    * @return DeviceManagementConstraint[]|null The constraints
    */
    public function getConstraints()
    {
        if (array_key_exists("constraints", $this->_propDict) && !is_null($this->_propDict["constraints"])) {
       
            if (count($this->_propDict['constraints']) > 0 && is_a($this->_propDict['constraints'][0], 'DeviceManagementConstraint')) {
                return $this->_propDict['constraints'];
            }
            $constraints = [];
            foreach ($this->_propDict['constraints'] as $singleValue) {
                $constraints []= new DeviceManagementConstraint($singleValue);
            }
            $this->_propDict['constraints'] = $constraints;
            return $this->_propDict['constraints'];
            }
        return null;
    }

    /**
    * Sets the constraints
    * Collection of constraints for the dependency setting value
    *
    * @param DeviceManagementConstraint[] $val The value to assign to the constraints
    *
    * @return DeviceManagementSettingDependency The DeviceManagementSettingDependency
    */
    public function setConstraints($val)
    {
        $this->_propDict["constraints"] = $val;
         return $this;
    }
    /**
    * Gets the definitionId
    * The setting definition ID of the setting depended on
    *
    * @return string|null The definitionId
    */
    public function getDefinitionId()
    {
        if (array_key_exists("definitionId", $this->_propDict)) {
            return $this->_propDict["definitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the definitionId
    * The setting definition ID of the setting depended on
    *
    * @param string $val The value of the definitionId
    *
    * @return DeviceManagementSettingDependency
    */
    public function setDefinitionId($val)
    {
        $this->_propDict["definitionId"] = $val;
        return $this;
    }
}
