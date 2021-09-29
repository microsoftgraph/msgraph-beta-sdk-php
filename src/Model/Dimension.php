<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Dimension File
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
* Dimension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Dimension extends Entity
{
    /**
    * Gets the code
    *
    * @return string|null The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the code
    *
    * @param string $val The code
    *
    * @return Dimension
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return Dimension
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict) && !is_null($this->_propDict["lastModifiedDateTime"])) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Dimension
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dimensionValues
     *
     * @return DimensionValue[]|null The dimensionValues
     */
    public function getDimensionValues()
    {
        if (array_key_exists('dimensionValues', $this->_propDict) && !is_null($this->_propDict['dimensionValues'])) {
            $dimensionValues = [];
            if (count($this->_propDict['dimensionValues']) > 0 && is_a($this->_propDict['dimensionValues'][0], 'DimensionValue')) {
                return $this->_propDict['dimensionValues'];
            }
            foreach ($this->_propDict['dimensionValues'] as $singleValue) {
                $dimensionValues []= new DimensionValue($singleValue);
            }
            $this->_propDict['dimensionValues'] = $dimensionValues;
            return $this->_propDict['dimensionValues'];
        }
        return null;
    }
    
    /** 
    * Sets the dimensionValues
    *
    * @param DimensionValue[] $val The dimensionValues
    *
    * @return Dimension
    */
    public function setDimensionValues($val)
    {
        $this->_propDict["dimensionValues"] = $val;
        return $this;
    }
    
}
