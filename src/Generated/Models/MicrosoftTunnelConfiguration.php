<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity that represents a collection of Microsoft Tunnel settings
*/
class MicrosoftTunnelConfiguration extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTunnelConfiguration {
        return new MicrosoftTunnelConfiguration();
    }

    /**
     * Gets the advancedSettings property value. Additional settings that may be applied to the server
     * @return array<KeyValuePair>|null
    */
    public function getAdvancedSettings(): ?array {
        return $this->getBackingStore()->get('advancedSettings');
    }

    /**
     * Gets the defaultDomainSuffix property value. The Default Domain appendix that will be used by the clients
     * @return string|null
    */
    public function getDefaultDomainSuffix(): ?string {
        return $this->getBackingStore()->get('defaultDomainSuffix');
    }

    /**
     * Gets the description property value. The configuration's description (optional)
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the disableUdpConnections property value. When DisableUdpConnections is set, the clients and VPN server will not use DTLS connections to transfer data.
     * @return bool|null
    */
    public function getDisableUdpConnections(): ?bool {
        return $this->getBackingStore()->get('disableUdpConnections');
    }

    /**
     * Gets the displayName property value. The display name for the server configuration. This property is required when a server is created.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the dnsServers property value. The DNS servers that will be used by the clients
     * @return array<string>|null
    */
    public function getDnsServers(): ?array {
        return $this->getBackingStore()->get('dnsServers');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedSettings' => fn(ParseNode $n) => $o->setAdvancedSettings($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'defaultDomainSuffix' => fn(ParseNode $n) => $o->setDefaultDomainSuffix($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'disableUdpConnections' => fn(ParseNode $n) => $o->setDisableUdpConnections($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dnsServers' => fn(ParseNode $n) => $o->setDnsServers($n->getCollectionOfPrimitiveValues()),
            'lastUpdateDateTime' => fn(ParseNode $n) => $o->setLastUpdateDateTime($n->getDateTimeValue()),
            'listenPort' => fn(ParseNode $n) => $o->setListenPort($n->getIntegerValue()),
            'network' => fn(ParseNode $n) => $o->setNetwork($n->getStringValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'routeExcludes' => fn(ParseNode $n) => $o->setRouteExcludes($n->getCollectionOfPrimitiveValues()),
            'routeIncludes' => fn(ParseNode $n) => $o->setRouteIncludes($n->getCollectionOfPrimitiveValues()),
            'routesExclude' => fn(ParseNode $n) => $o->setRoutesExclude($n->getCollectionOfPrimitiveValues()),
            'routesInclude' => fn(ParseNode $n) => $o->setRoutesInclude($n->getCollectionOfPrimitiveValues()),
            'splitDNS' => fn(ParseNode $n) => $o->setSplitDNS($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the lastUpdateDateTime property value. When the configuration was last updated
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdateDateTime');
    }

    /**
     * Gets the listenPort property value. The port that both TCP and UPD will listen over on the server
     * @return int|null
    */
    public function getListenPort(): ?int {
        return $this->getBackingStore()->get('listenPort');
    }

    /**
     * Gets the network property value. The subnet that will be used to allocate virtual address for the clients
     * @return string|null
    */
    public function getNetwork(): ?string {
        return $this->getBackingStore()->get('network');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the routeExcludes property value. Subsets of the routes that will not be routed by the server
     * @return array<string>|null
    */
    public function getRouteExcludes(): ?array {
        return $this->getBackingStore()->get('routeExcludes');
    }

    /**
     * Gets the routeIncludes property value. The routes that will be routed by the server
     * @return array<string>|null
    */
    public function getRouteIncludes(): ?array {
        return $this->getBackingStore()->get('routeIncludes');
    }

    /**
     * Gets the routesExclude property value. Subsets of the routes that will not be routed by the server. This property is going to be deprecated with the option of using the new property, 'RouteExcludes'.
     * @return array<string>|null
    */
    public function getRoutesExclude(): ?array {
        return $this->getBackingStore()->get('routesExclude');
    }

    /**
     * Gets the routesInclude property value. The routes that will be routed by the server. This property is going to be deprecated with the option of using the new property, 'RouteIncludes'.
     * @return array<string>|null
    */
    public function getRoutesInclude(): ?array {
        return $this->getBackingStore()->get('routesInclude');
    }

    /**
     * Gets the splitDNS property value. The domains that will be resolved using the provided dns servers
     * @return array<string>|null
    */
    public function getSplitDNS(): ?array {
        return $this->getBackingStore()->get('splitDNS');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('advancedSettings', $this->getAdvancedSettings());
        $writer->writeStringValue('defaultDomainSuffix', $this->getDefaultDomainSuffix());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('disableUdpConnections', $this->getDisableUdpConnections());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('dnsServers', $this->getDnsServers());
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->getLastUpdateDateTime());
        $writer->writeIntegerValue('listenPort', $this->getListenPort());
        $writer->writeStringValue('network', $this->getNetwork());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeCollectionOfPrimitiveValues('routeExcludes', $this->getRouteExcludes());
        $writer->writeCollectionOfPrimitiveValues('routeIncludes', $this->getRouteIncludes());
        $writer->writeCollectionOfPrimitiveValues('routesExclude', $this->getRoutesExclude());
        $writer->writeCollectionOfPrimitiveValues('routesInclude', $this->getRoutesInclude());
        $writer->writeCollectionOfPrimitiveValues('splitDNS', $this->getSplitDNS());
    }

    /**
     * Sets the advancedSettings property value. Additional settings that may be applied to the server
     * @param array<KeyValuePair>|null $value Value to set for the advancedSettings property.
    */
    public function setAdvancedSettings(?array $value): void {
        $this->getBackingStore()->set('advancedSettings', $value);
    }

    /**
     * Sets the defaultDomainSuffix property value. The Default Domain appendix that will be used by the clients
     * @param string|null $value Value to set for the defaultDomainSuffix property.
    */
    public function setDefaultDomainSuffix(?string $value): void {
        $this->getBackingStore()->set('defaultDomainSuffix', $value);
    }

    /**
     * Sets the description property value. The configuration's description (optional)
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the disableUdpConnections property value. When DisableUdpConnections is set, the clients and VPN server will not use DTLS connections to transfer data.
     * @param bool|null $value Value to set for the disableUdpConnections property.
    */
    public function setDisableUdpConnections(?bool $value): void {
        $this->getBackingStore()->set('disableUdpConnections', $value);
    }

    /**
     * Sets the displayName property value. The display name for the server configuration. This property is required when a server is created.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dnsServers property value. The DNS servers that will be used by the clients
     * @param array<string>|null $value Value to set for the dnsServers property.
    */
    public function setDnsServers(?array $value): void {
        $this->getBackingStore()->set('dnsServers', $value);
    }

    /**
     * Sets the lastUpdateDateTime property value. When the configuration was last updated
     * @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdateDateTime', $value);
    }

    /**
     * Sets the listenPort property value. The port that both TCP and UPD will listen over on the server
     * @param int|null $value Value to set for the listenPort property.
    */
    public function setListenPort(?int $value): void {
        $this->getBackingStore()->set('listenPort', $value);
    }

    /**
     * Sets the network property value. The subnet that will be used to allocate virtual address for the clients
     * @param string|null $value Value to set for the network property.
    */
    public function setNetwork(?string $value): void {
        $this->getBackingStore()->set('network', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the routeExcludes property value. Subsets of the routes that will not be routed by the server
     * @param array<string>|null $value Value to set for the routeExcludes property.
    */
    public function setRouteExcludes(?array $value): void {
        $this->getBackingStore()->set('routeExcludes', $value);
    }

    /**
     * Sets the routeIncludes property value. The routes that will be routed by the server
     * @param array<string>|null $value Value to set for the routeIncludes property.
    */
    public function setRouteIncludes(?array $value): void {
        $this->getBackingStore()->set('routeIncludes', $value);
    }

    /**
     * Sets the routesExclude property value. Subsets of the routes that will not be routed by the server. This property is going to be deprecated with the option of using the new property, 'RouteExcludes'.
     * @param array<string>|null $value Value to set for the routesExclude property.
    */
    public function setRoutesExclude(?array $value): void {
        $this->getBackingStore()->set('routesExclude', $value);
    }

    /**
     * Sets the routesInclude property value. The routes that will be routed by the server. This property is going to be deprecated with the option of using the new property, 'RouteIncludes'.
     * @param array<string>|null $value Value to set for the routesInclude property.
    */
    public function setRoutesInclude(?array $value): void {
        $this->getBackingStore()->set('routesInclude', $value);
    }

    /**
     * Sets the splitDNS property value. The domains that will be resolved using the provided dns servers
     * @param array<string>|null $value Value to set for the splitDNS property.
    */
    public function setSplitDNS(?array $value): void {
        $this->getBackingStore()->set('splitDNS', $value);
    }

}
