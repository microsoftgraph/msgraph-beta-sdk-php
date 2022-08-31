<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var AndroidDeviceOwnerCertificateAccessType|null $certificateAccessType Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
    */
    private ?AndroidDeviceOwnerCertificateAccessType $certificateAccessType = null;
    
    /**
     * @var DeviceManagementDerivedCredentialSettings|null $derivedCredentialSettings Tenant level settings for the Derived Credentials to be used for authentication.
    */
    private ?DeviceManagementDerivedCredentialSettings $derivedCredentialSettings = null;
    
    /**
     * @var array<AndroidDeviceOwnerSilentCertificateAccess>|null $silentCertificateAccessDetails Certificate access information. This collection can contain a maximum of 50 elements.
    */
    private ?array $silentCertificateAccessDetails = null;
    
    /**
     * Instantiates a new AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerDerivedCredentialAuthenticationConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration {
        return new AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration();
    }

    /**
     * Gets the certificateAccessType property value. Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
     * @return AndroidDeviceOwnerCertificateAccessType|null
    */
    public function getCertificateAccessType(): ?AndroidDeviceOwnerCertificateAccessType {
        return $this->certificateAccessType;
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        return $this->derivedCredentialSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateAccessType' => function (ParseNode $n) use ($o) { $o->setCertificateAccessType($n->getEnumValue(AndroidDeviceOwnerCertificateAccessType::class)); },
            'derivedCredentialSettings' => function (ParseNode $n) use ($o) { $o->setDerivedCredentialSettings($n->getObjectValue(array(DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'))); },
            'silentCertificateAccessDetails' => function (ParseNode $n) use ($o) { $o->setSilentCertificateAccessDetails($n->getCollectionOfObjectValues(array(AndroidDeviceOwnerSilentCertificateAccess::class, 'createFromDiscriminatorValue'))); },
        ]);
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
        $writer->writeObjectValue('derivedCredentialSettings', $this->derivedCredentialSettings);
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
     * Sets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     *  @param DeviceManagementDerivedCredentialSettings|null $value Value to set for the derivedCredentialSettings property.
    */
    public function setDerivedCredentialSettings(?DeviceManagementDerivedCredentialSettings $value ): void {
        $this->derivedCredentialSettings = $value;
    }

    /**
     * Sets the silentCertificateAccessDetails property value. Certificate access information. This collection can contain a maximum of 50 elements.
     *  @param array<AndroidDeviceOwnerSilentCertificateAccess>|null $value Value to set for the silentCertificateAccessDetails property.
    */
    public function setSilentCertificateAccessDetails(?array $value ): void {
        $this->silentCertificateAccessDetails = $value;
    }

}
