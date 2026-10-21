<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\Time;

class DateWithOptionalTime implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DateWithOptionalTime and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DateWithOptionalTime
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DateWithOptionalTime {
        return new DateWithOptionalTime();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the date property value. The date component of the value.
     * @return Date|null
    */
    public function getDate(): ?Date {
        $val = $this->getBackingStore()->get('date');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'date'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'date' => fn(ParseNode $n) => $o->setDate($n->getDateValue()),
            'isTimeSpecified' => fn(ParseNode $n) => $o->setIsTimeSpecified($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'time' => fn(ParseNode $n) => $o->setTime($n->getTimeValue()),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getStringValue()),
        ];
    }

    /**
     * Gets the isTimeSpecified property value. Indicates whether a specific time (not just a date) was provided.
     * @return bool|null
    */
    public function getIsTimeSpecified(): ?bool {
        $val = $this->getBackingStore()->get('isTimeSpecified');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTimeSpecified'");
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
     * Gets the time property value. The optional time-of-day component of the value.
     * @return Time|null
    */
    public function getTime(): ?Time {
        $val = $this->getBackingStore()->get('time');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'time'");
    }

    /**
     * Gets the timeZone property value. Time zone the time value is expressed in, if time is set.
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
        $writer->writeDateValue('date', $this->getDate());
        $writer->writeBooleanValue('isTimeSpecified', $this->getIsTimeSpecified());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeTimeValue('time', $this->getTime());
        $writer->writeStringValue('timeZone', $this->getTimeZone());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the date property value. The date component of the value.
     * @param Date|null $value Value to set for the date property.
    */
    public function setDate(?Date $value): void {
        $this->getBackingStore()->set('date', $value);
    }

    /**
     * Sets the isTimeSpecified property value. Indicates whether a specific time (not just a date) was provided.
     * @param bool|null $value Value to set for the isTimeSpecified property.
    */
    public function setIsTimeSpecified(?bool $value): void {
        $this->getBackingStore()->set('isTimeSpecified', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the time property value. The optional time-of-day component of the value.
     * @param Time|null $value Value to set for the time property.
    */
    public function setTime(?Time $value): void {
        $this->getBackingStore()->set('time', $value);
    }

    /**
     * Sets the timeZone property value. Time zone the time value is expressed in, if time is set.
     * @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value): void {
        $this->getBackingStore()->set('timeZone', $value);
    }

}
