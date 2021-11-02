<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageCatalog File
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
* AccessPackageCatalog class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageCatalog extends Entity
{
    /**
    * Gets the catalogStatus
    * Has the value Published if the access packages are available for management.
    *
    * @return string|null The catalogStatus
    */
    public function getCatalogStatus()
    {
        if (array_key_exists("catalogStatus", $this->_propDict)) {
            return $this->_propDict["catalogStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the catalogStatus
    * Has the value Published if the access packages are available for management.
    *
    * @param string $val The catalogStatus
    *
    * @return AccessPackageCatalog
    */
    public function setCatalogStatus($val)
    {
        $this->_propDict["catalogStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the catalogType
    * One of UserManaged or ServiceDefault.
    *
    * @return string|null The catalogType
    */
    public function getCatalogType()
    {
        if (array_key_exists("catalogType", $this->_propDict)) {
            return $this->_propDict["catalogType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the catalogType
    * One of UserManaged or ServiceDefault.
    *
    * @param string $val The catalogType
    *
    * @return AccessPackageCatalog
    */
    public function setCatalogType($val)
    {
        $this->_propDict["catalogType"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * UPN of the user who created this resource. Read-only.
    *
    * @return string|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            return $this->_propDict["createdBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the createdBy
    * UPN of the user who created this resource. Read-only.
    *
    * @param string $val The createdBy
    *
    * @return AccessPackageCatalog
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessPackageCatalog
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description of the access package catalog.
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
    * The description of the access package catalog.
    *
    * @param string $val The description
    *
    * @return AccessPackageCatalog
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of the access package catalog.
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
    * The display name of the access package catalog.
    *
    * @param string $val The displayName
    *
    * @return AccessPackageCatalog
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isExternallyVisible
    * Whether the access packages in this catalog can be requested by users outside of the tenant.
    *
    * @return bool|null The isExternallyVisible
    */
    public function getIsExternallyVisible()
    {
        if (array_key_exists("isExternallyVisible", $this->_propDict)) {
            return $this->_propDict["isExternallyVisible"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isExternallyVisible
    * Whether the access packages in this catalog can be requested by users outside of the tenant.
    *
    * @param bool $val The isExternallyVisible
    *
    * @return AccessPackageCatalog
    */
    public function setIsExternallyVisible($val)
    {
        $this->_propDict["isExternallyVisible"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the modifiedBy
    * The UPN of the user who last modified this resource. Read-only.
    *
    * @return string|null The modifiedBy
    */
    public function getModifiedBy()
    {
        if (array_key_exists("modifiedBy", $this->_propDict)) {
            return $this->_propDict["modifiedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the modifiedBy
    * The UPN of the user who last modified this resource. Read-only.
    *
    * @param string $val The modifiedBy
    *
    * @return AccessPackageCatalog
    */
    public function setModifiedBy($val)
    {
        $this->_propDict["modifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return AccessPackageCatalog
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResourceRoles
     *
     * @return AccessPackageResourceRole[]|null The accessPackageResourceRoles
     */
    public function getAccessPackageResourceRoles()
    {
        if (array_key_exists('accessPackageResourceRoles', $this->_propDict) && !is_null($this->_propDict['accessPackageResourceRoles'])) {
           $accessPackageResourceRoles = [];
           if (count($this->_propDict['accessPackageResourceRoles']) > 0 && is_a($this->_propDict['accessPackageResourceRoles'][0], 'AccessPackageResourceRole')) {
              return $this->_propDict['accessPackageResourceRoles'];
           }
           foreach ($this->_propDict['accessPackageResourceRoles'] as $singleValue) {
              $accessPackageResourceRoles []= new AccessPackageResourceRole($singleValue);
           }
           $this->_propDict['accessPackageResourceRoles'] = $accessPackageResourceRoles;
           return $this->_propDict['accessPackageResourceRoles'];
        }
        return null;
    }
    
    /** 
    * Sets the accessPackageResourceRoles
    *
    * @param AccessPackageResourceRole[] $val The accessPackageResourceRoles
    *
    * @return AccessPackageCatalog
    */
    public function setAccessPackageResourceRoles($val)
    {
        $this->_propDict["accessPackageResourceRoles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResources
    * Read-only. Nullable.
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
    * Read-only. Nullable.
    *
    * @param AccessPackageResource[] $val The accessPackageResources
    *
    * @return AccessPackageCatalog
    */
    public function setAccessPackageResources($val)
    {
        $this->_propDict["accessPackageResources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResourceScopes
     *
     * @return AccessPackageResourceScope[]|null The accessPackageResourceScopes
     */
    public function getAccessPackageResourceScopes()
    {
        if (array_key_exists('accessPackageResourceScopes', $this->_propDict) && !is_null($this->_propDict['accessPackageResourceScopes'])) {
           $accessPackageResourceScopes = [];
           if (count($this->_propDict['accessPackageResourceScopes']) > 0 && is_a($this->_propDict['accessPackageResourceScopes'][0], 'AccessPackageResourceScope')) {
              return $this->_propDict['accessPackageResourceScopes'];
           }
           foreach ($this->_propDict['accessPackageResourceScopes'] as $singleValue) {
              $accessPackageResourceScopes []= new AccessPackageResourceScope($singleValue);
           }
           $this->_propDict['accessPackageResourceScopes'] = $accessPackageResourceScopes;
           return $this->_propDict['accessPackageResourceScopes'];
        }
        return null;
    }
    
    /** 
    * Sets the accessPackageResourceScopes
    *
    * @param AccessPackageResourceScope[] $val The accessPackageResourceScopes
    *
    * @return AccessPackageCatalog
    */
    public function setAccessPackageResourceScopes($val)
    {
        $this->_propDict["accessPackageResourceScopes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackages
    * The access packages in this catalog. Read-only. Nullable.
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
    * The access packages in this catalog. Read-only. Nullable.
    *
    * @param AccessPackage[] $val The accessPackages
    *
    * @return AccessPackageCatalog
    */
    public function setAccessPackages($val)
    {
        $this->_propDict["accessPackages"] = $val;
        return $this;
    }
    
}
