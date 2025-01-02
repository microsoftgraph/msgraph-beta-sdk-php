<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IpApplicationSegment extends ApplicationSegment implements Parsable 
{
    /**
     * Instantiates a new IpApplicationSegment and sets the default values.
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
     * Gets the application property value. The on-premises nonweb application published through Microsoft Entra application proxy. Expanded by default and supports $expand.
     * @return Application|null
    */
    public function getApplication(): ?Application {
        $val = $this->getBackingStore()->get('application');
        if (is_null($val) || $val instanceof Application) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'application'");
    }

    /**
     * Gets the destinationHost property value. Either the IP address, IP range, or FQDN of the applicationSegment, with or without wildcards.
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
     * Gets the destinationType property value. The possible values are: ipAddress, ipRange, ipRangeCidr, fqdn, dnsSuffix, unknownFutureValue.
     * @return PrivateNetworkDestinationType|null
    */
    public function getDestinationType(): ?PrivateNetworkDestinationType {
        $val = $this->getBackingStore()->get('destinationType');
        if (is_null($val) || $val instanceof PrivateNetworkDestinationType) {
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
            'application' => fn(ParseNode $n) => $o->setApplication($n->getObjectValue([Application::class, 'createFromDiscriminatorValue'])),
            'destinationHost' => fn(ParseNode $n) => $o->setDestinationHost($n->getStringValue()),
            'destinationType' => fn(ParseNode $n) => $o->setDestinationType($n->getEnumValue(PrivateNetworkDestinationType::class)),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'ports' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPorts($val);
            },
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getEnumValue(PrivateNetworkProtocol::class)),
        ]);
    }

    /**
     * Gets the port property value. Port supported for the application segment. DO NOT USE.
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
     * Gets the ports property value. List of ports supported for the application segment.
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
     * Gets the protocol property value. Indicates the protocol of the network traffic acquired for the application segment. The possible values are: tcp, udp, unknownFutureValue.
     * @return PrivateNetworkProtocol|null
    */
    public function getProtocol(): ?PrivateNetworkProtocol {
        $val = $this->getBackingStore()->get('protocol');
        if (is_null($val) || $val instanceof PrivateNetworkProtocol) {
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
        $writer->writeObjectValue('application', $this->getApplication());
        $writer->writeStringValue('destinationHost', $this->getDestinationHost());
        $writer->writeEnumValue('destinationType', $this->getDestinationType());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeCollectionOfPrimitiveValues('ports', $this->getPorts());
        $writer->writeEnumValue('protocol', $this->getProtocol());
    }

    /**
     * Sets the application property value. The on-premises nonweb application published through Microsoft Entra application proxy. Expanded by default and supports $expand.
     * @param Application|null $value Value to set for the application property.
    */
    public function setApplication(?Application $value): void {
        $this->getBackingStore()->set('application', $value);
    }

    /**
     * Sets the destinationHost property value. Either the IP address, IP range, or FQDN of the applicationSegment, with or without wildcards.
     * @param string|null $value Value to set for the destinationHost property.
    */
    public function setDestinationHost(?string $value): void {
        $this->getBackingStore()->set('destinationHost', $value);
    }

    /**
     * Sets the destinationType property value. The possible values are: ipAddress, ipRange, ipRangeCidr, fqdn, dnsSuffix, unknownFutureValue.
     * @param PrivateNetworkDestinationType|null $value Value to set for the destinationType property.
    */
    public function setDestinationType(?PrivateNetworkDestinationType $value): void {
        $this->getBackingStore()->set('destinationType', $value);
    }

    /**
     * Sets the port property value. Port supported for the application segment. DO NOT USE.
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
    }

    /**
     * Sets the ports property value. List of ports supported for the application segment.
     * @param array<string>|null $value Value to set for the ports property.
    */
    public function setPorts(?array $value): void {
        $this->getBackingStore()->set('ports', $value);
    }

    /**
     * Sets the protocol property value. Indicates the protocol of the network traffic acquired for the application segment. The possible values are: tcp, udp, unknownFutureValue.
     * @param PrivateNetworkProtocol|null $value Value to set for the protocol property.
    */
    public function setProtocol(?PrivateNetworkProtocol $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

}
