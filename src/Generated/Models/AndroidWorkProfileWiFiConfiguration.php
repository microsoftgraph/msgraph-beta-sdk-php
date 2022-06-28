<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidWorkProfileWiFiConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
     * @var string|null $ssid This is the name of the Wi-Fi network that is broadcast to all devices.
    */
    private ?string $ssid = null;
    
    /**
     * @var AndroidWiFiSecurityType|null $wiFiSecurityType Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaEnterprise, wpa2Enterprise.
    */
    private ?AndroidWiFiSecurityType $wiFiSecurityType = null;
    
    /**
     * Instantiates a new AndroidWorkProfileWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileWiFiConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidWorkProfileEnterpriseWiFiConfiguration': return new AndroidWorkProfileEnterpriseWiFiConfiguration();
            }
        }
        return new AndroidWorkProfileWiFiConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
            'ssid' => function (ParseNode $n) use ($o) { $o->setSsid($n->getStringValue()); },
            'wiFiSecurityType' => function (ParseNode $n) use ($o) { $o->setWiFiSecurityType($n->getEnumValue(AndroidWiFiSecurityType::class)); },
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
     * Gets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     * @return string|null
    */
    public function getSsid(): ?string {
        return $this->ssid;
    }

    /**
     * Gets the wiFiSecurityType property value. Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaEnterprise, wpa2Enterprise.
     * @return AndroidWiFiSecurityType|null
    */
    public function getWiFiSecurityType(): ?AndroidWiFiSecurityType {
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
        $writer->writeStringValue('ssid', $this->ssid);
        $writer->writeEnumValue('wiFiSecurityType', $this->wiFiSecurityType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
     * Sets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     *  @param string|null $value Value to set for the ssid property.
    */
    public function setSsid(?string $value ): void {
        $this->ssid = $value;
    }

    /**
     * Sets the wiFiSecurityType property value. Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaEnterprise, wpa2Enterprise.
     *  @param AndroidWiFiSecurityType|null $value Value to set for the wiFiSecurityType property.
    */
    public function setWiFiSecurityType(?AndroidWiFiSecurityType $value ): void {
        $this->wiFiSecurityType = $value;
    }

}
