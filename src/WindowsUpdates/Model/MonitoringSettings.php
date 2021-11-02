<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MonitoringSettings File
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
* MonitoringSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MonitoringSettings extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the monitoringRules
    * Specifies the rules through which monitoring signals can trigger actions on the deployment. Rules are combined using 'or'.
    *
    * @return MonitoringRule[]|null The monitoringRules
    */
    public function getMonitoringRules()
    {
        if (array_key_exists("monitoringRules", $this->_propDict) && !is_null($this->_propDict["monitoringRules"])) {
       
            if (count($this->_propDict['monitoringRules']) > 0 && is_a($this->_propDict['monitoringRules'][0], 'MonitoringRule')) {
                return $this->_propDict['monitoringRules'];
            }
            $monitoringRules = [];
            foreach ($this->_propDict['monitoringRules'] as $singleValue) {
                $monitoringRules []= new MonitoringRule($singleValue);
            }
            $this->_propDict['monitoringRules'] = $monitoringRules;
            return $this->_propDict['monitoringRules'];
            }
        return null;
    }

    /**
    * Sets the monitoringRules
    * Specifies the rules through which monitoring signals can trigger actions on the deployment. Rules are combined using 'or'.
    *
    * @param MonitoringRule[] $val The value to assign to the monitoringRules
    *
    * @return MonitoringSettings The MonitoringSettings
    */
    public function setMonitoringRules($val)
    {
        $this->_propDict["monitoringRules"] = $val;
         return $this;
    }
}
