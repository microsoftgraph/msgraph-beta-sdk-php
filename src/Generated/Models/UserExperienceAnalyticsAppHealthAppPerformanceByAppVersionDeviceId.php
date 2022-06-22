<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId extends Entity implements Parsable 
{
    /**
     * @var int|null $appCrashCount The number of crashes for the app. Valid values -2147483648 to 2147483647
    */
    private ?int $appCrashCount = null;
    
    /**
     * @var string|null $appDisplayName The friendly name of the application.
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var string|null $appName The name of the application.
    */
    private ?string $appName = null;
    
    /**
     * @var string|null $appPublisher The publisher of the application.
    */
    private ?string $appPublisher = null;
    
    /**
     * @var string|null $appVersion The version of the application.
    */
    private ?string $appVersion = null;
    
    /**
     * @var string|null $deviceDisplayName The name of the device.
    */
    private ?string $deviceDisplayName = null;
    
    /**
     * @var string|null $deviceId The id of the device.
    */
    private ?string $deviceId = null;
    
    /**
     * @var DateTime|null $processedDateTime The date and time when the statistics were last computed.
    */
    private ?DateTime $processedDateTime = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId {
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId();
    }

    /**
     * Gets the appCrashCount property value. The number of crashes for the app. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAppCrashCount(): ?int {
        return $this->appCrashCount;
    }

    /**
     * Gets the appDisplayName property value. The friendly name of the application.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the appName property value. The name of the application.
     * @return string|null
    */
    public function getAppName(): ?string {
        return $this->appName;
    }

    /**
     * Gets the appPublisher property value. The publisher of the application.
     * @return string|null
    */
    public function getAppPublisher(): ?string {
        return $this->appPublisher;
    }

    /**
     * Gets the appVersion property value. The version of the application.
     * @return string|null
    */
    public function getAppVersion(): ?string {
        return $this->appVersion;
    }

    /**
     * Gets the deviceDisplayName property value. The name of the device.
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->deviceDisplayName;
    }

    /**
     * Gets the deviceId property value. The id of the device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appCrashCount' => function (ParseNode $n) use ($o) { $o->setAppCrashCount($n->getIntegerValue()); },
            'appDisplayName' => function (ParseNode $n) use ($o) { $o->setAppDisplayName($n->getStringValue()); },
            'appName' => function (ParseNode $n) use ($o) { $o->setAppName($n->getStringValue()); },
            'appPublisher' => function (ParseNode $n) use ($o) { $o->setAppPublisher($n->getStringValue()); },
            'appVersion' => function (ParseNode $n) use ($o) { $o->setAppVersion($n->getStringValue()); },
            'deviceDisplayName' => function (ParseNode $n) use ($o) { $o->setDeviceDisplayName($n->getStringValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'processedDateTime' => function (ParseNode $n) use ($o) { $o->setProcessedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the processedDateTime property value. The date and time when the statistics were last computed.
     * @return DateTime|null
    */
    public function getProcessedDateTime(): ?DateTime {
        return $this->processedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('appCrashCount', $this->appCrashCount);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeStringValue('appName', $this->appName);
        $writer->writeStringValue('appPublisher', $this->appPublisher);
        $writer->writeStringValue('appVersion', $this->appVersion);
        $writer->writeStringValue('deviceDisplayName', $this->deviceDisplayName);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeDateTimeValue('processedDateTime', $this->processedDateTime);
    }

    /**
     * Sets the appCrashCount property value. The number of crashes for the app. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the appCrashCount property.
    */
    public function setAppCrashCount(?int $value ): void {
        $this->appCrashCount = $value;
    }

    /**
     * Sets the appDisplayName property value. The friendly name of the application.
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the appName property value. The name of the application.
     *  @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value ): void {
        $this->appName = $value;
    }

    /**
     * Sets the appPublisher property value. The publisher of the application.
     *  @param string|null $value Value to set for the appPublisher property.
    */
    public function setAppPublisher(?string $value ): void {
        $this->appPublisher = $value;
    }

    /**
     * Sets the appVersion property value. The version of the application.
     *  @param string|null $value Value to set for the appVersion property.
    */
    public function setAppVersion(?string $value ): void {
        $this->appVersion = $value;
    }

    /**
     * Sets the deviceDisplayName property value. The name of the device.
     *  @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value ): void {
        $this->deviceDisplayName = $value;
    }

    /**
     * Sets the deviceId property value. The id of the device.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the processedDateTime property value. The date and time when the statistics were last computed.
     *  @param DateTime|null $value Value to set for the processedDateTime property.
    */
    public function setProcessedDateTime(?DateTime $value ): void {
        $this->processedDateTime = $value;
    }

}
