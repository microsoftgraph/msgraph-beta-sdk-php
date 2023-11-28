<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class UserSignUpMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new userSignUpMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSignUpMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSignUpMetric {
        return new UserSignUpMetric();
    }

    /**
     * Gets the count property value. The total number of users who signed up in the specified period. Supports $filter (eq).
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
     * Gets the factDate property value. The date of the user insight.
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
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
        ]);
    }

    /**
     * Gets the os property value. The device plaform that the customers used. Supports $filter (eq).
     * @return string|null
    */
    public function getOs(): ?string {
        $val = $this->getBackingStore()->get('os');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'os'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('count', $this->getCount());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeStringValue('os', $this->getOs());
    }

    /**
     * Sets the count property value. The total number of users who signed up in the specified period. Supports $filter (eq).
     * @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value): void {
        $this->getBackingStore()->set('count', $value);
    }

    /**
     * Sets the factDate property value. The date of the user insight.
     * @param Date|null $value Value to set for the factDate property.
    */
    public function setFactDate(?Date $value): void {
        $this->getBackingStore()->set('factDate', $value);
    }

    /**
     * Sets the os property value. The device plaform that the customers used. Supports $filter (eq).
     * @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->getBackingStore()->set('os', $value);
    }

}
