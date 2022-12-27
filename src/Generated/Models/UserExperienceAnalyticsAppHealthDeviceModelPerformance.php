<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAppHealthDeviceModelPerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsAppHealthDeviceModelPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthDeviceModelPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthDeviceModelPerformance {
        return new UserExperienceAnalyticsAppHealthDeviceModelPerformance();
    }

    /**
     * Gets the activeDeviceCount property value. The number of active devices for the model. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDeviceCount(): ?int {
        return $this->getBackingStore()->get('activeDeviceCount');
    }

    /**
     * Gets the deviceManufacturer property value. The manufacturer name of the device.
     * @return string|null
    */
    public function getDeviceManufacturer(): ?string {
        return $this->getBackingStore()->get('deviceManufacturer');
    }

    /**
     * Gets the deviceModel property value. The model name of the device.
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->getBackingStore()->get('deviceModel');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDeviceCount' => fn(ParseNode $n) => $o->setActiveDeviceCount($n->getIntegerValue()),
            'deviceManufacturer' => fn(ParseNode $n) => $o->setDeviceManufacturer($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'meanTimeToFailureInMinutes' => fn(ParseNode $n) => $o->setMeanTimeToFailureInMinutes($n->getIntegerValue()),
            'modelAppHealthScore' => fn(ParseNode $n) => $o->setModelAppHealthScore($n->getFloatValue()),
            'modelAppHealthStatus' => fn(ParseNode $n) => $o->setModelAppHealthStatus($n->getStringValue()),
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
     * Gets the meanTimeToFailureInMinutes property value. The mean time to failure for the model device in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMeanTimeToFailureInMinutes(): ?int {
        return $this->getBackingStore()->get('meanTimeToFailureInMinutes');
    }

    /**
     * Gets the modelAppHealthScore property value. The app health score of the device model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getModelAppHealthScore(): ?float {
        return $this->getBackingStore()->get('modelAppHealthScore');
    }

    /**
     * Gets the modelAppHealthStatus property value. The overall app health status of the device model.
     * @return string|null
    */
    public function getModelAppHealthStatus(): ?string {
        return $this->getBackingStore()->get('modelAppHealthStatus');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDeviceCount', $this->getActiveDeviceCount());
        $writer->writeStringValue('deviceManufacturer', $this->getDeviceManufacturer());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeIntegerValue('meanTimeToFailureInMinutes', $this->getMeanTimeToFailureInMinutes());
        $writer->writeFloatValue('modelAppHealthScore', $this->getModelAppHealthScore());
        $writer->writeStringValue('modelAppHealthStatus', $this->getModelAppHealthStatus());
    }

    /**
     * Sets the activeDeviceCount property value. The number of active devices for the model. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the activeDeviceCount property.
    */
    public function setActiveDeviceCount(?int $value): void {
        $this->getBackingStore()->set('activeDeviceCount', $value);
    }

    /**
     * Sets the deviceManufacturer property value. The manufacturer name of the device.
     *  @param string|null $value Value to set for the deviceManufacturer property.
    */
    public function setDeviceManufacturer(?string $value): void {
        $this->getBackingStore()->set('deviceManufacturer', $value);
    }

    /**
     * Sets the deviceModel property value. The model name of the device.
     *  @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value): void {
        $this->getBackingStore()->set('deviceModel', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the meanTimeToFailureInMinutes property value. The mean time to failure for the model device in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the meanTimeToFailureInMinutes property.
    */
    public function setMeanTimeToFailureInMinutes(?int $value): void {
        $this->getBackingStore()->set('meanTimeToFailureInMinutes', $value);
    }

    /**
     * Sets the modelAppHealthScore property value. The app health score of the device model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the modelAppHealthScore property.
    */
    public function setModelAppHealthScore(?float $value): void {
        $this->getBackingStore()->set('modelAppHealthScore', $value);
    }

    /**
     * Sets the modelAppHealthStatus property value. The overall app health status of the device model.
     *  @param string|null $value Value to set for the modelAppHealthStatus property.
    */
    public function setModelAppHealthStatus(?string $value): void {
        $this->getBackingStore()->set('modelAppHealthStatus', $value);
    }

}
