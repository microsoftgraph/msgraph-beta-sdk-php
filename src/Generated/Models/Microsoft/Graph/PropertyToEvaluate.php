<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PropertyToEvaluate implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $propertyName Provides the property name. */
    private ?string $propertyName = null;
    
    /** @var string|null $propertyValue Provides the property value. */
    private ?string $propertyValue = null;
    
    /**
     * Instantiates a new propertyToEvaluate and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PropertyToEvaluate
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PropertyToEvaluate {
        return new PropertyToEvaluate();
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
            'propertyName' => function (self $o, ParseNode $n) { $o->setPropertyName($n->getStringValue()); },
            'propertyValue' => function (self $o, ParseNode $n) { $o->setPropertyValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the propertyName property value. Provides the property name.
     * @return string|null
    */
    public function getPropertyName(): ?string {
        return $this->propertyName;
    }

    /**
     * Gets the propertyValue property value. Provides the property value.
     * @return string|null
    */
    public function getPropertyValue(): ?string {
        return $this->propertyValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('propertyName', $this->propertyName);
        $writer->writeStringValue('propertyValue', $this->propertyValue);
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
     * Sets the propertyName property value. Provides the property name.
     *  @param string|null $value Value to set for the propertyName property.
    */
    public function setPropertyName(?string $value ): void {
        $this->propertyName = $value;
    }

    /**
     * Sets the propertyValue property value. Provides the property value.
     *  @param string|null $value Value to set for the propertyValue property.
    */
    public function setPropertyValue(?string $value ): void {
        $this->propertyValue = $value;
    }

}
