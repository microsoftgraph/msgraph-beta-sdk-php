<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeMappingSource File
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
* AttributeMappingSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeMappingSource extends Entity
{
    /**
    * Gets the expression
    *
    * @return string|null The expression
    */
    public function getExpression()
    {
        if (array_key_exists("expression", $this->_propDict)) {
            return $this->_propDict["expression"];
        } else {
            return null;
        }
    }

    /**
    * Sets the expression
    *
    * @param string $val The value of the expression
    *
    * @return AttributeMappingSource
    */
    public function setExpression($val)
    {
        $this->_propDict["expression"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return AttributeMappingSource
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the parameters
    *
    * @return StringKeyAttributeMappingSourceValuePair[]|null The parameters
    */
    public function getParameters()
    {
        if (array_key_exists("parameters", $this->_propDict) && !is_null($this->_propDict["parameters"])) {
       
            if (count($this->_propDict['parameters']) > 0 && is_a($this->_propDict['parameters'][0], 'StringKeyAttributeMappingSourceValuePair')) {
               return $this->_propDict['parameters'];
            }
            $parameters = [];
            foreach ($this->_propDict['parameters'] as $singleValue) {
               $parameters []= new StringKeyAttributeMappingSourceValuePair($singleValue);
            }
            $this->_propDict['parameters'] = $parameters;
            return $this->_propDict['parameters'];
            }
        return null;
    }

    /**
    * Sets the parameters
    *
    * @param StringKeyAttributeMappingSourceValuePair[] $val The value to assign to the parameters
    *
    * @return AttributeMappingSource The AttributeMappingSource
    */
    public function setParameters($val)
    {
        $this->_propDict["parameters"] = $val;
         return $this;
    }

    /**
    * Gets the type
    *
    * @return AttributeMappingSourceType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict) && !is_null($this->_propDict["type"])) {
     
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\AttributeMappingSourceType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new AttributeMappingSourceType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param AttributeMappingSourceType $val The value to assign to the type
    *
    * @return AttributeMappingSource The AttributeMappingSource
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
