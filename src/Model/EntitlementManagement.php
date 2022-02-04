<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntitlementManagement File
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
* EntitlementManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntitlementManagement extends Entity
{

     /**
     * Gets the accessPackageAssignmentApprovals
     *
     * @return Approval[]|null The accessPackageAssignmentApprovals
     */
    public function getAccessPackageAssignmentApprovals()
    {
        if (array_key_exists('accessPackageAssignmentApprovals', $this->_propDict) && !is_null($this->_propDict['accessPackageAssignmentApprovals'])) {
            $accessPackageAssignmentApprovals = [];
            if (count($this->_propDict['accessPackageAssignmentApprovals']) > 0 && is_a($this->_propDict['accessPackageAssignmentApprovals'][0], 'Approval')) {
                return $this->_propDict['accessPackageAssignmentApprovals'];
            }
            foreach ($this->_propDict['accessPackageAssignmentApprovals'] as $singleValue) {
                $accessPackageAssignmentApprovals []= new Approval($singleValue);
            }
            $this->_propDict['accessPackageAssignmentApprovals'] = $accessPackageAssignmentApprovals;
            return $this->_propDict['accessPackageAssignmentApprovals'];
        }
        return null;
    }

    /**
    * Sets the accessPackageAssignmentApprovals
    *
    * @param Approval[] $val The accessPackageAssignmentApprovals
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentApprovals($val)
    {
        $this->_propDict["accessPackageAssignmentApprovals"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageAssignmentPolicies
    * Represents the policy that governs which subjects can request or be assigned an access package via an access package assignment.
     *
     * @return AccessPackageAssignmentPolicy[]|null The accessPackageAssignmentPolicies
     */
    public function getAccessPackageAssignmentPolicies()
    {
        if (array_key_exists('accessPackageAssignmentPolicies', $this->_propDict) && !is_null($this->_propDict['accessPackageAssignmentPolicies'])) {
            $accessPackageAssignmentPolicies = [];
            if (count($this->_propDict['accessPackageAssignmentPolicies']) > 0 && is_a($this->_propDict['accessPackageAssignmentPolicies'][0], 'AccessPackageAssignmentPolicy')) {
                return $this->_propDict['accessPackageAssignmentPolicies'];
            }
            foreach ($this->_propDict['accessPackageAssignmentPolicies'] as $singleValue) {
                $accessPackageAssignmentPolicies []= new AccessPackageAssignmentPolicy($singleValue);
            }
            $this->_propDict['accessPackageAssignmentPolicies'] = $accessPackageAssignmentPolicies;
            return $this->_propDict['accessPackageAssignmentPolicies'];
        }
        return null;
    }

    /**
    * Sets the accessPackageAssignmentPolicies
    * Represents the policy that governs which subjects can request or be assigned an access package via an access package assignment.
    *
    * @param AccessPackageAssignmentPolicy[] $val The accessPackageAssignmentPolicies
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentPolicies($val)
    {
        $this->_propDict["accessPackageAssignmentPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageAssignmentRequests
    * Represents access package assignment requests created by or on behalf of a user.
     *
     * @return AccessPackageAssignmentRequest[]|null The accessPackageAssignmentRequests
     */
    public function getAccessPackageAssignmentRequests()
    {
        if (array_key_exists('accessPackageAssignmentRequests', $this->_propDict) && !is_null($this->_propDict['accessPackageAssignmentRequests'])) {
            $accessPackageAssignmentRequests = [];
            if (count($this->_propDict['accessPackageAssignmentRequests']) > 0 && is_a($this->_propDict['accessPackageAssignmentRequests'][0], 'AccessPackageAssignmentRequest')) {
                return $this->_propDict['accessPackageAssignmentRequests'];
            }
            foreach ($this->_propDict['accessPackageAssignmentRequests'] as $singleValue) {
                $accessPackageAssignmentRequests []= new AccessPackageAssignmentRequest($singleValue);
            }
            $this->_propDict['accessPackageAssignmentRequests'] = $accessPackageAssignmentRequests;
            return $this->_propDict['accessPackageAssignmentRequests'];
        }
        return null;
    }

    /**
    * Sets the accessPackageAssignmentRequests
    * Represents access package assignment requests created by or on behalf of a user.
    *
    * @param AccessPackageAssignmentRequest[] $val The accessPackageAssignmentRequests
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentRequests($val)
    {
        $this->_propDict["accessPackageAssignmentRequests"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageAssignmentResourceRoles
    * Represents the resource-specific role which a subject has been assigned through an access package assignment.
     *
     * @return AccessPackageAssignmentResourceRole[]|null The accessPackageAssignmentResourceRoles
     */
    public function getAccessPackageAssignmentResourceRoles()
    {
        if (array_key_exists('accessPackageAssignmentResourceRoles', $this->_propDict) && !is_null($this->_propDict['accessPackageAssignmentResourceRoles'])) {
            $accessPackageAssignmentResourceRoles = [];
            if (count($this->_propDict['accessPackageAssignmentResourceRoles']) > 0 && is_a($this->_propDict['accessPackageAssignmentResourceRoles'][0], 'AccessPackageAssignmentResourceRole')) {
                return $this->_propDict['accessPackageAssignmentResourceRoles'];
            }
            foreach ($this->_propDict['accessPackageAssignmentResourceRoles'] as $singleValue) {
                $accessPackageAssignmentResourceRoles []= new AccessPackageAssignmentResourceRole($singleValue);
            }
            $this->_propDict['accessPackageAssignmentResourceRoles'] = $accessPackageAssignmentResourceRoles;
            return $this->_propDict['accessPackageAssignmentResourceRoles'];
        }
        return null;
    }

    /**
    * Sets the accessPackageAssignmentResourceRoles
    * Represents the resource-specific role which a subject has been assigned through an access package assignment.
    *
    * @param AccessPackageAssignmentResourceRole[] $val The accessPackageAssignmentResourceRoles
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentResourceRoles($val)
    {
        $this->_propDict["accessPackageAssignmentResourceRoles"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageAssignments
    * Represents the grant of an access package to a subject (user or group).
     *
     * @return AccessPackageAssignment[]|null The accessPackageAssignments
     */
    public function getAccessPackageAssignments()
    {
        if (array_key_exists('accessPackageAssignments', $this->_propDict) && !is_null($this->_propDict['accessPackageAssignments'])) {
            $accessPackageAssignments = [];
            if (count($this->_propDict['accessPackageAssignments']) > 0 && is_a($this->_propDict['accessPackageAssignments'][0], 'AccessPackageAssignment')) {
                return $this->_propDict['accessPackageAssignments'];
            }
            foreach ($this->_propDict['accessPackageAssignments'] as $singleValue) {
                $accessPackageAssignments []= new AccessPackageAssignment($singleValue);
            }
            $this->_propDict['accessPackageAssignments'] = $accessPackageAssignments;
            return $this->_propDict['accessPackageAssignments'];
        }
        return null;
    }

    /**
    * Sets the accessPackageAssignments
    * Represents the grant of an access package to a subject (user or group).
    *
    * @param AccessPackageAssignment[] $val The accessPackageAssignments
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignments($val)
    {
        $this->_propDict["accessPackageAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageCatalogs
    * Represents a group of access packages.
     *
     * @return AccessPackageCatalog[]|null The accessPackageCatalogs
     */
    public function getAccessPackageCatalogs()
    {
        if (array_key_exists('accessPackageCatalogs', $this->_propDict) && !is_null($this->_propDict['accessPackageCatalogs'])) {
            $accessPackageCatalogs = [];
            if (count($this->_propDict['accessPackageCatalogs']) > 0 && is_a($this->_propDict['accessPackageCatalogs'][0], 'AccessPackageCatalog')) {
                return $this->_propDict['accessPackageCatalogs'];
            }
            foreach ($this->_propDict['accessPackageCatalogs'] as $singleValue) {
                $accessPackageCatalogs []= new AccessPackageCatalog($singleValue);
            }
            $this->_propDict['accessPackageCatalogs'] = $accessPackageCatalogs;
            return $this->_propDict['accessPackageCatalogs'];
        }
        return null;
    }

    /**
    * Sets the accessPackageCatalogs
    * Represents a group of access packages.
    *
    * @param AccessPackageCatalog[] $val The accessPackageCatalogs
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageCatalogs($val)
    {
        $this->_propDict["accessPackageCatalogs"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResourceEnvironments
    * A reference to the geolocation environment in which a resource is located.
     *
     * @return AccessPackageResourceEnvironment[]|null The accessPackageResourceEnvironments
     */
    public function getAccessPackageResourceEnvironments()
    {
        if (array_key_exists('accessPackageResourceEnvironments', $this->_propDict) && !is_null($this->_propDict['accessPackageResourceEnvironments'])) {
            $accessPackageResourceEnvironments = [];
            if (count($this->_propDict['accessPackageResourceEnvironments']) > 0 && is_a($this->_propDict['accessPackageResourceEnvironments'][0], 'AccessPackageResourceEnvironment')) {
                return $this->_propDict['accessPackageResourceEnvironments'];
            }
            foreach ($this->_propDict['accessPackageResourceEnvironments'] as $singleValue) {
                $accessPackageResourceEnvironments []= new AccessPackageResourceEnvironment($singleValue);
            }
            $this->_propDict['accessPackageResourceEnvironments'] = $accessPackageResourceEnvironments;
            return $this->_propDict['accessPackageResourceEnvironments'];
        }
        return null;
    }

    /**
    * Sets the accessPackageResourceEnvironments
    * A reference to the geolocation environment in which a resource is located.
    *
    * @param AccessPackageResourceEnvironment[] $val The accessPackageResourceEnvironments
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResourceEnvironments($val)
    {
        $this->_propDict["accessPackageResourceEnvironments"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResourceRequests
    * Represents a request to add or remove a resource to or from a catalog respectively.
     *
     * @return AccessPackageResourceRequest[]|null The accessPackageResourceRequests
     */
    public function getAccessPackageResourceRequests()
    {
        if (array_key_exists('accessPackageResourceRequests', $this->_propDict) && !is_null($this->_propDict['accessPackageResourceRequests'])) {
            $accessPackageResourceRequests = [];
            if (count($this->_propDict['accessPackageResourceRequests']) > 0 && is_a($this->_propDict['accessPackageResourceRequests'][0], 'AccessPackageResourceRequest')) {
                return $this->_propDict['accessPackageResourceRequests'];
            }
            foreach ($this->_propDict['accessPackageResourceRequests'] as $singleValue) {
                $accessPackageResourceRequests []= new AccessPackageResourceRequest($singleValue);
            }
            $this->_propDict['accessPackageResourceRequests'] = $accessPackageResourceRequests;
            return $this->_propDict['accessPackageResourceRequests'];
        }
        return null;
    }

    /**
    * Sets the accessPackageResourceRequests
    * Represents a request to add or remove a resource to or from a catalog respectively.
    *
    * @param AccessPackageResourceRequest[] $val The accessPackageResourceRequests
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResourceRequests($val)
    {
        $this->_propDict["accessPackageResourceRequests"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResourceRoleScopes
    * A reference to both a scope within a resource, and a role in that resource for that scope.
     *
     * @return AccessPackageResourceRoleScope[]|null The accessPackageResourceRoleScopes
     */
    public function getAccessPackageResourceRoleScopes()
    {
        if (array_key_exists('accessPackageResourceRoleScopes', $this->_propDict) && !is_null($this->_propDict['accessPackageResourceRoleScopes'])) {
            $accessPackageResourceRoleScopes = [];
            if (count($this->_propDict['accessPackageResourceRoleScopes']) > 0 && is_a($this->_propDict['accessPackageResourceRoleScopes'][0], 'AccessPackageResourceRoleScope')) {
                return $this->_propDict['accessPackageResourceRoleScopes'];
            }
            foreach ($this->_propDict['accessPackageResourceRoleScopes'] as $singleValue) {
                $accessPackageResourceRoleScopes []= new AccessPackageResourceRoleScope($singleValue);
            }
            $this->_propDict['accessPackageResourceRoleScopes'] = $accessPackageResourceRoleScopes;
            return $this->_propDict['accessPackageResourceRoleScopes'];
        }
        return null;
    }

    /**
    * Sets the accessPackageResourceRoleScopes
    * A reference to both a scope within a resource, and a role in that resource for that scope.
    *
    * @param AccessPackageResourceRoleScope[] $val The accessPackageResourceRoleScopes
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResourceRoleScopes($val)
    {
        $this->_propDict["accessPackageResourceRoleScopes"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResources
    * A reference to a resource associated with an access package catalog.
     *
     * @return AccessPackageResource[]|null The accessPackageResources
     */
    public function getAccessPackageResources()
    {
        if (array_key_exists('accessPackageResources', $this->_propDict) && !is_null($this->_propDict['accessPackageResources'])) {
            $accessPackageResources = [];
            if (count($this->_propDict['accessPackageResources']) > 0 && is_a($this->_propDict['accessPackageResources'][0], 'AccessPackageResource')) {
                return $this->_propDict['accessPackageResources'];
            }
            foreach ($this->_propDict['accessPackageResources'] as $singleValue) {
                $accessPackageResources []= new AccessPackageResource($singleValue);
            }
            $this->_propDict['accessPackageResources'] = $accessPackageResources;
            return $this->_propDict['accessPackageResources'];
        }
        return null;
    }

    /**
    * Sets the accessPackageResources
    * A reference to a resource associated with an access package catalog.
    *
    * @param AccessPackageResource[] $val The accessPackageResources
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResources($val)
    {
        $this->_propDict["accessPackageResources"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackages
    * Represents access package objects.
     *
     * @return AccessPackage[]|null The accessPackages
     */
    public function getAccessPackages()
    {
        if (array_key_exists('accessPackages', $this->_propDict) && !is_null($this->_propDict['accessPackages'])) {
            $accessPackages = [];
            if (count($this->_propDict['accessPackages']) > 0 && is_a($this->_propDict['accessPackages'][0], 'AccessPackage')) {
                return $this->_propDict['accessPackages'];
            }
            foreach ($this->_propDict['accessPackages'] as $singleValue) {
                $accessPackages []= new AccessPackage($singleValue);
            }
            $this->_propDict['accessPackages'] = $accessPackages;
            return $this->_propDict['accessPackages'];
        }
        return null;
    }

    /**
    * Sets the accessPackages
    * Represents access package objects.
    *
    * @param AccessPackage[] $val The accessPackages
    *
    * @return EntitlementManagement
    */
    public function setAccessPackages($val)
    {
        $this->_propDict["accessPackages"] = $val;
        return $this;
    }


     /**
     * Gets the connectedOrganizations
    * Represents references to a directory or domain of another organization whose users can request access.
     *
     * @return ConnectedOrganization[]|null The connectedOrganizations
     */
    public function getConnectedOrganizations()
    {
        if (array_key_exists('connectedOrganizations', $this->_propDict) && !is_null($this->_propDict['connectedOrganizations'])) {
            $connectedOrganizations = [];
            if (count($this->_propDict['connectedOrganizations']) > 0 && is_a($this->_propDict['connectedOrganizations'][0], 'ConnectedOrganization')) {
                return $this->_propDict['connectedOrganizations'];
            }
            foreach ($this->_propDict['connectedOrganizations'] as $singleValue) {
                $connectedOrganizations []= new ConnectedOrganization($singleValue);
            }
            $this->_propDict['connectedOrganizations'] = $connectedOrganizations;
            return $this->_propDict['connectedOrganizations'];
        }
        return null;
    }

    /**
    * Sets the connectedOrganizations
    * Represents references to a directory or domain of another organization whose users can request access.
    *
    * @param ConnectedOrganization[] $val The connectedOrganizations
    *
    * @return EntitlementManagement
    */
    public function setConnectedOrganizations($val)
    {
        $this->_propDict["connectedOrganizations"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    * Represents the settings that control the behavior of Azure AD entitlement management.
    *
    * @return EntitlementManagementSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict) && !is_null($this->_propDict["settings"])) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\EntitlementManagementSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new EntitlementManagementSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    * Represents the settings that control the behavior of Azure AD entitlement management.
    *
    * @param EntitlementManagementSettings $val The settings
    *
    * @return EntitlementManagement
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }

}
