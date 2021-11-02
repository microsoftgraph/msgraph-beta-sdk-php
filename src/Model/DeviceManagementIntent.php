<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementIntent File
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
* DeviceManagementIntent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementIntent extends Entity
{
    /**
    * Gets the description
    * The user given description
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
    * The user given description
    *
    * @param string $val The description
    *
    * @return DeviceManagementIntent
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The user given display name
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
    * The user given display name
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementIntent
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAssigned
    * Signifies whether or not the intent is assigned to users
    *
    * @return bool|null The isAssigned
    */
    public function getIsAssigned()
    {
        if (array_key_exists("isAssigned", $this->_propDict)) {
            return $this->_propDict["isAssigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAssigned
    * Signifies whether or not the intent is assigned to users
    *
    * @param bool $val The isAssigned
    *
    * @return DeviceManagementIntent
    */
    public function setIsAssigned($val)
    {
        $this->_propDict["isAssigned"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * When the intent was last modified
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
    * When the intent was last modified
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceManagementIntent
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
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
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return DeviceManagementIntent
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the templateId
    * The ID of the template this intent was created from (if any)
    *
    * @return string|null The templateId
    */
    public function getTemplateId()
    {
        if (array_key_exists("templateId", $this->_propDict)) {
            return $this->_propDict["templateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the templateId
    * The ID of the template this intent was created from (if any)
    *
    * @param string $val The templateId
    *
    * @return DeviceManagementIntent
    */
    public function setTemplateId($val)
    {
        $this->_propDict["templateId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * Collection of assignments
     *
     * @return DeviceManagementIntentAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
           $assignments = [];
           if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'DeviceManagementIntentAssignment')) {
              return $this->_propDict['assignments'];
           }
           foreach ($this->_propDict['assignments'] as $singleValue) {
              $assignments []= new DeviceManagementIntentAssignment($singleValue);
           }
           $this->_propDict['assignments'] = $assignments;
           return $this->_propDict['assignments'];
        }
        return null;
    }
    
    /** 
    * Sets the assignments
    * Collection of assignments
    *
    * @param DeviceManagementIntentAssignment[] $val The assignments
    *
    * @return DeviceManagementIntent
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the categories
    * Collection of setting categories within the intent
     *
     * @return DeviceManagementIntentSettingCategory[]|null The categories
     */
    public function getCategories()
    {
        if (array_key_exists('categories', $this->_propDict) && !is_null($this->_propDict['categories'])) {
           $categories = [];
           if (count($this->_propDict['categories']) > 0 && is_a($this->_propDict['categories'][0], 'DeviceManagementIntentSettingCategory')) {
              return $this->_propDict['categories'];
           }
           foreach ($this->_propDict['categories'] as $singleValue) {
              $categories []= new DeviceManagementIntentSettingCategory($singleValue);
           }
           $this->_propDict['categories'] = $categories;
           return $this->_propDict['categories'];
        }
        return null;
    }
    
    /** 
    * Sets the categories
    * Collection of setting categories within the intent
    *
    * @param DeviceManagementIntentSettingCategory[] $val The categories
    *
    * @return DeviceManagementIntent
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceSettingStateSummaries
    * Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
     *
     * @return DeviceManagementIntentDeviceSettingStateSummary[]|null The deviceSettingStateSummaries
     */
    public function getDeviceSettingStateSummaries()
    {
        if (array_key_exists('deviceSettingStateSummaries', $this->_propDict) && !is_null($this->_propDict['deviceSettingStateSummaries'])) {
           $deviceSettingStateSummaries = [];
           if (count($this->_propDict['deviceSettingStateSummaries']) > 0 && is_a($this->_propDict['deviceSettingStateSummaries'][0], 'DeviceManagementIntentDeviceSettingStateSummary')) {
              return $this->_propDict['deviceSettingStateSummaries'];
           }
           foreach ($this->_propDict['deviceSettingStateSummaries'] as $singleValue) {
              $deviceSettingStateSummaries []= new DeviceManagementIntentDeviceSettingStateSummary($singleValue);
           }
           $this->_propDict['deviceSettingStateSummaries'] = $deviceSettingStateSummaries;
           return $this->_propDict['deviceSettingStateSummaries'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceSettingStateSummaries
    * Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
    *
    * @param DeviceManagementIntentDeviceSettingStateSummary[] $val The deviceSettingStateSummaries
    *
    * @return DeviceManagementIntent
    */
    public function setDeviceSettingStateSummaries($val)
    {
        $this->_propDict["deviceSettingStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStates
    * Collection of states of all devices that the intent is applied to
     *
     * @return DeviceManagementIntentDeviceState[]|null The deviceStates
     */
    public function getDeviceStates()
    {
        if (array_key_exists('deviceStates', $this->_propDict) && !is_null($this->_propDict['deviceStates'])) {
           $deviceStates = [];
           if (count($this->_propDict['deviceStates']) > 0 && is_a($this->_propDict['deviceStates'][0], 'DeviceManagementIntentDeviceState')) {
              return $this->_propDict['deviceStates'];
           }
           foreach ($this->_propDict['deviceStates'] as $singleValue) {
              $deviceStates []= new DeviceManagementIntentDeviceState($singleValue);
           }
           $this->_propDict['deviceStates'] = $deviceStates;
           return $this->_propDict['deviceStates'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceStates
    * Collection of states of all devices that the intent is applied to
    *
    * @param DeviceManagementIntentDeviceState[] $val The deviceStates
    *
    * @return DeviceManagementIntent
    */
    public function setDeviceStates($val)
    {
        $this->_propDict["deviceStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceStateSummary
    * A summary of device states and counts of devices that belong to corresponding state for all devices that the intent is applied to
    *
    * @return DeviceManagementIntentDeviceStateSummary|null The deviceStateSummary
    */
    public function getDeviceStateSummary()
    {
        if (array_key_exists("deviceStateSummary", $this->_propDict) && !is_null($this->_propDict["deviceStateSummary"])) {
            if (is_a($this->_propDict["deviceStateSummary"], "\Beta\Microsoft\Graph\Model\DeviceManagementIntentDeviceStateSummary")) {
                return $this->_propDict["deviceStateSummary"];
            } else {
                $this->_propDict["deviceStateSummary"] = new DeviceManagementIntentDeviceStateSummary($this->_propDict["deviceStateSummary"]);
                return $this->_propDict["deviceStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceStateSummary
    * A summary of device states and counts of devices that belong to corresponding state for all devices that the intent is applied to
    *
    * @param DeviceManagementIntentDeviceStateSummary $val The deviceStateSummary
    *
    * @return DeviceManagementIntent
    */
    public function setDeviceStateSummary($val)
    {
        $this->_propDict["deviceStateSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the settings
    * Collection of all settings to be applied
     *
     * @return DeviceManagementSettingInstance[]|null The settings
     */
    public function getSettings()
    {
        if (array_key_exists('settings', $this->_propDict) && !is_null($this->_propDict['settings'])) {
           $settings = [];
           if (count($this->_propDict['settings']) > 0 && is_a($this->_propDict['settings'][0], 'DeviceManagementSettingInstance')) {
              return $this->_propDict['settings'];
           }
           foreach ($this->_propDict['settings'] as $singleValue) {
              $settings []= new DeviceManagementSettingInstance($singleValue);
           }
           $this->_propDict['settings'] = $settings;
           return $this->_propDict['settings'];
        }
        return null;
    }
    
    /** 
    * Sets the settings
    * Collection of all settings to be applied
    *
    * @param DeviceManagementSettingInstance[] $val The settings
    *
    * @return DeviceManagementIntent
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStates
    * Collection of states of all users that the intent is applied to
     *
     * @return DeviceManagementIntentUserState[]|null The userStates
     */
    public function getUserStates()
    {
        if (array_key_exists('userStates', $this->_propDict) && !is_null($this->_propDict['userStates'])) {
           $userStates = [];
           if (count($this->_propDict['userStates']) > 0 && is_a($this->_propDict['userStates'][0], 'DeviceManagementIntentUserState')) {
              return $this->_propDict['userStates'];
           }
           foreach ($this->_propDict['userStates'] as $singleValue) {
              $userStates []= new DeviceManagementIntentUserState($singleValue);
           }
           $this->_propDict['userStates'] = $userStates;
           return $this->_propDict['userStates'];
        }
        return null;
    }
    
    /** 
    * Sets the userStates
    * Collection of states of all users that the intent is applied to
    *
    * @param DeviceManagementIntentUserState[] $val The userStates
    *
    * @return DeviceManagementIntent
    */
    public function setUserStates($val)
    {
        $this->_propDict["userStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the userStateSummary
    * A summary of user states and counts of users that belong to corresponding state for all users that the intent is applied to
    *
    * @return DeviceManagementIntentUserStateSummary|null The userStateSummary
    */
    public function getUserStateSummary()
    {
        if (array_key_exists("userStateSummary", $this->_propDict) && !is_null($this->_propDict["userStateSummary"])) {
            if (is_a($this->_propDict["userStateSummary"], "\Beta\Microsoft\Graph\Model\DeviceManagementIntentUserStateSummary")) {
                return $this->_propDict["userStateSummary"];
            } else {
                $this->_propDict["userStateSummary"] = new DeviceManagementIntentUserStateSummary($this->_propDict["userStateSummary"]);
                return $this->_propDict["userStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userStateSummary
    * A summary of user states and counts of users that belong to corresponding state for all users that the intent is applied to
    *
    * @param DeviceManagementIntentUserStateSummary $val The userStateSummary
    *
    * @return DeviceManagementIntent
    */
    public function setUserStateSummary($val)
    {
        $this->_propDict["userStateSummary"] = $val;
        return $this;
    }
    
}
