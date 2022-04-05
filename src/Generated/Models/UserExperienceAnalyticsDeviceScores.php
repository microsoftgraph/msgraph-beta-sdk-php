<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDeviceScores extends Entity 
{
    /** @var float|null $appReliabilityScore The user experience analytics device app reliability score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $appReliabilityScore = null;
    
    /** @var string|null $deviceName The user experience analytics device name. */
    private ?string $deviceName = null;
    
    /** @var float|null $endpointAnalyticsScore The user experience analytics device score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $endpointAnalyticsScore = null;
    
    /** @var UserExperienceAnalyticsHealthState|null $healthStatus The health state of the user experience analytics device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals. */
    private ?UserExperienceAnalyticsHealthState $healthStatus = null;
    
    /** @var string|null $manufacturer The user experience analytics device manufacturer. */
    private ?string $manufacturer = null;
    
    /** @var string|null $model The user experience analytics device model. */
    private ?string $model = null;
    
    /** @var float|null $startupPerformanceScore The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $startupPerformanceScore = null;
    
    /** @var float|null $workFromAnywhereScore The user experience analytics device work From anywhere score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $workFromAnywhereScore = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsDeviceScores and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceScores
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceScores {
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
        return array_merge(parent::getFieldDeserializers(), [
            'appReliabilityScore' => function (self $o, ParseNode $n) { $o->setAppReliabilityScore($n->getFloatValue()); },
            'deviceName' => function (self $o, ParseNode $n) { $o->setDeviceName($n->getStringValue()); },
            'endpointAnalyticsScore' => function (self $o, ParseNode $n) { $o->setEndpointAnalyticsScore($n->getFloatValue()); },
            'healthStatus' => function (self $o, ParseNode $n) { $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)); },
            'manufacturer' => function (self $o, ParseNode $n) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (self $o, ParseNode $n) { $o->setModel($n->getStringValue()); },
            'startupPerformanceScore' => function (self $o, ParseNode $n) { $o->setStartupPerformanceScore($n->getFloatValue()); },
            'workFromAnywhereScore' => function (self $o, ParseNode $n) { $o->setWorkFromAnywhereScore($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the healthStatus property value. The health state of the user experience analytics device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
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
     * Sets the healthStatus property value. The health state of the user experience analytics device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
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
