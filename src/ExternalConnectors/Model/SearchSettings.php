<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;
/**
* SearchSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchSettings extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the searchResultTemplates
    * Enables the developer to define the appearance of the content and configure conditions that dictate when the template should be displayed.
    *
    * @return DisplayTemplate[]|null The searchResultTemplates
    */
    public function getSearchResultTemplates()
    {
        if (array_key_exists("searchResultTemplates", $this->_propDict) && !is_null($this->_propDict["searchResultTemplates"])) {
       
            if (count($this->_propDict['searchResultTemplates']) > 0 && is_a($this->_propDict['searchResultTemplates'][0], 'DisplayTemplate')) {
               return $this->_propDict['searchResultTemplates'];
            }
            $searchResultTemplates = [];
            foreach ($this->_propDict['searchResultTemplates'] as $singleValue) {
               $searchResultTemplates []= new DisplayTemplate($singleValue);
            }
            $this->_propDict['searchResultTemplates'] = $searchResultTemplates;
            return $this->_propDict['searchResultTemplates'];
            }
        return null;
    }

    /**
    * Sets the searchResultTemplates
    * Enables the developer to define the appearance of the content and configure conditions that dictate when the template should be displayed.
    *
    * @param DisplayTemplate[] $val The value to assign to the searchResultTemplates
    *
    * @return SearchSettings The SearchSettings
    */
    public function setSearchResultTemplates($val)
    {
        $this->_propDict["searchResultTemplates"] = $val;
         return $this;
    }
}
