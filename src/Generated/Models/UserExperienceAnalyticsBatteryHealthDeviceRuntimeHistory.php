<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics battery health runtime history entity contains the trend of runtime of a device over a period of 30 days
*/
class UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the estimatedRuntimeInMinutes property value. The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getEstimatedRuntimeInMinutes(): ?int {
        $val = $this->getBackingStore()->get('estimatedRuntimeInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'estimatedRuntimeInMinutes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'estimatedRuntimeInMinutes' => fn(ParseNode $n) => $o->setEstimatedRuntimeInMinutes($n->getIntegerValue()),
            'runtimeDateTime' => fn(ParseNode $n) => $o->setRuntimeDateTime($n->getStringValue()),
        ]);
    }

    /**
     * Gets the runtimeDateTime property value. The datetime for the instance of runtime history.
     * @return string|null
    */
    public function getRuntimeDateTime(): ?string {
        $val = $this->getBackingStore()->get('runtimeDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runtimeDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeIntegerValue('estimatedRuntimeInMinutes', $this->getEstimatedRuntimeInMinutes());
        $writer->writeStringValue('runtimeDateTime', $this->getRuntimeDateTime());
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device, Intune DeviceID or SCCM device id.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the estimatedRuntimeInMinutes property value. The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the estimatedRuntimeInMinutes property.
    */
    public function setEstimatedRuntimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('estimatedRuntimeInMinutes', $value);
    }

    /**
     * Sets the runtimeDateTime property value. The datetime for the instance of runtime history.
     * @param string|null $value Value to set for the runtimeDateTime property.
    */
    public function setRuntimeDateTime(?string $value): void {
        $this->getBackingStore()->set('runtimeDateTime', $value);
    }

}
