<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SlaPolicyCriteriaBlock extends SlaPolicyConditionBase implements Parsable 
{
    /**
     * Instantiates a new SlaPolicyCriteriaBlock and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.slaPolicyCriteriaBlock');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SlaPolicyCriteriaBlock
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SlaPolicyCriteriaBlock {
        return new SlaPolicyCriteriaBlock();
    }

    /**
     * Gets the conditions property value. The leaf conditions or nested groups evaluated by this block. The maximum nesting depth is two.
     * @return array<SlaPolicyConditionBase>|null
    */
    public function getConditions(): ?array {
        $val = $this->getBackingStore()->get('conditions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SlaPolicyConditionBase::class);
            /** @var array<SlaPolicyConditionBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conditions' => fn(ParseNode $n) => $o->setConditions($n->getCollectionOfObjectValues([SlaPolicyConditionBase::class, 'createFromDiscriminatorValue'])),
            'logicalOperator' => fn(ParseNode $n) => $o->setLogicalOperator($n->getEnumValue(SlaPolicyLogicalOperator::class)),
        ]);
    }

    /**
     * Gets the logicalOperator property value. The logicalOperator property
     * @return SlaPolicyLogicalOperator|null
    */
    public function getLogicalOperator(): ?SlaPolicyLogicalOperator {
        $val = $this->getBackingStore()->get('logicalOperator');
        if (is_null($val) || $val instanceof SlaPolicyLogicalOperator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logicalOperator'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('conditions', $this->getConditions());
        $writer->writeEnumValue('logicalOperator', $this->getLogicalOperator());
    }

    /**
     * Sets the conditions property value. The leaf conditions or nested groups evaluated by this block. The maximum nesting depth is two.
     * @param array<SlaPolicyConditionBase>|null $value Value to set for the conditions property.
    */
    public function setConditions(?array $value): void {
        $this->getBackingStore()->set('conditions', $value);
    }

    /**
     * Sets the logicalOperator property value. The logicalOperator property
     * @param SlaPolicyLogicalOperator|null $value Value to set for the logicalOperator property.
    */
    public function setLogicalOperator(?SlaPolicyLogicalOperator $value): void {
        $this->getBackingStore()->set('logicalOperator', $value);
    }

}
