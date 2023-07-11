<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * IOS Update Configuration, allows you to configure time window within week to install iOS updates
*/
class IosUpdateConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new iosUpdateConfiguration and sets the default values.
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
        $val = $this->getBackingStore()->get('activeHoursEnd');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeHoursEnd'");
    }

    /**
     * Gets the activeHoursStart property value. Active Hours Start (active hours mean the time window when updates install should not happen)
     * @return Time|null
    */
    public function getActiveHoursStart(): ?Time {
        $val = $this->getBackingStore()->get('activeHoursStart');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeHoursStart'");
    }

    /**
     * Gets the customUpdateTimeWindows property value. If update schedule type is set to use time window scheduling, custom time windows when updates will be scheduled. This collection can contain a maximum of 20 elements.
     * @return array<CustomUpdateTimeWindow>|null
    */
    public function getCustomUpdateTimeWindows(): ?array {
        $val = $this->getBackingStore()->get('customUpdateTimeWindows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomUpdateTimeWindow::class);
            /** @var array<CustomUpdateTimeWindow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customUpdateTimeWindows'");
    }

    /**
     * Gets the desiredOsVersion property value. If left unspecified, devices will update to the latest version of the OS.
     * @return string|null
    */
    public function getDesiredOsVersion(): ?string {
        $val = $this->getBackingStore()->get('desiredOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'desiredOsVersion'");
    }

    /**
     * Gets the enforcedSoftwareUpdateDelayInDays property value. Days before software updates are visible to iOS devices ranging from 0 to 90 inclusive
     * @return int|null
    */
    public function getEnforcedSoftwareUpdateDelayInDays(): ?int {
        $val = $this->getBackingStore()->get('enforcedSoftwareUpdateDelayInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcedSoftwareUpdateDelayInDays'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeHoursEnd' => fn(ParseNode $n) => $o->setActiveHoursEnd($n->getTimeValue()),
            'activeHoursStart' => fn(ParseNode $n) => $o->setActiveHoursStart($n->getTimeValue()),
            'customUpdateTimeWindows' => fn(ParseNode $n) => $o->setCustomUpdateTimeWindows($n->getCollectionOfObjectValues([CustomUpdateTimeWindow::class, 'createFromDiscriminatorValue'])),
            'desiredOsVersion' => fn(ParseNode $n) => $o->setDesiredOsVersion($n->getStringValue()),
            'enforcedSoftwareUpdateDelayInDays' => fn(ParseNode $n) => $o->setEnforcedSoftwareUpdateDelayInDays($n->getIntegerValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scheduledInstallDays' => fn(ParseNode $n) => $o->setScheduledInstallDays($n->getCollectionOfEnumValues(DayOfWeek::class)),
            'updateScheduleType' => fn(ParseNode $n) => $o->setUpdateScheduleType($n->getEnumValue(IosSoftwareUpdateScheduleType::class)),
            'utcTimeOffsetInMinutes' => fn(ParseNode $n) => $o->setUtcTimeOffsetInMinutes($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the isEnabled property value. Is setting enabled in UI
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the scheduledInstallDays property value. Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
     * @return array<DayOfWeek>|null
    */
    public function getScheduledInstallDays(): ?array {
        $val = $this->getBackingStore()->get('scheduledInstallDays');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DayOfWeek::class);
            /** @var array<DayOfWeek>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledInstallDays'");
    }

    /**
     * Gets the updateScheduleType property value. Update schedule type for iOS software updates.
     * @return IosSoftwareUpdateScheduleType|null
    */
    public function getUpdateScheduleType(): ?IosSoftwareUpdateScheduleType {
        $val = $this->getBackingStore()->get('updateScheduleType');
        if (is_null($val) || $val instanceof IosSoftwareUpdateScheduleType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateScheduleType'");
    }

    /**
     * Gets the utcTimeOffsetInMinutes property value. UTC Time Offset indicated in minutes
     * @return int|null
    */
    public function getUtcTimeOffsetInMinutes(): ?int {
        $val = $this->getBackingStore()->get('utcTimeOffsetInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'utcTimeOffsetInMinutes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeTimeValue('activeHoursEnd', $this->getActiveHoursEnd());
        $writer->writeTimeValue('activeHoursStart', $this->getActiveHoursStart());
        $writer->writeCollectionOfObjectValues('customUpdateTimeWindows', $this->getCustomUpdateTimeWindows());
        $writer->writeStringValue('desiredOsVersion', $this->getDesiredOsVersion());
        $writer->writeIntegerValue('enforcedSoftwareUpdateDelayInDays', $this->getEnforcedSoftwareUpdateDelayInDays());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfEnumValues('scheduledInstallDays', $this->getScheduledInstallDays());
        $writer->writeEnumValue('updateScheduleType', $this->getUpdateScheduleType());
        $writer->writeIntegerValue('utcTimeOffsetInMinutes', $this->getUtcTimeOffsetInMinutes());
    }

    /**
     * Sets the activeHoursEnd property value. Active Hours End (active hours mean the time window when updates install should not happen)
     * @param Time|null $value Value to set for the activeHoursEnd property.
    */
    public function setActiveHoursEnd(?Time $value): void {
        $this->getBackingStore()->set('activeHoursEnd', $value);
    }

    /**
     * Sets the activeHoursStart property value. Active Hours Start (active hours mean the time window when updates install should not happen)
     * @param Time|null $value Value to set for the activeHoursStart property.
    */
    public function setActiveHoursStart(?Time $value): void {
        $this->getBackingStore()->set('activeHoursStart', $value);
    }

    /**
     * Sets the customUpdateTimeWindows property value. If update schedule type is set to use time window scheduling, custom time windows when updates will be scheduled. This collection can contain a maximum of 20 elements.
     * @param array<CustomUpdateTimeWindow>|null $value Value to set for the customUpdateTimeWindows property.
    */
    public function setCustomUpdateTimeWindows(?array $value): void {
        $this->getBackingStore()->set('customUpdateTimeWindows', $value);
    }

    /**
     * Sets the desiredOsVersion property value. If left unspecified, devices will update to the latest version of the OS.
     * @param string|null $value Value to set for the desiredOsVersion property.
    */
    public function setDesiredOsVersion(?string $value): void {
        $this->getBackingStore()->set('desiredOsVersion', $value);
    }

    /**
     * Sets the enforcedSoftwareUpdateDelayInDays property value. Days before software updates are visible to iOS devices ranging from 0 to 90 inclusive
     * @param int|null $value Value to set for the enforcedSoftwareUpdateDelayInDays property.
    */
    public function setEnforcedSoftwareUpdateDelayInDays(?int $value): void {
        $this->getBackingStore()->set('enforcedSoftwareUpdateDelayInDays', $value);
    }

    /**
     * Sets the isEnabled property value. Is setting enabled in UI
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the scheduledInstallDays property value. Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
     * @param array<DayOfWeek>|null $value Value to set for the scheduledInstallDays property.
    */
    public function setScheduledInstallDays(?array $value): void {
        $this->getBackingStore()->set('scheduledInstallDays', $value);
    }

    /**
     * Sets the updateScheduleType property value. Update schedule type for iOS software updates.
     * @param IosSoftwareUpdateScheduleType|null $value Value to set for the updateScheduleType property.
    */
    public function setUpdateScheduleType(?IosSoftwareUpdateScheduleType $value): void {
        $this->getBackingStore()->set('updateScheduleType', $value);
    }

    /**
     * Sets the utcTimeOffsetInMinutes property value. UTC Time Offset indicated in minutes
     * @param int|null $value Value to set for the utcTimeOffsetInMinutes property.
    */
    public function setUtcTimeOffsetInMinutes(?int $value): void {
        $this->getBackingStore()->set('utcTimeOffsetInMinutes', $value);
    }

}
