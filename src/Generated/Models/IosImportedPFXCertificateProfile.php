<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * iOS PFX Import certificate profile
*/
class IosImportedPFXCertificateProfile extends IosCertificateProfile implements Parsable 
{
    /**
     * Instantiates a new iosImportedPFXCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosImportedPFXCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosImportedPFXCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosImportedPFXCertificateProfile {
        return new IosImportedPFXCertificateProfile();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'intendedPurpose' => fn(ParseNode $n) => $o->setIntendedPurpose($n->getEnumValue(IntendedPurpose::class)),
            'managedDeviceCertificateStates' => fn(ParseNode $n) => $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues([ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the intendedPurpose property value. PFX Import Options.
     * @return IntendedPurpose|null
    */
    public function getIntendedPurpose(): ?IntendedPurpose {
        $val = $this->getBackingStore()->get('intendedPurpose');
        if (is_null($val) || $val instanceof IntendedPurpose) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intendedPurpose'");
    }

    /**
     * Gets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @return array<ManagedDeviceCertificateState>|null
    */
    public function getManagedDeviceCertificateStates(): ?array {
        $val = $this->getBackingStore()->get('managedDeviceCertificateStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceCertificateState::class);
            /** @var array<ManagedDeviceCertificateState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceCertificateStates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('intendedPurpose', $this->getIntendedPurpose());
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->getManagedDeviceCertificateStates());
    }

    /**
     * Sets the intendedPurpose property value. PFX Import Options.
     * @param IntendedPurpose|null $value Value to set for the intendedPurpose property.
    */
    public function setIntendedPurpose(?IntendedPurpose $value): void {
        $this->getBackingStore()->set('intendedPurpose', $value);
    }

    /**
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value): void {
        $this->getBackingStore()->set('managedDeviceCertificateStates', $value);
    }

}
