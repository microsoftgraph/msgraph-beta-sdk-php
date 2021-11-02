<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerRoster File
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
* PlannerRoster class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerRoster extends Entity
{

     /** 
     * Gets the members
    * Retrieves the members of the plannerRoster.
     *
     * @return PlannerRosterMember[]|null The members
     */
    public function getMembers()
    {
        if (array_key_exists('members', $this->_propDict) && !is_null($this->_propDict['members'])) {
           $members = [];
           if (count($this->_propDict['members']) > 0 && is_a($this->_propDict['members'][0], 'PlannerRosterMember')) {
              return $this->_propDict['members'];
           }
           foreach ($this->_propDict['members'] as $singleValue) {
              $members []= new PlannerRosterMember($singleValue);
           }
           $this->_propDict['members'] = $members;
           return $this->_propDict['members'];
        }
        return null;
    }
    
    /** 
    * Sets the members
    * Retrieves the members of the plannerRoster.
    *
    * @param PlannerRosterMember[] $val The members
    *
    * @return PlannerRoster
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }
    

     /** 
     * Gets the plans
    * Retrieves the plans contained by the plannerRoster.
     *
     * @return PlannerPlan[]|null The plans
     */
    public function getPlans()
    {
        if (array_key_exists('plans', $this->_propDict) && !is_null($this->_propDict['plans'])) {
           $plans = [];
           if (count($this->_propDict['plans']) > 0 && is_a($this->_propDict['plans'][0], 'PlannerPlan')) {
              return $this->_propDict['plans'];
           }
           foreach ($this->_propDict['plans'] as $singleValue) {
              $plans []= new PlannerPlan($singleValue);
           }
           $this->_propDict['plans'] = $plans;
           return $this->_propDict['plans'];
        }
        return null;
    }
    
    /** 
    * Sets the plans
    * Retrieves the plans contained by the plannerRoster.
    *
    * @param PlannerPlan[] $val The plans
    *
    * @return PlannerRoster
    */
    public function setPlans($val)
    {
        $this->_propDict["plans"] = $val;
        return $this;
    }
    
}
