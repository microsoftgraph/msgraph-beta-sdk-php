<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics battery health os performance entity contains battery related information for all operating system versions in their organization.
*/
class UserExperienceAnalyticsBatteryHealthOsPerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthOsPerformance and sets the default values.
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
     * Gets the activeDevices property value. Number of active devices for that os version. Valid values 0 to 2147483647
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
     * Gets the averageBatteryAgeInDays property value. The mean of the battery age for all devices running a particular operating system version in a tenant. Unit in days. Valid values 0 to 2147483647
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
     * Gets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values 0 to 2147483647
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
     * Gets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values 0 to 2147483647
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
            'meanFullBatteryDrainCount' => fn(ParseNode $n) => $o->setMeanFullBatteryDrainCount($n->getIntegerValue()),
            'medianEstimatedRuntimeInMinutes' => fn(ParseNode $n) => $o->setMedianEstimatedRuntimeInMinutes($n->getIntegerValue()),
            'medianFullBatteryDrainCount' => fn(ParseNode $n) => $o->setMedianFullBatteryDrainCount($n->getIntegerValue()),
            'medianMaxCapacityPercentage' => fn(ParseNode $n) => $o->setMedianMaxCapacityPercentage($n->getIntegerValue()),
            'osBatteryHealthScore' => fn(ParseNode $n) => $o->setOsBatteryHealthScore($n->getIntegerValue()),
            'osBuildNumber' => fn(ParseNode $n) => $o->setOsBuildNumber($n->getStringValue()),
            'osHealthStatus' => fn(ParseNode $n) => $o->setOsHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the meanFullBatteryDrainCount property value. The mean of number of times the battery has been discharged an amount that equals 100% of its capacity for all devices running a particular operating system version in a tenant. Valid values 0 to 2147483647
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
     * Gets the medianEstimatedRuntimeInMinutes property value. The median of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values 0 to 2147483647
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
     * Gets the medianFullBatteryDrainCount property value. The median of number of times the battery has been discharged an amount that equals 100% of its capacity for all devices running a particular operating system version in a tenant. Valid values 0 to 2147483647
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
     * Gets the medianMaxCapacityPercentage property value. The median of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values 0 to 2147483647
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
     * Gets the osBatteryHealthScore property value. A weighted average of battery health score across all devices running a particular operating system version. Values range from 0-100. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getOsBatteryHealthScore(): ?int {
        $val = $this->getBackingStore()->get('osBatteryHealthScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osBatteryHealthScore'");
    }

    /**
     * Gets the osBuildNumber property value. Build number of the operating system.
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        $val = $this->getBackingStore()->get('osBuildNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osBuildNumber'");
    }

    /**
     * Gets the osHealthStatus property value. The osHealthStatus property
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getOsHealthStatus(): ?UserExperienceAnalyticsHealthState {
        $val = $this->getBackingStore()->get('osHealthStatus');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsHealthState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osHealthStatus'");
    }

    /**
     * Gets the osVersion property value. Version of the operating system.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
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
        $writer->writeIntegerValue('meanFullBatteryDrainCount', $this->getMeanFullBatteryDrainCount());
        $writer->writeIntegerValue('medianEstimatedRuntimeInMinutes', $this->getMedianEstimatedRuntimeInMinutes());
        $writer->writeIntegerValue('medianFullBatteryDrainCount', $this->getMedianFullBatteryDrainCount());
        $writer->writeIntegerValue('medianMaxCapacityPercentage', $this->getMedianMaxCapacityPercentage());
        $writer->writeIntegerValue('osBatteryHealthScore', $this->getOsBatteryHealthScore());
        $writer->writeStringValue('osBuildNumber', $this->getOsBuildNumber());
        $writer->writeEnumValue('osHealthStatus', $this->getOsHealthStatus());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
    }

    /**
     * Sets the activeDevices property value. Number of active devices for that os version. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value): void {
        $this->getBackingStore()->set('activeDevices', $value);
    }

    /**
     * Sets the averageBatteryAgeInDays property value. The mean of the battery age for all devices running a particular operating system version in a tenant. Unit in days. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the averageBatteryAgeInDays property.
    */
    public function setAverageBatteryAgeInDays(?int $value): void {
        $this->getBackingStore()->set('averageBatteryAgeInDays', $value);
    }

    /**
     * Sets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the averageEstimatedRuntimeInMinutes property.
    */
    public function setAverageEstimatedRuntimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('averageEstimatedRuntimeInMinutes', $value);
    }

    /**
     * Sets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the averageMaxCapacityPercentage property.
    */
    public function setAverageMaxCapacityPercentage(?int $value): void {
        $this->getBackingStore()->set('averageMaxCapacityPercentage', $value);
    }

    /**
     * Sets the meanFullBatteryDrainCount property value. The mean of number of times the battery has been discharged an amount that equals 100% of its capacity for all devices running a particular operating system version in a tenant. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the meanFullBatteryDrainCount property.
    */
    public function setMeanFullBatteryDrainCount(?int $value): void {
        $this->getBackingStore()->set('meanFullBatteryDrainCount', $value);
    }

    /**
     * Sets the medianEstimatedRuntimeInMinutes property value. The median of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the medianEstimatedRuntimeInMinutes property.
    */
    public function setMedianEstimatedRuntimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('medianEstimatedRuntimeInMinutes', $value);
    }

    /**
     * Sets the medianFullBatteryDrainCount property value. The median of number of times the battery has been discharged an amount that equals 100% of its capacity for all devices running a particular operating system version in a tenant. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the medianFullBatteryDrainCount property.
    */
    public function setMedianFullBatteryDrainCount(?int $value): void {
        $this->getBackingStore()->set('medianFullBatteryDrainCount', $value);
    }

    /**
     * Sets the medianMaxCapacityPercentage property value. The median of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the medianMaxCapacityPercentage property.
    */
    public function setMedianMaxCapacityPercentage(?int $value): void {
        $this->getBackingStore()->set('medianMaxCapacityPercentage', $value);
    }

    /**
     * Sets the osBatteryHealthScore property value. A weighted average of battery health score across all devices running a particular operating system version. Values range from 0-100. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the osBatteryHealthScore property.
    */
    public function setOsBatteryHealthScore(?int $value): void {
        $this->getBackingStore()->set('osBatteryHealthScore', $value);
    }

    /**
     * Sets the osBuildNumber property value. Build number of the operating system.
     * @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value): void {
        $this->getBackingStore()->set('osBuildNumber', $value);
    }

    /**
     * Sets the osHealthStatus property value. The osHealthStatus property
     * @param UserExperienceAnalyticsHealthState|null $value Value to set for the osHealthStatus property.
    */
    public function setOsHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('osHealthStatus', $value);
    }

    /**
     * Sets the osVersion property value. Version of the operating system.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

}
