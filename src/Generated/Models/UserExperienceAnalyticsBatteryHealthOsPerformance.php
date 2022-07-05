<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthOsPerformance extends Entity implements Parsable 
{
    /**
     * @var int|null $activeDevices Number of active devices for that os version. Valid values -2147483648 to 2147483647
    */
    private ?int $activeDevices = null;
    
    /**
     * @var int|null $averageBatteryAgeInDays The mean of the battery age for all devices running a particular operating system version in a tenant. Unit in days. Valid values -2147483648 to 2147483647
    */
    private ?int $averageBatteryAgeInDays = null;
    
    /**
     * @var int|null $averageEstimatedRuntimeInMinutes The mean of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values -2147483648 to 2147483647
    */
    private ?int $averageEstimatedRuntimeInMinutes = null;
    
    /**
     * @var int|null $averageMaxCapacityPercentage The mean of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
    */
    private ?int $averageMaxCapacityPercentage = null;
    
    /**
     * @var string|null $osBuildNumber Build number of the operating system.
    */
    private ?string $osBuildNumber = null;
    
    /**
     * @var string|null $osVersion Version of the operating system.
    */
    private ?string $osVersion = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthOsPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthOsPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthOsPerformance {
        return new UserExperienceAnalyticsBatteryHealthOsPerformance();
    }

    /**
     * Gets the activeDevices property value. Number of active devices for that os version. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDevices(): ?int {
        return $this->activeDevices;
    }

    /**
     * Gets the averageBatteryAgeInDays property value. The mean of the battery age for all devices running a particular operating system version in a tenant. Unit in days. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAverageBatteryAgeInDays(): ?int {
        return $this->averageBatteryAgeInDays;
    }

    /**
     * Gets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAverageEstimatedRuntimeInMinutes(): ?int {
        return $this->averageEstimatedRuntimeInMinutes;
    }

    /**
     * Gets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDevices' => function (ParseNode $n) use ($o) { $o->setActiveDevices($n->getIntegerValue()); },
            'averageBatteryAgeInDays' => function (ParseNode $n) use ($o) { $o->setAverageBatteryAgeInDays($n->getIntegerValue()); },
            'averageEstimatedRuntimeInMinutes' => function (ParseNode $n) use ($o) { $o->setAverageEstimatedRuntimeInMinutes($n->getIntegerValue()); },
            'averageMaxCapacityPercentage' => function (ParseNode $n) use ($o) { $o->setAverageMaxCapacityPercentage($n->getIntegerValue()); },
            'osBuildNumber' => function (ParseNode $n) use ($o) { $o->setOsBuildNumber($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the osBuildNumber property value. Build number of the operating system.
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        return $this->osBuildNumber;
    }

    /**
     * Gets the osVersion property value. Version of the operating system.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
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
        $writer->writeStringValue('osBuildNumber', $this->osBuildNumber);
        $writer->writeStringValue('osVersion', $this->osVersion);
    }

    /**
     * Sets the activeDevices property value. Number of active devices for that os version. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value ): void {
        $this->activeDevices = $value;
    }

    /**
     * Sets the averageBatteryAgeInDays property value. The mean of the battery age for all devices running a particular operating system version in a tenant. Unit in days. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the averageBatteryAgeInDays property.
    */
    public function setAverageBatteryAgeInDays(?int $value ): void {
        $this->averageBatteryAgeInDays = $value;
    }

    /**
     * Sets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the averageEstimatedRuntimeInMinutes property.
    */
    public function setAverageEstimatedRuntimeInMinutes(?int $value ): void {
        $this->averageEstimatedRuntimeInMinutes = $value;
    }

    /**
     * Sets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the averageMaxCapacityPercentage property.
    */
    public function setAverageMaxCapacityPercentage(?int $value ): void {
        $this->averageMaxCapacityPercentage = $value;
    }

    /**
     * Sets the osBuildNumber property value. Build number of the operating system.
     *  @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value ): void {
        $this->osBuildNumber = $value;
    }

    /**
     * Sets the osVersion property value. Version of the operating system.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

}
