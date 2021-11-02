<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmbeddedSIMActivationCodePool File
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
* EmbeddedSIMActivationCodePool class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmbeddedSIMActivationCodePool extends Entity
{
    /**
    * Gets the activationCodeCount
    * The total count of activation codes which belong to this pool.
    *
    * @return int|null The activationCodeCount
    */
    public function getActivationCodeCount()
    {
        if (array_key_exists("activationCodeCount", $this->_propDict)) {
            return $this->_propDict["activationCodeCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activationCodeCount
    * The total count of activation codes which belong to this pool.
    *
    * @param int $val The activationCodeCount
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setActivationCodeCount($val)
    {
        $this->_propDict["activationCodeCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the activationCodes
    * The activation codes which belong to this pool. This navigation property is used to post activation codes to Intune but cannot be used to read activation codes from Intune.
     *
     * @return EmbeddedSIMActivationCode[]|null The activationCodes
     */
    public function getActivationCodes()
    {
        if (array_key_exists('activationCodes', $this->_propDict) && !is_null($this->_propDict['activationCodes'])) {
           $activationCodes = [];
           if (count($this->_propDict['activationCodes']) > 0 && is_a($this->_propDict['activationCodes'][0], 'EmbeddedSIMActivationCode')) {
              return $this->_propDict['activationCodes'];
           }
           foreach ($this->_propDict['activationCodes'] as $singleValue) {
              $activationCodes []= new EmbeddedSIMActivationCode($singleValue);
           }
           $this->_propDict['activationCodes'] = $activationCodes;
           return $this->_propDict['activationCodes'];
        }
        return null;
    }
    
    /** 
    * Sets the activationCodes
    * The activation codes which belong to this pool. This navigation property is used to post activation codes to Intune but cannot be used to read activation codes from Intune.
    *
    * @param EmbeddedSIMActivationCode[] $val The activationCodes
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setActivationCodes($val)
    {
        $this->_propDict["activationCodes"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The time the embedded SIM activation code pool was created. Generated service side.
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
    * The time the embedded SIM activation code pool was created. Generated service side.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The admin defined name of the embedded SIM activation code pool.
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
    * The admin defined name of the embedded SIM activation code pool.
    *
    * @param string $val The displayName
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    * The time the embedded SIM activation code pool was last modified. Updated service side.
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict) && !is_null($this->_propDict["modifiedDateTime"])) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    * The time the embedded SIM activation code pool was last modified. Updated service side.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * Navigational property to a list of targets to which this pool is assigned.
     *
     * @return EmbeddedSIMActivationCodePoolAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
           $assignments = [];
           if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'EmbeddedSIMActivationCodePoolAssignment')) {
              return $this->_propDict['assignments'];
           }
           foreach ($this->_propDict['assignments'] as $singleValue) {
              $assignments []= new EmbeddedSIMActivationCodePoolAssignment($singleValue);
           }
           $this->_propDict['assignments'] = $assignments;
           return $this->_propDict['assignments'];
        }
        return null;
    }
    
    /** 
    * Sets the assignments
    * Navigational property to a list of targets to which this pool is assigned.
    *
    * @param EmbeddedSIMActivationCodePoolAssignment[] $val The assignments
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStates
    * Navigational property to a list of device states for this pool.
     *
     * @return EmbeddedSIMDeviceState[]|null The deviceStates
     */
    public function getDeviceStates()
    {
        if (array_key_exists('deviceStates', $this->_propDict) && !is_null($this->_propDict['deviceStates'])) {
           $deviceStates = [];
           if (count($this->_propDict['deviceStates']) > 0 && is_a($this->_propDict['deviceStates'][0], 'EmbeddedSIMDeviceState')) {
              return $this->_propDict['deviceStates'];
           }
           foreach ($this->_propDict['deviceStates'] as $singleValue) {
              $deviceStates []= new EmbeddedSIMDeviceState($singleValue);
           }
           $this->_propDict['deviceStates'] = $deviceStates;
           return $this->_propDict['deviceStates'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceStates
    * Navigational property to a list of device states for this pool.
    *
    * @param EmbeddedSIMDeviceState[] $val The deviceStates
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setDeviceStates($val)
    {
        $this->_propDict["deviceStates"] = $val;
        return $this;
    }
    
}
