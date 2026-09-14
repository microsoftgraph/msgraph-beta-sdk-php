<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OptionsCustomFieldDefinition extends CustomFieldDefinition implements Parsable 
{
    /**
     * Instantiates a new OptionsCustomFieldDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.optionsCustomFieldDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OptionsCustomFieldDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OptionsCustomFieldDefinition {
        return new OptionsCustomFieldDefinition();
    }

    /**
     * Gets the defaultValues property value. The option value or values selected by default on a new case.
     * @return array<string>|null
    */
    public function getDefaultValues(): ?array {
        $val = $this->getBackingStore()->get('defaultValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultValues'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValues' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefaultValues($val);
            },
            'options' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOptions($val);
            },
        ]);
    }

    /**
     * Gets the options property value. The allowed option values a case author can choose from.
     * @return array<string>|null
    */
    public function getOptions(): ?array {
        $val = $this->getBackingStore()->get('options');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'options'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('defaultValues', $this->getDefaultValues());
        $writer->writeCollectionOfPrimitiveValues('options', $this->getOptions());
    }

    /**
     * Sets the defaultValues property value. The option value or values selected by default on a new case.
     * @param array<string>|null $value Value to set for the defaultValues property.
    */
    public function setDefaultValues(?array $value): void {
        $this->getBackingStore()->set('defaultValues', $value);
    }

    /**
     * Sets the options property value. The allowed option values a case author can choose from.
     * @param array<string>|null $value Value to set for the options property.
    */
    public function setOptions(?array $value): void {
        $this->getBackingStore()->set('options', $value);
    }

}
