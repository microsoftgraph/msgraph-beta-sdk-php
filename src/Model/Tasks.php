<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Tasks File
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
* Tasks class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Tasks extends Entity
{

     /**
     * Gets the alltasks
    * All tasks in the users mailbox.
     *
     * @return BaseTask[]|null The alltasks
     */
    public function getAlltasks()
    {
        if (array_key_exists('alltasks', $this->_propDict) && !is_null($this->_propDict['alltasks'])) {
            $alltasks = [];
            if (count($this->_propDict['alltasks']) > 0 && is_a($this->_propDict['alltasks'][0], 'BaseTask')) {
                return $this->_propDict['alltasks'];
            }
            foreach ($this->_propDict['alltasks'] as $singleValue) {
                $alltasks []= new BaseTask($singleValue);
            }
            $this->_propDict['alltasks'] = $alltasks;
            return $this->_propDict['alltasks'];
        }
        return null;
    }

    /**
    * Sets the alltasks
    * All tasks in the users mailbox.
    *
    * @param BaseTask[] $val The alltasks
    *
    * @return Tasks
    */
    public function setAlltasks($val)
    {
        $this->_propDict["alltasks"] = $val;
        return $this;
    }


     /**
     * Gets the lists
    * The task lists in the users mailbox.
     *
     * @return BaseTaskList[]|null The lists
     */
    public function getLists()
    {
        if (array_key_exists('lists', $this->_propDict) && !is_null($this->_propDict['lists'])) {
            $lists = [];
            if (count($this->_propDict['lists']) > 0 && is_a($this->_propDict['lists'][0], 'BaseTaskList')) {
                return $this->_propDict['lists'];
            }
            foreach ($this->_propDict['lists'] as $singleValue) {
                $lists []= new BaseTaskList($singleValue);
            }
            $this->_propDict['lists'] = $lists;
            return $this->_propDict['lists'];
        }
        return null;
    }

    /**
    * Sets the lists
    * The task lists in the users mailbox.
    *
    * @param BaseTaskList[] $val The lists
    *
    * @return Tasks
    */
    public function setLists($val)
    {
        $this->_propDict["lists"] = $val;
        return $this;
    }

}
