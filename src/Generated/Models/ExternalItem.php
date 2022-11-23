<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new externalItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalItem {
        return new ExternalItem();
    }

    /**
     * Gets the acl property value. The acl property
     * @return array<Acl>|null
    */
    public function getAcl(): ?array {
        return $this->getBackingStore()->get('acl');
    }

    /**
     * Gets the content property value. The content property
     * @return ExternalItemContent|null
    */
    public function getContent(): ?ExternalItemContent {
        return $this->getBackingStore()->get('content');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acl' => fn(ParseNode $n) => $o->setAcl($n->getCollectionOfObjectValues([Acl::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([ExternalItemContent::class, 'createFromDiscriminatorValue'])),
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getObjectValue([Properties::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the properties property value. The properties property
     * @return Properties|null
    */
    public function getProperties(): ?Properties {
        return $this->getBackingStore()->get('properties');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acl', $this->getAcl());
        $writer->writeObjectValue('content', $this->getContent());
        $writer->writeObjectValue('properties', $this->getProperties());
    }

    /**
     * Sets the acl property value. The acl property
     *  @param array<Acl>|null $value Value to set for the acl property.
    */
    public function setAcl(?array $value): void {
        $this->getBackingStore()->set('acl', $value);
    }

    /**
     * Sets the content property value. The content property
     *  @param ExternalItemContent|null $value Value to set for the content property.
    */
    public function setContent(?ExternalItemContent $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the properties property value. The properties property
     *  @param Properties|null $value Value to set for the properties property.
    */
    public function setProperties(?Properties $value): void {
        $this->getBackingStore()->set('properties', $value);
    }

}
