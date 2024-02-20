<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Logs extends Entity implements Parsable 
{
    /**
     * Instantiates a new Logs and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Logs
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Logs {
        return new Logs();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'remoteNetworks' => fn(ParseNode $n) => $o->setRemoteNetworks($n->getCollectionOfObjectValues([RemoteNetworkHealthEvent::class, 'createFromDiscriminatorValue'])),
            'traffic' => fn(ParseNode $n) => $o->setTraffic($n->getCollectionOfObjectValues([NetworkAccessTraffic::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the remoteNetworks property value. A collection of remote network health events.
     * @return array<RemoteNetworkHealthEvent>|null
    */
    public function getRemoteNetworks(): ?array {
        $val = $this->getBackingStore()->get('remoteNetworks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RemoteNetworkHealthEvent::class);
            /** @var array<RemoteNetworkHealthEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteNetworks'");
    }

    /**
     * Gets the traffic property value. A network access traffic log entry that contains comprehensive information about network traffic events.
     * @return array<NetworkAccessTraffic>|null
    */
    public function getTraffic(): ?array {
        $val = $this->getBackingStore()->get('traffic');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NetworkAccessTraffic::class);
            /** @var array<NetworkAccessTraffic>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'traffic'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('remoteNetworks', $this->getRemoteNetworks());
        $writer->writeCollectionOfObjectValues('traffic', $this->getTraffic());
    }

    /**
     * Sets the remoteNetworks property value. A collection of remote network health events.
     * @param array<RemoteNetworkHealthEvent>|null $value Value to set for the remoteNetworks property.
    */
    public function setRemoteNetworks(?array $value): void {
        $this->getBackingStore()->set('remoteNetworks', $value);
    }

    /**
     * Sets the traffic property value. A network access traffic log entry that contains comprehensive information about network traffic events.
     * @param array<NetworkAccessTraffic>|null $value Value to set for the traffic property.
    */
    public function setTraffic(?array $value): void {
        $this->getBackingStore()->set('traffic', $value);
    }

}
