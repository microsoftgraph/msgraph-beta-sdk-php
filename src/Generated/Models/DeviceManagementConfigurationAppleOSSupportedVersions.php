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
 * Indicates the version range for an apple setting.
*/
class DeviceManagementConfigurationAppleOSSupportedVersions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceManagementConfigurationAppleOSSupportedVersions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationAppleOSSupportedVersions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationAppleOSSupportedVersions {
        return new DeviceManagementConfigurationAppleOSSupportedVersions();
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
            'includesMaxVersion' => fn(ParseNode $n) => $o->setIncludesMaxVersion($n->getBooleanValue()),
            'includesMinVersion' => fn(ParseNode $n) => $o->setIncludesMinVersion($n->getBooleanValue()),
            'maxVersion' => fn(ParseNode $n) => $o->setMaxVersion($n->getStringValue()),
            'minVersion' => fn(ParseNode $n) => $o->setMinVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the includesMaxVersion property value. Indicates whether the maximum version is included in the supported version range.
     * @return bool|null
    */
    public function getIncludesMaxVersion(): ?bool {
        $val = $this->getBackingStore()->get('includesMaxVersion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includesMaxVersion'");
    }

    /**
     * Gets the includesMinVersion property value. Indicates whether the minimum version is included in the supported version range.
     * @return bool|null
    */
    public function getIncludesMinVersion(): ?bool {
        $val = $this->getBackingStore()->get('includesMinVersion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includesMinVersion'");
    }

    /**
     * Gets the maxVersion property value. Gets the maximum supported version for an Apple setting.
     * @return string|null
    */
    public function getMaxVersion(): ?string {
        $val = $this->getBackingStore()->get('maxVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxVersion'");
    }

    /**
     * Gets the minVersion property value. Gets the minimum supported version for an Apple setting.
     * @return string|null
    */
    public function getMinVersion(): ?string {
        $val = $this->getBackingStore()->get('minVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minVersion'");
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
        $writer->writeBooleanValue('includesMaxVersion', $this->getIncludesMaxVersion());
        $writer->writeBooleanValue('includesMinVersion', $this->getIncludesMinVersion());
        $writer->writeStringValue('maxVersion', $this->getMaxVersion());
        $writer->writeStringValue('minVersion', $this->getMinVersion());
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
     * Sets the includesMaxVersion property value. Indicates whether the maximum version is included in the supported version range.
     * @param bool|null $value Value to set for the includesMaxVersion property.
    */
    public function setIncludesMaxVersion(?bool $value): void {
        $this->getBackingStore()->set('includesMaxVersion', $value);
    }

    /**
     * Sets the includesMinVersion property value. Indicates whether the minimum version is included in the supported version range.
     * @param bool|null $value Value to set for the includesMinVersion property.
    */
    public function setIncludesMinVersion(?bool $value): void {
        $this->getBackingStore()->set('includesMinVersion', $value);
    }

    /**
     * Sets the maxVersion property value. Gets the maximum supported version for an Apple setting.
     * @param string|null $value Value to set for the maxVersion property.
    */
    public function setMaxVersion(?string $value): void {
        $this->getBackingStore()->set('maxVersion', $value);
    }

    /**
     * Sets the minVersion property value. Gets the minimum supported version for an Apple setting.
     * @param string|null $value Value to set for the minVersion property.
    */
    public function setMinVersion(?string $value): void {
        $this->getBackingStore()->set('minVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
