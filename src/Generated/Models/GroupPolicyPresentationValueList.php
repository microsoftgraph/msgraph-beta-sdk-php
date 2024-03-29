<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The entity represents a collection of name/value pairs of a list box presentation on a policy definition.
*/
class GroupPolicyPresentationValueList extends GroupPolicyPresentationValue implements Parsable 
{
    /**
     * Instantiates a new GroupPolicyPresentationValueList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationValueList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationValueList {
        return new GroupPolicyPresentationValueList();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'values' => fn(ParseNode $n) => $o->setValues($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the values property value. A list of pairs for the associated presentation.
     * @return array<KeyValuePair>|null
    */
    public function getValues(): ?array {
        $val = $this->getBackingStore()->get('values');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
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
        $writer->writeCollectionOfObjectValues('values', $this->getValues());
    }

    /**
     * Sets the values property value. A list of pairs for the associated presentation.
     * @param array<KeyValuePair>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
