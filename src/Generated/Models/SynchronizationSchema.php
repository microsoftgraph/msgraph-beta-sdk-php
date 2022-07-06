<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationSchema extends Entity implements Parsable 
{
    /**
     * @var array<DirectoryDefinition>|null $directories Contains the collection of directories and all of their objects.
    */
    private ?array $directories = null;
    
    /**
     * @var array<SynchronizationRule>|null $synchronizationRules A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate.
    */
    private ?array $synchronizationRules = null;
    
    /**
     * @var string|null $version The version of the schema, updated automatically with every schema change.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new synchronizationSchema and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationSchema {
        return new SynchronizationSchema();
    }

    /**
     * Gets the directories property value. Contains the collection of directories and all of their objects.
     * @return array<DirectoryDefinition>|null
    */
    public function getDirectories(): ?array {
        return $this->directories;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'directories' => function (ParseNode $n) use ($o) { $o->setDirectories($n->getCollectionOfObjectValues(array(DirectoryDefinition::class, 'createFromDiscriminatorValue'))); },
            'synchronizationRules' => function (ParseNode $n) use ($o) { $o->setSynchronizationRules($n->getCollectionOfObjectValues(array(SynchronizationRule::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the synchronizationRules property value. A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate.
     * @return array<SynchronizationRule>|null
    */
    public function getSynchronizationRules(): ?array {
        return $this->synchronizationRules;
    }

    /**
     * Gets the version property value. The version of the schema, updated automatically with every schema change.
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
        $writer->writeCollectionOfObjectValues('directories', $this->directories);
        $writer->writeCollectionOfObjectValues('synchronizationRules', $this->synchronizationRules);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the directories property value. Contains the collection of directories and all of their objects.
     *  @param array<DirectoryDefinition>|null $value Value to set for the directories property.
    */
    public function setDirectories(?array $value ): void {
        $this->directories = $value;
    }

    /**
     * Sets the synchronizationRules property value. A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate.
     *  @param array<SynchronizationRule>|null $value Value to set for the synchronizationRules property.
    */
    public function setSynchronizationRules(?array $value ): void {
        $this->synchronizationRules = $value;
    }

    /**
     * Sets the version property value. The version of the schema, updated automatically with every schema change.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
