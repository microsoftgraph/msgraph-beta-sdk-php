<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsModelScores extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsModelScores and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsModelScores
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsModelScores {
        return new UserExperienceAnalyticsModelScores();
    }

    /**
     * Gets the appReliabilityScore property value. The user experience analytics model app reliability score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getAppReliabilityScore(): ?float {
        return $this->getBackingStore()->get('appReliabilityScore');
    }

    /**
     * Gets the batteryHealthScore property value. The user experience analytics model battery health score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getBatteryHealthScore(): ?float {
        return $this->getBackingStore()->get('batteryHealthScore');
    }

    /**
     * Gets the endpointAnalyticsScore property value. The user experience analytics model score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getEndpointAnalyticsScore(): ?float {
        return $this->getBackingStore()->get('endpointAnalyticsScore');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appReliabilityScore' => fn(ParseNode $n) => $o->setAppReliabilityScore($n->getFloatValue()),
            'batteryHealthScore' => fn(ParseNode $n) => $o->setBatteryHealthScore($n->getFloatValue()),
            'endpointAnalyticsScore' => fn(ParseNode $n) => $o->setEndpointAnalyticsScore($n->getFloatValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'modelDeviceCount' => fn(ParseNode $n) => $o->setModelDeviceCount($n->getIntegerValue()),
            'startupPerformanceScore' => fn(ParseNode $n) => $o->setStartupPerformanceScore($n->getFloatValue()),
            'workFromAnywhereScore' => fn(ParseNode $n) => $o->setWorkFromAnywhereScore($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        return $this->getBackingStore()->get('healthStatus');
    }

    /**
     * Gets the manufacturer property value. A unique identifier of the user experience analytics model scores: device manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the model property value. A unique identifier of the user experience analytics model scores: device model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the modelDeviceCount property value. The user experience analytics model device count. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
     * @return int|null
    */
    public function getModelDeviceCount(): ?int {
        return $this->getBackingStore()->get('modelDeviceCount');
    }

    /**
     * Gets the startupPerformanceScore property value. The user experience analytics model startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getStartupPerformanceScore(): ?float {
        return $this->getBackingStore()->get('startupPerformanceScore');
    }

    /**
     * Gets the workFromAnywhereScore property value. The user experience analytics model work from anywhere score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWorkFromAnywhereScore(): ?float {
        return $this->getBackingStore()->get('workFromAnywhereScore');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('appReliabilityScore', $this->getAppReliabilityScore());
        $writer->writeFloatValue('batteryHealthScore', $this->getBatteryHealthScore());
        $writer->writeFloatValue('endpointAnalyticsScore', $this->getEndpointAnalyticsScore());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeIntegerValue('modelDeviceCount', $this->getModelDeviceCount());
        $writer->writeFloatValue('startupPerformanceScore', $this->getStartupPerformanceScore());
        $writer->writeFloatValue('workFromAnywhereScore', $this->getWorkFromAnywhereScore());
    }

    /**
     * Sets the appReliabilityScore property value. The user experience analytics model app reliability score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the appReliabilityScore property.
    */
    public function setAppReliabilityScore(?float $value): void {
        $this->getBackingStore()->set('appReliabilityScore', $value);
    }

    /**
     * Sets the batteryHealthScore property value. The user experience analytics model battery health score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the batteryHealthScore property.
    */
    public function setBatteryHealthScore(?float $value): void {
        $this->getBackingStore()->set('batteryHealthScore', $value);
    }

    /**
     * Sets the endpointAnalyticsScore property value. The user experience analytics model score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the endpointAnalyticsScore property.
    */
    public function setEndpointAnalyticsScore(?float $value): void {
        $this->getBackingStore()->set('endpointAnalyticsScore', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the manufacturer property value. A unique identifier of the user experience analytics model scores: device manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. A unique identifier of the user experience analytics model scores: device model.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the modelDeviceCount property value. The user experience analytics model device count. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
     *  @param int|null $value Value to set for the modelDeviceCount property.
    */
    public function setModelDeviceCount(?int $value): void {
        $this->getBackingStore()->set('modelDeviceCount', $value);
    }

    /**
     * Sets the startupPerformanceScore property value. The user experience analytics model startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the startupPerformanceScore property.
    */
    public function setStartupPerformanceScore(?float $value): void {
        $this->getBackingStore()->set('startupPerformanceScore', $value);
    }

    /**
     * Sets the workFromAnywhereScore property value. The user experience analytics model work from anywhere score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the workFromAnywhereScore property.
    */
    public function setWorkFromAnywhereScore(?float $value): void {
        $this->getBackingStore()->set('workFromAnywhereScore', $value);
    }

}
