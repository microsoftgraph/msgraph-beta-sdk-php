<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Android Device Owner Global Proxy Direct.
*/
class AndroidDeviceOwnerGlobalProxyDirect extends AndroidDeviceOwnerGlobalProxy implements Parsable 
{
    /**
     * Instantiates a new androidDeviceOwnerGlobalProxyDirect and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerGlobalProxyDirect');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerGlobalProxyDirect
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerGlobalProxyDirect {
        return new AndroidDeviceOwnerGlobalProxyDirect();
    }

    /**
     * Gets the excludedHosts property value. The excluded hosts
     * @return array<string>|null
    */
    public function getExcludedHosts(): ?array {
        $val = $this->getBackingStore()->get('excludedHosts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedHosts'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'excludedHosts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludedHosts($val);
            },
            'host' => fn(ParseNode $n) => $o->setHost($n->getStringValue()),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the host property value. The host name
     * @return string|null
    */
    public function getHost(): ?string {
        $val = $this->getBackingStore()->get('host');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'host'");
    }

    /**
     * Gets the port property value. The port
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
        $writer->writeCollectionOfPrimitiveValues('excludedHosts', $this->getExcludedHosts());
        $writer->writeStringValue('host', $this->getHost());
        $writer->writeIntegerValue('port', $this->getPort());
    }

    /**
     * Sets the excludedHosts property value. The excluded hosts
     * @param array<string>|null $value Value to set for the excludedHosts property.
    */
    public function setExcludedHosts(?array $value): void {
        $this->getBackingStore()->set('excludedHosts', $value);
    }

    /**
     * Sets the host property value. The host name
     * @param string|null $value Value to set for the host property.
    */
    public function setHost(?string $value): void {
        $this->getBackingStore()->set('host', $value);
    }

    /**
     * Sets the port property value. The port
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
    }

}
