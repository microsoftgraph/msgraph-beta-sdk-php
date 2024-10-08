<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * MacOS PFX Import certificate profile
*/
class MacOSImportedPFXCertificateProfile extends MacOSCertificateProfileBase implements Parsable 
{
    /**
     * Instantiates a new MacOSImportedPFXCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSImportedPFXCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSImportedPFXCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSImportedPFXCertificateProfile {
        return new MacOSImportedPFXCertificateProfile();
    }

    /**
     * Gets the deploymentChannel property value. Indicates the deployment channel type used to deploy the configuration profile. Possible values are deviceChannel, userChannel. Possible values are: deviceChannel, userChannel, unknownFutureValue.
     * @return AppleDeploymentChannel|null
    */
    public function getDeploymentChannel(): ?AppleDeploymentChannel {
        $val = $this->getBackingStore()->get('deploymentChannel');
        if (is_null($val) || $val instanceof AppleDeploymentChannel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentChannel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deploymentChannel' => fn(ParseNode $n) => $o->setDeploymentChannel($n->getEnumValue(AppleDeploymentChannel::class)),
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
        $writer->writeEnumValue('deploymentChannel', $this->getDeploymentChannel());
        $writer->writeEnumValue('intendedPurpose', $this->getIntendedPurpose());
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->getManagedDeviceCertificateStates());
    }

    /**
     * Sets the deploymentChannel property value. Indicates the deployment channel type used to deploy the configuration profile. Possible values are deviceChannel, userChannel. Possible values are: deviceChannel, userChannel, unknownFutureValue.
     * @param AppleDeploymentChannel|null $value Value to set for the deploymentChannel property.
    */
    public function setDeploymentChannel(?AppleDeploymentChannel $value): void {
        $this->getBackingStore()->set('deploymentChannel', $value);
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
