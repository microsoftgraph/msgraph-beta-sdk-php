<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePrincipalCreationPolicy File
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
* ServicePrincipalCreationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServicePrincipalCreationPolicy extends PolicyBase
{
    /**
    * Gets the isBuiltIn
    *
    * @return bool|null The isBuiltIn
    */
    public function getIsBuiltIn()
    {
        if (array_key_exists("isBuiltIn", $this->_propDict)) {
            return $this->_propDict["isBuiltIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isBuiltIn
    *
    * @param bool $val The isBuiltIn
    *
    * @return ServicePrincipalCreationPolicy
    */
    public function setIsBuiltIn($val)
    {
        $this->_propDict["isBuiltIn"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the excludes
     *
     * @return ServicePrincipalCreationConditionSet[]|null The excludes
     */
    public function getExcludes()
    {
        if (array_key_exists('excludes', $this->_propDict) && !is_null($this->_propDict['excludes'])) {
            $excludes = [];
            if (count($this->_propDict['excludes']) > 0 && is_a($this->_propDict['excludes'][0], 'ServicePrincipalCreationConditionSet')) {
                return $this->_propDict['excludes'];
            }
            foreach ($this->_propDict['excludes'] as $singleValue) {
                $excludes []= new ServicePrincipalCreationConditionSet($singleValue);
            }
            $this->_propDict['excludes'] = $excludes;
            return $this->_propDict['excludes'];
        }
        return null;
    }
    
    /** 
    * Sets the excludes
    *
    * @param ServicePrincipalCreationConditionSet[] $val The excludes
    *
    * @return ServicePrincipalCreationPolicy
    */
    public function setExcludes($val)
    {
        $this->_propDict["excludes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the includes
     *
     * @return ServicePrincipalCreationConditionSet[]|null The includes
     */
    public function getIncludes()
    {
        if (array_key_exists('includes', $this->_propDict) && !is_null($this->_propDict['includes'])) {
            $includes = [];
            if (count($this->_propDict['includes']) > 0 && is_a($this->_propDict['includes'][0], 'ServicePrincipalCreationConditionSet')) {
                return $this->_propDict['includes'];
            }
            foreach ($this->_propDict['includes'] as $singleValue) {
                $includes []= new ServicePrincipalCreationConditionSet($singleValue);
            }
            $this->_propDict['includes'] = $includes;
            return $this->_propDict['includes'];
        }
        return null;
    }
    
    /** 
    * Sets the includes
    *
    * @param ServicePrincipalCreationConditionSet[] $val The includes
    *
    * @return ServicePrincipalCreationPolicy
    */
    public function setIncludes($val)
    {
        $this->_propDict["includes"] = $val;
        return $this;
    }
    
}
