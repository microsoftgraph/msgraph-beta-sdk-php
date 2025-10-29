<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * By providing the configurations in this profile you can instruct the Android Fully Managed device to connect to desired VPN endpoint. By specifying the authentication method and security types expected by VPN endpoint you can make the VPN connection seamless for end user.
*/
class AndroidDeviceOwnerVpnConfiguration extends VpnConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidDeviceOwnerVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerVpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerVpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerVpnConfiguration {
        return new AndroidDeviceOwnerVpnConfiguration();
    }

    /**
     * Gets the alwaysOn property value. Whether or not to enable always-on VPN connection.
     * @return bool|null
    */
    public function getAlwaysOn(): ?bool {
        $val = $this->getBackingStore()->get('alwaysOn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alwaysOn'");
    }

    /**
     * Gets the alwaysOnLockdown property value. If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
     * @return bool|null
    */
    public function getAlwaysOnLockdown(): ?bool {
        $val = $this->getBackingStore()->get('alwaysOnLockdown');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alwaysOnLockdown'");
    }

    /**
     * Gets the connectionType property value. Android VPN connection type.
     * @return AndroidVpnConnectionType|null
    */
    public function getConnectionType(): ?AndroidVpnConnectionType {
        $val = $this->getBackingStore()->get('connectionType');
        if (is_null($val) || $val instanceof AndroidVpnConnectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionType'");
    }

    /**
     * Gets the customData property value. Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     * @return array<KeyValue>|null
    */
    public function getCustomData(): ?array {
        $val = $this->getBackingStore()->get('customData');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValue::class);
            /** @var array<KeyValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customData'");
    }

    /**
     * Gets the customKeyValueData property value. Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     * @return array<KeyValuePair>|null
    */
    public function getCustomKeyValueData(): ?array {
        $val = $this->getBackingStore()->get('customKeyValueData');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customKeyValueData'");
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        $val = $this->getBackingStore()->get('derivedCredentialSettings');
        if (is_null($val) || $val instanceof DeviceManagementDerivedCredentialSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'derivedCredentialSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alwaysOn' => fn(ParseNode $n) => $o->setAlwaysOn($n->getBooleanValue()),
            'alwaysOnLockdown' => fn(ParseNode $n) => $o->setAlwaysOnLockdown($n->getBooleanValue()),
            'connectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getEnumValue(AndroidVpnConnectionType::class)),
            'customData' => fn(ParseNode $n) => $o->setCustomData($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'customKeyValueData' => fn(ParseNode $n) => $o->setCustomKeyValueData($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'derivedCredentialSettings' => fn(ParseNode $n) => $o->setDerivedCredentialSettings($n->getObjectValue([DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'])),
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([AndroidDeviceOwnerCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'microsoftTunnelSiteId' => fn(ParseNode $n) => $o->setMicrosoftTunnelSiteId($n->getStringValue()),
            'proxyExclusionList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProxyExclusionList($val);
            },
            'proxyServer' => fn(ParseNode $n) => $o->setProxyServer($n->getObjectValue([VpnProxyServer::class, 'createFromDiscriminatorValue'])),
            'targetedMobileApps' => fn(ParseNode $n) => $o->setTargetedMobileApps($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'targetedPackageIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTargetedPackageIds($val);
            },
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return AndroidDeviceOwnerCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?AndroidDeviceOwnerCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificate');
        if (is_null($val) || $val instanceof AndroidDeviceOwnerCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificate'");
    }

    /**
     * Gets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     * @return string|null
    */
    public function getMicrosoftTunnelSiteId(): ?string {
        $val = $this->getBackingStore()->get('microsoftTunnelSiteId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftTunnelSiteId'");
    }

    /**
     * Gets the proxyExclusionList property value. List of hosts to exclude using the proxy on connections for. These hosts can use wildcards such as .example.com.
     * @return array<string>|null
    */
    public function getProxyExclusionList(): ?array {
        $val = $this->getBackingStore()->get('proxyExclusionList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyExclusionList'");
    }

    /**
     * Gets the proxyServer property value. Proxy server.
     * @return VpnProxyServer|null
    */
    public function getProxyServer(): ?VpnProxyServer {
        $val = $this->getBackingStore()->get('proxyServer');
        if (is_null($val) || $val instanceof VpnProxyServer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyServer'");
    }

    /**
     * Gets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getTargetedMobileApps(): ?array {
        $val = $this->getBackingStore()->get('targetedMobileApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedMobileApps'");
    }

    /**
     * Gets the targetedPackageIds property value. Targeted App package IDs.
     * @return array<string>|null
    */
    public function getTargetedPackageIds(): ?array {
        $val = $this->getBackingStore()->get('targetedPackageIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedPackageIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('alwaysOn', $this->getAlwaysOn());
        $writer->writeBooleanValue('alwaysOnLockdown', $this->getAlwaysOnLockdown());
        $writer->writeEnumValue('connectionType', $this->getConnectionType());
        $writer->writeCollectionOfObjectValues('customData', $this->getCustomData());
        $writer->writeCollectionOfObjectValues('customKeyValueData', $this->getCustomKeyValueData());
        $writer->writeObjectValue('derivedCredentialSettings', $this->getDerivedCredentialSettings());
        $writer->writeObjectValue('identityCertificate', $this->getIdentityCertificate());
        $writer->writeStringValue('microsoftTunnelSiteId', $this->getMicrosoftTunnelSiteId());
        $writer->writeCollectionOfPrimitiveValues('proxyExclusionList', $this->getProxyExclusionList());
        $writer->writeObjectValue('proxyServer', $this->getProxyServer());
        $writer->writeCollectionOfObjectValues('targetedMobileApps', $this->getTargetedMobileApps());
        $writer->writeCollectionOfPrimitiveValues('targetedPackageIds', $this->getTargetedPackageIds());
    }

    /**
     * Sets the alwaysOn property value. Whether or not to enable always-on VPN connection.
     * @param bool|null $value Value to set for the alwaysOn property.
    */
    public function setAlwaysOn(?bool $value): void {
        $this->getBackingStore()->set('alwaysOn', $value);
    }

    /**
     * Sets the alwaysOnLockdown property value. If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
     * @param bool|null $value Value to set for the alwaysOnLockdown property.
    */
    public function setAlwaysOnLockdown(?bool $value): void {
        $this->getBackingStore()->set('alwaysOnLockdown', $value);
    }

    /**
     * Sets the connectionType property value. Android VPN connection type.
     * @param AndroidVpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?AndroidVpnConnectionType $value): void {
        $this->getBackingStore()->set('connectionType', $value);
    }

    /**
     * Sets the customData property value. Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     * @param array<KeyValue>|null $value Value to set for the customData property.
    */
    public function setCustomData(?array $value): void {
        $this->getBackingStore()->set('customData', $value);
    }

    /**
     * Sets the customKeyValueData property value. Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     * @param array<KeyValuePair>|null $value Value to set for the customKeyValueData property.
    */
    public function setCustomKeyValueData(?array $value): void {
        $this->getBackingStore()->set('customKeyValueData', $value);
    }

    /**
     * Sets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @param DeviceManagementDerivedCredentialSettings|null $value Value to set for the derivedCredentialSettings property.
    */
    public function setDerivedCredentialSettings(?DeviceManagementDerivedCredentialSettings $value): void {
        $this->getBackingStore()->set('derivedCredentialSettings', $value);
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @param AndroidDeviceOwnerCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?AndroidDeviceOwnerCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificate', $value);
    }

    /**
     * Sets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     * @param string|null $value Value to set for the microsoftTunnelSiteId property.
    */
    public function setMicrosoftTunnelSiteId(?string $value): void {
        $this->getBackingStore()->set('microsoftTunnelSiteId', $value);
    }

    /**
     * Sets the proxyExclusionList property value. List of hosts to exclude using the proxy on connections for. These hosts can use wildcards such as .example.com.
     * @param array<string>|null $value Value to set for the proxyExclusionList property.
    */
    public function setProxyExclusionList(?array $value): void {
        $this->getBackingStore()->set('proxyExclusionList', $value);
    }

    /**
     * Sets the proxyServer property value. Proxy server.
     * @param VpnProxyServer|null $value Value to set for the proxyServer property.
    */
    public function setProxyServer(?VpnProxyServer $value): void {
        $this->getBackingStore()->set('proxyServer', $value);
    }

    /**
     * Sets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the targetedMobileApps property.
    */
    public function setTargetedMobileApps(?array $value): void {
        $this->getBackingStore()->set('targetedMobileApps', $value);
    }

    /**
     * Sets the targetedPackageIds property value. Targeted App package IDs.
     * @param array<string>|null $value Value to set for the targetedPackageIds property.
    */
    public function setTargetedPackageIds(?array $value): void {
        $this->getBackingStore()->set('targetedPackageIds', $value);
    }

}
