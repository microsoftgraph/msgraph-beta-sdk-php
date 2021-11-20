<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplateCollection File
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
* ManagementTemplateCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplateCollection extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the description
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
    *
    * @param string $val The description
    *
    * @return ManagementTemplateCollection
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

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
    * @return ManagementTemplateCollection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the managementTemplates
     *
     * @return ManagementTemplate[]|null The managementTemplates
     */
    public function getManagementTemplates()
    {
        if (array_key_exists('managementTemplates', $this->_propDict) && !is_null($this->_propDict['managementTemplates'])) {
            $managementTemplates = [];
            if (count($this->_propDict['managementTemplates']) > 0 && is_a($this->_propDict['managementTemplates'][0], 'ManagementTemplate')) {
                return $this->_propDict['managementTemplates'];
            }
            foreach ($this->_propDict['managementTemplates'] as $singleValue) {
                $managementTemplates []= new ManagementTemplate($singleValue);
            }
            $this->_propDict['managementTemplates'] = $managementTemplates;
            return $this->_propDict['managementTemplates'];
        }
        return null;
    }

    /**
    * Sets the managementTemplates
    *
    * @param ManagementTemplate[] $val The managementTemplates
    *
    * @return ManagementTemplateCollection
    */
    public function setManagementTemplates($val)
    {
        $this->_propDict["managementTemplates"] = $val;
        return $this;
    }

}
