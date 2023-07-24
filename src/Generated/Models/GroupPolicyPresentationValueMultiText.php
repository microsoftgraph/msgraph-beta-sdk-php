<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The entity represents a string value of a multi-line text box presentation on a policy definition.
*/
class GroupPolicyPresentationValueMultiText extends GroupPolicyPresentationValue implements Parsable 
{
    /**
     * Instantiates a new groupPolicyPresentationValueMultiText and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationValueMultiText
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationValueMultiText {
        return new GroupPolicyPresentationValueMultiText();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
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
     * Gets the values property value. A collection of non-empty strings for the associated presentation.
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
        $writer->writeCollectionOfPrimitiveValues('values', $this->getValues());
    }

    /**
     * Sets the values property value. A collection of non-empty strings for the associated presentation.
     * @param array<string>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
