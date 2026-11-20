<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyDefinitionReference extends AssignedPolicyReference implements Parsable 
{
    /**
     * Instantiates a new PolicyDefinitionReference and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.policyDefinitionReference');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyDefinitionReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyDefinitionReference {
        return new PolicyDefinitionReference();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policyDefinition' => fn(ParseNode $n) => $o->setPolicyDefinition($n->getObjectValue([ResourcePolicyDefinition::class, 'createFromDiscriminatorValue'])),
            'policyUniqueName' => fn(ParseNode $n) => $o->setPolicyUniqueName($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the policyDefinition property value. The policyDefinition property
     * @return ResourcePolicyDefinition|null
    */
    public function getPolicyDefinition(): ?ResourcePolicyDefinition {
        $val = $this->getBackingStore()->get('policyDefinition');
        if (is_null($val) || $val instanceof ResourcePolicyDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyDefinition'");
    }

    /**
     * Gets the policyUniqueName property value. The policyUniqueName property
     * @return string|null
    */
    public function getPolicyUniqueName(): ?string {
        $val = $this->getBackingStore()->get('policyUniqueName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyUniqueName'");
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('policyDefinition', $this->getPolicyDefinition());
        $writer->writeStringValue('policyUniqueName', $this->getPolicyUniqueName());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the policyDefinition property value. The policyDefinition property
     * @param ResourcePolicyDefinition|null $value Value to set for the policyDefinition property.
    */
    public function setPolicyDefinition(?ResourcePolicyDefinition $value): void {
        $this->getBackingStore()->set('policyDefinition', $value);
    }

    /**
     * Sets the policyUniqueName property value. The policyUniqueName property
     * @param string|null $value Value to set for the policyUniqueName property.
    */
    public function setPolicyUniqueName(?string $value): void {
        $this->getBackingStore()->set('policyUniqueName', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
