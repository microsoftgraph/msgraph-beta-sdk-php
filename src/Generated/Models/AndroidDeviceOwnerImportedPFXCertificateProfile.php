<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerImportedPFXCertificateProfile extends AndroidDeviceOwnerCertificateProfileBase implements Parsable 
{
    /**
     * @var AndroidDeviceOwnerCertificateAccessType|null $certificateAccessType Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
    */
    private ?AndroidDeviceOwnerCertificateAccessType $certificateAccessType = null;
    
    /**
     * @var IntendedPurpose|null $intendedPurpose PFX Import Options.
    */
    private ?IntendedPurpose $intendedPurpose = null;
    
    /**
     * @var array<ManagedDeviceCertificateState>|null $managedDeviceCertificateStates Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
    */
    private ?array $managedDeviceCertificateStates = null;
    
    /**
     * @var array<AndroidDeviceOwnerSilentCertificateAccess>|null $silentCertificateAccessDetails Certificate access information. This collection can contain a maximum of 50 elements.
    */
    private ?array $silentCertificateAccessDetails = null;
    
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
     * Gets the certificateAccessType property value. Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
     * @return AndroidDeviceOwnerCertificateAccessType|null
    */
    public function getCertificateAccessType(): ?AndroidDeviceOwnerCertificateAccessType {
        return $this->certificateAccessType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateAccessType' => function (ParseNode $n) use ($o) { $o->setCertificateAccessType($n->getEnumValue(AndroidDeviceOwnerCertificateAccessType::class)); },
            'intendedPurpose' => function (ParseNode $n) use ($o) { $o->setIntendedPurpose($n->getEnumValue(IntendedPurpose::class)); },
            'managedDeviceCertificateStates' => function (ParseNode $n) use ($o) { $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues(array(ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'))); },
            'silentCertificateAccessDetails' => function (ParseNode $n) use ($o) { $o->setSilentCertificateAccessDetails($n->getCollectionOfObjectValues(array(AndroidDeviceOwnerSilentCertificateAccess::class, 'createFromDiscriminatorValue'))); },
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
     * Gets the silentCertificateAccessDetails property value. Certificate access information. This collection can contain a maximum of 50 elements.
     * @return array<AndroidDeviceOwnerSilentCertificateAccess>|null
    */
    public function getSilentCertificateAccessDetails(): ?array {
        return $this->silentCertificateAccessDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('certificateAccessType', $this->certificateAccessType);
        $writer->writeEnumValue('intendedPurpose', $this->intendedPurpose);
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->managedDeviceCertificateStates);
        $writer->writeCollectionOfObjectValues('silentCertificateAccessDetails', $this->silentCertificateAccessDetails);
    }

    /**
     * Sets the certificateAccessType property value. Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
     *  @param AndroidDeviceOwnerCertificateAccessType|null $value Value to set for the certificateAccessType property.
    */
    public function setCertificateAccessType(?AndroidDeviceOwnerCertificateAccessType $value ): void {
        $this->certificateAccessType = $value;
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

    /**
     * Sets the silentCertificateAccessDetails property value. Certificate access information. This collection can contain a maximum of 50 elements.
     *  @param array<AndroidDeviceOwnerSilentCertificateAccess>|null $value Value to set for the silentCertificateAccessDetails property.
    */
    public function setSilentCertificateAccessDetails(?array $value ): void {
        $this->silentCertificateAccessDetails = $value;
    }

}
