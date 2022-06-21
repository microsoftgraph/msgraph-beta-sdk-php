<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory extends Entity implements Parsable 
{
    /**
     * @var string|null $deviceId The unique identifier of the device, Intune DeviceID or SCCM device id.
    */
    private ?string $deviceId = null;
    
    /**
     * @var int|null $estimatedRuntimeInMinutes The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
    */
    private ?int $estimatedRuntimeInMinutes = null;
    
    /**
     * @var string|null $runtimeDateTime The datetime for the instance of runtime history.
    */
    private ?string $runtimeDateTime = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory {
        return new UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory();
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device, Intune DeviceID or SCCM device id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the estimatedRuntimeInMinutes property value. The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getEstimatedRuntimeInMinutes(): ?int {
        return $this->estimatedRuntimeInMinutes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'estimatedRuntimeInMinutes' => function (ParseNode $n) use ($o) { $o->setEstimatedRuntimeInMinutes($n->getIntegerValue()); },
            'runtimeDateTime' => function (ParseNode $n) use ($o) { $o->setRuntimeDateTime($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the runtimeDateTime property value. The datetime for the instance of runtime history.
     * @return string|null
    */
    public function getRuntimeDateTime(): ?string {
        return $this->runtimeDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeIntegerValue('estimatedRuntimeInMinutes', $this->estimatedRuntimeInMinutes);
        $writer->writeStringValue('runtimeDateTime', $this->runtimeDateTime);
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device, Intune DeviceID or SCCM device id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the estimatedRuntimeInMinutes property value. The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the estimatedRuntimeInMinutes property.
    */
    public function setEstimatedRuntimeInMinutes(?int $value ): void {
        $this->estimatedRuntimeInMinutes = $value;
    }

    /**
     * Sets the runtimeDateTime property value. The datetime for the instance of runtime history.
     *  @param string|null $value Value to set for the runtimeDateTime property.
    */
    public function setRuntimeDateTime(?string $value ): void {
        $this->runtimeDateTime = $value;
    }

}
