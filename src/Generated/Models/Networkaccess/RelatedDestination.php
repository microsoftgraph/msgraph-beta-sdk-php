<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedDestination extends RelatedResource implements Parsable 
{
    /**
     * Instantiates a new RelatedDestination and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.relatedDestination');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedDestination
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedDestination {
        return new RelatedDestination();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fqdn' => fn(ParseNode $n) => $o->setFqdn($n->getStringValue()),
            'ip' => fn(ParseNode $n) => $o->setIp($n->getStringValue()),
            'networkingProtocol' => fn(ParseNode $n) => $o->setNetworkingProtocol($n->getEnumValue(NetworkingProtocol::class)),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the fqdn property value. The fqdn property
     * @return string|null
    */
    public function getFqdn(): ?string {
        $val = $this->getBackingStore()->get('fqdn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fqdn'");
    }

    /**
     * Gets the ip property value. The ip property
     * @return string|null
    */
    public function getIp(): ?string {
        $val = $this->getBackingStore()->get('ip');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ip'");
    }

    /**
     * Gets the networkingProtocol property value. The networkingProtocol property
     * @return NetworkingProtocol|null
    */
    public function getNetworkingProtocol(): ?NetworkingProtocol {
        $val = $this->getBackingStore()->get('networkingProtocol');
        if (is_null($val) || $val instanceof NetworkingProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkingProtocol'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fqdn', $this->getFqdn());
        $writer->writeStringValue('ip', $this->getIp());
        $writer->writeEnumValue('networkingProtocol', $this->getNetworkingProtocol());
        $writer->writeIntegerValue('port', $this->getPort());
    }

    /**
     * Sets the fqdn property value. The fqdn property
     * @param string|null $value Value to set for the fqdn property.
    */
    public function setFqdn(?string $value): void {
        $this->getBackingStore()->set('fqdn', $value);
    }

    /**
     * Sets the ip property value. The ip property
     * @param string|null $value Value to set for the ip property.
    */
    public function setIp(?string $value): void {
        $this->getBackingStore()->set('ip', $value);
    }

    /**
     * Sets the networkingProtocol property value. The networkingProtocol property
     * @param NetworkingProtocol|null $value Value to set for the networkingProtocol property.
    */
    public function setNetworkingProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('networkingProtocol', $value);
    }

    /**
     * Sets the port property value. The port property
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
    }

}
