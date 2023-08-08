<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics battery health model performance entity contains battery related information for all unique device models in their organization.
*/
class UserExperienceAnalyticsBatteryHealthModelPerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthModelPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthModelPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthModelPerformance {
        return new UserExperienceAnalyticsBatteryHealthModelPerformance();
    }

    /**
     * Gets the activeDevices property value. Number of active devices for that model. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDevices(): ?int {
        $val = $this->getBackingStore()->get('activeDevices');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDevices'");
    }

    /**
     * Gets the averageBatteryAgeInDays property value. The mean of the battery age for all devices of a given model in a tenant. Unit in days. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAverageBatteryAgeInDays(): ?int {
        $val = $this->getBackingStore()->get('averageBatteryAgeInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageBatteryAgeInDays'");
    }

    /**
     * Gets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices of a given model. Unit in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAverageEstimatedRuntimeInMinutes(): ?int {
        $val = $this->getBackingStore()->get('averageEstimatedRuntimeInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageEstimatedRuntimeInMinutes'");
    }

    /**
     * Gets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices of a given model. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAverageMaxCapacityPercentage(): ?int {
        $val = $this->getBackingStore()->get('averageMaxCapacityPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageMaxCapacityPercentage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDevices' => fn(ParseNode $n) => $o->setActiveDevices($n->getIntegerValue()),
            'averageBatteryAgeInDays' => fn(ParseNode $n) => $o->setAverageBatteryAgeInDays($n->getIntegerValue()),
            'averageEstimatedRuntimeInMinutes' => fn(ParseNode $n) => $o->setAverageEstimatedRuntimeInMinutes($n->getIntegerValue()),
            'averageMaxCapacityPercentage' => fn(ParseNode $n) => $o->setAverageMaxCapacityPercentage($n->getIntegerValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'meanFullBatteryDrainCount' => fn(ParseNode $n) => $o->setMeanFullBatteryDrainCount($n->getIntegerValue()),
            'medianEstimatedRuntimeInMinutes' => fn(ParseNode $n) => $o->setMedianEstimatedRuntimeInMinutes($n->getIntegerValue()),
            'medianFullBatteryDrainCount' => fn(ParseNode $n) => $o->setMedianFullBatteryDrainCount($n->getIntegerValue()),
            'medianMaxCapacityPercentage' => fn(ParseNode $n) => $o->setMedianMaxCapacityPercentage($n->getIntegerValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'modelBatteryHealthScore' => fn(ParseNode $n) => $o->setModelBatteryHealthScore($n->getIntegerValue()),
            'modelHealthStatus' => fn(ParseNode $n) => $o->setModelHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
        ]);
    }

    /**
     * Gets the manufacturer property value. Name of the device manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the meanFullBatteryDrainCount property value. The mean of number of times the battery has been discharged an amount that equals 100% of its capacity for all devices of a given model in a tenant. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getMeanFullBatteryDrainCount(): ?int {
        $val = $this->getBackingStore()->get('meanFullBatteryDrainCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meanFullBatteryDrainCount'");
    }

    /**
     * Gets the medianEstimatedRuntimeInMinutes property value. The median of the estimated runtimes on full charge for all devices of a given model. Unit in minutes. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getMedianEstimatedRuntimeInMinutes(): ?int {
        $val = $this->getBackingStore()->get('medianEstimatedRuntimeInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'medianEstimatedRuntimeInMinutes'");
    }

    /**
     * Gets the medianFullBatteryDrainCount property value. The median of number of times the battery has been discharged an amount that equals 100% of its capacity for all devices of a given model in a tenant. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getMedianFullBatteryDrainCount(): ?int {
        $val = $this->getBackingStore()->get('medianFullBatteryDrainCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'medianFullBatteryDrainCount'");
    }

    /**
     * Gets the medianMaxCapacityPercentage property value. The median of the maximum capacity for all devices of a given model. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getMedianMaxCapacityPercentage(): ?int {
        $val = $this->getBackingStore()->get('medianMaxCapacityPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'medianMaxCapacityPercentage'");
    }

    /**
     * Gets the model property value. The model name of the device.
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
    }

    /**
     * Gets the modelBatteryHealthScore property value. A weighted average of a model’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getModelBatteryHealthScore(): ?int {
        $val = $this->getBackingStore()->get('modelBatteryHealthScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modelBatteryHealthScore'");
    }

    /**
     * Gets the modelHealthStatus property value. The modelHealthStatus property
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getModelHealthStatus(): ?UserExperienceAnalyticsHealthState {
        $val = $this->getBackingStore()->get('modelHealthStatus');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsHealthState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modelHealthStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDevices', $this->getActiveDevices());
        $writer->writeIntegerValue('averageBatteryAgeInDays', $this->getAverageBatteryAgeInDays());
        $writer->writeIntegerValue('averageEstimatedRuntimeInMinutes', $this->getAverageEstimatedRuntimeInMinutes());
        $writer->writeIntegerValue('averageMaxCapacityPercentage', $this->getAverageMaxCapacityPercentage());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeIntegerValue('meanFullBatteryDrainCount', $this->getMeanFullBatteryDrainCount());
        $writer->writeIntegerValue('medianEstimatedRuntimeInMinutes', $this->getMedianEstimatedRuntimeInMinutes());
        $writer->writeIntegerValue('medianFullBatteryDrainCount', $this->getMedianFullBatteryDrainCount());
        $writer->writeIntegerValue('medianMaxCapacityPercentage', $this->getMedianMaxCapacityPercentage());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeIntegerValue('modelBatteryHealthScore', $this->getModelBatteryHealthScore());
        $writer->writeEnumValue('modelHealthStatus', $this->getModelHealthStatus());
    }

    /**
     * Sets the activeDevices property value. Number of active devices for that model. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value): void {
        $this->getBackingStore()->set('activeDevices', $value);
    }

    /**
     * Sets the averageBatteryAgeInDays property value. The mean of the battery age for all devices of a given model in a tenant. Unit in days. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the averageBatteryAgeInDays property.
    */
    public function setAverageBatteryAgeInDays(?int $value): void {
        $this->getBackingStore()->set('averageBatteryAgeInDays', $value);
    }

    /**
     * Sets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices of a given model. Unit in minutes. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the averageEstimatedRuntimeInMinutes property.
    */
    public function setAverageEstimatedRuntimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('averageEstimatedRuntimeInMinutes', $value);
    }

    /**
     * Sets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices of a given model. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the averageMaxCapacityPercentage property.
    */
    public function setAverageMaxCapacityPercentage(?int $value): void {
        $this->getBackingStore()->set('averageMaxCapacityPercentage', $value);
    }

    /**
     * Sets the manufacturer property value. Name of the device manufacturer.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the meanFullBatteryDrainCount property value. The mean of number of times the battery has been discharged an amount that equals 100% of its capacity for all devices of a given model in a tenant. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the meanFullBatteryDrainCount property.
    */
    public function setMeanFullBatteryDrainCount(?int $value): void {
        $this->getBackingStore()->set('meanFullBatteryDrainCount', $value);
    }

    /**
     * Sets the medianEstimatedRuntimeInMinutes property value. The median of the estimated runtimes on full charge for all devices of a given model. Unit in minutes. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the medianEstimatedRuntimeInMinutes property.
    */
    public function setMedianEstimatedRuntimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('medianEstimatedRuntimeInMinutes', $value);
    }

    /**
     * Sets the medianFullBatteryDrainCount property value. The median of number of times the battery has been discharged an amount that equals 100% of its capacity for all devices of a given model in a tenant. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the medianFullBatteryDrainCount property.
    */
    public function setMedianFullBatteryDrainCount(?int $value): void {
        $this->getBackingStore()->set('medianFullBatteryDrainCount', $value);
    }

    /**
     * Sets the medianMaxCapacityPercentage property value. The median of the maximum capacity for all devices of a given model. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the medianMaxCapacityPercentage property.
    */
    public function setMedianMaxCapacityPercentage(?int $value): void {
        $this->getBackingStore()->set('medianMaxCapacityPercentage', $value);
    }

    /**
     * Sets the model property value. The model name of the device.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the modelBatteryHealthScore property value. A weighted average of a model’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the modelBatteryHealthScore property.
    */
    public function setModelBatteryHealthScore(?int $value): void {
        $this->getBackingStore()->set('modelBatteryHealthScore', $value);
    }

    /**
     * Sets the modelHealthStatus property value. The modelHealthStatus property
     * @param UserExperienceAnalyticsHealthState|null $value Value to set for the modelHealthStatus property.
    */
    public function setModelHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('modelHealthStatus', $value);
    }

}
