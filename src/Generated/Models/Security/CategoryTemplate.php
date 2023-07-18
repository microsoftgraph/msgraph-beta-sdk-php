<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CategoryTemplate extends FilePlanDescriptorTemplate implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new categoryTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CategoryTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CategoryTemplate {
        return new CategoryTemplate();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'subCategories' => fn(ParseNode $n) => $o->setSubCategories($n->getCollectionOfObjectValues([SubCategoryTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the subCategories property value. Represents all subcategories under a particular category.
     * @return array<SubCategoryTemplate>|null
    */
    public function getSubCategories(): ?array {
        $val = $this->getBackingStore()->get('subCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubCategoryTemplate::class);
            /** @var array<SubCategoryTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subCategories'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('subCategories', $this->getSubCategories());
    }

    /**
     * Sets the subCategories property value. Represents all subcategories under a particular category.
     * @param array<SubCategoryTemplate>|null $value Value to set for the subCategories property.
    */
    public function setSubCategories(?array $value): void {
        $this->getBackingStore()->set('subCategories', $value);
    }

}
