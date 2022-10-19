<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftTunnelServer extends Entity implements Parsable 
{
    /**
     * @var string|null $agentImageDigest The digest of the current agent image running on this server
    */
    private ?string $agentImageDigest = null;
    
    /**
     * @var string|null $displayName The display name for the server. This property is required when a server is created and cannot be cleared during updates.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastCheckinDateTime Indicates when the server last checked in
    */
    private ?DateTime $lastCheckinDateTime = null;
    
    /**
     * @var string|null $serverImageDigest The digest of the current server image running on this server
    */
    private ?string $serverImageDigest = null;
    
    /**
     * @var MicrosoftTunnelServerHealthStatus|null $tunnelServerHealthStatus Enum of possible MicrosoftTunnelServer health status types
    */
    private ?MicrosoftTunnelServerHealthStatus $tunnelServerHealthStatus = null;
    
    /**
     * Instantiates a new microsoftTunnelServer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftTunnelServer');
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
        return $this->agentImageDigest;
    }

    /**
     * Gets the displayName property value. The display name for the server. This property is required when a server is created and cannot be cleared during updates.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
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
        return $this->lastCheckinDateTime;
    }

    /**
     * Gets the serverImageDigest property value. The digest of the current server image running on this server
     * @return string|null
    */
    public function getServerImageDigest(): ?string {
        return $this->serverImageDigest;
    }

    /**
     * Gets the tunnelServerHealthStatus property value. Enum of possible MicrosoftTunnelServer health status types
     * @return MicrosoftTunnelServerHealthStatus|null
    */
    public function getTunnelServerHealthStatus(): ?MicrosoftTunnelServerHealthStatus {
        return $this->tunnelServerHealthStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentImageDigest', $this->agentImageDigest);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastCheckinDateTime', $this->lastCheckinDateTime);
        $writer->writeStringValue('serverImageDigest', $this->serverImageDigest);
        $writer->writeEnumValue('tunnelServerHealthStatus', $this->tunnelServerHealthStatus);
    }

    /**
     * Sets the agentImageDigest property value. The digest of the current agent image running on this server
     *  @param string|null $value Value to set for the agentImageDigest property.
    */
    public function setAgentImageDigest(?string $value ): void {
        $this->agentImageDigest = $value;
    }

    /**
     * Sets the displayName property value. The display name for the server. This property is required when a server is created and cannot be cleared during updates.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastCheckinDateTime property value. Indicates when the server last checked in
     *  @param DateTime|null $value Value to set for the lastCheckinDateTime property.
    */
    public function setLastCheckinDateTime(?DateTime $value ): void {
        $this->lastCheckinDateTime = $value;
    }

    /**
     * Sets the serverImageDigest property value. The digest of the current server image running on this server
     *  @param string|null $value Value to set for the serverImageDigest property.
    */
    public function setServerImageDigest(?string $value ): void {
        $this->serverImageDigest = $value;
    }

    /**
     * Sets the tunnelServerHealthStatus property value. Enum of possible MicrosoftTunnelServer health status types
     *  @param MicrosoftTunnelServerHealthStatus|null $value Value to set for the tunnelServerHealthStatus property.
    */
    public function setTunnelServerHealthStatus(?MicrosoftTunnelServerHealthStatus $value ): void {
        $this->tunnelServerHealthStatus = $value;
    }

}
