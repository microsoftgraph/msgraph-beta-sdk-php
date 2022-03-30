<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationTemplate extends Entity 
{
    /** @var string|null $applicationId Identifier of the application this template belongs to. */
    private ?string $applicationId = null;
    
    /** @var string|null $description Description of the template. */
    private ?string $description = null;
    
    /** @var bool|null $discoverable true if this template should appear in the collection of templates available for the application instance (service principal). */
    private ?bool $discoverable = null;
    
    /** @var bool|null $EscapedDefault true if this template is recommended to be the default for the application. */
    private ?bool $escapedDefault = null;
    
    /** @var string|null $factoryTag One of the well-known factory tags supported by the synchronization engine. The factoryTag tells the synchronization engine which implementation to use when processing jobs based on this template. */
    private ?string $factoryTag = null;
    
    /** @var array<MetadataEntry>|null $metadata Additional extension properties. Unless mentioned explicitly, metadata values should not be changed. */
    private ?array $metadata = null;
    
    /** @var SynchronizationSchema|null $schema Default synchronization schema for the jobs based on this template. */
    private ?SynchronizationSchema $schema = null;
    
    /**
     * Instantiates a new synchronizationTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationTemplate
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationTemplate {
        return new SynchronizationTemplate();
    }

    /**
     * Gets the applicationId property value. Identifier of the application this template belongs to.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->applicationId;
    }

    /**
     * Gets the default property value. true if this template is recommended to be the default for the application.
     * @return bool|null
    */
    public function getDefault(): ?bool {
        return $this->escapedDefault;
    }

    /**
     * Gets the description property value. Description of the template.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the discoverable property value. true if this template should appear in the collection of templates available for the application instance (service principal).
     * @return bool|null
    */
    public function getDiscoverable(): ?bool {
        return $this->discoverable;
    }

    /**
     * Gets the factoryTag property value. One of the well-known factory tags supported by the synchronization engine. The factoryTag tells the synchronization engine which implementation to use when processing jobs based on this template.
     * @return string|null
    */
    public function getFactoryTag(): ?string {
        return $this->factoryTag;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'applicationId' => function (self $o, ParseNode $n) { $o->setApplicationId($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'discoverable' => function (self $o, ParseNode $n) { $o->setDiscoverable($n->getBooleanValue()); },
            'default' => function (self $o, ParseNode $n) { $o->setEscapedDefault($n->getBooleanValue()); },
            'factoryTag' => function (self $o, ParseNode $n) { $o->setFactoryTag($n->getStringValue()); },
            'metadata' => function (self $o, ParseNode $n) { $o->setMetadata($n->getCollectionOfObjectValues(MetadataEntry::class)); },
            'schema' => function (self $o, ParseNode $n) { $o->setSchema($n->getObjectValue(SynchronizationSchema::class)); },
        ]);
    }

    /**
     * Gets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     * @return array<MetadataEntry>|null
    */
    public function getMetadata(): ?array {
        return $this->metadata;
    }

    /**
     * Gets the schema property value. Default synchronization schema for the jobs based on this template.
     * @return SynchronizationSchema|null
    */
    public function getSchema(): ?SynchronizationSchema {
        return $this->schema;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationId', $this->applicationId);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBooleanValue('discoverable', $this->discoverable);
        $writer->writeBooleanValue('default', $this->escapedDefault);
        $writer->writeStringValue('factoryTag', $this->factoryTag);
        $writer->writeCollectionOfObjectValues('metadata', $this->metadata);
        $writer->writeObjectValue('schema', $this->schema);
    }

    /**
     * Sets the applicationId property value. Identifier of the application this template belongs to.
     *  @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value ): void {
        $this->applicationId = $value;
    }

    /**
     * Sets the default property value. true if this template is recommended to be the default for the application.
     *  @param bool|null $value Value to set for the EscapedDefault property.
    */
    public function setDefault(?bool $value ): void {
        $this->escapedDefault = $value;
    }

    /**
     * Sets the description property value. Description of the template.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the discoverable property value. true if this template should appear in the collection of templates available for the application instance (service principal).
     *  @param bool|null $value Value to set for the discoverable property.
    */
    public function setDiscoverable(?bool $value ): void {
        $this->discoverable = $value;
    }

    /**
     * Sets the factoryTag property value. One of the well-known factory tags supported by the synchronization engine. The factoryTag tells the synchronization engine which implementation to use when processing jobs based on this template.
     *  @param string|null $value Value to set for the factoryTag property.
    */
    public function setFactoryTag(?string $value ): void {
        $this->factoryTag = $value;
    }

    /**
     * Sets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     *  @param array<MetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value ): void {
        $this->metadata = $value;
    }

    /**
     * Sets the schema property value. Default synchronization schema for the jobs based on this template.
     *  @param SynchronizationSchema|null $value Value to set for the schema property.
    */
    public function setSchema(?SynchronizationSchema $value ): void {
        $this->schema = $value;
    }

}
