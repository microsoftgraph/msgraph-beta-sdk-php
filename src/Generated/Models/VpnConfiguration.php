<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VpnConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var VpnAuthenticationMethod|null $authenticationMethod Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
    */
    private ?VpnAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var string|null $connectionName Connection name displayed to the user.
    */
    private ?string $connectionName = null;
    
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
     * Instantiates a new VpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VpnConfiguration {
        $mappingValueNode = ParseNode::getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidDeviceOwnerVpnConfiguration': return new AndroidDeviceOwnerVpnConfiguration();
            }
        }
        return new VpnConfiguration();
    }

    /**
     * Gets the authenticationMethod property value. Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(VpnAuthenticationMethod::class)); },
            'connectionName' => function (ParseNode $n) use ($o) { $o->setConnectionName($n->getStringValue()); },
            'realm' => function (ParseNode $n) use ($o) { $o->setRealm($n->getStringValue()); },
            'role' => function (ParseNode $n) use ($o) { $o->setRole($n->getStringValue()); },
            'servers' => function (ParseNode $n) use ($o) { $o->setServers($n->getCollectionOfObjectValues(array(VpnServer::class, 'createFromDiscriminatorValue'))); },
        ]);
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
        $writer->writeStringValue('realm', $this->realm);
        $writer->writeStringValue('role', $this->role);
        $writer->writeCollectionOfObjectValues('servers', $this->servers);
    }

    /**
     * Sets the authenticationMethod property value. Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
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
