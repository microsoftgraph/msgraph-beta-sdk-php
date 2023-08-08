<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MultiTenantOrganizationJoinRequestRecord extends Entity implements Parsable 
{
    /**
     * Instantiates a new multiTenantOrganizationJoinRequestRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiTenantOrganizationJoinRequestRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiTenantOrganizationJoinRequestRecord {
        return new MultiTenantOrganizationJoinRequestRecord();
    }

    /**
     * Gets the addedByTenantId property value. The addedByTenantId property
     * @return string|null
    */
    public function getAddedByTenantId(): ?string {
        $val = $this->getBackingStore()->get('addedByTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addedByTenantId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addedByTenantId' => fn(ParseNode $n) => $o->setAddedByTenantId($n->getStringValue()),
            'memberState' => fn(ParseNode $n) => $o->setMemberState($n->getEnumValue(MultiTenantOrganizationMemberState::class)),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MultiTenantOrganizationMemberRole::class)),
            'transitionDetails' => fn(ParseNode $n) => $o->setTransitionDetails($n->getObjectValue([MultiTenantOrganizationJoinRequestTransitionDetails::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the memberState property value. The memberState property
     * @return MultiTenantOrganizationMemberState|null
    */
    public function getMemberState(): ?MultiTenantOrganizationMemberState {
        $val = $this->getBackingStore()->get('memberState');
        if (is_null($val) || $val instanceof MultiTenantOrganizationMemberState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberState'");
    }

    /**
     * Gets the role property value. The role property
     * @return MultiTenantOrganizationMemberRole|null
    */
    public function getRole(): ?MultiTenantOrganizationMemberRole {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof MultiTenantOrganizationMemberRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Gets the transitionDetails property value. The transitionDetails property
     * @return MultiTenantOrganizationJoinRequestTransitionDetails|null
    */
    public function getTransitionDetails(): ?MultiTenantOrganizationJoinRequestTransitionDetails {
        $val = $this->getBackingStore()->get('transitionDetails');
        if (is_null($val) || $val instanceof MultiTenantOrganizationJoinRequestTransitionDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transitionDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('addedByTenantId', $this->getAddedByTenantId());
        $writer->writeEnumValue('memberState', $this->getMemberState());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeObjectValue('transitionDetails', $this->getTransitionDetails());
    }

    /**
     * Sets the addedByTenantId property value. The addedByTenantId property
     * @param string|null $value Value to set for the addedByTenantId property.
    */
    public function setAddedByTenantId(?string $value): void {
        $this->getBackingStore()->set('addedByTenantId', $value);
    }

    /**
     * Sets the memberState property value. The memberState property
     * @param MultiTenantOrganizationMemberState|null $value Value to set for the memberState property.
    */
    public function setMemberState(?MultiTenantOrganizationMemberState $value): void {
        $this->getBackingStore()->set('memberState', $value);
    }

    /**
     * Sets the role property value. The role property
     * @param MultiTenantOrganizationMemberRole|null $value Value to set for the role property.
    */
    public function setRole(?MultiTenantOrganizationMemberRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the transitionDetails property value. The transitionDetails property
     * @param MultiTenantOrganizationJoinRequestTransitionDetails|null $value Value to set for the transitionDetails property.
    */
    public function setTransitionDetails(?MultiTenantOrganizationJoinRequestTransitionDetails $value): void {
        $this->getBackingStore()->set('transitionDetails', $value);
    }

}
