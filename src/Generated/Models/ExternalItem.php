<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('acl');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Acl::class);
            /** @var array<Acl>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acl'");
    }

    /**
     * Gets the content property value. The content property
     * @return ExternalItemContent|null
    */
    public function getContent(): ?ExternalItemContent {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof ExternalItemContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acl' => fn(ParseNode $n) => $o->setAcl($n->getCollectionOfObjectValues([Acl::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([ExternalItemContent::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getObjectValue([Properties::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the properties property value. The properties property
     * @return Properties|null
    */
    public function getProperties(): ?Properties {
        $val = $this->getBackingStore()->get('properties');
        if (is_null($val) || $val instanceof Properties) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'properties'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acl', $this->getAcl());
        $writer->writeObjectValue('content', $this->getContent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('properties', $this->getProperties());
    }

    /**
     * Sets the acl property value. The acl property
     * @param array<Acl>|null $value Value to set for the acl property.
    */
    public function setAcl(?array $value): void {
        $this->getBackingStore()->set('acl', $value);
    }

    /**
     * Sets the content property value. The content property
     * @param ExternalItemContent|null $value Value to set for the content property.
    */
    public function setContent(?ExternalItemContent $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the properties property value. The properties property
     * @param Properties|null $value Value to set for the properties property.
    */
    public function setProperties(?Properties $value): void {
        $this->getBackingStore()->set('properties', $value);
    }

}
