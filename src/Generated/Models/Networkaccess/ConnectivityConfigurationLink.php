<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConnectivityConfigurationLink extends Entity implements Parsable 
{
    /**
     * Instantiates a new connectivityConfigurationLink and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectivityConfigurationLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectivityConfigurationLink {
        return new ConnectivityConfigurationLink();
    }

    /**
     * Gets the displayName property value. Specifies the name of the link.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'localConfigurations' => fn(ParseNode $n) => $o->setLocalConfigurations($n->getCollectionOfObjectValues([LocalConnectivityConfiguration::class, 'createFromDiscriminatorValue'])),
            'peerConfiguration' => fn(ParseNode $n) => $o->setPeerConfiguration($n->getObjectValue([PeerConnectivityConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the localConfigurations property value. Specifies Microsoft's end of the tunnel configuration for a device link.
     * @return array<LocalConnectivityConfiguration>|null
    */
    public function getLocalConfigurations(): ?array {
        $val = $this->getBackingStore()->get('localConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LocalConnectivityConfiguration::class);
            /** @var array<LocalConnectivityConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localConfigurations'");
    }

    /**
     * Gets the peerConfiguration property value. The peerConfiguration property
     * @return PeerConnectivityConfiguration|null
    */
    public function getPeerConfiguration(): ?PeerConnectivityConfiguration {
        $val = $this->getBackingStore()->get('peerConfiguration');
        if (is_null($val) || $val instanceof PeerConnectivityConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'peerConfiguration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('localConfigurations', $this->getLocalConfigurations());
        $writer->writeObjectValue('peerConfiguration', $this->getPeerConfiguration());
    }

    /**
     * Sets the displayName property value. Specifies the name of the link.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the localConfigurations property value. Specifies Microsoft's end of the tunnel configuration for a device link.
     * @param array<LocalConnectivityConfiguration>|null $value Value to set for the localConfigurations property.
    */
    public function setLocalConfigurations(?array $value): void {
        $this->getBackingStore()->set('localConfigurations', $value);
    }

    /**
     * Sets the peerConfiguration property value. The peerConfiguration property
     * @param PeerConnectivityConfiguration|null $value Value to set for the peerConfiguration property.
    */
    public function setPeerConfiguration(?PeerConnectivityConfiguration $value): void {
        $this->getBackingStore()->set('peerConfiguration', $value);
    }

}
