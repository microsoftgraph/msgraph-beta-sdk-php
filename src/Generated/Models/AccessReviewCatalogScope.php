<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewCatalogScope extends AccessReviewResourceScope implements Parsable 
{
    /**
     * Instantiates a new AccessReviewCatalogScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewCatalogScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewCatalogScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewCatalogScope {
        return new AccessReviewCatalogScope();
    }

    /**
     * Gets the additionalCatalogResourceTypes property value. The additionalCatalogResourceTypes property
     * @return AccessReviewCatalogResourceType|null
    */
    public function getAdditionalCatalogResourceTypes(): ?AccessReviewCatalogResourceType {
        $val = $this->getBackingStore()->get('additionalCatalogResourceTypes');
        if (is_null($val) || $val instanceof AccessReviewCatalogResourceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalCatalogResourceTypes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalCatalogResourceTypes' => fn(ParseNode $n) => $o->setAdditionalCatalogResourceTypes($n->getEnumValue(AccessReviewCatalogResourceType::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('additionalCatalogResourceTypes', $this->getAdditionalCatalogResourceTypes());
    }

    /**
     * Sets the additionalCatalogResourceTypes property value. The additionalCatalogResourceTypes property
     * @param AccessReviewCatalogResourceType|null $value Value to set for the additionalCatalogResourceTypes property.
    */
    public function setAdditionalCatalogResourceTypes(?AccessReviewCatalogResourceType $value): void {
        $this->getBackingStore()->set('additionalCatalogResourceTypes', $value);
    }

}
