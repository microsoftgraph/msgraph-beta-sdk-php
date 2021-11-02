<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SafeguardSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* SafeguardSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SafeguardSettings extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the disabledSafeguardProfiles
    *
    * @return SafeguardProfile[]|null The disabledSafeguardProfiles
    */
    public function getDisabledSafeguardProfiles()
    {
        if (array_key_exists("disabledSafeguardProfiles", $this->_propDict) && !is_null($this->_propDict["disabledSafeguardProfiles"])) {
       
            if (count($this->_propDict['disabledSafeguardProfiles']) > 0 && is_a($this->_propDict['disabledSafeguardProfiles'][0], 'SafeguardProfile')) {
                return $this->_propDict['disabledSafeguardProfiles'];
            }
            $disabledSafeguardProfiles = [];
            foreach ($this->_propDict['disabledSafeguardProfiles'] as $singleValue) {
                $disabledSafeguardProfiles []= new SafeguardProfile($singleValue);
            }
            $this->_propDict['disabledSafeguardProfiles'] = $disabledSafeguardProfiles;
            return $this->_propDict['disabledSafeguardProfiles'];
            }
        return null;
    }

    /**
    * Sets the disabledSafeguardProfiles
    *
    * @param SafeguardProfile[] $val The value to assign to the disabledSafeguardProfiles
    *
    * @return SafeguardSettings The SafeguardSettings
    */
    public function setDisabledSafeguardProfiles($val)
    {
        $this->_propDict["disabledSafeguardProfiles"] = $val;
         return $this;
    }
}
