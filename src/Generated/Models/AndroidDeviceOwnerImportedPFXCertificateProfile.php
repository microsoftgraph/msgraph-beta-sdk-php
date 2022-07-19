<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerImportedPFXCertificateProfile extends AndroidDeviceOwnerCertificateProfileBase implements Parsable 
{
    /**
     * @var IntendedPurpose|null $intendedPurpose PFX Import Options.
    */
    private ?IntendedPurpose $intendedPurpose = null;
    
    /**
     * @var array<ManagedDeviceCertificateState>|null $managedDeviceCertificateStates Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
    */
    private ?array $managedDeviceCertificateStates = null;
    
    /**
     * Instantiates a new AndroidDeviceOwnerImportedPFXCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerImportedPFXCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerImportedPFXCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerImportedPFXCertificateProfile {
        return new AndroidDeviceOwnerImportedPFXCertificateProfile();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'intendedPurpose' => function (ParseNode $n) use ($o) { $o->setIntendedPurpose($n->getEnumValue(IntendedPurpose::class)); },
            'managedDeviceCertificateStates' => function (ParseNode $n) use ($o) { $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues(array(ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the intendedPurpose property value. PFX Import Options.
     * @return IntendedPurpose|null
    */
    public function getIntendedPurpose(): ?IntendedPurpose {
        return $this->intendedPurpose;
    }

    /**
     * Gets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @return array<ManagedDeviceCertificateState>|null
    */
    public function getManagedDeviceCertificateStates(): ?array {
        return $this->managedDeviceCertificateStates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('intendedPurpose', $this->intendedPurpose);
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->managedDeviceCertificateStates);
    }

    /**
     * Sets the intendedPurpose property value. PFX Import Options.
     *  @param IntendedPurpose|null $value Value to set for the intendedPurpose property.
    */
    public function setIntendedPurpose(?IntendedPurpose $value ): void {
        $this->intendedPurpose = $value;
    }

    /**
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     *  @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value ): void {
        $this->managedDeviceCertificateStates = $value;
    }

}
