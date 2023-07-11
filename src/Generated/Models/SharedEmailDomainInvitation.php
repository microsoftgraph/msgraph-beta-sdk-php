<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedEmailDomainInvitation extends Entity implements Parsable 
{
    /**
     * Instantiates a new sharedEmailDomainInvitation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedEmailDomainInvitation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedEmailDomainInvitation {
        return new SharedEmailDomainInvitation();
    }

    /**
     * Gets the expiryTime property value. The expiryTime property
     * @return DateTime|null
    */
    public function getExpiryTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expiryTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expiryTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expiryTime' => fn(ParseNode $n) => $o->setExpiryTime($n->getDateTimeValue()),
            'invitationDomain' => fn(ParseNode $n) => $o->setInvitationDomain($n->getStringValue()),
            'invitationStatus' => fn(ParseNode $n) => $o->setInvitationStatus($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the invitationDomain property value. The invitationDomain property
     * @return string|null
    */
    public function getInvitationDomain(): ?string {
        $val = $this->getBackingStore()->get('invitationDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitationDomain'");
    }

    /**
     * Gets the invitationStatus property value. The invitationStatus property
     * @return string|null
    */
    public function getInvitationStatus(): ?string {
        $val = $this->getBackingStore()->get('invitationStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitationStatus'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expiryTime', $this->getExpiryTime());
        $writer->writeStringValue('invitationDomain', $this->getInvitationDomain());
        $writer->writeStringValue('invitationStatus', $this->getInvitationStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the expiryTime property value. The expiryTime property
     * @param DateTime|null $value Value to set for the expiryTime property.
    */
    public function setExpiryTime(?DateTime $value): void {
        $this->getBackingStore()->set('expiryTime', $value);
    }

    /**
     * Sets the invitationDomain property value. The invitationDomain property
     * @param string|null $value Value to set for the invitationDomain property.
    */
    public function setInvitationDomain(?string $value): void {
        $this->getBackingStore()->set('invitationDomain', $value);
    }

    /**
     * Sets the invitationStatus property value. The invitationStatus property
     * @param string|null $value Value to set for the invitationStatus property.
    */
    public function setInvitationStatus(?string $value): void {
        $this->getBackingStore()->set('invitationStatus', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
