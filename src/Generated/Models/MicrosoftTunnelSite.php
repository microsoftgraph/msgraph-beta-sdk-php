<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class MicrosoftTunnelSite extends Entity implements Parsable 
{
    /**
     * Instantiates a new microsoftTunnelSite and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftTunnelSite
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTunnelSite {
        return new MicrosoftTunnelSite();
    }

    /**
     * Gets the description property value. The site's description (optional)
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name for the site. This property is required when a site is created.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the enableCertificatePinning property value. When set to true, certificate pinning will be enforced on connections between the Microsoft Tunnel server and Microsoft Tunnel clients. When set to false, certificate pinning will be disabled.
     * @return bool|null
    */
    public function getEnableCertificatePinning(): ?bool {
        return $this->getBackingStore()->get('enableCertificatePinning');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enableCertificatePinning' => fn(ParseNode $n) => $o->setEnableCertificatePinning($n->getBooleanValue()),
            'internalNetworkProbeUrl' => fn(ParseNode $n) => $o->setInternalNetworkProbeUrl($n->getStringValue()),
            'microsoftTunnelConfiguration' => fn(ParseNode $n) => $o->setMicrosoftTunnelConfiguration($n->getObjectValue([MicrosoftTunnelConfiguration::class, 'createFromDiscriminatorValue'])),
            'microsoftTunnelServers' => fn(ParseNode $n) => $o->setMicrosoftTunnelServers($n->getCollectionOfObjectValues([MicrosoftTunnelServer::class, 'createFromDiscriminatorValue'])),
            'publicAddress' => fn(ParseNode $n) => $o->setPublicAddress($n->getStringValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'upgradeAutomatically' => fn(ParseNode $n) => $o->setUpgradeAutomatically($n->getBooleanValue()),
            'upgradeAvailable' => fn(ParseNode $n) => $o->setUpgradeAvailable($n->getBooleanValue()),
            'upgradeWindowEndTime' => fn(ParseNode $n) => $o->setUpgradeWindowEndTime($n->getTimeValue()),
            'upgradeWindowStartTime' => fn(ParseNode $n) => $o->setUpgradeWindowStartTime($n->getTimeValue()),
            'upgradeWindowUtcOffsetInMinutes' => fn(ParseNode $n) => $o->setUpgradeWindowUtcOffsetInMinutes($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the internalNetworkProbeUrl property value. The site's Internal Network Access Probe URL
     * @return string|null
    */
    public function getInternalNetworkProbeUrl(): ?string {
        return $this->getBackingStore()->get('internalNetworkProbeUrl');
    }

    /**
     * Gets the microsoftTunnelConfiguration property value. The MicrosoftTunnelConfiguration that has been applied to this MicrosoftTunnelSite
     * @return MicrosoftTunnelConfiguration|null
    */
    public function getMicrosoftTunnelConfiguration(): ?MicrosoftTunnelConfiguration {
        return $this->getBackingStore()->get('microsoftTunnelConfiguration');
    }

    /**
     * Gets the microsoftTunnelServers property value. A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
     * @return array<MicrosoftTunnelServer>|null
    */
    public function getMicrosoftTunnelServers(): ?array {
        return $this->getBackingStore()->get('microsoftTunnelServers');
    }

    /**
     * Gets the publicAddress property value. The site's public domain name or IP address
     * @return string|null
    */
    public function getPublicAddress(): ?string {
        return $this->getBackingStore()->get('publicAddress');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the upgradeAutomatically property value. The site's automatic upgrade setting. True for automatic upgrades, false for manual control
     * @return bool|null
    */
    public function getUpgradeAutomatically(): ?bool {
        return $this->getBackingStore()->get('upgradeAutomatically');
    }

    /**
     * Gets the upgradeAvailable property value. The site provides the state of when an upgrade is available
     * @return bool|null
    */
    public function getUpgradeAvailable(): ?bool {
        return $this->getBackingStore()->get('upgradeAvailable');
    }

    /**
     * Gets the upgradeWindowEndTime property value. The site's upgrade window end time of day
     * @return Time|null
    */
    public function getUpgradeWindowEndTime(): ?Time {
        return $this->getBackingStore()->get('upgradeWindowEndTime');
    }

    /**
     * Gets the upgradeWindowStartTime property value. The site's upgrade window start time of day
     * @return Time|null
    */
    public function getUpgradeWindowStartTime(): ?Time {
        return $this->getBackingStore()->get('upgradeWindowStartTime');
    }

    /**
     * Gets the upgradeWindowUtcOffsetInMinutes property value. The site's timezone represented as a minute offset from UTC
     * @return int|null
    */
    public function getUpgradeWindowUtcOffsetInMinutes(): ?int {
        return $this->getBackingStore()->get('upgradeWindowUtcOffsetInMinutes');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('enableCertificatePinning', $this->getEnableCertificatePinning());
        $writer->writeStringValue('internalNetworkProbeUrl', $this->getInternalNetworkProbeUrl());
        $writer->writeObjectValue('microsoftTunnelConfiguration', $this->getMicrosoftTunnelConfiguration());
        $writer->writeCollectionOfObjectValues('microsoftTunnelServers', $this->getMicrosoftTunnelServers());
        $writer->writeStringValue('publicAddress', $this->getPublicAddress());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeBooleanValue('upgradeAutomatically', $this->getUpgradeAutomatically());
        $writer->writeBooleanValue('upgradeAvailable', $this->getUpgradeAvailable());
        $writer->writeTimeValue('upgradeWindowEndTime', $this->getUpgradeWindowEndTime());
        $writer->writeTimeValue('upgradeWindowStartTime', $this->getUpgradeWindowStartTime());
        $writer->writeIntegerValue('upgradeWindowUtcOffsetInMinutes', $this->getUpgradeWindowUtcOffsetInMinutes());
    }

    /**
     * Sets the description property value. The site's description (optional)
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the site. This property is required when a site is created.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enableCertificatePinning property value. When set to true, certificate pinning will be enforced on connections between the Microsoft Tunnel server and Microsoft Tunnel clients. When set to false, certificate pinning will be disabled.
     *  @param bool|null $value Value to set for the enableCertificatePinning property.
    */
    public function setEnableCertificatePinning(?bool $value): void {
        $this->getBackingStore()->set('enableCertificatePinning', $value);
    }

    /**
     * Sets the internalNetworkProbeUrl property value. The site's Internal Network Access Probe URL
     *  @param string|null $value Value to set for the internalNetworkProbeUrl property.
    */
    public function setInternalNetworkProbeUrl(?string $value): void {
        $this->getBackingStore()->set('internalNetworkProbeUrl', $value);
    }

    /**
     * Sets the microsoftTunnelConfiguration property value. The MicrosoftTunnelConfiguration that has been applied to this MicrosoftTunnelSite
     *  @param MicrosoftTunnelConfiguration|null $value Value to set for the microsoftTunnelConfiguration property.
    */
    public function setMicrosoftTunnelConfiguration(?MicrosoftTunnelConfiguration $value): void {
        $this->getBackingStore()->set('microsoftTunnelConfiguration', $value);
    }

    /**
     * Sets the microsoftTunnelServers property value. A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
     *  @param array<MicrosoftTunnelServer>|null $value Value to set for the microsoftTunnelServers property.
    */
    public function setMicrosoftTunnelServers(?array $value): void {
        $this->getBackingStore()->set('microsoftTunnelServers', $value);
    }

    /**
     * Sets the publicAddress property value. The site's public domain name or IP address
     *  @param string|null $value Value to set for the publicAddress property.
    */
    public function setPublicAddress(?string $value): void {
        $this->getBackingStore()->set('publicAddress', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the upgradeAutomatically property value. The site's automatic upgrade setting. True for automatic upgrades, false for manual control
     *  @param bool|null $value Value to set for the upgradeAutomatically property.
    */
    public function setUpgradeAutomatically(?bool $value): void {
        $this->getBackingStore()->set('upgradeAutomatically', $value);
    }

    /**
     * Sets the upgradeAvailable property value. The site provides the state of when an upgrade is available
     *  @param bool|null $value Value to set for the upgradeAvailable property.
    */
    public function setUpgradeAvailable(?bool $value): void {
        $this->getBackingStore()->set('upgradeAvailable', $value);
    }

    /**
     * Sets the upgradeWindowEndTime property value. The site's upgrade window end time of day
     *  @param Time|null $value Value to set for the upgradeWindowEndTime property.
    */
    public function setUpgradeWindowEndTime(?Time $value): void {
        $this->getBackingStore()->set('upgradeWindowEndTime', $value);
    }

    /**
     * Sets the upgradeWindowStartTime property value. The site's upgrade window start time of day
     *  @param Time|null $value Value to set for the upgradeWindowStartTime property.
    */
    public function setUpgradeWindowStartTime(?Time $value): void {
        $this->getBackingStore()->set('upgradeWindowStartTime', $value);
    }

    /**
     * Sets the upgradeWindowUtcOffsetInMinutes property value. The site's timezone represented as a minute offset from UTC
     *  @param int|null $value Value to set for the upgradeWindowUtcOffsetInMinutes property.
    */
    public function setUpgradeWindowUtcOffsetInMinutes(?int $value): void {
        $this->getBackingStore()->set('upgradeWindowUtcOffsetInMinutes', $value);
    }

}
