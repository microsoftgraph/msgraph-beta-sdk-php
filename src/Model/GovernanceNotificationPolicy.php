<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceNotificationPolicy File
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
* GovernanceNotificationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceNotificationPolicy extends Entity
{
    /**
    * Gets the enabledTemplateTypes
    *
    * @return string|null The enabledTemplateTypes
    */
    public function getEnabledTemplateTypes()
    {
        if (array_key_exists("enabledTemplateTypes", $this->_propDict)) {
            return $this->_propDict["enabledTemplateTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabledTemplateTypes
    *
    * @param string[] $val The value of the enabledTemplateTypes
    *
    * @return GovernanceNotificationPolicy
    */
    public function setEnabledTemplateTypes($val)
    {
        $this->_propDict["enabledTemplateTypes"] = $val;
        return $this;
    }

    /**
    * Gets the notificationTemplates
    *
    * @return GovernanceNotificationTemplate[]|null The notificationTemplates
    */
    public function getNotificationTemplates()
    {
        if (array_key_exists("notificationTemplates", $this->_propDict) && !is_null($this->_propDict["notificationTemplates"])) {
       
            if (count($this->_propDict['notificationTemplates']) > 0 && is_a($this->_propDict['notificationTemplates'][0], 'GovernanceNotificationTemplate')) {
                return $this->_propDict['notificationTemplates'];
            }
            $notificationTemplates = [];
            foreach ($this->_propDict['notificationTemplates'] as $singleValue) {
                $notificationTemplates []= new GovernanceNotificationTemplate($singleValue);
            }
            $this->_propDict['notificationTemplates'] = $notificationTemplates;
            return $this->_propDict['notificationTemplates'];
            }
        return null;
    }

    /**
    * Sets the notificationTemplates
    *
    * @param GovernanceNotificationTemplate[] $val The value to assign to the notificationTemplates
    *
    * @return GovernanceNotificationPolicy The GovernanceNotificationPolicy
    */
    public function setNotificationTemplates($val)
    {
        $this->_propDict["notificationTemplates"] = $val;
         return $this;
    }
}
