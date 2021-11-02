<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookUser File
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
* OutlookUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutlookUser extends Entity
{

     /** 
     * Gets the masterCategories
    * A list of categories defined for the user.
     *
     * @return OutlookCategory[]|null The masterCategories
     */
    public function getMasterCategories()
    {
        if (array_key_exists('masterCategories', $this->_propDict) && !is_null($this->_propDict['masterCategories'])) {
           $masterCategories = [];
           if (count($this->_propDict['masterCategories']) > 0 && is_a($this->_propDict['masterCategories'][0], 'OutlookCategory')) {
              return $this->_propDict['masterCategories'];
           }
           foreach ($this->_propDict['masterCategories'] as $singleValue) {
              $masterCategories []= new OutlookCategory($singleValue);
           }
           $this->_propDict['masterCategories'] = $masterCategories;
           return $this->_propDict['masterCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the masterCategories
    * A list of categories defined for the user.
    *
    * @param OutlookCategory[] $val The masterCategories
    *
    * @return OutlookUser
    */
    public function setMasterCategories($val)
    {
        $this->_propDict["masterCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taskFolders
     *
     * @return OutlookTaskFolder[]|null The taskFolders
     */
    public function getTaskFolders()
    {
        if (array_key_exists('taskFolders', $this->_propDict) && !is_null($this->_propDict['taskFolders'])) {
           $taskFolders = [];
           if (count($this->_propDict['taskFolders']) > 0 && is_a($this->_propDict['taskFolders'][0], 'OutlookTaskFolder')) {
              return $this->_propDict['taskFolders'];
           }
           foreach ($this->_propDict['taskFolders'] as $singleValue) {
              $taskFolders []= new OutlookTaskFolder($singleValue);
           }
           $this->_propDict['taskFolders'] = $taskFolders;
           return $this->_propDict['taskFolders'];
        }
        return null;
    }
    
    /** 
    * Sets the taskFolders
    *
    * @param OutlookTaskFolder[] $val The taskFolders
    *
    * @return OutlookUser
    */
    public function setTaskFolders($val)
    {
        $this->_propDict["taskFolders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taskGroups
     *
     * @return OutlookTaskGroup[]|null The taskGroups
     */
    public function getTaskGroups()
    {
        if (array_key_exists('taskGroups', $this->_propDict) && !is_null($this->_propDict['taskGroups'])) {
           $taskGroups = [];
           if (count($this->_propDict['taskGroups']) > 0 && is_a($this->_propDict['taskGroups'][0], 'OutlookTaskGroup')) {
              return $this->_propDict['taskGroups'];
           }
           foreach ($this->_propDict['taskGroups'] as $singleValue) {
              $taskGroups []= new OutlookTaskGroup($singleValue);
           }
           $this->_propDict['taskGroups'] = $taskGroups;
           return $this->_propDict['taskGroups'];
        }
        return null;
    }
    
    /** 
    * Sets the taskGroups
    *
    * @param OutlookTaskGroup[] $val The taskGroups
    *
    * @return OutlookUser
    */
    public function setTaskGroups($val)
    {
        $this->_propDict["taskGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
     *
     * @return OutlookTask[]|null The tasks
     */
    public function getTasks()
    {
        if (array_key_exists('tasks', $this->_propDict) && !is_null($this->_propDict['tasks'])) {
           $tasks = [];
           if (count($this->_propDict['tasks']) > 0 && is_a($this->_propDict['tasks'][0], 'OutlookTask')) {
              return $this->_propDict['tasks'];
           }
           foreach ($this->_propDict['tasks'] as $singleValue) {
              $tasks []= new OutlookTask($singleValue);
           }
           $this->_propDict['tasks'] = $tasks;
           return $this->_propDict['tasks'];
        }
        return null;
    }
    
    /** 
    * Sets the tasks
    *
    * @param OutlookTask[] $val The tasks
    *
    * @return OutlookUser
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
