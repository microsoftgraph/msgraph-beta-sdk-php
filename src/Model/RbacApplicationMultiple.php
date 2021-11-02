<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RbacApplicationMultiple File
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
* RbacApplicationMultiple class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RbacApplicationMultiple extends Entity
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
    * @return RbacApplicationMultiple
    */
    public function setResourceNamespaces($val)
    {
        $this->_propDict["resourceNamespaces"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
     *
     * @return UnifiedRoleAssignmentMultiple[]|null The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists('roleAssignments', $this->_propDict) && !is_null($this->_propDict['roleAssignments'])) {
           $roleAssignments = [];
           if (count($this->_propDict['roleAssignments']) > 0 && is_a($this->_propDict['roleAssignments'][0], 'UnifiedRoleAssignmentMultiple')) {
              return $this->_propDict['roleAssignments'];
           }
           foreach ($this->_propDict['roleAssignments'] as $singleValue) {
              $roleAssignments []= new UnifiedRoleAssignmentMultiple($singleValue);
           }
           $this->_propDict['roleAssignments'] = $roleAssignments;
           return $this->_propDict['roleAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignments
    *
    * @param UnifiedRoleAssignmentMultiple[] $val The roleAssignments
    *
    * @return RbacApplicationMultiple
    */
    public function setRoleAssignments($val)
    {
        $this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
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
    *
    * @param UnifiedRoleDefinition[] $val The roleDefinitions
    *
    * @return RbacApplicationMultiple
    */
    public function setRoleDefinitions($val)
    {
        $this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    
}
