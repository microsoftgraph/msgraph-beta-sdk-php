<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileDeviceManagementPolicy extends MobilityManagementPolicy implements Parsable 
{
    /**
     * Instantiates a new MobileDeviceManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileDeviceManagementPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileDeviceManagementPolicy {
        return new MobileDeviceManagementPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isMdmEnrollmentDuringRegistrationDisabled' => fn(ParseNode $n) => $o->setIsMdmEnrollmentDuringRegistrationDisabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isMdmEnrollmentDuringRegistrationDisabled property value. Controls the option if users in an automatic enrollment configuration on Microsoft Entra registered devices are prompted to MDM enroll their device in the Entra account registration flow.
     * @return bool|null
    */
    public function getIsMdmEnrollmentDuringRegistrationDisabled(): ?bool {
        $val = $this->getBackingStore()->get('isMdmEnrollmentDuringRegistrationDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMdmEnrollmentDuringRegistrationDisabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isMdmEnrollmentDuringRegistrationDisabled', $this->getIsMdmEnrollmentDuringRegistrationDisabled());
    }

    /**
     * Sets the isMdmEnrollmentDuringRegistrationDisabled property value. Controls the option if users in an automatic enrollment configuration on Microsoft Entra registered devices are prompted to MDM enroll their device in the Entra account registration flow.
     * @param bool|null $value Value to set for the isMdmEnrollmentDuringRegistrationDisabled property.
    */
    public function setIsMdmEnrollmentDuringRegistrationDisabled(?bool $value): void {
        $this->getBackingStore()->set('isMdmEnrollmentDuringRegistrationDisabled', $value);
    }

}
