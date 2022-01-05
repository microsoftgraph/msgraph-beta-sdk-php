<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BaseTaskList File
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
* BaseTaskList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BaseTaskList extends Entity
{
    /**
    * Gets the displayName
    * The name of the task list.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The name of the task list.
    *
    * @param string $val The displayName
    *
    * @return BaseTaskList
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the extensions
    * The collection of open extensions defined for the task list. Nullable.
     *
     * @return Extension[]|null The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists('extensions', $this->_propDict) && !is_null($this->_propDict['extensions'])) {
            $extensions = [];
            if (count($this->_propDict['extensions']) > 0 && is_a($this->_propDict['extensions'][0], 'Extension')) {
                return $this->_propDict['extensions'];
            }
            foreach ($this->_propDict['extensions'] as $singleValue) {
                $extensions []= new Extension($singleValue);
            }
            $this->_propDict['extensions'] = $extensions;
            return $this->_propDict['extensions'];
        }
        return null;
    }

    /**
    * Sets the extensions
    * The collection of open extensions defined for the task list. Nullable.
    *
    * @param Extension[] $val The extensions
    *
    * @return BaseTaskList
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }


     /**
     * Gets the tasks
    * The tasks in this task list. Read-only. Nullable.
     *
     * @return BaseTask[]|null The tasks
     */
    public function getTasks()
    {
        if (array_key_exists('tasks', $this->_propDict) && !is_null($this->_propDict['tasks'])) {
            $tasks = [];
            if (count($this->_propDict['tasks']) > 0 && is_a($this->_propDict['tasks'][0], 'BaseTask')) {
                return $this->_propDict['tasks'];
            }
            foreach ($this->_propDict['tasks'] as $singleValue) {
                $tasks []= new BaseTask($singleValue);
            }
            $this->_propDict['tasks'] = $tasks;
            return $this->_propDict['tasks'];
        }
        return null;
    }

    /**
    * Sets the tasks
    * The tasks in this task list. Read-only. Nullable.
    *
    * @param BaseTask[] $val The tasks
    *
    * @return BaseTaskList
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }

}
