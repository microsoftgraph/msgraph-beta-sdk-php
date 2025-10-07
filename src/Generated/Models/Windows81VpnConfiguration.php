<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * By providing the configurations in this profile you can instruct the Windows 8.1 (and later) devices to connect to desired VPN endpoint. By specifying the authentication method and security types expected by VPN endpoint you can make the VPN connection seamless for end user.
*/
class Windows81VpnConfiguration extends WindowsVpnConfiguration implements Parsable 
{
    /**
     * Instantiates a new Windows81VpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows81VpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows81VpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows81VpnConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsPhone81VpnConfiguration': return new WindowsPhone81VpnConfiguration();
            }
        }
        return new Windows81VpnConfiguration();
    }

    /**
     * Gets the applyOnlyToWindows81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     * @return bool|null
    */
    public function getApplyOnlyToWindows81(): ?bool {
        $val = $this->getBackingStore()->get('applyOnlyToWindows81');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applyOnlyToWindows81'");
    }

    /**
     * Gets the connectionType property value. Windows VPN connection type.
     * @return WindowsVpnConnectionType|null
    */
    public function getConnectionType(): ?WindowsVpnConnectionType {
        $val = $this->getBackingStore()->get('connectionType');
        if (is_null($val) || $val instanceof WindowsVpnConnectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionType'");
    }

    /**
     * Gets the enableSplitTunneling property value. Enable split tunneling for the VPN.
     * @return bool|null
    */
    public function getEnableSplitTunneling(): ?bool {
        $val = $this->getBackingStore()->get('enableSplitTunneling');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableSplitTunneling'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applyOnlyToWindows81' => fn(ParseNode $n) => $o->setApplyOnlyToWindows81($n->getBooleanValue()),
            'connectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getEnumValue(WindowsVpnConnectionType::class)),
            'enableSplitTunneling' => fn(ParseNode $n) => $o->setEnableSplitTunneling($n->getBooleanValue()),
            'loginGroupOrDomain' => fn(ParseNode $n) => $o->setLoginGroupOrDomain($n->getStringValue()),
            'proxyServer' => fn(ParseNode $n) => $o->setProxyServer($n->getObjectValue([Windows81VpnProxyServer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the loginGroupOrDomain property value. Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
     * @return string|null
    */
    public function getLoginGroupOrDomain(): ?string {
        $val = $this->getBackingStore()->get('loginGroupOrDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loginGroupOrDomain'");
    }

    /**
     * Gets the proxyServer property value. Proxy Server.
     * @return Windows81VpnProxyServer|null
    */
    public function getProxyServer(): ?Windows81VpnProxyServer {
        $val = $this->getBackingStore()->get('proxyServer');
        if (is_null($val) || $val instanceof Windows81VpnProxyServer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyServer'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('connectionType', $this->getConnectionType());
        $writer->writeBooleanValue('enableSplitTunneling', $this->getEnableSplitTunneling());
        $writer->writeStringValue('loginGroupOrDomain', $this->getLoginGroupOrDomain());
        $writer->writeObjectValue('proxyServer', $this->getProxyServer());
    }

    /**
     * Sets the applyOnlyToWindows81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     * @param bool|null $value Value to set for the applyOnlyToWindows81 property.
    */
    public function setApplyOnlyToWindows81(?bool $value): void {
        $this->getBackingStore()->set('applyOnlyToWindows81', $value);
    }

    /**
     * Sets the connectionType property value. Windows VPN connection type.
     * @param WindowsVpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?WindowsVpnConnectionType $value): void {
        $this->getBackingStore()->set('connectionType', $value);
    }

    /**
     * Sets the enableSplitTunneling property value. Enable split tunneling for the VPN.
     * @param bool|null $value Value to set for the enableSplitTunneling property.
    */
    public function setEnableSplitTunneling(?bool $value): void {
        $this->getBackingStore()->set('enableSplitTunneling', $value);
    }

    /**
     * Sets the loginGroupOrDomain property value. Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
     * @param string|null $value Value to set for the loginGroupOrDomain property.
    */
    public function setLoginGroupOrDomain(?string $value): void {
        $this->getBackingStore()->set('loginGroupOrDomain', $value);
    }

    /**
     * Sets the proxyServer property value. Proxy Server.
     * @param Windows81VpnProxyServer|null $value Value to set for the proxyServer property.
    */
    public function setProxyServer(?Windows81VpnProxyServer $value): void {
        $this->getBackingStore()->set('proxyServer', $value);
    }

}
