<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class UserRequestsMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserRequestsMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRequestsMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRequestsMetric {
        return new UserRequestsMetric();
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
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'requestCount' => fn(ParseNode $n) => $o->setRequestCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the requestCount property value. Number of requests to the tenant. Supports $filter (eq).
     * @return int|null
    */
    public function getRequestCount(): ?int {
        $val = $this->getBackingStore()->get('requestCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeIntegerValue('requestCount', $this->getRequestCount());
    }

    /**
     * Sets the factDate property value. The date of the user insight.
     * @param Date|null $value Value to set for the factDate property.
    */
    public function setFactDate(?Date $value): void {
        $this->getBackingStore()->set('factDate', $value);
    }

    /**
     * Sets the requestCount property value. Number of requests to the tenant. Supports $filter (eq).
     * @param int|null $value Value to set for the requestCount property.
    */
    public function setRequestCount(?int $value): void {
        $this->getBackingStore()->set('requestCount', $value);
    }

}
