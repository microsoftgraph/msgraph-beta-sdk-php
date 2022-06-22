<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosikEv2VpnConfiguration extends IosVpnConfiguration implements Parsable 
{
    /**
     * @var bool|null $allowDefaultChildSecurityAssociationParameters Allows the use of child security association parameters by setting all parameters to the device's default unless explicitly specified.
    */
    private ?bool $allowDefaultChildSecurityAssociationParameters = null;
    
    /**
     * @var bool|null $allowDefaultSecurityAssociationParameters Allows the use of security association parameters by setting all parameters to the device's default unless explicitly specified.
    */
    private ?bool $allowDefaultSecurityAssociationParameters = null;
    
    /**
     * @var AppleVpnAlwaysOnConfiguration|null $alwaysOnConfiguration AlwaysOn Configuration
    */
    private ?AppleVpnAlwaysOnConfiguration $alwaysOnConfiguration = null;
    
    /**
     * @var IosVpnSecurityAssociationParameters|null $childSecurityAssociationParameters Child Security Association Parameters
    */
    private ?IosVpnSecurityAssociationParameters $childSecurityAssociationParameters = null;
    
    /**
     * @var VpnClientAuthenticationType|null $clientAuthenticationType Type of Client Authentication the VPN client will use. Possible values are: userAuthentication, deviceAuthentication.
    */
    private ?VpnClientAuthenticationType $clientAuthenticationType = null;
    
    /**
     * @var VpnDeadPeerDetectionRate|null $deadPeerDetectionRate Determine how often to check if a peer connection is still active. . Possible values are: medium, none, low, high.
    */
    private ?VpnDeadPeerDetectionRate $deadPeerDetectionRate = null;
    
    /**
     * @var bool|null $disableMobilityAndMultihoming Disable MOBIKE
    */
    private ?bool $disableMobilityAndMultihoming = null;
    
    /**
     * @var bool|null $disableRedirect Disable Redirect
    */
    private ?bool $disableRedirect = null;
    
    /**
     * @var bool|null $enableAlwaysOnConfiguration Determines if Always on VPN is enabled
    */
    private ?bool $enableAlwaysOnConfiguration = null;
    
    /**
     * @var bool|null $enableCertificateRevocationCheck Enables a best-effort revocation check; server response timeouts will not cause it to fail
    */
    private ?bool $enableCertificateRevocationCheck = null;
    
    /**
     * @var bool|null $enableEAP Enables EAP only authentication
    */
    private ?bool $enableEAP = null;
    
    /**
     * @var bool|null $enablePerfectForwardSecrecy Enable Perfect Forward Secrecy (PFS).
    */
    private ?bool $enablePerfectForwardSecrecy = null;
    
    /**
     * @var bool|null $enableUseInternalSubnetAttributes Enable Use Internal Subnet Attributes.
    */
    private ?bool $enableUseInternalSubnetAttributes = null;
    
    /**
     * @var VpnLocalIdentifier|null $localIdentifier Method of identifying the client that is trying to connect via VPN. . Possible values are: deviceFQDN, empty, clientCertificateSubjectName.
    */
    private ?VpnLocalIdentifier $localIdentifier = null;
    
    /**
     * @var int|null $mtuSizeInBytes Maximum transmission unit. Valid values 1280 to 1400
    */
    private ?int $mtuSizeInBytes = null;
    
    /**
     * @var string|null $remoteIdentifier Address of the IKEv2 server. Must be a FQDN, UserFQDN, network address, or ASN1DN
    */
    private ?string $remoteIdentifier = null;
    
    /**
     * @var IosVpnSecurityAssociationParameters|null $securityAssociationParameters Security Association Parameters
    */
    private ?IosVpnSecurityAssociationParameters $securityAssociationParameters = null;
    
    /**
     * @var string|null $serverCertificateCommonName Common name of the IKEv2 Server Certificate used in Server Authentication
    */
    private ?string $serverCertificateCommonName = null;
    
    /**
     * @var string|null $serverCertificateIssuerCommonName Issuer Common name of the IKEv2 Server Certificate issuer used in Authentication
    */
    private ?string $serverCertificateIssuerCommonName = null;
    
    /**
     * @var VpnServerCertificateType|null $serverCertificateType The type of certificate the VPN server will present to the VPN client for authentication. Possible values are: rsa, ecdsa256, ecdsa384, ecdsa521.
    */
    private ?VpnServerCertificateType $serverCertificateType = null;
    
    /**
     * @var string|null $sharedSecret Used when Shared Secret Authentication is selected
    */
    private ?string $sharedSecret = null;
    
    /**
     * @var string|null $tlsMaximumVersion The maximum TLS version to be used with EAP-TLS authentication
    */
    private ?string $tlsMaximumVersion = null;
    
    /**
     * @var string|null $tlsMinimumVersion The minimum TLS version to be used with EAP-TLS authentication
    */
    private ?string $tlsMinimumVersion = null;
    
    /**
     * Instantiates a new IosikEv2VpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->allowDefaultChildSecurityAssociationParameters;
    }

    /**
     * Gets the allowDefaultSecurityAssociationParameters property value. Allows the use of security association parameters by setting all parameters to the device's default unless explicitly specified.
     * @return bool|null
    */
    public function getAllowDefaultSecurityAssociationParameters(): ?bool {
        return $this->allowDefaultSecurityAssociationParameters;
    }

    /**
     * Gets the alwaysOnConfiguration property value. AlwaysOn Configuration
     * @return AppleVpnAlwaysOnConfiguration|null
    */
    public function getAlwaysOnConfiguration(): ?AppleVpnAlwaysOnConfiguration {
        return $this->alwaysOnConfiguration;
    }

    /**
     * Gets the childSecurityAssociationParameters property value. Child Security Association Parameters
     * @return IosVpnSecurityAssociationParameters|null
    */
    public function getChildSecurityAssociationParameters(): ?IosVpnSecurityAssociationParameters {
        return $this->childSecurityAssociationParameters;
    }

    /**
     * Gets the clientAuthenticationType property value. Type of Client Authentication the VPN client will use. Possible values are: userAuthentication, deviceAuthentication.
     * @return VpnClientAuthenticationType|null
    */
    public function getClientAuthenticationType(): ?VpnClientAuthenticationType {
        return $this->clientAuthenticationType;
    }

    /**
     * Gets the deadPeerDetectionRate property value. Determine how often to check if a peer connection is still active. . Possible values are: medium, none, low, high.
     * @return VpnDeadPeerDetectionRate|null
    */
    public function getDeadPeerDetectionRate(): ?VpnDeadPeerDetectionRate {
        return $this->deadPeerDetectionRate;
    }

    /**
     * Gets the disableMobilityAndMultihoming property value. Disable MOBIKE
     * @return bool|null
    */
    public function getDisableMobilityAndMultihoming(): ?bool {
        return $this->disableMobilityAndMultihoming;
    }

    /**
     * Gets the disableRedirect property value. Disable Redirect
     * @return bool|null
    */
    public function getDisableRedirect(): ?bool {
        return $this->disableRedirect;
    }

    /**
     * Gets the enableAlwaysOnConfiguration property value. Determines if Always on VPN is enabled
     * @return bool|null
    */
    public function getEnableAlwaysOnConfiguration(): ?bool {
        return $this->enableAlwaysOnConfiguration;
    }

    /**
     * Gets the enableCertificateRevocationCheck property value. Enables a best-effort revocation check; server response timeouts will not cause it to fail
     * @return bool|null
    */
    public function getEnableCertificateRevocationCheck(): ?bool {
        return $this->enableCertificateRevocationCheck;
    }

    /**
     * Gets the enableEAP property value. Enables EAP only authentication
     * @return bool|null
    */
    public function getEnableEAP(): ?bool {
        return $this->enableEAP;
    }

    /**
     * Gets the enablePerfectForwardSecrecy property value. Enable Perfect Forward Secrecy (PFS).
     * @return bool|null
    */
    public function getEnablePerfectForwardSecrecy(): ?bool {
        return $this->enablePerfectForwardSecrecy;
    }

    /**
     * Gets the enableUseInternalSubnetAttributes property value. Enable Use Internal Subnet Attributes.
     * @return bool|null
    */
    public function getEnableUseInternalSubnetAttributes(): ?bool {
        return $this->enableUseInternalSubnetAttributes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowDefaultChildSecurityAssociationParameters' => function (ParseNode $n) use ($o) { $o->setAllowDefaultChildSecurityAssociationParameters($n->getBooleanValue()); },
            'allowDefaultSecurityAssociationParameters' => function (ParseNode $n) use ($o) { $o->setAllowDefaultSecurityAssociationParameters($n->getBooleanValue()); },
            'alwaysOnConfiguration' => function (ParseNode $n) use ($o) { $o->setAlwaysOnConfiguration($n->getObjectValue(array(AppleVpnAlwaysOnConfiguration::class, 'createFromDiscriminatorValue'))); },
            'childSecurityAssociationParameters' => function (ParseNode $n) use ($o) { $o->setChildSecurityAssociationParameters($n->getObjectValue(array(IosVpnSecurityAssociationParameters::class, 'createFromDiscriminatorValue'))); },
            'clientAuthenticationType' => function (ParseNode $n) use ($o) { $o->setClientAuthenticationType($n->getEnumValue(VpnClientAuthenticationType::class)); },
            'deadPeerDetectionRate' => function (ParseNode $n) use ($o) { $o->setDeadPeerDetectionRate($n->getEnumValue(VpnDeadPeerDetectionRate::class)); },
            'disableMobilityAndMultihoming' => function (ParseNode $n) use ($o) { $o->setDisableMobilityAndMultihoming($n->getBooleanValue()); },
            'disableRedirect' => function (ParseNode $n) use ($o) { $o->setDisableRedirect($n->getBooleanValue()); },
            'enableAlwaysOnConfiguration' => function (ParseNode $n) use ($o) { $o->setEnableAlwaysOnConfiguration($n->getBooleanValue()); },
            'enableCertificateRevocationCheck' => function (ParseNode $n) use ($o) { $o->setEnableCertificateRevocationCheck($n->getBooleanValue()); },
            'enableEAP' => function (ParseNode $n) use ($o) { $o->setEnableEAP($n->getBooleanValue()); },
            'enablePerfectForwardSecrecy' => function (ParseNode $n) use ($o) { $o->setEnablePerfectForwardSecrecy($n->getBooleanValue()); },
            'enableUseInternalSubnetAttributes' => function (ParseNode $n) use ($o) { $o->setEnableUseInternalSubnetAttributes($n->getBooleanValue()); },
            'localIdentifier' => function (ParseNode $n) use ($o) { $o->setLocalIdentifier($n->getEnumValue(VpnLocalIdentifier::class)); },
            'mtuSizeInBytes' => function (ParseNode $n) use ($o) { $o->setMtuSizeInBytes($n->getIntegerValue()); },
            'remoteIdentifier' => function (ParseNode $n) use ($o) { $o->setRemoteIdentifier($n->getStringValue()); },
            'securityAssociationParameters' => function (ParseNode $n) use ($o) { $o->setSecurityAssociationParameters($n->getObjectValue(array(IosVpnSecurityAssociationParameters::class, 'createFromDiscriminatorValue'))); },
            'serverCertificateCommonName' => function (ParseNode $n) use ($o) { $o->setServerCertificateCommonName($n->getStringValue()); },
            'serverCertificateIssuerCommonName' => function (ParseNode $n) use ($o) { $o->setServerCertificateIssuerCommonName($n->getStringValue()); },
            'serverCertificateType' => function (ParseNode $n) use ($o) { $o->setServerCertificateType($n->getEnumValue(VpnServerCertificateType::class)); },
            'sharedSecret' => function (ParseNode $n) use ($o) { $o->setSharedSecret($n->getStringValue()); },
            'tlsMaximumVersion' => function (ParseNode $n) use ($o) { $o->setTlsMaximumVersion($n->getStringValue()); },
            'tlsMinimumVersion' => function (ParseNode $n) use ($o) { $o->setTlsMinimumVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the localIdentifier property value. Method of identifying the client that is trying to connect via VPN. . Possible values are: deviceFQDN, empty, clientCertificateSubjectName.
     * @return VpnLocalIdentifier|null
    */
    public function getLocalIdentifier(): ?VpnLocalIdentifier {
        return $this->localIdentifier;
    }

    /**
     * Gets the mtuSizeInBytes property value. Maximum transmission unit. Valid values 1280 to 1400
     * @return int|null
    */
    public function getMtuSizeInBytes(): ?int {
        return $this->mtuSizeInBytes;
    }

    /**
     * Gets the remoteIdentifier property value. Address of the IKEv2 server. Must be a FQDN, UserFQDN, network address, or ASN1DN
     * @return string|null
    */
    public function getRemoteIdentifier(): ?string {
        return $this->remoteIdentifier;
    }

    /**
     * Gets the securityAssociationParameters property value. Security Association Parameters
     * @return IosVpnSecurityAssociationParameters|null
    */
    public function getSecurityAssociationParameters(): ?IosVpnSecurityAssociationParameters {
        return $this->securityAssociationParameters;
    }

    /**
     * Gets the serverCertificateCommonName property value. Common name of the IKEv2 Server Certificate used in Server Authentication
     * @return string|null
    */
    public function getServerCertificateCommonName(): ?string {
        return $this->serverCertificateCommonName;
    }

    /**
     * Gets the serverCertificateIssuerCommonName property value. Issuer Common name of the IKEv2 Server Certificate issuer used in Authentication
     * @return string|null
    */
    public function getServerCertificateIssuerCommonName(): ?string {
        return $this->serverCertificateIssuerCommonName;
    }

    /**
     * Gets the serverCertificateType property value. The type of certificate the VPN server will present to the VPN client for authentication. Possible values are: rsa, ecdsa256, ecdsa384, ecdsa521.
     * @return VpnServerCertificateType|null
    */
    public function getServerCertificateType(): ?VpnServerCertificateType {
        return $this->serverCertificateType;
    }

    /**
     * Gets the sharedSecret property value. Used when Shared Secret Authentication is selected
     * @return string|null
    */
    public function getSharedSecret(): ?string {
        return $this->sharedSecret;
    }

    /**
     * Gets the tlsMaximumVersion property value. The maximum TLS version to be used with EAP-TLS authentication
     * @return string|null
    */
    public function getTlsMaximumVersion(): ?string {
        return $this->tlsMaximumVersion;
    }

    /**
     * Gets the tlsMinimumVersion property value. The minimum TLS version to be used with EAP-TLS authentication
     * @return string|null
    */
    public function getTlsMinimumVersion(): ?string {
        return $this->tlsMinimumVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowDefaultChildSecurityAssociationParameters', $this->allowDefaultChildSecurityAssociationParameters);
        $writer->writeBooleanValue('allowDefaultSecurityAssociationParameters', $this->allowDefaultSecurityAssociationParameters);
        $writer->writeObjectValue('alwaysOnConfiguration', $this->alwaysOnConfiguration);
        $writer->writeObjectValue('childSecurityAssociationParameters', $this->childSecurityAssociationParameters);
        $writer->writeEnumValue('clientAuthenticationType', $this->clientAuthenticationType);
        $writer->writeEnumValue('deadPeerDetectionRate', $this->deadPeerDetectionRate);
        $writer->writeBooleanValue('disableMobilityAndMultihoming', $this->disableMobilityAndMultihoming);
        $writer->writeBooleanValue('disableRedirect', $this->disableRedirect);
        $writer->writeBooleanValue('enableAlwaysOnConfiguration', $this->enableAlwaysOnConfiguration);
        $writer->writeBooleanValue('enableCertificateRevocationCheck', $this->enableCertificateRevocationCheck);
        $writer->writeBooleanValue('enableEAP', $this->enableEAP);
        $writer->writeBooleanValue('enablePerfectForwardSecrecy', $this->enablePerfectForwardSecrecy);
        $writer->writeBooleanValue('enableUseInternalSubnetAttributes', $this->enableUseInternalSubnetAttributes);
        $writer->writeEnumValue('localIdentifier', $this->localIdentifier);
        $writer->writeIntegerValue('mtuSizeInBytes', $this->mtuSizeInBytes);
        $writer->writeStringValue('remoteIdentifier', $this->remoteIdentifier);
        $writer->writeObjectValue('securityAssociationParameters', $this->securityAssociationParameters);
        $writer->writeStringValue('serverCertificateCommonName', $this->serverCertificateCommonName);
        $writer->writeStringValue('serverCertificateIssuerCommonName', $this->serverCertificateIssuerCommonName);
        $writer->writeEnumValue('serverCertificateType', $this->serverCertificateType);
        $writer->writeStringValue('sharedSecret', $this->sharedSecret);
        $writer->writeStringValue('tlsMaximumVersion', $this->tlsMaximumVersion);
        $writer->writeStringValue('tlsMinimumVersion', $this->tlsMinimumVersion);
    }

    /**
     * Sets the allowDefaultChildSecurityAssociationParameters property value. Allows the use of child security association parameters by setting all parameters to the device's default unless explicitly specified.
     *  @param bool|null $value Value to set for the allowDefaultChildSecurityAssociationParameters property.
    */
    public function setAllowDefaultChildSecurityAssociationParameters(?bool $value ): void {
        $this->allowDefaultChildSecurityAssociationParameters = $value;
    }

    /**
     * Sets the allowDefaultSecurityAssociationParameters property value. Allows the use of security association parameters by setting all parameters to the device's default unless explicitly specified.
     *  @param bool|null $value Value to set for the allowDefaultSecurityAssociationParameters property.
    */
    public function setAllowDefaultSecurityAssociationParameters(?bool $value ): void {
        $this->allowDefaultSecurityAssociationParameters = $value;
    }

    /**
     * Sets the alwaysOnConfiguration property value. AlwaysOn Configuration
     *  @param AppleVpnAlwaysOnConfiguration|null $value Value to set for the alwaysOnConfiguration property.
    */
    public function setAlwaysOnConfiguration(?AppleVpnAlwaysOnConfiguration $value ): void {
        $this->alwaysOnConfiguration = $value;
    }

    /**
     * Sets the childSecurityAssociationParameters property value. Child Security Association Parameters
     *  @param IosVpnSecurityAssociationParameters|null $value Value to set for the childSecurityAssociationParameters property.
    */
    public function setChildSecurityAssociationParameters(?IosVpnSecurityAssociationParameters $value ): void {
        $this->childSecurityAssociationParameters = $value;
    }

    /**
     * Sets the clientAuthenticationType property value. Type of Client Authentication the VPN client will use. Possible values are: userAuthentication, deviceAuthentication.
     *  @param VpnClientAuthenticationType|null $value Value to set for the clientAuthenticationType property.
    */
    public function setClientAuthenticationType(?VpnClientAuthenticationType $value ): void {
        $this->clientAuthenticationType = $value;
    }

    /**
     * Sets the deadPeerDetectionRate property value. Determine how often to check if a peer connection is still active. . Possible values are: medium, none, low, high.
     *  @param VpnDeadPeerDetectionRate|null $value Value to set for the deadPeerDetectionRate property.
    */
    public function setDeadPeerDetectionRate(?VpnDeadPeerDetectionRate $value ): void {
        $this->deadPeerDetectionRate = $value;
    }

    /**
     * Sets the disableMobilityAndMultihoming property value. Disable MOBIKE
     *  @param bool|null $value Value to set for the disableMobilityAndMultihoming property.
    */
    public function setDisableMobilityAndMultihoming(?bool $value ): void {
        $this->disableMobilityAndMultihoming = $value;
    }

    /**
     * Sets the disableRedirect property value. Disable Redirect
     *  @param bool|null $value Value to set for the disableRedirect property.
    */
    public function setDisableRedirect(?bool $value ): void {
        $this->disableRedirect = $value;
    }

    /**
     * Sets the enableAlwaysOnConfiguration property value. Determines if Always on VPN is enabled
     *  @param bool|null $value Value to set for the enableAlwaysOnConfiguration property.
    */
    public function setEnableAlwaysOnConfiguration(?bool $value ): void {
        $this->enableAlwaysOnConfiguration = $value;
    }

    /**
     * Sets the enableCertificateRevocationCheck property value. Enables a best-effort revocation check; server response timeouts will not cause it to fail
     *  @param bool|null $value Value to set for the enableCertificateRevocationCheck property.
    */
    public function setEnableCertificateRevocationCheck(?bool $value ): void {
        $this->enableCertificateRevocationCheck = $value;
    }

    /**
     * Sets the enableEAP property value. Enables EAP only authentication
     *  @param bool|null $value Value to set for the enableEAP property.
    */
    public function setEnableEAP(?bool $value ): void {
        $this->enableEAP = $value;
    }

    /**
     * Sets the enablePerfectForwardSecrecy property value. Enable Perfect Forward Secrecy (PFS).
     *  @param bool|null $value Value to set for the enablePerfectForwardSecrecy property.
    */
    public function setEnablePerfectForwardSecrecy(?bool $value ): void {
        $this->enablePerfectForwardSecrecy = $value;
    }

    /**
     * Sets the enableUseInternalSubnetAttributes property value. Enable Use Internal Subnet Attributes.
     *  @param bool|null $value Value to set for the enableUseInternalSubnetAttributes property.
    */
    public function setEnableUseInternalSubnetAttributes(?bool $value ): void {
        $this->enableUseInternalSubnetAttributes = $value;
    }

    /**
     * Sets the localIdentifier property value. Method of identifying the client that is trying to connect via VPN. . Possible values are: deviceFQDN, empty, clientCertificateSubjectName.
     *  @param VpnLocalIdentifier|null $value Value to set for the localIdentifier property.
    */
    public function setLocalIdentifier(?VpnLocalIdentifier $value ): void {
        $this->localIdentifier = $value;
    }

    /**
     * Sets the mtuSizeInBytes property value. Maximum transmission unit. Valid values 1280 to 1400
     *  @param int|null $value Value to set for the mtuSizeInBytes property.
    */
    public function setMtuSizeInBytes(?int $value ): void {
        $this->mtuSizeInBytes = $value;
    }

    /**
     * Sets the remoteIdentifier property value. Address of the IKEv2 server. Must be a FQDN, UserFQDN, network address, or ASN1DN
     *  @param string|null $value Value to set for the remoteIdentifier property.
    */
    public function setRemoteIdentifier(?string $value ): void {
        $this->remoteIdentifier = $value;
    }

    /**
     * Sets the securityAssociationParameters property value. Security Association Parameters
     *  @param IosVpnSecurityAssociationParameters|null $value Value to set for the securityAssociationParameters property.
    */
    public function setSecurityAssociationParameters(?IosVpnSecurityAssociationParameters $value ): void {
        $this->securityAssociationParameters = $value;
    }

    /**
     * Sets the serverCertificateCommonName property value. Common name of the IKEv2 Server Certificate used in Server Authentication
     *  @param string|null $value Value to set for the serverCertificateCommonName property.
    */
    public function setServerCertificateCommonName(?string $value ): void {
        $this->serverCertificateCommonName = $value;
    }

    /**
     * Sets the serverCertificateIssuerCommonName property value. Issuer Common name of the IKEv2 Server Certificate issuer used in Authentication
     *  @param string|null $value Value to set for the serverCertificateIssuerCommonName property.
    */
    public function setServerCertificateIssuerCommonName(?string $value ): void {
        $this->serverCertificateIssuerCommonName = $value;
    }

    /**
     * Sets the serverCertificateType property value. The type of certificate the VPN server will present to the VPN client for authentication. Possible values are: rsa, ecdsa256, ecdsa384, ecdsa521.
     *  @param VpnServerCertificateType|null $value Value to set for the serverCertificateType property.
    */
    public function setServerCertificateType(?VpnServerCertificateType $value ): void {
        $this->serverCertificateType = $value;
    }

    /**
     * Sets the sharedSecret property value. Used when Shared Secret Authentication is selected
     *  @param string|null $value Value to set for the sharedSecret property.
    */
    public function setSharedSecret(?string $value ): void {
        $this->sharedSecret = $value;
    }

    /**
     * Sets the tlsMaximumVersion property value. The maximum TLS version to be used with EAP-TLS authentication
     *  @param string|null $value Value to set for the tlsMaximumVersion property.
    */
    public function setTlsMaximumVersion(?string $value ): void {
        $this->tlsMaximumVersion = $value;
    }

    /**
     * Sets the tlsMinimumVersion property value. The minimum TLS version to be used with EAP-TLS authentication
     *  @param string|null $value Value to set for the tlsMinimumVersion property.
    */
    public function setTlsMinimumVersion(?string $value ): void {
        $this->tlsMinimumVersion = $value;
    }

}
