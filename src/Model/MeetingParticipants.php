<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingParticipants File
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
* MeetingParticipants class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingParticipants extends Entity
{

    /**
    * Gets the attendees
    * Information of the meeting attendees.
    *
    * @return MeetingParticipantInfo[]|null The attendees
    */
    public function getAttendees()
    {
        if (array_key_exists("attendees", $this->_propDict) && !is_null($this->_propDict["attendees"])) {
       
            if (count($this->_propDict['attendees']) > 0 && is_a($this->_propDict['attendees'][0], 'MeetingParticipantInfo')) {
               return $this->_propDict['attendees'];
            }
            $attendees = [];
            foreach ($this->_propDict['attendees'] as $singleValue) {
               $attendees []= new MeetingParticipantInfo($singleValue);
            }
            $this->_propDict['attendees'] = $attendees;
            return $this->_propDict['attendees'];
            }
        return null;
    }

    /**
    * Sets the attendees
    * Information of the meeting attendees.
    *
    * @param MeetingParticipantInfo[] $val The value to assign to the attendees
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setAttendees($val)
    {
        $this->_propDict["attendees"] = $val;
         return $this;
    }

    /**
    * Gets the contributors
    *
    * @return MeetingParticipantInfo[]|null The contributors
    */
    public function getContributors()
    {
        if (array_key_exists("contributors", $this->_propDict) && !is_null($this->_propDict["contributors"])) {
       
            if (count($this->_propDict['contributors']) > 0 && is_a($this->_propDict['contributors'][0], 'MeetingParticipantInfo')) {
               return $this->_propDict['contributors'];
            }
            $contributors = [];
            foreach ($this->_propDict['contributors'] as $singleValue) {
               $contributors []= new MeetingParticipantInfo($singleValue);
            }
            $this->_propDict['contributors'] = $contributors;
            return $this->_propDict['contributors'];
            }
        return null;
    }

    /**
    * Sets the contributors
    *
    * @param MeetingParticipantInfo[] $val The value to assign to the contributors
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setContributors($val)
    {
        $this->_propDict["contributors"] = $val;
         return $this;
    }

    /**
    * Gets the organizer
    * Information of the meeting organizer.
    *
    * @return MeetingParticipantInfo|null The organizer
    */
    public function getOrganizer()
    {
        if (array_key_exists("organizer", $this->_propDict) && !is_null($this->_propDict["organizer"])) {
     
            if (is_a($this->_propDict["organizer"], "\Beta\Microsoft\Graph\Model\MeetingParticipantInfo")) {
                return $this->_propDict["organizer"];
            } else {
                $this->_propDict["organizer"] = new MeetingParticipantInfo($this->_propDict["organizer"]);
                return $this->_propDict["organizer"];
            }
        }
        return null;
    }

    /**
    * Sets the organizer
    * Information of the meeting organizer.
    *
    * @param MeetingParticipantInfo $val The value to assign to the organizer
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setOrganizer($val)
    {
        $this->_propDict["organizer"] = $val;
         return $this;
    }

    /**
    * Gets the producers
    *
    * @return MeetingParticipantInfo[]|null The producers
    */
    public function getProducers()
    {
        if (array_key_exists("producers", $this->_propDict) && !is_null($this->_propDict["producers"])) {
       
            if (count($this->_propDict['producers']) > 0 && is_a($this->_propDict['producers'][0], 'MeetingParticipantInfo')) {
               return $this->_propDict['producers'];
            }
            $producers = [];
            foreach ($this->_propDict['producers'] as $singleValue) {
               $producers []= new MeetingParticipantInfo($singleValue);
            }
            $this->_propDict['producers'] = $producers;
            return $this->_propDict['producers'];
            }
        return null;
    }

    /**
    * Sets the producers
    *
    * @param MeetingParticipantInfo[] $val The value to assign to the producers
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setProducers($val)
    {
        $this->_propDict["producers"] = $val;
         return $this;
    }
}
