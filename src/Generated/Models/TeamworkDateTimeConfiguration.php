<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class TeamworkDateTimeConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $dateFormat The date format for the device.
    */
    private ?string $dateFormat = null;
    
    /**
     * @var Time|null $officeHoursEndTime The time of the day when the device is turned off.
    */
    private ?Time $officeHoursEndTime = null;
    
    /**
     * @var Time|null $officeHoursStartTime The time of the day when the device is turned on.
    */
    private ?Time $officeHoursStartTime = null;
    
    /**
     * @var string|null $timeFormat The time format for the device.
    */
    private ?string $timeFormat = null;
    
    /**
     * @var string|null $timeZone The time zone to which the office hours apply.
    */
    private ?string $timeZone = null;
    
    /**
     * Instantiates a new teamworkDateTimeConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDateTimeConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDateTimeConfiguration {
        return new TeamworkDateTimeConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dateFormat property value. The date format for the device.
     * @return string|null
    */
    public function getDateFormat(): ?string {
        return $this->dateFormat;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dateFormat' => function (ParseNode $n) use ($o) { $o->setDateFormat($n->getStringValue()); },
            'officeHoursEndTime' => function (ParseNode $n) use ($o) { $o->setOfficeHoursEndTime($n->getTimeValue()); },
            'officeHoursStartTime' => function (ParseNode $n) use ($o) { $o->setOfficeHoursStartTime($n->getTimeValue()); },
            'timeFormat' => function (ParseNode $n) use ($o) { $o->setTimeFormat($n->getStringValue()); },
            'timeZone' => function (ParseNode $n) use ($o) { $o->setTimeZone($n->getStringValue()); },
        ];
    }

    /**
     * Gets the officeHoursEndTime property value. The time of the day when the device is turned off.
     * @return Time|null
    */
    public function getOfficeHoursEndTime(): ?Time {
        return $this->officeHoursEndTime;
    }

    /**
     * Gets the officeHoursStartTime property value. The time of the day when the device is turned on.
     * @return Time|null
    */
    public function getOfficeHoursStartTime(): ?Time {
        return $this->officeHoursStartTime;
    }

    /**
     * Gets the timeFormat property value. The time format for the device.
     * @return string|null
    */
    public function getTimeFormat(): ?string {
        return $this->timeFormat;
    }

    /**
     * Gets the timeZone property value. The time zone to which the office hours apply.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->timeZone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dateFormat', $this->dateFormat);
        $writer->writeTimeValue('officeHoursEndTime', $this->officeHoursEndTime);
        $writer->writeTimeValue('officeHoursStartTime', $this->officeHoursStartTime);
        $writer->writeStringValue('timeFormat', $this->timeFormat);
        $writer->writeStringValue('timeZone', $this->timeZone);
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
     * Sets the dateFormat property value. The date format for the device.
     *  @param string|null $value Value to set for the dateFormat property.
    */
    public function setDateFormat(?string $value ): void {
        $this->dateFormat = $value;
    }

    /**
     * Sets the officeHoursEndTime property value. The time of the day when the device is turned off.
     *  @param Time|null $value Value to set for the officeHoursEndTime property.
    */
    public function setOfficeHoursEndTime(?Time $value ): void {
        $this->officeHoursEndTime = $value;
    }

    /**
     * Sets the officeHoursStartTime property value. The time of the day when the device is turned on.
     *  @param Time|null $value Value to set for the officeHoursStartTime property.
    */
    public function setOfficeHoursStartTime(?Time $value ): void {
        $this->officeHoursStartTime = $value;
    }

    /**
     * Sets the timeFormat property value. The time format for the device.
     *  @param string|null $value Value to set for the timeFormat property.
    */
    public function setTimeFormat(?string $value ): void {
        $this->timeFormat = $value;
    }

    /**
     * Sets the timeZone property value. The time zone to which the office hours apply.
     *  @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value ): void {
        $this->timeZone = $value;
    }

}
