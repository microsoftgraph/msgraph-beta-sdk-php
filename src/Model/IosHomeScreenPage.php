<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosHomeScreenPage File
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
* IosHomeScreenPage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosHomeScreenPage extends Entity
{
    /**
    * Gets the displayName
    * Name of the page
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
    * Name of the page
    *
    * @param string $val The value of the displayName
    *
    * @return IosHomeScreenPage
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the icons
    * A list of apps, folders, and web clips to appear on a page. This collection can contain a maximum of 500 elements.
    *
    * @return IosHomeScreenItem[]|null The icons
    */
    public function getIcons()
    {
        if (array_key_exists("icons", $this->_propDict) && !is_null($this->_propDict["icons"])) {
       
            if (count($this->_propDict['icons']) > 0 && is_a($this->_propDict['icons'][0], 'IosHomeScreenItem')) {
               return $this->_propDict['icons'];
            }
            $icons = [];
            foreach ($this->_propDict['icons'] as $singleValue) {
               $icons []= new IosHomeScreenItem($singleValue);
            }
            $this->_propDict['icons'] = $icons;
            return $this->_propDict['icons'];
            }
        return null;
    }

    /**
    * Sets the icons
    * A list of apps, folders, and web clips to appear on a page. This collection can contain a maximum of 500 elements.
    *
    * @param IosHomeScreenItem[] $val The value to assign to the icons
    *
    * @return IosHomeScreenPage The IosHomeScreenPage
    */
    public function setIcons($val)
    {
        $this->_propDict["icons"] = $val;
         return $this;
    }
}
