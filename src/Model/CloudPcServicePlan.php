<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcServicePlan File
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
* CloudPcServicePlan class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcServicePlan extends Entity
{
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
    * @return CloudPcServicePlan
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the ramInGB
    *
    * @return int|null The ramInGB
    */
    public function getRamInGB()
    {
        if (array_key_exists("ramInGB", $this->_propDict)) {
            return $this->_propDict["ramInGB"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ramInGB
    *
    * @param int $val The ramInGB
    *
    * @return CloudPcServicePlan
    */
    public function setRamInGB($val)
    {
        $this->_propDict["ramInGB"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the storageInGB
    *
    * @return int|null The storageInGB
    */
    public function getStorageInGB()
    {
        if (array_key_exists("storageInGB", $this->_propDict)) {
            return $this->_propDict["storageInGB"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageInGB
    *
    * @param int $val The storageInGB
    *
    * @return CloudPcServicePlan
    */
    public function setStorageInGB($val)
    {
        $this->_propDict["storageInGB"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the type
    *
    * @return CloudPcServicePlanType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict) && !is_null($this->_propDict["type"])) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\CloudPcServicePlanType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new CloudPcServicePlanType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }
    
    /**
    * Sets the type
    *
    * @param CloudPcServicePlanType $val The type
    *
    * @return CloudPcServicePlan
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the userProfileInGB
    *
    * @return int|null The userProfileInGB
    */
    public function getUserProfileInGB()
    {
        if (array_key_exists("userProfileInGB", $this->_propDict)) {
            return $this->_propDict["userProfileInGB"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userProfileInGB
    *
    * @param int $val The userProfileInGB
    *
    * @return CloudPcServicePlan
    */
    public function setUserProfileInGB($val)
    {
        $this->_propDict["userProfileInGB"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the vCpuCount
    *
    * @return int|null The vCpuCount
    */
    public function getVCpuCount()
    {
        if (array_key_exists("vCpuCount", $this->_propDict)) {
            return $this->_propDict["vCpuCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vCpuCount
    *
    * @param int $val The vCpuCount
    *
    * @return CloudPcServicePlan
    */
    public function setVCpuCount($val)
    {
        $this->_propDict["vCpuCount"] = intval($val);
        return $this;
    }
    
}
