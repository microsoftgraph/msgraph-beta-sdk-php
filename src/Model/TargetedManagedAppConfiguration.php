<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetedManagedAppConfiguration File
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
* TargetedManagedAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TargetedManagedAppConfiguration extends ManagedAppConfiguration
{
    /**
    * Gets the appGroupType
    * Public Apps selection: group or individual
    *
    * @return TargetedManagedAppGroupType|null The appGroupType
    */
    public function getAppGroupType()
    {
        if (array_key_exists("appGroupType", $this->_propDict) && !is_null($this->_propDict["appGroupType"])) {
            if (is_a($this->_propDict["appGroupType"], "\Beta\Microsoft\Graph\Model\TargetedManagedAppGroupType")) {
                return $this->_propDict["appGroupType"];
            } else {
                $this->_propDict["appGroupType"] = new TargetedManagedAppGroupType($this->_propDict["appGroupType"]);
                return $this->_propDict["appGroupType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appGroupType
    * Public Apps selection: group or individual
    *
    * @param TargetedManagedAppGroupType $val The appGroupType
    *
    * @return TargetedManagedAppConfiguration
    */
    public function setAppGroupType($val)
    {
        $this->_propDict["appGroupType"] = $val;
        return $this;
    }
    
    /**
    * Gets the deployedAppCount
    * Count of apps to which the current policy is deployed.
    *
    * @return int|null The deployedAppCount
    */
    public function getDeployedAppCount()
    {
        if (array_key_exists("deployedAppCount", $this->_propDict)) {
            return $this->_propDict["deployedAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deployedAppCount
    * Count of apps to which the current policy is deployed.
    *
    * @param int $val The deployedAppCount
    *
    * @return TargetedManagedAppConfiguration
    */
    public function setDeployedAppCount($val)
    {
        $this->_propDict["deployedAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the isAssigned
    * Indicates if the policy is deployed to any inclusion groups or not.
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
    * Indicates if the policy is deployed to any inclusion groups or not.
    *
    * @param bool $val The isAssigned
    *
    * @return TargetedManagedAppConfiguration
    */
    public function setIsAssigned($val)
    {
        $this->_propDict["isAssigned"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the apps
    * List of apps to which the policy is deployed.
     *
     * @return ManagedMobileApp[]|null The apps
     */
    public function getApps()
    {
        if (array_key_exists('apps', $this->_propDict) && !is_null($this->_propDict['apps'])) {
            $apps = [];
            if (count($this->_propDict['apps']) > 0 && is_a($this->_propDict['apps'][0], 'ManagedMobileApp')) {
                return $this->_propDict['apps'];
            }
            foreach ($this->_propDict['apps'] as $singleValue) {
                $apps []= new ManagedMobileApp($singleValue);
            }
            $this->_propDict['apps'] = $apps;
            return $this->_propDict['apps'];
        }
        return null;
    }
    
    /** 
    * Sets the apps
    * List of apps to which the policy is deployed.
    *
    * @param ManagedMobileApp[] $val The apps
    *
    * @return TargetedManagedAppConfiguration
    */
    public function setApps($val)
    {
        $this->_propDict["apps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     *
     * @return TargetedManagedAppPolicyAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
            $assignments = [];
            if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'TargetedManagedAppPolicyAssignment')) {
                return $this->_propDict['assignments'];
            }
            foreach ($this->_propDict['assignments'] as $singleValue) {
                $assignments []= new TargetedManagedAppPolicyAssignment($singleValue);
            }
            $this->_propDict['assignments'] = $assignments;
            return $this->_propDict['assignments'];
        }
        return null;
    }
    
    /** 
    * Sets the assignments
    * Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
    *
    * @param TargetedManagedAppPolicyAssignment[] $val The assignments
    *
    * @return TargetedManagedAppConfiguration
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @return ManagedAppPolicyDeploymentSummary|null The deploymentSummary
    */
    public function getDeploymentSummary()
    {
        if (array_key_exists("deploymentSummary", $this->_propDict) && !is_null($this->_propDict["deploymentSummary"])) {
            if (is_a($this->_propDict["deploymentSummary"], "\Beta\Microsoft\Graph\Model\ManagedAppPolicyDeploymentSummary")) {
                return $this->_propDict["deploymentSummary"];
            } else {
                $this->_propDict["deploymentSummary"] = new ManagedAppPolicyDeploymentSummary($this->_propDict["deploymentSummary"]);
                return $this->_propDict["deploymentSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @param ManagedAppPolicyDeploymentSummary $val The deploymentSummary
    *
    * @return TargetedManagedAppConfiguration
    */
    public function setDeploymentSummary($val)
    {
        $this->_propDict["deploymentSummary"] = $val;
        return $this;
    }
    
}
