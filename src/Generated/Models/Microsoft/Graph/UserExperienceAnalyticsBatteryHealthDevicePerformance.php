<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthDevicePerformance extends Entity 
{
    /** @var int|null $batteryAgeInDays Estimated battery age. Unit in days. Valid values -2147483648 to 2147483647 */
    private ?int $batteryAgeInDays = null;
    
    /** @var int|null $deviceBatteryHealthScore A weighted average of a device’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647 */
    private ?int $deviceBatteryHealthScore = null;
    
    /** @var string|null $deviceId The unique identifier of the device, Intune DeviceID. */
    private ?string $deviceId = null;
    
    /** @var string|null $deviceName Device friendly name. */
    private ?string $deviceName = null;
    
    /** @var int|null $estimatedRuntimeInMinutes The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647 */
    private ?int $estimatedRuntimeInMinutes = null;
    
    /** @var UserExperienceAnalyticsHealthState|null $healthStatus The overall battery health status of the device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals. */
    private ?UserExperienceAnalyticsHealthState $healthStatus = null;
    
    /** @var string|null $manufacturer The manufacturer name of the device. */
    private ?string $manufacturer = null;
    
    /** @var int|null $maxCapacityPercentage Ratio of current capacity and design capacity of the battery with the lowest capacity. Unit in percentage and values range from 0-100. Valid values -2147483648 to 2147483647 */
    private ?int $maxCapacityPercentage = null;
    
    /** @var string|null $model The model name of the device. */
    private ?string $model = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthDevicePerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthDevicePerformance {
        return new UserExperienceAnalyticsBatteryHealthDevicePerformance();
    }

    /**
     * Gets the batteryAgeInDays property value. Estimated battery age. Unit in days. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryAgeInDays(): ?int {
        return $this->batteryAgeInDays;
    }

    /**
     * Gets the deviceBatteryHealthScore property value. A weighted average of a device’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDeviceBatteryHealthScore(): ?int {
        return $this->deviceBatteryHealthScore;
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device, Intune DeviceID.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. Device friendly name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the estimatedRuntimeInMinutes property value. The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getEstimatedRuntimeInMinutes(): ?int {
        return $this->estimatedRuntimeInMinutes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'batteryAgeInDays' => function (self $o, ParseNode $n) { $o->setBatteryAgeInDays($n->getIntegerValue()); },
            'deviceBatteryHealthScore' => function (self $o, ParseNode $n) { $o->setDeviceBatteryHealthScore($n->getIntegerValue()); },
            'deviceId' => function (self $o, ParseNode $n) { $o->setDeviceId($n->getStringValue()); },
            'deviceName' => function (self $o, ParseNode $n) { $o->setDeviceName($n->getStringValue()); },
            'estimatedRuntimeInMinutes' => function (self $o, ParseNode $n) { $o->setEstimatedRuntimeInMinutes($n->getIntegerValue()); },
            'healthStatus' => function (self $o, ParseNode $n) { $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)); },
            'manufacturer' => function (self $o, ParseNode $n) { $o->setManufacturer($n->getStringValue()); },
            'maxCapacityPercentage' => function (self $o, ParseNode $n) { $o->setMaxCapacityPercentage($n->getIntegerValue()); },
            'model' => function (self $o, ParseNode $n) { $o->setModel($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the healthStatus property value. The overall battery health status of the device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        return $this->healthStatus;
    }

    /**
     * Gets the manufacturer property value. The manufacturer name of the device.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the maxCapacityPercentage property value. Ratio of current capacity and design capacity of the battery with the lowest capacity. Unit in percentage and values range from 0-100. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMaxCapacityPercentage(): ?int {
        return $this->maxCapacityPercentage;
    }

    /**
     * Gets the model property value. The model name of the device.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('batteryAgeInDays', $this->batteryAgeInDays);
        $writer->writeIntegerValue('deviceBatteryHealthScore', $this->deviceBatteryHealthScore);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeIntegerValue('estimatedRuntimeInMinutes', $this->estimatedRuntimeInMinutes);
        $writer->writeEnumValue('healthStatus', $this->healthStatus);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeIntegerValue('maxCapacityPercentage', $this->maxCapacityPercentage);
        $writer->writeStringValue('model', $this->model);
    }

    /**
     * Sets the batteryAgeInDays property value. Estimated battery age. Unit in days. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the batteryAgeInDays property.
    */
    public function setBatteryAgeInDays(?int $value ): void {
        $this->batteryAgeInDays = $value;
    }

    /**
     * Sets the deviceBatteryHealthScore property value. A weighted average of a device’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the deviceBatteryHealthScore property.
    */
    public function setDeviceBatteryHealthScore(?int $value ): void {
        $this->deviceBatteryHealthScore = $value;
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device, Intune DeviceID.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. Device friendly name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the estimatedRuntimeInMinutes property value. The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the estimatedRuntimeInMinutes property.
    */
    public function setEstimatedRuntimeInMinutes(?int $value ): void {
        $this->estimatedRuntimeInMinutes = $value;
    }

    /**
     * Sets the healthStatus property value. The overall battery health status of the device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value ): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the manufacturer property value. The manufacturer name of the device.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the maxCapacityPercentage property value. Ratio of current capacity and design capacity of the battery with the lowest capacity. Unit in percentage and values range from 0-100. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the maxCapacityPercentage property.
    */
    public function setMaxCapacityPercentage(?int $value ): void {
        $this->maxCapacityPercentage = $value;
    }

    /**
     * Sets the model property value. The model name of the device.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

}
