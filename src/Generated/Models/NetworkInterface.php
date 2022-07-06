<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NetworkInterface implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description Description of the NIC (e.g. Ethernet adapter, Wireless LAN adapter Local Area Connection <#>, etc.).
    */
    private ?string $description = null;
    
    /**
     * @var string|null $ipV4Address Last IPv4 address associated with this NIC.
    */
    private ?string $ipV4Address = null;
    
    /**
     * @var string|null $ipV6Address Last Public (aka global) IPv6 address associated with this NIC.
    */
    private ?string $ipV6Address = null;
    
    /**
     * @var string|null $localIpV6Address Last local (link-local or site-local) IPv6 address associated with this NIC.
    */
    private ?string $localIpV6Address = null;
    
    /**
     * @var string|null $macAddress MAC address of the NIC on this host.
    */
    private ?string $macAddress = null;
    
    /**
     * Instantiates a new networkInterface and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkInterface
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkInterface {
        return new NetworkInterface();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Description of the NIC (e.g. Ethernet adapter, Wireless LAN adapter Local Area Connection <#>, etc.).
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'ipV4Address' => function (ParseNode $n) use ($o) { $o->setIpV4Address($n->getStringValue()); },
            'ipV6Address' => function (ParseNode $n) use ($o) { $o->setIpV6Address($n->getStringValue()); },
            'localIpV6Address' => function (ParseNode $n) use ($o) { $o->setLocalIpV6Address($n->getStringValue()); },
            'macAddress' => function (ParseNode $n) use ($o) { $o->setMacAddress($n->getStringValue()); },
        ];
    }

    /**
     * Gets the ipV4Address property value. Last IPv4 address associated with this NIC.
     * @return string|null
    */
    public function getIpV4Address(): ?string {
        return $this->ipV4Address;
    }

    /**
     * Gets the ipV6Address property value. Last Public (aka global) IPv6 address associated with this NIC.
     * @return string|null
    */
    public function getIpV6Address(): ?string {
        return $this->ipV6Address;
    }

    /**
     * Gets the localIpV6Address property value. Last local (link-local or site-local) IPv6 address associated with this NIC.
     * @return string|null
    */
    public function getLocalIpV6Address(): ?string {
        return $this->localIpV6Address;
    }

    /**
     * Gets the macAddress property value. MAC address of the NIC on this host.
     * @return string|null
    */
    public function getMacAddress(): ?string {
        return $this->macAddress;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('ipV4Address', $this->ipV4Address);
        $writer->writeStringValue('ipV6Address', $this->ipV6Address);
        $writer->writeStringValue('localIpV6Address', $this->localIpV6Address);
        $writer->writeStringValue('macAddress', $this->macAddress);
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
     * Sets the description property value. Description of the NIC (e.g. Ethernet adapter, Wireless LAN adapter Local Area Connection <#>, etc.).
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the ipV4Address property value. Last IPv4 address associated with this NIC.
     *  @param string|null $value Value to set for the ipV4Address property.
    */
    public function setIpV4Address(?string $value ): void {
        $this->ipV4Address = $value;
    }

    /**
     * Sets the ipV6Address property value. Last Public (aka global) IPv6 address associated with this NIC.
     *  @param string|null $value Value to set for the ipV6Address property.
    */
    public function setIpV6Address(?string $value ): void {
        $this->ipV6Address = $value;
    }

    /**
     * Sets the localIpV6Address property value. Last local (link-local or site-local) IPv6 address associated with this NIC.
     *  @param string|null $value Value to set for the localIpV6Address property.
    */
    public function setLocalIpV6Address(?string $value ): void {
        $this->localIpV6Address = $value;
    }

    /**
     * Sets the macAddress property value. MAC address of the NIC on this host.
     *  @param string|null $value Value to set for the macAddress property.
    */
    public function setMacAddress(?string $value ): void {
        $this->macAddress = $value;
    }

}
