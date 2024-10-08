<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResponseTimeSecurityRequirement extends SecurityRequirement implements Parsable 
{
    /**
     * Instantiates a new ResponseTimeSecurityRequirement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResponseTimeSecurityRequirement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResponseTimeSecurityRequirement {
        return new ResponseTimeSecurityRequirement();
    }

    /**
     * Gets the averageResponseTimeInHours property value. The average response time for alerts from the past 30 days.
     * @return float|null
    */
    public function getAverageResponseTimeInHours(): ?float {
        $val = $this->getBackingStore()->get('averageResponseTimeInHours');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageResponseTimeInHours'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'averageResponseTimeInHours' => fn(ParseNode $n) => $o->setAverageResponseTimeInHours($n->getFloatValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('averageResponseTimeInHours', $this->getAverageResponseTimeInHours());
    }

    /**
     * Sets the averageResponseTimeInHours property value. The average response time for alerts from the past 30 days.
     * @param float|null $value Value to set for the averageResponseTimeInHours property.
    */
    public function setAverageResponseTimeInHours(?float $value): void {
        $this->getBackingStore()->set('averageResponseTimeInHours', $value);
    }

}
