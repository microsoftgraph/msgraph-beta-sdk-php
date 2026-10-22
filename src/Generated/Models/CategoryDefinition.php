<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CategoryDefinition extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new CategoryDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CategoryDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CategoryDefinition {
        return new CategoryDefinition();
    }

    /**
     * Gets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @return CategoryDefinitionCapability|null
    */
    public function getCapabilities(): ?CategoryDefinitionCapability {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_null($val) || $val instanceof CategoryDefinitionCapability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
    }

    /**
     * Gets the displayName property value. Name of the category.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @return ExtensionFieldCollection|null
    */
    public function getExtensions(): ?ExtensionFieldCollection {
        $val = $this->getBackingStore()->get('extensions');
        if (is_null($val) || $val instanceof ExtensionFieldCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([CategoryDefinitionCapability::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getObjectValue([ExtensionFieldCollection::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('extensions', $this->getExtensions());
    }

    /**
     * Sets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @param CategoryDefinitionCapability|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?CategoryDefinitionCapability $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the displayName property value. Name of the category.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @param ExtensionFieldCollection|null $value Value to set for the extensions property.
    */
    public function setExtensions(?ExtensionFieldCollection $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

}
