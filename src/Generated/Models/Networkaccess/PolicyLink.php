<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyLink extends Entity implements Parsable 
{
    /**
     * Instantiates a new PolicyLink and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyLink {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.networkaccess.filteringPolicyLink': return new FilteringPolicyLink();
                case '#microsoft.graph.networkaccess.forwardingPolicyLink': return new ForwardingPolicyLink();
                case '#microsoft.graph.networkaccess.threatIntelligencePolicyLink': return new ThreatIntelligencePolicyLink();
            }
        }
        return new PolicyLink();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([Policy::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(Status::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the policy property value. The policy property
     * @return Policy|null
    */
    public function getPolicy(): ?Policy {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || $val instanceof Policy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the state property value. The state property
     * @return Status|null
    */
    public function getState(): ?Status {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof Status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
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
        $writer->writeObjectValue('policy', $this->getPolicy());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the policy property value. The policy property
     * @param Policy|null $value Value to set for the policy property.
    */
    public function setPolicy(?Policy $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param Status|null $value Value to set for the state property.
    */
    public function setState(?Status $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the version property value. Version.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
