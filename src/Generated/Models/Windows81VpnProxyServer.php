<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows81VpnProxyServer extends VpnProxyServer implements Parsable 
{
    /**
     * @var bool|null $automaticallyDetectProxySettings Automatically detect proxy settings.
    */
    private ?bool $automaticallyDetectProxySettings = null;
    
    /**
     * @var bool|null $bypassProxyServerForLocalAddress Bypass proxy server for local address.
    */
    private ?bool $bypassProxyServerForLocalAddress = null;
    
    /**
     * Instantiates a new Windows81VpnProxyServer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows81VpnProxyServer');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows81VpnProxyServer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows81VpnProxyServer {
        return new Windows81VpnProxyServer();
    }

    /**
     * Gets the automaticallyDetectProxySettings property value. Automatically detect proxy settings.
     * @return bool|null
    */
    public function getAutomaticallyDetectProxySettings(): ?bool {
        return $this->automaticallyDetectProxySettings;
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
            'automaticallyDetectProxySettings' => fn(ParseNode $n) => $o->setAutomaticallyDetectProxySettings($n->getBooleanValue()),
            'bypassProxyServerForLocalAddress' => fn(ParseNode $n) => $o->setBypassProxyServerForLocalAddress($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('automaticallyDetectProxySettings', $this->automaticallyDetectProxySettings);
        $writer->writeBooleanValue('bypassProxyServerForLocalAddress', $this->bypassProxyServerForLocalAddress);
    }

    /**
     * Sets the automaticallyDetectProxySettings property value. Automatically detect proxy settings.
     *  @param bool|null $value Value to set for the automaticallyDetectProxySettings property.
    */
    public function setAutomaticallyDetectProxySettings(?bool $value ): void {
        $this->automaticallyDetectProxySettings = $value;
    }

    /**
     * Sets the bypassProxyServerForLocalAddress property value. Bypass proxy server for local address.
     *  @param bool|null $value Value to set for the bypassProxyServerForLocalAddress property.
    */
    public function setBypassProxyServerForLocalAddress(?bool $value ): void {
        $this->bypassProxyServerForLocalAddress = $value;
    }

}
