<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MicrosoftAppsFileStorageContainerGeoUsage implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MicrosoftAppsFileStorageContainerGeoUsage and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAppsFileStorageContainerGeoUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAppsFileStorageContainerGeoUsage {
        return new MicrosoftAppsFileStorageContainerGeoUsage();
    }

    /**
     * Gets the activeContainerCount property value. The number of active file storage containers in this geographic location.
     * @return int|null
    */
    public function getActiveContainerCount(): ?int {
        $val = $this->getBackingStore()->get('activeContainerCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeContainerCount'");
    }

    /**
     * Gets the activeStorageUsedInBytes property value. The storage used in bytes for active file storage containers in this geographic location.
     * @return int|null
    */
    public function getActiveStorageUsedInBytes(): ?int {
        $val = $this->getBackingStore()->get('activeStorageUsedInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeStorageUsedInBytes'");
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
     * Gets the dataLocationCode property value. The geographic location code (for example, NAM for North America, EUR for Europe).
     * @return string|null
    */
    public function getDataLocationCode(): ?string {
        $val = $this->getBackingStore()->get('dataLocationCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataLocationCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activeContainerCount' => fn(ParseNode $n) => $o->setActiveContainerCount($n->getIntegerValue()),
            'activeStorageUsedInBytes' => fn(ParseNode $n) => $o->setActiveStorageUsedInBytes($n->getIntegerValue()),
            'dataLocationCode' => fn(ParseNode $n) => $o->setDataLocationCode($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'usageByApp' => fn(ParseNode $n) => $o->setUsageByApp($n->getCollectionOfObjectValues([MicrosoftAppsFileStorageContainerAppUsage::class, 'createFromDiscriminatorValue'])),
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
     * Gets the usageByApp property value. Storage usage data broken down by application within this geographic location. Expandable using $expand=usageByApp.
     * @return array<MicrosoftAppsFileStorageContainerAppUsage>|null
    */
    public function getUsageByApp(): ?array {
        $val = $this->getBackingStore()->get('usageByApp');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MicrosoftAppsFileStorageContainerAppUsage::class);
            /** @var array<MicrosoftAppsFileStorageContainerAppUsage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageByApp'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('usageByApp', $this->getUsageByApp());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activeContainerCount property value. The number of active file storage containers in this geographic location.
     * @param int|null $value Value to set for the activeContainerCount property.
    */
    public function setActiveContainerCount(?int $value): void {
        $this->getBackingStore()->set('activeContainerCount', $value);
    }

    /**
     * Sets the activeStorageUsedInBytes property value. The storage used in bytes for active file storage containers in this geographic location.
     * @param int|null $value Value to set for the activeStorageUsedInBytes property.
    */
    public function setActiveStorageUsedInBytes(?int $value): void {
        $this->getBackingStore()->set('activeStorageUsedInBytes', $value);
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
     * Sets the dataLocationCode property value. The geographic location code (for example, NAM for North America, EUR for Europe).
     * @param string|null $value Value to set for the dataLocationCode property.
    */
    public function setDataLocationCode(?string $value): void {
        $this->getBackingStore()->set('dataLocationCode', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the usageByApp property value. Storage usage data broken down by application within this geographic location. Expandable using $expand=usageByApp.
     * @param array<MicrosoftAppsFileStorageContainerAppUsage>|null $value Value to set for the usageByApp property.
    */
    public function setUsageByApp(?array $value): void {
        $this->getBackingStore()->set('usageByApp', $value);
    }

}
