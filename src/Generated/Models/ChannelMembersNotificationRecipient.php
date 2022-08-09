<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChannelMembersNotificationRecipient extends TeamworkNotificationRecipient implements Parsable 
{
    /**
     * @var string|null $channelId The channel's identifier.
    */
    private ?string $channelId = null;
    
    /**
     * @var string|null $teamId The team's identifier under which the channel resides.
    */
    private ?string $teamId = null;
    
    /**
     * Instantiates a new ChannelMembersNotificationRecipient and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.channelMembersNotificationRecipient');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChannelMembersNotificationRecipient
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChannelMembersNotificationRecipient {
        return new ChannelMembersNotificationRecipient();
    }

    /**
     * Gets the channelId property value. The channel's identifier.
     * @return string|null
    */
    public function getChannelId(): ?string {
        return $this->channelId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'channelId' => function (ParseNode $n) use ($o) { $o->setChannelId($n->getStringValue()); },
            'teamId' => function (ParseNode $n) use ($o) { $o->setTeamId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the teamId property value. The team's identifier under which the channel resides.
     * @return string|null
    */
    public function getTeamId(): ?string {
        return $this->teamId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('channelId', $this->channelId);
        $writer->writeStringValue('teamId', $this->teamId);
    }

    /**
     * Sets the channelId property value. The channel's identifier.
     *  @param string|null $value Value to set for the channelId property.
    */
    public function setChannelId(?string $value ): void {
        $this->channelId = $value;
    }

    /**
     * Sets the teamId property value. The team's identifier under which the channel resides.
     *  @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value ): void {
        $this->teamId = $value;
    }

}
