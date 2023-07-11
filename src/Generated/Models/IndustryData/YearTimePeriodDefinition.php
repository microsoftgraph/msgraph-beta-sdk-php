<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class YearTimePeriodDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new yearTimePeriodDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return YearTimePeriodDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): YearTimePeriodDefinition {
        return new YearTimePeriodDefinition();
    }

    /**
     * Gets the displayName property value. The name of the year. Maximum supported length is 100 characters.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the endDate property value. The last day of the year using ISO 8601 format for date.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        $val = $this->getBackingStore()->get('endDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getDateValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'year' => fn(ParseNode $n) => $o->setYear($n->getObjectValue([YearReferenceValue::class, 'createFromDiscriminatorValue'])),
        ]);
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
     * Gets the startDate property value. The first day of the year using ISO 8601 format for date.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        $val = $this->getBackingStore()->get('startDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Gets the year property value. The year property
     * @return YearReferenceValue|null
    */
    public function getYear(): ?YearReferenceValue {
        $val = $this->getBackingStore()->get('year');
        if (is_null($val) || $val instanceof YearReferenceValue) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'year'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateValue('endDate', $this->getEndDate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateValue('startDate', $this->getStartDate());
        $writer->writeObjectValue('year', $this->getYear());
    }

    /**
     * Sets the displayName property value. The name of the year. Maximum supported length is 100 characters.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDate property value. The last day of the year using ISO 8601 format for date.
     * @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startDate property value. The first day of the year using ISO 8601 format for date.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the year property value. The year property
     * @param YearReferenceValue|null $value Value to set for the year property.
    */
    public function setYear(?YearReferenceValue $value): void {
        $this->getBackingStore()->set('year', $value);
    }

}
