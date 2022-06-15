<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttributeDefinition implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $anchor true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object's attributes must be designated as the anchor to support synchronization.
    */
    private ?bool $anchor = null;
    
    /**
     * @var array<StringKeyStringValuePair>|null $apiExpressions The apiExpressions property
    */
    private ?array $apiExpressions = null;
    
    /**
     * @var bool|null $caseExact true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute.
    */
    private ?bool $caseExact = null;
    
    /**
     * @var string|null $defaultValue The defaultValue property
    */
    private ?string $defaultValue = null;
    
    /**
     * @var bool|null $flowNullValues 'true' to allow null values for attributes.
    */
    private ?bool $flowNullValues = null;
    
    /**
     * @var array<MetadataEntry>|null $metadata Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
    */
    private ?array $metadata = null;
    
    /**
     * @var bool|null $multivalued true if an attribute can have multiple values. Default is false.
    */
    private ?bool $multivalued = null;
    
    /**
     * @var Mutability|null $mutability An attribute's mutability. Possible values are:  ReadWrite, ReadOnly, Immutable, WriteOnly. Default is ReadWrite.
    */
    private ?Mutability $mutability = null;
    
    /**
     * @var string|null $name Name of the attribute. Must be unique within the object definition. Not nullable.
    */
    private ?string $name = null;
    
    /**
     * @var array<ReferencedObject>|null $referencedObjects For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object).
    */
    private ?array $referencedObjects = null;
    
    /**
     * @var bool|null $required true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error.
    */
    private ?bool $required = null;
    
    /**
     * @var AttributeType|null $type Attribute value type. Possible values are: String, Integer, Reference, Binary, Boolean,DateTime. Default is String.
    */
    private ?AttributeType $type = null;
    
    /**
     * Instantiates a new attributeDefinition and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeDefinition {
        return new AttributeDefinition();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the anchor property value. true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object's attributes must be designated as the anchor to support synchronization.
     * @return bool|null
    */
    public function getAnchor(): ?bool {
        return $this->anchor;
    }

    /**
     * Gets the apiExpressions property value. The apiExpressions property
     * @return array<StringKeyStringValuePair>|null
    */
    public function getApiExpressions(): ?array {
        return $this->apiExpressions;
    }

    /**
     * Gets the caseExact property value. true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute.
     * @return bool|null
    */
    public function getCaseExact(): ?bool {
        return $this->caseExact;
    }

    /**
     * Gets the defaultValue property value. The defaultValue property
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'anchor' => function (ParseNode $n) use ($o) { $o->setAnchor($n->getBooleanValue()); },
            'apiExpressions' => function (ParseNode $n) use ($o) { $o->setApiExpressions($n->getCollectionOfObjectValues(array(StringKeyStringValuePair::class, 'createFromDiscriminatorValue'))); },
            'caseExact' => function (ParseNode $n) use ($o) { $o->setCaseExact($n->getBooleanValue()); },
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getStringValue()); },
            'flowNullValues' => function (ParseNode $n) use ($o) { $o->setFlowNullValues($n->getBooleanValue()); },
            'metadata' => function (ParseNode $n) use ($o) { $o->setMetadata($n->getCollectionOfObjectValues(array(MetadataEntry::class, 'createFromDiscriminatorValue'))); },
            'multivalued' => function (ParseNode $n) use ($o) { $o->setMultivalued($n->getBooleanValue()); },
            'mutability' => function (ParseNode $n) use ($o) { $o->setMutability($n->getEnumValue(Mutability::class)); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'referencedObjects' => function (ParseNode $n) use ($o) { $o->setReferencedObjects($n->getCollectionOfObjectValues(array(ReferencedObject::class, 'createFromDiscriminatorValue'))); },
            'required' => function (ParseNode $n) use ($o) { $o->setRequired($n->getBooleanValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(AttributeType::class)); },
        ];
    }

    /**
     * Gets the flowNullValues property value. 'true' to allow null values for attributes.
     * @return bool|null
    */
    public function getFlowNullValues(): ?bool {
        return $this->flowNullValues;
    }

    /**
     * Gets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     * @return array<MetadataEntry>|null
    */
    public function getMetadata(): ?array {
        return $this->metadata;
    }

    /**
     * Gets the multivalued property value. true if an attribute can have multiple values. Default is false.
     * @return bool|null
    */
    public function getMultivalued(): ?bool {
        return $this->multivalued;
    }

    /**
     * Gets the mutability property value. An attribute's mutability. Possible values are:  ReadWrite, ReadOnly, Immutable, WriteOnly. Default is ReadWrite.
     * @return Mutability|null
    */
    public function getMutability(): ?Mutability {
        return $this->mutability;
    }

    /**
     * Gets the name property value. Name of the attribute. Must be unique within the object definition. Not nullable.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the referencedObjects property value. For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object).
     * @return array<ReferencedObject>|null
    */
    public function getReferencedObjects(): ?array {
        return $this->referencedObjects;
    }

    /**
     * Gets the required property value. true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Gets the type property value. Attribute value type. Possible values are: String, Integer, Reference, Binary, Boolean,DateTime. Default is String.
     * @return AttributeType|null
    */
    public function getType(): ?AttributeType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('anchor', $this->anchor);
        $writer->writeCollectionOfObjectValues('apiExpressions', $this->apiExpressions);
        $writer->writeBooleanValue('caseExact', $this->caseExact);
        $writer->writeStringValue('defaultValue', $this->defaultValue);
        $writer->writeBooleanValue('flowNullValues', $this->flowNullValues);
        $writer->writeCollectionOfObjectValues('metadata', $this->metadata);
        $writer->writeBooleanValue('multivalued', $this->multivalued);
        $writer->writeEnumValue('mutability', $this->mutability);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('referencedObjects', $this->referencedObjects);
        $writer->writeBooleanValue('required', $this->required);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the anchor property value. true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object's attributes must be designated as the anchor to support synchronization.
     *  @param bool|null $value Value to set for the anchor property.
    */
    public function setAnchor(?bool $value ): void {
        $this->anchor = $value;
    }

    /**
     * Sets the apiExpressions property value. The apiExpressions property
     *  @param array<StringKeyStringValuePair>|null $value Value to set for the apiExpressions property.
    */
    public function setApiExpressions(?array $value ): void {
        $this->apiExpressions = $value;
    }

    /**
     * Sets the caseExact property value. true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute.
     *  @param bool|null $value Value to set for the caseExact property.
    */
    public function setCaseExact(?bool $value ): void {
        $this->caseExact = $value;
    }

    /**
     * Sets the defaultValue property value. The defaultValue property
     *  @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value ): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the flowNullValues property value. 'true' to allow null values for attributes.
     *  @param bool|null $value Value to set for the flowNullValues property.
    */
    public function setFlowNullValues(?bool $value ): void {
        $this->flowNullValues = $value;
    }

    /**
     * Sets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     *  @param array<MetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value ): void {
        $this->metadata = $value;
    }

    /**
     * Sets the multivalued property value. true if an attribute can have multiple values. Default is false.
     *  @param bool|null $value Value to set for the multivalued property.
    */
    public function setMultivalued(?bool $value ): void {
        $this->multivalued = $value;
    }

    /**
     * Sets the mutability property value. An attribute's mutability. Possible values are:  ReadWrite, ReadOnly, Immutable, WriteOnly. Default is ReadWrite.
     *  @param Mutability|null $value Value to set for the mutability property.
    */
    public function setMutability(?Mutability $value ): void {
        $this->mutability = $value;
    }

    /**
     * Sets the name property value. Name of the attribute. Must be unique within the object definition. Not nullable.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the referencedObjects property value. For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object).
     *  @param array<ReferencedObject>|null $value Value to set for the referencedObjects property.
    */
    public function setReferencedObjects(?array $value ): void {
        $this->referencedObjects = $value;
    }

    /**
     * Sets the required property value. true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error.
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value ): void {
        $this->required = $value;
    }

    /**
     * Sets the type property value. Attribute value type. Possible values are: String, Integer, Reference, Binary, Boolean,DateTime. Default is String.
     *  @param AttributeType|null $value Value to set for the type property.
    */
    public function setType(?AttributeType $value ): void {
        $this->type = $value;
    }

}
