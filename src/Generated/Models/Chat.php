<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Chat extends Entity implements Parsable 
{
    /**
     * @var ChatType|null $chatType Specifies the type of chat. Possible values are: group, oneOnOne, meeting, unknownFutureValue.
    */
    private ?ChatType $chatType = null;
    
    /**
     * @var DateTime|null $createdDateTime Date and time at which the chat was created. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<TeamsAppInstallation>|null $installedApps A collection of all the apps in the chat. Nullable.
    */
    private ?array $installedApps = null;
    
    /**
     * @var ChatMessageInfo|null $lastMessagePreview Preview of the last message sent in the chat. Null if no messages have been sent in the chat. Currently, only the list chats operation supports this property.
    */
    private ?ChatMessageInfo $lastMessagePreview = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime Date and time at which the chat was renamed or list of members were last changed. Read-only.
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var array<ConversationMember>|null $members A collection of all the members in the chat. Nullable.
    */
    private ?array $members = null;
    
    /**
     * @var array<ChatMessage>|null $messages A collection of all the messages in the chat. Nullable.
    */
    private ?array $messages = null;
    
    /**
     * @var TeamworkOnlineMeetingInfo|null $onlineMeetingInfo Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
    */
    private ?TeamworkOnlineMeetingInfo $onlineMeetingInfo = null;
    
    /**
     * @var array<TeamsAsyncOperation>|null $operations A collection of all the Teams async operations that ran or are running on the chat. Nullable.
    */
    private ?array $operations = null;
    
    /**
     * @var array<ResourceSpecificPermissionGrant>|null $permissionGrants A collection of permissions granted to apps for the chat.
    */
    private ?array $permissionGrants = null;
    
    /**
     * @var array<PinnedChatMessageInfo>|null $pinnedMessages A collection of all the pinned messages in the chat. Nullable.
    */
    private ?array $pinnedMessages = null;
    
    /**
     * @var array<TeamsTab>|null $tabs A collection of all the tabs in the chat. Nullable.
    */
    private ?array $tabs = null;
    
    /**
     * @var string|null $tenantId The identifier of the tenant in which the chat was created. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * @var string|null $topic (Optional) Subject or topic for the chat. Only available for group chats.
    */
    private ?string $topic = null;
    
    /**
     * @var ChatViewpoint|null $viewpoint Represents caller-specific information about the chat, such as last message read date and time. This property is populated only when the request is made in a delegated context.
    */
    private ?ChatViewpoint $viewpoint = null;
    
    /**
     * @var string|null $webUrl The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new chat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Chat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Chat {
        return new Chat();
    }

    /**
     * Gets the chatType property value. Specifies the type of chat. Possible values are: group, oneOnOne, meeting, unknownFutureValue.
     * @return ChatType|null
    */
    public function getChatType(): ?ChatType {
        return $this->chatType;
    }

    /**
     * Gets the createdDateTime property value. Date and time at which the chat was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'chatType' => function (ParseNode $n) use ($o) { $o->setChatType($n->getEnumValue(ChatType::class)); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'installedApps' => function (ParseNode $n) use ($o) { $o->setInstalledApps($n->getCollectionOfObjectValues(array(TeamsAppInstallation::class, 'createFromDiscriminatorValue'))); },
            'lastMessagePreview' => function (ParseNode $n) use ($o) { $o->setLastMessagePreview($n->getObjectValue(array(ChatMessageInfo::class, 'createFromDiscriminatorValue'))); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(ConversationMember::class, 'createFromDiscriminatorValue'))); },
            'messages' => function (ParseNode $n) use ($o) { $o->setMessages($n->getCollectionOfObjectValues(array(ChatMessage::class, 'createFromDiscriminatorValue'))); },
            'onlineMeetingInfo' => function (ParseNode $n) use ($o) { $o->setOnlineMeetingInfo($n->getObjectValue(array(TeamworkOnlineMeetingInfo::class, 'createFromDiscriminatorValue'))); },
            'operations' => function (ParseNode $n) use ($o) { $o->setOperations($n->getCollectionOfObjectValues(array(TeamsAsyncOperation::class, 'createFromDiscriminatorValue'))); },
            'permissionGrants' => function (ParseNode $n) use ($o) { $o->setPermissionGrants($n->getCollectionOfObjectValues(array(ResourceSpecificPermissionGrant::class, 'createFromDiscriminatorValue'))); },
            'pinnedMessages' => function (ParseNode $n) use ($o) { $o->setPinnedMessages($n->getCollectionOfObjectValues(array(PinnedChatMessageInfo::class, 'createFromDiscriminatorValue'))); },
            'tabs' => function (ParseNode $n) use ($o) { $o->setTabs($n->getCollectionOfObjectValues(array(TeamsTab::class, 'createFromDiscriminatorValue'))); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'topic' => function (ParseNode $n) use ($o) { $o->setTopic($n->getStringValue()); },
            'viewpoint' => function (ParseNode $n) use ($o) { $o->setViewpoint($n->getObjectValue(array(ChatViewpoint::class, 'createFromDiscriminatorValue'))); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the installedApps property value. A collection of all the apps in the chat. Nullable.
     * @return array<TeamsAppInstallation>|null
    */
    public function getInstalledApps(): ?array {
        return $this->installedApps;
    }

    /**
     * Gets the lastMessagePreview property value. Preview of the last message sent in the chat. Null if no messages have been sent in the chat. Currently, only the list chats operation supports this property.
     * @return ChatMessageInfo|null
    */
    public function getLastMessagePreview(): ?ChatMessageInfo {
        return $this->lastMessagePreview;
    }

    /**
     * Gets the lastUpdatedDateTime property value. Date and time at which the chat was renamed or list of members were last changed. Read-only.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the members property value. A collection of all the members in the chat. Nullable.
     * @return array<ConversationMember>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the messages property value. A collection of all the messages in the chat. Nullable.
     * @return array<ChatMessage>|null
    */
    public function getMessages(): ?array {
        return $this->messages;
    }

    /**
     * Gets the onlineMeetingInfo property value. Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
     * @return TeamworkOnlineMeetingInfo|null
    */
    public function getOnlineMeetingInfo(): ?TeamworkOnlineMeetingInfo {
        return $this->onlineMeetingInfo;
    }

    /**
     * Gets the operations property value. A collection of all the Teams async operations that ran or are running on the chat. Nullable.
     * @return array<TeamsAsyncOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the permissionGrants property value. A collection of permissions granted to apps for the chat.
     * @return array<ResourceSpecificPermissionGrant>|null
    */
    public function getPermissionGrants(): ?array {
        return $this->permissionGrants;
    }

    /**
     * Gets the pinnedMessages property value. A collection of all the pinned messages in the chat. Nullable.
     * @return array<PinnedChatMessageInfo>|null
    */
    public function getPinnedMessages(): ?array {
        return $this->pinnedMessages;
    }

    /**
     * Gets the tabs property value. A collection of all the tabs in the chat. Nullable.
     * @return array<TeamsTab>|null
    */
    public function getTabs(): ?array {
        return $this->tabs;
    }

    /**
     * Gets the tenantId property value. The identifier of the tenant in which the chat was created. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the topic property value. (Optional) Subject or topic for the chat. Only available for group chats.
     * @return string|null
    */
    public function getTopic(): ?string {
        return $this->topic;
    }

    /**
     * Gets the viewpoint property value. Represents caller-specific information about the chat, such as last message read date and time. This property is populated only when the request is made in a delegated context.
     * @return ChatViewpoint|null
    */
    public function getViewpoint(): ?ChatViewpoint {
        return $this->viewpoint;
    }

    /**
     * Gets the webUrl property value. The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('chatType', $this->chatType);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('installedApps', $this->installedApps);
        $writer->writeObjectValue('lastMessagePreview', $this->lastMessagePreview);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeCollectionOfObjectValues('messages', $this->messages);
        $writer->writeObjectValue('onlineMeetingInfo', $this->onlineMeetingInfo);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('permissionGrants', $this->permissionGrants);
        $writer->writeCollectionOfObjectValues('pinnedMessages', $this->pinnedMessages);
        $writer->writeCollectionOfObjectValues('tabs', $this->tabs);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('topic', $this->topic);
        $writer->writeObjectValue('viewpoint', $this->viewpoint);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the chatType property value. Specifies the type of chat. Possible values are: group, oneOnOne, meeting, unknownFutureValue.
     *  @param ChatType|null $value Value to set for the chatType property.
    */
    public function setChatType(?ChatType $value ): void {
        $this->chatType = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time at which the chat was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the installedApps property value. A collection of all the apps in the chat. Nullable.
     *  @param array<TeamsAppInstallation>|null $value Value to set for the installedApps property.
    */
    public function setInstalledApps(?array $value ): void {
        $this->installedApps = $value;
    }

    /**
     * Sets the lastMessagePreview property value. Preview of the last message sent in the chat. Null if no messages have been sent in the chat. Currently, only the list chats operation supports this property.
     *  @param ChatMessageInfo|null $value Value to set for the lastMessagePreview property.
    */
    public function setLastMessagePreview(?ChatMessageInfo $value ): void {
        $this->lastMessagePreview = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Date and time at which the chat was renamed or list of members were last changed. Read-only.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the members property value. A collection of all the members in the chat. Nullable.
     *  @param array<ConversationMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the messages property value. A collection of all the messages in the chat. Nullable.
     *  @param array<ChatMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value ): void {
        $this->messages = $value;
    }

    /**
     * Sets the onlineMeetingInfo property value. Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
     *  @param TeamworkOnlineMeetingInfo|null $value Value to set for the onlineMeetingInfo property.
    */
    public function setOnlineMeetingInfo(?TeamworkOnlineMeetingInfo $value ): void {
        $this->onlineMeetingInfo = $value;
    }

    /**
     * Sets the operations property value. A collection of all the Teams async operations that ran or are running on the chat. Nullable.
     *  @param array<TeamsAsyncOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the permissionGrants property value. A collection of permissions granted to apps for the chat.
     *  @param array<ResourceSpecificPermissionGrant>|null $value Value to set for the permissionGrants property.
    */
    public function setPermissionGrants(?array $value ): void {
        $this->permissionGrants = $value;
    }

    /**
     * Sets the pinnedMessages property value. A collection of all the pinned messages in the chat. Nullable.
     *  @param array<PinnedChatMessageInfo>|null $value Value to set for the pinnedMessages property.
    */
    public function setPinnedMessages(?array $value ): void {
        $this->pinnedMessages = $value;
    }

    /**
     * Sets the tabs property value. A collection of all the tabs in the chat. Nullable.
     *  @param array<TeamsTab>|null $value Value to set for the tabs property.
    */
    public function setTabs(?array $value ): void {
        $this->tabs = $value;
    }

    /**
     * Sets the tenantId property value. The identifier of the tenant in which the chat was created. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the topic property value. (Optional) Subject or topic for the chat. Only available for group chats.
     *  @param string|null $value Value to set for the topic property.
    */
    public function setTopic(?string $value ): void {
        $this->topic = $value;
    }

    /**
     * Sets the viewpoint property value. Represents caller-specific information about the chat, such as last message read date and time. This property is populated only when the request is made in a delegated context.
     *  @param ChatViewpoint|null $value Value to set for the viewpoint property.
    */
    public function setViewpoint(?ChatViewpoint $value ): void {
        $this->viewpoint = $value;
    }

    /**
     * Sets the webUrl property value. The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
