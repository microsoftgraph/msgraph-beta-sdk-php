<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A rule controlling traffic through the Windows Firewall.
*/
class WindowsFirewallRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WindowsFirewallRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the action property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getAction(): ?StateManagementSetting {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof StateManagementSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the description property value. The description of the rule.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the rule. Does not need to be unique.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the edgeTraversal property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getEdgeTraversal(): ?StateManagementSetting {
        $val = $this->getBackingStore()->get('edgeTraversal');
        if (is_null($val) || $val instanceof StateManagementSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeTraversal'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(StateManagementSetting::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'edgeTraversal' => fn(ParseNode $n) => $o->setEdgeTraversal($n->getEnumValue(StateManagementSetting::class)),
            'filePath' => fn(ParseNode $n) => $o->setFilePath($n->getStringValue()),
            'interfaceTypes' => fn(ParseNode $n) => $o->setInterfaceTypes($n->getEnumValue(WindowsFirewallRuleInterfaceTypes::class)),
            'localAddressRanges' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLocalAddressRanges($val);
            },
            'localPortRanges' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLocalPortRanges($val);
            },
            'localUserAuthorizations' => fn(ParseNode $n) => $o->setLocalUserAuthorizations($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'packageFamilyName' => fn(ParseNode $n) => $o->setPackageFamilyName($n->getStringValue()),
            'profileTypes' => fn(ParseNode $n) => $o->setProfileTypes($n->getEnumValue(WindowsFirewallRuleNetworkProfileTypes::class)),
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getIntegerValue()),
            'remoteAddressRanges' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRemoteAddressRanges($val);
            },
            'remotePortRanges' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRemotePortRanges($val);
            },
            'serviceName' => fn(ParseNode $n) => $o->setServiceName($n->getStringValue()),
            'trafficDirection' => fn(ParseNode $n) => $o->setTrafficDirection($n->getEnumValue(WindowsFirewallRuleTrafficDirectionType::class)),
        ];
    }

    /**
     * Gets the filePath property value. The full file path of an app that's affected by the firewall rule.
     * @return string|null
    */
    public function getFilePath(): ?string {
        $val = $this->getBackingStore()->get('filePath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePath'");
    }

    /**
     * Gets the interfaceTypes property value. Flags representing firewall rule interface types.
     * @return WindowsFirewallRuleInterfaceTypes|null
    */
    public function getInterfaceTypes(): ?WindowsFirewallRuleInterfaceTypes {
        $val = $this->getBackingStore()->get('interfaceTypes');
        if (is_null($val) || $val instanceof WindowsFirewallRuleInterfaceTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'interfaceTypes'");
    }

    /**
     * Gets the localAddressRanges property value. List of local addresses covered by the rule. Default is any address. Valid tokens include:'' indicates any local address. If present, this must be the only token included.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
     * @return array<string>|null
    */
    public function getLocalAddressRanges(): ?array {
        $val = $this->getBackingStore()->get('localAddressRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAddressRanges'");
    }

    /**
     * Gets the localPortRanges property value. List of local port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
     * @return array<string>|null
    */
    public function getLocalPortRanges(): ?array {
        $val = $this->getBackingStore()->get('localPortRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localPortRanges'");
    }

    /**
     * Gets the localUserAuthorizations property value. Specifies the list of authorized local users for the app container. This is a string in Security Descriptor Definition Language (SDDL) format.
     * @return string|null
    */
    public function getLocalUserAuthorizations(): ?string {
        $val = $this->getBackingStore()->get('localUserAuthorizations');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localUserAuthorizations'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the packageFamilyName property value. The package family name of a Microsoft Store application that's affected by the firewall rule.
     * @return string|null
    */
    public function getPackageFamilyName(): ?string {
        $val = $this->getBackingStore()->get('packageFamilyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageFamilyName'");
    }

    /**
     * Gets the profileTypes property value. Flags representing which network profile types apply to a firewall rule.
     * @return WindowsFirewallRuleNetworkProfileTypes|null
    */
    public function getProfileTypes(): ?WindowsFirewallRuleNetworkProfileTypes {
        $val = $this->getBackingStore()->get('profileTypes');
        if (is_null($val) || $val instanceof WindowsFirewallRuleNetworkProfileTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileTypes'");
    }

    /**
     * Gets the protocol property value. 0-255 number representing the IP protocol (TCP = 6, UDP = 17). If not specified, the default is All. Valid values 0 to 255
     * @return int|null
    */
    public function getProtocol(): ?int {
        $val = $this->getBackingStore()->get('protocol');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocol'");
    }

    /**
     * Gets the remoteAddressRanges property value. List of tokens specifying the remote addresses covered by the rule. Tokens are case insensitive. Default is any address. Valid tokens include:'' indicates any remote address. If present, this must be the only token included.'Defaultgateway''DHCP''DNS''WINS''Intranet' (supported on Windows versions 1809+)'RmtIntranet' (supported on Windows versions 1809+)'Internet' (supported on Windows versions 1809+)'Ply2Renders' (supported on Windows versions 1809+)'LocalSubnet' indicates any local address on the local subnet.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
     * @return array<string>|null
    */
    public function getRemoteAddressRanges(): ?array {
        $val = $this->getBackingStore()->get('remoteAddressRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteAddressRanges'");
    }

    /**
     * Gets the remotePortRanges property value. List of remote port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
     * @return array<string>|null
    */
    public function getRemotePortRanges(): ?array {
        $val = $this->getBackingStore()->get('remotePortRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remotePortRanges'");
    }

    /**
     * Gets the serviceName property value. The name used in cases when a service, not an application, is sending or receiving traffic.
     * @return string|null
    */
    public function getServiceName(): ?string {
        $val = $this->getBackingStore()->get('serviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceName'");
    }

    /**
     * Gets the trafficDirection property value. Firewall rule traffic directions.
     * @return WindowsFirewallRuleTrafficDirectionType|null
    */
    public function getTrafficDirection(): ?WindowsFirewallRuleTrafficDirectionType {
        $val = $this->getBackingStore()->get('trafficDirection');
        if (is_null($val) || $val instanceof WindowsFirewallRuleTrafficDirectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trafficDirection'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('edgeTraversal', $this->getEdgeTraversal());
        $writer->writeStringValue('filePath', $this->getFilePath());
        $writer->writeEnumValue('interfaceTypes', $this->getInterfaceTypes());
        $writer->writeCollectionOfPrimitiveValues('localAddressRanges', $this->getLocalAddressRanges());
        $writer->writeCollectionOfPrimitiveValues('localPortRanges', $this->getLocalPortRanges());
        $writer->writeStringValue('localUserAuthorizations', $this->getLocalUserAuthorizations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('packageFamilyName', $this->getPackageFamilyName());
        $writer->writeEnumValue('profileTypes', $this->getProfileTypes());
        $writer->writeIntegerValue('protocol', $this->getProtocol());
        $writer->writeCollectionOfPrimitiveValues('remoteAddressRanges', $this->getRemoteAddressRanges());
        $writer->writeCollectionOfPrimitiveValues('remotePortRanges', $this->getRemotePortRanges());
        $writer->writeStringValue('serviceName', $this->getServiceName());
        $writer->writeEnumValue('trafficDirection', $this->getTrafficDirection());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. State Management Setting.
     * @param StateManagementSetting|null $value Value to set for the action property.
    */
    public function setAction(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the description property value. The description of the rule.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the rule. Does not need to be unique.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the edgeTraversal property value. State Management Setting.
     * @param StateManagementSetting|null $value Value to set for the edgeTraversal property.
    */
    public function setEdgeTraversal(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('edgeTraversal', $value);
    }

    /**
     * Sets the filePath property value. The full file path of an app that's affected by the firewall rule.
     * @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value): void {
        $this->getBackingStore()->set('filePath', $value);
    }

    /**
     * Sets the interfaceTypes property value. Flags representing firewall rule interface types.
     * @param WindowsFirewallRuleInterfaceTypes|null $value Value to set for the interfaceTypes property.
    */
    public function setInterfaceTypes(?WindowsFirewallRuleInterfaceTypes $value): void {
        $this->getBackingStore()->set('interfaceTypes', $value);
    }

    /**
     * Sets the localAddressRanges property value. List of local addresses covered by the rule. Default is any address. Valid tokens include:'' indicates any local address. If present, this must be the only token included.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
     * @param array<string>|null $value Value to set for the localAddressRanges property.
    */
    public function setLocalAddressRanges(?array $value): void {
        $this->getBackingStore()->set('localAddressRanges', $value);
    }

    /**
     * Sets the localPortRanges property value. List of local port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
     * @param array<string>|null $value Value to set for the localPortRanges property.
    */
    public function setLocalPortRanges(?array $value): void {
        $this->getBackingStore()->set('localPortRanges', $value);
    }

    /**
     * Sets the localUserAuthorizations property value. Specifies the list of authorized local users for the app container. This is a string in Security Descriptor Definition Language (SDDL) format.
     * @param string|null $value Value to set for the localUserAuthorizations property.
    */
    public function setLocalUserAuthorizations(?string $value): void {
        $this->getBackingStore()->set('localUserAuthorizations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the packageFamilyName property value. The package family name of a Microsoft Store application that's affected by the firewall rule.
     * @param string|null $value Value to set for the packageFamilyName property.
    */
    public function setPackageFamilyName(?string $value): void {
        $this->getBackingStore()->set('packageFamilyName', $value);
    }

    /**
     * Sets the profileTypes property value. Flags representing which network profile types apply to a firewall rule.
     * @param WindowsFirewallRuleNetworkProfileTypes|null $value Value to set for the profileTypes property.
    */
    public function setProfileTypes(?WindowsFirewallRuleNetworkProfileTypes $value): void {
        $this->getBackingStore()->set('profileTypes', $value);
    }

    /**
     * Sets the protocol property value. 0-255 number representing the IP protocol (TCP = 6, UDP = 17). If not specified, the default is All. Valid values 0 to 255
     * @param int|null $value Value to set for the protocol property.
    */
    public function setProtocol(?int $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

    /**
     * Sets the remoteAddressRanges property value. List of tokens specifying the remote addresses covered by the rule. Tokens are case insensitive. Default is any address. Valid tokens include:'' indicates any remote address. If present, this must be the only token included.'Defaultgateway''DHCP''DNS''WINS''Intranet' (supported on Windows versions 1809+)'RmtIntranet' (supported on Windows versions 1809+)'Internet' (supported on Windows versions 1809+)'Ply2Renders' (supported on Windows versions 1809+)'LocalSubnet' indicates any local address on the local subnet.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
     * @param array<string>|null $value Value to set for the remoteAddressRanges property.
    */
    public function setRemoteAddressRanges(?array $value): void {
        $this->getBackingStore()->set('remoteAddressRanges', $value);
    }

    /**
     * Sets the remotePortRanges property value. List of remote port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
     * @param array<string>|null $value Value to set for the remotePortRanges property.
    */
    public function setRemotePortRanges(?array $value): void {
        $this->getBackingStore()->set('remotePortRanges', $value);
    }

    /**
     * Sets the serviceName property value. The name used in cases when a service, not an application, is sending or receiving traffic.
     * @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value): void {
        $this->getBackingStore()->set('serviceName', $value);
    }

    /**
     * Sets the trafficDirection property value. Firewall rule traffic directions.
     * @param WindowsFirewallRuleTrafficDirectionType|null $value Value to set for the trafficDirection property.
    */
    public function setTrafficDirection(?WindowsFirewallRuleTrafficDirectionType $value): void {
        $this->getBackingStore()->set('trafficDirection', $value);
    }

}
