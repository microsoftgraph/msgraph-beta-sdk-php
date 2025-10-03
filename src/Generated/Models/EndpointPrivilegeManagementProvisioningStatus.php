<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Endpoint privilege management (EPM) tenant provisioning status contains tenant level license and onboarding state information.
*/
class EndpointPrivilegeManagementProvisioningStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new EndpointPrivilegeManagementProvisioningStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EndpointPrivilegeManagementProvisioningStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EndpointPrivilegeManagementProvisioningStatus {
        return new EndpointPrivilegeManagementProvisioningStatus();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'licenseType' => fn(ParseNode $n) => $o->setLicenseType($n->getEnumValue(LicenseType::class)),
            'onboardedToMicrosoftManagedPlatform' => fn(ParseNode $n) => $o->setOnboardedToMicrosoftManagedPlatform($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the licenseType property value. Indicates whether tenant has a valid Intune Endpoint Privilege Management license. Possible value are : 0 - notPaid, 1 - paid, 2 - trial. See LicenseType enum for more details. Default notPaid .
     * @return LicenseType|null
    */
    public function getLicenseType(): ?LicenseType {
        $val = $this->getBackingStore()->get('licenseType');
        if (is_null($val) || $val instanceof LicenseType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseType'");
    }

    /**
     * Gets the onboardedToMicrosoftManagedPlatform property value. Indicates whether tenant is onboarded to Microsoft Managed Platform - Cloud (MMPC). When set to true, implies tenant is onboarded and when set to false, implies tenant is not onboarded. Default set to false.
     * @return bool|null
    */
    public function getOnboardedToMicrosoftManagedPlatform(): ?bool {
        $val = $this->getBackingStore()->get('onboardedToMicrosoftManagedPlatform');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onboardedToMicrosoftManagedPlatform'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('licenseType', $this->getLicenseType());
        $writer->writeBooleanValue('onboardedToMicrosoftManagedPlatform', $this->getOnboardedToMicrosoftManagedPlatform());
    }

    /**
     * Sets the licenseType property value. Indicates whether tenant has a valid Intune Endpoint Privilege Management license. Possible value are : 0 - notPaid, 1 - paid, 2 - trial. See LicenseType enum for more details. Default notPaid .
     * @param LicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?LicenseType $value): void {
        $this->getBackingStore()->set('licenseType', $value);
    }

    /**
     * Sets the onboardedToMicrosoftManagedPlatform property value. Indicates whether tenant is onboarded to Microsoft Managed Platform - Cloud (MMPC). When set to true, implies tenant is onboarded and when set to false, implies tenant is not onboarded. Default set to false.
     * @param bool|null $value Value to set for the onboardedToMicrosoftManagedPlatform property.
    */
    public function setOnboardedToMicrosoftManagedPlatform(?bool $value): void {
        $this->getBackingStore()->set('onboardedToMicrosoftManagedPlatform', $value);
    }

}
