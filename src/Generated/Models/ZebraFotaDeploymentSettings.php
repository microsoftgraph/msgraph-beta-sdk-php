<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Time;

/**
 * The Zebra FOTA deployment complex type that describes the settings required to create a FOTA deployment.
*/
class ZebraFotaDeploymentSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ZebraFotaDeploymentSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the batteryRuleMinimumBatteryLevelPercentage property value. Minimum battery level (%) required for both download and installation. Default: -1 (System defaults). Maximum is 100.
     * @return int|null
    */
    public function getBatteryRuleMinimumBatteryLevelPercentage(): ?int {
        return $this->getBackingStore()->get('batteryRuleMinimumBatteryLevelPercentage');
    }

    /**
     * Gets the batteryRuleRequireCharger property value. Flag indicating if charger is required. When set to false, the client can install updates whether the device is in or out of the charger. Applied only for installation. Defaults to false.
     * @return bool|null
    */
    public function getBatteryRuleRequireCharger(): ?bool {
        return $this->getBackingStore()->get('batteryRuleRequireCharger');
    }

    /**
     * Gets the deviceModel property value. Deploy update for devices with this model only.
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->getBackingStore()->get('deviceModel');
    }

    /**
     * Gets the downloadRuleNetworkType property value. Represents various network types for Zebra FOTA deployment.
     * @return ZebraFotaNetworkType|null
    */
    public function getDownloadRuleNetworkType(): ?ZebraFotaNetworkType {
        return $this->getBackingStore()->get('downloadRuleNetworkType');
    }

    /**
     * Gets the downloadRuleStartDateTime property value. Date and time in the device time zone when the download will start (e.g., 2018-07-25T10:20:32). The default value is UTC now and the maximum is 10 days from deployment creation.
     * @return DateTime|null
    */
    public function getDownloadRuleStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('downloadRuleStartDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'batteryRuleMinimumBatteryLevelPercentage' => fn(ParseNode $n) => $o->setBatteryRuleMinimumBatteryLevelPercentage($n->getIntegerValue()),
            'batteryRuleRequireCharger' => fn(ParseNode $n) => $o->setBatteryRuleRequireCharger($n->getBooleanValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'downloadRuleNetworkType' => fn(ParseNode $n) => $o->setDownloadRuleNetworkType($n->getEnumValue(ZebraFotaNetworkType::class)),
            'downloadRuleStartDateTime' => fn(ParseNode $n) => $o->setDownloadRuleStartDateTime($n->getDateTimeValue()),
            'firmwareTargetArtifactDescription' => fn(ParseNode $n) => $o->setFirmwareTargetArtifactDescription($n->getStringValue()),
            'firmwareTargetBoardSupportPackageVersion' => fn(ParseNode $n) => $o->setFirmwareTargetBoardSupportPackageVersion($n->getStringValue()),
            'firmwareTargetOsVersion' => fn(ParseNode $n) => $o->setFirmwareTargetOsVersion($n->getStringValue()),
            'firmwareTargetPatch' => fn(ParseNode $n) => $o->setFirmwareTargetPatch($n->getStringValue()),
            'installRuleStartDateTime' => fn(ParseNode $n) => $o->setInstallRuleStartDateTime($n->getDateTimeValue()),
            'installRuleWindowEndTime' => fn(ParseNode $n) => $o->setInstallRuleWindowEndTime($n->getTimeValue()),
            'installRuleWindowStartTime' => fn(ParseNode $n) => $o->setInstallRuleWindowStartTime($n->getTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scheduleDurationInDays' => fn(ParseNode $n) => $o->setScheduleDurationInDays($n->getIntegerValue()),
            'scheduleMode' => fn(ParseNode $n) => $o->setScheduleMode($n->getEnumValue(ZebraFotaScheduleMode::class)),
            'timeZoneOffsetInMinutes' => fn(ParseNode $n) => $o->setTimeZoneOffsetInMinutes($n->getIntegerValue()),
            'updateType' => fn(ParseNode $n) => $o->setUpdateType($n->getEnumValue(ZebraFotaUpdateType::class)),
        ];
    }

    /**
     * Gets the firmwareTargetArtifactDescription property value. A description provided by Zebra for the the firmware artifact to update the device to (e.g.: LifeGuard Update 120 (released 29-June-2022).
     * @return string|null
    */
    public function getFirmwareTargetArtifactDescription(): ?string {
        return $this->getBackingStore()->get('firmwareTargetArtifactDescription');
    }

    /**
     * Gets the firmwareTargetBoardSupportPackageVersion property value. Deployment's Board Support Package (BSP. E.g.: '01.18.02.00'). Required only for custom update type.
     * @return string|null
    */
    public function getFirmwareTargetBoardSupportPackageVersion(): ?string {
        return $this->getBackingStore()->get('firmwareTargetBoardSupportPackageVersion');
    }

    /**
     * Gets the firmwareTargetOsVersion property value. Target OS Version (e.g.: '8.1.0'). Required only for custom update type.
     * @return string|null
    */
    public function getFirmwareTargetOsVersion(): ?string {
        return $this->getBackingStore()->get('firmwareTargetOsVersion');
    }

    /**
     * Gets the firmwareTargetPatch property value. Target patch name (e.g.: 'U06'). Required only for custom update type.
     * @return string|null
    */
    public function getFirmwareTargetPatch(): ?string {
        return $this->getBackingStore()->get('firmwareTargetPatch');
    }

    /**
     * Gets the installRuleStartDateTime property value. Date and time in device time zone when the install will start. Default - download startDate if configured, otherwise defaults to NOW. Ignored when deployment update type was set to auto.
     * @return DateTime|null
    */
    public function getInstallRuleStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('installRuleStartDateTime');
    }

    /**
     * Gets the installRuleWindowEndTime property value. Time of day after which the install cannot start. Possible range is 00:30:00 to 23:59:59. Should be greater than 'installRuleWindowStartTime' by 30 mins. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 23:59:59. Respected for all values of update type, including AUTO.
     * @return Time|null
    */
    public function getInstallRuleWindowEndTime(): ?Time {
        return $this->getBackingStore()->get('installRuleWindowEndTime');
    }

    /**
     * Gets the installRuleWindowStartTime property value. Time of day (00:00:00 - 23:30:00) when installation should begin. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 00:00:00. Respected for all values of update type, including AUTO.
     * @return Time|null
    */
    public function getInstallRuleWindowStartTime(): ?Time {
        return $this->getBackingStore()->get('installRuleWindowStartTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the scheduleDurationInDays property value. Maximum 28 days. Default is 28 days. Sequence of dates are: 1) Download start date. 2) Install start date. 3) Schedule end date. If any of the values are not provided, the date provided in the preceding step of the sequence is used. If no values are provided, the string value of the current UTC is used.
     * @return int|null
    */
    public function getScheduleDurationInDays(): ?int {
        return $this->getBackingStore()->get('scheduleDurationInDays');
    }

    /**
     * Gets the scheduleMode property value. Represents various schedule modes for Zebra FOTA deployment.
     * @return ZebraFotaScheduleMode|null
    */
    public function getScheduleMode(): ?ZebraFotaScheduleMode {
        return $this->getBackingStore()->get('scheduleMode');
    }

    /**
     * Gets the timeZoneOffsetInMinutes property value. This attribute indicates the deployment time offset (e.g.180 represents an offset of +03:00, and -270 represents an offset of -04:30). The time offset is the time timezone where the devices are located. The deployment start and end data uses this timezone
     * @return int|null
    */
    public function getTimeZoneOffsetInMinutes(): ?int {
        return $this->getBackingStore()->get('timeZoneOffsetInMinutes');
    }

    /**
     * Gets the updateType property value. Represents various update types for Zebra FOTA deployment.
     * @return ZebraFotaUpdateType|null
    */
    public function getUpdateType(): ?ZebraFotaUpdateType {
        return $this->getBackingStore()->get('updateType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('batteryRuleMinimumBatteryLevelPercentage', $this->getBatteryRuleMinimumBatteryLevelPercentage());
        $writer->writeBooleanValue('batteryRuleRequireCharger', $this->getBatteryRuleRequireCharger());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeEnumValue('downloadRuleNetworkType', $this->getDownloadRuleNetworkType());
        $writer->writeDateTimeValue('downloadRuleStartDateTime', $this->getDownloadRuleStartDateTime());
        $writer->writeStringValue('firmwareTargetArtifactDescription', $this->getFirmwareTargetArtifactDescription());
        $writer->writeStringValue('firmwareTargetBoardSupportPackageVersion', $this->getFirmwareTargetBoardSupportPackageVersion());
        $writer->writeStringValue('firmwareTargetOsVersion', $this->getFirmwareTargetOsVersion());
        $writer->writeStringValue('firmwareTargetPatch', $this->getFirmwareTargetPatch());
        $writer->writeDateTimeValue('installRuleStartDateTime', $this->getInstallRuleStartDateTime());
        $writer->writeTimeValue('installRuleWindowEndTime', $this->getInstallRuleWindowEndTime());
        $writer->writeTimeValue('installRuleWindowStartTime', $this->getInstallRuleWindowStartTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('scheduleDurationInDays', $this->getScheduleDurationInDays());
        $writer->writeEnumValue('scheduleMode', $this->getScheduleMode());
        $writer->writeIntegerValue('timeZoneOffsetInMinutes', $this->getTimeZoneOffsetInMinutes());
        $writer->writeEnumValue('updateType', $this->getUpdateType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the batteryRuleMinimumBatteryLevelPercentage property value. Minimum battery level (%) required for both download and installation. Default: -1 (System defaults). Maximum is 100.
     * @param int|null $value Value to set for the batteryRuleMinimumBatteryLevelPercentage property.
    */
    public function setBatteryRuleMinimumBatteryLevelPercentage(?int $value): void {
        $this->getBackingStore()->set('batteryRuleMinimumBatteryLevelPercentage', $value);
    }

    /**
     * Sets the batteryRuleRequireCharger property value. Flag indicating if charger is required. When set to false, the client can install updates whether the device is in or out of the charger. Applied only for installation. Defaults to false.
     * @param bool|null $value Value to set for the batteryRuleRequireCharger property.
    */
    public function setBatteryRuleRequireCharger(?bool $value): void {
        $this->getBackingStore()->set('batteryRuleRequireCharger', $value);
    }

    /**
     * Sets the deviceModel property value. Deploy update for devices with this model only.
     * @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value): void {
        $this->getBackingStore()->set('deviceModel', $value);
    }

    /**
     * Sets the downloadRuleNetworkType property value. Represents various network types for Zebra FOTA deployment.
     * @param ZebraFotaNetworkType|null $value Value to set for the downloadRuleNetworkType property.
    */
    public function setDownloadRuleNetworkType(?ZebraFotaNetworkType $value): void {
        $this->getBackingStore()->set('downloadRuleNetworkType', $value);
    }

    /**
     * Sets the downloadRuleStartDateTime property value. Date and time in the device time zone when the download will start (e.g., 2018-07-25T10:20:32). The default value is UTC now and the maximum is 10 days from deployment creation.
     * @param DateTime|null $value Value to set for the downloadRuleStartDateTime property.
    */
    public function setDownloadRuleStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('downloadRuleStartDateTime', $value);
    }

    /**
     * Sets the firmwareTargetArtifactDescription property value. A description provided by Zebra for the the firmware artifact to update the device to (e.g.: LifeGuard Update 120 (released 29-June-2022).
     * @param string|null $value Value to set for the firmwareTargetArtifactDescription property.
    */
    public function setFirmwareTargetArtifactDescription(?string $value): void {
        $this->getBackingStore()->set('firmwareTargetArtifactDescription', $value);
    }

    /**
     * Sets the firmwareTargetBoardSupportPackageVersion property value. Deployment's Board Support Package (BSP. E.g.: '01.18.02.00'). Required only for custom update type.
     * @param string|null $value Value to set for the firmwareTargetBoardSupportPackageVersion property.
    */
    public function setFirmwareTargetBoardSupportPackageVersion(?string $value): void {
        $this->getBackingStore()->set('firmwareTargetBoardSupportPackageVersion', $value);
    }

    /**
     * Sets the firmwareTargetOsVersion property value. Target OS Version (e.g.: '8.1.0'). Required only for custom update type.
     * @param string|null $value Value to set for the firmwareTargetOsVersion property.
    */
    public function setFirmwareTargetOsVersion(?string $value): void {
        $this->getBackingStore()->set('firmwareTargetOsVersion', $value);
    }

    /**
     * Sets the firmwareTargetPatch property value. Target patch name (e.g.: 'U06'). Required only for custom update type.
     * @param string|null $value Value to set for the firmwareTargetPatch property.
    */
    public function setFirmwareTargetPatch(?string $value): void {
        $this->getBackingStore()->set('firmwareTargetPatch', $value);
    }

    /**
     * Sets the installRuleStartDateTime property value. Date and time in device time zone when the install will start. Default - download startDate if configured, otherwise defaults to NOW. Ignored when deployment update type was set to auto.
     * @param DateTime|null $value Value to set for the installRuleStartDateTime property.
    */
    public function setInstallRuleStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('installRuleStartDateTime', $value);
    }

    /**
     * Sets the installRuleWindowEndTime property value. Time of day after which the install cannot start. Possible range is 00:30:00 to 23:59:59. Should be greater than 'installRuleWindowStartTime' by 30 mins. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 23:59:59. Respected for all values of update type, including AUTO.
     * @param Time|null $value Value to set for the installRuleWindowEndTime property.
    */
    public function setInstallRuleWindowEndTime(?Time $value): void {
        $this->getBackingStore()->set('installRuleWindowEndTime', $value);
    }

    /**
     * Sets the installRuleWindowStartTime property value. Time of day (00:00:00 - 23:30:00) when installation should begin. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 00:00:00. Respected for all values of update type, including AUTO.
     * @param Time|null $value Value to set for the installRuleWindowStartTime property.
    */
    public function setInstallRuleWindowStartTime(?Time $value): void {
        $this->getBackingStore()->set('installRuleWindowStartTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the scheduleDurationInDays property value. Maximum 28 days. Default is 28 days. Sequence of dates are: 1) Download start date. 2) Install start date. 3) Schedule end date. If any of the values are not provided, the date provided in the preceding step of the sequence is used. If no values are provided, the string value of the current UTC is used.
     * @param int|null $value Value to set for the scheduleDurationInDays property.
    */
    public function setScheduleDurationInDays(?int $value): void {
        $this->getBackingStore()->set('scheduleDurationInDays', $value);
    }

    /**
     * Sets the scheduleMode property value. Represents various schedule modes for Zebra FOTA deployment.
     * @param ZebraFotaScheduleMode|null $value Value to set for the scheduleMode property.
    */
    public function setScheduleMode(?ZebraFotaScheduleMode $value): void {
        $this->getBackingStore()->set('scheduleMode', $value);
    }

    /**
     * Sets the timeZoneOffsetInMinutes property value. This attribute indicates the deployment time offset (e.g.180 represents an offset of +03:00, and -270 represents an offset of -04:30). The time offset is the time timezone where the devices are located. The deployment start and end data uses this timezone
     * @param int|null $value Value to set for the timeZoneOffsetInMinutes property.
    */
    public function setTimeZoneOffsetInMinutes(?int $value): void {
        $this->getBackingStore()->set('timeZoneOffsetInMinutes', $value);
    }

    /**
     * Sets the updateType property value. Represents various update types for Zebra FOTA deployment.
     * @param ZebraFotaUpdateType|null $value Value to set for the updateType property.
    */
    public function setUpdateType(?ZebraFotaUpdateType $value): void {
        $this->getBackingStore()->set('updateType', $value);
    }

}
