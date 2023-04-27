<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsResourcePerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsResourcePerformance and sets the default values.
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
        return $this->getBackingStore()->get('averageSpikeTimeScore');
    }

    /**
     * Gets the cpuSpikeTimePercentage property value. CPU spike time in percentage. Valid values 0 to 100
     * @return float|null
    */
    public function getCpuSpikeTimePercentage(): ?float {
        return $this->getBackingStore()->get('cpuSpikeTimePercentage');
    }

    /**
     * Gets the cpuSpikeTimePercentageThreshold property value. Threshold of cpuSpikeTimeScore. Valid values 0 to 100
     * @return float|null
    */
    public function getCpuSpikeTimePercentageThreshold(): ?float {
        return $this->getBackingStore()->get('cpuSpikeTimePercentageThreshold');
    }

    /**
     * Gets the cpuSpikeTimeScore property value. The user experience analytics device CPU spike time score. Valid values 0 to 100
     * @return int|null
    */
    public function getCpuSpikeTimeScore(): ?int {
        return $this->getBackingStore()->get('cpuSpikeTimeScore');
    }

    /**
     * Gets the deviceCount property value. User experience analytics summarized device count.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->getBackingStore()->get('deviceCount');
    }

    /**
     * Gets the deviceId property value. The id of the device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceName property value. The name of the device.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the deviceResourcePerformanceScore property value. Resource performance score of a specific device. Valid values 0 to 100
     * @return int|null
    */
    public function getDeviceResourcePerformanceScore(): ?int {
        return $this->getBackingStore()->get('deviceResourcePerformanceScore');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'averageSpikeTimeScore' => fn(ParseNode $n) => $o->setAverageSpikeTimeScore($n->getIntegerValue()),
            'cpuSpikeTimePercentage' => fn(ParseNode $n) => $o->setCpuSpikeTimePercentage($n->getFloatValue()),
            'cpuSpikeTimePercentageThreshold' => fn(ParseNode $n) => $o->setCpuSpikeTimePercentageThreshold($n->getFloatValue()),
            'cpuSpikeTimeScore' => fn(ParseNode $n) => $o->setCpuSpikeTimeScore($n->getIntegerValue()),
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceResourcePerformanceScore' => fn(ParseNode $n) => $o->setDeviceResourcePerformanceScore($n->getIntegerValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'ramSpikeTimePercentage' => fn(ParseNode $n) => $o->setRamSpikeTimePercentage($n->getFloatValue()),
            'ramSpikeTimePercentageThreshold' => fn(ParseNode $n) => $o->setRamSpikeTimePercentageThreshold($n->getFloatValue()),
            'ramSpikeTimeScore' => fn(ParseNode $n) => $o->setRamSpikeTimeScore($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the manufacturer property value. The user experience analytics device manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the model property value. The user experience analytics device model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the ramSpikeTimePercentage property value. RAM spike time in percentage. Valid values 0 to 100
     * @return float|null
    */
    public function getRamSpikeTimePercentage(): ?float {
        return $this->getBackingStore()->get('ramSpikeTimePercentage');
    }

    /**
     * Gets the ramSpikeTimePercentageThreshold property value. Threshold of ramSpikeTimeScore. Valid values 0 to 100
     * @return float|null
    */
    public function getRamSpikeTimePercentageThreshold(): ?float {
        return $this->getBackingStore()->get('ramSpikeTimePercentageThreshold');
    }

    /**
     * Gets the ramSpikeTimeScore property value. The user experience analytics device RAM spike time score. Valid values 0 to 100
     * @return int|null
    */
    public function getRamSpikeTimeScore(): ?int {
        return $this->getBackingStore()->get('ramSpikeTimeScore');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('averageSpikeTimeScore', $this->getAverageSpikeTimeScore());
        $writer->writeFloatValue('cpuSpikeTimePercentage', $this->getCpuSpikeTimePercentage());
        $writer->writeFloatValue('cpuSpikeTimePercentageThreshold', $this->getCpuSpikeTimePercentageThreshold());
        $writer->writeIntegerValue('cpuSpikeTimeScore', $this->getCpuSpikeTimeScore());
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeIntegerValue('deviceResourcePerformanceScore', $this->getDeviceResourcePerformanceScore());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeFloatValue('ramSpikeTimePercentage', $this->getRamSpikeTimePercentage());
        $writer->writeFloatValue('ramSpikeTimePercentageThreshold', $this->getRamSpikeTimePercentageThreshold());
        $writer->writeIntegerValue('ramSpikeTimeScore', $this->getRamSpikeTimeScore());
    }

    /**
     * Sets the averageSpikeTimeScore property value. AverageSpikeTimeScore of a device or a model type. Valid values 0 to 100
     * @param int|null $value Value to set for the averageSpikeTimeScore property.
    */
    public function setAverageSpikeTimeScore(?int $value): void {
        $this->getBackingStore()->set('averageSpikeTimeScore', $value);
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

}
