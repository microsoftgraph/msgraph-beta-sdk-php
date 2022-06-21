<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsFirewallRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var StateManagementSetting|null $action The action the rule enforces. If not specified, the default is Allowed. Possible values are: notConfigured, blocked, allowed.
    */
    private ?StateManagementSetting $action = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description The description of the rule.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the rule. Does not need to be unique.
    */
    private ?string $displayName = null;
    
    /**
     * @var StateManagementSetting|null $edgeTraversal Indicates whether edge traversal is enabled or disabled for this rule. The EdgeTraversal setting indicates that specific inbound traffic is allowed to tunnel through NATs and other edge devices using the Teredo tunneling technology. In order for this setting to work correctly, the application or service with the inbound firewall rule needs to support IPv6. The primary application of this setting allows listeners on the host to be globally addressable through a Teredo IPv6 address. New rules have the EdgeTraversal property disabled by default. Possible values are: notConfigured, blocked, allowed.
    */
    private ?StateManagementSetting $edgeTraversal = null;
    
    /**
     * @var string|null $filePath The full file path of an app that's affected by the firewall rule.
    */
    private ?string $filePath = null;
    
    /**
     * @var WindowsFirewallRuleInterfaceTypes|null $interfaceTypes The interface types of the rule. Possible values are: notConfigured, remoteAccess, wireless, lan.
    */
    private ?WindowsFirewallRuleInterfaceTypes $interfaceTypes = null;
    
    /**
     * @var array<string>|null $localAddressRanges List of local addresses covered by the rule. Default is any address. Valid tokens include:'' indicates any local address. If present, this must be the only token included.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
    */
    private ?array $localAddressRanges = null;
    
    /**
     * @var array<string>|null $localPortRanges List of local port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
    */
    private ?array $localPortRanges = null;
    
    /**
     * @var string|null $localUserAuthorizations Specifies the list of authorized local users for the app container. This is a string in Security Descriptor Definition Language (SDDL) format.
    */
    private ?string $localUserAuthorizations = null;
    
    /**
     * @var string|null $packageFamilyName The package family name of a Microsoft Store application that's affected by the firewall rule.
    */
    private ?string $packageFamilyName = null;
    
    /**
     * @var WindowsFirewallRuleNetworkProfileTypes|null $profileTypes Specifies the profiles to which the rule belongs. If not specified, the default is All. Possible values are: notConfigured, domain, private, public.
    */
    private ?WindowsFirewallRuleNetworkProfileTypes $profileTypes = null;
    
    /**
     * @var int|null $protocol 0-255 number representing the IP protocol (TCP = 6, UDP = 17). If not specified, the default is All. Valid values 0 to 255
    */
    private ?int $protocol = null;
    
    /**
     * @var array<string>|null $remoteAddressRanges List of tokens specifying the remote addresses covered by the rule. Tokens are case insensitive. Default is any address. Valid tokens include:'' indicates any remote address. If present, this must be the only token included.'Defaultgateway''DHCP''DNS''WINS''Intranet' (supported on Windows versions 1809+)'RmtIntranet' (supported on Windows versions 1809+)'Internet' (supported on Windows versions 1809+)'Ply2Renders' (supported on Windows versions 1809+)'LocalSubnet' indicates any local address on the local subnet.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
    */
    private ?array $remoteAddressRanges = null;
    
    /**
     * @var array<string>|null $remotePortRanges List of remote port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
    */
    private ?array $remotePortRanges = null;
    
    /**
     * @var string|null $serviceName The name used in cases when a service, not an application, is sending or receiving traffic.
    */
    private ?string $serviceName = null;
    
    /**
     * @var WindowsFirewallRuleTrafficDirectionType|null $trafficDirection The traffic direction that the rule is enabled for. If not specified, the default is Out. Possible values are: notConfigured, out, in.
    */
    private ?WindowsFirewallRuleTrafficDirectionType $trafficDirection = null;
    
    /**
     * Instantiates a new windowsFirewallRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsFirewallRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsFirewallRule {
        return new WindowsFirewallRule();
    }

    /**
     * Gets the action property value. The action the rule enforces. If not specified, the default is Allowed. Possible values are: notConfigured, blocked, allowed.
     * @return StateManagementSetting|null
    */
    public function getAction(): ?StateManagementSetting {
        return $this->action;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The description of the rule.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the rule. Does not need to be unique.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the edgeTraversal property value. Indicates whether edge traversal is enabled or disabled for this rule. The EdgeTraversal setting indicates that specific inbound traffic is allowed to tunnel through NATs and other edge devices using the Teredo tunneling technology. In order for this setting to work correctly, the application or service with the inbound firewall rule needs to support IPv6. The primary application of this setting allows listeners on the host to be globally addressable through a Teredo IPv6 address. New rules have the EdgeTraversal property disabled by default. Possible values are: notConfigured, blocked, allowed.
     * @return StateManagementSetting|null
    */
    public function getEdgeTraversal(): ?StateManagementSetting {
        return $this->edgeTraversal;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => function (ParseNode $n) use ($o) { $o->setAction($n->getEnumValue(StateManagementSetting::class)); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'edgeTraversal' => function (ParseNode $n) use ($o) { $o->setEdgeTraversal($n->getEnumValue(StateManagementSetting::class)); },
            'filePath' => function (ParseNode $n) use ($o) { $o->setFilePath($n->getStringValue()); },
            'interfaceTypes' => function (ParseNode $n) use ($o) { $o->setInterfaceTypes($n->getEnumValue(WindowsFirewallRuleInterfaceTypes::class)); },
            'localAddressRanges' => function (ParseNode $n) use ($o) { $o->setLocalAddressRanges($n->getCollectionOfPrimitiveValues()); },
            'localPortRanges' => function (ParseNode $n) use ($o) { $o->setLocalPortRanges($n->getCollectionOfPrimitiveValues()); },
            'localUserAuthorizations' => function (ParseNode $n) use ($o) { $o->setLocalUserAuthorizations($n->getStringValue()); },
            'packageFamilyName' => function (ParseNode $n) use ($o) { $o->setPackageFamilyName($n->getStringValue()); },
            'profileTypes' => function (ParseNode $n) use ($o) { $o->setProfileTypes($n->getEnumValue(WindowsFirewallRuleNetworkProfileTypes::class)); },
            'protocol' => function (ParseNode $n) use ($o) { $o->setProtocol($n->getIntegerValue()); },
            'remoteAddressRanges' => function (ParseNode $n) use ($o) { $o->setRemoteAddressRanges($n->getCollectionOfPrimitiveValues()); },
            'remotePortRanges' => function (ParseNode $n) use ($o) { $o->setRemotePortRanges($n->getCollectionOfPrimitiveValues()); },
            'serviceName' => function (ParseNode $n) use ($o) { $o->setServiceName($n->getStringValue()); },
            'trafficDirection' => function (ParseNode $n) use ($o) { $o->setTrafficDirection($n->getEnumValue(WindowsFirewallRuleTrafficDirectionType::class)); },
        ];
    }

    /**
     * Gets the filePath property value. The full file path of an app that's affected by the firewall rule.
     * @return string|null
    */
    public function getFilePath(): ?string {
        return $this->filePath;
    }

    /**
     * Gets the interfaceTypes property value. The interface types of the rule. Possible values are: notConfigured, remoteAccess, wireless, lan.
     * @return WindowsFirewallRuleInterfaceTypes|null
    */
    public function getInterfaceTypes(): ?WindowsFirewallRuleInterfaceTypes {
        return $this->interfaceTypes;
    }

    /**
     * Gets the localAddressRanges property value. List of local addresses covered by the rule. Default is any address. Valid tokens include:'' indicates any local address. If present, this must be the only token included.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
     * @return array<string>|null
    */
    public function getLocalAddressRanges(): ?array {
        return $this->localAddressRanges;
    }

    /**
     * Gets the localPortRanges property value. List of local port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
     * @return array<string>|null
    */
    public function getLocalPortRanges(): ?array {
        return $this->localPortRanges;
    }

    /**
     * Gets the localUserAuthorizations property value. Specifies the list of authorized local users for the app container. This is a string in Security Descriptor Definition Language (SDDL) format.
     * @return string|null
    */
    public function getLocalUserAuthorizations(): ?string {
        return $this->localUserAuthorizations;
    }

    /**
     * Gets the packageFamilyName property value. The package family name of a Microsoft Store application that's affected by the firewall rule.
     * @return string|null
    */
    public function getPackageFamilyName(): ?string {
        return $this->packageFamilyName;
    }

    /**
     * Gets the profileTypes property value. Specifies the profiles to which the rule belongs. If not specified, the default is All. Possible values are: notConfigured, domain, private, public.
     * @return WindowsFirewallRuleNetworkProfileTypes|null
    */
    public function getProfileTypes(): ?WindowsFirewallRuleNetworkProfileTypes {
        return $this->profileTypes;
    }

    /**
     * Gets the protocol property value. 0-255 number representing the IP protocol (TCP = 6, UDP = 17). If not specified, the default is All. Valid values 0 to 255
     * @return int|null
    */
    public function getProtocol(): ?int {
        return $this->protocol;
    }

    /**
     * Gets the remoteAddressRanges property value. List of tokens specifying the remote addresses covered by the rule. Tokens are case insensitive. Default is any address. Valid tokens include:'' indicates any remote address. If present, this must be the only token included.'Defaultgateway''DHCP''DNS''WINS''Intranet' (supported on Windows versions 1809+)'RmtIntranet' (supported on Windows versions 1809+)'Internet' (supported on Windows versions 1809+)'Ply2Renders' (supported on Windows versions 1809+)'LocalSubnet' indicates any local address on the local subnet.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
     * @return array<string>|null
    */
    public function getRemoteAddressRanges(): ?array {
        return $this->remoteAddressRanges;
    }

    /**
     * Gets the remotePortRanges property value. List of remote port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
     * @return array<string>|null
    */
    public function getRemotePortRanges(): ?array {
        return $this->remotePortRanges;
    }

    /**
     * Gets the serviceName property value. The name used in cases when a service, not an application, is sending or receiving traffic.
     * @return string|null
    */
    public function getServiceName(): ?string {
        return $this->serviceName;
    }

    /**
     * Gets the trafficDirection property value. The traffic direction that the rule is enabled for. If not specified, the default is Out. Possible values are: notConfigured, out, in.
     * @return WindowsFirewallRuleTrafficDirectionType|null
    */
    public function getTrafficDirection(): ?WindowsFirewallRuleTrafficDirectionType {
        return $this->trafficDirection;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('edgeTraversal', $this->edgeTraversal);
        $writer->writeStringValue('filePath', $this->filePath);
        $writer->writeEnumValue('interfaceTypes', $this->interfaceTypes);
        $writer->writeCollectionOfPrimitiveValues('localAddressRanges', $this->localAddressRanges);
        $writer->writeCollectionOfPrimitiveValues('localPortRanges', $this->localPortRanges);
        $writer->writeStringValue('localUserAuthorizations', $this->localUserAuthorizations);
        $writer->writeStringValue('packageFamilyName', $this->packageFamilyName);
        $writer->writeEnumValue('profileTypes', $this->profileTypes);
        $writer->writeIntegerValue('protocol', $this->protocol);
        $writer->writeCollectionOfPrimitiveValues('remoteAddressRanges', $this->remoteAddressRanges);
        $writer->writeCollectionOfPrimitiveValues('remotePortRanges', $this->remotePortRanges);
        $writer->writeStringValue('serviceName', $this->serviceName);
        $writer->writeEnumValue('trafficDirection', $this->trafficDirection);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. The action the rule enforces. If not specified, the default is Allowed. Possible values are: notConfigured, blocked, allowed.
     *  @param StateManagementSetting|null $value Value to set for the action property.
    */
    public function setAction(?StateManagementSetting $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the description property value. The description of the rule.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the rule. Does not need to be unique.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the edgeTraversal property value. Indicates whether edge traversal is enabled or disabled for this rule. The EdgeTraversal setting indicates that specific inbound traffic is allowed to tunnel through NATs and other edge devices using the Teredo tunneling technology. In order for this setting to work correctly, the application or service with the inbound firewall rule needs to support IPv6. The primary application of this setting allows listeners on the host to be globally addressable through a Teredo IPv6 address. New rules have the EdgeTraversal property disabled by default. Possible values are: notConfigured, blocked, allowed.
     *  @param StateManagementSetting|null $value Value to set for the edgeTraversal property.
    */
    public function setEdgeTraversal(?StateManagementSetting $value ): void {
        $this->edgeTraversal = $value;
    }

    /**
     * Sets the filePath property value. The full file path of an app that's affected by the firewall rule.
     *  @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value ): void {
        $this->filePath = $value;
    }

    /**
     * Sets the interfaceTypes property value. The interface types of the rule. Possible values are: notConfigured, remoteAccess, wireless, lan.
     *  @param WindowsFirewallRuleInterfaceTypes|null $value Value to set for the interfaceTypes property.
    */
    public function setInterfaceTypes(?WindowsFirewallRuleInterfaceTypes $value ): void {
        $this->interfaceTypes = $value;
    }

    /**
     * Sets the localAddressRanges property value. List of local addresses covered by the rule. Default is any address. Valid tokens include:'' indicates any local address. If present, this must be the only token included.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
     *  @param array<string>|null $value Value to set for the localAddressRanges property.
    */
    public function setLocalAddressRanges(?array $value ): void {
        $this->localAddressRanges = $value;
    }

    /**
     * Sets the localPortRanges property value. List of local port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
     *  @param array<string>|null $value Value to set for the localPortRanges property.
    */
    public function setLocalPortRanges(?array $value ): void {
        $this->localPortRanges = $value;
    }

    /**
     * Sets the localUserAuthorizations property value. Specifies the list of authorized local users for the app container. This is a string in Security Descriptor Definition Language (SDDL) format.
     *  @param string|null $value Value to set for the localUserAuthorizations property.
    */
    public function setLocalUserAuthorizations(?string $value ): void {
        $this->localUserAuthorizations = $value;
    }

    /**
     * Sets the packageFamilyName property value. The package family name of a Microsoft Store application that's affected by the firewall rule.
     *  @param string|null $value Value to set for the packageFamilyName property.
    */
    public function setPackageFamilyName(?string $value ): void {
        $this->packageFamilyName = $value;
    }

    /**
     * Sets the profileTypes property value. Specifies the profiles to which the rule belongs. If not specified, the default is All. Possible values are: notConfigured, domain, private, public.
     *  @param WindowsFirewallRuleNetworkProfileTypes|null $value Value to set for the profileTypes property.
    */
    public function setProfileTypes(?WindowsFirewallRuleNetworkProfileTypes $value ): void {
        $this->profileTypes = $value;
    }

    /**
     * Sets the protocol property value. 0-255 number representing the IP protocol (TCP = 6, UDP = 17). If not specified, the default is All. Valid values 0 to 255
     *  @param int|null $value Value to set for the protocol property.
    */
    public function setProtocol(?int $value ): void {
        $this->protocol = $value;
    }

    /**
     * Sets the remoteAddressRanges property value. List of tokens specifying the remote addresses covered by the rule. Tokens are case insensitive. Default is any address. Valid tokens include:'' indicates any remote address. If present, this must be the only token included.'Defaultgateway''DHCP''DNS''WINS''Intranet' (supported on Windows versions 1809+)'RmtIntranet' (supported on Windows versions 1809+)'Internet' (supported on Windows versions 1809+)'Ply2Renders' (supported on Windows versions 1809+)'LocalSubnet' indicates any local address on the local subnet.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
     *  @param array<string>|null $value Value to set for the remoteAddressRanges property.
    */
    public function setRemoteAddressRanges(?array $value ): void {
        $this->remoteAddressRanges = $value;
    }

    /**
     * Sets the remotePortRanges property value. List of remote port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
     *  @param array<string>|null $value Value to set for the remotePortRanges property.
    */
    public function setRemotePortRanges(?array $value ): void {
        $this->remotePortRanges = $value;
    }

    /**
     * Sets the serviceName property value. The name used in cases when a service, not an application, is sending or receiving traffic.
     *  @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value ): void {
        $this->serviceName = $value;
    }

    /**
     * Sets the trafficDirection property value. The traffic direction that the rule is enabled for. If not specified, the default is Out. Possible values are: notConfigured, out, in.
     *  @param WindowsFirewallRuleTrafficDirectionType|null $value Value to set for the trafficDirection property.
    */
    public function setTrafficDirection(?WindowsFirewallRuleTrafficDirectionType $value ): void {
        $this->trafficDirection = $value;
    }

}
