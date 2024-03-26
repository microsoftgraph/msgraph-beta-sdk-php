<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WorkplaceSensorDeviceTelemetry implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WorkplaceSensorDeviceTelemetry and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkplaceSensorDeviceTelemetry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkplaceSensorDeviceTelemetry {
        return new WorkplaceSensorDeviceTelemetry();
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
     * Gets the boolValue property value. The value of the sensor.
     * @return bool|null
    */
    public function getBoolValue(): ?bool {
        $val = $this->getBackingStore()->get('boolValue');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'boolValue'");
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'boolValue' => fn(ParseNode $n) => $o->setBoolValue($n->getBooleanValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'intValue' => fn(ParseNode $n) => $o->setIntValue($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sensorId' => fn(ParseNode $n) => $o->setSensorId($n->getStringValue()),
            'sensorType' => fn(ParseNode $n) => $o->setSensorType($n->getEnumValue(WorkplaceSensorType::class)),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the intValue property value. The value of the sensor.
     * @return int|null
    */
    public function getIntValue(): ?int {
        $val = $this->getBackingStore()->get('intValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intValue'");
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
     * Gets the sensorId property value. The unique identifier of a sensor within the device. If the sensor Id is not provided, the sensorType will be used as sensorId.
     * @return string|null
    */
    public function getSensorId(): ?string {
        $val = $this->getBackingStore()->get('sensorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensorId'");
    }

    /**
     * Gets the sensorType property value. The sensorType property
     * @return WorkplaceSensorType|null
    */
    public function getSensorType(): ?WorkplaceSensorType {
        $val = $this->getBackingStore()->get('sensorType');
        if (is_null($val) || $val instanceof WorkplaceSensorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensorType'");
    }

    /**
     * Gets the timestamp property value. The timestamp at which the sensor value was observed.
     * @return DateTime|null
    */
    public function getTimestamp(): ?DateTime {
        $val = $this->getBackingStore()->get('timestamp');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timestamp'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('boolValue', $this->getBoolValue());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeIntegerValue('intValue', $this->getIntValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sensorId', $this->getSensorId());
        $writer->writeEnumValue('sensorType', $this->getSensorType());
        $writer->writeDateTimeValue('timestamp', $this->getTimestamp());
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
     * Sets the boolValue property value. The value of the sensor.
     * @param bool|null $value Value to set for the boolValue property.
    */
    public function setBoolValue(?bool $value): void {
        $this->getBackingStore()->set('boolValue', $value);
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the intValue property value. The value of the sensor.
     * @param int|null $value Value to set for the intValue property.
    */
    public function setIntValue(?int $value): void {
        $this->getBackingStore()->set('intValue', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sensorId property value. The unique identifier of a sensor within the device. If the sensor Id is not provided, the sensorType will be used as sensorId.
     * @param string|null $value Value to set for the sensorId property.
    */
    public function setSensorId(?string $value): void {
        $this->getBackingStore()->set('sensorId', $value);
    }

    /**
     * Sets the sensorType property value. The sensorType property
     * @param WorkplaceSensorType|null $value Value to set for the sensorType property.
    */
    public function setSensorType(?WorkplaceSensorType $value): void {
        $this->getBackingStore()->set('sensorType', $value);
    }

    /**
     * Sets the timestamp property value. The timestamp at which the sensor value was observed.
     * @param DateTime|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?DateTime $value): void {
        $this->getBackingStore()->set('timestamp', $value);
    }

}
