<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class InternetAccessForwardingRule extends ForwardingRule implements Parsable 
{
    /**
     * Instantiates a new InternetAccessForwardingRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.internetAccessForwardingRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InternetAccessForwardingRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InternetAccessForwardingRule {
        return new InternetAccessForwardingRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ports' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPorts($val);
            },
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getEnumValue(NetworkingProtocol::class)),
        ]);
    }

    /**
     * Gets the ports property value. The ports property
     * @return array<string>|null
    */
    public function getPorts(): ?array {
        $val = $this->getBackingStore()->get('ports');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ports'");
    }

    /**
     * Gets the protocol property value. The protocol property
     * @return NetworkingProtocol|null
    */
    public function getProtocol(): ?NetworkingProtocol {
        $val = $this->getBackingStore()->get('protocol');
        if (is_null($val) || $val instanceof NetworkingProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocol'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('ports', $this->getPorts());
        $writer->writeEnumValue('protocol', $this->getProtocol());
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
