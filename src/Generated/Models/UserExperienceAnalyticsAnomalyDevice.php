<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAnomalyDevice extends Entity implements Parsable 
{
    /**
     * @var string|null $anomalyId The unique identifier of the anomaly.
    */
    private ?string $anomalyId = null;
    
    /**
     * @var DateTime|null $anomalyOnDeviceFirstOccurrenceDateTime Indicates the first occurance date and time for the anomaly on the device.
    */
    private ?DateTime $anomalyOnDeviceFirstOccurrenceDateTime = null;
    
    /**
     * @var DateTime|null $anomalyOnDeviceLatestOccurrenceDateTime Indicates the latest occurance date and time for the anomaly on the device.
    */
    private ?DateTime $anomalyOnDeviceLatestOccurrenceDateTime = null;
    
    /**
     * @var string|null $deviceId The unique identifier of the device.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceManufacturer The manufacturer name of the device.
    */
    private ?string $deviceManufacturer = null;
    
    /**
     * @var string|null $deviceModel The model name of the device.
    */
    private ?string $deviceModel = null;
    
    /**
     * @var string|null $deviceName The name of the device.
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $osName The name of the OS installed on the device.
    */
    private ?string $osName = null;
    
    /**
     * @var string|null $osVersion The OS version installed on the device.
    */
    private ?string $osVersion = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsAnomalyDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsAnomalyDevice');
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
        return $this->anomalyId;
    }

    /**
     * Gets the anomalyOnDeviceFirstOccurrenceDateTime property value. Indicates the first occurance date and time for the anomaly on the device.
     * @return DateTime|null
    */
    public function getAnomalyOnDeviceFirstOccurrenceDateTime(): ?DateTime {
        return $this->anomalyOnDeviceFirstOccurrenceDateTime;
    }

    /**
     * Gets the anomalyOnDeviceLatestOccurrenceDateTime property value. Indicates the latest occurance date and time for the anomaly on the device.
     * @return DateTime|null
    */
    public function getAnomalyOnDeviceLatestOccurrenceDateTime(): ?DateTime {
        return $this->anomalyOnDeviceLatestOccurrenceDateTime;
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
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
     * Gets the deviceName property value. The name of the device.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'anomalyId' => function (ParseNode $n) use ($o) { $o->setAnomalyId($n->getStringValue()); },
            'anomalyOnDeviceFirstOccurrenceDateTime' => function (ParseNode $n) use ($o) { $o->setAnomalyOnDeviceFirstOccurrenceDateTime($n->getDateTimeValue()); },
            'anomalyOnDeviceLatestOccurrenceDateTime' => function (ParseNode $n) use ($o) { $o->setAnomalyOnDeviceLatestOccurrenceDateTime($n->getDateTimeValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceManufacturer' => function (ParseNode $n) use ($o) { $o->setDeviceManufacturer($n->getStringValue()); },
            'deviceModel' => function (ParseNode $n) use ($o) { $o->setDeviceModel($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'osName' => function (ParseNode $n) use ($o) { $o->setOsName($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the osName property value. The name of the OS installed on the device.
     * @return string|null
    */
    public function getOsName(): ?string {
        return $this->osName;
    }

    /**
     * Gets the osVersion property value. The OS version installed on the device.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('anomalyId', $this->anomalyId);
        $writer->writeDateTimeValue('anomalyOnDeviceFirstOccurrenceDateTime', $this->anomalyOnDeviceFirstOccurrenceDateTime);
        $writer->writeDateTimeValue('anomalyOnDeviceLatestOccurrenceDateTime', $this->anomalyOnDeviceLatestOccurrenceDateTime);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceManufacturer', $this->deviceManufacturer);
        $writer->writeStringValue('deviceModel', $this->deviceModel);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('osName', $this->osName);
        $writer->writeStringValue('osVersion', $this->osVersion);
    }

    /**
     * Sets the anomalyId property value. The unique identifier of the anomaly.
     *  @param string|null $value Value to set for the anomalyId property.
    */
    public function setAnomalyId(?string $value ): void {
        $this->anomalyId = $value;
    }

    /**
     * Sets the anomalyOnDeviceFirstOccurrenceDateTime property value. Indicates the first occurance date and time for the anomaly on the device.
     *  @param DateTime|null $value Value to set for the anomalyOnDeviceFirstOccurrenceDateTime property.
    */
    public function setAnomalyOnDeviceFirstOccurrenceDateTime(?DateTime $value ): void {
        $this->anomalyOnDeviceFirstOccurrenceDateTime = $value;
    }

    /**
     * Sets the anomalyOnDeviceLatestOccurrenceDateTime property value. Indicates the latest occurance date and time for the anomaly on the device.
     *  @param DateTime|null $value Value to set for the anomalyOnDeviceLatestOccurrenceDateTime property.
    */
    public function setAnomalyOnDeviceLatestOccurrenceDateTime(?DateTime $value ): void {
        $this->anomalyOnDeviceLatestOccurrenceDateTime = $value;
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
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
     * Sets the deviceName property value. The name of the device.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the osName property value. The name of the OS installed on the device.
     *  @param string|null $value Value to set for the osName property.
    */
    public function setOsName(?string $value ): void {
        $this->osName = $value;
    }

    /**
     * Sets the osVersion property value. The OS version installed on the device.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

}
