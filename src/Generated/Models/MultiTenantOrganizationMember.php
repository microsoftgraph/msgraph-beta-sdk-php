<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MultiTenantOrganizationMember extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new multiTenantOrganizationMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.multiTenantOrganizationMember');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiTenantOrganizationMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiTenantOrganizationMember {
        return new MultiTenantOrganizationMember();
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
     * Gets the addedDateTime property value. The addedDateTime property
     * @return DateTime|null
    */
    public function getAddedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('addedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addedDateTime'");
    }

    /**
     * Gets the displayName property value. The displayName property
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addedByTenantId' => fn(ParseNode $n) => $o->setAddedByTenantId($n->getStringValue()),
            'addedDateTime' => fn(ParseNode $n) => $o->setAddedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'joinedDateTime' => fn(ParseNode $n) => $o->setJoinedDateTime($n->getDateTimeValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MultiTenantOrganizationMemberRole::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MultiTenantOrganizationMemberState::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'transitionDetails' => fn(ParseNode $n) => $o->setTransitionDetails($n->getObjectValue([MultiTenantOrganizationMemberTransitionDetails::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the joinedDateTime property value. The joinedDateTime property
     * @return DateTime|null
    */
    public function getJoinedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('joinedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinedDateTime'");
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
     * Gets the state property value. The state property
     * @return MultiTenantOrganizationMemberState|null
    */
    public function getState(): ?MultiTenantOrganizationMemberState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof MultiTenantOrganizationMemberState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
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
     * Gets the transitionDetails property value. The transitionDetails property
     * @return MultiTenantOrganizationMemberTransitionDetails|null
    */
    public function getTransitionDetails(): ?MultiTenantOrganizationMemberTransitionDetails {
        $val = $this->getBackingStore()->get('transitionDetails');
        if (is_null($val) || $val instanceof MultiTenantOrganizationMemberTransitionDetails) {
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
        $writer->writeDateTimeValue('addedDateTime', $this->getAddedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('joinedDateTime', $this->getJoinedDateTime());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('tenantId', $this->getTenantId());
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
     * Sets the addedDateTime property value. The addedDateTime property
     * @param DateTime|null $value Value to set for the addedDateTime property.
    */
    public function setAddedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('addedDateTime', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the joinedDateTime property value. The joinedDateTime property
     * @param DateTime|null $value Value to set for the joinedDateTime property.
    */
    public function setJoinedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('joinedDateTime', $value);
    }

    /**
     * Sets the role property value. The role property
     * @param MultiTenantOrganizationMemberRole|null $value Value to set for the role property.
    */
    public function setRole(?MultiTenantOrganizationMemberRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param MultiTenantOrganizationMemberState|null $value Value to set for the state property.
    */
    public function setState(?MultiTenantOrganizationMemberState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the transitionDetails property value. The transitionDetails property
     * @param MultiTenantOrganizationMemberTransitionDetails|null $value Value to set for the transitionDetails property.
    */
    public function setTransitionDetails(?MultiTenantOrganizationMemberTransitionDetails $value): void {
        $this->getBackingStore()->set('transitionDetails', $value);
    }

}
