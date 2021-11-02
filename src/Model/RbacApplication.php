<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RbacApplication File
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
* RbacApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RbacApplication extends Entity
{

     /** 
     * Gets the resourceNamespaces
     *
     * @return UnifiedRbacResourceNamespace[]|null The resourceNamespaces
     */
    public function getResourceNamespaces()
    {
        if (array_key_exists('resourceNamespaces', $this->_propDict) && !is_null($this->_propDict['resourceNamespaces'])) {
           $resourceNamespaces = [];
           if (count($this->_propDict['resourceNamespaces']) > 0 && is_a($this->_propDict['resourceNamespaces'][0], 'UnifiedRbacResourceNamespace')) {
              return $this->_propDict['resourceNamespaces'];
           }
           foreach ($this->_propDict['resourceNamespaces'] as $singleValue) {
              $resourceNamespaces []= new UnifiedRbacResourceNamespace($singleValue);
           }
           $this->_propDict['resourceNamespaces'] = $resourceNamespaces;
           return $this->_propDict['resourceNamespaces'];
        }
        return null;
    }
    
    /** 
    * Sets the resourceNamespaces
    *
    * @param UnifiedRbacResourceNamespace[] $val The resourceNamespaces
    *
    * @return RbacApplication
    */
    public function setResourceNamespaces($val)
    {
        $this->_propDict["resourceNamespaces"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
    * Resource to grant access to users or groups.
     *
     * @return UnifiedRoleAssignment[]|null The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists('roleAssignments', $this->_propDict) && !is_null($this->_propDict['roleAssignments'])) {
           $roleAssignments = [];
           if (count($this->_propDict['roleAssignments']) > 0 && is_a($this->_propDict['roleAssignments'][0], 'UnifiedRoleAssignment')) {
              return $this->_propDict['roleAssignments'];
           }
           foreach ($this->_propDict['roleAssignments'] as $singleValue) {
              $roleAssignments []= new UnifiedRoleAssignment($singleValue);
           }
           $this->_propDict['roleAssignments'] = $roleAssignments;
           return $this->_propDict['roleAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignments
    * Resource to grant access to users or groups.
    *
    * @param UnifiedRoleAssignment[] $val The roleAssignments
    *
    * @return RbacApplication
    */
    public function setRoleAssignments($val)
    {
        $this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
    * Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     *
     * @return UnifiedRoleDefinition[]|null The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists('roleDefinitions', $this->_propDict) && !is_null($this->_propDict['roleDefinitions'])) {
           $roleDefinitions = [];
           if (count($this->_propDict['roleDefinitions']) > 0 && is_a($this->_propDict['roleDefinitions'][0], 'UnifiedRoleDefinition')) {
              return $this->_propDict['roleDefinitions'];
           }
           foreach ($this->_propDict['roleDefinitions'] as $singleValue) {
              $roleDefinitions []= new UnifiedRoleDefinition($singleValue);
           }
           $this->_propDict['roleDefinitions'] = $roleDefinitions;
           return $this->_propDict['roleDefinitions'];
        }
        return null;
    }
    
    /** 
    * Sets the roleDefinitions
    * Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
    *
    * @param UnifiedRoleDefinition[] $val The roleDefinitions
    *
    * @return RbacApplication
    */
    public function setRoleDefinitions($val)
    {
        $this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentApprovals
     *
     * @return Approval[]|null The roleAssignmentApprovals
     */
    public function getRoleAssignmentApprovals()
    {
        if (array_key_exists('roleAssignmentApprovals', $this->_propDict) && !is_null($this->_propDict['roleAssignmentApprovals'])) {
           $roleAssignmentApprovals = [];
           if (count($this->_propDict['roleAssignmentApprovals']) > 0 && is_a($this->_propDict['roleAssignmentApprovals'][0], 'Approval')) {
              return $this->_propDict['roleAssignmentApprovals'];
           }
           foreach ($this->_propDict['roleAssignmentApprovals'] as $singleValue) {
              $roleAssignmentApprovals []= new Approval($singleValue);
           }
           $this->_propDict['roleAssignmentApprovals'] = $roleAssignmentApprovals;
           return $this->_propDict['roleAssignmentApprovals'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignmentApprovals
    *
    * @param Approval[] $val The roleAssignmentApprovals
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentApprovals($val)
    {
        $this->_propDict["roleAssignmentApprovals"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentScheduleInstances
     *
     * @return UnifiedRoleAssignmentScheduleInstance[]|null The roleAssignmentScheduleInstances
     */
    public function getRoleAssignmentScheduleInstances()
    {
        if (array_key_exists('roleAssignmentScheduleInstances', $this->_propDict) && !is_null($this->_propDict['roleAssignmentScheduleInstances'])) {
           $roleAssignmentScheduleInstances = [];
           if (count($this->_propDict['roleAssignmentScheduleInstances']) > 0 && is_a($this->_propDict['roleAssignmentScheduleInstances'][0], 'UnifiedRoleAssignmentScheduleInstance')) {
              return $this->_propDict['roleAssignmentScheduleInstances'];
           }
           foreach ($this->_propDict['roleAssignmentScheduleInstances'] as $singleValue) {
              $roleAssignmentScheduleInstances []= new UnifiedRoleAssignmentScheduleInstance($singleValue);
           }
           $this->_propDict['roleAssignmentScheduleInstances'] = $roleAssignmentScheduleInstances;
           return $this->_propDict['roleAssignmentScheduleInstances'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignmentScheduleInstances
    *
    * @param UnifiedRoleAssignmentScheduleInstance[] $val The roleAssignmentScheduleInstances
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentScheduleInstances($val)
    {
        $this->_propDict["roleAssignmentScheduleInstances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentScheduleRequests
     *
     * @return UnifiedRoleAssignmentScheduleRequest[]|null The roleAssignmentScheduleRequests
     */
    public function getRoleAssignmentScheduleRequests()
    {
        if (array_key_exists('roleAssignmentScheduleRequests', $this->_propDict) && !is_null($this->_propDict['roleAssignmentScheduleRequests'])) {
           $roleAssignmentScheduleRequests = [];
           if (count($this->_propDict['roleAssignmentScheduleRequests']) > 0 && is_a($this->_propDict['roleAssignmentScheduleRequests'][0], 'UnifiedRoleAssignmentScheduleRequest')) {
              return $this->_propDict['roleAssignmentScheduleRequests'];
           }
           foreach ($this->_propDict['roleAssignmentScheduleRequests'] as $singleValue) {
              $roleAssignmentScheduleRequests []= new UnifiedRoleAssignmentScheduleRequest($singleValue);
           }
           $this->_propDict['roleAssignmentScheduleRequests'] = $roleAssignmentScheduleRequests;
           return $this->_propDict['roleAssignmentScheduleRequests'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignmentScheduleRequests
    *
    * @param UnifiedRoleAssignmentScheduleRequest[] $val The roleAssignmentScheduleRequests
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentScheduleRequests($val)
    {
        $this->_propDict["roleAssignmentScheduleRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentSchedules
     *
     * @return UnifiedRoleAssignmentSchedule[]|null The roleAssignmentSchedules
     */
    public function getRoleAssignmentSchedules()
    {
        if (array_key_exists('roleAssignmentSchedules', $this->_propDict) && !is_null($this->_propDict['roleAssignmentSchedules'])) {
           $roleAssignmentSchedules = [];
           if (count($this->_propDict['roleAssignmentSchedules']) > 0 && is_a($this->_propDict['roleAssignmentSchedules'][0], 'UnifiedRoleAssignmentSchedule')) {
              return $this->_propDict['roleAssignmentSchedules'];
           }
           foreach ($this->_propDict['roleAssignmentSchedules'] as $singleValue) {
              $roleAssignmentSchedules []= new UnifiedRoleAssignmentSchedule($singleValue);
           }
           $this->_propDict['roleAssignmentSchedules'] = $roleAssignmentSchedules;
           return $this->_propDict['roleAssignmentSchedules'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignmentSchedules
    *
    * @param UnifiedRoleAssignmentSchedule[] $val The roleAssignmentSchedules
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentSchedules($val)
    {
        $this->_propDict["roleAssignmentSchedules"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleEligibilityScheduleInstances
     *
     * @return UnifiedRoleEligibilityScheduleInstance[]|null The roleEligibilityScheduleInstances
     */
    public function getRoleEligibilityScheduleInstances()
    {
        if (array_key_exists('roleEligibilityScheduleInstances', $this->_propDict) && !is_null($this->_propDict['roleEligibilityScheduleInstances'])) {
           $roleEligibilityScheduleInstances = [];
           if (count($this->_propDict['roleEligibilityScheduleInstances']) > 0 && is_a($this->_propDict['roleEligibilityScheduleInstances'][0], 'UnifiedRoleEligibilityScheduleInstance')) {
              return $this->_propDict['roleEligibilityScheduleInstances'];
           }
           foreach ($this->_propDict['roleEligibilityScheduleInstances'] as $singleValue) {
              $roleEligibilityScheduleInstances []= new UnifiedRoleEligibilityScheduleInstance($singleValue);
           }
           $this->_propDict['roleEligibilityScheduleInstances'] = $roleEligibilityScheduleInstances;
           return $this->_propDict['roleEligibilityScheduleInstances'];
        }
        return null;
    }
    
    /** 
    * Sets the roleEligibilityScheduleInstances
    *
    * @param UnifiedRoleEligibilityScheduleInstance[] $val The roleEligibilityScheduleInstances
    *
    * @return RbacApplication
    */
    public function setRoleEligibilityScheduleInstances($val)
    {
        $this->_propDict["roleEligibilityScheduleInstances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleEligibilityScheduleRequests
     *
     * @return UnifiedRoleEligibilityScheduleRequest[]|null The roleEligibilityScheduleRequests
     */
    public function getRoleEligibilityScheduleRequests()
    {
        if (array_key_exists('roleEligibilityScheduleRequests', $this->_propDict) && !is_null($this->_propDict['roleEligibilityScheduleRequests'])) {
           $roleEligibilityScheduleRequests = [];
           if (count($this->_propDict['roleEligibilityScheduleRequests']) > 0 && is_a($this->_propDict['roleEligibilityScheduleRequests'][0], 'UnifiedRoleEligibilityScheduleRequest')) {
              return $this->_propDict['roleEligibilityScheduleRequests'];
           }
           foreach ($this->_propDict['roleEligibilityScheduleRequests'] as $singleValue) {
              $roleEligibilityScheduleRequests []= new UnifiedRoleEligibilityScheduleRequest($singleValue);
           }
           $this->_propDict['roleEligibilityScheduleRequests'] = $roleEligibilityScheduleRequests;
           return $this->_propDict['roleEligibilityScheduleRequests'];
        }
        return null;
    }
    
    /** 
    * Sets the roleEligibilityScheduleRequests
    *
    * @param UnifiedRoleEligibilityScheduleRequest[] $val The roleEligibilityScheduleRequests
    *
    * @return RbacApplication
    */
    public function setRoleEligibilityScheduleRequests($val)
    {
        $this->_propDict["roleEligibilityScheduleRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleEligibilitySchedules
     *
     * @return UnifiedRoleEligibilitySchedule[]|null The roleEligibilitySchedules
     */
    public function getRoleEligibilitySchedules()
    {
        if (array_key_exists('roleEligibilitySchedules', $this->_propDict) && !is_null($this->_propDict['roleEligibilitySchedules'])) {
           $roleEligibilitySchedules = [];
           if (count($this->_propDict['roleEligibilitySchedules']) > 0 && is_a($this->_propDict['roleEligibilitySchedules'][0], 'UnifiedRoleEligibilitySchedule')) {
              return $this->_propDict['roleEligibilitySchedules'];
           }
           foreach ($this->_propDict['roleEligibilitySchedules'] as $singleValue) {
              $roleEligibilitySchedules []= new UnifiedRoleEligibilitySchedule($singleValue);
           }
           $this->_propDict['roleEligibilitySchedules'] = $roleEligibilitySchedules;
           return $this->_propDict['roleEligibilitySchedules'];
        }
        return null;
    }
    
    /** 
    * Sets the roleEligibilitySchedules
    *
    * @param UnifiedRoleEligibilitySchedule[] $val The roleEligibilitySchedules
    *
    * @return RbacApplication
    */
    public function setRoleEligibilitySchedules($val)
    {
        $this->_propDict["roleEligibilitySchedules"] = $val;
        return $this;
    }
    
}
