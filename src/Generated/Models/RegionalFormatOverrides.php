<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegionalFormatOverrides implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $calendar The calendar to use, e.g., Gregorian Calendar.Returned by default. */
    private ?string $calendar = null;
    
    /** @var string|null $firstDayOfWeek The first day of the week to use, e.g., Sunday.Returned by default. */
    private ?string $firstDayOfWeek = null;
    
    /** @var string|null $longDateFormat The long date time format to be used for displaying dates.Returned by default. */
    private ?string $longDateFormat = null;
    
    /** @var string|null $longTimeFormat The long time format to be used for displaying time.Returned by default. */
    private ?string $longTimeFormat = null;
    
    /** @var string|null $shortDateFormat The short date time format to be used for displaying dates.Returned by default. */
    private ?string $shortDateFormat = null;
    
    /** @var string|null $shortTimeFormat The short time format to be used for displaying time.Returned by default. */
    private ?string $shortTimeFormat = null;
    
    /** @var string|null $timeZone The timezone to be used for displaying time.Returned by default. */
    private ?string $timeZone = null;
    
    /**
     * Instantiates a new regionalFormatOverrides and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegionalFormatOverrides
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RegionalFormatOverrides {
        return new RegionalFormatOverrides();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the calendar property value. The calendar to use, e.g., Gregorian Calendar.Returned by default.
     * @return string|null
    */
    public function getCalendar(): ?string {
        return $this->calendar;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'calendar' => function (self $o, ParseNode $n) { $o->setCalendar($n->getStringValue()); },
            'firstDayOfWeek' => function (self $o, ParseNode $n) { $o->setFirstDayOfWeek($n->getStringValue()); },
            'longDateFormat' => function (self $o, ParseNode $n) { $o->setLongDateFormat($n->getStringValue()); },
            'longTimeFormat' => function (self $o, ParseNode $n) { $o->setLongTimeFormat($n->getStringValue()); },
            'shortDateFormat' => function (self $o, ParseNode $n) { $o->setShortDateFormat($n->getStringValue()); },
            'shortTimeFormat' => function (self $o, ParseNode $n) { $o->setShortTimeFormat($n->getStringValue()); },
            'timeZone' => function (self $o, ParseNode $n) { $o->setTimeZone($n->getStringValue()); },
        ];
    }

    /**
     * Gets the firstDayOfWeek property value. The first day of the week to use, e.g., Sunday.Returned by default.
     * @return string|null
    */
    public function getFirstDayOfWeek(): ?string {
        return $this->firstDayOfWeek;
    }

    /**
     * Gets the longDateFormat property value. The long date time format to be used for displaying dates.Returned by default.
     * @return string|null
    */
    public function getLongDateFormat(): ?string {
        return $this->longDateFormat;
    }

    /**
     * Gets the longTimeFormat property value. The long time format to be used for displaying time.Returned by default.
     * @return string|null
    */
    public function getLongTimeFormat(): ?string {
        return $this->longTimeFormat;
    }

    /**
     * Gets the shortDateFormat property value. The short date time format to be used for displaying dates.Returned by default.
     * @return string|null
    */
    public function getShortDateFormat(): ?string {
        return $this->shortDateFormat;
    }

    /**
     * Gets the shortTimeFormat property value. The short time format to be used for displaying time.Returned by default.
     * @return string|null
    */
    public function getShortTimeFormat(): ?string {
        return $this->shortTimeFormat;
    }

    /**
     * Gets the timeZone property value. The timezone to be used for displaying time.Returned by default.
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
        $writer->writeStringValue('calendar', $this->calendar);
        $writer->writeStringValue('firstDayOfWeek', $this->firstDayOfWeek);
        $writer->writeStringValue('longDateFormat', $this->longDateFormat);
        $writer->writeStringValue('longTimeFormat', $this->longTimeFormat);
        $writer->writeStringValue('shortDateFormat', $this->shortDateFormat);
        $writer->writeStringValue('shortTimeFormat', $this->shortTimeFormat);
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
     * Sets the calendar property value. The calendar to use, e.g., Gregorian Calendar.Returned by default.
     *  @param string|null $value Value to set for the calendar property.
    */
    public function setCalendar(?string $value ): void {
        $this->calendar = $value;
    }

    /**
     * Sets the firstDayOfWeek property value. The first day of the week to use, e.g., Sunday.Returned by default.
     *  @param string|null $value Value to set for the firstDayOfWeek property.
    */
    public function setFirstDayOfWeek(?string $value ): void {
        $this->firstDayOfWeek = $value;
    }

    /**
     * Sets the longDateFormat property value. The long date time format to be used for displaying dates.Returned by default.
     *  @param string|null $value Value to set for the longDateFormat property.
    */
    public function setLongDateFormat(?string $value ): void {
        $this->longDateFormat = $value;
    }

    /**
     * Sets the longTimeFormat property value. The long time format to be used for displaying time.Returned by default.
     *  @param string|null $value Value to set for the longTimeFormat property.
    */
    public function setLongTimeFormat(?string $value ): void {
        $this->longTimeFormat = $value;
    }

    /**
     * Sets the shortDateFormat property value. The short date time format to be used for displaying dates.Returned by default.
     *  @param string|null $value Value to set for the shortDateFormat property.
    */
    public function setShortDateFormat(?string $value ): void {
        $this->shortDateFormat = $value;
    }

    /**
     * Sets the shortTimeFormat property value. The short time format to be used for displaying time.Returned by default.
     *  @param string|null $value Value to set for the shortTimeFormat property.
    */
    public function setShortTimeFormat(?string $value ): void {
        $this->shortTimeFormat = $value;
    }

    /**
     * Sets the timeZone property value. The timezone to be used for displaying time.Returned by default.
     *  @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value ): void {
        $this->timeZone = $value;
    }

}
