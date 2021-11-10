<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantGroup File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* TenantGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantGroup extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the allTenantsIncluded
    * A flag indicating whether all managed tenant are included in the tenant group. Required. Read-only.
    *
    * @return bool|null The allTenantsIncluded
    */
    public function getAllTenantsIncluded()
    {
        if (array_key_exists("allTenantsIncluded", $this->_propDict)) {
            return $this->_propDict["allTenantsIncluded"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allTenantsIncluded
    * A flag indicating whether all managed tenant are included in the tenant group. Required. Read-only.
    *
    * @param bool $val The allTenantsIncluded
    *
    * @return TenantGroup
    */
    public function setAllTenantsIncluded($val)
    {
        $this->_propDict["allTenantsIncluded"] = boolval($val);
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the tenant group. Optional. Read-only.
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
    * The display name for the tenant group. Optional. Read-only.
    *
    * @param string $val The displayName
    *
    * @return TenantGroup
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the managementActions
    * The collection of management action associated with the tenant group. Optional. Read-only.
     *
     * @return ManagementActionInfo[]|null The managementActions
     */
    public function getManagementActions()
    {
        if (array_key_exists('managementActions', $this->_propDict) && !is_null($this->_propDict['managementActions'])) {
            $managementActions = [];
            if (count($this->_propDict['managementActions']) > 0 && is_a($this->_propDict['managementActions'][0], 'ManagementActionInfo')) {
                return $this->_propDict['managementActions'];
            }
            foreach ($this->_propDict['managementActions'] as $singleValue) {
                $managementActions []= new ManagementActionInfo($singleValue);
            }
            $this->_propDict['managementActions'] = $managementActions;
            return $this->_propDict['managementActions'];
        }
        return null;
    }

    /**
    * Sets the managementActions
    * The collection of management action associated with the tenant group. Optional. Read-only.
    *
    * @param ManagementActionInfo[] $val The managementActions
    *
    * @return TenantGroup
    */
    public function setManagementActions($val)
    {
        $this->_propDict["managementActions"] = $val;
        return $this;
    }


     /**
     * Gets the managementIntents
    * The collection of management intents associated with the tenant group. Optional. Read-only.
     *
     * @return ManagementIntentInfo[]|null The managementIntents
     */
    public function getManagementIntents()
    {
        if (array_key_exists('managementIntents', $this->_propDict) && !is_null($this->_propDict['managementIntents'])) {
            $managementIntents = [];
            if (count($this->_propDict['managementIntents']) > 0 && is_a($this->_propDict['managementIntents'][0], 'ManagementIntentInfo')) {
                return $this->_propDict['managementIntents'];
            }
            foreach ($this->_propDict['managementIntents'] as $singleValue) {
                $managementIntents []= new ManagementIntentInfo($singleValue);
            }
            $this->_propDict['managementIntents'] = $managementIntents;
            return $this->_propDict['managementIntents'];
        }
        return null;
    }

    /**
    * Sets the managementIntents
    * The collection of management intents associated with the tenant group. Optional. Read-only.
    *
    * @param ManagementIntentInfo[] $val The managementIntents
    *
    * @return TenantGroup
    */
    public function setManagementIntents($val)
    {
        $this->_propDict["managementIntents"] = $val;
        return $this;
    }

    /**
    * Gets the tenantIds
    * The collection of managed tenant identifiers include in the tenant group. Optional. Read-only.
    *
    * @return string|null The tenantIds
    */
    public function getTenantIds()
    {
        if (array_key_exists("tenantIds", $this->_propDict)) {
            return $this->_propDict["tenantIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantIds
    * The collection of managed tenant identifiers include in the tenant group. Optional. Read-only.
    *
    * @param string $val The tenantIds
    *
    * @return TenantGroup
    */
    public function setTenantIds($val)
    {
        $this->_propDict["tenantIds"] = $val;
        return $this;
    }

}
