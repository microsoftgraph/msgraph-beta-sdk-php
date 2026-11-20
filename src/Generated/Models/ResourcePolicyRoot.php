<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ResourcePolicyRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new ResourcePolicyRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourcePolicyRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourcePolicyRoot {
        return new ResourcePolicyRoot();
    }

    /**
     * Gets the assignments property value. The assignments property
     * @return array<ResourcePolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourcePolicyAssignment::class);
            /** @var array<ResourcePolicyAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the builtInDefinitions property value. The builtInDefinitions property
     * @return array<ResourcePolicyDefinition>|null
    */
    public function getBuiltInDefinitions(): ?array {
        $val = $this->getBackingStore()->get('builtInDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourcePolicyDefinition::class);
            /** @var array<ResourcePolicyDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'builtInDefinitions'");
    }

    /**
     * Gets the configuration property value. The configuration property
     * @return ResourcePolicyConfiguration|null
    */
    public function getConfiguration(): ?ResourcePolicyConfiguration {
        $val = $this->getBackingStore()->get('configuration');
        if (is_null($val) || $val instanceof ResourcePolicyConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configuration'");
    }

    /**
     * Gets the definitions property value. The definitions property
     * @return array<ResourcePolicyDefinition>|null
    */
    public function getDefinitions(): ?array {
        $val = $this->getBackingStore()->get('definitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourcePolicyDefinition::class);
            /** @var array<ResourcePolicyDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definitions'");
    }

    /**
     * Gets the deletedItems property value. The deletedItems property
     * @return ResourcePolicyDeletableRoot|null
    */
    public function getDeletedItems(): ?ResourcePolicyDeletableRoot {
        $val = $this->getBackingStore()->get('deletedItems');
        if (is_null($val) || $val instanceof ResourcePolicyDeletableRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedItems'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([ResourcePolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'builtInDefinitions' => fn(ParseNode $n) => $o->setBuiltInDefinitions($n->getCollectionOfObjectValues([ResourcePolicyDefinition::class, 'createFromDiscriminatorValue'])),
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([ResourcePolicyConfiguration::class, 'createFromDiscriminatorValue'])),
            'definitions' => fn(ParseNode $n) => $o->setDefinitions($n->getCollectionOfObjectValues([ResourcePolicyDefinition::class, 'createFromDiscriminatorValue'])),
            'deletedItems' => fn(ParseNode $n) => $o->setDeletedItems($n->getObjectValue([ResourcePolicyDeletableRoot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeCollectionOfObjectValues('builtInDefinitions', $this->getBuiltInDefinitions());
        $writer->writeObjectValue('configuration', $this->getConfiguration());
        $writer->writeCollectionOfObjectValues('definitions', $this->getDefinitions());
        $writer->writeObjectValue('deletedItems', $this->getDeletedItems());
    }

    /**
     * Sets the assignments property value. The assignments property
     * @param array<ResourcePolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the builtInDefinitions property value. The builtInDefinitions property
     * @param array<ResourcePolicyDefinition>|null $value Value to set for the builtInDefinitions property.
    */
    public function setBuiltInDefinitions(?array $value): void {
        $this->getBackingStore()->set('builtInDefinitions', $value);
    }

    /**
     * Sets the configuration property value. The configuration property
     * @param ResourcePolicyConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?ResourcePolicyConfiguration $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

    /**
     * Sets the definitions property value. The definitions property
     * @param array<ResourcePolicyDefinition>|null $value Value to set for the definitions property.
    */
    public function setDefinitions(?array $value): void {
        $this->getBackingStore()->set('definitions', $value);
    }

    /**
     * Sets the deletedItems property value. The deletedItems property
     * @param ResourcePolicyDeletableRoot|null $value Value to set for the deletedItems property.
    */
    public function setDeletedItems(?ResourcePolicyDeletableRoot $value): void {
        $this->getBackingStore()->set('deletedItems', $value);
    }

}
