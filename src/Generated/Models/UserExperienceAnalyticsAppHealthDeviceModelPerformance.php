<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAppHealthDeviceModelPerformance extends Entity implements Parsable 
{
    /**
     * @var int|null $activeDeviceCount The number of active devices for the model. Valid values -2147483648 to 2147483647
    */
    private ?int $activeDeviceCount = null;
    
    /**
     * @var string|null $deviceManufacturer The manufacturer name of the device.
    */
    private ?string $deviceManufacturer = null;
    
    /**
     * @var string|null $deviceModel The model name of the device.
    */
    private ?string $deviceModel = null;
    
    /**
     * @var UserExperienceAnalyticsHealthState|null $healthStatus The healthStatus property
    */
    private ?UserExperienceAnalyticsHealthState $healthStatus = null;
    
    /**
     * @var int|null $meanTimeToFailureInMinutes The mean time to failure for the model device in minutes. Valid values -2147483648 to 2147483647
    */
    private ?int $meanTimeToFailureInMinutes = null;
    
    /**
     * @var float|null $modelAppHealthScore The app health score of the device model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $modelAppHealthScore = null;
    
    /**
     * @var string|null $modelAppHealthStatus The overall app health status of the device model.
    */
    private ?string $modelAppHealthStatus = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthDeviceModelPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsAppHealthDeviceModelPerformance');
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
        return $this->activeDeviceCount;
    }

    /**
     * Gets the deviceManufacturer property value. The manufacturer name of the device.
     * @return string|null
    */
    public function getDeviceManufacturer(): ?string {
        return $this->deviceManufacturer;
    }

    /**
     * Gets the deviceModel property value. The model name of the device.
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->deviceModel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDeviceCount' => function (ParseNode $n) use ($o) { $o->setActiveDeviceCount($n->getIntegerValue()); },
            'deviceManufacturer' => function (ParseNode $n) use ($o) { $o->setDeviceManufacturer($n->getStringValue()); },
            'deviceModel' => function (ParseNode $n) use ($o) { $o->setDeviceModel($n->getStringValue()); },
            'healthStatus' => function (ParseNode $n) use ($o) { $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)); },
            'meanTimeToFailureInMinutes' => function (ParseNode $n) use ($o) { $o->setMeanTimeToFailureInMinutes($n->getIntegerValue()); },
            'modelAppHealthScore' => function (ParseNode $n) use ($o) { $o->setModelAppHealthScore($n->getFloatValue()); },
            'modelAppHealthStatus' => function (ParseNode $n) use ($o) { $o->setModelAppHealthStatus($n->getStringValue()); },
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
     * Gets the meanTimeToFailureInMinutes property value. The mean time to failure for the model device in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMeanTimeToFailureInMinutes(): ?int {
        return $this->meanTimeToFailureInMinutes;
    }

    /**
     * Gets the modelAppHealthScore property value. The app health score of the device model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getModelAppHealthScore(): ?float {
        return $this->modelAppHealthScore;
    }

    /**
     * Gets the modelAppHealthStatus property value. The overall app health status of the device model.
     * @return string|null
    */
    public function getModelAppHealthStatus(): ?string {
        return $this->modelAppHealthStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDeviceCount', $this->activeDeviceCount);
        $writer->writeStringValue('deviceManufacturer', $this->deviceManufacturer);
        $writer->writeStringValue('deviceModel', $this->deviceModel);
        $writer->writeEnumValue('healthStatus', $this->healthStatus);
        $writer->writeIntegerValue('meanTimeToFailureInMinutes', $this->meanTimeToFailureInMinutes);
        $writer->writeFloatValue('modelAppHealthScore', $this->modelAppHealthScore);
        $writer->writeStringValue('modelAppHealthStatus', $this->modelAppHealthStatus);
    }

    /**
     * Sets the activeDeviceCount property value. The number of active devices for the model. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the activeDeviceCount property.
    */
    public function setActiveDeviceCount(?int $value ): void {
        $this->activeDeviceCount = $value;
    }

    /**
     * Sets the deviceManufacturer property value. The manufacturer name of the device.
     *  @param string|null $value Value to set for the deviceManufacturer property.
    */
    public function setDeviceManufacturer(?string $value ): void {
        $this->deviceManufacturer = $value;
    }

    /**
     * Sets the deviceModel property value. The model name of the device.
     *  @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value ): void {
        $this->deviceModel = $value;
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value ): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the meanTimeToFailureInMinutes property value. The mean time to failure for the model device in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the meanTimeToFailureInMinutes property.
    */
    public function setMeanTimeToFailureInMinutes(?int $value ): void {
        $this->meanTimeToFailureInMinutes = $value;
    }

    /**
     * Sets the modelAppHealthScore property value. The app health score of the device model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the modelAppHealthScore property.
    */
    public function setModelAppHealthScore(?float $value ): void {
        $this->modelAppHealthScore = $value;
    }

    /**
     * Sets the modelAppHealthStatus property value. The overall app health status of the device model.
     *  @param string|null $value Value to set for the modelAppHealthStatus property.
    */
    public function setModelAppHealthStatus(?string $value ): void {
        $this->modelAppHealthStatus = $value;
    }

}
