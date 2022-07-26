<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class IosUpdateConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var Time|null $activeHoursEnd Active Hours End (active hours mean the time window when updates install should not happen)
    */
    private ?Time $activeHoursEnd = null;
    
    /**
     * @var Time|null $activeHoursStart Active Hours Start (active hours mean the time window when updates install should not happen)
    */
    private ?Time $activeHoursStart = null;
    
    /**
     * @var array<CustomUpdateTimeWindow>|null $customUpdateTimeWindows If update schedule type is set to use time window scheduling, custom time windows when updates will be scheduled. This collection can contain a maximum of 20 elements.
    */
    private ?array $customUpdateTimeWindows = null;
    
    /**
     * @var string|null $desiredOsVersion If left unspecified, devices will update to the latest version of the OS.
    */
    private ?string $desiredOsVersion = null;
    
    /**
     * @var int|null $enforcedSoftwareUpdateDelayInDays Days before software updates are visible to iOS devices ranging from 0 to 90 inclusive
    */
    private ?int $enforcedSoftwareUpdateDelayInDays = null;
    
    /**
     * @var bool|null $isEnabled Is setting enabled in UI
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var array<string>|null $scheduledInstallDays Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
    */
    private ?array $scheduledInstallDays = null;
    
    /**
     * @var IosSoftwareUpdateScheduleType|null $updateScheduleType Update schedule type for iOS software updates.
    */
    private ?IosSoftwareUpdateScheduleType $updateScheduleType = null;
    
    /**
     * @var int|null $utcTimeOffsetInMinutes UTC Time Offset indicated in minutes
    */
    private ?int $utcTimeOffsetInMinutes = null;
    
    /**
     * Instantiates a new IosUpdateConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosUpdateConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosUpdateConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosUpdateConfiguration {
        return new IosUpdateConfiguration();
    }

    /**
     * Gets the activeHoursEnd property value. Active Hours End (active hours mean the time window when updates install should not happen)
     * @return Time|null
    */
    public function getActiveHoursEnd(): ?Time {
        return $this->activeHoursEnd;
    }

    /**
     * Gets the activeHoursStart property value. Active Hours Start (active hours mean the time window when updates install should not happen)
     * @return Time|null
    */
    public function getActiveHoursStart(): ?Time {
        return $this->activeHoursStart;
    }

    /**
     * Gets the customUpdateTimeWindows property value. If update schedule type is set to use time window scheduling, custom time windows when updates will be scheduled. This collection can contain a maximum of 20 elements.
     * @return array<CustomUpdateTimeWindow>|null
    */
    public function getCustomUpdateTimeWindows(): ?array {
        return $this->customUpdateTimeWindows;
    }

    /**
     * Gets the desiredOsVersion property value. If left unspecified, devices will update to the latest version of the OS.
     * @return string|null
    */
    public function getDesiredOsVersion(): ?string {
        return $this->desiredOsVersion;
    }

    /**
     * Gets the enforcedSoftwareUpdateDelayInDays property value. Days before software updates are visible to iOS devices ranging from 0 to 90 inclusive
     * @return int|null
    */
    public function getEnforcedSoftwareUpdateDelayInDays(): ?int {
        return $this->enforcedSoftwareUpdateDelayInDays;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeHoursEnd' => function (ParseNode $n) use ($o) { $o->setActiveHoursEnd($n->getTimeValue()); },
            'activeHoursStart' => function (ParseNode $n) use ($o) { $o->setActiveHoursStart($n->getTimeValue()); },
            'customUpdateTimeWindows' => function (ParseNode $n) use ($o) { $o->setCustomUpdateTimeWindows($n->getCollectionOfObjectValues(array(CustomUpdateTimeWindow::class, 'createFromDiscriminatorValue'))); },
            'desiredOsVersion' => function (ParseNode $n) use ($o) { $o->setDesiredOsVersion($n->getStringValue()); },
            'enforcedSoftwareUpdateDelayInDays' => function (ParseNode $n) use ($o) { $o->setEnforcedSoftwareUpdateDelayInDays($n->getIntegerValue()); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'scheduledInstallDays' => function (ParseNode $n) use ($o) { $o->setScheduledInstallDays($n->getCollectionOfPrimitiveValues()); },
            'updateScheduleType' => function (ParseNode $n) use ($o) { $o->setUpdateScheduleType($n->getEnumValue(IosSoftwareUpdateScheduleType::class)); },
            'utcTimeOffsetInMinutes' => function (ParseNode $n) use ($o) { $o->setUtcTimeOffsetInMinutes($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the isEnabled property value. Is setting enabled in UI
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the scheduledInstallDays property value. Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
     * @return array<string>|null
    */
    public function getScheduledInstallDays(): ?array {
        return $this->scheduledInstallDays;
    }

    /**
     * Gets the updateScheduleType property value. Update schedule type for iOS software updates.
     * @return IosSoftwareUpdateScheduleType|null
    */
    public function getUpdateScheduleType(): ?IosSoftwareUpdateScheduleType {
        return $this->updateScheduleType;
    }

    /**
     * Gets the utcTimeOffsetInMinutes property value. UTC Time Offset indicated in minutes
     * @return int|null
    */
    public function getUtcTimeOffsetInMinutes(): ?int {
        return $this->utcTimeOffsetInMinutes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeTimeValue('activeHoursEnd', $this->activeHoursEnd);
        $writer->writeTimeValue('activeHoursStart', $this->activeHoursStart);
        $writer->writeCollectionOfObjectValues('customUpdateTimeWindows', $this->customUpdateTimeWindows);
        $writer->writeStringValue('desiredOsVersion', $this->desiredOsVersion);
        $writer->writeIntegerValue('enforcedSoftwareUpdateDelayInDays', $this->enforcedSoftwareUpdateDelayInDays);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeCollectionOfPrimitiveValues('scheduledInstallDays', $this->scheduledInstallDays);
        $writer->writeEnumValue('updateScheduleType', $this->updateScheduleType);
        $writer->writeIntegerValue('utcTimeOffsetInMinutes', $this->utcTimeOffsetInMinutes);
    }

    /**
     * Sets the activeHoursEnd property value. Active Hours End (active hours mean the time window when updates install should not happen)
     *  @param Time|null $value Value to set for the activeHoursEnd property.
    */
    public function setActiveHoursEnd(?Time $value ): void {
        $this->activeHoursEnd = $value;
    }

    /**
     * Sets the activeHoursStart property value. Active Hours Start (active hours mean the time window when updates install should not happen)
     *  @param Time|null $value Value to set for the activeHoursStart property.
    */
    public function setActiveHoursStart(?Time $value ): void {
        $this->activeHoursStart = $value;
    }

    /**
     * Sets the customUpdateTimeWindows property value. If update schedule type is set to use time window scheduling, custom time windows when updates will be scheduled. This collection can contain a maximum of 20 elements.
     *  @param array<CustomUpdateTimeWindow>|null $value Value to set for the customUpdateTimeWindows property.
    */
    public function setCustomUpdateTimeWindows(?array $value ): void {
        $this->customUpdateTimeWindows = $value;
    }

    /**
     * Sets the desiredOsVersion property value. If left unspecified, devices will update to the latest version of the OS.
     *  @param string|null $value Value to set for the desiredOsVersion property.
    */
    public function setDesiredOsVersion(?string $value ): void {
        $this->desiredOsVersion = $value;
    }

    /**
     * Sets the enforcedSoftwareUpdateDelayInDays property value. Days before software updates are visible to iOS devices ranging from 0 to 90 inclusive
     *  @param int|null $value Value to set for the enforcedSoftwareUpdateDelayInDays property.
    */
    public function setEnforcedSoftwareUpdateDelayInDays(?int $value ): void {
        $this->enforcedSoftwareUpdateDelayInDays = $value;
    }

    /**
     * Sets the isEnabled property value. Is setting enabled in UI
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the scheduledInstallDays property value. Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
     *  @param array<string>|null $value Value to set for the scheduledInstallDays property.
    */
    public function setScheduledInstallDays(?array $value ): void {
        $this->scheduledInstallDays = $value;
    }

    /**
     * Sets the updateScheduleType property value. Update schedule type for iOS software updates.
     *  @param IosSoftwareUpdateScheduleType|null $value Value to set for the updateScheduleType property.
    */
    public function setUpdateScheduleType(?IosSoftwareUpdateScheduleType $value ): void {
        $this->updateScheduleType = $value;
    }

    /**
     * Sets the utcTimeOffsetInMinutes property value. UTC Time Offset indicated in minutes
     *  @param int|null $value Value to set for the utcTimeOffsetInMinutes property.
    */
    public function setUtcTimeOffsetInMinutes(?int $value ): void {
        $this->utcTimeOffsetInMinutes = $value;
    }

}
