<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Intune will provide customer the ability to configure hardware/bios settings on the enrolled windows 10 Azure Active Directory joined devices.
*/
class HardwarePasswordInfo extends Entity implements Parsable 
{
    /**
     * Instantiates a new HardwarePasswordInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HardwarePasswordInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HardwarePasswordInfo {
        return new HardwarePasswordInfo();
    }

    /**
     * Gets the currentPassword property value. Current device password
     * @return string|null
    */
    public function getCurrentPassword(): ?string {
        $val = $this->getBackingStore()->get('currentPassword');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentPassword'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'currentPassword' => fn(ParseNode $n) => $o->setCurrentPassword($n->getStringValue()),
            'previousPasswords' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPreviousPasswords($val);
            },
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
        ]);
    }

    /**
     * Gets the previousPasswords property value. List of previous device passwords
     * @return array<string>|null
    */
    public function getPreviousPasswords(): ?array {
        $val = $this->getBackingStore()->get('previousPasswords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousPasswords'");
    }

    /**
     * Gets the serialNumber property value. Device serial number
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('currentPassword', $this->getCurrentPassword());
        $writer->writeCollectionOfPrimitiveValues('previousPasswords', $this->getPreviousPasswords());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
    }

    /**
     * Sets the currentPassword property value. Current device password
     * @param string|null $value Value to set for the currentPassword property.
    */
    public function setCurrentPassword(?string $value): void {
        $this->getBackingStore()->set('currentPassword', $value);
    }

    /**
     * Sets the previousPasswords property value. List of previous device passwords
     * @param array<string>|null $value Value to set for the previousPasswords property.
    */
    public function setPreviousPasswords(?array $value): void {
        $this->getBackingStore()->set('previousPasswords', $value);
    }

    /**
     * Sets the serialNumber property value. Device serial number
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

}
