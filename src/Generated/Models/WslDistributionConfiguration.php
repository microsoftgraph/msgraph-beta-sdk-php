<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WslDistributionConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WslDistributionConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WslDistributionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WslDistributionConfiguration {
        return new WslDistributionConfiguration();
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
     * Gets the distribution property value. Linux distribution like Debian, Fedora, Ubuntu etc.
     * @return string|null
    */
    public function getDistribution(): ?string {
        $val = $this->getBackingStore()->get('distribution');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'distribution'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'distribution' => fn(ParseNode $n) => $o->setDistribution($n->getStringValue()),
            'maximumOSVersion' => fn(ParseNode $n) => $o->setMaximumOSVersion($n->getStringValue()),
            'minimumOSVersion' => fn(ParseNode $n) => $o->setMinimumOSVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the maximumOSVersion property value. Maximum supported operating system version of the linux version.
     * @return string|null
    */
    public function getMaximumOSVersion(): ?string {
        $val = $this->getBackingStore()->get('maximumOSVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumOSVersion'");
    }

    /**
     * Gets the minimumOSVersion property value. Minimum supported operating system version of the linux version.
     * @return string|null
    */
    public function getMinimumOSVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumOSVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumOSVersion'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('distribution', $this->getDistribution());
        $writer->writeStringValue('maximumOSVersion', $this->getMaximumOSVersion());
        $writer->writeStringValue('minimumOSVersion', $this->getMinimumOSVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the distribution property value. Linux distribution like Debian, Fedora, Ubuntu etc.
     * @param string|null $value Value to set for the distribution property.
    */
    public function setDistribution(?string $value): void {
        $this->getBackingStore()->set('distribution', $value);
    }

    /**
     * Sets the maximumOSVersion property value. Maximum supported operating system version of the linux version.
     * @param string|null $value Value to set for the maximumOSVersion property.
    */
    public function setMaximumOSVersion(?string $value): void {
        $this->getBackingStore()->set('maximumOSVersion', $value);
    }

    /**
     * Sets the minimumOSVersion property value. Minimum supported operating system version of the linux version.
     * @param string|null $value Value to set for the minimumOSVersion property.
    */
    public function setMinimumOSVersion(?string $value): void {
        $this->getBackingStore()->set('minimumOSVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
