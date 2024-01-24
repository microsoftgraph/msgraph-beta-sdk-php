<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics resource performance entity.
*/
class UserExperienceAnalyticsResourcePerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsResourcePerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsResourcePerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsResourcePerformance {
        return new UserExperienceAnalyticsResourcePerformance();
    }

    /**
     * Gets the averageSpikeTimeScore property value. AverageSpikeTimeScore of a device or a model type. Valid values 0 to 100
     * @return int|null
    */
    public function getAverageSpikeTimeScore(): ?int {
        $val = $this->getBackingStore()->get('averageSpikeTimeScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageSpikeTimeScore'");
    }

    /**
     * Gets the cpuClockSpeedInMHz property value. The clock speed of the processor, in MHz. Valid values 0 to 1000000
     * @return float|null
    */
    public function getCpuClockSpeedInMHz(): ?float {
        $val = $this->getBackingStore()->get('cpuClockSpeedInMHz');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuClockSpeedInMHz'");
    }

    /**
     * Gets the cpuDisplayName property value. The name of the processor on the device, For example, 11th Gen Intel(R) Core(TM) i7.
     * @return string|null
    */
    public function getCpuDisplayName(): ?string {
        $val = $this->getBackingStore()->get('cpuDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuDisplayName'");
    }

    /**
     * Gets the cpuSpikeTimePercentage property value. CPU spike time in percentage. Valid values 0 to 100
     * @return float|null
    */
    public function getCpuSpikeTimePercentage(): ?float {
        $val = $this->getBackingStore()->get('cpuSpikeTimePercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuSpikeTimePercentage'");
    }

    /**
     * Gets the cpuSpikeTimePercentageThreshold property value. Threshold of cpuSpikeTimeScore. Valid values 0 to 100
     * @return float|null
    */
    public function getCpuSpikeTimePercentageThreshold(): ?float {
        $val = $this->getBackingStore()->get('cpuSpikeTimePercentageThreshold');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuSpikeTimePercentageThreshold'");
    }

    /**
     * Gets the cpuSpikeTimeScore property value. The user experience analytics device CPU spike time score. Valid values 0 to 100
     * @return int|null
    */
    public function getCpuSpikeTimeScore(): ?int {
        $val = $this->getBackingStore()->get('cpuSpikeTimeScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuSpikeTimeScore'");
    }

    /**
     * Gets the deviceCount property value. User experience analytics summarized device count.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * Gets the deviceId property value. The id of the device.
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
     * Gets the deviceName property value. The name of the device.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * Gets the deviceResourcePerformanceScore property value. Resource performance score of a specific device. Valid values 0 to 100
     * @return int|null
    */
    public function getDeviceResourcePerformanceScore(): ?int {
        $val = $this->getBackingStore()->get('deviceResourcePerformanceScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceResourcePerformanceScore'");
    }

    /**
     * Gets the diskType property value. The diskType property
     * @return DiskType|null
    */
    public function getDiskType(): ?DiskType {
        $val = $this->getBackingStore()->get('diskType');
        if (is_null($val) || $val instanceof DiskType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'diskType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'averageSpikeTimeScore' => fn(ParseNode $n) => $o->setAverageSpikeTimeScore($n->getIntegerValue()),
            'cpuClockSpeedInMHz' => fn(ParseNode $n) => $o->setCpuClockSpeedInMHz($n->getFloatValue()),
            'cpuDisplayName' => fn(ParseNode $n) => $o->setCpuDisplayName($n->getStringValue()),
            'cpuSpikeTimePercentage' => fn(ParseNode $n) => $o->setCpuSpikeTimePercentage($n->getFloatValue()),
            'cpuSpikeTimePercentageThreshold' => fn(ParseNode $n) => $o->setCpuSpikeTimePercentageThreshold($n->getFloatValue()),
            'cpuSpikeTimeScore' => fn(ParseNode $n) => $o->setCpuSpikeTimeScore($n->getIntegerValue()),
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceResourcePerformanceScore' => fn(ParseNode $n) => $o->setDeviceResourcePerformanceScore($n->getIntegerValue()),
            'diskType' => fn(ParseNode $n) => $o->setDiskType($n->getEnumValue(DiskType::class)),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'machineType' => fn(ParseNode $n) => $o->setMachineType($n->getEnumValue(UserExperienceAnalyticsMachineType::class)),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'ramSpikeTimePercentage' => fn(ParseNode $n) => $o->setRamSpikeTimePercentage($n->getFloatValue()),
            'ramSpikeTimePercentageThreshold' => fn(ParseNode $n) => $o->setRamSpikeTimePercentageThreshold($n->getFloatValue()),
            'ramSpikeTimeScore' => fn(ParseNode $n) => $o->setRamSpikeTimeScore($n->getIntegerValue()),
            'totalProcessorCoreCount' => fn(ParseNode $n) => $o->setTotalProcessorCoreCount($n->getIntegerValue()),
            'totalRamInMB' => fn(ParseNode $n) => $o->setTotalRamInMB($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        $val = $this->getBackingStore()->get('healthStatus');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsHealthState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthStatus'");
    }

    /**
     * Gets the machineType property value. Indicates if machine is physical or virtual. Possible values are: physical or virtual
     * @return UserExperienceAnalyticsMachineType|null
    */
    public function getMachineType(): ?UserExperienceAnalyticsMachineType {
        $val = $this->getBackingStore()->get('machineType');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsMachineType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'machineType'");
    }

    /**
     * Gets the manufacturer property value. The user experience analytics device manufacturer.
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
     * Gets the model property value. The user experience analytics device model.
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
     * Gets the ramSpikeTimePercentage property value. RAM spike time in percentage. Valid values 0 to 100
     * @return float|null
    */
    public function getRamSpikeTimePercentage(): ?float {
        $val = $this->getBackingStore()->get('ramSpikeTimePercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ramSpikeTimePercentage'");
    }

    /**
     * Gets the ramSpikeTimePercentageThreshold property value. Threshold of ramSpikeTimeScore. Valid values 0 to 100
     * @return float|null
    */
    public function getRamSpikeTimePercentageThreshold(): ?float {
        $val = $this->getBackingStore()->get('ramSpikeTimePercentageThreshold');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ramSpikeTimePercentageThreshold'");
    }

    /**
     * Gets the ramSpikeTimeScore property value. The user experience analytics device RAM spike time score. Valid values 0 to 100
     * @return int|null
    */
    public function getRamSpikeTimeScore(): ?int {
        $val = $this->getBackingStore()->get('ramSpikeTimeScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ramSpikeTimeScore'");
    }

    /**
     * Gets the totalProcessorCoreCount property value. The count of cores of the processor of device. Valid values 0 to 512
     * @return int|null
    */
    public function getTotalProcessorCoreCount(): ?int {
        $val = $this->getBackingStore()->get('totalProcessorCoreCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalProcessorCoreCount'");
    }

    /**
     * Gets the totalRamInMB property value. The total RAM of the device, in MB. Valid values 0 to 1000000
     * @return float|null
    */
    public function getTotalRamInMB(): ?float {
        $val = $this->getBackingStore()->get('totalRamInMB');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalRamInMB'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('averageSpikeTimeScore', $this->getAverageSpikeTimeScore());
        $writer->writeFloatValue('cpuClockSpeedInMHz', $this->getCpuClockSpeedInMHz());
        $writer->writeStringValue('cpuDisplayName', $this->getCpuDisplayName());
        $writer->writeFloatValue('cpuSpikeTimePercentage', $this->getCpuSpikeTimePercentage());
        $writer->writeFloatValue('cpuSpikeTimePercentageThreshold', $this->getCpuSpikeTimePercentageThreshold());
        $writer->writeIntegerValue('cpuSpikeTimeScore', $this->getCpuSpikeTimeScore());
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeIntegerValue('deviceResourcePerformanceScore', $this->getDeviceResourcePerformanceScore());
        $writer->writeEnumValue('diskType', $this->getDiskType());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeEnumValue('machineType', $this->getMachineType());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeFloatValue('ramSpikeTimePercentage', $this->getRamSpikeTimePercentage());
        $writer->writeFloatValue('ramSpikeTimePercentageThreshold', $this->getRamSpikeTimePercentageThreshold());
        $writer->writeIntegerValue('ramSpikeTimeScore', $this->getRamSpikeTimeScore());
        $writer->writeIntegerValue('totalProcessorCoreCount', $this->getTotalProcessorCoreCount());
        $writer->writeFloatValue('totalRamInMB', $this->getTotalRamInMB());
    }

    /**
     * Sets the averageSpikeTimeScore property value. AverageSpikeTimeScore of a device or a model type. Valid values 0 to 100
     * @param int|null $value Value to set for the averageSpikeTimeScore property.
    */
    public function setAverageSpikeTimeScore(?int $value): void {
        $this->getBackingStore()->set('averageSpikeTimeScore', $value);
    }

    /**
     * Sets the cpuClockSpeedInMHz property value. The clock speed of the processor, in MHz. Valid values 0 to 1000000
     * @param float|null $value Value to set for the cpuClockSpeedInMHz property.
    */
    public function setCpuClockSpeedInMHz(?float $value): void {
        $this->getBackingStore()->set('cpuClockSpeedInMHz', $value);
    }

    /**
     * Sets the cpuDisplayName property value. The name of the processor on the device, For example, 11th Gen Intel(R) Core(TM) i7.
     * @param string|null $value Value to set for the cpuDisplayName property.
    */
    public function setCpuDisplayName(?string $value): void {
        $this->getBackingStore()->set('cpuDisplayName', $value);
    }

    /**
     * Sets the cpuSpikeTimePercentage property value. CPU spike time in percentage. Valid values 0 to 100
     * @param float|null $value Value to set for the cpuSpikeTimePercentage property.
    */
    public function setCpuSpikeTimePercentage(?float $value): void {
        $this->getBackingStore()->set('cpuSpikeTimePercentage', $value);
    }

    /**
     * Sets the cpuSpikeTimePercentageThreshold property value. Threshold of cpuSpikeTimeScore. Valid values 0 to 100
     * @param float|null $value Value to set for the cpuSpikeTimePercentageThreshold property.
    */
    public function setCpuSpikeTimePercentageThreshold(?float $value): void {
        $this->getBackingStore()->set('cpuSpikeTimePercentageThreshold', $value);
    }

    /**
     * Sets the cpuSpikeTimeScore property value. The user experience analytics device CPU spike time score. Valid values 0 to 100
     * @param int|null $value Value to set for the cpuSpikeTimeScore property.
    */
    public function setCpuSpikeTimeScore(?int $value): void {
        $this->getBackingStore()->set('cpuSpikeTimeScore', $value);
    }

    /**
     * Sets the deviceCount property value. User experience analytics summarized device count.
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the deviceId property value. The id of the device.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. The name of the device.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceResourcePerformanceScore property value. Resource performance score of a specific device. Valid values 0 to 100
     * @param int|null $value Value to set for the deviceResourcePerformanceScore property.
    */
    public function setDeviceResourcePerformanceScore(?int $value): void {
        $this->getBackingStore()->set('deviceResourcePerformanceScore', $value);
    }

    /**
     * Sets the diskType property value. The diskType property
     * @param DiskType|null $value Value to set for the diskType property.
    */
    public function setDiskType(?DiskType $value): void {
        $this->getBackingStore()->set('diskType', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     * @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the machineType property value. Indicates if machine is physical or virtual. Possible values are: physical or virtual
     * @param UserExperienceAnalyticsMachineType|null $value Value to set for the machineType property.
    */
    public function setMachineType(?UserExperienceAnalyticsMachineType $value): void {
        $this->getBackingStore()->set('machineType', $value);
    }

    /**
     * Sets the manufacturer property value. The user experience analytics device manufacturer.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The user experience analytics device model.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the ramSpikeTimePercentage property value. RAM spike time in percentage. Valid values 0 to 100
     * @param float|null $value Value to set for the ramSpikeTimePercentage property.
    */
    public function setRamSpikeTimePercentage(?float $value): void {
        $this->getBackingStore()->set('ramSpikeTimePercentage', $value);
    }

    /**
     * Sets the ramSpikeTimePercentageThreshold property value. Threshold of ramSpikeTimeScore. Valid values 0 to 100
     * @param float|null $value Value to set for the ramSpikeTimePercentageThreshold property.
    */
    public function setRamSpikeTimePercentageThreshold(?float $value): void {
        $this->getBackingStore()->set('ramSpikeTimePercentageThreshold', $value);
    }

    /**
     * Sets the ramSpikeTimeScore property value. The user experience analytics device RAM spike time score. Valid values 0 to 100
     * @param int|null $value Value to set for the ramSpikeTimeScore property.
    */
    public function setRamSpikeTimeScore(?int $value): void {
        $this->getBackingStore()->set('ramSpikeTimeScore', $value);
    }

    /**
     * Sets the totalProcessorCoreCount property value. The count of cores of the processor of device. Valid values 0 to 512
     * @param int|null $value Value to set for the totalProcessorCoreCount property.
    */
    public function setTotalProcessorCoreCount(?int $value): void {
        $this->getBackingStore()->set('totalProcessorCoreCount', $value);
    }

    /**
     * Sets the totalRamInMB property value. The total RAM of the device, in MB. Valid values 0 to 1000000
     * @param float|null $value Value to set for the totalRamInMB property.
    */
    public function setTotalRamInMB(?float $value): void {
        $this->getBackingStore()->set('totalRamInMB', $value);
    }

}
