<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkNetworkConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $defaultGateway The default gateway is the path used to pass information when the destination is unknown to the device.
    */
    private ?string $defaultGateway = null;
    
    /**
     * @var string|null $domainName The network domain of the device, for example, contoso.com.
    */
    private ?string $domainName = null;
    
    /**
     * @var string|null $hostName The device name on a network.
    */
    private ?string $hostName = null;
    
    /**
     * @var string|null $ipAddress The IP address is a numerical label that uniquely identifies every device connected to the internet.
    */
    private ?string $ipAddress = null;
    
    /**
     * @var bool|null $isDhcpEnabled True if DHCP is enabled.
    */
    private ?bool $isDhcpEnabled = null;
    
    /**
     * @var bool|null $isPCPortEnabled True if the PC port is enabled.
    */
    private ?bool $isPCPortEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $primaryDns A primary DNS is the first point of contact for a device that translates the hostname into an IP address.
    */
    private ?string $primaryDns = null;
    
    /**
     * @var string|null $secondaryDns A secondary DNS is used when the primary DNS is not available.
    */
    private ?string $secondaryDns = null;
    
    /**
     * @var string|null $subnetMask A subnet mask is a number that distinguishes the network address and the host address within an IP address.
    */
    private ?string $subnetMask = null;
    
    /**
     * Instantiates a new teamworkNetworkConfiguration and sets the default values.
    */
    public function __construct() {
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultGateway property value. The default gateway is the path used to pass information when the destination is unknown to the device.
     * @return string|null
    */
    public function getDefaultGateway(): ?string {
        return $this->defaultGateway;
    }

    /**
     * Gets the domainName property value. The network domain of the device, for example, contoso.com.
     * @return string|null
    */
    public function getDomainName(): ?string {
        return $this->domainName;
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
        return $this->hostName;
    }

    /**
     * Gets the ipAddress property value. The IP address is a numerical label that uniquely identifies every device connected to the internet.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the isDhcpEnabled property value. True if DHCP is enabled.
     * @return bool|null
    */
    public function getIsDhcpEnabled(): ?bool {
        return $this->isDhcpEnabled;
    }

    /**
     * Gets the isPCPortEnabled property value. True if the PC port is enabled.
     * @return bool|null
    */
    public function getIsPCPortEnabled(): ?bool {
        return $this->isPCPortEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the primaryDns property value. A primary DNS is the first point of contact for a device that translates the hostname into an IP address.
     * @return string|null
    */
    public function getPrimaryDns(): ?string {
        return $this->primaryDns;
    }

    /**
     * Gets the secondaryDns property value. A secondary DNS is used when the primary DNS is not available.
     * @return string|null
    */
    public function getSecondaryDns(): ?string {
        return $this->secondaryDns;
    }

    /**
     * Gets the subnetMask property value. A subnet mask is a number that distinguishes the network address and the host address within an IP address.
     * @return string|null
    */
    public function getSubnetMask(): ?string {
        return $this->subnetMask;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultGateway', $this->defaultGateway);
        $writer->writeStringValue('domainName', $this->domainName);
        $writer->writeStringValue('hostName', $this->hostName);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeBooleanValue('isDhcpEnabled', $this->isDhcpEnabled);
        $writer->writeBooleanValue('isPCPortEnabled', $this->isPCPortEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('primaryDns', $this->primaryDns);
        $writer->writeStringValue('secondaryDns', $this->secondaryDns);
        $writer->writeStringValue('subnetMask', $this->subnetMask);
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
     * Sets the defaultGateway property value. The default gateway is the path used to pass information when the destination is unknown to the device.
     *  @param string|null $value Value to set for the defaultGateway property.
    */
    public function setDefaultGateway(?string $value ): void {
        $this->defaultGateway = $value;
    }

    /**
     * Sets the domainName property value. The network domain of the device, for example, contoso.com.
     *  @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value ): void {
        $this->domainName = $value;
    }

    /**
     * Sets the hostName property value. The device name on a network.
     *  @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value ): void {
        $this->hostName = $value;
    }

    /**
     * Sets the ipAddress property value. The IP address is a numerical label that uniquely identifies every device connected to the internet.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the isDhcpEnabled property value. True if DHCP is enabled.
     *  @param bool|null $value Value to set for the isDhcpEnabled property.
    */
    public function setIsDhcpEnabled(?bool $value ): void {
        $this->isDhcpEnabled = $value;
    }

    /**
     * Sets the isPCPortEnabled property value. True if the PC port is enabled.
     *  @param bool|null $value Value to set for the isPCPortEnabled property.
    */
    public function setIsPCPortEnabled(?bool $value ): void {
        $this->isPCPortEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the primaryDns property value. A primary DNS is the first point of contact for a device that translates the hostname into an IP address.
     *  @param string|null $value Value to set for the primaryDns property.
    */
    public function setPrimaryDns(?string $value ): void {
        $this->primaryDns = $value;
    }

    /**
     * Sets the secondaryDns property value. A secondary DNS is used when the primary DNS is not available.
     *  @param string|null $value Value to set for the secondaryDns property.
    */
    public function setSecondaryDns(?string $value ): void {
        $this->secondaryDns = $value;
    }

    /**
     * Sets the subnetMask property value. A subnet mask is a number that distinguishes the network address and the host address within an IP address.
     *  @param string|null $value Value to set for the subnetMask property.
    */
    public function setSubnetMask(?string $value ): void {
        $this->subnetMask = $value;
    }

}
