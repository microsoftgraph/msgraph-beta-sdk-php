<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Chat File
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
* Chat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Chat extends Entity
{
    /**
    * Gets the chatType
    * Specifies the type of chat. Possible values are:group, oneOnOne and meeting.
    *
    * @return ChatType|null The chatType
    */
    public function getChatType()
    {
        if (array_key_exists("chatType", $this->_propDict) && !is_null($this->_propDict["chatType"])) {
            if (is_a($this->_propDict["chatType"], "\Beta\Microsoft\Graph\Model\ChatType")) {
                return $this->_propDict["chatType"];
            } else {
                $this->_propDict["chatType"] = new ChatType($this->_propDict["chatType"]);
                return $this->_propDict["chatType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the chatType
    * Specifies the type of chat. Possible values are:group, oneOnOne and meeting.
    *
    * @param ChatType $val The chatType
    *
    * @return Chat
    */
    public function setChatType($val)
    {
        $this->_propDict["chatType"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Date and time at which the chat was created. Read-only.
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
    * Date and time at which the chat was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Chat
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdatedDateTime
    * Date and time at which the chat was renamed or list of members were last changed. Read-only.
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict) && !is_null($this->_propDict["lastUpdatedDateTime"])) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdatedDateTime
    * Date and time at which the chat was renamed or list of members were last changed. Read-only.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return Chat
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onlineMeetingInfo
    * Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
    *
    * @return TeamworkOnlineMeetingInfo|null The onlineMeetingInfo
    */
    public function getOnlineMeetingInfo()
    {
        if (array_key_exists("onlineMeetingInfo", $this->_propDict) && !is_null($this->_propDict["onlineMeetingInfo"])) {
            if (is_a($this->_propDict["onlineMeetingInfo"], "\Beta\Microsoft\Graph\Model\TeamworkOnlineMeetingInfo")) {
                return $this->_propDict["onlineMeetingInfo"];
            } else {
                $this->_propDict["onlineMeetingInfo"] = new TeamworkOnlineMeetingInfo($this->_propDict["onlineMeetingInfo"]);
                return $this->_propDict["onlineMeetingInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onlineMeetingInfo
    * Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
    *
    * @param TeamworkOnlineMeetingInfo $val The onlineMeetingInfo
    *
    * @return Chat
    */
    public function setOnlineMeetingInfo($val)
    {
        $this->_propDict["onlineMeetingInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantId
    * The identifier of the tenant in which the chat was created. Read-only.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    * The identifier of the tenant in which the chat was created. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return Chat
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the topic
    * (Optional) Subject or topic for the chat. Only available for group chats.
    *
    * @return string|null The topic
    */
    public function getTopic()
    {
        if (array_key_exists("topic", $this->_propDict)) {
            return $this->_propDict["topic"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the topic
    * (Optional) Subject or topic for the chat. Only available for group chats.
    *
    * @param string $val The topic
    *
    * @return Chat
    */
    public function setTopic($val)
    {
        $this->_propDict["topic"] = $val;
        return $this;
    }
    
    /**
    * Gets the viewpoint
    * Represents caller-specific information about the chat, such as last message read date and time. This property is populated only when the request is made in a delegated context.
    *
    * @return ChatViewpoint|null The viewpoint
    */
    public function getViewpoint()
    {
        if (array_key_exists("viewpoint", $this->_propDict) && !is_null($this->_propDict["viewpoint"])) {
            if (is_a($this->_propDict["viewpoint"], "\Beta\Microsoft\Graph\Model\ChatViewpoint")) {
                return $this->_propDict["viewpoint"];
            } else {
                $this->_propDict["viewpoint"] = new ChatViewpoint($this->_propDict["viewpoint"]);
                return $this->_propDict["viewpoint"];
            }
        }
        return null;
    }
    
    /**
    * Sets the viewpoint
    * Represents caller-specific information about the chat, such as last message read date and time. This property is populated only when the request is made in a delegated context.
    *
    * @param ChatViewpoint $val The viewpoint
    *
    * @return Chat
    */
    public function setViewpoint($val)
    {
        $this->_propDict["viewpoint"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    * A hyperlink that will go to the chat in Microsoft Teams. This URL should be treated as an opaque blob, and not parsed. Read-only.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    * A hyperlink that will go to the chat in Microsoft Teams. This URL should be treated as an opaque blob, and not parsed. Read-only.
    *
    * @param string $val The webUrl
    *
    * @return Chat
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the installedApps
    * A collection of all the apps in the chat. Nullable.
     *
     * @return TeamsAppInstallation[]|null The installedApps
     */
    public function getInstalledApps()
    {
        if (array_key_exists('installedApps', $this->_propDict) && !is_null($this->_propDict['installedApps'])) {
            $installedApps = [];
            if (count($this->_propDict['installedApps']) > 0 && is_a($this->_propDict['installedApps'][0], 'TeamsAppInstallation')) {
                return $this->_propDict['installedApps'];
            }
            foreach ($this->_propDict['installedApps'] as $singleValue) {
                $installedApps []= new TeamsAppInstallation($singleValue);
            }
            $this->_propDict['installedApps'] = $installedApps;
            return $this->_propDict['installedApps'];
        }
        return null;
    }
    
    /** 
    * Sets the installedApps
    * A collection of all the apps in the chat. Nullable.
    *
    * @param TeamsAppInstallation[] $val The installedApps
    *
    * @return Chat
    */
    public function setInstalledApps($val)
    {
        $this->_propDict["installedApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastMessagePreview
    * Preview of the last message sent in the chat. Null if no messages have been sent in the chat. Currently, only the list chats operation supports this property.
    *
    * @return ChatMessageInfo|null The lastMessagePreview
    */
    public function getLastMessagePreview()
    {
        if (array_key_exists("lastMessagePreview", $this->_propDict) && !is_null($this->_propDict["lastMessagePreview"])) {
            if (is_a($this->_propDict["lastMessagePreview"], "\Beta\Microsoft\Graph\Model\ChatMessageInfo")) {
                return $this->_propDict["lastMessagePreview"];
            } else {
                $this->_propDict["lastMessagePreview"] = new ChatMessageInfo($this->_propDict["lastMessagePreview"]);
                return $this->_propDict["lastMessagePreview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastMessagePreview
    * Preview of the last message sent in the chat. Null if no messages have been sent in the chat. Currently, only the list chats operation supports this property.
    *
    * @param ChatMessageInfo $val The lastMessagePreview
    *
    * @return Chat
    */
    public function setLastMessagePreview($val)
    {
        $this->_propDict["lastMessagePreview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the members
    * A collection of all the members in the chat. Nullable.
     *
     * @return ConversationMember[]|null The members
     */
    public function getMembers()
    {
        if (array_key_exists('members', $this->_propDict) && !is_null($this->_propDict['members'])) {
            $members = [];
            if (count($this->_propDict['members']) > 0 && is_a($this->_propDict['members'][0], 'ConversationMember')) {
                return $this->_propDict['members'];
            }
            foreach ($this->_propDict['members'] as $singleValue) {
                $members []= new ConversationMember($singleValue);
            }
            $this->_propDict['members'] = $members;
            return $this->_propDict['members'];
        }
        return null;
    }
    
    /** 
    * Sets the members
    * A collection of all the members in the chat. Nullable.
    *
    * @param ConversationMember[] $val The members
    *
    * @return Chat
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }
    

     /** 
     * Gets the messages
    * A collection of all the messages in the chat. Nullable.
     *
     * @return ChatMessage[]|null The messages
     */
    public function getMessages()
    {
        if (array_key_exists('messages', $this->_propDict) && !is_null($this->_propDict['messages'])) {
            $messages = [];
            if (count($this->_propDict['messages']) > 0 && is_a($this->_propDict['messages'][0], 'ChatMessage')) {
                return $this->_propDict['messages'];
            }
            foreach ($this->_propDict['messages'] as $singleValue) {
                $messages []= new ChatMessage($singleValue);
            }
            $this->_propDict['messages'] = $messages;
            return $this->_propDict['messages'];
        }
        return null;
    }
    
    /** 
    * Sets the messages
    * A collection of all the messages in the chat. Nullable.
    *
    * @param ChatMessage[] $val The messages
    *
    * @return Chat
    */
    public function setMessages($val)
    {
        $this->_propDict["messages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
    * A collection of all the Teams async operations that ran or are running on the chat. Nullable.
     *
     * @return TeamsAsyncOperation[]|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists('operations', $this->_propDict) && !is_null($this->_propDict['operations'])) {
            $operations = [];
            if (count($this->_propDict['operations']) > 0 && is_a($this->_propDict['operations'][0], 'TeamsAsyncOperation')) {
                return $this->_propDict['operations'];
            }
            foreach ($this->_propDict['operations'] as $singleValue) {
                $operations []= new TeamsAsyncOperation($singleValue);
            }
            $this->_propDict['operations'] = $operations;
            return $this->_propDict['operations'];
        }
        return null;
    }
    
    /** 
    * Sets the operations
    * A collection of all the Teams async operations that ran or are running on the chat. Nullable.
    *
    * @param TeamsAsyncOperation[] $val The operations
    *
    * @return Chat
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the permissionGrants
    * A collection of permissions granted to apps for the chat.
     *
     * @return ResourceSpecificPermissionGrant[]|null The permissionGrants
     */
    public function getPermissionGrants()
    {
        if (array_key_exists('permissionGrants', $this->_propDict) && !is_null($this->_propDict['permissionGrants'])) {
            $permissionGrants = [];
            if (count($this->_propDict['permissionGrants']) > 0 && is_a($this->_propDict['permissionGrants'][0], 'ResourceSpecificPermissionGrant')) {
                return $this->_propDict['permissionGrants'];
            }
            foreach ($this->_propDict['permissionGrants'] as $singleValue) {
                $permissionGrants []= new ResourceSpecificPermissionGrant($singleValue);
            }
            $this->_propDict['permissionGrants'] = $permissionGrants;
            return $this->_propDict['permissionGrants'];
        }
        return null;
    }
    
    /** 
    * Sets the permissionGrants
    * A collection of permissions granted to apps for the chat.
    *
    * @param ResourceSpecificPermissionGrant[] $val The permissionGrants
    *
    * @return Chat
    */
    public function setPermissionGrants($val)
    {
        $this->_propDict["permissionGrants"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tabs
     *
     * @return TeamsTab[]|null The tabs
     */
    public function getTabs()
    {
        if (array_key_exists('tabs', $this->_propDict) && !is_null($this->_propDict['tabs'])) {
            $tabs = [];
            if (count($this->_propDict['tabs']) > 0 && is_a($this->_propDict['tabs'][0], 'TeamsTab')) {
                return $this->_propDict['tabs'];
            }
            foreach ($this->_propDict['tabs'] as $singleValue) {
                $tabs []= new TeamsTab($singleValue);
            }
            $this->_propDict['tabs'] = $tabs;
            return $this->_propDict['tabs'];
        }
        return null;
    }
    
    /** 
    * Sets the tabs
    *
    * @param TeamsTab[] $val The tabs
    *
    * @return Chat
    */
    public function setTabs($val)
    {
        $this->_propDict["tabs"] = $val;
        return $this;
    }
    
}
