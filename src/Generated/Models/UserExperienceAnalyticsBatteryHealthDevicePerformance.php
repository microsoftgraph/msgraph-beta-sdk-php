<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthDevicePerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthDevicePerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsBatteryHealthDevicePerformance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthDevicePerformance {
        return new UserExperienceAnalyticsBatteryHealthDevicePerformance();
    }

    /**
     * Gets the batteryAgeInDays property value. Estimated battery age. Unit in days. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryAgeInDays(): ?int {
        return $this->getBackingStore()->get('batteryAgeInDays');
    }

    /**
     * Gets the deviceBatteryHealthScore property value. A weighted average of a device’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDeviceBatteryHealthScore(): ?int {
        return $this->getBackingStore()->get('deviceBatteryHealthScore');
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device, Intune DeviceID.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceName property value. Device friendly name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the estimatedRuntimeInMinutes property value. The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getEstimatedRuntimeInMinutes(): ?int {
        return $this->getBackingStore()->get('estimatedRuntimeInMinutes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'batteryAgeInDays' => fn(ParseNode $n) => $o->setBatteryAgeInDays($n->getIntegerValue()),
            'deviceBatteryHealthScore' => fn(ParseNode $n) => $o->setDeviceBatteryHealthScore($n->getIntegerValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'estimatedRuntimeInMinutes' => fn(ParseNode $n) => $o->setEstimatedRuntimeInMinutes($n->getIntegerValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'maxCapacityPercentage' => fn(ParseNode $n) => $o->setMaxCapacityPercentage($n->getIntegerValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
        ]);
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        return $this->getBackingStore()->get('healthStatus');
    }

    /**
     * Gets the manufacturer property value. The manufacturer name of the device.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the maxCapacityPercentage property value. Ratio of current capacity and design capacity of the battery with the lowest capacity. Unit in percentage and values range from 0-100. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMaxCapacityPercentage(): ?int {
        return $this->getBackingStore()->get('maxCapacityPercentage');
    }

    /**
     * Gets the model property value. The model name of the device.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('batteryAgeInDays', $this->getBatteryAgeInDays());
        $writer->writeIntegerValue('deviceBatteryHealthScore', $this->getDeviceBatteryHealthScore());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeIntegerValue('estimatedRuntimeInMinutes', $this->getEstimatedRuntimeInMinutes());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeIntegerValue('maxCapacityPercentage', $this->getMaxCapacityPercentage());
        $writer->writeStringValue('model', $this->getModel());
    }

    /**
     * Sets the batteryAgeInDays property value. Estimated battery age. Unit in days. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the batteryAgeInDays property.
    */
    public function setBatteryAgeInDays(?int $value): void {
        $this->getBackingStore()->set('batteryAgeInDays', $value);
    }

    /**
     * Sets the deviceBatteryHealthScore property value. A weighted average of a device’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the deviceBatteryHealthScore property.
    */
    public function setDeviceBatteryHealthScore(?int $value): void {
        $this->getBackingStore()->set('deviceBatteryHealthScore', $value);
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device, Intune DeviceID.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. Device friendly name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the estimatedRuntimeInMinutes property value. The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the estimatedRuntimeInMinutes property.
    */
    public function setEstimatedRuntimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('estimatedRuntimeInMinutes', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer name of the device.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the maxCapacityPercentage property value. Ratio of current capacity and design capacity of the battery with the lowest capacity. Unit in percentage and values range from 0-100. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the maxCapacityPercentage property.
    */
    public function setMaxCapacityPercentage(?int $value): void {
        $this->getBackingStore()->set('maxCapacityPercentage', $value);
    }

    /**
     * Sets the model property value. The model name of the device.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

}
