<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcBulkDisasterRecovery extends CloudPcBulkAction implements Parsable 
{
    /**
     * Instantiates a new CloudPcBulkDisasterRecovery and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcBulkDisasterRecovery');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkDisasterRecovery
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkDisasterRecovery {
        return new CloudPcBulkDisasterRecovery();
    }

    /**
     * Gets the capabilityType property value. The capabilityType property
     * @return CloudPcDisasterRecoveryCapabilityType|null
    */
    public function getCapabilityType(): ?CloudPcDisasterRecoveryCapabilityType {
        $val = $this->getBackingStore()->get('capabilityType');
        if (is_null($val) || $val instanceof CloudPcDisasterRecoveryCapabilityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilityType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capabilityType' => fn(ParseNode $n) => $o->setCapabilityType($n->getEnumValue(CloudPcDisasterRecoveryCapabilityType::class)),
            'licenseType' => fn(ParseNode $n) => $o->setLicenseType($n->getEnumValue(CloudPcDisasterRecoveryLicenseType::class)),
        ]);
    }

    /**
     * Gets the licenseType property value. The licenseType property
     * @return CloudPcDisasterRecoveryLicenseType|null
    */
    public function getLicenseType(): ?CloudPcDisasterRecoveryLicenseType {
        $val = $this->getBackingStore()->get('licenseType');
        if (is_null($val) || $val instanceof CloudPcDisasterRecoveryLicenseType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('capabilityType', $this->getCapabilityType());
        $writer->writeEnumValue('licenseType', $this->getLicenseType());
    }

    /**
     * Sets the capabilityType property value. The capabilityType property
     * @param CloudPcDisasterRecoveryCapabilityType|null $value Value to set for the capabilityType property.
    */
    public function setCapabilityType(?CloudPcDisasterRecoveryCapabilityType $value): void {
        $this->getBackingStore()->set('capabilityType', $value);
    }

    /**
     * Sets the licenseType property value. The licenseType property
     * @param CloudPcDisasterRecoveryLicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?CloudPcDisasterRecoveryLicenseType $value): void {
        $this->getBackingStore()->set('licenseType', $value);
    }

}
