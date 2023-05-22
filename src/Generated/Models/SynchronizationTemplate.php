<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationTemplate extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationTemplate {
        return new SynchronizationTemplate();
    }

    /**
     * Gets the applicationId property value. Identifier of the application this template belongs to.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->getBackingStore()->get('applicationId');
    }

    /**
     * Gets the default property value. true if this template is recommended to be the default for the application.
     * @return bool|null
    */
    public function getDefault(): ?bool {
        return $this->getBackingStore()->get('escapedDefault');
    }

    /**
     * Gets the description property value. Description of the template.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the discoverable property value. true if this template should appear in the collection of templates available for the application instance (service principal).
     * @return bool|null
    */
    public function getDiscoverable(): ?bool {
        return $this->getBackingStore()->get('discoverable');
    }

    /**
     * Gets the factoryTag property value. One of the well-known factory tags supported by the synchronization engine. The factoryTag tells the synchronization engine which implementation to use when processing jobs based on this template.
     * @return string|null
    */
    public function getFactoryTag(): ?string {
        return $this->getBackingStore()->get('factoryTag');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'discoverable' => fn(ParseNode $n) => $o->setDiscoverable($n->getBooleanValue()),
            'default' => fn(ParseNode $n) => $o->setDefault($n->getBooleanValue()),
            'factoryTag' => fn(ParseNode $n) => $o->setFactoryTag($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getCollectionOfObjectValues([MetadataEntry::class, 'createFromDiscriminatorValue'])),
            'schema' => fn(ParseNode $n) => $o->setSchema($n->getObjectValue([SynchronizationSchema::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     * @return array<MetadataEntry>|null
    */
    public function getMetadata(): ?array {
        return $this->getBackingStore()->get('metadata');
    }

    /**
     * Gets the schema property value. Default synchronization schema for the jobs based on this template.
     * @return SynchronizationSchema|null
    */
    public function getSchema(): ?SynchronizationSchema {
        return $this->getBackingStore()->get('schema');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationId', $this->getApplicationId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('discoverable', $this->getDiscoverable());
        $writer->writeBooleanValue('default', $this->getDefault());
        $writer->writeStringValue('factoryTag', $this->getFactoryTag());
        $writer->writeCollectionOfObjectValues('metadata', $this->getMetadata());
        $writer->writeObjectValue('schema', $this->getSchema());
    }

    /**
     * Sets the applicationId property value. Identifier of the application this template belongs to.
     * @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

    /**
     * Sets the default property value. true if this template is recommended to be the default for the application.
     * @param bool|null $value Value to set for the EscapedDefault property.
    */
    public function setDefault(?bool $value): void {
        $this->getBackingStore()->set('escapedDefault', $value);
    }

    /**
     * Sets the description property value. Description of the template.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the discoverable property value. true if this template should appear in the collection of templates available for the application instance (service principal).
     * @param bool|null $value Value to set for the discoverable property.
    */
    public function setDiscoverable(?bool $value): void {
        $this->getBackingStore()->set('discoverable', $value);
    }

    /**
     * Sets the factoryTag property value. One of the well-known factory tags supported by the synchronization engine. The factoryTag tells the synchronization engine which implementation to use when processing jobs based on this template.
     * @param string|null $value Value to set for the factoryTag property.
    */
    public function setFactoryTag(?string $value): void {
        $this->getBackingStore()->set('factoryTag', $value);
    }

    /**
     * Sets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     * @param array<MetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the schema property value. Default synchronization schema for the jobs based on this template.
     * @param SynchronizationSchema|null $value Value to set for the schema property.
    */
    public function setSchema(?SynchronizationSchema $value): void {
        $this->getBackingStore()->set('schema', $value);
    }

}
