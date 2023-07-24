<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Time;

/**
 * Custom update time window
*/
class CustomUpdateTimeWindow implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new customUpdateTimeWindow and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomUpdateTimeWindow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomUpdateTimeWindow {
        return new CustomUpdateTimeWindow();
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
     * Gets the endDay property value. The endDay property
     * @return DayOfWeek|null
    */
    public function getEndDay(): ?DayOfWeek {
        $val = $this->getBackingStore()->get('endDay');
        if (is_null($val) || $val instanceof DayOfWeek) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDay'");
    }

    /**
     * Gets the endTime property value. End time of the time window
     * @return Time|null
    */
    public function getEndTime(): ?Time {
        $val = $this->getBackingStore()->get('endTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDay' => fn(ParseNode $n) => $o->setEndDay($n->getEnumValue(DayOfWeek::class)),
            'endTime' => fn(ParseNode $n) => $o->setEndTime($n->getTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startDay' => fn(ParseNode $n) => $o->setStartDay($n->getEnumValue(DayOfWeek::class)),
            'startTime' => fn(ParseNode $n) => $o->setStartTime($n->getTimeValue()),
        ];
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
     * Gets the startDay property value. The startDay property
     * @return DayOfWeek|null
    */
    public function getStartDay(): ?DayOfWeek {
        $val = $this->getBackingStore()->get('startDay');
        if (is_null($val) || $val instanceof DayOfWeek) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDay'");
    }

    /**
     * Gets the startTime property value. Start time of the time window
     * @return Time|null
    */
    public function getStartTime(): ?Time {
        $val = $this->getBackingStore()->get('startTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('endDay', $this->getEndDay());
        $writer->writeTimeValue('endTime', $this->getEndTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('startDay', $this->getStartDay());
        $writer->writeTimeValue('startTime', $this->getStartTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the endDay property value. The endDay property
     * @param DayOfWeek|null $value Value to set for the endDay property.
    */
    public function setEndDay(?DayOfWeek $value): void {
        $this->getBackingStore()->set('endDay', $value);
    }

    /**
     * Sets the endTime property value. End time of the time window
     * @param Time|null $value Value to set for the endTime property.
    */
    public function setEndTime(?Time $value): void {
        $this->getBackingStore()->set('endTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startDay property value. The startDay property
     * @param DayOfWeek|null $value Value to set for the startDay property.
    */
    public function setStartDay(?DayOfWeek $value): void {
        $this->getBackingStore()->set('startDay', $value);
    }

    /**
     * Sets the startTime property value. Start time of the time window
     * @param Time|null $value Value to set for the startTime property.
    */
    public function setStartTime(?Time $value): void {
        $this->getBackingStore()->set('startTime', $value);
    }

}
