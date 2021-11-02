<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerUser File
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
* PlannerUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerUser extends PlannerDelta
{
    /**
    * Gets the favoritePlanReferences
    * A collection containing the references to the plans that the user has marked as favorites.
    *
    * @return PlannerFavoritePlanReferenceCollection|null The favoritePlanReferences
    */
    public function getFavoritePlanReferences()
    {
        if (array_key_exists("favoritePlanReferences", $this->_propDict) && !is_null($this->_propDict["favoritePlanReferences"])) {
            if (is_a($this->_propDict["favoritePlanReferences"], "\Beta\Microsoft\Graph\Model\PlannerFavoritePlanReferenceCollection")) {
                return $this->_propDict["favoritePlanReferences"];
            } else {
                $this->_propDict["favoritePlanReferences"] = new PlannerFavoritePlanReferenceCollection($this->_propDict["favoritePlanReferences"]);
                return $this->_propDict["favoritePlanReferences"];
            }
        }
        return null;
    }
    
    /**
    * Sets the favoritePlanReferences
    * A collection containing the references to the plans that the user has marked as favorites.
    *
    * @param PlannerFavoritePlanReferenceCollection $val The favoritePlanReferences
    *
    * @return PlannerUser
    */
    public function setFavoritePlanReferences($val)
    {
        $this->_propDict["favoritePlanReferences"] = $val;
        return $this;
    }
    
    /**
    * Gets the recentPlanReferences
    * A collection containing references to the plans that were viewed recently by the user in apps that support recent plans.
    *
    * @return PlannerRecentPlanReferenceCollection|null The recentPlanReferences
    */
    public function getRecentPlanReferences()
    {
        if (array_key_exists("recentPlanReferences", $this->_propDict) && !is_null($this->_propDict["recentPlanReferences"])) {
            if (is_a($this->_propDict["recentPlanReferences"], "\Beta\Microsoft\Graph\Model\PlannerRecentPlanReferenceCollection")) {
                return $this->_propDict["recentPlanReferences"];
            } else {
                $this->_propDict["recentPlanReferences"] = new PlannerRecentPlanReferenceCollection($this->_propDict["recentPlanReferences"]);
                return $this->_propDict["recentPlanReferences"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recentPlanReferences
    * A collection containing references to the plans that were viewed recently by the user in apps that support recent plans.
    *
    * @param PlannerRecentPlanReferenceCollection $val The recentPlanReferences
    *
    * @return PlannerUser
    */
    public function setRecentPlanReferences($val)
    {
        $this->_propDict["recentPlanReferences"] = $val;
        return $this;
    }
    

     /** 
     * Gets the all
     *
     * @return PlannerDelta[]|null The all
     */
    public function getAll()
    {
        if (array_key_exists('all', $this->_propDict) && !is_null($this->_propDict['all'])) {
           $all = [];
           if (count($this->_propDict['all']) > 0 && is_a($this->_propDict['all'][0], 'PlannerDelta')) {
              return $this->_propDict['all'];
           }
           foreach ($this->_propDict['all'] as $singleValue) {
              $all []= new PlannerDelta($singleValue);
           }
           $this->_propDict['all'] = $all;
           return $this->_propDict['all'];
        }
        return null;
    }
    
    /** 
    * Sets the all
    *
    * @param PlannerDelta[] $val The all
    *
    * @return PlannerUser
    */
    public function setAll($val)
    {
        $this->_propDict["all"] = $val;
        return $this;
    }
    

     /** 
     * Gets the favoritePlans
    * Read-only. Nullable. Returns the plannerPlans that the user marked as favorites.
     *
     * @return PlannerPlan[]|null The favoritePlans
     */
    public function getFavoritePlans()
    {
        if (array_key_exists('favoritePlans', $this->_propDict) && !is_null($this->_propDict['favoritePlans'])) {
           $favoritePlans = [];
           if (count($this->_propDict['favoritePlans']) > 0 && is_a($this->_propDict['favoritePlans'][0], 'PlannerPlan')) {
              return $this->_propDict['favoritePlans'];
           }
           foreach ($this->_propDict['favoritePlans'] as $singleValue) {
              $favoritePlans []= new PlannerPlan($singleValue);
           }
           $this->_propDict['favoritePlans'] = $favoritePlans;
           return $this->_propDict['favoritePlans'];
        }
        return null;
    }
    
    /** 
    * Sets the favoritePlans
    * Read-only. Nullable. Returns the plannerPlans that the user marked as favorites.
    *
    * @param PlannerPlan[] $val The favoritePlans
    *
    * @return PlannerUser
    */
    public function setFavoritePlans($val)
    {
        $this->_propDict["favoritePlans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the plans
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
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
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
    *
    * @param PlannerPlan[] $val The plans
    *
    * @return PlannerUser
    */
    public function setPlans($val)
    {
        $this->_propDict["plans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the recentPlans
    * Read-only. Nullable. Returns the plannerPlans that have been recently viewed by the user in apps that support recent plans.
     *
     * @return PlannerPlan[]|null The recentPlans
     */
    public function getRecentPlans()
    {
        if (array_key_exists('recentPlans', $this->_propDict) && !is_null($this->_propDict['recentPlans'])) {
           $recentPlans = [];
           if (count($this->_propDict['recentPlans']) > 0 && is_a($this->_propDict['recentPlans'][0], 'PlannerPlan')) {
              return $this->_propDict['recentPlans'];
           }
           foreach ($this->_propDict['recentPlans'] as $singleValue) {
              $recentPlans []= new PlannerPlan($singleValue);
           }
           $this->_propDict['recentPlans'] = $recentPlans;
           return $this->_propDict['recentPlans'];
        }
        return null;
    }
    
    /** 
    * Sets the recentPlans
    * Read-only. Nullable. Returns the plannerPlans that have been recently viewed by the user in apps that support recent plans.
    *
    * @param PlannerPlan[] $val The recentPlans
    *
    * @return PlannerUser
    */
    public function setRecentPlans($val)
    {
        $this->_propDict["recentPlans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rosterPlans
    * Read-only. Nullable. Returns the plannerPlans contained by the plannerRosters the user is a member.
     *
     * @return PlannerPlan[]|null The rosterPlans
     */
    public function getRosterPlans()
    {
        if (array_key_exists('rosterPlans', $this->_propDict) && !is_null($this->_propDict['rosterPlans'])) {
           $rosterPlans = [];
           if (count($this->_propDict['rosterPlans']) > 0 && is_a($this->_propDict['rosterPlans'][0], 'PlannerPlan')) {
              return $this->_propDict['rosterPlans'];
           }
           foreach ($this->_propDict['rosterPlans'] as $singleValue) {
              $rosterPlans []= new PlannerPlan($singleValue);
           }
           $this->_propDict['rosterPlans'] = $rosterPlans;
           return $this->_propDict['rosterPlans'];
        }
        return null;
    }
    
    /** 
    * Sets the rosterPlans
    * Read-only. Nullable. Returns the plannerPlans contained by the plannerRosters the user is a member.
    *
    * @param PlannerPlan[] $val The rosterPlans
    *
    * @return PlannerUser
    */
    public function setRosterPlans($val)
    {
        $this->_propDict["rosterPlans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * Read-only. Nullable. Returns the plannerPlans shared with the user.
     *
     * @return PlannerTask[]|null The tasks
     */
    public function getTasks()
    {
        if (array_key_exists('tasks', $this->_propDict) && !is_null($this->_propDict['tasks'])) {
           $tasks = [];
           if (count($this->_propDict['tasks']) > 0 && is_a($this->_propDict['tasks'][0], 'PlannerTask')) {
              return $this->_propDict['tasks'];
           }
           foreach ($this->_propDict['tasks'] as $singleValue) {
              $tasks []= new PlannerTask($singleValue);
           }
           $this->_propDict['tasks'] = $tasks;
           return $this->_propDict['tasks'];
        }
        return null;
    }
    
    /** 
    * Sets the tasks
    * Read-only. Nullable. Returns the plannerPlans shared with the user.
    *
    * @param PlannerTask[] $val The tasks
    *
    * @return PlannerUser
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
