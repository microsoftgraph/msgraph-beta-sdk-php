<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InactivityRule extends LifecyclePolicyRule implements Parsable 
{
    /**
     * Instantiates a new InactivityRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.inactivityRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InactivityRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InactivityRule {
        return new InactivityRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastActivityThresholdInDays' => fn(ParseNode $n) => $o->setLastActivityThresholdInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastActivityThresholdInDays property value. The lastActivityThresholdInDays property
     * @return int|null
    */
    public function getLastActivityThresholdInDays(): ?int {
        $val = $this->getBackingStore()->get('lastActivityThresholdInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActivityThresholdInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('lastActivityThresholdInDays', $this->getLastActivityThresholdInDays());
    }

    /**
     * Sets the lastActivityThresholdInDays property value. The lastActivityThresholdInDays property
     * @param int|null $value Value to set for the lastActivityThresholdInDays property.
    */
    public function setLastActivityThresholdInDays(?int $value): void {
        $this->getBackingStore()->set('lastActivityThresholdInDays', $value);
    }

}
