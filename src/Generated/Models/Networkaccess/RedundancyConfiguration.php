<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RedundancyConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new redundancyConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedundancyConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RedundancyConfiguration {
        return new RedundancyConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'redundancyTier' => fn(ParseNode $n) => $o->setRedundancyTier($n->getEnumValue(RedundancyTier::class)),
            'zoneLocalIpAddress' => fn(ParseNode $n) => $o->setZoneLocalIpAddress($n->getStringValue()),
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
     * Gets the redundancyTier property value. The redundancyTier property
     * @return RedundancyTier|null
    */
    public function getRedundancyTier(): ?RedundancyTier {
        $val = $this->getBackingStore()->get('redundancyTier');
        if (is_null($val) || $val instanceof RedundancyTier) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redundancyTier'");
    }

    /**
     * Gets the zoneLocalIpAddress property value. The zoneLocalIpAddress property
     * @return string|null
    */
    public function getZoneLocalIpAddress(): ?string {
        $val = $this->getBackingStore()->get('zoneLocalIpAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zoneLocalIpAddress'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('redundancyTier', $this->getRedundancyTier());
        $writer->writeStringValue('zoneLocalIpAddress', $this->getZoneLocalIpAddress());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the redundancyTier property value. The redundancyTier property
     * @param RedundancyTier|null $value Value to set for the redundancyTier property.
    */
    public function setRedundancyTier(?RedundancyTier $value): void {
        $this->getBackingStore()->set('redundancyTier', $value);
    }

    /**
     * Sets the zoneLocalIpAddress property value. The zoneLocalIpAddress property
     * @param string|null $value Value to set for the zoneLocalIpAddress property.
    */
    public function setZoneLocalIpAddress(?string $value): void {
        $this->getBackingStore()->set('zoneLocalIpAddress', $value);
    }

}
