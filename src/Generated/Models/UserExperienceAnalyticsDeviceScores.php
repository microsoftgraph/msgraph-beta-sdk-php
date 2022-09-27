<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDeviceScores extends Entity implements Parsable 
{
    /**
     * @var float|null $appReliabilityScore The user experience analytics device app reliability score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $appReliabilityScore = null;
    
    /**
     * @var float|null $batteryHealthScore The user experience analytics device battery health score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $batteryHealthScore = null;
    
    /**
     * @var string|null $deviceName The user experience analytics device name.
    */
    private ?string $deviceName = null;
    
    /**
     * @var float|null $endpointAnalyticsScore The user experience analytics device score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $endpointAnalyticsScore = null;
    
    /**
     * @var UserExperienceAnalyticsHealthState|null $healthStatus The healthStatus property
    */
    private ?UserExperienceAnalyticsHealthState $healthStatus = null;
    
    /**
     * @var string|null $manufacturer The user experience analytics device manufacturer.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The user experience analytics device model.
    */
    private ?string $model = null;
    
    /**
     * @var float|null $startupPerformanceScore The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $startupPerformanceScore = null;
    
    /**
     * @var float|null $workFromAnywhereScore The user experience analytics device work From anywhere score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $workFromAnywhereScore = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceScores and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsDeviceScores');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceScores
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceScores {
        return new UserExperienceAnalyticsDeviceScores();
    }

    /**
     * Gets the appReliabilityScore property value. The user experience analytics device app reliability score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getAppReliabilityScore(): ?float {
        return $this->appReliabilityScore;
    }

    /**
     * Gets the batteryHealthScore property value. The user experience analytics device battery health score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getBatteryHealthScore(): ?float {
        return $this->batteryHealthScore;
    }

    /**
     * Gets the deviceName property value. The user experience analytics device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the endpointAnalyticsScore property value. The user experience analytics device score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getEndpointAnalyticsScore(): ?float {
        return $this->endpointAnalyticsScore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appReliabilityScore' => function (ParseNode $n) use ($o) { $o->setAppReliabilityScore($n->getFloatValue()); },
            'batteryHealthScore' => function (ParseNode $n) use ($o) { $o->setBatteryHealthScore($n->getFloatValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'endpointAnalyticsScore' => function (ParseNode $n) use ($o) { $o->setEndpointAnalyticsScore($n->getFloatValue()); },
            'healthStatus' => function (ParseNode $n) use ($o) { $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'startupPerformanceScore' => function (ParseNode $n) use ($o) { $o->setStartupPerformanceScore($n->getFloatValue()); },
            'workFromAnywhereScore' => function (ParseNode $n) use ($o) { $o->setWorkFromAnywhereScore($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        return $this->healthStatus;
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
     * Gets the startupPerformanceScore property value. The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getStartupPerformanceScore(): ?float {
        return $this->startupPerformanceScore;
    }

    /**
     * Gets the workFromAnywhereScore property value. The user experience analytics device work From anywhere score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWorkFromAnywhereScore(): ?float {
        return $this->workFromAnywhereScore;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('appReliabilityScore', $this->appReliabilityScore);
        $writer->writeFloatValue('batteryHealthScore', $this->batteryHealthScore);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeFloatValue('endpointAnalyticsScore', $this->endpointAnalyticsScore);
        $writer->writeEnumValue('healthStatus', $this->healthStatus);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeFloatValue('startupPerformanceScore', $this->startupPerformanceScore);
        $writer->writeFloatValue('workFromAnywhereScore', $this->workFromAnywhereScore);
    }

    /**
     * Sets the appReliabilityScore property value. The user experience analytics device app reliability score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the appReliabilityScore property.
    */
    public function setAppReliabilityScore(?float $value ): void {
        $this->appReliabilityScore = $value;
    }

    /**
     * Sets the batteryHealthScore property value. The user experience analytics device battery health score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the batteryHealthScore property.
    */
    public function setBatteryHealthScore(?float $value ): void {
        $this->batteryHealthScore = $value;
    }

    /**
     * Sets the deviceName property value. The user experience analytics device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the endpointAnalyticsScore property value. The user experience analytics device score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the endpointAnalyticsScore property.
    */
    public function setEndpointAnalyticsScore(?float $value ): void {
        $this->endpointAnalyticsScore = $value;
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value ): void {
        $this->healthStatus = $value;
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
     * Sets the startupPerformanceScore property value. The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the startupPerformanceScore property.
    */
    public function setStartupPerformanceScore(?float $value ): void {
        $this->startupPerformanceScore = $value;
    }

    /**
     * Sets the workFromAnywhereScore property value. The user experience analytics device work From anywhere score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the workFromAnywhereScore property.
    */
    public function setWorkFromAnywhereScore(?float $value ): void {
        $this->workFromAnywhereScore = $value;
    }

}
