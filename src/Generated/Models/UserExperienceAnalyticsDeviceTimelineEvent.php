<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics device event entity contains NRT device event details.
*/
class UserExperienceAnalyticsDeviceTimelineEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsDeviceTimelineEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceTimelineEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceTimelineEvent {
        return new UserExperienceAnalyticsDeviceTimelineEvent();
    }

    /**
     * Gets the deviceId property value. The id of the device where the event occurred.
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
     * Gets the eventDateTime property value. The time the event occured.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * Gets the eventDetails property value. The details provided by the event, format depends on event type.
     * @return string|null
    */
    public function getEventDetails(): ?string {
        $val = $this->getBackingStore()->get('eventDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDetails'");
    }

    /**
     * Gets the eventLevel property value. Indicates device event level. Possible values are: None, Verbose, Information, Warning, Error, Critical
     * @return DeviceEventLevel|null
    */
    public function getEventLevel(): ?DeviceEventLevel {
        $val = $this->getBackingStore()->get('eventLevel');
        if (is_null($val) || $val instanceof DeviceEventLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventLevel'");
    }

    /**
     * Gets the eventName property value. The name of the event. Examples include: BootEvent, LogonEvent, AppCrashEvent, AppHangEvent.
     * @return string|null
    */
    public function getEventName(): ?string {
        $val = $this->getBackingStore()->get('eventName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventName'");
    }

    /**
     * Gets the eventSource property value. The source of the event. Examples include: Intune, Sccm.
     * @return string|null
    */
    public function getEventSource(): ?string {
        $val = $this->getBackingStore()->get('eventSource');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventSource'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'eventDetails' => fn(ParseNode $n) => $o->setEventDetails($n->getStringValue()),
            'eventLevel' => fn(ParseNode $n) => $o->setEventLevel($n->getEnumValue(DeviceEventLevel::class)),
            'eventName' => fn(ParseNode $n) => $o->setEventName($n->getStringValue()),
            'eventSource' => fn(ParseNode $n) => $o->setEventSource($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('eventDetails', $this->getEventDetails());
        $writer->writeEnumValue('eventLevel', $this->getEventLevel());
        $writer->writeStringValue('eventName', $this->getEventName());
        $writer->writeStringValue('eventSource', $this->getEventSource());
    }

    /**
     * Sets the deviceId property value. The id of the device where the event occurred.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the eventDateTime property value. The time the event occured.
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the eventDetails property value. The details provided by the event, format depends on event type.
     * @param string|null $value Value to set for the eventDetails property.
    */
    public function setEventDetails(?string $value): void {
        $this->getBackingStore()->set('eventDetails', $value);
    }

    /**
     * Sets the eventLevel property value. Indicates device event level. Possible values are: None, Verbose, Information, Warning, Error, Critical
     * @param DeviceEventLevel|null $value Value to set for the eventLevel property.
    */
    public function setEventLevel(?DeviceEventLevel $value): void {
        $this->getBackingStore()->set('eventLevel', $value);
    }

    /**
     * Sets the eventName property value. The name of the event. Examples include: BootEvent, LogonEvent, AppCrashEvent, AppHangEvent.
     * @param string|null $value Value to set for the eventName property.
    */
    public function setEventName(?string $value): void {
        $this->getBackingStore()->set('eventName', $value);
    }

    /**
     * Sets the eventSource property value. The source of the event. Examples include: Intune, Sccm.
     * @param string|null $value Value to set for the eventSource property.
    */
    public function setEventSource(?string $value): void {
        $this->getBackingStore()->set('eventSource', $value);
    }

}
