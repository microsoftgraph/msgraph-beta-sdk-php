<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcStorageConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcStorageConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcStorageConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcStorageConfiguration {
        return new CloudPcStorageConfiguration();
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
     * Gets the allocatedStorageSizeCategory property value. The allocatedStorageSizeCategory property
     * @return CloudPcUserSettingsPersistenceStorageSizeCategory|null
    */
    public function getAllocatedStorageSizeCategory(): ?CloudPcUserSettingsPersistenceStorageSizeCategory {
        $val = $this->getBackingStore()->get('allocatedStorageSizeCategory');
        if (is_null($val) || $val instanceof CloudPcUserSettingsPersistenceStorageSizeCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allocatedStorageSizeCategory'");
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
            'allocatedStorageSizeCategory' => fn(ParseNode $n) => $o->setAllocatedStorageSizeCategory($n->getEnumValue(CloudPcUserSettingsPersistenceStorageSizeCategory::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'storageSizingType' => fn(ParseNode $n) => $o->setStorageSizingType($n->getEnumValue(CloudPcStorageSizingType::class)),
        ];
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
     * Gets the storageSizingType property value. The storageSizingType property
     * @return CloudPcStorageSizingType|null
    */
    public function getStorageSizingType(): ?CloudPcStorageSizingType {
        $val = $this->getBackingStore()->get('storageSizingType');
        if (is_null($val) || $val instanceof CloudPcStorageSizingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageSizingType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('allocatedStorageSizeCategory', $this->getAllocatedStorageSizeCategory());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('storageSizingType', $this->getStorageSizingType());
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
     * Sets the allocatedStorageSizeCategory property value. The allocatedStorageSizeCategory property
     * @param CloudPcUserSettingsPersistenceStorageSizeCategory|null $value Value to set for the allocatedStorageSizeCategory property.
    */
    public function setAllocatedStorageSizeCategory(?CloudPcUserSettingsPersistenceStorageSizeCategory $value): void {
        $this->getBackingStore()->set('allocatedStorageSizeCategory', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the storageSizingType property value. The storageSizingType property
     * @param CloudPcStorageSizingType|null $value Value to set for the storageSizingType property.
    */
    public function setStorageSizingType(?CloudPcStorageSizingType $value): void {
        $this->getBackingStore()->set('storageSizingType', $value);
    }

}
