<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectoryDefinition extends Entity 
{
    /** @var DirectoryDefinitionDiscoverabilities|null $discoverabilities Read only value indicating what type of discovery the app supports. Possible values are: AttributeDataTypes, AttributeNames, AttributeReadOnly, None, ReferenceAttributes, UnknownFutureValue. */
    private ?DirectoryDefinitionDiscoverabilities $discoverabilities = null;
    
    /** @var DateTime|null $discoveryDateTime Represents the discovery date and time using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $discoveryDateTime = null;
    
    /** @var string|null $name Name of the directory. Must be unique within the synchronization schema. Not nullable. */
    private ?string $name = null;
    
    /** @var array<ObjectDefinition>|null $objects Collection of objects supported by the directory. */
    private ?array $objects = null;
    
    /** @var bool|null $readOnly  */
    private ?bool $readOnly = null;
    
    /** @var string|null $version Read only value that indicates version discovered. null if discovery has not yet occurred. */
    private ?string $version = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryDefinition {
        return new DirectoryDefinition();
    }

    /**
     * Gets the discoverabilities property value. Read only value indicating what type of discovery the app supports. Possible values are: AttributeDataTypes, AttributeNames, AttributeReadOnly, None, ReferenceAttributes, UnknownFutureValue.
     * @return DirectoryDefinitionDiscoverabilities|null
    */
    public function getDiscoverabilities(): ?DirectoryDefinitionDiscoverabilities {
        return $this->discoverabilities;
    }

    /**
     * Gets the discoveryDateTime property value. Represents the discovery date and time using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getDiscoveryDateTime(): ?DateTime {
        return $this->discoveryDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'discoverabilities' => function (self $o, ParseNode $n) { $o->setDiscoverabilities($n->getEnumValue(DirectoryDefinitionDiscoverabilities::class)); },
            'discoveryDateTime' => function (self $o, ParseNode $n) { $o->setDiscoveryDateTime($n->getDateTimeValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'objects' => function (self $o, ParseNode $n) { $o->setObjects($n->getCollectionOfObjectValues(ObjectDefinition::class)); },
            'readOnly' => function (self $o, ParseNode $n) { $o->setReadOnly($n->getBooleanValue()); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the name property value. Name of the directory. Must be unique within the synchronization schema. Not nullable.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the objects property value. Collection of objects supported by the directory.
     * @return array<ObjectDefinition>|null
    */
    public function getObjects(): ?array {
        return $this->objects;
    }

    /**
     * Gets the readOnly property value. 
     * @return bool|null
    */
    public function getReadOnly(): ?bool {
        return $this->readOnly;
    }

    /**
     * Gets the version property value. Read only value that indicates version discovered. null if discovery has not yet occurred.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('discoverabilities', $this->discoverabilities);
        $writer->writeDateTimeValue('discoveryDateTime', $this->discoveryDateTime);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('objects', $this->objects);
        $writer->writeBooleanValue('readOnly', $this->readOnly);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the discoverabilities property value. Read only value indicating what type of discovery the app supports. Possible values are: AttributeDataTypes, AttributeNames, AttributeReadOnly, None, ReferenceAttributes, UnknownFutureValue.
     *  @param DirectoryDefinitionDiscoverabilities|null $value Value to set for the discoverabilities property.
    */
    public function setDiscoverabilities(?DirectoryDefinitionDiscoverabilities $value ): void {
        $this->discoverabilities = $value;
    }

    /**
     * Sets the discoveryDateTime property value. Represents the discovery date and time using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the discoveryDateTime property.
    */
    public function setDiscoveryDateTime(?DateTime $value ): void {
        $this->discoveryDateTime = $value;
    }

    /**
     * Sets the name property value. Name of the directory. Must be unique within the synchronization schema. Not nullable.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the objects property value. Collection of objects supported by the directory.
     *  @param array<ObjectDefinition>|null $value Value to set for the objects property.
    */
    public function setObjects(?array $value ): void {
        $this->objects = $value;
    }

    /**
     * Sets the readOnly property value. 
     *  @param bool|null $value Value to set for the readOnly property.
    */
    public function setReadOnly(?bool $value ): void {
        $this->readOnly = $value;
    }

    /**
     * Sets the version property value. Read only value that indicates version discovered. null if discovery has not yet occurred.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
