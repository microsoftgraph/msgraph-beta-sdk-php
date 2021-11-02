<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookTaskFolder File
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
* OutlookTaskFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutlookTaskFolder extends Entity
{
    /**
    * Gets the changeKey
    * The version of the task folder.
    *
    * @return string|null The changeKey
    */
    public function getChangeKey()
    {
        if (array_key_exists("changeKey", $this->_propDict)) {
            return $this->_propDict["changeKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the changeKey
    * The version of the task folder.
    *
    * @param string $val The changeKey
    *
    * @return OutlookTaskFolder
    */
    public function setChangeKey($val)
    {
        $this->_propDict["changeKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefaultFolder
    * True if the folder is the default task folder.
    *
    * @return bool|null The isDefaultFolder
    */
    public function getIsDefaultFolder()
    {
        if (array_key_exists("isDefaultFolder", $this->_propDict)) {
            return $this->_propDict["isDefaultFolder"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefaultFolder
    * True if the folder is the default task folder.
    *
    * @param bool $val The isDefaultFolder
    *
    * @return OutlookTaskFolder
    */
    public function setIsDefaultFolder($val)
    {
        $this->_propDict["isDefaultFolder"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the name
    * The name of the task folder.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * The name of the task folder.
    *
    * @param string $val The name
    *
    * @return OutlookTaskFolder
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentGroupKey
    * The unique GUID identifier for the task folder's parent group.
    *
    * @return string|null The parentGroupKey
    */
    public function getParentGroupKey()
    {
        if (array_key_exists("parentGroupKey", $this->_propDict)) {
            return $this->_propDict["parentGroupKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentGroupKey
    * The unique GUID identifier for the task folder's parent group.
    *
    * @param string $val The parentGroupKey
    *
    * @return OutlookTaskFolder
    */
    public function setParentGroupKey($val)
    {
        $this->_propDict["parentGroupKey"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the task folder. Read-only. Nullable.
     *
     * @return MultiValueLegacyExtendedProperty[]|null The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists('multiValueExtendedProperties', $this->_propDict) && !is_null($this->_propDict['multiValueExtendedProperties'])) {
           $multiValueExtendedProperties = [];
           if (count($this->_propDict['multiValueExtendedProperties']) > 0 && is_a($this->_propDict['multiValueExtendedProperties'][0], 'MultiValueLegacyExtendedProperty')) {
              return $this->_propDict['multiValueExtendedProperties'];
           }
           foreach ($this->_propDict['multiValueExtendedProperties'] as $singleValue) {
              $multiValueExtendedProperties []= new MultiValueLegacyExtendedProperty($singleValue);
           }
           $this->_propDict['multiValueExtendedProperties'] = $multiValueExtendedProperties;
           return $this->_propDict['multiValueExtendedProperties'];
        }
        return null;
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the task folder. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty[] $val The multiValueExtendedProperties
    *
    * @return OutlookTaskFolder
    */
    public function setMultiValueExtendedProperties($val)
    {
        $this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the task folder. Read-only. Nullable.
     *
     * @return SingleValueLegacyExtendedProperty[]|null The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists('singleValueExtendedProperties', $this->_propDict) && !is_null($this->_propDict['singleValueExtendedProperties'])) {
           $singleValueExtendedProperties = [];
           if (count($this->_propDict['singleValueExtendedProperties']) > 0 && is_a($this->_propDict['singleValueExtendedProperties'][0], 'SingleValueLegacyExtendedProperty')) {
              return $this->_propDict['singleValueExtendedProperties'];
           }
           foreach ($this->_propDict['singleValueExtendedProperties'] as $singleValue) {
              $singleValueExtendedProperties []= new SingleValueLegacyExtendedProperty($singleValue);
           }
           $this->_propDict['singleValueExtendedProperties'] = $singleValueExtendedProperties;
           return $this->_propDict['singleValueExtendedProperties'];
        }
        return null;
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the task folder. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty[] $val The singleValueExtendedProperties
    *
    * @return OutlookTaskFolder
    */
    public function setSingleValueExtendedProperties($val)
    {
        $this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * The tasks in this task folder. Read-only. Nullable.
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
    * The tasks in this task folder. Read-only. Nullable.
    *
    * @param OutlookTask[] $val The tasks
    *
    * @return OutlookTaskFolder
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
