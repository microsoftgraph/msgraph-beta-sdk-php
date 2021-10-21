<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDriverUpdateProfile File
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
* WindowsDriverUpdateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDriverUpdateProfile extends Entity
{
    /**
    * Gets the approvalType
    * Driver update profile approval type. For example, manual or automatic approval. Possible values are: manual, automatic.
    *
    * @return DriverUpdateProfileApprovalType|null The approvalType
    */
    public function getApprovalType()
    {
        if (array_key_exists("approvalType", $this->_propDict) && !is_null($this->_propDict["approvalType"])) {
            if (is_a($this->_propDict["approvalType"], "\Beta\Microsoft\Graph\Model\DriverUpdateProfileApprovalType")) {
                return $this->_propDict["approvalType"];
            } else {
                $this->_propDict["approvalType"] = new DriverUpdateProfileApprovalType($this->_propDict["approvalType"]);
                return $this->_propDict["approvalType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the approvalType
    * Driver update profile approval type. For example, manual or automatic approval. Possible values are: manual, automatic.
    *
    * @param DriverUpdateProfileApprovalType $val The approvalType
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setApprovalType($val)
    {
        $this->_propDict["approvalType"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date time that the profile was created.
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
    * The date time that the profile was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploymentDeferralInDays
    * Deployment deferral settings in days, only applicable when ApprovalType is set to automatic approval.
    *
    * @return int|null The deploymentDeferralInDays
    */
    public function getDeploymentDeferralInDays()
    {
        if (array_key_exists("deploymentDeferralInDays", $this->_propDict)) {
            return $this->_propDict["deploymentDeferralInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deploymentDeferralInDays
    * Deployment deferral settings in days, only applicable when ApprovalType is set to automatic approval.
    *
    * @param int $val The deploymentDeferralInDays
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setDeploymentDeferralInDays($val)
    {
        $this->_propDict["deploymentDeferralInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the description
    * The description of the profile which is specified by the user.
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
    * The description of the profile which is specified by the user.
    *
    * @param string $val The description
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceReporting
    * Number of devices reporting for this profile
    *
    * @return int|null The deviceReporting
    */
    public function getDeviceReporting()
    {
        if (array_key_exists("deviceReporting", $this->_propDict)) {
            return $this->_propDict["deviceReporting"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceReporting
    * Number of devices reporting for this profile
    *
    * @param int $val The deviceReporting
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setDeviceReporting($val)
    {
        $this->_propDict["deviceReporting"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the profile.
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
    * The display name for the profile.
    *
    * @param string $val The displayName
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date time that the profile was last modified.
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
    * The date time that the profile was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the newUpdates
    * Number of new driver updates available for this profile.
    *
    * @return int|null The newUpdates
    */
    public function getNewUpdates()
    {
        if (array_key_exists("newUpdates", $this->_propDict)) {
            return $this->_propDict["newUpdates"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the newUpdates
    * Number of new driver updates available for this profile.
    *
    * @param int $val The newUpdates
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setNewUpdates($val)
    {
        $this->_propDict["newUpdates"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Driver Update entity.
    *
    * @return string|null The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Driver Update entity.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of group assignments of the profile.
     *
     * @return WindowsDriverUpdateProfileAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
            $assignments = [];
            if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'WindowsDriverUpdateProfileAssignment')) {
                return $this->_propDict['assignments'];
            }
            foreach ($this->_propDict['assignments'] as $singleValue) {
                $assignments []= new WindowsDriverUpdateProfileAssignment($singleValue);
            }
            $this->_propDict['assignments'] = $assignments;
            return $this->_propDict['assignments'];
        }
        return null;
    }
    
    /** 
    * Sets the assignments
    * The list of group assignments of the profile.
    *
    * @param WindowsDriverUpdateProfileAssignment[] $val The assignments
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the driverInventories
    * Driver inventories for this profile.
     *
     * @return WindowsDriverUpdateInventory[]|null The driverInventories
     */
    public function getDriverInventories()
    {
        if (array_key_exists('driverInventories', $this->_propDict) && !is_null($this->_propDict['driverInventories'])) {
            $driverInventories = [];
            if (count($this->_propDict['driverInventories']) > 0 && is_a($this->_propDict['driverInventories'][0], 'WindowsDriverUpdateInventory')) {
                return $this->_propDict['driverInventories'];
            }
            foreach ($this->_propDict['driverInventories'] as $singleValue) {
                $driverInventories []= new WindowsDriverUpdateInventory($singleValue);
            }
            $this->_propDict['driverInventories'] = $driverInventories;
            return $this->_propDict['driverInventories'];
        }
        return null;
    }
    
    /** 
    * Sets the driverInventories
    * Driver inventories for this profile.
    *
    * @param WindowsDriverUpdateInventory[] $val The driverInventories
    *
    * @return WindowsDriverUpdateProfile
    */
    public function setDriverInventories($val)
    {
        $this->_propDict["driverInventories"] = $val;
        return $this;
    }
    
}
