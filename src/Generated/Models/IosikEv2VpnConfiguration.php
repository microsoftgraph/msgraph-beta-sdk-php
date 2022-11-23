<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosikEv2VpnConfiguration extends IosVpnConfiguration implements Parsable 
{
    /**
     * Instantiates a new IosikEv2VpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosikEv2VpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosikEv2VpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosikEv2VpnConfiguration {
        return new IosikEv2VpnConfiguration();
    }

    /**
     * Gets the allowDefaultChildSecurityAssociationParameters property value. Allows the use of child security association parameters by setting all parameters to the device's default unless explicitly specified.
     * @return bool|null
    */
    public function getAllowDefaultChildSecurityAssociationParameters(): ?bool {
        return $this->getBackingStore()->get('allowDefaultChildSecurityAssociationParameters');
    }

    /**
     * Gets the allowDefaultSecurityAssociationParameters property value. Allows the use of security association parameters by setting all parameters to the device's default unless explicitly specified.
     * @return bool|null
    */
    public function getAllowDefaultSecurityAssociationParameters(): ?bool {
        return $this->getBackingStore()->get('allowDefaultSecurityAssociationParameters');
    }

    /**
     * Gets the alwaysOnConfiguration property value. AlwaysOn Configuration
     * @return AppleVpnAlwaysOnConfiguration|null
    */
    public function getAlwaysOnConfiguration(): ?AppleVpnAlwaysOnConfiguration {
        return $this->getBackingStore()->get('alwaysOnConfiguration');
    }

    /**
     * Gets the childSecurityAssociationParameters property value. Child Security Association Parameters
     * @return IosVpnSecurityAssociationParameters|null
    */
    public function getChildSecurityAssociationParameters(): ?IosVpnSecurityAssociationParameters {
        return $this->getBackingStore()->get('childSecurityAssociationParameters');
    }

    /**
     * Gets the clientAuthenticationType property value. The type of VPN client authentication type
     * @return VpnClientAuthenticationType|null
    */
    public function getClientAuthenticationType(): ?VpnClientAuthenticationType {
        return $this->getBackingStore()->get('clientAuthenticationType');
    }

    /**
     * Gets the deadPeerDetectionRate property value. Determine how often to check if a peer connection is still active. . Possible values are: medium, none, low, high.
     * @return VpnDeadPeerDetectionRate|null
    */
    public function getDeadPeerDetectionRate(): ?VpnDeadPeerDetectionRate {
        return $this->getBackingStore()->get('deadPeerDetectionRate');
    }

    /**
     * Gets the disableMobilityAndMultihoming property value. Disable MOBIKE
     * @return bool|null
    */
    public function getDisableMobilityAndMultihoming(): ?bool {
        return $this->getBackingStore()->get('disableMobilityAndMultihoming');
    }

    /**
     * Gets the disableRedirect property value. Disable Redirect
     * @return bool|null
    */
    public function getDisableRedirect(): ?bool {
        return $this->getBackingStore()->get('disableRedirect');
    }

    /**
     * Gets the enableAlwaysOnConfiguration property value. Determines if Always on VPN is enabled
     * @return bool|null
    */
    public function getEnableAlwaysOnConfiguration(): ?bool {
        return $this->getBackingStore()->get('enableAlwaysOnConfiguration');
    }

    /**
     * Gets the enableCertificateRevocationCheck property value. Enables a best-effort revocation check; server response timeouts will not cause it to fail
     * @return bool|null
    */
    public function getEnableCertificateRevocationCheck(): ?bool {
        return $this->getBackingStore()->get('enableCertificateRevocationCheck');
    }

    /**
     * Gets the enableEAP property value. Enables EAP only authentication
     * @return bool|null
    */
    public function getEnableEAP(): ?bool {
        return $this->getBackingStore()->get('enableEAP');
    }

    /**
     * Gets the enablePerfectForwardSecrecy property value. Enable Perfect Forward Secrecy (PFS).
     * @return bool|null
    */
    public function getEnablePerfectForwardSecrecy(): ?bool {
        return $this->getBackingStore()->get('enablePerfectForwardSecrecy');
    }

    /**
     * Gets the enableUseInternalSubnetAttributes property value. Enable Use Internal Subnet Attributes.
     * @return bool|null
    */
    public function getEnableUseInternalSubnetAttributes(): ?bool {
        return $this->getBackingStore()->get('enableUseInternalSubnetAttributes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowDefaultChildSecurityAssociationParameters' => fn(ParseNode $n) => $o->setAllowDefaultChildSecurityAssociationParameters($n->getBooleanValue()),
            'allowDefaultSecurityAssociationParameters' => fn(ParseNode $n) => $o->setAllowDefaultSecurityAssociationParameters($n->getBooleanValue()),
            'alwaysOnConfiguration' => fn(ParseNode $n) => $o->setAlwaysOnConfiguration($n->getObjectValue([AppleVpnAlwaysOnConfiguration::class, 'createFromDiscriminatorValue'])),
            'childSecurityAssociationParameters' => fn(ParseNode $n) => $o->setChildSecurityAssociationParameters($n->getObjectValue([IosVpnSecurityAssociationParameters::class, 'createFromDiscriminatorValue'])),
            'clientAuthenticationType' => fn(ParseNode $n) => $o->setClientAuthenticationType($n->getEnumValue(VpnClientAuthenticationType::class)),
            'deadPeerDetectionRate' => fn(ParseNode $n) => $o->setDeadPeerDetectionRate($n->getEnumValue(VpnDeadPeerDetectionRate::class)),
            'disableMobilityAndMultihoming' => fn(ParseNode $n) => $o->setDisableMobilityAndMultihoming($n->getBooleanValue()),
            'disableRedirect' => fn(ParseNode $n) => $o->setDisableRedirect($n->getBooleanValue()),
            'enableAlwaysOnConfiguration' => fn(ParseNode $n) => $o->setEnableAlwaysOnConfiguration($n->getBooleanValue()),
            'enableCertificateRevocationCheck' => fn(ParseNode $n) => $o->setEnableCertificateRevocationCheck($n->getBooleanValue()),
            'enableEAP' => fn(ParseNode $n) => $o->setEnableEAP($n->getBooleanValue()),
            'enablePerfectForwardSecrecy' => fn(ParseNode $n) => $o->setEnablePerfectForwardSecrecy($n->getBooleanValue()),
            'enableUseInternalSubnetAttributes' => fn(ParseNode $n) => $o->setEnableUseInternalSubnetAttributes($n->getBooleanValue()),
            'localIdentifier' => fn(ParseNode $n) => $o->setLocalIdentifier($n->getEnumValue(VpnLocalIdentifier::class)),
            'mtuSizeInBytes' => fn(ParseNode $n) => $o->setMtuSizeInBytes($n->getIntegerValue()),
            'remoteIdentifier' => fn(ParseNode $n) => $o->setRemoteIdentifier($n->getStringValue()),
            'securityAssociationParameters' => fn(ParseNode $n) => $o->setSecurityAssociationParameters($n->getObjectValue([IosVpnSecurityAssociationParameters::class, 'createFromDiscriminatorValue'])),
            'serverCertificateCommonName' => fn(ParseNode $n) => $o->setServerCertificateCommonName($n->getStringValue()),
            'serverCertificateIssuerCommonName' => fn(ParseNode $n) => $o->setServerCertificateIssuerCommonName($n->getStringValue()),
            'serverCertificateType' => fn(ParseNode $n) => $o->setServerCertificateType($n->getEnumValue(VpnServerCertificateType::class)),
            'sharedSecret' => fn(ParseNode $n) => $o->setSharedSecret($n->getStringValue()),
            'tlsMaximumVersion' => fn(ParseNode $n) => $o->setTlsMaximumVersion($n->getStringValue()),
            'tlsMinimumVersion' => fn(ParseNode $n) => $o->setTlsMinimumVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the localIdentifier property value. The type of VPN local identifier
     * @return VpnLocalIdentifier|null
    */
    public function getLocalIdentifier(): ?VpnLocalIdentifier {
        return $this->getBackingStore()->get('localIdentifier');
    }

    /**
     * Gets the mtuSizeInBytes property value. Maximum transmission unit. Valid values 1280 to 1400
     * @return int|null
    */
    public function getMtuSizeInBytes(): ?int {
        return $this->getBackingStore()->get('mtuSizeInBytes');
    }

    /**
     * Gets the remoteIdentifier property value. Address of the IKEv2 server. Must be a FQDN, UserFQDN, network address, or ASN1DN
     * @return string|null
    */
    public function getRemoteIdentifier(): ?string {
        return $this->getBackingStore()->get('remoteIdentifier');
    }

    /**
     * Gets the securityAssociationParameters property value. Security Association Parameters
     * @return IosVpnSecurityAssociationParameters|null
    */
    public function getSecurityAssociationParameters(): ?IosVpnSecurityAssociationParameters {
        return $this->getBackingStore()->get('securityAssociationParameters');
    }

    /**
     * Gets the serverCertificateCommonName property value. Common name of the IKEv2 Server Certificate used in Server Authentication
     * @return string|null
    */
    public function getServerCertificateCommonName(): ?string {
        return $this->getBackingStore()->get('serverCertificateCommonName');
    }

    /**
     * Gets the serverCertificateIssuerCommonName property value. Issuer Common name of the IKEv2 Server Certificate issuer used in Authentication
     * @return string|null
    */
    public function getServerCertificateIssuerCommonName(): ?string {
        return $this->getBackingStore()->get('serverCertificateIssuerCommonName');
    }

    /**
     * Gets the serverCertificateType property value. The type of certificate the VPN server will present to the VPN client for authentication. Possible values are: rsa, ecdsa256, ecdsa384, ecdsa521.
     * @return VpnServerCertificateType|null
    */
    public function getServerCertificateType(): ?VpnServerCertificateType {
        return $this->getBackingStore()->get('serverCertificateType');
    }

    /**
     * Gets the sharedSecret property value. Used when Shared Secret Authentication is selected
     * @return string|null
    */
    public function getSharedSecret(): ?string {
        return $this->getBackingStore()->get('sharedSecret');
    }

    /**
     * Gets the tlsMaximumVersion property value. The maximum TLS version to be used with EAP-TLS authentication
     * @return string|null
    */
    public function getTlsMaximumVersion(): ?string {
        return $this->getBackingStore()->get('tlsMaximumVersion');
    }

    /**
     * Gets the tlsMinimumVersion property value. The minimum TLS version to be used with EAP-TLS authentication
     * @return string|null
    */
    public function getTlsMinimumVersion(): ?string {
        return $this->getBackingStore()->get('tlsMinimumVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowDefaultChildSecurityAssociationParameters', $this->getAllowDefaultChildSecurityAssociationParameters());
        $writer->writeBooleanValue('allowDefaultSecurityAssociationParameters', $this->getAllowDefaultSecurityAssociationParameters());
        $writer->writeObjectValue('alwaysOnConfiguration', $this->getAlwaysOnConfiguration());
        $writer->writeObjectValue('childSecurityAssociationParameters', $this->getChildSecurityAssociationParameters());
        $writer->writeEnumValue('clientAuthenticationType', $this->getClientAuthenticationType());
        $writer->writeEnumValue('deadPeerDetectionRate', $this->getDeadPeerDetectionRate());
        $writer->writeBooleanValue('disableMobilityAndMultihoming', $this->getDisableMobilityAndMultihoming());
        $writer->writeBooleanValue('disableRedirect', $this->getDisableRedirect());
        $writer->writeBooleanValue('enableAlwaysOnConfiguration', $this->getEnableAlwaysOnConfiguration());
        $writer->writeBooleanValue('enableCertificateRevocationCheck', $this->getEnableCertificateRevocationCheck());
        $writer->writeBooleanValue('enableEAP', $this->getEnableEAP());
        $writer->writeBooleanValue('enablePerfectForwardSecrecy', $this->getEnablePerfectForwardSecrecy());
        $writer->writeBooleanValue('enableUseInternalSubnetAttributes', $this->getEnableUseInternalSubnetAttributes());
        $writer->writeEnumValue('localIdentifier', $this->getLocalIdentifier());
        $writer->writeIntegerValue('mtuSizeInBytes', $this->getMtuSizeInBytes());
        $writer->writeStringValue('remoteIdentifier', $this->getRemoteIdentifier());
        $writer->writeObjectValue('securityAssociationParameters', $this->getSecurityAssociationParameters());
        $writer->writeStringValue('serverCertificateCommonName', $this->getServerCertificateCommonName());
        $writer->writeStringValue('serverCertificateIssuerCommonName', $this->getServerCertificateIssuerCommonName());
        $writer->writeEnumValue('serverCertificateType', $this->getServerCertificateType());
        $writer->writeStringValue('sharedSecret', $this->getSharedSecret());
        $writer->writeStringValue('tlsMaximumVersion', $this->getTlsMaximumVersion());
        $writer->writeStringValue('tlsMinimumVersion', $this->getTlsMinimumVersion());
    }

    /**
     * Sets the allowDefaultChildSecurityAssociationParameters property value. Allows the use of child security association parameters by setting all parameters to the device's default unless explicitly specified.
     *  @param bool|null $value Value to set for the allowDefaultChildSecurityAssociationParameters property.
    */
    public function setAllowDefaultChildSecurityAssociationParameters(?bool $value): void {
        $this->getBackingStore()->set('allowDefaultChildSecurityAssociationParameters', $value);
    }

    /**
     * Sets the allowDefaultSecurityAssociationParameters property value. Allows the use of security association parameters by setting all parameters to the device's default unless explicitly specified.
     *  @param bool|null $value Value to set for the allowDefaultSecurityAssociationParameters property.
    */
    public function setAllowDefaultSecurityAssociationParameters(?bool $value): void {
        $this->getBackingStore()->set('allowDefaultSecurityAssociationParameters', $value);
    }

    /**
     * Sets the alwaysOnConfiguration property value. AlwaysOn Configuration
     *  @param AppleVpnAlwaysOnConfiguration|null $value Value to set for the alwaysOnConfiguration property.
    */
    public function setAlwaysOnConfiguration(?AppleVpnAlwaysOnConfiguration $value): void {
        $this->getBackingStore()->set('alwaysOnConfiguration', $value);
    }

    /**
     * Sets the childSecurityAssociationParameters property value. Child Security Association Parameters
     *  @param IosVpnSecurityAssociationParameters|null $value Value to set for the childSecurityAssociationParameters property.
    */
    public function setChildSecurityAssociationParameters(?IosVpnSecurityAssociationParameters $value): void {
        $this->getBackingStore()->set('childSecurityAssociationParameters', $value);
    }

    /**
     * Sets the clientAuthenticationType property value. The type of VPN client authentication type
     *  @param VpnClientAuthenticationType|null $value Value to set for the clientAuthenticationType property.
    */
    public function setClientAuthenticationType(?VpnClientAuthenticationType $value): void {
        $this->getBackingStore()->set('clientAuthenticationType', $value);
    }

    /**
     * Sets the deadPeerDetectionRate property value. Determine how often to check if a peer connection is still active. . Possible values are: medium, none, low, high.
     *  @param VpnDeadPeerDetectionRate|null $value Value to set for the deadPeerDetectionRate property.
    */
    public function setDeadPeerDetectionRate(?VpnDeadPeerDetectionRate $value): void {
        $this->getBackingStore()->set('deadPeerDetectionRate', $value);
    }

    /**
     * Sets the disableMobilityAndMultihoming property value. Disable MOBIKE
     *  @param bool|null $value Value to set for the disableMobilityAndMultihoming property.
    */
    public function setDisableMobilityAndMultihoming(?bool $value): void {
        $this->getBackingStore()->set('disableMobilityAndMultihoming', $value);
    }

    /**
     * Sets the disableRedirect property value. Disable Redirect
     *  @param bool|null $value Value to set for the disableRedirect property.
    */
    public function setDisableRedirect(?bool $value): void {
        $this->getBackingStore()->set('disableRedirect', $value);
    }

    /**
     * Sets the enableAlwaysOnConfiguration property value. Determines if Always on VPN is enabled
     *  @param bool|null $value Value to set for the enableAlwaysOnConfiguration property.
    */
    public function setEnableAlwaysOnConfiguration(?bool $value): void {
        $this->getBackingStore()->set('enableAlwaysOnConfiguration', $value);
    }

    /**
     * Sets the enableCertificateRevocationCheck property value. Enables a best-effort revocation check; server response timeouts will not cause it to fail
     *  @param bool|null $value Value to set for the enableCertificateRevocationCheck property.
    */
    public function setEnableCertificateRevocationCheck(?bool $value): void {
        $this->getBackingStore()->set('enableCertificateRevocationCheck', $value);
    }

    /**
     * Sets the enableEAP property value. Enables EAP only authentication
     *  @param bool|null $value Value to set for the enableEAP property.
    */
    public function setEnableEAP(?bool $value): void {
        $this->getBackingStore()->set('enableEAP', $value);
    }

    /**
     * Sets the enablePerfectForwardSecrecy property value. Enable Perfect Forward Secrecy (PFS).
     *  @param bool|null $value Value to set for the enablePerfectForwardSecrecy property.
    */
    public function setEnablePerfectForwardSecrecy(?bool $value): void {
        $this->getBackingStore()->set('enablePerfectForwardSecrecy', $value);
    }

    /**
     * Sets the enableUseInternalSubnetAttributes property value. Enable Use Internal Subnet Attributes.
     *  @param bool|null $value Value to set for the enableUseInternalSubnetAttributes property.
    */
    public function setEnableUseInternalSubnetAttributes(?bool $value): void {
        $this->getBackingStore()->set('enableUseInternalSubnetAttributes', $value);
    }

    /**
     * Sets the localIdentifier property value. The type of VPN local identifier
     *  @param VpnLocalIdentifier|null $value Value to set for the localIdentifier property.
    */
    public function setLocalIdentifier(?VpnLocalIdentifier $value): void {
        $this->getBackingStore()->set('localIdentifier', $value);
    }

    /**
     * Sets the mtuSizeInBytes property value. Maximum transmission unit. Valid values 1280 to 1400
     *  @param int|null $value Value to set for the mtuSizeInBytes property.
    */
    public function setMtuSizeInBytes(?int $value): void {
        $this->getBackingStore()->set('mtuSizeInBytes', $value);
    }

    /**
     * Sets the remoteIdentifier property value. Address of the IKEv2 server. Must be a FQDN, UserFQDN, network address, or ASN1DN
     *  @param string|null $value Value to set for the remoteIdentifier property.
    */
    public function setRemoteIdentifier(?string $value): void {
        $this->getBackingStore()->set('remoteIdentifier', $value);
    }

    /**
     * Sets the securityAssociationParameters property value. Security Association Parameters
     *  @param IosVpnSecurityAssociationParameters|null $value Value to set for the securityAssociationParameters property.
    */
    public function setSecurityAssociationParameters(?IosVpnSecurityAssociationParameters $value): void {
        $this->getBackingStore()->set('securityAssociationParameters', $value);
    }

    /**
     * Sets the serverCertificateCommonName property value. Common name of the IKEv2 Server Certificate used in Server Authentication
     *  @param string|null $value Value to set for the serverCertificateCommonName property.
    */
    public function setServerCertificateCommonName(?string $value): void {
        $this->getBackingStore()->set('serverCertificateCommonName', $value);
    }

    /**
     * Sets the serverCertificateIssuerCommonName property value. Issuer Common name of the IKEv2 Server Certificate issuer used in Authentication
     *  @param string|null $value Value to set for the serverCertificateIssuerCommonName property.
    */
    public function setServerCertificateIssuerCommonName(?string $value): void {
        $this->getBackingStore()->set('serverCertificateIssuerCommonName', $value);
    }

    /**
     * Sets the serverCertificateType property value. The type of certificate the VPN server will present to the VPN client for authentication. Possible values are: rsa, ecdsa256, ecdsa384, ecdsa521.
     *  @param VpnServerCertificateType|null $value Value to set for the serverCertificateType property.
    */
    public function setServerCertificateType(?VpnServerCertificateType $value): void {
        $this->getBackingStore()->set('serverCertificateType', $value);
    }

    /**
     * Sets the sharedSecret property value. Used when Shared Secret Authentication is selected
     *  @param string|null $value Value to set for the sharedSecret property.
    */
    public function setSharedSecret(?string $value): void {
        $this->getBackingStore()->set('sharedSecret', $value);
    }

    /**
     * Sets the tlsMaximumVersion property value. The maximum TLS version to be used with EAP-TLS authentication
     *  @param string|null $value Value to set for the tlsMaximumVersion property.
    */
    public function setTlsMaximumVersion(?string $value): void {
        $this->getBackingStore()->set('tlsMaximumVersion', $value);
    }

    /**
     * Sets the tlsMinimumVersion property value. The minimum TLS version to be used with EAP-TLS authentication
     *  @param string|null $value Value to set for the tlsMinimumVersion property.
    */
    public function setTlsMinimumVersion(?string $value): void {
        $this->getBackingStore()->set('tlsMinimumVersion', $value);
    }

}
