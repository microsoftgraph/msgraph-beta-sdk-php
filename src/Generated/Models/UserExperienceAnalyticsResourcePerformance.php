<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsResourcePerformance extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $averageSpikeTimeScore AverageSpikeTimeScore of a device or a model type. Valid values 0 to 100
    */
    private ?int $averageSpikeTimeScore = null;
    
    /**
     * @var float|null $cpuSpikeTimePercentage CPU spike time in percentage. Valid values 0 to 100
    */
    private ?float $cpuSpikeTimePercentage = null;
    
    /**
     * @var float|null $cpuSpikeTimePercentageThreshold Threshold of cpuSpikeTimeScore. Valid values 0 to 100
    */
    private ?float $cpuSpikeTimePercentageThreshold = null;
    
    /**
     * @var int|null $cpuSpikeTimeScore The user experience analytics device CPU spike time score. Valid values 0 to 100
    */
    private ?int $cpuSpikeTimeScore = null;
    
    /**
     * @var int|null $deviceCount User experience analytics summarized device count.
    */
    private ?int $deviceCount = null;
    
    /**
     * @var string|null $deviceId The id of the device.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceName The name of the device.
    */
    private ?string $deviceName = null;
    
    /**
     * @var int|null $deviceResourcePerformanceScore Resource performance score of a specific device. Valid values 0 to 100
    */
    private ?int $deviceResourcePerformanceScore = null;
    
    /**
     * @var string|null $manufacturer The user experience analytics device manufacturer.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The user experience analytics device model.
    */
    private ?string $model = null;
    
    /**
     * @var float|null $ramSpikeTimePercentage RAM spike time in percentage. Valid values 0 to 100
    */
    private ?float $ramSpikeTimePercentage = null;
    
    /**
     * @var float|null $ramSpikeTimePercentageThreshold Threshold of ramSpikeTimeScore. Valid values 0 to 100
    */
    private ?float $ramSpikeTimePercentageThreshold = null;
    
    /**
     * @var int|null $ramSpikeTimeScore The user experience analytics device RAM spike time score. Valid values 0 to 100
    */
    private ?int $ramSpikeTimeScore = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsResourcePerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the averageSpikeTimeScore property value. AverageSpikeTimeScore of a device or a model type. Valid values 0 to 100
     * @return int|null
    */
    public function getAverageSpikeTimeScore(): ?int {
        return $this->averageSpikeTimeScore;
    }

    /**
     * Gets the cpuSpikeTimePercentage property value. CPU spike time in percentage. Valid values 0 to 100
     * @return float|null
    */
    public function getCpuSpikeTimePercentage(): ?float {
        return $this->cpuSpikeTimePercentage;
    }

    /**
     * Gets the cpuSpikeTimePercentageThreshold property value. Threshold of cpuSpikeTimeScore. Valid values 0 to 100
     * @return float|null
    */
    public function getCpuSpikeTimePercentageThreshold(): ?float {
        return $this->cpuSpikeTimePercentageThreshold;
    }

    /**
     * Gets the cpuSpikeTimeScore property value. The user experience analytics device CPU spike time score. Valid values 0 to 100
     * @return int|null
    */
    public function getCpuSpikeTimeScore(): ?int {
        return $this->cpuSpikeTimeScore;
    }

    /**
     * Gets the deviceCount property value. User experience analytics summarized device count.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->deviceCount;
    }

    /**
     * Gets the deviceId property value. The id of the device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. The name of the device.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the deviceResourcePerformanceScore property value. Resource performance score of a specific device. Valid values 0 to 100
     * @return int|null
    */
    public function getDeviceResourcePerformanceScore(): ?int {
        return $this->deviceResourcePerformanceScore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'averageSpikeTimeScore' => function (ParseNode $n) use ($o) { $o->setAverageSpikeTimeScore($n->getIntegerValue()); },
            'cpuSpikeTimePercentage' => function (ParseNode $n) use ($o) { $o->setCpuSpikeTimePercentage($n->getFloatValue()); },
            'cpuSpikeTimePercentageThreshold' => function (ParseNode $n) use ($o) { $o->setCpuSpikeTimePercentageThreshold($n->getFloatValue()); },
            'cpuSpikeTimeScore' => function (ParseNode $n) use ($o) { $o->setCpuSpikeTimeScore($n->getIntegerValue()); },
            'deviceCount' => function (ParseNode $n) use ($o) { $o->setDeviceCount($n->getIntegerValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'deviceResourcePerformanceScore' => function (ParseNode $n) use ($o) { $o->setDeviceResourcePerformanceScore($n->getIntegerValue()); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'ramSpikeTimePercentage' => function (ParseNode $n) use ($o) { $o->setRamSpikeTimePercentage($n->getFloatValue()); },
            'ramSpikeTimePercentageThreshold' => function (ParseNode $n) use ($o) { $o->setRamSpikeTimePercentageThreshold($n->getFloatValue()); },
            'ramSpikeTimeScore' => function (ParseNode $n) use ($o) { $o->setRamSpikeTimeScore($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the manufacturer property value. The user experience analytics device manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The user experience analytics device model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the ramSpikeTimePercentage property value. RAM spike time in percentage. Valid values 0 to 100
     * @return float|null
    */
    public function getRamSpikeTimePercentage(): ?float {
        return $this->ramSpikeTimePercentage;
    }

    /**
     * Gets the ramSpikeTimePercentageThreshold property value. Threshold of ramSpikeTimeScore. Valid values 0 to 100
     * @return float|null
    */
    public function getRamSpikeTimePercentageThreshold(): ?float {
        return $this->ramSpikeTimePercentageThreshold;
    }

    /**
     * Gets the ramSpikeTimeScore property value. The user experience analytics device RAM spike time score. Valid values 0 to 100
     * @return int|null
    */
    public function getRamSpikeTimeScore(): ?int {
        return $this->ramSpikeTimeScore;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('averageSpikeTimeScore', $this->averageSpikeTimeScore);
        $writer->writeFloatValue('cpuSpikeTimePercentage', $this->cpuSpikeTimePercentage);
        $writer->writeFloatValue('cpuSpikeTimePercentageThreshold', $this->cpuSpikeTimePercentageThreshold);
        $writer->writeIntegerValue('cpuSpikeTimeScore', $this->cpuSpikeTimeScore);
        $writer->writeIntegerValue('deviceCount', $this->deviceCount);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeIntegerValue('deviceResourcePerformanceScore', $this->deviceResourcePerformanceScore);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeFloatValue('ramSpikeTimePercentage', $this->ramSpikeTimePercentage);
        $writer->writeFloatValue('ramSpikeTimePercentageThreshold', $this->ramSpikeTimePercentageThreshold);
        $writer->writeIntegerValue('ramSpikeTimeScore', $this->ramSpikeTimeScore);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the averageSpikeTimeScore property value. AverageSpikeTimeScore of a device or a model type. Valid values 0 to 100
     *  @param int|null $value Value to set for the averageSpikeTimeScore property.
    */
    public function setAverageSpikeTimeScore(?int $value ): void {
        $this->averageSpikeTimeScore = $value;
    }

    /**
     * Sets the cpuSpikeTimePercentage property value. CPU spike time in percentage. Valid values 0 to 100
     *  @param float|null $value Value to set for the cpuSpikeTimePercentage property.
    */
    public function setCpuSpikeTimePercentage(?float $value ): void {
        $this->cpuSpikeTimePercentage = $value;
    }

    /**
     * Sets the cpuSpikeTimePercentageThreshold property value. Threshold of cpuSpikeTimeScore. Valid values 0 to 100
     *  @param float|null $value Value to set for the cpuSpikeTimePercentageThreshold property.
    */
    public function setCpuSpikeTimePercentageThreshold(?float $value ): void {
        $this->cpuSpikeTimePercentageThreshold = $value;
    }

    /**
     * Sets the cpuSpikeTimeScore property value. The user experience analytics device CPU spike time score. Valid values 0 to 100
     *  @param int|null $value Value to set for the cpuSpikeTimeScore property.
    */
    public function setCpuSpikeTimeScore(?int $value ): void {
        $this->cpuSpikeTimeScore = $value;
    }

    /**
     * Sets the deviceCount property value. User experience analytics summarized device count.
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value ): void {
        $this->deviceCount = $value;
    }

    /**
     * Sets the deviceId property value. The id of the device.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. The name of the device.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the deviceResourcePerformanceScore property value. Resource performance score of a specific device. Valid values 0 to 100
     *  @param int|null $value Value to set for the deviceResourcePerformanceScore property.
    */
    public function setDeviceResourcePerformanceScore(?int $value ): void {
        $this->deviceResourcePerformanceScore = $value;
    }

    /**
     * Sets the manufacturer property value. The user experience analytics device manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The user experience analytics device model.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the ramSpikeTimePercentage property value. RAM spike time in percentage. Valid values 0 to 100
     *  @param float|null $value Value to set for the ramSpikeTimePercentage property.
    */
    public function setRamSpikeTimePercentage(?float $value ): void {
        $this->ramSpikeTimePercentage = $value;
    }

    /**
     * Sets the ramSpikeTimePercentageThreshold property value. Threshold of ramSpikeTimeScore. Valid values 0 to 100
     *  @param float|null $value Value to set for the ramSpikeTimePercentageThreshold property.
    */
    public function setRamSpikeTimePercentageThreshold(?float $value ): void {
        $this->ramSpikeTimePercentageThreshold = $value;
    }

    /**
     * Sets the ramSpikeTimeScore property value. The user experience analytics device RAM spike time score. Valid values 0 to 100
     *  @param int|null $value Value to set for the ramSpikeTimeScore property.
    */
    public function setRamSpikeTimeScore(?int $value ): void {
        $this->ramSpikeTimeScore = $value;
    }

}
