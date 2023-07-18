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
        $val = $this->getBackingStore()->get('activeDevices');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDevices'");
    }

    /**
     * Gets the averageBatteryAgeInDays property value. The mean of the battery age for all devices running a particular operating system version in a tenant. Unit in days. Valid values -2147483648 to 2147483647
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
     * Gets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values -2147483648 to 2147483647
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
     * Gets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'osBuildNumber' => fn(ParseNode $n) => $o->setOsBuildNumber($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
        ]);
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osBuildNumber', $this->getOsBuildNumber());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
    }

    /**
     * Sets the activeDevices property value. Number of active devices for that os version. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value): void {
        $this->getBackingStore()->set('activeDevices', $value);
    }

    /**
     * Sets the averageBatteryAgeInDays property value. The mean of the battery age for all devices running a particular operating system version in a tenant. Unit in days. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the averageBatteryAgeInDays property.
    */
    public function setAverageBatteryAgeInDays(?int $value): void {
        $this->getBackingStore()->set('averageBatteryAgeInDays', $value);
    }

    /**
     * Sets the averageEstimatedRuntimeInMinutes property value. The mean of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the averageEstimatedRuntimeInMinutes property.
    */
    public function setAverageEstimatedRuntimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('averageEstimatedRuntimeInMinutes', $value);
    }

    /**
     * Sets the averageMaxCapacityPercentage property value. The mean of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the averageMaxCapacityPercentage property.
    */
    public function setAverageMaxCapacityPercentage(?int $value): void {
        $this->getBackingStore()->set('averageMaxCapacityPercentage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the osBuildNumber property value. Build number of the operating system.
     * @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value): void {
        $this->getBackingStore()->set('osBuildNumber', $value);
    }

    /**
     * Sets the osVersion property value. Version of the operating system.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

}
