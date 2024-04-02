<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserCountMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserCountMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserCountMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserCountMetric {
        return new UserCountMetric();
    }

    /**
     * Gets the count property value. The total number of users in the tenant over time.
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
     * Gets the factDate property value. The date of the insight.
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
            'languages' => fn(ParseNode $n) => $o->setLanguages($n->getCollectionOfObjectValues([LanguageMetric::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the languages property value. The languages property
     * @return array<LanguageMetric>|null
    */
    public function getLanguages(): ?array {
        $val = $this->getBackingStore()->get('languages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LanguageMetric::class);
            /** @var array<LanguageMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languages'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('count', $this->getCount());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeCollectionOfObjectValues('languages', $this->getLanguages());
    }

    /**
     * Sets the count property value. The total number of users in the tenant over time.
     * @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value): void {
        $this->getBackingStore()->set('count', $value);
    }

    /**
     * Sets the factDate property value. The date of the insight.
     * @param Date|null $value Value to set for the factDate property.
    */
    public function setFactDate(?Date $value): void {
        $this->getBackingStore()->set('factDate', $value);
    }

    /**
     * Sets the languages property value. The languages property
     * @param array<LanguageMetric>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value): void {
        $this->getBackingStore()->set('languages', $value);
    }

}
