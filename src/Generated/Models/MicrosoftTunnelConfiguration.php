<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftTunnelConfiguration extends Entity 
{
    /** @var array<KeyValuePair>|null $advancedSettings Additional settings that may be applied to the server */
    private ?array $advancedSettings = null;
    
    /** @var string|null $defaultDomainSuffix The Default Domain appendix that will be used by the clients */
    private ?string $defaultDomainSuffix = null;
    
    /** @var string|null $description The MicrosoftTunnelConfiguration's description */
    private ?string $description = null;
    
    /** @var bool|null $disableUdpConnections When DisableUdpConnections is set, the clients and VPN server will not use DTLS connections to tansfer data. */
    private ?bool $disableUdpConnections = null;
    
    /** @var string|null $displayName The MicrosoftTunnelConfiguration's display name */
    private ?string $displayName = null;
    
    /** @var array<string>|null $dnsServers The DNS servers that will be used by the clients */
    private ?array $dnsServers = null;
    
    /** @var DateTime|null $lastUpdateDateTime When the MicrosoftTunnelConfiguration was last updated */
    private ?DateTime $lastUpdateDateTime = null;
    
    /** @var int|null $listenPort The port that both TCP and UPD will listen over on the server */
    private ?int $listenPort = null;
    
    /** @var string|null $network The subnet that will be used to allocate virtual address for the clients */
    private ?string $network = null;
    
    /** @var array<string>|null $roleScopeTagIds List of Scope Tags for this Entity instance. */
    private ?array $roleScopeTagIds = null;
    
    /** @var array<string>|null $routesExclude Subsets of the routes that will not be routed by the server */
    private ?array $routesExclude = null;
    
    /** @var array<string>|null $routesInclude The routs that will be routed by the server */
    private ?array $routesInclude = null;
    
    /** @var array<string>|null $splitDNS The domains that will be resolved using the provided dns servers */
    private ?array $splitDNS = null;
    
    /**
     * Instantiates a new microsoftTunnelConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftTunnelConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTunnelConfiguration {
        return new MicrosoftTunnelConfiguration();
    }

    /**
     * Gets the advancedSettings property value. Additional settings that may be applied to the server
     * @return array<KeyValuePair>|null
    */
    public function getAdvancedSettings(): ?array {
        return $this->advancedSettings;
    }

    /**
     * Gets the defaultDomainSuffix property value. The Default Domain appendix that will be used by the clients
     * @return string|null
    */
    public function getDefaultDomainSuffix(): ?string {
        return $this->defaultDomainSuffix;
    }

    /**
     * Gets the description property value. The MicrosoftTunnelConfiguration's description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the disableUdpConnections property value. When DisableUdpConnections is set, the clients and VPN server will not use DTLS connections to tansfer data.
     * @return bool|null
    */
    public function getDisableUdpConnections(): ?bool {
        return $this->disableUdpConnections;
    }

    /**
     * Gets the displayName property value. The MicrosoftTunnelConfiguration's display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the dnsServers property value. The DNS servers that will be used by the clients
     * @return array<string>|null
    */
    public function getDnsServers(): ?array {
        return $this->dnsServers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'advancedSettings' => function (self $o, ParseNode $n) { $o->setAdvancedSettings($n->getCollectionOfObjectValues(KeyValuePair::class)); },
            'defaultDomainSuffix' => function (self $o, ParseNode $n) { $o->setDefaultDomainSuffix($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'disableUdpConnections' => function (self $o, ParseNode $n) { $o->setDisableUdpConnections($n->getBooleanValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'dnsServers' => function (self $o, ParseNode $n) { $o->setDnsServers($n->getCollectionOfPrimitiveValues()); },
            'lastUpdateDateTime' => function (self $o, ParseNode $n) { $o->setLastUpdateDateTime($n->getDateTimeValue()); },
            'listenPort' => function (self $o, ParseNode $n) { $o->setListenPort($n->getIntegerValue()); },
            'network' => function (self $o, ParseNode $n) { $o->setNetwork($n->getStringValue()); },
            'roleScopeTagIds' => function (self $o, ParseNode $n) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'routesExclude' => function (self $o, ParseNode $n) { $o->setRoutesExclude($n->getCollectionOfPrimitiveValues()); },
            'routesInclude' => function (self $o, ParseNode $n) { $o->setRoutesInclude($n->getCollectionOfPrimitiveValues()); },
            'splitDNS' => function (self $o, ParseNode $n) { $o->setSplitDNS($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the lastUpdateDateTime property value. When the MicrosoftTunnelConfiguration was last updated
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        return $this->lastUpdateDateTime;
    }

    /**
     * Gets the listenPort property value. The port that both TCP and UPD will listen over on the server
     * @return int|null
    */
    public function getListenPort(): ?int {
        return $this->listenPort;
    }

    /**
     * Gets the network property value. The subnet that will be used to allocate virtual address for the clients
     * @return string|null
    */
    public function getNetwork(): ?string {
        return $this->network;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the routesExclude property value. Subsets of the routes that will not be routed by the server
     * @return array<string>|null
    */
    public function getRoutesExclude(): ?array {
        return $this->routesExclude;
    }

    /**
     * Gets the routesInclude property value. The routs that will be routed by the server
     * @return array<string>|null
    */
    public function getRoutesInclude(): ?array {
        return $this->routesInclude;
    }

    /**
     * Gets the splitDNS property value. The domains that will be resolved using the provided dns servers
     * @return array<string>|null
    */
    public function getSplitDNS(): ?array {
        return $this->splitDNS;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('advancedSettings', $this->advancedSettings);
        $writer->writeStringValue('defaultDomainSuffix', $this->defaultDomainSuffix);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBooleanValue('disableUdpConnections', $this->disableUdpConnections);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('dnsServers', $this->dnsServers);
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->lastUpdateDateTime);
        $writer->writeIntegerValue('listenPort', $this->listenPort);
        $writer->writeStringValue('network', $this->network);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeCollectionOfPrimitiveValues('routesExclude', $this->routesExclude);
        $writer->writeCollectionOfPrimitiveValues('routesInclude', $this->routesInclude);
        $writer->writeCollectionOfPrimitiveValues('splitDNS', $this->splitDNS);
    }

    /**
     * Sets the advancedSettings property value. Additional settings that may be applied to the server
     *  @param array<KeyValuePair>|null $value Value to set for the advancedSettings property.
    */
    public function setAdvancedSettings(?array $value ): void {
        $this->advancedSettings = $value;
    }

    /**
     * Sets the defaultDomainSuffix property value. The Default Domain appendix that will be used by the clients
     *  @param string|null $value Value to set for the defaultDomainSuffix property.
    */
    public function setDefaultDomainSuffix(?string $value ): void {
        $this->defaultDomainSuffix = $value;
    }

    /**
     * Sets the description property value. The MicrosoftTunnelConfiguration's description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the disableUdpConnections property value. When DisableUdpConnections is set, the clients and VPN server will not use DTLS connections to tansfer data.
     *  @param bool|null $value Value to set for the disableUdpConnections property.
    */
    public function setDisableUdpConnections(?bool $value ): void {
        $this->disableUdpConnections = $value;
    }

    /**
     * Sets the displayName property value. The MicrosoftTunnelConfiguration's display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the dnsServers property value. The DNS servers that will be used by the clients
     *  @param array<string>|null $value Value to set for the dnsServers property.
    */
    public function setDnsServers(?array $value ): void {
        $this->dnsServers = $value;
    }

    /**
     * Sets the lastUpdateDateTime property value. When the MicrosoftTunnelConfiguration was last updated
     *  @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value ): void {
        $this->lastUpdateDateTime = $value;
    }

    /**
     * Sets the listenPort property value. The port that both TCP and UPD will listen over on the server
     *  @param int|null $value Value to set for the listenPort property.
    */
    public function setListenPort(?int $value ): void {
        $this->listenPort = $value;
    }

    /**
     * Sets the network property value. The subnet that will be used to allocate virtual address for the clients
     *  @param string|null $value Value to set for the network property.
    */
    public function setNetwork(?string $value ): void {
        $this->network = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the routesExclude property value. Subsets of the routes that will not be routed by the server
     *  @param array<string>|null $value Value to set for the routesExclude property.
    */
    public function setRoutesExclude(?array $value ): void {
        $this->routesExclude = $value;
    }

    /**
     * Sets the routesInclude property value. The routs that will be routed by the server
     *  @param array<string>|null $value Value to set for the routesInclude property.
    */
    public function setRoutesInclude(?array $value ): void {
        $this->routesInclude = $value;
    }

    /**
     * Sets the splitDNS property value. The domains that will be resolved using the provided dns servers
     *  @param array<string>|null $value Value to set for the splitDNS property.
    */
    public function setSplitDNS(?array $value ): void {
        $this->splitDNS = $value;
    }

}
