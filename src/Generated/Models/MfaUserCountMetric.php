<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class MfaUserCountMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new MfaUserCountMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MfaUserCountMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MfaUserCountMetric {
        return new MfaUserCountMetric();
    }

    /**
     * Gets the count property value. The count property
     * @return int|null
    */
    public function getCount(): ?int {
        $val = $this->getBackingStore()->get('count');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'count'");
    }

    /**
     * Gets the factDate property value. The factDate property
     * @return Date|null
    */
    public function getFactDate(): ?Date {
        $val = $this->getBackingStore()->get('factDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'factDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'count' => fn(ParseNode $n) => $o->setCount($n->getIntegerValue()),
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'mfaType' => fn(ParseNode $n) => $o->setMfaType($n->getEnumValue(MfaType::class)),
        ]);
    }

    /**
     * Gets the mfaType property value. The mfaType property
     * @return MfaType|null
    */
    public function getMfaType(): ?MfaType {
        $val = $this->getBackingStore()->get('mfaType');
        if (is_null($val) || $val instanceof MfaType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('count', $this->getCount());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeEnumValue('mfaType', $this->getMfaType());
    }

    /**
     * Sets the count property value. The count property
     * @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value): void {
        $this->getBackingStore()->set('count', $value);
    }

    /**
     * Sets the factDate property value. The factDate property
     * @param Date|null $value Value to set for the factDate property.
    */
    public function setFactDate(?Date $value): void {
        $this->getBackingStore()->set('factDate', $value);
    }

    /**
     * Sets the mfaType property value. The mfaType property
     * @param MfaType|null $value Value to set for the mfaType property.
    */
    public function setMfaType(?MfaType $value): void {
        $this->getBackingStore()->set('mfaType', $value);
    }

}
