<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationLinkedObjects File
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
* SynchronizationLinkedObjects class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationLinkedObjects extends Entity
{

    /**
    * Gets the manager
    *
    * @return SynchronizationJobSubject|null The manager
    */
    public function getManager()
    {
        if (array_key_exists("manager", $this->_propDict) && !is_null($this->_propDict["manager"])) {
     
            if (is_a($this->_propDict["manager"], "\Beta\Microsoft\Graph\Model\SynchronizationJobSubject")) {
                return $this->_propDict["manager"];
            } else {
                $this->_propDict["manager"] = new SynchronizationJobSubject($this->_propDict["manager"]);
                return $this->_propDict["manager"];
            }
        }
        return null;
    }

    /**
    * Sets the manager
    *
    * @param SynchronizationJobSubject $val The value to assign to the manager
    *
    * @return SynchronizationLinkedObjects The SynchronizationLinkedObjects
    */
    public function setManager($val)
    {
        $this->_propDict["manager"] = $val;
         return $this;
    }

    /**
    * Gets the members
    *
    * @return SynchronizationJobSubject[]|null The members
    */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict) && !is_null($this->_propDict["members"])) {
       
            if (count($this->_propDict['members']) > 0 && is_a($this->_propDict['members'][0], 'SynchronizationJobSubject')) {
                return $this->_propDict['members'];
            }
            $members = [];
            foreach ($this->_propDict['members'] as $singleValue) {
                $members []= new SynchronizationJobSubject($singleValue);
            }
            $this->_propDict['members'] = $members;
            return $this->_propDict['members'];
            }
        return null;
    }

    /**
    * Sets the members
    *
    * @param SynchronizationJobSubject[] $val The value to assign to the members
    *
    * @return SynchronizationLinkedObjects The SynchronizationLinkedObjects
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
         return $this;
    }

    /**
    * Gets the owners
    *
    * @return SynchronizationJobSubject[]|null The owners
    */
    public function getOwners()
    {
        if (array_key_exists("owners", $this->_propDict) && !is_null($this->_propDict["owners"])) {
       
            if (count($this->_propDict['owners']) > 0 && is_a($this->_propDict['owners'][0], 'SynchronizationJobSubject')) {
                return $this->_propDict['owners'];
            }
            $owners = [];
            foreach ($this->_propDict['owners'] as $singleValue) {
                $owners []= new SynchronizationJobSubject($singleValue);
            }
            $this->_propDict['owners'] = $owners;
            return $this->_propDict['owners'];
            }
        return null;
    }

    /**
    * Sets the owners
    *
    * @param SynchronizationJobSubject[] $val The value to assign to the owners
    *
    * @return SynchronizationLinkedObjects The SynchronizationLinkedObjects
    */
    public function setOwners($val)
    {
        $this->_propDict["owners"] = $val;
         return $this;
    }
}
