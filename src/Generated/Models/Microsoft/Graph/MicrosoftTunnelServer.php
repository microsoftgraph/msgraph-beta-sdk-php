<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftTunnelServer extends Entity 
{
    /** @var string|null $agentImageDigest The digest of the current agent image running on this server */
    private ?string $agentImageDigest = null;
    
    /** @var string|null $displayName The MicrosoftTunnelServer's display name */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastCheckinDateTime When the MicrosoftTunnelServer last checked in */
    private ?DateTime $lastCheckinDateTime = null;
    
    /** @var string|null $serverImageDigest The digest of the current server image running on this server */
    private ?string $serverImageDigest = null;
    
    /** @var MicrosoftTunnelServerHealthStatus|null $tunnelServerHealthStatus The MicrosoftTunnelServer's health status. Possible values are: unknown, healthy, unhealthy, warning, offline, upgradeInProgress, upgradeFailed. */
    private ?MicrosoftTunnelServerHealthStatus $tunnelServerHealthStatus = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTunnelServer {
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
     * Gets the displayName property value. The MicrosoftTunnelServer's display name
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
        return array_merge(parent::getFieldDeserializers(), [
            'agentImageDigest' => function (self $o, ParseNode $n) { $o->setAgentImageDigest($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastCheckinDateTime' => function (self $o, ParseNode $n) { $o->setLastCheckinDateTime($n->getDateTimeValue()); },
            'serverImageDigest' => function (self $o, ParseNode $n) { $o->setServerImageDigest($n->getStringValue()); },
            'tunnelServerHealthStatus' => function (self $o, ParseNode $n) { $o->setTunnelServerHealthStatus($n->getEnumValue(MicrosoftTunnelServerHealthStatus::class)); },
        ]);
    }

    /**
     * Gets the lastCheckinDateTime property value. When the MicrosoftTunnelServer last checked in
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
     * Gets the tunnelServerHealthStatus property value. The MicrosoftTunnelServer's health status. Possible values are: unknown, healthy, unhealthy, warning, offline, upgradeInProgress, upgradeFailed.
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
     * Sets the displayName property value. The MicrosoftTunnelServer's display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastCheckinDateTime property value. When the MicrosoftTunnelServer last checked in
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
     * Sets the tunnelServerHealthStatus property value. The MicrosoftTunnelServer's health status. Possible values are: unknown, healthy, unhealthy, warning, offline, upgradeInProgress, upgradeFailed.
     *  @param MicrosoftTunnelServerHealthStatus|null $value Value to set for the tunnelServerHealthStatus property.
    */
    public function setTunnelServerHealthStatus(?MicrosoftTunnelServerHealthStatus $value ): void {
        $this->tunnelServerHealthStatus = $value;
    }

}
