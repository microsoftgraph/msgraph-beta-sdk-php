<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthModelPerformance extends Entity 
{
    /** @var int|null $activeDevices Number of active devices for that model. Valid values -2147483648 to 2147483647 */
    private ?int $activeDevices = null;
    
    /** @var int|null $averageBatteryAgeInDays The mean of the battery age for all devices of a given model in a tenant. Unit in days. Valid values -2147483648 to 2147483647 */
    private ?int $averageBatteryAgeInDays = null;
    
    /** @var int|null $averageEstimatedRuntimeInMinutes The mean of the estimated runtimes on full charge for all devices of a given model. Unit in minutes. Valid values -2147483648 to 2147483647 */
    private ?int $averageEstimatedRuntimeInMinutes = null;
    
    /** @var int|null $averageMaxCapacityPercentage The mean of the maximum capacity for all devices of a given model. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647 */
    private ?int $averageMaxCapacityPercentage = null;
    
    /** @var string|null $manufacturer Name of the device manufacturer. */
    private ?string $manufacturer = null;
    
    /** @var string|null $model The model name of the device. */
    private ?string $model = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthModelPerformance {
        return new UserExperienceAnalyticsBatteryHealthModelPerformance();
    }

    /**
     * Gets the activeDevices property value. Number of active devices for that model. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDevices(): ?int {
        return $this->activeDevices;
    }

    /**
     * Gets the averageBatteryAgeInDays property value. The mean of the battery age for all devices of a given model in a tenant. Unit in days. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAverageBatteryAgeInDays(): ?int {
        return $this->averageBatteryAgeInDays;
    }

    /**
     * Gets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices of a given model. Unit in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAverageEstimatedRuntimeInMinutes(): ?int {
        return $this->averageEstimatedRuntimeInMinutes;
    }

    /**
     * Gets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices of a given model. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAverageMaxCapacityPercentage(): ?int {
        return $this->averageMaxCapacityPercentage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activeDevices' => function (self $o, ParseNode $n) { $o->setActiveDevices($n->getIntegerValue()); },
            'averageBatteryAgeInDays' => function (self $o, ParseNode $n) { $o->setAverageBatteryAgeInDays($n->getIntegerValue()); },
            'averageEstimatedRuntimeInMinutes' => function (self $o, ParseNode $n) { $o->setAverageEstimatedRuntimeInMinutes($n->getIntegerValue()); },
            'averageMaxCapacityPercentage' => function (self $o, ParseNode $n) { $o->setAverageMaxCapacityPercentage($n->getIntegerValue()); },
            'manufacturer' => function (self $o, ParseNode $n) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (self $o, ParseNode $n) { $o->setModel($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the manufacturer property value. Name of the device manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
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
        $writer->writeIntegerValue('activeDevices', $this->activeDevices);
        $writer->writeIntegerValue('averageBatteryAgeInDays', $this->averageBatteryAgeInDays);
        $writer->writeIntegerValue('averageEstimatedRuntimeInMinutes', $this->averageEstimatedRuntimeInMinutes);
        $writer->writeIntegerValue('averageMaxCapacityPercentage', $this->averageMaxCapacityPercentage);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
    }

    /**
     * Sets the activeDevices property value. Number of active devices for that model. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value ): void {
        $this->activeDevices = $value;
    }

    /**
     * Sets the averageBatteryAgeInDays property value. The mean of the battery age for all devices of a given model in a tenant. Unit in days. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the averageBatteryAgeInDays property.
    */
    public function setAverageBatteryAgeInDays(?int $value ): void {
        $this->averageBatteryAgeInDays = $value;
    }

    /**
     * Sets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices of a given model. Unit in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the averageEstimatedRuntimeInMinutes property.
    */
    public function setAverageEstimatedRuntimeInMinutes(?int $value ): void {
        $this->averageEstimatedRuntimeInMinutes = $value;
    }

    /**
     * Sets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices of a given model. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the averageMaxCapacityPercentage property.
    */
    public function setAverageMaxCapacityPercentage(?int $value ): void {
        $this->averageMaxCapacityPercentage = $value;
    }

    /**
     * Sets the manufacturer property value. Name of the device manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The model name of the device.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

}
