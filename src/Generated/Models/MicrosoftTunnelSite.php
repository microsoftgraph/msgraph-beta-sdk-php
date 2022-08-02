<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class MicrosoftTunnelSite extends Entity implements Parsable 
{
    /**
     * @var string|null $description The MicrosoftTunnelSite's description
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The MicrosoftTunnelSite's display name
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $internalNetworkProbeUrl The MicrosoftTunnelSite's Internal Network Access Probe URL
    */
    private ?string $internalNetworkProbeUrl = null;
    
    /**
     * @var MicrosoftTunnelConfiguration|null $microsoftTunnelConfiguration The MicrosoftTunnelConfiguration that has been applied to this MicrosoftTunnelSite
    */
    private ?MicrosoftTunnelConfiguration $microsoftTunnelConfiguration = null;
    
    /**
     * @var array<MicrosoftTunnelServer>|null $microsoftTunnelServers A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
    */
    private ?array $microsoftTunnelServers = null;
    
    /**
     * @var string|null $publicAddress The MicrosoftTunnelSite's public domain name or IP address
    */
    private ?string $publicAddress = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tags for this Entity instance.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var bool|null $upgradeAutomatically The site's automatic upgrade setting. True for automatic upgrades, false for manual control
    */
    private ?bool $upgradeAutomatically = null;
    
    /**
     * @var bool|null $upgradeAvailable True if an upgrade is available
    */
    private ?bool $upgradeAvailable = null;
    
    /**
     * @var Time|null $upgradeWindowEndTime The site's upgrade window end time of day
    */
    private ?Time $upgradeWindowEndTime = null;
    
    /**
     * @var Time|null $upgradeWindowStartTime The site's upgrade window start time of day
    */
    private ?Time $upgradeWindowStartTime = null;
    
    /**
     * @var int|null $upgradeWindowUtcOffsetInMinutes The site's timezone represented as a minute offset from UTC
    */
    private ?int $upgradeWindowUtcOffsetInMinutes = null;
    
    /**
     * Instantiates a new MicrosoftTunnelSite and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftTunnelSite');
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
     * Gets the description property value. The MicrosoftTunnelSite's description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The MicrosoftTunnelSite's display name
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
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'internalNetworkProbeUrl' => function (ParseNode $n) use ($o) { $o->setInternalNetworkProbeUrl($n->getStringValue()); },
            'microsoftTunnelConfiguration' => function (ParseNode $n) use ($o) { $o->setMicrosoftTunnelConfiguration($n->getObjectValue(array(MicrosoftTunnelConfiguration::class, 'createFromDiscriminatorValue'))); },
            'microsoftTunnelServers' => function (ParseNode $n) use ($o) { $o->setMicrosoftTunnelServers($n->getCollectionOfObjectValues(array(MicrosoftTunnelServer::class, 'createFromDiscriminatorValue'))); },
            'publicAddress' => function (ParseNode $n) use ($o) { $o->setPublicAddress($n->getStringValue()); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'upgradeAutomatically' => function (ParseNode $n) use ($o) { $o->setUpgradeAutomatically($n->getBooleanValue()); },
            'upgradeAvailable' => function (ParseNode $n) use ($o) { $o->setUpgradeAvailable($n->getBooleanValue()); },
            'upgradeWindowEndTime' => function (ParseNode $n) use ($o) { $o->setUpgradeWindowEndTime($n->getTimeValue()); },
            'upgradeWindowStartTime' => function (ParseNode $n) use ($o) { $o->setUpgradeWindowStartTime($n->getTimeValue()); },
            'upgradeWindowUtcOffsetInMinutes' => function (ParseNode $n) use ($o) { $o->setUpgradeWindowUtcOffsetInMinutes($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the internalNetworkProbeUrl property value. The MicrosoftTunnelSite's Internal Network Access Probe URL
     * @return string|null
    */
    public function getInternalNetworkProbeUrl(): ?string {
        return $this->internalNetworkProbeUrl;
    }

    /**
     * Gets the microsoftTunnelConfiguration property value. The MicrosoftTunnelConfiguration that has been applied to this MicrosoftTunnelSite
     * @return MicrosoftTunnelConfiguration|null
    */
    public function getMicrosoftTunnelConfiguration(): ?MicrosoftTunnelConfiguration {
        return $this->microsoftTunnelConfiguration;
    }

    /**
     * Gets the microsoftTunnelServers property value. A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
     * @return array<MicrosoftTunnelServer>|null
    */
    public function getMicrosoftTunnelServers(): ?array {
        return $this->microsoftTunnelServers;
    }

    /**
     * Gets the publicAddress property value. The MicrosoftTunnelSite's public domain name or IP address
     * @return string|null
    */
    public function getPublicAddress(): ?string {
        return $this->publicAddress;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the upgradeAutomatically property value. The site's automatic upgrade setting. True for automatic upgrades, false for manual control
     * @return bool|null
    */
    public function getUpgradeAutomatically(): ?bool {
        return $this->upgradeAutomatically;
    }

    /**
     * Gets the upgradeAvailable property value. True if an upgrade is available
     * @return bool|null
    */
    public function getUpgradeAvailable(): ?bool {
        return $this->upgradeAvailable;
    }

    /**
     * Gets the upgradeWindowEndTime property value. The site's upgrade window end time of day
     * @return Time|null
    */
    public function getUpgradeWindowEndTime(): ?Time {
        return $this->upgradeWindowEndTime;
    }

    /**
     * Gets the upgradeWindowStartTime property value. The site's upgrade window start time of day
     * @return Time|null
    */
    public function getUpgradeWindowStartTime(): ?Time {
        return $this->upgradeWindowStartTime;
    }

    /**
     * Gets the upgradeWindowUtcOffsetInMinutes property value. The site's timezone represented as a minute offset from UTC
     * @return int|null
    */
    public function getUpgradeWindowUtcOffsetInMinutes(): ?int {
        return $this->upgradeWindowUtcOffsetInMinutes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('internalNetworkProbeUrl', $this->internalNetworkProbeUrl);
        $writer->writeObjectValue('microsoftTunnelConfiguration', $this->microsoftTunnelConfiguration);
        $writer->writeCollectionOfObjectValues('microsoftTunnelServers', $this->microsoftTunnelServers);
        $writer->writeStringValue('publicAddress', $this->publicAddress);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeBooleanValue('upgradeAutomatically', $this->upgradeAutomatically);
        $writer->writeBooleanValue('upgradeAvailable', $this->upgradeAvailable);
        $writer->writeTimeValue('upgradeWindowEndTime', $this->upgradeWindowEndTime);
        $writer->writeTimeValue('upgradeWindowStartTime', $this->upgradeWindowStartTime);
        $writer->writeIntegerValue('upgradeWindowUtcOffsetInMinutes', $this->upgradeWindowUtcOffsetInMinutes);
    }

    /**
     * Sets the description property value. The MicrosoftTunnelSite's description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The MicrosoftTunnelSite's display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the internalNetworkProbeUrl property value. The MicrosoftTunnelSite's Internal Network Access Probe URL
     *  @param string|null $value Value to set for the internalNetworkProbeUrl property.
    */
    public function setInternalNetworkProbeUrl(?string $value ): void {
        $this->internalNetworkProbeUrl = $value;
    }

    /**
     * Sets the microsoftTunnelConfiguration property value. The MicrosoftTunnelConfiguration that has been applied to this MicrosoftTunnelSite
     *  @param MicrosoftTunnelConfiguration|null $value Value to set for the microsoftTunnelConfiguration property.
    */
    public function setMicrosoftTunnelConfiguration(?MicrosoftTunnelConfiguration $value ): void {
        $this->microsoftTunnelConfiguration = $value;
    }

    /**
     * Sets the microsoftTunnelServers property value. A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
     *  @param array<MicrosoftTunnelServer>|null $value Value to set for the microsoftTunnelServers property.
    */
    public function setMicrosoftTunnelServers(?array $value ): void {
        $this->microsoftTunnelServers = $value;
    }

    /**
     * Sets the publicAddress property value. The MicrosoftTunnelSite's public domain name or IP address
     *  @param string|null $value Value to set for the publicAddress property.
    */
    public function setPublicAddress(?string $value ): void {
        $this->publicAddress = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the upgradeAutomatically property value. The site's automatic upgrade setting. True for automatic upgrades, false for manual control
     *  @param bool|null $value Value to set for the upgradeAutomatically property.
    */
    public function setUpgradeAutomatically(?bool $value ): void {
        $this->upgradeAutomatically = $value;
    }

    /**
     * Sets the upgradeAvailable property value. True if an upgrade is available
     *  @param bool|null $value Value to set for the upgradeAvailable property.
    */
    public function setUpgradeAvailable(?bool $value ): void {
        $this->upgradeAvailable = $value;
    }

    /**
     * Sets the upgradeWindowEndTime property value. The site's upgrade window end time of day
     *  @param Time|null $value Value to set for the upgradeWindowEndTime property.
    */
    public function setUpgradeWindowEndTime(?Time $value ): void {
        $this->upgradeWindowEndTime = $value;
    }

    /**
     * Sets the upgradeWindowStartTime property value. The site's upgrade window start time of day
     *  @param Time|null $value Value to set for the upgradeWindowStartTime property.
    */
    public function setUpgradeWindowStartTime(?Time $value ): void {
        $this->upgradeWindowStartTime = $value;
    }

    /**
     * Sets the upgradeWindowUtcOffsetInMinutes property value. The site's timezone represented as a minute offset from UTC
     *  @param int|null $value Value to set for the upgradeWindowUtcOffsetInMinutes property.
    */
    public function setUpgradeWindowUtcOffsetInMinutes(?int $value ): void {
        $this->upgradeWindowUtcOffsetInMinutes = $value;
    }

}
