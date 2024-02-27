<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyRule extends Entity implements Parsable 
{
    /**
     * Instantiates a new PolicyRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyRule {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.networkaccess.filteringRule': return new FilteringRule();
                case '#microsoft.graph.networkaccess.forwardingRule': return new ForwardingRule();
                case '#microsoft.graph.networkaccess.fqdnFilteringRule': return new FqdnFilteringRule();
                case '#microsoft.graph.networkaccess.internetAccessForwardingRule': return new InternetAccessForwardingRule();
                case '#microsoft.graph.networkaccess.m365ForwardingRule': return new M365ForwardingRule();
                case '#microsoft.graph.networkaccess.privateAccessForwardingRule': return new PrivateAccessForwardingRule();
                case '#microsoft.graph.networkaccess.webCategoryFilteringRule': return new WebCategoryFilteringRule();
            }
        }
        return new PolicyRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. Name.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the name property value. Name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

}
