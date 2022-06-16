<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReferencedObject implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $referencedObjectName Name of the referenced object. Must match one of the objects in the directory definition. */
    private ?string $referencedObjectName = null;
    
    /** @var string|null $referencedProperty Currently not supported. Name of the property in the referenced object, the value for which is used as the reference. */
    private ?string $referencedProperty = null;
    
    /**
     * Instantiates a new referencedObject and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReferencedObject
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ReferencedObject {
        return new ReferencedObject();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'referencedObjectName' => function (self $o, ParseNode $n) { $o->setReferencedObjectName($n->getStringValue()); },
            'referencedProperty' => function (self $o, ParseNode $n) { $o->setReferencedProperty($n->getStringValue()); },
        ];
    }

    /**
     * Gets the referencedObjectName property value. Name of the referenced object. Must match one of the objects in the directory definition.
     * @return string|null
    */
    public function getReferencedObjectName(): ?string {
        return $this->referencedObjectName;
    }

    /**
     * Gets the referencedProperty property value. Currently not supported. Name of the property in the referenced object, the value for which is used as the reference.
     * @return string|null
    */
    public function getReferencedProperty(): ?string {
        return $this->referencedProperty;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('referencedObjectName', $this->referencedObjectName);
        $writer->writeStringValue('referencedProperty', $this->referencedProperty);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the referencedObjectName property value. Name of the referenced object. Must match one of the objects in the directory definition.
     *  @param string|null $value Value to set for the referencedObjectName property.
    */
    public function setReferencedObjectName(?string $value ): void {
        $this->referencedObjectName = $value;
    }

    /**
     * Sets the referencedProperty property value. Currently not supported. Name of the property in the referenced object, the value for which is used as the reference.
     *  @param string|null $value Value to set for the referencedProperty property.
    */
    public function setReferencedProperty(?string $value ): void {
        $this->referencedProperty = $value;
    }

}
