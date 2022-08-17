<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomAction extends InformationProtectionAction implements Parsable 
{
    /**
     * @var string|null $name Name of the custom action.
    */
    private ?string $name = null;
    
    /**
     * @var array<KeyValuePair>|null $properties Properties, in key-value pair format, of the action.
    */
    private ?array $properties = null;
    
    /**
     * Instantiates a new CustomAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.customAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomAction {
        return new CustomAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'properties' => function (ParseNode $n) use ($o) { $o->setProperties($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the name property value. Name of the custom action.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the properties property value. Properties, in key-value pair format, of the action.
     * @return array<KeyValuePair>|null
    */
    public function getProperties(): ?array {
        return $this->properties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('properties', $this->properties);
    }

    /**
     * Sets the name property value. Name of the custom action.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the properties property value. Properties, in key-value pair format, of the action.
     *  @param array<KeyValuePair>|null $value Value to set for the properties property.
    */
    public function setProperties(?array $value ): void {
        $this->properties = $value;
    }

}
