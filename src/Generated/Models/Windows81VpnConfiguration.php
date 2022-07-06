<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows81VpnConfiguration extends WindowsVpnConfiguration implements Parsable 
{
    /**
     * @var bool|null $applyOnlyToWindows81 Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
    */
    private ?bool $applyOnlyToWindows81 = null;
    
    /**
     * @var WindowsVpnConnectionType|null $connectionType Connection type. Possible values are: pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn.
    */
    private ?WindowsVpnConnectionType $connectionType = null;
    
    /**
     * @var bool|null $enableSplitTunneling Enable split tunneling for the VPN.
    */
    private ?bool $enableSplitTunneling = null;
    
    /**
     * @var string|null $loginGroupOrDomain Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
    */
    private ?string $loginGroupOrDomain = null;
    
    /**
     * @var Windows81VpnProxyServer|null $proxyServer Proxy Server.
    */
    private ?Windows81VpnProxyServer $proxyServer = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new Windows81VpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->applyOnlyToWindows81;
    }

    /**
     * Gets the connectionType property value. Connection type. Possible values are: pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn.
     * @return WindowsVpnConnectionType|null
    */
    public function getConnectionType(): ?WindowsVpnConnectionType {
        return $this->connectionType;
    }

    /**
     * Gets the enableSplitTunneling property value. Enable split tunneling for the VPN.
     * @return bool|null
    */
    public function getEnableSplitTunneling(): ?bool {
        return $this->enableSplitTunneling;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applyOnlyToWindows81' => function (ParseNode $n) use ($o) { $o->setApplyOnlyToWindows81($n->getBooleanValue()); },
            'connectionType' => function (ParseNode $n) use ($o) { $o->setConnectionType($n->getEnumValue(WindowsVpnConnectionType::class)); },
            'enableSplitTunneling' => function (ParseNode $n) use ($o) { $o->setEnableSplitTunneling($n->getBooleanValue()); },
            'loginGroupOrDomain' => function (ParseNode $n) use ($o) { $o->setLoginGroupOrDomain($n->getStringValue()); },
            'proxyServer' => function (ParseNode $n) use ($o) { $o->setProxyServer($n->getObjectValue(array(Windows81VpnProxyServer::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the loginGroupOrDomain property value. Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
     * @return string|null
    */
    public function getLoginGroupOrDomain(): ?string {
        return $this->loginGroupOrDomain;
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Gets the proxyServer property value. Proxy Server.
     * @return Windows81VpnProxyServer|null
    */
    public function getProxyServer(): ?Windows81VpnProxyServer {
        return $this->proxyServer;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('applyOnlyToWindows81', $this->applyOnlyToWindows81);
        $writer->writeEnumValue('connectionType', $this->connectionType);
        $writer->writeBooleanValue('enableSplitTunneling', $this->enableSplitTunneling);
        $writer->writeStringValue('loginGroupOrDomain', $this->loginGroupOrDomain);
        $writer->writeObjectValue('proxyServer', $this->proxyServer);
        $writer->writeStringValue('@odata.type', $this->type);
    }

    /**
     * Sets the applyOnlyToWindows81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     *  @param bool|null $value Value to set for the applyOnlyToWindows81 property.
    */
    public function setApplyOnlyToWindows81(?bool $value ): void {
        $this->applyOnlyToWindows81 = $value;
    }

    /**
     * Sets the connectionType property value. Connection type. Possible values are: pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn.
     *  @param WindowsVpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?WindowsVpnConnectionType $value ): void {
        $this->connectionType = $value;
    }

    /**
     * Sets the enableSplitTunneling property value. Enable split tunneling for the VPN.
     *  @param bool|null $value Value to set for the enableSplitTunneling property.
    */
    public function setEnableSplitTunneling(?bool $value ): void {
        $this->enableSplitTunneling = $value;
    }

    /**
     * Sets the loginGroupOrDomain property value. Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
     *  @param string|null $value Value to set for the loginGroupOrDomain property.
    */
    public function setLoginGroupOrDomain(?string $value ): void {
        $this->loginGroupOrDomain = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the proxyServer property value. Proxy Server.
     *  @param Windows81VpnProxyServer|null $value Value to set for the proxyServer property.
    */
    public function setProxyServer(?Windows81VpnProxyServer $value ): void {
        $this->proxyServer = $value;
    }

}
