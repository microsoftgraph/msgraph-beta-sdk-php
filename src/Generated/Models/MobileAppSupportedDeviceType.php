<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Device properties
*/
class MobileAppSupportedDeviceType implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MobileAppSupportedDeviceType and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppSupportedDeviceType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppSupportedDeviceType {
        return new MobileAppSupportedDeviceType();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'maximumOperatingSystemVersion' => fn(ParseNode $n) => $o->setMaximumOperatingSystemVersion($n->getStringValue()),
            'minimumOperatingSystemVersion' => fn(ParseNode $n) => $o->setMinimumOperatingSystemVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(DeviceType::class)),
        ];
    }

    /**
     * Gets the maximumOperatingSystemVersion property value. Maximum OS version
     * @return string|null
    */
    public function getMaximumOperatingSystemVersion(): ?string {
        $val = $this->getBackingStore()->get('maximumOperatingSystemVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumOperatingSystemVersion'");
    }

    /**
     * Gets the minimumOperatingSystemVersion property value. Minimum OS version
     * @return string|null
    */
    public function getMinimumOperatingSystemVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumOperatingSystemVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumOperatingSystemVersion'");
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
     * Gets the type property value. Device type.
     * @return DeviceType|null
    */
    public function getType(): ?DeviceType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof DeviceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('maximumOperatingSystemVersion', $this->getMaximumOperatingSystemVersion());
        $writer->writeStringValue('minimumOperatingSystemVersion', $this->getMinimumOperatingSystemVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the maximumOperatingSystemVersion property value. Maximum OS version
     * @param string|null $value Value to set for the maximumOperatingSystemVersion property.
    */
    public function setMaximumOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('maximumOperatingSystemVersion', $value);
    }

    /**
     * Sets the minimumOperatingSystemVersion property value. Minimum OS version
     * @param string|null $value Value to set for the minimumOperatingSystemVersion property.
    */
    public function setMinimumOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('minimumOperatingSystemVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the type property value. Device type.
     * @param DeviceType|null $value Value to set for the type property.
    */
    public function setType(?DeviceType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
