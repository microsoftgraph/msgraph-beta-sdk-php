<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeMappingFunctionSchema File
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
* AttributeMappingFunctionSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeMappingFunctionSchema extends Entity
{

     /** 
     * Gets the parameters
    * Collection of function parameters.
     *
     * @return AttributeMappingParameterSchema[]|null The parameters
     */
    public function getParameters()
    {
        if (array_key_exists('parameters', $this->_propDict) && !is_null($this->_propDict['parameters'])) {
           $parameters = [];
           if (count($this->_propDict['parameters']) > 0 && is_a($this->_propDict['parameters'][0], 'AttributeMappingParameterSchema')) {
              return $this->_propDict['parameters'];
           }
           foreach ($this->_propDict['parameters'] as $singleValue) {
              $parameters []= new AttributeMappingParameterSchema($singleValue);
           }
           $this->_propDict['parameters'] = $parameters;
           return $this->_propDict['parameters'];
        }
        return null;
    }
    
    /** 
    * Sets the parameters
    * Collection of function parameters.
    *
    * @param AttributeMappingParameterSchema[] $val The parameters
    *
    * @return AttributeMappingFunctionSchema
    */
    public function setParameters($val)
    {
        $this->_propDict["parameters"] = $val;
        return $this;
    }
    
}
