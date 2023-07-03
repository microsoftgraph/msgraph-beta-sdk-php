<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RegionalFormatOverrides implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new regionalFormatOverrides and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegionalFormatOverrides
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegionalFormatOverrides {
        return new RegionalFormatOverrides();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the calendar property value. The calendar to use, e.g., Gregorian Calendar.Returned by default.
     * @return string|null
    */
    public function getCalendar(): ?string {
        $val = $this->getBackingStore()->get('calendar');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendar'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calendar' => fn(ParseNode $n) => $o->setCalendar($n->getStringValue()),
            'firstDayOfWeek' => fn(ParseNode $n) => $o->setFirstDayOfWeek($n->getStringValue()),
            'longDateFormat' => fn(ParseNode $n) => $o->setLongDateFormat($n->getStringValue()),
            'longTimeFormat' => fn(ParseNode $n) => $o->setLongTimeFormat($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'shortDateFormat' => fn(ParseNode $n) => $o->setShortDateFormat($n->getStringValue()),
            'shortTimeFormat' => fn(ParseNode $n) => $o->setShortTimeFormat($n->getStringValue()),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getStringValue()),
        ];
    }

    /**
     * Gets the firstDayOfWeek property value. The first day of the week to use, e.g., Sunday.Returned by default.
     * @return string|null
    */
    public function getFirstDayOfWeek(): ?string {
        $val = $this->getBackingStore()->get('firstDayOfWeek');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstDayOfWeek'");
    }

    /**
     * Gets the longDateFormat property value. The long date time format to be used for displaying dates.Returned by default.
     * @return string|null
    */
    public function getLongDateFormat(): ?string {
        $val = $this->getBackingStore()->get('longDateFormat');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'longDateFormat'");
    }

    /**
     * Gets the longTimeFormat property value. The long time format to be used for displaying time.Returned by default.
     * @return string|null
    */
    public function getLongTimeFormat(): ?string {
        $val = $this->getBackingStore()->get('longTimeFormat');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'longTimeFormat'");
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
     * Gets the shortDateFormat property value. The short date time format to be used for displaying dates.Returned by default.
     * @return string|null
    */
    public function getShortDateFormat(): ?string {
        $val = $this->getBackingStore()->get('shortDateFormat');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shortDateFormat'");
    }

    /**
     * Gets the shortTimeFormat property value. The short time format to be used for displaying time.Returned by default.
     * @return string|null
    */
    public function getShortTimeFormat(): ?string {
        $val = $this->getBackingStore()->get('shortTimeFormat');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shortTimeFormat'");
    }

    /**
     * Gets the timeZone property value. The timezone to be used for displaying time.Returned by default.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        $val = $this->getBackingStore()->get('timeZone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeZone'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('calendar', $this->getCalendar());
        $writer->writeStringValue('firstDayOfWeek', $this->getFirstDayOfWeek());
        $writer->writeStringValue('longDateFormat', $this->getLongDateFormat());
        $writer->writeStringValue('longTimeFormat', $this->getLongTimeFormat());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('shortDateFormat', $this->getShortDateFormat());
        $writer->writeStringValue('shortTimeFormat', $this->getShortTimeFormat());
        $writer->writeStringValue('timeZone', $this->getTimeZone());
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
     * Sets the calendar property value. The calendar to use, e.g., Gregorian Calendar.Returned by default.
     * @param string|null $value Value to set for the calendar property.
    */
    public function setCalendar(?string $value): void {
        $this->getBackingStore()->set('calendar', $value);
    }

    /**
     * Sets the firstDayOfWeek property value. The first day of the week to use, e.g., Sunday.Returned by default.
     * @param string|null $value Value to set for the firstDayOfWeek property.
    */
    public function setFirstDayOfWeek(?string $value): void {
        $this->getBackingStore()->set('firstDayOfWeek', $value);
    }

    /**
     * Sets the longDateFormat property value. The long date time format to be used for displaying dates.Returned by default.
     * @param string|null $value Value to set for the longDateFormat property.
    */
    public function setLongDateFormat(?string $value): void {
        $this->getBackingStore()->set('longDateFormat', $value);
    }

    /**
     * Sets the longTimeFormat property value. The long time format to be used for displaying time.Returned by default.
     * @param string|null $value Value to set for the longTimeFormat property.
    */
    public function setLongTimeFormat(?string $value): void {
        $this->getBackingStore()->set('longTimeFormat', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the shortDateFormat property value. The short date time format to be used for displaying dates.Returned by default.
     * @param string|null $value Value to set for the shortDateFormat property.
    */
    public function setShortDateFormat(?string $value): void {
        $this->getBackingStore()->set('shortDateFormat', $value);
    }

    /**
     * Sets the shortTimeFormat property value. The short time format to be used for displaying time.Returned by default.
     * @param string|null $value Value to set for the shortTimeFormat property.
    */
    public function setShortTimeFormat(?string $value): void {
        $this->getBackingStore()->set('shortTimeFormat', $value);
    }

    /**
     * Sets the timeZone property value. The timezone to be used for displaying time.Returned by default.
     * @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value): void {
        $this->getBackingStore()->set('timeZone', $value);
    }

}
