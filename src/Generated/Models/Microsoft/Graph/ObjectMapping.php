<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ObjectMapping implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<AttributeMapping>|null $attributeMappings Attribute mappings define which attributes to map from the source object into the target object and how they should flow. A number of functions are available to support the transformation of the original source values. */
    private ?array $attributeMappings = null;
    
    /** @var bool|null $enabled When true, this object mapping will be processed during synchronization. When false, this object mapping will be skipped. */
    private ?bool $enabled = null;
    
    /** @var ObjectFlowTypes|null $flowTypes Which flow types are enabled for this object mapping. Add creates new objects in the target directory, Update modifies existing objects, and Delete deprovisions existing users. The default is Add, Update, Delete. */
    private ?ObjectFlowTypes $flowTypes = null;
    
    /** @var array<MetadataEntry>|null $metadata Additional extension properties. Unless mentioned explicitly, metadata values should not be changed. */
    private ?array $metadata = null;
    
    /** @var string|null $name Human-friendly name of the object mapping. */
    private ?string $name = null;
    
    /** @var Filter|null $scope Defines a filter to be used when deciding whether a given object should be provisioned. For example, you might want to only provision users that are located in the US. */
    private ?Filter $scope = null;
    
    /** @var string|null $sourceObjectName Name of the object in the source directory. Must match the object name from the source directory definition. */
    private ?string $sourceObjectName = null;
    
    /** @var string|null $targetObjectName Name of the object in target directory. Must match the object name from the target directory definition. */
    private ?string $targetObjectName = null;
    
    /**
     * Instantiates a new objectMapping and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ObjectMapping
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ObjectMapping {
        return new ObjectMapping();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attributeMappings property value. Attribute mappings define which attributes to map from the source object into the target object and how they should flow. A number of functions are available to support the transformation of the original source values.
     * @return array<AttributeMapping>|null
    */
    public function getAttributeMappings(): ?array {
        return $this->attributeMappings;
    }

    /**
     * Gets the enabled property value. When true, this object mapping will be processed during synchronization. When false, this object mapping will be skipped.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'attributeMappings' => function (self $o, ParseNode $n) { $o->setAttributeMappings($n->getCollectionOfObjectValues(AttributeMapping::class)); },
            'enabled' => function (self $o, ParseNode $n) { $o->setEnabled($n->getBooleanValue()); },
            'flowTypes' => function (self $o, ParseNode $n) { $o->setFlowTypes($n->getEnumValue(ObjectFlowTypes::class)); },
            'metadata' => function (self $o, ParseNode $n) { $o->setMetadata($n->getCollectionOfObjectValues(MetadataEntry::class)); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'scope' => function (self $o, ParseNode $n) { $o->setScope($n->getObjectValue(Filter::class)); },
            'sourceObjectName' => function (self $o, ParseNode $n) { $o->setSourceObjectName($n->getStringValue()); },
            'targetObjectName' => function (self $o, ParseNode $n) { $o->setTargetObjectName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the flowTypes property value. Which flow types are enabled for this object mapping. Add creates new objects in the target directory, Update modifies existing objects, and Delete deprovisions existing users. The default is Add, Update, Delete.
     * @return ObjectFlowTypes|null
    */
    public function getFlowTypes(): ?ObjectFlowTypes {
        return $this->flowTypes;
    }

    /**
     * Gets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     * @return array<MetadataEntry>|null
    */
    public function getMetadata(): ?array {
        return $this->metadata;
    }

    /**
     * Gets the name property value. Human-friendly name of the object mapping.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the scope property value. Defines a filter to be used when deciding whether a given object should be provisioned. For example, you might want to only provision users that are located in the US.
     * @return Filter|null
    */
    public function getScope(): ?Filter {
        return $this->scope;
    }

    /**
     * Gets the sourceObjectName property value. Name of the object in the source directory. Must match the object name from the source directory definition.
     * @return string|null
    */
    public function getSourceObjectName(): ?string {
        return $this->sourceObjectName;
    }

    /**
     * Gets the targetObjectName property value. Name of the object in target directory. Must match the object name from the target directory definition.
     * @return string|null
    */
    public function getTargetObjectName(): ?string {
        return $this->targetObjectName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attributeMappings', $this->attributeMappings);
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeEnumValue('flowTypes', $this->flowTypes);
        $writer->writeCollectionOfObjectValues('metadata', $this->metadata);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('scope', $this->scope);
        $writer->writeStringValue('sourceObjectName', $this->sourceObjectName);
        $writer->writeStringValue('targetObjectName', $this->targetObjectName);
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
     * Sets the attributeMappings property value. Attribute mappings define which attributes to map from the source object into the target object and how they should flow. A number of functions are available to support the transformation of the original source values.
     *  @param array<AttributeMapping>|null $value Value to set for the attributeMappings property.
    */
    public function setAttributeMappings(?array $value ): void {
        $this->attributeMappings = $value;
    }

    /**
     * Sets the enabled property value. When true, this object mapping will be processed during synchronization. When false, this object mapping will be skipped.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the flowTypes property value. Which flow types are enabled for this object mapping. Add creates new objects in the target directory, Update modifies existing objects, and Delete deprovisions existing users. The default is Add, Update, Delete.
     *  @param ObjectFlowTypes|null $value Value to set for the flowTypes property.
    */
    public function setFlowTypes(?ObjectFlowTypes $value ): void {
        $this->flowTypes = $value;
    }

    /**
     * Sets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     *  @param array<MetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value ): void {
        $this->metadata = $value;
    }

    /**
     * Sets the name property value. Human-friendly name of the object mapping.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the scope property value. Defines a filter to be used when deciding whether a given object should be provisioned. For example, you might want to only provision users that are located in the US.
     *  @param Filter|null $value Value to set for the scope property.
    */
    public function setScope(?Filter $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the sourceObjectName property value. Name of the object in the source directory. Must match the object name from the source directory definition.
     *  @param string|null $value Value to set for the sourceObjectName property.
    */
    public function setSourceObjectName(?string $value ): void {
        $this->sourceObjectName = $value;
    }

    /**
     * Sets the targetObjectName property value. Name of the object in target directory. Must match the object name from the target directory definition.
     *  @param string|null $value Value to set for the targetObjectName property.
    */
    public function setTargetObjectName(?string $value ): void {
        $this->targetObjectName = $value;
    }

}
