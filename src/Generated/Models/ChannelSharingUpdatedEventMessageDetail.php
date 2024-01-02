<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChannelSharingUpdatedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new channelSharingUpdatedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.channelSharingUpdatedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChannelSharingUpdatedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChannelSharingUpdatedEventMessageDetail {
        return new ChannelSharingUpdatedEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'ownerTeamId' => fn(ParseNode $n) => $o->setOwnerTeamId($n->getStringValue()),
            'ownerTenantId' => fn(ParseNode $n) => $o->setOwnerTenantId($n->getStringValue()),
            'sharedChannelId' => fn(ParseNode $n) => $o->setSharedChannelId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        $val = $this->getBackingStore()->get('initiator');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiator'");
    }

    /**
     * Gets the ownerTeamId property value. The ID of the team to which the shared channel belongs.
     * @return string|null
    */
    public function getOwnerTeamId(): ?string {
        $val = $this->getBackingStore()->get('ownerTeamId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerTeamId'");
    }

    /**
     * Gets the ownerTenantId property value. The ID of the tenant to which the shared channel belongs.
     * @return string|null
    */
    public function getOwnerTenantId(): ?string {
        $val = $this->getBackingStore()->get('ownerTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerTenantId'");
    }

    /**
     * Gets the sharedChannelId property value. The ID of the shared channel.
     * @return string|null
    */
    public function getSharedChannelId(): ?string {
        $val = $this->getBackingStore()->get('sharedChannelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedChannelId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initiator', $this->getInitiator());
        $writer->writeStringValue('ownerTeamId', $this->getOwnerTeamId());
        $writer->writeStringValue('ownerTenantId', $this->getOwnerTenantId());
        $writer->writeStringValue('sharedChannelId', $this->getSharedChannelId());
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

    /**
     * Sets the ownerTeamId property value. The ID of the team to which the shared channel belongs.
     * @param string|null $value Value to set for the ownerTeamId property.
    */
    public function setOwnerTeamId(?string $value): void {
        $this->getBackingStore()->set('ownerTeamId', $value);
    }

    /**
     * Sets the ownerTenantId property value. The ID of the tenant to which the shared channel belongs.
     * @param string|null $value Value to set for the ownerTenantId property.
    */
    public function setOwnerTenantId(?string $value): void {
        $this->getBackingStore()->set('ownerTenantId', $value);
    }

    /**
     * Sets the sharedChannelId property value. The ID of the shared channel.
     * @param string|null $value Value to set for the sharedChannelId property.
    */
    public function setSharedChannelId(?string $value): void {
        $this->getBackingStore()->set('sharedChannelId', $value);
    }

}
