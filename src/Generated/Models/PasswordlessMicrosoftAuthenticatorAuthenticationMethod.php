<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PasswordlessMicrosoftAuthenticatorAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * Instantiates a new PasswordlessMicrosoftAuthenticatorAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.passwordlessMicrosoftAuthenticatorAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasswordlessMicrosoftAuthenticatorAuthenticationMethod {
        return new PasswordlessMicrosoftAuthenticatorAuthenticationMethod();
    }

    /**
     * Gets the creationDateTime property value. The timestamp when this method was registered to the user.
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('creationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationDateTime'");
    }

    /**
     * Gets the device property value. The device property
     * @return Device|null
    */
    public function getDevice(): ?Device {
        $val = $this->getBackingStore()->get('device');
        if (is_null($val) || $val instanceof Device) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'device'");
    }

    /**
     * Gets the displayName property value. The display name of the mobile device as given by the user.
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
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([Device::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeObjectValue('device', $this->getDevice());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the creationDateTime property value. The timestamp when this method was registered to the user.
     * @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the device property value. The device property
     * @param Device|null $value Value to set for the device property.
    */
    public function setDevice(?Device $value): void {
        $this->getBackingStore()->set('device', $value);
    }

    /**
     * Sets the displayName property value. The display name of the mobile device as given by the user.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

}
