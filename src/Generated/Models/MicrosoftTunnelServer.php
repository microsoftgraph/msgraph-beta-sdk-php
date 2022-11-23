<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftTunnelServer extends Entity implements Parsable 
{
    /**
     * Instantiates a new microsoftTunnelServer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftTunnelServer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTunnelServer {
        return new MicrosoftTunnelServer();
    }

    /**
     * Gets the agentImageDigest property value. The digest of the current agent image running on this server
     * @return string|null
    */
    public function getAgentImageDigest(): ?string {
        return $this->getBackingStore()->get('agentImageDigest');
    }

    /**
     * Gets the displayName property value. The display name for the server. This property is required when a server is created and cannot be cleared during updates.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentImageDigest' => fn(ParseNode $n) => $o->setAgentImageDigest($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastCheckinDateTime' => fn(ParseNode $n) => $o->setLastCheckinDateTime($n->getDateTimeValue()),
            'serverImageDigest' => fn(ParseNode $n) => $o->setServerImageDigest($n->getStringValue()),
            'tunnelServerHealthStatus' => fn(ParseNode $n) => $o->setTunnelServerHealthStatus($n->getEnumValue(MicrosoftTunnelServerHealthStatus::class)),
        ]);
    }

    /**
     * Gets the lastCheckinDateTime property value. Indicates when the server last checked in
     * @return DateTime|null
    */
    public function getLastCheckinDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastCheckinDateTime');
    }

    /**
     * Gets the serverImageDigest property value. The digest of the current server image running on this server
     * @return string|null
    */
    public function getServerImageDigest(): ?string {
        return $this->getBackingStore()->get('serverImageDigest');
    }

    /**
     * Gets the tunnelServerHealthStatus property value. Enum of possible MicrosoftTunnelServer health status types
     * @return MicrosoftTunnelServerHealthStatus|null
    */
    public function getTunnelServerHealthStatus(): ?MicrosoftTunnelServerHealthStatus {
        return $this->getBackingStore()->get('tunnelServerHealthStatus');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentImageDigest', $this->getAgentImageDigest());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastCheckinDateTime', $this->getLastCheckinDateTime());
        $writer->writeStringValue('serverImageDigest', $this->getServerImageDigest());
        $writer->writeEnumValue('tunnelServerHealthStatus', $this->getTunnelServerHealthStatus());
    }

    /**
     * Sets the agentImageDigest property value. The digest of the current agent image running on this server
     *  @param string|null $value Value to set for the agentImageDigest property.
    */
    public function setAgentImageDigest(?string $value): void {
        $this->getBackingStore()->set('agentImageDigest', $value);
    }

    /**
     * Sets the displayName property value. The display name for the server. This property is required when a server is created and cannot be cleared during updates.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastCheckinDateTime property value. Indicates when the server last checked in
     *  @param DateTime|null $value Value to set for the lastCheckinDateTime property.
    */
    public function setLastCheckinDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCheckinDateTime', $value);
    }

    /**
     * Sets the serverImageDigest property value. The digest of the current server image running on this server
     *  @param string|null $value Value to set for the serverImageDigest property.
    */
    public function setServerImageDigest(?string $value): void {
        $this->getBackingStore()->set('serverImageDigest', $value);
    }

    /**
     * Sets the tunnelServerHealthStatus property value. Enum of possible MicrosoftTunnelServer health status types
     *  @param MicrosoftTunnelServerHealthStatus|null $value Value to set for the tunnelServerHealthStatus property.
    */
    public function setTunnelServerHealthStatus(?MicrosoftTunnelServerHealthStatus $value): void {
        $this->getBackingStore()->set('tunnelServerHealthStatus', $value);
    }

}
