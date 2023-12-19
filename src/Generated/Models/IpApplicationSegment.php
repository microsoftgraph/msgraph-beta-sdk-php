<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IpApplicationSegment extends ApplicationSegment implements Parsable 
{
    /**
     * Instantiates a new ipApplicationSegment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ipApplicationSegment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpApplicationSegment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpApplicationSegment {
        return new IpApplicationSegment();
    }

    /**
     * Gets the destinationHost property value. The destinationHost property
     * @return string|null
    */
    public function getDestinationHost(): ?string {
        $val = $this->getBackingStore()->get('destinationHost');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationHost'");
    }

    /**
     * Gets the destinationType property value. The destinationType property
     * @return IpApplicationSegment_destinationType|null
    */
    public function getDestinationType(): ?IpApplicationSegment_destinationType {
        $val = $this->getBackingStore()->get('destinationType');
        if (is_null($val) || $val instanceof IpApplicationSegment_destinationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'destinationHost' => fn(ParseNode $n) => $o->setDestinationHost($n->getStringValue()),
            'destinationType' => fn(ParseNode $n) => $o->setDestinationType($n->getEnumValue(IpApplicationSegment_destinationType::class)),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'ports' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPorts($val);
            },
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getEnumValue(IpApplicationSegment_protocol::class)),
        ]);
    }

    /**
     * Gets the port property value. The port property
     * @return int|null
    */
    public function getPort(): ?int {
        $val = $this->getBackingStore()->get('port');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'port'");
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
     * @return IpApplicationSegment_protocol|null
    */
    public function getProtocol(): ?IpApplicationSegment_protocol {
        $val = $this->getBackingStore()->get('protocol');
        if (is_null($val) || $val instanceof IpApplicationSegment_protocol) {
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
        $writer->writeStringValue('destinationHost', $this->getDestinationHost());
        $writer->writeEnumValue('destinationType', $this->getDestinationType());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeCollectionOfPrimitiveValues('ports', $this->getPorts());
        $writer->writeEnumValue('protocol', $this->getProtocol());
    }

    /**
     * Sets the destinationHost property value. The destinationHost property
     * @param string|null $value Value to set for the destinationHost property.
    */
    public function setDestinationHost(?string $value): void {
        $this->getBackingStore()->set('destinationHost', $value);
    }

    /**
     * Sets the destinationType property value. The destinationType property
     * @param IpApplicationSegment_destinationType|null $value Value to set for the destinationType property.
    */
    public function setDestinationType(?IpApplicationSegment_destinationType $value): void {
        $this->getBackingStore()->set('destinationType', $value);
    }

    /**
     * Sets the port property value. The port property
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
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
     * @param IpApplicationSegment_protocol|null $value Value to set for the protocol property.
    */
    public function setProtocol(?IpApplicationSegment_protocol $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

}
