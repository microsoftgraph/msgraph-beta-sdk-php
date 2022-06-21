<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationRule implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $editable true if the synchronization rule can be customized; false if this rule is read-only and should not be changed. */
    private ?bool $editable = null;
    
    /** @var string|null $id Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API. */
    private ?string $id = null;
    
    /** @var array<StringKeyStringValuePair>|null $metadata Additional extension properties. Unless instructed explicitly by the support team, metadata values should not be changed. */
    private ?array $metadata = null;
    
    /** @var string|null $name Human-readable name of the synchronization rule. Not nullable. */
    private ?string $name = null;
    
    /** @var array<ObjectMapping>|null $objectMappings Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized. */
    private ?array $objectMappings = null;
    
    /** @var int|null $priority Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first. */
    private ?int $priority = null;
    
    /** @var string|null $sourceDirectoryName Name of the source directory. Must match one of the directory definitions in synchronizationSchema. */
    private ?string $sourceDirectoryName = null;
    
    /** @var string|null $targetDirectoryName Name of the target directory. Must match one of the directory definitions in synchronizationSchema. */
    private ?string $targetDirectoryName = null;
    
    /**
     * Instantiates a new synchronizationRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationRule
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationRule {
        return new SynchronizationRule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the editable property value. true if the synchronization rule can be customized; false if this rule is read-only and should not be changed.
     * @return bool|null
    */
    public function getEditable(): ?bool {
        return $this->editable;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'editable' => function (self $o, ParseNode $n) { $o->setEditable($n->getBooleanValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'metadata' => function (self $o, ParseNode $n) { $o->setMetadata($n->getCollectionOfObjectValues(StringKeyStringValuePair::class)); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'objectMappings' => function (self $o, ParseNode $n) { $o->setObjectMappings($n->getCollectionOfObjectValues(ObjectMapping::class)); },
            'priority' => function (self $o, ParseNode $n) { $o->setPriority($n->getIntegerValue()); },
            'sourceDirectoryName' => function (self $o, ParseNode $n) { $o->setSourceDirectoryName($n->getStringValue()); },
            'targetDirectoryName' => function (self $o, ParseNode $n) { $o->setTargetDirectoryName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the metadata property value. Additional extension properties. Unless instructed explicitly by the support team, metadata values should not be changed.
     * @return array<StringKeyStringValuePair>|null
    */
    public function getMetadata(): ?array {
        return $this->metadata;
    }

    /**
     * Gets the name property value. Human-readable name of the synchronization rule. Not nullable.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the objectMappings property value. Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
     * @return array<ObjectMapping>|null
    */
    public function getObjectMappings(): ?array {
        return $this->objectMappings;
    }

    /**
     * Gets the priority property value. Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the sourceDirectoryName property value. Name of the source directory. Must match one of the directory definitions in synchronizationSchema.
     * @return string|null
    */
    public function getSourceDirectoryName(): ?string {
        return $this->sourceDirectoryName;
    }

    /**
     * Gets the targetDirectoryName property value. Name of the target directory. Must match one of the directory definitions in synchronizationSchema.
     * @return string|null
    */
    public function getTargetDirectoryName(): ?string {
        return $this->targetDirectoryName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('editable', $this->editable);
        $writer->writeStringValue('id', $this->id);
        $writer->writeCollectionOfObjectValues('metadata', $this->metadata);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('objectMappings', $this->objectMappings);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeStringValue('sourceDirectoryName', $this->sourceDirectoryName);
        $writer->writeStringValue('targetDirectoryName', $this->targetDirectoryName);
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
     * Sets the editable property value. true if the synchronization rule can be customized; false if this rule is read-only and should not be changed.
     *  @param bool|null $value Value to set for the editable property.
    */
    public function setEditable(?bool $value ): void {
        $this->editable = $value;
    }

    /**
     * Sets the id property value. Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the metadata property value. Additional extension properties. Unless instructed explicitly by the support team, metadata values should not be changed.
     *  @param array<StringKeyStringValuePair>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value ): void {
        $this->metadata = $value;
    }

    /**
     * Sets the name property value. Human-readable name of the synchronization rule. Not nullable.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the objectMappings property value. Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
     *  @param array<ObjectMapping>|null $value Value to set for the objectMappings property.
    */
    public function setObjectMappings(?array $value ): void {
        $this->objectMappings = $value;
    }

    /**
     * Sets the priority property value. Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first.
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the sourceDirectoryName property value. Name of the source directory. Must match one of the directory definitions in synchronizationSchema.
     *  @param string|null $value Value to set for the sourceDirectoryName property.
    */
    public function setSourceDirectoryName(?string $value ): void {
        $this->sourceDirectoryName = $value;
    }

    /**
     * Sets the targetDirectoryName property value. Name of the target directory. Must match one of the directory definitions in synchronizationSchema.
     *  @param string|null $value Value to set for the targetDirectoryName property.
    */
    public function setTargetDirectoryName(?string $value ): void {
        $this->targetDirectoryName = $value;
    }

}
