<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcDisasterRecoveryCapability implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcDisasterRecoveryCapability and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDisasterRecoveryCapability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDisasterRecoveryCapability {
        return new CloudPcDisasterRecoveryCapability();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the capabilityType property value. The disaster recovery action that can be performed for the Cloud PC. The possible values are: none, failover, failback, unknownFutureValue.
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
        return  [
            'capabilityType' => fn(ParseNode $n) => $o->setCapabilityType($n->getEnumValue(CloudPcDisasterRecoveryCapabilityType::class)),
            'licenseType' => fn(ParseNode $n) => $o->setLicenseType($n->getEnumValue(CloudPcDisasterRecoveryLicenseType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryRegion' => fn(ParseNode $n) => $o->setPrimaryRegion($n->getStringValue()),
            'secondaryRegion' => fn(ParseNode $n) => $o->setSecondaryRegion($n->getStringValue()),
        ];
    }

    /**
     * Gets the licenseType property value. The disaster recovery license type that provides the capability. The possible values are: none, standard, unknownFutureValue, plus. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: plus.
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the primaryRegion property value. The primary and mainly used region where the Cloud PC is located.
     * @return string|null
    */
    public function getPrimaryRegion(): ?string {
        $val = $this->getBackingStore()->get('primaryRegion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryRegion'");
    }

    /**
     * Gets the secondaryRegion property value. The secondary region to which the Cloud PC can be failed over during a regional outage.
     * @return string|null
    */
    public function getSecondaryRegion(): ?string {
        $val = $this->getBackingStore()->get('secondaryRegion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secondaryRegion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('capabilityType', $this->getCapabilityType());
        $writer->writeEnumValue('licenseType', $this->getLicenseType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('primaryRegion', $this->getPrimaryRegion());
        $writer->writeStringValue('secondaryRegion', $this->getSecondaryRegion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the capabilityType property value. The disaster recovery action that can be performed for the Cloud PC. The possible values are: none, failover, failback, unknownFutureValue.
     * @param CloudPcDisasterRecoveryCapabilityType|null $value Value to set for the capabilityType property.
    */
    public function setCapabilityType(?CloudPcDisasterRecoveryCapabilityType $value): void {
        $this->getBackingStore()->set('capabilityType', $value);
    }

    /**
     * Sets the licenseType property value. The disaster recovery license type that provides the capability. The possible values are: none, standard, unknownFutureValue, plus. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: plus.
     * @param CloudPcDisasterRecoveryLicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?CloudPcDisasterRecoveryLicenseType $value): void {
        $this->getBackingStore()->set('licenseType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryRegion property value. The primary and mainly used region where the Cloud PC is located.
     * @param string|null $value Value to set for the primaryRegion property.
    */
    public function setPrimaryRegion(?string $value): void {
        $this->getBackingStore()->set('primaryRegion', $value);
    }

    /**
     * Sets the secondaryRegion property value. The secondary region to which the Cloud PC can be failed over during a regional outage.
     * @param string|null $value Value to set for the secondaryRegion property.
    */
    public function setSecondaryRegion(?string $value): void {
        $this->getBackingStore()->set('secondaryRegion', $value);
    }

}
