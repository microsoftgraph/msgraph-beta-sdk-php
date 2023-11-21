<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Policy extends Entity implements Parsable 
{
    /**
     * Instantiates a new policy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Policy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Policy {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.networkaccess.filteringPolicy': return new FilteringPolicy();
                case '#microsoft.graph.networkaccess.forwardingPolicy': return new ForwardingPolicy();
            }
        }
        return new Policy();
    }

    /**
     * Gets the description property value. Description.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'policyRules' => fn(ParseNode $n) => $o->setPolicyRules($n->getCollectionOfObjectValues([PolicyRule::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. Policy name.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the policyRules property value. Represents the definition of the policy ruleset that makes up the core definition of a policy.
     * @return array<PolicyRule>|null
    */
    public function getPolicyRules(): ?array {
        $val = $this->getBackingStore()->get('policyRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicyRule::class);
            /** @var array<PolicyRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyRules'");
    }

    /**
     * Gets the version property value. Version.
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
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('policyRules', $this->getPolicyRules());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the description property value. Description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the name property value. Policy name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the policyRules property value. Represents the definition of the policy ruleset that makes up the core definition of a policy.
     * @param array<PolicyRule>|null $value Value to set for the policyRules property.
    */
    public function setPolicyRules(?array $value): void {
        $this->getBackingStore()->set('policyRules', $value);
    }

    /**
     * Sets the version property value. Version.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
