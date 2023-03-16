<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectoryDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new directoryDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryDefinition {
        return new DirectoryDefinition();
    }

    /**
     * Gets the discoverabilities property value. The discoverabilities property
     * @return DirectoryDefinitionDiscoverabilities|null
    */
    public function getDiscoverabilities(): ?DirectoryDefinitionDiscoverabilities {
        return $this->getBackingStore()->get('discoverabilities');
    }

    /**
     * Gets the discoveryDateTime property value. Represents the discovery date and time using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getDiscoveryDateTime(): ?DateTime {
        return $this->getBackingStore()->get('discoveryDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'discoverabilities' => fn(ParseNode $n) => $o->setDiscoverabilities($n->getEnumValue(DirectoryDefinitionDiscoverabilities::class)),
            'discoveryDateTime' => fn(ParseNode $n) => $o->setDiscoveryDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'objects' => fn(ParseNode $n) => $o->setObjects($n->getCollectionOfObjectValues([ObjectDefinition::class, 'createFromDiscriminatorValue'])),
            'readOnly' => fn(ParseNode $n) => $o->setReadOnly($n->getBooleanValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. Name of the directory. Must be unique within the synchronization schema. Not nullable.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the objects property value. Collection of objects supported by the directory.
     * @return array<ObjectDefinition>|null
    */
    public function getObjects(): ?array {
        return $this->getBackingStore()->get('objects');
    }

    /**
     * Gets the readOnly property value. Whether this object is read-only.
     * @return bool|null
    */
    public function getReadOnly(): ?bool {
        return $this->getBackingStore()->get('readOnly');
    }

    /**
     * Gets the version property value. Read only value that indicates version discovered. null if discovery has not yet occurred.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('discoverabilities', $this->getDiscoverabilities());
        $writer->writeDateTimeValue('discoveryDateTime', $this->getDiscoveryDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('objects', $this->getObjects());
        $writer->writeBooleanValue('readOnly', $this->getReadOnly());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the discoverabilities property value. The discoverabilities property
     * @param DirectoryDefinitionDiscoverabilities|null $value Value to set for the discoverabilities property.
    */
    public function setDiscoverabilities(?DirectoryDefinitionDiscoverabilities $value): void {
        $this->getBackingStore()->set('discoverabilities', $value);
    }

    /**
     * Sets the discoveryDateTime property value. Represents the discovery date and time using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the discoveryDateTime property.
    */
    public function setDiscoveryDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('discoveryDateTime', $value);
    }

    /**
     * Sets the name property value. Name of the directory. Must be unique within the synchronization schema. Not nullable.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the objects property value. Collection of objects supported by the directory.
     * @param array<ObjectDefinition>|null $value Value to set for the objects property.
    */
    public function setObjects(?array $value): void {
        $this->getBackingStore()->set('objects', $value);
    }

    /**
     * Sets the readOnly property value. Whether this object is read-only.
     * @param bool|null $value Value to set for the readOnly property.
    */
    public function setReadOnly(?bool $value): void {
        $this->getBackingStore()->set('readOnly', $value);
    }

    /**
     * Sets the version property value. Read only value that indicates version discovered. null if discovery has not yet occurred.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
