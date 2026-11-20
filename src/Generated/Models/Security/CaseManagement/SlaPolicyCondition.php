<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SlaPolicyCondition extends SlaPolicyConditionBase implements Parsable 
{
    /**
     * Instantiates a new SlaPolicyCondition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.slaPolicyCondition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SlaPolicyCondition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SlaPolicyCondition {
        return new SlaPolicyCondition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(SlaPolicyConditionOperator::class)),
            'property' => fn(ParseNode $n) => $o->setProperty($n->getStringValue()),
            'values' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setValues($val);
            },
        ]);
    }

    /**
     * Gets the operator property value. The operator property
     * @return SlaPolicyConditionOperator|null
    */
    public function getOperator(): ?SlaPolicyConditionOperator {
        $val = $this->getBackingStore()->get('operator');
        if (is_null($val) || $val instanceof SlaPolicyConditionOperator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operator'");
    }

    /**
     * Gets the property property value. The name of the case property to evaluate, such as priority.
     * @return string|null
    */
    public function getProperty(): ?string {
        $val = $this->getBackingStore()->get('property');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'property'");
    }

    /**
     * Gets the values property value. The comparison values for the condition.
     * @return array<string>|null
    */
    public function getValues(): ?array {
        $val = $this->getBackingStore()->get('values');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'values'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('operator', $this->getOperator());
        $writer->writeStringValue('property', $this->getProperty());
        $writer->writeCollectionOfPrimitiveValues('values', $this->getValues());
    }

    /**
     * Sets the operator property value. The operator property
     * @param SlaPolicyConditionOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?SlaPolicyConditionOperator $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the property property value. The name of the case property to evaluate, such as priority.
     * @param string|null $value Value to set for the property property.
    */
    public function setProperty(?string $value): void {
        $this->getBackingStore()->set('property', $value);
    }

    /**
     * Sets the values property value. The comparison values for the condition.
     * @param array<string>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
