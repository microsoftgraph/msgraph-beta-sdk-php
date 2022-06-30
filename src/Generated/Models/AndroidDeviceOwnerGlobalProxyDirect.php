<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerGlobalProxyDirect extends AndroidDeviceOwnerGlobalProxy implements Parsable 
{
    /**
     * @var array<string>|null $excludedHosts The excluded hosts
    */
    private ?array $excludedHosts = null;
    
    /**
     * @var string|null $host The host name
    */
    private ?string $host = null;
    
    /**
     * @var int|null $port The port
    */
    private ?int $port = null;
    
    /**
     * Instantiates a new AndroidDeviceOwnerGlobalProxyDirect and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->excludedHosts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'excludedHosts' => function (ParseNode $n) use ($o) { $o->setExcludedHosts($n->getCollectionOfPrimitiveValues()); },
            'host' => function (ParseNode $n) use ($o) { $o->setHost($n->getStringValue()); },
            'port' => function (ParseNode $n) use ($o) { $o->setPort($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the host property value. The host name
     * @return string|null
    */
    public function getHost(): ?string {
        return $this->host;
    }

    /**
     * Gets the port property value. The port
     * @return int|null
    */
    public function getPort(): ?int {
        return $this->port;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('excludedHosts', $this->excludedHosts);
        $writer->writeStringValue('host', $this->host);
        $writer->writeIntegerValue('port', $this->port);
    }

    /**
     * Sets the excludedHosts property value. The excluded hosts
     *  @param array<string>|null $value Value to set for the excludedHosts property.
    */
    public function setExcludedHosts(?array $value ): void {
        $this->excludedHosts = $value;
    }

    /**
     * Sets the host property value. The host name
     *  @param string|null $value Value to set for the host property.
    */
    public function setHost(?string $value ): void {
        $this->host = $value;
    }

    /**
     * Sets the port property value. The port
     *  @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value ): void {
        $this->port = $value;
    }

}
