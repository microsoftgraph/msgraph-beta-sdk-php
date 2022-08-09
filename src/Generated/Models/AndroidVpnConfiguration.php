<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidVpnConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var VpnAuthenticationMethod|null $authenticationMethod VPN Authentication Method.
    */
    private ?VpnAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var string|null $connectionName Connection name displayed to the user.
    */
    private ?string $connectionName = null;
    
    /**
     * @var AndroidVpnConnectionType|null $connectionType Android VPN connection type.
    */
    private ?AndroidVpnConnectionType $connectionType = null;
    
    /**
     * @var array<KeyValue>|null $customData Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    */
    private ?array $customData = null;
    
    /**
     * @var array<KeyValuePair>|null $customKeyValueData Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    */
    private ?array $customKeyValueData = null;
    
    /**
     * @var string|null $fingerprint Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
    */
    private ?string $fingerprint = null;
    
    /**
     * @var AndroidCertificateProfileBase|null $identityCertificate Identity certificate for client authentication when authentication method is certificate.
    */
    private ?AndroidCertificateProfileBase $identityCertificate = null;
    
    /**
     * @var string|null $realm Realm when connection type is set to Pulse Secure.
    */
    private ?string $realm = null;
    
    /**
     * @var string|null $role Role when connection type is set to Pulse Secure.
    */
    private ?string $role = null;
    
    /**
     * @var array<VpnServer>|null $servers List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
    */
    private ?array $servers = null;
    
    /**
     * Instantiates a new AndroidVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidVpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidVpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidVpnConfiguration {
        return new AndroidVpnConfiguration();
    }

    /**
     * Gets the authenticationMethod property value. VPN Authentication Method.
     * @return VpnAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?VpnAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the connectionName property value. Connection name displayed to the user.
     * @return string|null
    */
    public function getConnectionName(): ?string {
        return $this->connectionName;
    }

    /**
     * Gets the connectionType property value. Android VPN connection type.
     * @return AndroidVpnConnectionType|null
    */
    public function getConnectionType(): ?AndroidVpnConnectionType {
        return $this->connectionType;
    }

    /**
     * Gets the customData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     * @return array<KeyValue>|null
    */
    public function getCustomData(): ?array {
        return $this->customData;
    }

    /**
     * Gets the customKeyValueData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     * @return array<KeyValuePair>|null
    */
    public function getCustomKeyValueData(): ?array {
        return $this->customKeyValueData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(VpnAuthenticationMethod::class)); },
            'connectionName' => function (ParseNode $n) use ($o) { $o->setConnectionName($n->getStringValue()); },
            'connectionType' => function (ParseNode $n) use ($o) { $o->setConnectionType($n->getEnumValue(AndroidVpnConnectionType::class)); },
            'customData' => function (ParseNode $n) use ($o) { $o->setCustomData($n->getCollectionOfObjectValues(array(KeyValue::class, 'createFromDiscriminatorValue'))); },
            'customKeyValueData' => function (ParseNode $n) use ($o) { $o->setCustomKeyValueData($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'fingerprint' => function (ParseNode $n) use ($o) { $o->setFingerprint($n->getStringValue()); },
            'identityCertificate' => function (ParseNode $n) use ($o) { $o->setIdentityCertificate($n->getObjectValue(array(AndroidCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'realm' => function (ParseNode $n) use ($o) { $o->setRealm($n->getStringValue()); },
            'role' => function (ParseNode $n) use ($o) { $o->setRole($n->getStringValue()); },
            'servers' => function (ParseNode $n) use ($o) { $o->setServers($n->getCollectionOfObjectValues(array(VpnServer::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the fingerprint property value. Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
     * @return string|null
    */
    public function getFingerprint(): ?string {
        return $this->fingerprint;
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return AndroidCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?AndroidCertificateProfileBase {
        return $this->identityCertificate;
    }

    /**
     * Gets the realm property value. Realm when connection type is set to Pulse Secure.
     * @return string|null
    */
    public function getRealm(): ?string {
        return $this->realm;
    }

    /**
     * Gets the role property value. Role when connection type is set to Pulse Secure.
     * @return string|null
    */
    public function getRole(): ?string {
        return $this->role;
    }

    /**
     * Gets the servers property value. List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     * @return array<VpnServer>|null
    */
    public function getServers(): ?array {
        return $this->servers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeStringValue('connectionName', $this->connectionName);
        $writer->writeEnumValue('connectionType', $this->connectionType);
        $writer->writeCollectionOfObjectValues('customData', $this->customData);
        $writer->writeCollectionOfObjectValues('customKeyValueData', $this->customKeyValueData);
        $writer->writeStringValue('fingerprint', $this->fingerprint);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
        $writer->writeStringValue('realm', $this->realm);
        $writer->writeStringValue('role', $this->role);
        $writer->writeCollectionOfObjectValues('servers', $this->servers);
    }

    /**
     * Sets the authenticationMethod property value. VPN Authentication Method.
     *  @param VpnAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?VpnAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the connectionName property value. Connection name displayed to the user.
     *  @param string|null $value Value to set for the connectionName property.
    */
    public function setConnectionName(?string $value ): void {
        $this->connectionName = $value;
    }

    /**
     * Sets the connectionType property value. Android VPN connection type.
     *  @param AndroidVpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?AndroidVpnConnectionType $value ): void {
        $this->connectionType = $value;
    }

    /**
     * Sets the customData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValue>|null $value Value to set for the customData property.
    */
    public function setCustomData(?array $value ): void {
        $this->customData = $value;
    }

    /**
     * Sets the customKeyValueData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValuePair>|null $value Value to set for the customKeyValueData property.
    */
    public function setCustomKeyValueData(?array $value ): void {
        $this->customKeyValueData = $value;
    }

    /**
     * Sets the fingerprint property value. Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
     *  @param string|null $value Value to set for the fingerprint property.
    */
    public function setFingerprint(?string $value ): void {
        $this->fingerprint = $value;
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     *  @param AndroidCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?AndroidCertificateProfileBase $value ): void {
        $this->identityCertificate = $value;
    }

    /**
     * Sets the realm property value. Realm when connection type is set to Pulse Secure.
     *  @param string|null $value Value to set for the realm property.
    */
    public function setRealm(?string $value ): void {
        $this->realm = $value;
    }

    /**
     * Sets the role property value. Role when connection type is set to Pulse Secure.
     *  @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value ): void {
        $this->role = $value;
    }

    /**
     * Sets the servers property value. List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     *  @param array<VpnServer>|null $value Value to set for the servers property.
    */
    public function setServers(?array $value ): void {
        $this->servers = $value;
    }

}
