<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Collection of properties describing the current status of the battery.
*/
class UserExperienceAnalyticsDeviceBatteryDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceBatteryDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceBatteryDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceBatteryDetail {
        return new UserExperienceAnalyticsDeviceBatteryDetail();
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
     * Gets the batteryId property value. Uniquely identifies the batteries in a single device.
     * @return string|null
    */
    public function getBatteryId(): ?string {
        $val = $this->getBackingStore()->get('batteryId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'batteryId' => fn(ParseNode $n) => $o->setBatteryId($n->getStringValue()),
            'fullBatteryDrainCount' => fn(ParseNode $n) => $o->setFullBatteryDrainCount($n->getIntegerValue()),
            'maxCapacityPercentage' => fn(ParseNode $n) => $o->setMaxCapacityPercentage($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fullBatteryDrainCount property value. Number of times the battery has been discharged an amount that equals 100% of its capacity, but not necessarily by discharging it from 100% to 0%. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getFullBatteryDrainCount(): ?int {
        $val = $this->getBackingStore()->get('fullBatteryDrainCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fullBatteryDrainCount'");
    }

    /**
     * Gets the maxCapacityPercentage property value. Ratio of current capacity and design capacity of the battery. Unit in percentage and values range from 0-100. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getMaxCapacityPercentage(): ?int {
        $val = $this->getBackingStore()->get('maxCapacityPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxCapacityPercentage'");
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
        $writer->writeStringValue('batteryId', $this->getBatteryId());
        $writer->writeIntegerValue('fullBatteryDrainCount', $this->getFullBatteryDrainCount());
        $writer->writeIntegerValue('maxCapacityPercentage', $this->getMaxCapacityPercentage());
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
     * Sets the batteryId property value. Uniquely identifies the batteries in a single device.
     * @param string|null $value Value to set for the batteryId property.
    */
    public function setBatteryId(?string $value): void {
        $this->getBackingStore()->set('batteryId', $value);
    }

    /**
     * Sets the fullBatteryDrainCount property value. Number of times the battery has been discharged an amount that equals 100% of its capacity, but not necessarily by discharging it from 100% to 0%. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the fullBatteryDrainCount property.
    */
    public function setFullBatteryDrainCount(?int $value): void {
        $this->getBackingStore()->set('fullBatteryDrainCount', $value);
    }

    /**
     * Sets the maxCapacityPercentage property value. Ratio of current capacity and design capacity of the battery. Unit in percentage and values range from 0-100. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the maxCapacityPercentage property.
    */
    public function setMaxCapacityPercentage(?int $value): void {
        $this->getBackingStore()->set('maxCapacityPercentage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
