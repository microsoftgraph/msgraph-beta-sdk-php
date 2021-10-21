<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageRecipient File
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
* MessageRecipient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageRecipient extends Entity
{
    /**
    * Gets the deliveryStatus
    *
    * @return MessageStatus|null The deliveryStatus
    */
    public function getDeliveryStatus()
    {
        if (array_key_exists("deliveryStatus", $this->_propDict) && !is_null($this->_propDict["deliveryStatus"])) {
            if (is_a($this->_propDict["deliveryStatus"], "\Beta\Microsoft\Graph\Model\MessageStatus")) {
                return $this->_propDict["deliveryStatus"];
            } else {
                $this->_propDict["deliveryStatus"] = new MessageStatus($this->_propDict["deliveryStatus"]);
                return $this->_propDict["deliveryStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deliveryStatus
    *
    * @param MessageStatus $val The deliveryStatus
    *
    * @return MessageRecipient
    */
    public function setDeliveryStatus($val)
    {
        $this->_propDict["deliveryStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the recipientEmail
    *
    * @return string|null The recipientEmail
    */
    public function getRecipientEmail()
    {
        if (array_key_exists("recipientEmail", $this->_propDict)) {
            return $this->_propDict["recipientEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recipientEmail
    *
    * @param string $val The recipientEmail
    *
    * @return MessageRecipient
    */
    public function setRecipientEmail($val)
    {
        $this->_propDict["recipientEmail"] = $val;
        return $this;
    }
    

     /** 
     * Gets the events
     *
     * @return MessageEvent[]|null The events
     */
    public function getEvents()
    {
        if (array_key_exists('events', $this->_propDict) && !is_null($this->_propDict['events'])) {
            $events = [];
            if (count($this->_propDict['events']) > 0 && is_a($this->_propDict['events'][0], 'MessageEvent')) {
                return $this->_propDict['events'];
            }
            foreach ($this->_propDict['events'] as $singleValue) {
                $events []= new MessageEvent($singleValue);
            }
            $this->_propDict['events'] = $events;
            return $this->_propDict['events'];
        }
        return null;
    }
    
    /** 
    * Sets the events
    *
    * @param MessageEvent[] $val The events
    *
    * @return MessageRecipient
    */
    public function setEvents($val)
    {
        $this->_propDict["events"] = $val;
        return $this;
    }
    
}
