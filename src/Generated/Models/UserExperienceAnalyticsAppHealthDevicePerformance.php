<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAppHealthDevicePerformance extends Entity implements Parsable 
{
    /**
     * @var int|null $appCrashCount The number of app crashes for the device. Valid values -2147483648 to 2147483647
    */
    private ?int $appCrashCount = null;
    
    /**
     * @var int|null $appHangCount The number of app hangs for the device. Valid values -2147483648 to 2147483647
    */
    private ?int $appHangCount = null;
    
    /**
     * @var int|null $crashedAppCount The number of distinct app crashes for the device. Valid values -2147483648 to 2147483647
    */
    private ?int $crashedAppCount = null;
    
    /**
     * @var float|null $deviceAppHealthScore The app health score of the device. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $deviceAppHealthScore = null;
    
    /**
     * @var string|null $deviceAppHealthStatus The overall app health status of the device.
    */
    private ?string $deviceAppHealthStatus = null;
    
    /**
     * @var string|null $deviceDisplayName The name of the device.
    */
    private ?string $deviceDisplayName = null;
    
    /**
     * @var string|null $deviceId The id of the device.
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
     * @var UserExperienceAnalyticsHealthState|null $healthStatus The health state of the user experience analytics device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
    */
    private ?UserExperienceAnalyticsHealthState $healthStatus = null;
    
    /**
     * @var int|null $meanTimeToFailureInMinutes The mean time to failure for the device in minutes. Valid values -2147483648 to 2147483647
    */
    private ?int $meanTimeToFailureInMinutes = null;
    
    /**
     * @var DateTime|null $processedDateTime The date and time when the statistics were last computed.
    */
    private ?DateTime $processedDateTime = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthDevicePerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthDevicePerformance {
        return new UserExperienceAnalyticsAppHealthDevicePerformance();
    }

    /**
     * Gets the appCrashCount property value. The number of app crashes for the device. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAppCrashCount(): ?int {
        return $this->appCrashCount;
    }

    /**
     * Gets the appHangCount property value. The number of app hangs for the device. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAppHangCount(): ?int {
        return $this->appHangCount;
    }

    /**
     * Gets the crashedAppCount property value. The number of distinct app crashes for the device. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getCrashedAppCount(): ?int {
        return $this->crashedAppCount;
    }

    /**
     * Gets the deviceAppHealthScore property value. The app health score of the device. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getDeviceAppHealthScore(): ?float {
        return $this->deviceAppHealthScore;
    }

    /**
     * Gets the deviceAppHealthStatus property value. The overall app health status of the device.
     * @return string|null
    */
    public function getDeviceAppHealthStatus(): ?string {
        return $this->deviceAppHealthStatus;
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
            'appCrashCount' => function (ParseNode $n) use ($o) { $o->setAppCrashCount($n->getIntegerValue()); },
            'appHangCount' => function (ParseNode $n) use ($o) { $o->setAppHangCount($n->getIntegerValue()); },
            'crashedAppCount' => function (ParseNode $n) use ($o) { $o->setCrashedAppCount($n->getIntegerValue()); },
            'deviceAppHealthScore' => function (ParseNode $n) use ($o) { $o->setDeviceAppHealthScore($n->getFloatValue()); },
            'deviceAppHealthStatus' => function (ParseNode $n) use ($o) { $o->setDeviceAppHealthStatus($n->getStringValue()); },
            'deviceDisplayName' => function (ParseNode $n) use ($o) { $o->setDeviceDisplayName($n->getStringValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceManufacturer' => function (ParseNode $n) use ($o) { $o->setDeviceManufacturer($n->getStringValue()); },
            'deviceModel' => function (ParseNode $n) use ($o) { $o->setDeviceModel($n->getStringValue()); },
            'healthStatus' => function (ParseNode $n) use ($o) { $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)); },
            'meanTimeToFailureInMinutes' => function (ParseNode $n) use ($o) { $o->setMeanTimeToFailureInMinutes($n->getIntegerValue()); },
            'processedDateTime' => function (ParseNode $n) use ($o) { $o->setProcessedDateTime($n->getDateTimeValue()); },
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
     * Gets the meanTimeToFailureInMinutes property value. The mean time to failure for the device in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMeanTimeToFailureInMinutes(): ?int {
        return $this->meanTimeToFailureInMinutes;
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
        $writer->writeIntegerValue('appHangCount', $this->appHangCount);
        $writer->writeIntegerValue('crashedAppCount', $this->crashedAppCount);
        $writer->writeFloatValue('deviceAppHealthScore', $this->deviceAppHealthScore);
        $writer->writeStringValue('deviceAppHealthStatus', $this->deviceAppHealthStatus);
        $writer->writeStringValue('deviceDisplayName', $this->deviceDisplayName);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceManufacturer', $this->deviceManufacturer);
        $writer->writeStringValue('deviceModel', $this->deviceModel);
        $writer->writeEnumValue('healthStatus', $this->healthStatus);
        $writer->writeIntegerValue('meanTimeToFailureInMinutes', $this->meanTimeToFailureInMinutes);
        $writer->writeDateTimeValue('processedDateTime', $this->processedDateTime);
    }

    /**
     * Sets the appCrashCount property value. The number of app crashes for the device. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the appCrashCount property.
    */
    public function setAppCrashCount(?int $value ): void {
        $this->appCrashCount = $value;
    }

    /**
     * Sets the appHangCount property value. The number of app hangs for the device. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the appHangCount property.
    */
    public function setAppHangCount(?int $value ): void {
        $this->appHangCount = $value;
    }

    /**
     * Sets the crashedAppCount property value. The number of distinct app crashes for the device. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the crashedAppCount property.
    */
    public function setCrashedAppCount(?int $value ): void {
        $this->crashedAppCount = $value;
    }

    /**
     * Sets the deviceAppHealthScore property value. The app health score of the device. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the deviceAppHealthScore property.
    */
    public function setDeviceAppHealthScore(?float $value ): void {
        $this->deviceAppHealthScore = $value;
    }

    /**
     * Sets the deviceAppHealthStatus property value. The overall app health status of the device.
     *  @param string|null $value Value to set for the deviceAppHealthStatus property.
    */
    public function setDeviceAppHealthStatus(?string $value ): void {
        $this->deviceAppHealthStatus = $value;
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
     * Sets the healthStatus property value. The health state of the user experience analytics device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value ): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the meanTimeToFailureInMinutes property value. The mean time to failure for the device in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the meanTimeToFailureInMinutes property.
    */
    public function setMeanTimeToFailureInMinutes(?int $value ): void {
        $this->meanTimeToFailureInMinutes = $value;
    }

    /**
     * Sets the processedDateTime property value. The date and time when the statistics were last computed.
     *  @param DateTime|null $value Value to set for the processedDateTime property.
    */
    public function setProcessedDateTime(?DateTime $value ): void {
        $this->processedDateTime = $value;
    }

}
