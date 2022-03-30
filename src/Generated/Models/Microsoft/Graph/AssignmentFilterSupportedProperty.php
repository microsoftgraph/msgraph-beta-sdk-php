<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentFilterSupportedProperty implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $dataType The data type of the property. */
    private ?string $dataType = null;
    
    /** @var bool|null $isCollection Indicates whether the property is a collection type or not. */
    private ?bool $isCollection = null;
    
    /** @var string|null $name Name of the property. */
    private ?string $name = null;
    
    /** @var string|null $propertyRegexConstraint Regex string to do validation on the property value. */
    private ?string $propertyRegexConstraint = null;
    
    /** @var array<AssignmentFilterOperator>|null $supportedOperators List of all supported operators on this property. */
    private ?array $supportedOperators = null;
    
    /** @var array<string>|null $supportedValues List of all supported values for this propery, empty if everything is supported. */
    private ?array $supportedValues = null;
    
    /**
     * Instantiates a new assignmentFilterSupportedProperty and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterSupportedProperty
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterSupportedProperty {
        return new AssignmentFilterSupportedProperty();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dataType property value. The data type of the property.
     * @return string|null
    */
    public function getDataType(): ?string {
        return $this->dataType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'dataType' => function (self $o, ParseNode $n) { $o->setDataType($n->getStringValue()); },
            'isCollection' => function (self $o, ParseNode $n) { $o->setIsCollection($n->getBooleanValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'propertyRegexConstraint' => function (self $o, ParseNode $n) { $o->setPropertyRegexConstraint($n->getStringValue()); },
            'supportedOperators' => function (self $o, ParseNode $n) { $o->setSupportedOperators($n->getCollectionOfEnumValues(AssignmentFilterOperator::class)); },
            'supportedValues' => function (self $o, ParseNode $n) { $o->setSupportedValues($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the isCollection property value. Indicates whether the property is a collection type or not.
     * @return bool|null
    */
    public function getIsCollection(): ?bool {
        return $this->isCollection;
    }

    /**
     * Gets the name property value. Name of the property.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the propertyRegexConstraint property value. Regex string to do validation on the property value.
     * @return string|null
    */
    public function getPropertyRegexConstraint(): ?string {
        return $this->propertyRegexConstraint;
    }

    /**
     * Gets the supportedOperators property value. List of all supported operators on this property.
     * @return array<AssignmentFilterOperator>|null
    */
    public function getSupportedOperators(): ?array {
        return $this->supportedOperators;
    }

    /**
     * Gets the supportedValues property value. List of all supported values for this propery, empty if everything is supported.
     * @return array<string>|null
    */
    public function getSupportedValues(): ?array {
        return $this->supportedValues;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dataType', $this->dataType);
        $writer->writeBooleanValue('isCollection', $this->isCollection);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('propertyRegexConstraint', $this->propertyRegexConstraint);
        $writer->writeCollectionOfEnumValues('supportedOperators', $this->supportedOperators);
        $writer->writeCollectionOfPrimitiveValues('supportedValues', $this->supportedValues);
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
     * Sets the dataType property value. The data type of the property.
     *  @param string|null $value Value to set for the dataType property.
    */
    public function setDataType(?string $value ): void {
        $this->dataType = $value;
    }

    /**
     * Sets the isCollection property value. Indicates whether the property is a collection type or not.
     *  @param bool|null $value Value to set for the isCollection property.
    */
    public function setIsCollection(?bool $value ): void {
        $this->isCollection = $value;
    }

    /**
     * Sets the name property value. Name of the property.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the propertyRegexConstraint property value. Regex string to do validation on the property value.
     *  @param string|null $value Value to set for the propertyRegexConstraint property.
    */
    public function setPropertyRegexConstraint(?string $value ): void {
        $this->propertyRegexConstraint = $value;
    }

    /**
     * Sets the supportedOperators property value. List of all supported operators on this property.
     *  @param array<AssignmentFilterOperator>|null $value Value to set for the supportedOperators property.
    */
    public function setSupportedOperators(?array $value ): void {
        $this->supportedOperators = $value;
    }

    /**
     * Sets the supportedValues property value. List of all supported values for this propery, empty if everything is supported.
     *  @param array<string>|null $value Value to set for the supportedValues property.
    */
    public function setSupportedValues(?array $value ): void {
        $this->supportedValues = $value;
    }

}
