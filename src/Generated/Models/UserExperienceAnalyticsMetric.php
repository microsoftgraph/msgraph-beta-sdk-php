<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics metric contains the score and units of a metric of a user experience anlaytics category.
*/
class UserExperienceAnalyticsMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsMetric {
        return new UserExperienceAnalyticsMetric();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the unit property value. The unit of the user experience analytics metric.
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->getBackingStore()->get('unit');
    }

    /**
     * Gets the value property value. The value of the user experience analytics metric.
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeFloatValue('value', $this->getValue());
    }

    /**
     * Sets the unit property value. The unit of the user experience analytics metric.
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->getBackingStore()->set('unit', $value);
    }

    /**
     * Sets the value property value. The value of the user experience analytics metric.
     * @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
