<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Channel extends Entity implements Parsable 
{
    /**
     * Instantiates a new Channel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Channel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Channel {
        return new Channel();
    }

    /**
     * Gets the allMembers property value. A collection of membership records associated with the channel. It includes both direct and indirect members of shared channels.
     * @return array<ConversationMember>|null
    */
    public function getAllMembers(): ?array {
        $val = $this->getBackingStore()->get('allMembers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConversationMember::class);
            /** @var array<ConversationMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allMembers'");
    }

    /**
     * Gets the createdDateTime property value. Read only. Timestamp at which the channel was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. Optional textual description for the channel.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Channel name as it appears to the user in Microsoft Teams. The maximum length is 50 characters.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the email property value. The email address for sending messages to the channel. Read-only.
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allMembers' => fn(ParseNode $n) => $o->setAllMembers($n->getCollectionOfObjectValues([ConversationMember::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'filesFolder' => fn(ParseNode $n) => $o->setFilesFolder($n->getObjectValue([DriveItem::class, 'createFromDiscriminatorValue'])),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'isFavoriteByDefault' => fn(ParseNode $n) => $o->setIsFavoriteByDefault($n->getBooleanValue()),
            'layoutType' => fn(ParseNode $n) => $o->setLayoutType($n->getEnumValue(ChannelLayoutType::class)),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([ConversationMember::class, 'createFromDiscriminatorValue'])),
            'membershipType' => fn(ParseNode $n) => $o->setMembershipType($n->getEnumValue(ChannelMembershipType::class)),
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([ChatMessage::class, 'createFromDiscriminatorValue'])),
            'moderationSettings' => fn(ParseNode $n) => $o->setModerationSettings($n->getObjectValue([ChannelModerationSettings::class, 'createFromDiscriminatorValue'])),
            'planner' => fn(ParseNode $n) => $o->setPlanner($n->getObjectValue([TeamsChannelPlanner::class, 'createFromDiscriminatorValue'])),
            'sharedWithTeams' => fn(ParseNode $n) => $o->setSharedWithTeams($n->getCollectionOfObjectValues([SharedWithChannelTeamInfo::class, 'createFromDiscriminatorValue'])),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getObjectValue([ChannelSummary::class, 'createFromDiscriminatorValue'])),
            'tabs' => fn(ParseNode $n) => $o->setTabs($n->getCollectionOfObjectValues([TeamsTab::class, 'createFromDiscriminatorValue'])),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the filesFolder property value. Metadata for the location where the channel's files are stored.
     * @return DriveItem|null
    */
    public function getFilesFolder(): ?DriveItem {
        $val = $this->getBackingStore()->get('filesFolder');
        if (is_null($val) || $val instanceof DriveItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filesFolder'");
    }

    /**
     * Gets the isArchived property value. Indicates whether the channel is archived. Read-only.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        $val = $this->getBackingStore()->get('isArchived');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isArchived'");
    }

    /**
     * Gets the isFavoriteByDefault property value. Indicates whether the channel should be marked as recommended for all members of the team to show in their channel list. Note: All recommended channels automatically show in the channels list for education and frontline worker users. The property can only be set programmatically via the Create team method. The default value is false.
     * @return bool|null
    */
    public function getIsFavoriteByDefault(): ?bool {
        $val = $this->getBackingStore()->get('isFavoriteByDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFavoriteByDefault'");
    }

    /**
     * Gets the layoutType property value. The layoutType property
     * @return ChannelLayoutType|null
    */
    public function getLayoutType(): ?ChannelLayoutType {
        $val = $this->getBackingStore()->get('layoutType');
        if (is_null($val) || $val instanceof ChannelLayoutType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'layoutType'");
    }

    /**
     * Gets the members property value. A collection of membership records associated with the channel.
     * @return array<ConversationMember>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConversationMember::class);
            /** @var array<ConversationMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the membershipType property value. The type of the channel. Can be set during creation and can't be changed. The possible values are: standard, private, unknownFutureValue, shared. The default value is standard. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: shared.
     * @return ChannelMembershipType|null
    */
    public function getMembershipType(): ?ChannelMembershipType {
        $val = $this->getBackingStore()->get('membershipType');
        if (is_null($val) || $val instanceof ChannelMembershipType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipType'");
    }

    /**
     * Gets the messages property value. A collection of all the messages in the channel. Nullable.
     * @return array<ChatMessage>|null
    */
    public function getMessages(): ?array {
        $val = $this->getBackingStore()->get('messages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChatMessage::class);
            /** @var array<ChatMessage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messages'");
    }

    /**
     * Gets the moderationSettings property value. Settings to configure channel moderation to control who can start new posts and reply to posts in that channel.
     * @return ChannelModerationSettings|null
    */
    public function getModerationSettings(): ?ChannelModerationSettings {
        $val = $this->getBackingStore()->get('moderationSettings');
        if (is_null($val) || $val instanceof ChannelModerationSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'moderationSettings'");
    }

    /**
     * Gets the planner property value. Selective Planner services available to this channel. Currently, only shared channels are supported. Read-only. Nullable.
     * @return TeamsChannelPlanner|null
    */
    public function getPlanner(): ?TeamsChannelPlanner {
        $val = $this->getBackingStore()->get('planner');
        if (is_null($val) || $val instanceof TeamsChannelPlanner) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planner'");
    }

    /**
     * Gets the sharedWithTeams property value. A collection of teams with which a channel is shared.
     * @return array<SharedWithChannelTeamInfo>|null
    */
    public function getSharedWithTeams(): ?array {
        $val = $this->getBackingStore()->get('sharedWithTeams');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharedWithChannelTeamInfo::class);
            /** @var array<SharedWithChannelTeamInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedWithTeams'");
    }

    /**
     * Gets the summary property value. Contains summary information about the channel, including number of guests, members, owners, and an indicator for members from other tenants. The summary property is only returned if it appears in the $select clause of the Get channel method.
     * @return ChannelSummary|null
    */
    public function getSummary(): ?ChannelSummary {
        $val = $this->getBackingStore()->get('summary');
        if (is_null($val) || $val instanceof ChannelSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'summary'");
    }

    /**
     * Gets the tabs property value. A collection of all the tabs in the channel.
     * @return array<TeamsTab>|null
    */
    public function getTabs(): ?array {
        $val = $this->getBackingStore()->get('tabs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamsTab::class);
            /** @var array<TeamsTab>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tabs'");
    }

    /**
     * Gets the tenantId property value. The ID of the Microsoft Entra tenant.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the webUrl property value. A hyperlink to the channel in Microsoft Teams. This URL is supplied when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('allMembers', $this->getAllMembers());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeObjectValue('filesFolder', $this->getFilesFolder());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeBooleanValue('isFavoriteByDefault', $this->getIsFavoriteByDefault());
        $writer->writeEnumValue('layoutType', $this->getLayoutType());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeEnumValue('membershipType', $this->getMembershipType());
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeObjectValue('moderationSettings', $this->getModerationSettings());
        $writer->writeObjectValue('planner', $this->getPlanner());
        $writer->writeCollectionOfObjectValues('sharedWithTeams', $this->getSharedWithTeams());
        $writer->writeObjectValue('summary', $this->getSummary());
        $writer->writeCollectionOfObjectValues('tabs', $this->getTabs());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the allMembers property value. A collection of membership records associated with the channel. It includes both direct and indirect members of shared channels.
     * @param array<ConversationMember>|null $value Value to set for the allMembers property.
    */
    public function setAllMembers(?array $value): void {
        $this->getBackingStore()->set('allMembers', $value);
    }

    /**
     * Sets the createdDateTime property value. Read only. Timestamp at which the channel was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Optional textual description for the channel.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Channel name as it appears to the user in Microsoft Teams. The maximum length is 50 characters.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the email property value. The email address for sending messages to the channel. Read-only.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the filesFolder property value. Metadata for the location where the channel's files are stored.
     * @param DriveItem|null $value Value to set for the filesFolder property.
    */
    public function setFilesFolder(?DriveItem $value): void {
        $this->getBackingStore()->set('filesFolder', $value);
    }

    /**
     * Sets the isArchived property value. Indicates whether the channel is archived. Read-only.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the isFavoriteByDefault property value. Indicates whether the channel should be marked as recommended for all members of the team to show in their channel list. Note: All recommended channels automatically show in the channels list for education and frontline worker users. The property can only be set programmatically via the Create team method. The default value is false.
     * @param bool|null $value Value to set for the isFavoriteByDefault property.
    */
    public function setIsFavoriteByDefault(?bool $value): void {
        $this->getBackingStore()->set('isFavoriteByDefault', $value);
    }

    /**
     * Sets the layoutType property value. The layoutType property
     * @param ChannelLayoutType|null $value Value to set for the layoutType property.
    */
    public function setLayoutType(?ChannelLayoutType $value): void {
        $this->getBackingStore()->set('layoutType', $value);
    }

    /**
     * Sets the members property value. A collection of membership records associated with the channel.
     * @param array<ConversationMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the membershipType property value. The type of the channel. Can be set during creation and can't be changed. The possible values are: standard, private, unknownFutureValue, shared. The default value is standard. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: shared.
     * @param ChannelMembershipType|null $value Value to set for the membershipType property.
    */
    public function setMembershipType(?ChannelMembershipType $value): void {
        $this->getBackingStore()->set('membershipType', $value);
    }

    /**
     * Sets the messages property value. A collection of all the messages in the channel. Nullable.
     * @param array<ChatMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->getBackingStore()->set('messages', $value);
    }

    /**
     * Sets the moderationSettings property value. Settings to configure channel moderation to control who can start new posts and reply to posts in that channel.
     * @param ChannelModerationSettings|null $value Value to set for the moderationSettings property.
    */
    public function setModerationSettings(?ChannelModerationSettings $value): void {
        $this->getBackingStore()->set('moderationSettings', $value);
    }

    /**
     * Sets the planner property value. Selective Planner services available to this channel. Currently, only shared channels are supported. Read-only. Nullable.
     * @param TeamsChannelPlanner|null $value Value to set for the planner property.
    */
    public function setPlanner(?TeamsChannelPlanner $value): void {
        $this->getBackingStore()->set('planner', $value);
    }

    /**
     * Sets the sharedWithTeams property value. A collection of teams with which a channel is shared.
     * @param array<SharedWithChannelTeamInfo>|null $value Value to set for the sharedWithTeams property.
    */
    public function setSharedWithTeams(?array $value): void {
        $this->getBackingStore()->set('sharedWithTeams', $value);
    }

    /**
     * Sets the summary property value. Contains summary information about the channel, including number of guests, members, owners, and an indicator for members from other tenants. The summary property is only returned if it appears in the $select clause of the Get channel method.
     * @param ChannelSummary|null $value Value to set for the summary property.
    */
    public function setSummary(?ChannelSummary $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

    /**
     * Sets the tabs property value. A collection of all the tabs in the channel.
     * @param array<TeamsTab>|null $value Value to set for the tabs property.
    */
    public function setTabs(?array $value): void {
        $this->getBackingStore()->set('tabs', $value);
    }

    /**
     * Sets the tenantId property value. The ID of the Microsoft Entra tenant.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the webUrl property value. A hyperlink to the channel in Microsoft Teams. This URL is supplied when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
