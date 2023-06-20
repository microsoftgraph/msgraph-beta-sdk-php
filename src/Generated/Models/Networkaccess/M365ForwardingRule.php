<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class M365ForwardingRule extends ForwardingRule implements Parsable 
{
    /**
     * Instantiates a new M365ForwardingRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.m365ForwardingRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return M365ForwardingRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): M365ForwardingRule {
        return new M365ForwardingRule();
    }

    /**
     * Gets the category property value. The category property
     * @return ForwardingCategory|null
    */
    public function getCategory(): ?ForwardingCategory {
        return $this->getBackingStore()->get('category');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(ForwardingCategory::class)),
            'ports' => fn(ParseNode $n) => $o->setPorts($n->getCollectionOfPrimitiveValues()),
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getEnumValue(NetworkingProtocol::class)),
        ]);
    }

    /**
     * Gets the ports property value. The ports property
     * @return array<string>|null
    */
    public function getPorts(): ?array {
        return $this->getBackingStore()->get('ports');
    }

    /**
     * Gets the protocol property value. The protocol property
     * @return NetworkingProtocol|null
    */
    public function getProtocol(): ?NetworkingProtocol {
        return $this->getBackingStore()->get('protocol');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeCollectionOfPrimitiveValues('ports', $this->getPorts());
        $writer->writeEnumValue('protocol', $this->getProtocol());
    }

    /**
     * Sets the category property value. The category property
     * @param ForwardingCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ForwardingCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the ports property value. The ports property
     * @param array<string>|null $value Value to set for the ports property.
    */
    public function setPorts(?array $value): void {
        $this->getBackingStore()->set('ports', $value);
    }

    /**
     * Sets the protocol property value. The protocol property
     * @param NetworkingProtocol|null $value Value to set for the protocol property.
    */
    public function setProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

}
