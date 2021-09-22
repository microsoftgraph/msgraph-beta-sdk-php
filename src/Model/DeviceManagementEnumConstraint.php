<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementEnumConstraint File
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
* DeviceManagementEnumConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementEnumConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementEnumConstraint");
    }


    /**
    * Gets the values
    * List of valid values for this string
    *
    * @return DeviceManagementEnumValue[]|null The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict) && !is_null($this->_propDict["values"])) {
       
            if (count($this->_propDict['values']) > 0 && is_a($this->_propDict['values'][0], 'DeviceManagementEnumValue')) {
               return $this->_propDict['values'];
            }
            $values = [];
            foreach ($this->_propDict['values'] as $singleValue) {
               $values []= new DeviceManagementEnumValue($singleValue);
            }
            $this->_propDict['values'] = $values;
            return $this->_propDict['values'];
            }
        return null;
    }

    /**
    * Sets the values
    * List of valid values for this string
    *
    * @param DeviceManagementEnumValue[] $val The value to assign to the values
    *
    * @return DeviceManagementEnumConstraint The DeviceManagementEnumConstraint
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
         return $this;
    }
}
