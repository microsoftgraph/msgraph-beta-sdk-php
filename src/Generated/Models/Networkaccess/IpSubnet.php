<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpSubnet extends RuleDestination implements Parsable 
{
    /**
     * Instantiates a new IpSubnet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.ipSubnet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpSubnet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpSubnet {
        return new IpSubnet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the value property value. Defines the IP address of the subset used in a destination for a rule.
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the value property value. Defines the IP address of the subset used in a destination for a rule.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
