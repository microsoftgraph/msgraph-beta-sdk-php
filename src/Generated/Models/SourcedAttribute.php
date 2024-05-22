<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SourcedAttribute extends CustomClaimAttributeBase implements Parsable 
{
    /**
     * Instantiates a new SourcedAttribute and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sourcedAttribute');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SourcedAttribute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SourcedAttribute {
        return new SourcedAttribute();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isExtensionAttribute' => fn(ParseNode $n) => $o->setIsExtensionAttribute($n->getBooleanValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
        ]);
    }

    /**
     * Gets the id property value. The identifier of the attribute on the specified source.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the isExtensionAttribute property value. A flag that indicates if the name specified is that of an extension attribute.
     * @return bool|null
    */
    public function getIsExtensionAttribute(): ?bool {
        $val = $this->getBackingStore()->get('isExtensionAttribute');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExtensionAttribute'");
    }

    /**
     * Gets the source property value. The source where the claim is going to retrieve its value. Valid sources include user, application, resource, audience and company.
     * @return string|null
    */
    public function getSource(): ?string {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isExtensionAttribute', $this->getIsExtensionAttribute());
        $writer->writeStringValue('source', $this->getSource());
    }

    /**
     * Sets the id property value. The identifier of the attribute on the specified source.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the isExtensionAttribute property value. A flag that indicates if the name specified is that of an extension attribute.
     * @param bool|null $value Value to set for the isExtensionAttribute property.
    */
    public function setIsExtensionAttribute(?bool $value): void {
        $this->getBackingStore()->set('isExtensionAttribute', $value);
    }

    /**
     * Sets the source property value. The source where the claim is going to retrieve its value. Valid sources include user, application, resource, audience and company.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->getBackingStore()->set('source', $value);
    }

}
