<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Time;

class TeamworkDateTimeConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeamworkDateTimeConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the dateFormat property value. The date format for the device.
     * @return string|null
    */
    public function getDateFormat(): ?string {
        $val = $this->getBackingStore()->get('dateFormat');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dateFormat'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dateFormat' => fn(ParseNode $n) => $o->setDateFormat($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'officeHoursEndTime' => fn(ParseNode $n) => $o->setOfficeHoursEndTime($n->getTimeValue()),
            'officeHoursStartTime' => fn(ParseNode $n) => $o->setOfficeHoursStartTime($n->getTimeValue()),
            'timeFormat' => fn(ParseNode $n) => $o->setTimeFormat($n->getStringValue()),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getStringValue()),
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
     * Gets the officeHoursEndTime property value. The time of the day when the device is turned off.
     * @return Time|null
    */
    public function getOfficeHoursEndTime(): ?Time {
        $val = $this->getBackingStore()->get('officeHoursEndTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'officeHoursEndTime'");
    }

    /**
     * Gets the officeHoursStartTime property value. The time of the day when the device is turned on.
     * @return Time|null
    */
    public function getOfficeHoursStartTime(): ?Time {
        $val = $this->getBackingStore()->get('officeHoursStartTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'officeHoursStartTime'");
    }

    /**
     * Gets the timeFormat property value. The time format for the device.
     * @return string|null
    */
    public function getTimeFormat(): ?string {
        $val = $this->getBackingStore()->get('timeFormat');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeFormat'");
    }

    /**
     * Gets the timeZone property value. The time zone to which the office hours apply.
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
        $writer->writeStringValue('dateFormat', $this->getDateFormat());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeTimeValue('officeHoursEndTime', $this->getOfficeHoursEndTime());
        $writer->writeTimeValue('officeHoursStartTime', $this->getOfficeHoursStartTime());
        $writer->writeStringValue('timeFormat', $this->getTimeFormat());
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
     * Sets the dateFormat property value. The date format for the device.
     * @param string|null $value Value to set for the dateFormat property.
    */
    public function setDateFormat(?string $value): void {
        $this->getBackingStore()->set('dateFormat', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the officeHoursEndTime property value. The time of the day when the device is turned off.
     * @param Time|null $value Value to set for the officeHoursEndTime property.
    */
    public function setOfficeHoursEndTime(?Time $value): void {
        $this->getBackingStore()->set('officeHoursEndTime', $value);
    }

    /**
     * Sets the officeHoursStartTime property value. The time of the day when the device is turned on.
     * @param Time|null $value Value to set for the officeHoursStartTime property.
    */
    public function setOfficeHoursStartTime(?Time $value): void {
        $this->getBackingStore()->set('officeHoursStartTime', $value);
    }

    /**
     * Sets the timeFormat property value. The time format for the device.
     * @param string|null $value Value to set for the timeFormat property.
    */
    public function setTimeFormat(?string $value): void {
        $this->getBackingStore()->set('timeFormat', $value);
    }

    /**
     * Sets the timeZone property value. The time zone to which the office hours apply.
     * @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value): void {
        $this->getBackingStore()->set('timeZone', $value);
    }

}
