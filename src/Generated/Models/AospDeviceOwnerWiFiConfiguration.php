<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AospDeviceOwnerWiFiConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $connectAutomatically Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    */
    private ?bool $connectAutomatically = null;
    
    /**
     * @var bool|null $connectWhenNetworkNameIsHidden When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
    */
    private ?bool $connectWhenNetworkNameIsHidden = null;
    
    /**
     * @var string|null $networkName Network Name
    */
    private ?string $networkName = null;
    
    /**
     * @var string|null $preSharedKey This is the pre-shared key for WPA Personal Wi-Fi network.
    */
    private ?string $preSharedKey = null;
    
    /**
     * @var bool|null $preSharedKeyIsSet This is the pre-shared key for WPA Personal Wi-Fi network.
    */
    private ?bool $preSharedKeyIsSet = null;
    
    /**
     * @var string|null $ssid This is the name of the Wi-Fi network that is broadcast to all devices.
    */
    private ?string $ssid = null;
    
    /**
     * @var AospDeviceOwnerWiFiSecurityType|null $wiFiSecurityType Wi-Fi Security Types for AOSP Device Owner.
    */
    private ?AospDeviceOwnerWiFiSecurityType $wiFiSecurityType = null;
    
    /**
     * Instantiates a new AospDeviceOwnerWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.aospDeviceOwnerWiFiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AospDeviceOwnerWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AospDeviceOwnerWiFiConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.aospDeviceOwnerEnterpriseWiFiConfiguration': return new AospDeviceOwnerEnterpriseWiFiConfiguration();
            }
        }
        return new AospDeviceOwnerWiFiConfiguration();
    }

    /**
     * Gets the connectAutomatically property value. Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
     * @return bool|null
    */
    public function getConnectAutomatically(): ?bool {
        return $this->connectAutomatically;
    }

    /**
     * Gets the connectWhenNetworkNameIsHidden property value. When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
     * @return bool|null
    */
    public function getConnectWhenNetworkNameIsHidden(): ?bool {
        return $this->connectWhenNetworkNameIsHidden;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectAutomatically' => function (ParseNode $n) use ($o) { $o->setConnectAutomatically($n->getBooleanValue()); },
            'connectWhenNetworkNameIsHidden' => function (ParseNode $n) use ($o) { $o->setConnectWhenNetworkNameIsHidden($n->getBooleanValue()); },
            'networkName' => function (ParseNode $n) use ($o) { $o->setNetworkName($n->getStringValue()); },
            'preSharedKey' => function (ParseNode $n) use ($o) { $o->setPreSharedKey($n->getStringValue()); },
            'preSharedKeyIsSet' => function (ParseNode $n) use ($o) { $o->setPreSharedKeyIsSet($n->getBooleanValue()); },
            'ssid' => function (ParseNode $n) use ($o) { $o->setSsid($n->getStringValue()); },
            'wiFiSecurityType' => function (ParseNode $n) use ($o) { $o->setWiFiSecurityType($n->getEnumValue(AospDeviceOwnerWiFiSecurityType::class)); },
        ]);
    }

    /**
     * Gets the networkName property value. Network Name
     * @return string|null
    */
    public function getNetworkName(): ?string {
        return $this->networkName;
    }

    /**
     * Gets the preSharedKey property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     * @return string|null
    */
    public function getPreSharedKey(): ?string {
        return $this->preSharedKey;
    }

    /**
     * Gets the preSharedKeyIsSet property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     * @return bool|null
    */
    public function getPreSharedKeyIsSet(): ?bool {
        return $this->preSharedKeyIsSet;
    }

    /**
     * Gets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     * @return string|null
    */
    public function getSsid(): ?string {
        return $this->ssid;
    }

    /**
     * Gets the wiFiSecurityType property value. Wi-Fi Security Types for AOSP Device Owner.
     * @return AospDeviceOwnerWiFiSecurityType|null
    */
    public function getWiFiSecurityType(): ?AospDeviceOwnerWiFiSecurityType {
        return $this->wiFiSecurityType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('connectAutomatically', $this->connectAutomatically);
        $writer->writeBooleanValue('connectWhenNetworkNameIsHidden', $this->connectWhenNetworkNameIsHidden);
        $writer->writeStringValue('networkName', $this->networkName);
        $writer->writeStringValue('preSharedKey', $this->preSharedKey);
        $writer->writeBooleanValue('preSharedKeyIsSet', $this->preSharedKeyIsSet);
        $writer->writeStringValue('ssid', $this->ssid);
        $writer->writeEnumValue('wiFiSecurityType', $this->wiFiSecurityType);
    }

    /**
     * Sets the connectAutomatically property value. Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
     *  @param bool|null $value Value to set for the connectAutomatically property.
    */
    public function setConnectAutomatically(?bool $value ): void {
        $this->connectAutomatically = $value;
    }

    /**
     * Sets the connectWhenNetworkNameIsHidden property value. When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
     *  @param bool|null $value Value to set for the connectWhenNetworkNameIsHidden property.
    */
    public function setConnectWhenNetworkNameIsHidden(?bool $value ): void {
        $this->connectWhenNetworkNameIsHidden = $value;
    }

    /**
     * Sets the networkName property value. Network Name
     *  @param string|null $value Value to set for the networkName property.
    */
    public function setNetworkName(?string $value ): void {
        $this->networkName = $value;
    }

    /**
     * Sets the preSharedKey property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     *  @param string|null $value Value to set for the preSharedKey property.
    */
    public function setPreSharedKey(?string $value ): void {
        $this->preSharedKey = $value;
    }

    /**
     * Sets the preSharedKeyIsSet property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     *  @param bool|null $value Value to set for the preSharedKeyIsSet property.
    */
    public function setPreSharedKeyIsSet(?bool $value ): void {
        $this->preSharedKeyIsSet = $value;
    }

    /**
     * Sets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     *  @param string|null $value Value to set for the ssid property.
    */
    public function setSsid(?string $value ): void {
        $this->ssid = $value;
    }

    /**
     * Sets the wiFiSecurityType property value. Wi-Fi Security Types for AOSP Device Owner.
     *  @param AospDeviceOwnerWiFiSecurityType|null $value Value to set for the wiFiSecurityType property.
    */
    public function setWiFiSecurityType(?AospDeviceOwnerWiFiSecurityType $value ): void {
        $this->wiFiSecurityType = $value;
    }

}
