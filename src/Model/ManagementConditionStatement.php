<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementConditionStatement File
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
* ManagementConditionStatement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementConditionStatement extends Entity
{

     /** 
     * Gets the applicablePlatforms
    * This is calculated from looking the management conditions associated to the management condition statement and finding the intersection of applicable platforms.
     *
     * @return DevicePlatformType[]|null The applicablePlatforms
     */
    public function getApplicablePlatforms()
    {
        if (array_key_exists('applicablePlatforms', $this->_propDict) && !is_null($this->_propDict['applicablePlatforms'])) {
            $applicablePlatforms = [];
            if (count($this->_propDict['applicablePlatforms']) > 0 && is_a($this->_propDict['applicablePlatforms'][0], 'DevicePlatformType')) {
                return $this->_propDict['applicablePlatforms'];
            }
            foreach ($this->_propDict['applicablePlatforms'] as $singleValue) {
                $applicablePlatforms []= new DevicePlatformType($singleValue);
            }
            $this->_propDict['applicablePlatforms'] = $applicablePlatforms;
            return $this->_propDict['applicablePlatforms'];
        }
        return null;
    }
    
    /** 
    * Sets the applicablePlatforms
    * This is calculated from looking the management conditions associated to the management condition statement and finding the intersection of applicable platforms.
    *
    * @param DevicePlatformType[] $val The applicablePlatforms
    *
    * @return ManagementConditionStatement
    */
    public function setApplicablePlatforms($val)
    {
        $this->_propDict["applicablePlatforms"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The time the management condition statement was created. Generated service side.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The time the management condition statement was created. Generated service side.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ManagementConditionStatement
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The admin defined description of the management condition statement.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The admin defined description of the management condition statement.
    *
    * @param string $val The description
    *
    * @return ManagementConditionStatement
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The admin defined name of the management condition statement.
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
    * The admin defined name of the management condition statement.
    *
    * @param string $val The displayName
    *
    * @return ManagementConditionStatement
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the eTag
    * ETag of the management condition statement. Updated service side.
    *
    * @return string|null The eTag
    */
    public function getETag()
    {
        if (array_key_exists("eTag", $this->_propDict)) {
            return $this->_propDict["eTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the eTag
    * ETag of the management condition statement. Updated service side.
    *
    * @param string $val The eTag
    *
    * @return ManagementConditionStatement
    */
    public function setETag($val)
    {
        $this->_propDict["eTag"] = $val;
        return $this;
    }
    
    /**
    * Gets the expression
    * The management condition statement expression used to evaluate if a management condition statement was activated/deactivated.
    *
    * @return ManagementConditionExpression|null The expression
    */
    public function getExpression()
    {
        if (array_key_exists("expression", $this->_propDict) && !is_null($this->_propDict["expression"])) {
            if (is_a($this->_propDict["expression"], "\Beta\Microsoft\Graph\Model\ManagementConditionExpression")) {
                return $this->_propDict["expression"];
            } else {
                $this->_propDict["expression"] = new ManagementConditionExpression($this->_propDict["expression"]);
                return $this->_propDict["expression"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expression
    * The management condition statement expression used to evaluate if a management condition statement was activated/deactivated.
    *
    * @param ManagementConditionExpression $val The expression
    *
    * @return ManagementConditionStatement
    */
    public function setExpression($val)
    {
        $this->_propDict["expression"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    * The time the management condition statement was last modified. Updated service side.
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict) && !is_null($this->_propDict["modifiedDateTime"])) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    * The time the management condition statement was last modified. Updated service side.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return ManagementConditionStatement
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementConditions
    * The management conditions associated to the management condition statement.
     *
     * @return ManagementCondition[]|null The managementConditions
     */
    public function getManagementConditions()
    {
        if (array_key_exists('managementConditions', $this->_propDict) && !is_null($this->_propDict['managementConditions'])) {
            $managementConditions = [];
            if (count($this->_propDict['managementConditions']) > 0 && is_a($this->_propDict['managementConditions'][0], 'ManagementCondition')) {
                return $this->_propDict['managementConditions'];
            }
            foreach ($this->_propDict['managementConditions'] as $singleValue) {
                $managementConditions []= new ManagementCondition($singleValue);
            }
            $this->_propDict['managementConditions'] = $managementConditions;
            return $this->_propDict['managementConditions'];
        }
        return null;
    }
    
    /** 
    * Sets the managementConditions
    * The management conditions associated to the management condition statement.
    *
    * @param ManagementCondition[] $val The managementConditions
    *
    * @return ManagementConditionStatement
    */
    public function setManagementConditions($val)
    {
        $this->_propDict["managementConditions"] = $val;
        return $this;
    }
    
}
