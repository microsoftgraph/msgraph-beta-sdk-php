<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppliedCategory extends FilePlanDescriptorBase implements Parsable 
{
    /**
     * Instantiates a new AppliedCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppliedCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppliedCategory {
        return new AppliedCategory();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'subCategory' => fn(ParseNode $n) => $o->setSubCategory($n->getObjectValue([SubCategory::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the subCategory property value. Represents the file plan descriptor for a subcategory under a specific category, which has been assigned to a particular retention label.
     * @return SubCategory|null
    */
    public function getSubCategory(): ?SubCategory {
        $val = $this->getBackingStore()->get('subCategory');
        if (is_null($val) || $val instanceof SubCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subCategory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('subCategory', $this->getSubCategory());
    }

    /**
     * Sets the subCategory property value. Represents the file plan descriptor for a subcategory under a specific category, which has been assigned to a particular retention label.
     * @param SubCategory|null $value Value to set for the subCategory property.
    */
    public function setSubCategory(?SubCategory $value): void {
        $this->getBackingStore()->set('subCategory', $value);
    }

}
