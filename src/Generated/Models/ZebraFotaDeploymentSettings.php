<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class ZebraFotaDeploymentSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $batteryRuleMinimumBatteryLevelPercentage Minimum battery level (%) required for both download and installation. Default: -1 (System defaults). Maximum is 100.
    */
    private ?int $batteryRuleMinimumBatteryLevelPercentage = null;
    
    /**
     * @var bool|null $batteryRuleRequireCharger Flag indicating if charger is required. When set to false, the client can install updates whether the device is in or out of the charger. Applied only for installation. Defaults to false.
    */
    private ?bool $batteryRuleRequireCharger = null;
    
    /**
     * @var string|null $deviceModel Deploy update for devices with this model only.
    */
    private ?string $deviceModel = null;
    
    /**
     * @var ZebraFotaNetworkType|null $downloadRuleNetworkType Represents various network types for Zebra FOTA deployment.
    */
    private ?ZebraFotaNetworkType $downloadRuleNetworkType = null;
    
    /**
     * @var DateTime|null $downloadRuleStartDateTime Date and time in the device time zone when the download will start (e.g., 2018-07-25T10:20:32). The default value is UTC now and the maximum is 10 days from deployment creation.
    */
    private ?DateTime $downloadRuleStartDateTime = null;
    
    /**
     * @var string|null $firmwareTargetBoardSupportPackageVersion Deployment's Board Support Package (BSP. E.g.: '01.18.02.00'). Required only for custom update type.
    */
    private ?string $firmwareTargetBoardSupportPackageVersion = null;
    
    /**
     * @var string|null $firmwareTargetOsVersion Target OS Version (e.g.: '8.1.0'). Required only for custom update type.
    */
    private ?string $firmwareTargetOsVersion = null;
    
    /**
     * @var string|null $firmwareTargetPatch Target patch name (e.g.: 'U06'). Required only for custom update type.
    */
    private ?string $firmwareTargetPatch = null;
    
    /**
     * @var DateTime|null $installRuleStartDateTime Date and time in device time zone when the install will start. Default - download startDate if configured, otherwise defaults to NOW. Ignored when deployment update type was set to auto.
    */
    private ?DateTime $installRuleStartDateTime = null;
    
    /**
     * @var Time|null $installRuleWindowEndTime Time of day after which the install cannot start. Possible range is 00:30:00 to 23:59:59. Should be greater than 'installRuleWindowStartTime' by 30 mins. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 23:59:59. Respected for all values of update type, including AUTO.
    */
    private ?Time $installRuleWindowEndTime = null;
    
    /**
     * @var Time|null $installRuleWindowStartTime Time of day (00:00:00 - 23:30:00) when installation should begin. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 00:00:00. Respected for all values of update type, including AUTO.
    */
    private ?Time $installRuleWindowStartTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $scheduleDurationInDays Maximum 28 days. Default is 28 days. Sequence of dates are: 1) Download start date. 2) Install start date. 3) Schedule end date. If any of the values are not provided, the date provided in the preceding step of the sequence is used. If no values are provided, the string value of the current UTC is used.
    */
    private ?int $scheduleDurationInDays = null;
    
    /**
     * @var ZebraFotaScheduleMode|null $scheduleMode Represents various schedule modes for Zebra FOTA deployment.
    */
    private ?ZebraFotaScheduleMode $scheduleMode = null;
    
    /**
     * @var int|null $timeZoneOffsetInMinutes This attribute indicates the deployment time offset (e.g.180 represents an offset of +03:00, and -270 represents an offset of -04:30). The time offset is the time timezone where the devices are located. The deployment start and end data uses this timezone
    */
    private ?int $timeZoneOffsetInMinutes = null;
    
    /**
     * @var ZebraFotaUpdateType|null $updateType Represents various update types for Zebra FOTA deployment.
    */
    private ?ZebraFotaUpdateType $updateType = null;
    
    /**
     * Instantiates a new zebraFotaDeploymentSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.zebraFotaDeploymentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ZebraFotaDeploymentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ZebraFotaDeploymentSettings {
        return new ZebraFotaDeploymentSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the batteryRuleMinimumBatteryLevelPercentage property value. Minimum battery level (%) required for both download and installation. Default: -1 (System defaults). Maximum is 100.
     * @return int|null
    */
    public function getBatteryRuleMinimumBatteryLevelPercentage(): ?int {
        return $this->batteryRuleMinimumBatteryLevelPercentage;
    }

    /**
     * Gets the batteryRuleRequireCharger property value. Flag indicating if charger is required. When set to false, the client can install updates whether the device is in or out of the charger. Applied only for installation. Defaults to false.
     * @return bool|null
    */
    public function getBatteryRuleRequireCharger(): ?bool {
        return $this->batteryRuleRequireCharger;
    }

    /**
     * Gets the deviceModel property value. Deploy update for devices with this model only.
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->deviceModel;
    }

    /**
     * Gets the downloadRuleNetworkType property value. Represents various network types for Zebra FOTA deployment.
     * @return ZebraFotaNetworkType|null
    */
    public function getDownloadRuleNetworkType(): ?ZebraFotaNetworkType {
        return $this->downloadRuleNetworkType;
    }

    /**
     * Gets the downloadRuleStartDateTime property value. Date and time in the device time zone when the download will start (e.g., 2018-07-25T10:20:32). The default value is UTC now and the maximum is 10 days from deployment creation.
     * @return DateTime|null
    */
    public function getDownloadRuleStartDateTime(): ?DateTime {
        return $this->downloadRuleStartDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'batteryRuleMinimumBatteryLevelPercentage' => function (ParseNode $n) use ($o) { $o->setBatteryRuleMinimumBatteryLevelPercentage($n->getIntegerValue()); },
            'batteryRuleRequireCharger' => function (ParseNode $n) use ($o) { $o->setBatteryRuleRequireCharger($n->getBooleanValue()); },
            'deviceModel' => function (ParseNode $n) use ($o) { $o->setDeviceModel($n->getStringValue()); },
            'downloadRuleNetworkType' => function (ParseNode $n) use ($o) { $o->setDownloadRuleNetworkType($n->getEnumValue(ZebraFotaNetworkType::class)); },
            'downloadRuleStartDateTime' => function (ParseNode $n) use ($o) { $o->setDownloadRuleStartDateTime($n->getDateTimeValue()); },
            'firmwareTargetBoardSupportPackageVersion' => function (ParseNode $n) use ($o) { $o->setFirmwareTargetBoardSupportPackageVersion($n->getStringValue()); },
            'firmwareTargetOsVersion' => function (ParseNode $n) use ($o) { $o->setFirmwareTargetOsVersion($n->getStringValue()); },
            'firmwareTargetPatch' => function (ParseNode $n) use ($o) { $o->setFirmwareTargetPatch($n->getStringValue()); },
            'installRuleStartDateTime' => function (ParseNode $n) use ($o) { $o->setInstallRuleStartDateTime($n->getDateTimeValue()); },
            'installRuleWindowEndTime' => function (ParseNode $n) use ($o) { $o->setInstallRuleWindowEndTime($n->getTimeValue()); },
            'installRuleWindowStartTime' => function (ParseNode $n) use ($o) { $o->setInstallRuleWindowStartTime($n->getTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'scheduleDurationInDays' => function (ParseNode $n) use ($o) { $o->setScheduleDurationInDays($n->getIntegerValue()); },
            'scheduleMode' => function (ParseNode $n) use ($o) { $o->setScheduleMode($n->getEnumValue(ZebraFotaScheduleMode::class)); },
            'timeZoneOffsetInMinutes' => function (ParseNode $n) use ($o) { $o->setTimeZoneOffsetInMinutes($n->getIntegerValue()); },
            'updateType' => function (ParseNode $n) use ($o) { $o->setUpdateType($n->getEnumValue(ZebraFotaUpdateType::class)); },
        ];
    }

    /**
     * Gets the firmwareTargetBoardSupportPackageVersion property value. Deployment's Board Support Package (BSP. E.g.: '01.18.02.00'). Required only for custom update type.
     * @return string|null
    */
    public function getFirmwareTargetBoardSupportPackageVersion(): ?string {
        return $this->firmwareTargetBoardSupportPackageVersion;
    }

    /**
     * Gets the firmwareTargetOsVersion property value. Target OS Version (e.g.: '8.1.0'). Required only for custom update type.
     * @return string|null
    */
    public function getFirmwareTargetOsVersion(): ?string {
        return $this->firmwareTargetOsVersion;
    }

    /**
     * Gets the firmwareTargetPatch property value. Target patch name (e.g.: 'U06'). Required only for custom update type.
     * @return string|null
    */
    public function getFirmwareTargetPatch(): ?string {
        return $this->firmwareTargetPatch;
    }

    /**
     * Gets the installRuleStartDateTime property value. Date and time in device time zone when the install will start. Default - download startDate if configured, otherwise defaults to NOW. Ignored when deployment update type was set to auto.
     * @return DateTime|null
    */
    public function getInstallRuleStartDateTime(): ?DateTime {
        return $this->installRuleStartDateTime;
    }

    /**
     * Gets the installRuleWindowEndTime property value. Time of day after which the install cannot start. Possible range is 00:30:00 to 23:59:59. Should be greater than 'installRuleWindowStartTime' by 30 mins. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 23:59:59. Respected for all values of update type, including AUTO.
     * @return Time|null
    */
    public function getInstallRuleWindowEndTime(): ?Time {
        return $this->installRuleWindowEndTime;
    }

    /**
     * Gets the installRuleWindowStartTime property value. Time of day (00:00:00 - 23:30:00) when installation should begin. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 00:00:00. Respected for all values of update type, including AUTO.
     * @return Time|null
    */
    public function getInstallRuleWindowStartTime(): ?Time {
        return $this->installRuleWindowStartTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the scheduleDurationInDays property value. Maximum 28 days. Default is 28 days. Sequence of dates are: 1) Download start date. 2) Install start date. 3) Schedule end date. If any of the values are not provided, the date provided in the preceding step of the sequence is used. If no values are provided, the string value of the current UTC is used.
     * @return int|null
    */
    public function getScheduleDurationInDays(): ?int {
        return $this->scheduleDurationInDays;
    }

    /**
     * Gets the scheduleMode property value. Represents various schedule modes for Zebra FOTA deployment.
     * @return ZebraFotaScheduleMode|null
    */
    public function getScheduleMode(): ?ZebraFotaScheduleMode {
        return $this->scheduleMode;
    }

    /**
     * Gets the timeZoneOffsetInMinutes property value. This attribute indicates the deployment time offset (e.g.180 represents an offset of +03:00, and -270 represents an offset of -04:30). The time offset is the time timezone where the devices are located. The deployment start and end data uses this timezone
     * @return int|null
    */
    public function getTimeZoneOffsetInMinutes(): ?int {
        return $this->timeZoneOffsetInMinutes;
    }

    /**
     * Gets the updateType property value. Represents various update types for Zebra FOTA deployment.
     * @return ZebraFotaUpdateType|null
    */
    public function getUpdateType(): ?ZebraFotaUpdateType {
        return $this->updateType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('batteryRuleMinimumBatteryLevelPercentage', $this->batteryRuleMinimumBatteryLevelPercentage);
        $writer->writeBooleanValue('batteryRuleRequireCharger', $this->batteryRuleRequireCharger);
        $writer->writeStringValue('deviceModel', $this->deviceModel);
        $writer->writeEnumValue('downloadRuleNetworkType', $this->downloadRuleNetworkType);
        $writer->writeDateTimeValue('downloadRuleStartDateTime', $this->downloadRuleStartDateTime);
        $writer->writeStringValue('firmwareTargetBoardSupportPackageVersion', $this->firmwareTargetBoardSupportPackageVersion);
        $writer->writeStringValue('firmwareTargetOsVersion', $this->firmwareTargetOsVersion);
        $writer->writeStringValue('firmwareTargetPatch', $this->firmwareTargetPatch);
        $writer->writeDateTimeValue('installRuleStartDateTime', $this->installRuleStartDateTime);
        $writer->writeTimeValue('installRuleWindowEndTime', $this->installRuleWindowEndTime);
        $writer->writeTimeValue('installRuleWindowStartTime', $this->installRuleWindowStartTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('scheduleDurationInDays', $this->scheduleDurationInDays);
        $writer->writeEnumValue('scheduleMode', $this->scheduleMode);
        $writer->writeIntegerValue('timeZoneOffsetInMinutes', $this->timeZoneOffsetInMinutes);
        $writer->writeEnumValue('updateType', $this->updateType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the batteryRuleMinimumBatteryLevelPercentage property value. Minimum battery level (%) required for both download and installation. Default: -1 (System defaults). Maximum is 100.
     *  @param int|null $value Value to set for the batteryRuleMinimumBatteryLevelPercentage property.
    */
    public function setBatteryRuleMinimumBatteryLevelPercentage(?int $value ): void {
        $this->batteryRuleMinimumBatteryLevelPercentage = $value;
    }

    /**
     * Sets the batteryRuleRequireCharger property value. Flag indicating if charger is required. When set to false, the client can install updates whether the device is in or out of the charger. Applied only for installation. Defaults to false.
     *  @param bool|null $value Value to set for the batteryRuleRequireCharger property.
    */
    public function setBatteryRuleRequireCharger(?bool $value ): void {
        $this->batteryRuleRequireCharger = $value;
    }

    /**
     * Sets the deviceModel property value. Deploy update for devices with this model only.
     *  @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value ): void {
        $this->deviceModel = $value;
    }

    /**
     * Sets the downloadRuleNetworkType property value. Represents various network types for Zebra FOTA deployment.
     *  @param ZebraFotaNetworkType|null $value Value to set for the downloadRuleNetworkType property.
    */
    public function setDownloadRuleNetworkType(?ZebraFotaNetworkType $value ): void {
        $this->downloadRuleNetworkType = $value;
    }

    /**
     * Sets the downloadRuleStartDateTime property value. Date and time in the device time zone when the download will start (e.g., 2018-07-25T10:20:32). The default value is UTC now and the maximum is 10 days from deployment creation.
     *  @param DateTime|null $value Value to set for the downloadRuleStartDateTime property.
    */
    public function setDownloadRuleStartDateTime(?DateTime $value ): void {
        $this->downloadRuleStartDateTime = $value;
    }

    /**
     * Sets the firmwareTargetBoardSupportPackageVersion property value. Deployment's Board Support Package (BSP. E.g.: '01.18.02.00'). Required only for custom update type.
     *  @param string|null $value Value to set for the firmwareTargetBoardSupportPackageVersion property.
    */
    public function setFirmwareTargetBoardSupportPackageVersion(?string $value ): void {
        $this->firmwareTargetBoardSupportPackageVersion = $value;
    }

    /**
     * Sets the firmwareTargetOsVersion property value. Target OS Version (e.g.: '8.1.0'). Required only for custom update type.
     *  @param string|null $value Value to set for the firmwareTargetOsVersion property.
    */
    public function setFirmwareTargetOsVersion(?string $value ): void {
        $this->firmwareTargetOsVersion = $value;
    }

    /**
     * Sets the firmwareTargetPatch property value. Target patch name (e.g.: 'U06'). Required only for custom update type.
     *  @param string|null $value Value to set for the firmwareTargetPatch property.
    */
    public function setFirmwareTargetPatch(?string $value ): void {
        $this->firmwareTargetPatch = $value;
    }

    /**
     * Sets the installRuleStartDateTime property value. Date and time in device time zone when the install will start. Default - download startDate if configured, otherwise defaults to NOW. Ignored when deployment update type was set to auto.
     *  @param DateTime|null $value Value to set for the installRuleStartDateTime property.
    */
    public function setInstallRuleStartDateTime(?DateTime $value ): void {
        $this->installRuleStartDateTime = $value;
    }

    /**
     * Sets the installRuleWindowEndTime property value. Time of day after which the install cannot start. Possible range is 00:30:00 to 23:59:59. Should be greater than 'installRuleWindowStartTime' by 30 mins. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 23:59:59. Respected for all values of update type, including AUTO.
     *  @param Time|null $value Value to set for the installRuleWindowEndTime property.
    */
    public function setInstallRuleWindowEndTime(?Time $value ): void {
        $this->installRuleWindowEndTime = $value;
    }

    /**
     * Sets the installRuleWindowStartTime property value. Time of day (00:00:00 - 23:30:00) when installation should begin. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 00:00:00. Respected for all values of update type, including AUTO.
     *  @param Time|null $value Value to set for the installRuleWindowStartTime property.
    */
    public function setInstallRuleWindowStartTime(?Time $value ): void {
        $this->installRuleWindowStartTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the scheduleDurationInDays property value. Maximum 28 days. Default is 28 days. Sequence of dates are: 1) Download start date. 2) Install start date. 3) Schedule end date. If any of the values are not provided, the date provided in the preceding step of the sequence is used. If no values are provided, the string value of the current UTC is used.
     *  @param int|null $value Value to set for the scheduleDurationInDays property.
    */
    public function setScheduleDurationInDays(?int $value ): void {
        $this->scheduleDurationInDays = $value;
    }

    /**
     * Sets the scheduleMode property value. Represents various schedule modes for Zebra FOTA deployment.
     *  @param ZebraFotaScheduleMode|null $value Value to set for the scheduleMode property.
    */
    public function setScheduleMode(?ZebraFotaScheduleMode $value ): void {
        $this->scheduleMode = $value;
    }

    /**
     * Sets the timeZoneOffsetInMinutes property value. This attribute indicates the deployment time offset (e.g.180 represents an offset of +03:00, and -270 represents an offset of -04:30). The time offset is the time timezone where the devices are located. The deployment start and end data uses this timezone
     *  @param int|null $value Value to set for the timeZoneOffsetInMinutes property.
    */
    public function setTimeZoneOffsetInMinutes(?int $value ): void {
        $this->timeZoneOffsetInMinutes = $value;
    }

    /**
     * Sets the updateType property value. Represents various update types for Zebra FOTA deployment.
     *  @param ZebraFotaUpdateType|null $value Value to set for the updateType property.
    */
    public function setUpdateType(?ZebraFotaUpdateType $value ): void {
        $this->updateType = $value;
    }

}
