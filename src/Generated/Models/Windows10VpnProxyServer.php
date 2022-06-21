<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10VpnProxyServer extends VpnProxyServer implements Parsable 
{
    /**
     * @var bool|null $bypassProxyServerForLocalAddress Bypass proxy server for local address.
    */
    private ?bool $bypassProxyServerForLocalAddress = null;
    
    /**
     * Instantiates a new windows10VpnProxyServer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10VpnProxyServer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10VpnProxyServer {
        return new Windows10VpnProxyServer();
    }

    /**
     * Gets the bypassProxyServerForLocalAddress property value. Bypass proxy server for local address.
     * @return bool|null
    */
    public function getBypassProxyServerForLocalAddress(): ?bool {
        return $this->bypassProxyServerForLocalAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bypassProxyServerForLocalAddress' => function (ParseNode $n) use ($o) { $o->setBypassProxyServerForLocalAddress($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('bypassProxyServerForLocalAddress', $this->bypassProxyServerForLocalAddress);
    }

    /**
     * Sets the bypassProxyServerForLocalAddress property value. Bypass proxy server for local address.
     *  @param bool|null $value Value to set for the bypassProxyServerForLocalAddress property.
    */
    public function setBypassProxyServerForLocalAddress(?bool $value ): void {
        $this->bypassProxyServerForLocalAddress = $value;
    }

}
