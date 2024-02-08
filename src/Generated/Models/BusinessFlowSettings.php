<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BusinessFlowSettings extends AccessReviewSettings implements Parsable 
{
    /**
     * Instantiates a new BusinessFlowSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.businessFlowSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessFlowSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessFlowSettings {
        return new BusinessFlowSettings();
    }

    /**
     * Gets the durationInDays property value. The durationInDays property
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        $val = $this->getBackingStore()->get('durationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationInDays'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'durationInDays' => fn(ParseNode $n) => $o->setDurationInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('durationInDays', $this->getDurationInDays());
    }

    /**
     * Sets the durationInDays property value. The durationInDays property
     * @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value): void {
        $this->getBackingStore()->set('durationInDays', $value);
    }

}
