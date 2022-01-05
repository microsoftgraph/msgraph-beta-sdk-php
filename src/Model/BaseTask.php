<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BaseTask File
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
* BaseTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BaseTask extends Entity
{
    /**
    * Gets the body
    * The task body that typically contains information about the task.
    *
    * @return ItemBody|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict) && !is_null($this->_propDict["body"])) {
            if (is_a($this->_propDict["body"], "\Beta\Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["body"];
            } else {
                $this->_propDict["body"] = new ItemBody($this->_propDict["body"]);
                return $this->_propDict["body"];
            }
        }
        return null;
    }

    /**
    * Sets the body
    * The task body that typically contains information about the task.
    *
    * @param ItemBody $val The body
    *
    * @return BaseTask
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }

    /**
    * Gets the bodyLastModifiedDateTime
    * The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @return \DateTime|null The bodyLastModifiedDateTime
    */
    public function getBodyLastModifiedDateTime()
    {
        if (array_key_exists("bodyLastModifiedDateTime", $this->_propDict) && !is_null($this->_propDict["bodyLastModifiedDateTime"])) {
            if (is_a($this->_propDict["bodyLastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["bodyLastModifiedDateTime"];
            } else {
                $this->_propDict["bodyLastModifiedDateTime"] = new \DateTime($this->_propDict["bodyLastModifiedDateTime"]);
                return $this->_propDict["bodyLastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the bodyLastModifiedDateTime
    * The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The bodyLastModifiedDateTime
    *
    * @return BaseTask
    */
    public function setBodyLastModifiedDateTime($val)
    {
        $this->_propDict["bodyLastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the completedDateTime
    * The date when the task was finished.
    *
    * @return \DateTime|null The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict) && !is_null($this->_propDict["completedDateTime"])) {
            if (is_a($this->_propDict["completedDateTime"], "\DateTime")) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new \DateTime($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completedDateTime
    * The date when the task was finished.
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return BaseTask
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return BaseTask
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the task.
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
    * The name of the task.
    *
    * @param string $val The displayName
    *
    * @return BaseTask
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the dueDateTime
    * The date in the specified time zone that the task is to be finished.
    *
    * @return DateTimeTimeZone|null The dueDateTime
    */
    public function getDueDateTime()
    {
        if (array_key_exists("dueDateTime", $this->_propDict) && !is_null($this->_propDict["dueDateTime"])) {
            if (is_a($this->_propDict["dueDateTime"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["dueDateTime"];
            } else {
                $this->_propDict["dueDateTime"] = new DateTimeTimeZone($this->_propDict["dueDateTime"]);
                return $this->_propDict["dueDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dueDateTime
    * The date in the specified time zone that the task is to be finished.
    *
    * @param DateTimeTimeZone $val The dueDateTime
    *
    * @return BaseTask
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the importance
    * The importance of the task. Possible values are: low, normal, high.  The possible values are: low, normal, high.
    *
    * @return Importance|null The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict) && !is_null($this->_propDict["importance"])) {
            if (is_a($this->_propDict["importance"], "\Beta\Microsoft\Graph\Model\Importance")) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new Importance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }

    /**
    * Sets the importance
    * The importance of the task. Possible values are: low, normal, high.  The possible values are: low, normal, high.
    *
    * @param Importance $val The importance
    *
    * @return BaseTask
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict) && !is_null($this->_propDict["lastModifiedDateTime"])) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return BaseTask
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the personalProperties
    * Properties that are personal to a user such as reminderDateTime.
    *
    * @return PersonalTaskProperties|null The personalProperties
    */
    public function getPersonalProperties()
    {
        if (array_key_exists("personalProperties", $this->_propDict) && !is_null($this->_propDict["personalProperties"])) {
            if (is_a($this->_propDict["personalProperties"], "\Beta\Microsoft\Graph\Model\PersonalTaskProperties")) {
                return $this->_propDict["personalProperties"];
            } else {
                $this->_propDict["personalProperties"] = new PersonalTaskProperties($this->_propDict["personalProperties"]);
                return $this->_propDict["personalProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the personalProperties
    * Properties that are personal to a user such as reminderDateTime.
    *
    * @param PersonalTaskProperties $val The personalProperties
    *
    * @return BaseTask
    */
    public function setPersonalProperties($val)
    {
        $this->_propDict["personalProperties"] = $val;
        return $this;
    }

    /**
    * Gets the recurrence
    * The recurrence pattern for the task.
    *
    * @return PatternedRecurrence|null The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict) && !is_null($this->_propDict["recurrence"])) {
            if (is_a($this->_propDict["recurrence"], "\Beta\Microsoft\Graph\Model\PatternedRecurrence")) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrence
    * The recurrence pattern for the task.
    *
    * @param PatternedRecurrence $val The recurrence
    *
    * @return BaseTask
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The date in the specified time zone when the task is to begin.
    *
    * @return DateTimeTimeZone|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict) && !is_null($this->_propDict["startDateTime"])) {
            if (is_a($this->_propDict["startDateTime"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new DateTimeTimeZone($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The date in the specified time zone when the task is to begin.
    *
    * @param DateTimeTimeZone $val The startDateTime
    *
    * @return BaseTask
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed,unknownFutureValue.
    *
    * @return TaskStatus_v2|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict) && !is_null($this->_propDict["status"])) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\TaskStatus_v2")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new TaskStatus_v2($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed,unknownFutureValue.
    *
    * @param TaskStatus_v2 $val The status
    *
    * @return BaseTask
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the checklistItems
    * A collection of checklistItems linked to a task.
     *
     * @return ChecklistItem[]|null The checklistItems
     */
    public function getChecklistItems()
    {
        if (array_key_exists('checklistItems', $this->_propDict) && !is_null($this->_propDict['checklistItems'])) {
            $checklistItems = [];
            if (count($this->_propDict['checklistItems']) > 0 && is_a($this->_propDict['checklistItems'][0], 'ChecklistItem')) {
                return $this->_propDict['checklistItems'];
            }
            foreach ($this->_propDict['checklistItems'] as $singleValue) {
                $checklistItems []= new ChecklistItem($singleValue);
            }
            $this->_propDict['checklistItems'] = $checklistItems;
            return $this->_propDict['checklistItems'];
        }
        return null;
    }

    /**
    * Sets the checklistItems
    * A collection of checklistItems linked to a task.
    *
    * @param ChecklistItem[] $val The checklistItems
    *
    * @return BaseTask
    */
    public function setChecklistItems($val)
    {
        $this->_propDict["checklistItems"] = $val;
        return $this;
    }


     /**
     * Gets the extensions
    * The collection of open extensions defined for the task .
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
    * The collection of open extensions defined for the task .
    *
    * @param Extension[] $val The extensions
    *
    * @return BaseTask
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }


     /**
     * Gets the linkedResources
    * A collection of resources linked to the task.
     *
     * @return LinkedResource_v2[]|null The linkedResources
     */
    public function getLinkedResources()
    {
        if (array_key_exists('linkedResources', $this->_propDict) && !is_null($this->_propDict['linkedResources'])) {
            $linkedResources = [];
            if (count($this->_propDict['linkedResources']) > 0 && is_a($this->_propDict['linkedResources'][0], 'LinkedResource_v2')) {
                return $this->_propDict['linkedResources'];
            }
            foreach ($this->_propDict['linkedResources'] as $singleValue) {
                $linkedResources []= new LinkedResource_v2($singleValue);
            }
            $this->_propDict['linkedResources'] = $linkedResources;
            return $this->_propDict['linkedResources'];
        }
        return null;
    }

    /**
    * Sets the linkedResources
    * A collection of resources linked to the task.
    *
    * @param LinkedResource_v2[] $val The linkedResources
    *
    * @return BaseTask
    */
    public function setLinkedResources($val)
    {
        $this->_propDict["linkedResources"] = $val;
        return $this;
    }

    /**
    * Gets the parentList
    * The list which contains the task.
    *
    * @return BaseTaskList|null The parentList
    */
    public function getParentList()
    {
        if (array_key_exists("parentList", $this->_propDict) && !is_null($this->_propDict["parentList"])) {
            if (is_a($this->_propDict["parentList"], "\Beta\Microsoft\Graph\Model\BaseTaskList")) {
                return $this->_propDict["parentList"];
            } else {
                $this->_propDict["parentList"] = new BaseTaskList($this->_propDict["parentList"]);
                return $this->_propDict["parentList"];
            }
        }
        return null;
    }

    /**
    * Sets the parentList
    * The list which contains the task.
    *
    * @param BaseTaskList $val The parentList
    *
    * @return BaseTask
    */
    public function setParentList($val)
    {
        $this->_propDict["parentList"] = $val;
        return $this;
    }

}
