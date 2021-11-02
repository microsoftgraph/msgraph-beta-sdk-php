<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccess File
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
* PrivilegedAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccess extends Entity
{
    /**
    * Gets the displayName
    * The display name of the provider managed by PIM.
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
    * The display name of the provider managed by PIM.
    *
    * @param string $val The displayName
    *
    * @return PrivilegedAccess
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
    * A collection of resources for the provider.
     *
     * @return GovernanceResource[]|null The resources
     */
    public function getResources()
    {
        if (array_key_exists('resources', $this->_propDict) && !is_null($this->_propDict['resources'])) {
           $resources = [];
           if (count($this->_propDict['resources']) > 0 && is_a($this->_propDict['resources'][0], 'GovernanceResource')) {
              return $this->_propDict['resources'];
           }
           foreach ($this->_propDict['resources'] as $singleValue) {
              $resources []= new GovernanceResource($singleValue);
           }
           $this->_propDict['resources'] = $resources;
           return $this->_propDict['resources'];
        }
        return null;
    }
    
    /** 
    * Sets the resources
    * A collection of resources for the provider.
    *
    * @param GovernanceResource[] $val The resources
    *
    * @return PrivilegedAccess
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentRequests
    * A collection of role assignment requests for the provider.
     *
     * @return GovernanceRoleAssignmentRequest[]|null The roleAssignmentRequests
     */
    public function getRoleAssignmentRequests()
    {
        if (array_key_exists('roleAssignmentRequests', $this->_propDict) && !is_null($this->_propDict['roleAssignmentRequests'])) {
           $roleAssignmentRequests = [];
           if (count($this->_propDict['roleAssignmentRequests']) > 0 && is_a($this->_propDict['roleAssignmentRequests'][0], 'GovernanceRoleAssignmentRequest')) {
              return $this->_propDict['roleAssignmentRequests'];
           }
           foreach ($this->_propDict['roleAssignmentRequests'] as $singleValue) {
              $roleAssignmentRequests []= new GovernanceRoleAssignmentRequest($singleValue);
           }
           $this->_propDict['roleAssignmentRequests'] = $roleAssignmentRequests;
           return $this->_propDict['roleAssignmentRequests'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignmentRequests
    * A collection of role assignment requests for the provider.
    *
    * @param GovernanceRoleAssignmentRequest[] $val The roleAssignmentRequests
    *
    * @return PrivilegedAccess
    */
    public function setRoleAssignmentRequests($val)
    {
        $this->_propDict["roleAssignmentRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
    * A collection of role assignments for the provider.
     *
     * @return GovernanceRoleAssignment[]|null The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists('roleAssignments', $this->_propDict) && !is_null($this->_propDict['roleAssignments'])) {
           $roleAssignments = [];
           if (count($this->_propDict['roleAssignments']) > 0 && is_a($this->_propDict['roleAssignments'][0], 'GovernanceRoleAssignment')) {
              return $this->_propDict['roleAssignments'];
           }
           foreach ($this->_propDict['roleAssignments'] as $singleValue) {
              $roleAssignments []= new GovernanceRoleAssignment($singleValue);
           }
           $this->_propDict['roleAssignments'] = $roleAssignments;
           return $this->_propDict['roleAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignments
    * A collection of role assignments for the provider.
    *
    * @param GovernanceRoleAssignment[] $val The roleAssignments
    *
    * @return PrivilegedAccess
    */
    public function setRoleAssignments($val)
    {
        $this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
    * A collection of role defintions for the provider.
     *
     * @return GovernanceRoleDefinition[]|null The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists('roleDefinitions', $this->_propDict) && !is_null($this->_propDict['roleDefinitions'])) {
           $roleDefinitions = [];
           if (count($this->_propDict['roleDefinitions']) > 0 && is_a($this->_propDict['roleDefinitions'][0], 'GovernanceRoleDefinition')) {
              return $this->_propDict['roleDefinitions'];
           }
           foreach ($this->_propDict['roleDefinitions'] as $singleValue) {
              $roleDefinitions []= new GovernanceRoleDefinition($singleValue);
           }
           $this->_propDict['roleDefinitions'] = $roleDefinitions;
           return $this->_propDict['roleDefinitions'];
        }
        return null;
    }
    
    /** 
    * Sets the roleDefinitions
    * A collection of role defintions for the provider.
    *
    * @param GovernanceRoleDefinition[] $val The roleDefinitions
    *
    * @return PrivilegedAccess
    */
    public function setRoleDefinitions($val)
    {
        $this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleSettings
    * A collection of role settings for the provider.
     *
     * @return GovernanceRoleSetting[]|null The roleSettings
     */
    public function getRoleSettings()
    {
        if (array_key_exists('roleSettings', $this->_propDict) && !is_null($this->_propDict['roleSettings'])) {
           $roleSettings = [];
           if (count($this->_propDict['roleSettings']) > 0 && is_a($this->_propDict['roleSettings'][0], 'GovernanceRoleSetting')) {
              return $this->_propDict['roleSettings'];
           }
           foreach ($this->_propDict['roleSettings'] as $singleValue) {
              $roleSettings []= new GovernanceRoleSetting($singleValue);
           }
           $this->_propDict['roleSettings'] = $roleSettings;
           return $this->_propDict['roleSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the roleSettings
    * A collection of role settings for the provider.
    *
    * @param GovernanceRoleSetting[] $val The roleSettings
    *
    * @return PrivilegedAccess
    */
    public function setRoleSettings($val)
    {
        $this->_propDict["roleSettings"] = $val;
        return $this;
    }
    
}
