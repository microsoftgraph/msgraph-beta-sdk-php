<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics anomaly entity contains device details.
*/
class UserExperienceAnalyticsAnomalyDevice extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsAnomalyDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAnomalyDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAnomalyDevice {
        return new UserExperienceAnalyticsAnomalyDevice();
    }

    /**
     * Gets the anomalyId property value. The unique identifier of the anomaly.
     * @return string|null
    */
    public function getAnomalyId(): ?string {
        $val = $this->getBackingStore()->get('anomalyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anomalyId'");
    }

    /**
     * Gets the anomalyOnDeviceFirstOccurrenceDateTime property value. Indicates the first occurance date and time for the anomaly on the device.
     * @return DateTime|null
    */
    public function getAnomalyOnDeviceFirstOccurrenceDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('anomalyOnDeviceFirstOccurrenceDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anomalyOnDeviceFirstOccurrenceDateTime'");
    }

    /**
     * Gets the anomalyOnDeviceLatestOccurrenceDateTime property value. Indicates the latest occurance date and time for the anomaly on the device.
     * @return DateTime|null
    */
    public function getAnomalyOnDeviceLatestOccurrenceDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('anomalyOnDeviceLatestOccurrenceDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anomalyOnDeviceLatestOccurrenceDateTime'");
    }

    /**
     * Gets the correlationGroupId property value. The unique identifier of the correlation group.
     * @return string|null
    */
    public function getCorrelationGroupId(): ?string {
        $val = $this->getBackingStore()->get('correlationGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationGroupId'");
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device.
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
     * Gets the deviceManufacturer property value. The manufacturer name of the device.
     * @return string|null
    */
    public function getDeviceManufacturer(): ?string {
        $val = $this->getBackingStore()->get('deviceManufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManufacturer'");
    }

    /**
     * Gets the deviceModel property value. The model name of the device.
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        $val = $this->getBackingStore()->get('deviceModel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceModel'");
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
     * Gets the deviceStatus property value. Indicates the status of the device in the correlation group. Eg: Device status can be anomalous, affected, at risk.
     * @return UserExperienceAnalyticsDeviceStatus|null
    */
    public function getDeviceStatus(): ?UserExperienceAnalyticsDeviceStatus {
        $val = $this->getBackingStore()->get('deviceStatus');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsDeviceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'anomalyId' => fn(ParseNode $n) => $o->setAnomalyId($n->getStringValue()),
            'anomalyOnDeviceFirstOccurrenceDateTime' => fn(ParseNode $n) => $o->setAnomalyOnDeviceFirstOccurrenceDateTime($n->getDateTimeValue()),
            'anomalyOnDeviceLatestOccurrenceDateTime' => fn(ParseNode $n) => $o->setAnomalyOnDeviceLatestOccurrenceDateTime($n->getDateTimeValue()),
            'correlationGroupId' => fn(ParseNode $n) => $o->setCorrelationGroupId($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceManufacturer' => fn(ParseNode $n) => $o->setDeviceManufacturer($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceStatus' => fn(ParseNode $n) => $o->setDeviceStatus($n->getEnumValue(UserExperienceAnalyticsDeviceStatus::class)),
            'osName' => fn(ParseNode $n) => $o->setOsName($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the osName property value. The name of the OS installed on the device.
     * @return string|null
    */
    public function getOsName(): ?string {
        $val = $this->getBackingStore()->get('osName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osName'");
    }

    /**
     * Gets the osVersion property value. The OS version installed on the device.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('anomalyId', $this->getAnomalyId());
        $writer->writeDateTimeValue('anomalyOnDeviceFirstOccurrenceDateTime', $this->getAnomalyOnDeviceFirstOccurrenceDateTime());
        $writer->writeDateTimeValue('anomalyOnDeviceLatestOccurrenceDateTime', $this->getAnomalyOnDeviceLatestOccurrenceDateTime());
        $writer->writeStringValue('correlationGroupId', $this->getCorrelationGroupId());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceManufacturer', $this->getDeviceManufacturer());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeEnumValue('deviceStatus', $this->getDeviceStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osName', $this->getOsName());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
    }

    /**
     * Sets the anomalyId property value. The unique identifier of the anomaly.
     * @param string|null $value Value to set for the anomalyId property.
    */
    public function setAnomalyId(?string $value): void {
        $this->getBackingStore()->set('anomalyId', $value);
    }

    /**
     * Sets the anomalyOnDeviceFirstOccurrenceDateTime property value. Indicates the first occurance date and time for the anomaly on the device.
     * @param DateTime|null $value Value to set for the anomalyOnDeviceFirstOccurrenceDateTime property.
    */
    public function setAnomalyOnDeviceFirstOccurrenceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('anomalyOnDeviceFirstOccurrenceDateTime', $value);
    }

    /**
     * Sets the anomalyOnDeviceLatestOccurrenceDateTime property value. Indicates the latest occurance date and time for the anomaly on the device.
     * @param DateTime|null $value Value to set for the anomalyOnDeviceLatestOccurrenceDateTime property.
    */
    public function setAnomalyOnDeviceLatestOccurrenceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('anomalyOnDeviceLatestOccurrenceDateTime', $value);
    }

    /**
     * Sets the correlationGroupId property value. The unique identifier of the correlation group.
     * @param string|null $value Value to set for the correlationGroupId property.
    */
    public function setCorrelationGroupId(?string $value): void {
        $this->getBackingStore()->set('correlationGroupId', $value);
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceManufacturer property value. The manufacturer name of the device.
     * @param string|null $value Value to set for the deviceManufacturer property.
    */
    public function setDeviceManufacturer(?string $value): void {
        $this->getBackingStore()->set('deviceManufacturer', $value);
    }

    /**
     * Sets the deviceModel property value. The model name of the device.
     * @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value): void {
        $this->getBackingStore()->set('deviceModel', $value);
    }

    /**
     * Sets the deviceName property value. The name of the device.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceStatus property value. Indicates the status of the device in the correlation group. Eg: Device status can be anomalous, affected, at risk.
     * @param UserExperienceAnalyticsDeviceStatus|null $value Value to set for the deviceStatus property.
    */
    public function setDeviceStatus(?UserExperienceAnalyticsDeviceStatus $value): void {
        $this->getBackingStore()->set('deviceStatus', $value);
    }

    /**
     * Sets the osName property value. The name of the OS installed on the device.
     * @param string|null $value Value to set for the osName property.
    */
    public function setOsName(?string $value): void {
        $this->getBackingStore()->set('osName', $value);
    }

    /**
     * Sets the osVersion property value. The OS version installed on the device.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

}
