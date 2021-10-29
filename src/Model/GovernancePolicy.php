<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernancePolicy File
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
* GovernancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernancePolicy extends Entity
{

    /**
    * Gets the decisionMakerCriteria
    *
    * @return GovernanceCriteria[]|null The decisionMakerCriteria
    */
    public function getDecisionMakerCriteria()
    {
        if (array_key_exists("decisionMakerCriteria", $this->_propDict) && !is_null($this->_propDict["decisionMakerCriteria"])) {
       
            if (count($this->_propDict['decisionMakerCriteria']) > 0 && is_a($this->_propDict['decisionMakerCriteria'][0], 'GovernanceCriteria')) {
               return $this->_propDict['decisionMakerCriteria'];
            }
            $decisionMakerCriteria = [];
            foreach ($this->_propDict['decisionMakerCriteria'] as $singleValue) {
               $decisionMakerCriteria []= new GovernanceCriteria($singleValue);
            }
            $this->_propDict['decisionMakerCriteria'] = $decisionMakerCriteria;
            return $this->_propDict['decisionMakerCriteria'];
            }
        return null;
    }

    /**
    * Sets the decisionMakerCriteria
    *
    * @param GovernanceCriteria[] $val The value to assign to the decisionMakerCriteria
    *
    * @return GovernancePolicy The GovernancePolicy
    */
    public function setDecisionMakerCriteria($val)
    {
        $this->_propDict["decisionMakerCriteria"] = $val;
         return $this;
    }

    /**
    * Gets the notificationPolicy
    *
    * @return GovernanceNotificationPolicy|null The notificationPolicy
    */
    public function getNotificationPolicy()
    {
        if (array_key_exists("notificationPolicy", $this->_propDict) && !is_null($this->_propDict["notificationPolicy"])) {
     
            if (is_a($this->_propDict["notificationPolicy"], "\Beta\Microsoft\Graph\Model\GovernanceNotificationPolicy")) {
                return $this->_propDict["notificationPolicy"];
            } else {
                $this->_propDict["notificationPolicy"] = new GovernanceNotificationPolicy($this->_propDict["notificationPolicy"]);
                return $this->_propDict["notificationPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationPolicy
    *
    * @param GovernanceNotificationPolicy $val The value to assign to the notificationPolicy
    *
    * @return GovernancePolicy The GovernancePolicy
    */
    public function setNotificationPolicy($val)
    {
        $this->_propDict["notificationPolicy"] = $val;
         return $this;
    }
}
