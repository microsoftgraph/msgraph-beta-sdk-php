<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationTrainingUserCoverage File
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
* AttackSimulationTrainingUserCoverage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationTrainingUserCoverage extends Entity
{

    /**
    * Gets the attackSimulationUser
    *
    * @return AttackSimulationUser|null The attackSimulationUser
    */
    public function getAttackSimulationUser()
    {
        if (array_key_exists("attackSimulationUser", $this->_propDict) && !is_null($this->_propDict["attackSimulationUser"])) {
     
            if (is_a($this->_propDict["attackSimulationUser"], "\Beta\Microsoft\Graph\Model\AttackSimulationUser")) {
                return $this->_propDict["attackSimulationUser"];
            } else {
                $this->_propDict["attackSimulationUser"] = new AttackSimulationUser($this->_propDict["attackSimulationUser"]);
                return $this->_propDict["attackSimulationUser"];
            }
        }
        return null;
    }

    /**
    * Sets the attackSimulationUser
    *
    * @param AttackSimulationUser $val The value to assign to the attackSimulationUser
    *
    * @return AttackSimulationTrainingUserCoverage The AttackSimulationTrainingUserCoverage
    */
    public function setAttackSimulationUser($val)
    {
        $this->_propDict["attackSimulationUser"] = $val;
         return $this;
    }

    /**
    * Gets the userTrainings
    *
    * @return UserTrainingStatusInfo[]|null The userTrainings
    */
    public function getUserTrainings()
    {
        if (array_key_exists("userTrainings", $this->_propDict) && !is_null($this->_propDict["userTrainings"])) {
       
            if (count($this->_propDict['userTrainings']) > 0 && is_a($this->_propDict['userTrainings'][0], 'UserTrainingStatusInfo')) {
               return $this->_propDict['userTrainings'];
            }
            $userTrainings = [];
            foreach ($this->_propDict['userTrainings'] as $singleValue) {
               $userTrainings []= new UserTrainingStatusInfo($singleValue);
            }
            $this->_propDict['userTrainings'] = $userTrainings;
            return $this->_propDict['userTrainings'];
            }
        return null;
    }

    /**
    * Sets the userTrainings
    *
    * @param UserTrainingStatusInfo[] $val The value to assign to the userTrainings
    *
    * @return AttackSimulationTrainingUserCoverage The AttackSimulationTrainingUserCoverage
    */
    public function setUserTrainings($val)
    {
        $this->_propDict["userTrainings"] = $val;
         return $this;
    }
}
