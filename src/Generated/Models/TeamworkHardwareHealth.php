<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkHardwareHealth implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeamworkHardwareHealth and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkHardwareHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkHardwareHealth {
        return new TeamworkHardwareHealth();
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
     * Gets the computeHealth property value. The system health details for a teamworkDevice.
     * @return TeamworkPeripheralHealth|null
    */
    public function getComputeHealth(): ?TeamworkPeripheralHealth {
        $val = $this->getBackingStore()->get('computeHealth');
        if (is_null($val) || $val instanceof TeamworkPeripheralHealth) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'computeHealth'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'computeHealth' => fn(ParseNode $n) => $o->setComputeHealth($n->getObjectValue([TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'])),
            'hdmiIngestHealth' => fn(ParseNode $n) => $o->setHdmiIngestHealth($n->getObjectValue([TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hdmiIngestHealth property value. The health details about the HDMI ingest of a device.
     * @return TeamworkPeripheralHealth|null
    */
    public function getHdmiIngestHealth(): ?TeamworkPeripheralHealth {
        $val = $this->getBackingStore()->get('hdmiIngestHealth');
        if (is_null($val) || $val instanceof TeamworkPeripheralHealth) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hdmiIngestHealth'");
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
        $writer->writeObjectValue('computeHealth', $this->getComputeHealth());
        $writer->writeObjectValue('hdmiIngestHealth', $this->getHdmiIngestHealth());
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
     * Sets the computeHealth property value. The system health details for a teamworkDevice.
     * @param TeamworkPeripheralHealth|null $value Value to set for the computeHealth property.
    */
    public function setComputeHealth(?TeamworkPeripheralHealth $value): void {
        $this->getBackingStore()->set('computeHealth', $value);
    }

    /**
     * Sets the hdmiIngestHealth property value. The health details about the HDMI ingest of a device.
     * @param TeamworkPeripheralHealth|null $value Value to set for the hdmiIngestHealth property.
    */
    public function setHdmiIngestHealth(?TeamworkPeripheralHealth $value): void {
        $this->getBackingStore()->set('hdmiIngestHealth', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
