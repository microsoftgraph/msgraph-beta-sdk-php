<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkNetworkConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkNetworkConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkNetworkConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkNetworkConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkNetworkConfiguration {
        return new TeamworkNetworkConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the defaultGateway property value. The default gateway is the path used to pass information when the destination is unknown to the device.
     * @return string|null
    */
    public function getDefaultGateway(): ?string {
        return $this->getBackingStore()->get('defaultGateway');
    }

    /**
     * Gets the domainName property value. The network domain of the device, for example, contoso.com.
     * @return string|null
    */
    public function getDomainName(): ?string {
        return $this->getBackingStore()->get('domainName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultGateway' => fn(ParseNode $n) => $o->setDefaultGateway($n->getStringValue()),
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'hostName' => fn(ParseNode $n) => $o->setHostName($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'isDhcpEnabled' => fn(ParseNode $n) => $o->setIsDhcpEnabled($n->getBooleanValue()),
            'isPCPortEnabled' => fn(ParseNode $n) => $o->setIsPCPortEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryDns' => fn(ParseNode $n) => $o->setPrimaryDns($n->getStringValue()),
            'secondaryDns' => fn(ParseNode $n) => $o->setSecondaryDns($n->getStringValue()),
            'subnetMask' => fn(ParseNode $n) => $o->setSubnetMask($n->getStringValue()),
        ];
    }

    /**
     * Gets the hostName property value. The device name on a network.
     * @return string|null
    */
    public function getHostName(): ?string {
        return $this->getBackingStore()->get('hostName');
    }

    /**
     * Gets the ipAddress property value. The IP address is a numerical label that uniquely identifies every device connected to the internet.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->getBackingStore()->get('ipAddress');
    }

    /**
     * Gets the isDhcpEnabled property value. True if DHCP is enabled.
     * @return bool|null
    */
    public function getIsDhcpEnabled(): ?bool {
        return $this->getBackingStore()->get('isDhcpEnabled');
    }

    /**
     * Gets the isPCPortEnabled property value. True if the PC port is enabled.
     * @return bool|null
    */
    public function getIsPCPortEnabled(): ?bool {
        return $this->getBackingStore()->get('isPCPortEnabled');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the primaryDns property value. A primary DNS is the first point of contact for a device that translates the hostname into an IP address.
     * @return string|null
    */
    public function getPrimaryDns(): ?string {
        return $this->getBackingStore()->get('primaryDns');
    }

    /**
     * Gets the secondaryDns property value. A secondary DNS is used when the primary DNS is not available.
     * @return string|null
    */
    public function getSecondaryDns(): ?string {
        return $this->getBackingStore()->get('secondaryDns');
    }

    /**
     * Gets the subnetMask property value. A subnet mask is a number that distinguishes the network address and the host address within an IP address.
     * @return string|null
    */
    public function getSubnetMask(): ?string {
        return $this->getBackingStore()->get('subnetMask');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultGateway', $this->getDefaultGateway());
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeStringValue('hostName', $this->getHostName());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeBooleanValue('isDhcpEnabled', $this->getIsDhcpEnabled());
        $writer->writeBooleanValue('isPCPortEnabled', $this->getIsPCPortEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('primaryDns', $this->getPrimaryDns());
        $writer->writeStringValue('secondaryDns', $this->getSecondaryDns());
        $writer->writeStringValue('subnetMask', $this->getSubnetMask());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the defaultGateway property value. The default gateway is the path used to pass information when the destination is unknown to the device.
     *  @param string|null $value Value to set for the defaultGateway property.
    */
    public function setDefaultGateway(?string $value): void {
        $this->getBackingStore()->set('defaultGateway', $value);
    }

    /**
     * Sets the domainName property value. The network domain of the device, for example, contoso.com.
     *  @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->getBackingStore()->set('domainName', $value);
    }

    /**
     * Sets the hostName property value. The device name on a network.
     *  @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value): void {
        $this->getBackingStore()->set('hostName', $value);
    }

    /**
     * Sets the ipAddress property value. The IP address is a numerical label that uniquely identifies every device connected to the internet.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the isDhcpEnabled property value. True if DHCP is enabled.
     *  @param bool|null $value Value to set for the isDhcpEnabled property.
    */
    public function setIsDhcpEnabled(?bool $value): void {
        $this->getBackingStore()->set('isDhcpEnabled', $value);
    }

    /**
     * Sets the isPCPortEnabled property value. True if the PC port is enabled.
     *  @param bool|null $value Value to set for the isPCPortEnabled property.
    */
    public function setIsPCPortEnabled(?bool $value): void {
        $this->getBackingStore()->set('isPCPortEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryDns property value. A primary DNS is the first point of contact for a device that translates the hostname into an IP address.
     *  @param string|null $value Value to set for the primaryDns property.
    */
    public function setPrimaryDns(?string $value): void {
        $this->getBackingStore()->set('primaryDns', $value);
    }

    /**
     * Sets the secondaryDns property value. A secondary DNS is used when the primary DNS is not available.
     *  @param string|null $value Value to set for the secondaryDns property.
    */
    public function setSecondaryDns(?string $value): void {
        $this->getBackingStore()->set('secondaryDns', $value);
    }

    /**
     * Sets the subnetMask property value. A subnet mask is a number that distinguishes the network address and the host address within an IP address.
     *  @param string|null $value Value to set for the subnetMask property.
    */
    public function setSubnetMask(?string $value): void {
        $this->getBackingStore()->set('subnetMask', $value);
    }

}
