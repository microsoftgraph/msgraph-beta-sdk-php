<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingRegistration File
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
* MeetingRegistration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingRegistration extends Entity
{
    /**
    * Gets the allowedRegistrant
    * Specifies who can register for the meeting.
    *
    * @return MeetingAudience|null The allowedRegistrant
    */
    public function getAllowedRegistrant()
    {
        if (array_key_exists("allowedRegistrant", $this->_propDict) && !is_null($this->_propDict["allowedRegistrant"])) {
            if (is_a($this->_propDict["allowedRegistrant"], "\Beta\Microsoft\Graph\Model\MeetingAudience")) {
                return $this->_propDict["allowedRegistrant"];
            } else {
                $this->_propDict["allowedRegistrant"] = new MeetingAudience($this->_propDict["allowedRegistrant"]);
                return $this->_propDict["allowedRegistrant"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedRegistrant
    * Specifies who can register for the meeting.
    *
    * @param MeetingAudience $val The allowedRegistrant
    *
    * @return MeetingRegistration
    */
    public function setAllowedRegistrant($val)
    {
        $this->_propDict["allowedRegistrant"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description of the meeting.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The description of the meeting.
    *
    * @param string $val The description
    *
    * @return MeetingRegistration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    * The meeting end time in UTC.
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict) && !is_null($this->_propDict["endDateTime"])) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    * The meeting end time in UTC.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return MeetingRegistration
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the registrationPageViewCount
    * The number of times the registration page has been visited. Read-only.
    *
    * @return int|null The registrationPageViewCount
    */
    public function getRegistrationPageViewCount()
    {
        if (array_key_exists("registrationPageViewCount", $this->_propDict)) {
            return $this->_propDict["registrationPageViewCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the registrationPageViewCount
    * The number of times the registration page has been visited. Read-only.
    *
    * @param int $val The registrationPageViewCount
    *
    * @return MeetingRegistration
    */
    public function setRegistrationPageViewCount($val)
    {
        $this->_propDict["registrationPageViewCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the registrationPageWebUrl
    * The URL of the registration page. Read-only.
    *
    * @return string|null The registrationPageWebUrl
    */
    public function getRegistrationPageWebUrl()
    {
        if (array_key_exists("registrationPageWebUrl", $this->_propDict)) {
            return $this->_propDict["registrationPageWebUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the registrationPageWebUrl
    * The URL of the registration page. Read-only.
    *
    * @param string $val The registrationPageWebUrl
    *
    * @return MeetingRegistration
    */
    public function setRegistrationPageWebUrl($val)
    {
        $this->_propDict["registrationPageWebUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the speakers
    * The meeting speaker's information.
     *
     * @return MeetingSpeaker[]|null The speakers
     */
    public function getSpeakers()
    {
        if (array_key_exists('speakers', $this->_propDict) && !is_null($this->_propDict['speakers'])) {
            $speakers = [];
            if (count($this->_propDict['speakers']) > 0 && is_a($this->_propDict['speakers'][0], 'MeetingSpeaker')) {
                return $this->_propDict['speakers'];
            }
            foreach ($this->_propDict['speakers'] as $singleValue) {
                $speakers []= new MeetingSpeaker($singleValue);
            }
            $this->_propDict['speakers'] = $speakers;
            return $this->_propDict['speakers'];
        }
        return null;
    }
    
    /** 
    * Sets the speakers
    * The meeting speaker's information.
    *
    * @param MeetingSpeaker[] $val The speakers
    *
    * @return MeetingRegistration
    */
    public function setSpeakers($val)
    {
        $this->_propDict["speakers"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * The meeting start time in UTC.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict) && !is_null($this->_propDict["startDateTime"])) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    * The meeting start time in UTC.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return MeetingRegistration
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the subject
    * The subject of the meeting.
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subject
    * The subject of the meeting.
    *
    * @param string $val The subject
    *
    * @return MeetingRegistration
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customQuestions
    * Custom registration questions.
     *
     * @return MeetingRegistrationQuestion[]|null The customQuestions
     */
    public function getCustomQuestions()
    {
        if (array_key_exists('customQuestions', $this->_propDict) && !is_null($this->_propDict['customQuestions'])) {
            $customQuestions = [];
            if (count($this->_propDict['customQuestions']) > 0 && is_a($this->_propDict['customQuestions'][0], 'MeetingRegistrationQuestion')) {
                return $this->_propDict['customQuestions'];
            }
            foreach ($this->_propDict['customQuestions'] as $singleValue) {
                $customQuestions []= new MeetingRegistrationQuestion($singleValue);
            }
            $this->_propDict['customQuestions'] = $customQuestions;
            return $this->_propDict['customQuestions'];
        }
        return null;
    }
    
    /** 
    * Sets the customQuestions
    * Custom registration questions.
    *
    * @param MeetingRegistrationQuestion[] $val The customQuestions
    *
    * @return MeetingRegistration
    */
    public function setCustomQuestions($val)
    {
        $this->_propDict["customQuestions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registrants
    * Registrants of the online meeting.
     *
     * @return MeetingRegistrant[]|null The registrants
     */
    public function getRegistrants()
    {
        if (array_key_exists('registrants', $this->_propDict) && !is_null($this->_propDict['registrants'])) {
            $registrants = [];
            if (count($this->_propDict['registrants']) > 0 && is_a($this->_propDict['registrants'][0], 'MeetingRegistrant')) {
                return $this->_propDict['registrants'];
            }
            foreach ($this->_propDict['registrants'] as $singleValue) {
                $registrants []= new MeetingRegistrant($singleValue);
            }
            $this->_propDict['registrants'] = $registrants;
            return $this->_propDict['registrants'];
        }
        return null;
    }
    
    /** 
    * Sets the registrants
    * Registrants of the online meeting.
    *
    * @param MeetingRegistrant[] $val The registrants
    *
    * @return MeetingRegistration
    */
    public function setRegistrants($val)
    {
        $this->_propDict["registrants"] = $val;
        return $this;
    }
    
}
