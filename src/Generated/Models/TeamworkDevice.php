<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDevice extends Entity 
{
    /** @var TeamworkDeviceActivity|null $activity The activity properties that change based on the device usage. */
    private ?TeamworkDeviceActivity $activity = null;
    
    /** @var TeamworkDeviceActivityState|null $activityState The activity state of the device. The possible values are: unknown, busy, idle, unavailable, unknownFutureValue. */
    private ?TeamworkDeviceActivityState $activityState = null;
    
    /** @var string|null $companyAssetTag The company asset tag assigned by the admin on the device. */
    private ?string $companyAssetTag = null;
    
    /** @var TeamworkDeviceConfiguration|null $configuration The configuration properties of the device. */
    private ?TeamworkDeviceConfiguration $configuration = null;
    
    /** @var IdentitySet|null $createdBy Identity of the user who enrolled the device to the tenant. */
    private ?IdentitySet $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The UTC date and time when the device was enrolled to the tenant. */
    private ?DateTime $createdDateTime = null;
    
    /** @var TeamworkUserIdentity|null $currentUser The signed-in user on the device. */
    private ?TeamworkUserIdentity $currentUser = null;
    
    /** @var TeamworkDeviceType|null $deviceType The type of device. The possible values are: unknown, ipPhone, teamsRoom, surfaceHub, collaborationBar, teamsDisplay, touchConsole, lowCostPhone, teamsPanel, sip, unknownFutureValue. */
    private ?TeamworkDeviceType $deviceType = null;
    
    /** @var TeamworkHardwareDetail|null $hardwareDetail The hardwareDetail property */
    private ?TeamworkHardwareDetail $hardwareDetail = null;
    
    /** @var TeamworkDeviceHealth|null $health The health properties of the device. */
    private ?TeamworkDeviceHealth $health = null;
    
    /** @var TeamworkDeviceHealthStatus|null $healthStatus The health status of the device. The possible values are: unknown, offline, critical, nonUrgent, healthy, unknownFutureValue. */
    private ?TeamworkDeviceHealthStatus $healthStatus = null;
    
    /** @var IdentitySet|null $lastModifiedBy Identity of the user who last modified the device details. */
    private ?IdentitySet $lastModifiedBy = null;
    
    /** @var DateTime|null $lastModifiedDateTime The UTC date and time when the device detail was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $notes The notes added by the admin to the device. */
    private ?string $notes = null;
    
    /** @var array<TeamworkDeviceOperation>|null $operations The async operations on the device. */
    private ?array $operations = null;
    
    /**
     * Instantiates a new teamworkDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDevice
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDevice {
        return new TeamworkDevice();
    }

    /**
     * Gets the activity property value. The activity properties that change based on the device usage.
     * @return TeamworkDeviceActivity|null
    */
    public function getActivity(): ?TeamworkDeviceActivity {
        return $this->activity;
    }

    /**
     * Gets the activityState property value. The activity state of the device. The possible values are: unknown, busy, idle, unavailable, unknownFutureValue.
     * @return TeamworkDeviceActivityState|null
    */
    public function getActivityState(): ?TeamworkDeviceActivityState {
        return $this->activityState;
    }

    /**
     * Gets the companyAssetTag property value. The company asset tag assigned by the admin on the device.
     * @return string|null
    */
    public function getCompanyAssetTag(): ?string {
        return $this->companyAssetTag;
    }

    /**
     * Gets the configuration property value. The configuration properties of the device.
     * @return TeamworkDeviceConfiguration|null
    */
    public function getConfiguration(): ?TeamworkDeviceConfiguration {
        return $this->configuration;
    }

    /**
     * Gets the createdBy property value. Identity of the user who enrolled the device to the tenant.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the device was enrolled to the tenant.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the currentUser property value. The signed-in user on the device.
     * @return TeamworkUserIdentity|null
    */
    public function getCurrentUser(): ?TeamworkUserIdentity {
        return $this->currentUser;
    }

    /**
     * Gets the deviceType property value. The type of device. The possible values are: unknown, ipPhone, teamsRoom, surfaceHub, collaborationBar, teamsDisplay, touchConsole, lowCostPhone, teamsPanel, sip, unknownFutureValue.
     * @return TeamworkDeviceType|null
    */
    public function getDeviceType(): ?TeamworkDeviceType {
        return $this->deviceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => function (self $o, ParseNode $n) { $o->setActivity($n->getObjectValue(TeamworkDeviceActivity::class)); },
            'activityState' => function (self $o, ParseNode $n) { $o->setActivityState($n->getEnumValue(TeamworkDeviceActivityState::class)); },
            'companyAssetTag' => function (self $o, ParseNode $n) { $o->setCompanyAssetTag($n->getStringValue()); },
            'configuration' => function (self $o, ParseNode $n) { $o->setConfiguration($n->getObjectValue(TeamworkDeviceConfiguration::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(IdentitySet::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'currentUser' => function (self $o, ParseNode $n) { $o->setCurrentUser($n->getObjectValue(TeamworkUserIdentity::class)); },
            'deviceType' => function (self $o, ParseNode $n) { $o->setDeviceType($n->getEnumValue(TeamworkDeviceType::class)); },
            'hardwareDetail' => function (self $o, ParseNode $n) { $o->setHardwareDetail($n->getObjectValue(TeamworkHardwareDetail::class)); },
            'health' => function (self $o, ParseNode $n) { $o->setHealth($n->getObjectValue(TeamworkDeviceHealth::class)); },
            'healthStatus' => function (self $o, ParseNode $n) { $o->setHealthStatus($n->getEnumValue(TeamworkDeviceHealthStatus::class)); },
            'lastModifiedBy' => function (self $o, ParseNode $n) { $o->setLastModifiedBy($n->getObjectValue(IdentitySet::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'notes' => function (self $o, ParseNode $n) { $o->setNotes($n->getStringValue()); },
            'operations' => function (self $o, ParseNode $n) { $o->setOperations($n->getCollectionOfObjectValues(TeamworkDeviceOperation::class)); },
        ]);
    }

    /**
     * Gets the hardwareDetail property value. The hardwareDetail property
     * @return TeamworkHardwareDetail|null
    */
    public function getHardwareDetail(): ?TeamworkHardwareDetail {
        return $this->hardwareDetail;
    }

    /**
     * Gets the health property value. The health properties of the device.
     * @return TeamworkDeviceHealth|null
    */
    public function getHealth(): ?TeamworkDeviceHealth {
        return $this->health;
    }

    /**
     * Gets the healthStatus property value. The health status of the device. The possible values are: unknown, offline, critical, nonUrgent, healthy, unknownFutureValue.
     * @return TeamworkDeviceHealthStatus|null
    */
    public function getHealthStatus(): ?TeamworkDeviceHealthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who last modified the device details.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The UTC date and time when the device detail was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the notes property value. The notes added by the admin to the device.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the operations property value. The async operations on the device.
     * @return array<TeamworkDeviceOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activity', $this->activity);
        $writer->writeEnumValue('activityState', $this->activityState);
        $writer->writeStringValue('companyAssetTag', $this->companyAssetTag);
        $writer->writeObjectValue('configuration', $this->configuration);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('currentUser', $this->currentUser);
        $writer->writeEnumValue('deviceType', $this->deviceType);
        $writer->writeObjectValue('hardwareDetail', $this->hardwareDetail);
        $writer->writeObjectValue('health', $this->health);
        $writer->writeEnumValue('healthStatus', $this->healthStatus);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('notes', $this->notes);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
    }

    /**
     * Sets the activity property value. The activity properties that change based on the device usage.
     *  @param TeamworkDeviceActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?TeamworkDeviceActivity $value ): void {
        $this->activity = $value;
    }

    /**
     * Sets the activityState property value. The activity state of the device. The possible values are: unknown, busy, idle, unavailable, unknownFutureValue.
     *  @param TeamworkDeviceActivityState|null $value Value to set for the activityState property.
    */
    public function setActivityState(?TeamworkDeviceActivityState $value ): void {
        $this->activityState = $value;
    }

    /**
     * Sets the companyAssetTag property value. The company asset tag assigned by the admin on the device.
     *  @param string|null $value Value to set for the companyAssetTag property.
    */
    public function setCompanyAssetTag(?string $value ): void {
        $this->companyAssetTag = $value;
    }

    /**
     * Sets the configuration property value. The configuration properties of the device.
     *  @param TeamworkDeviceConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?TeamworkDeviceConfiguration $value ): void {
        $this->configuration = $value;
    }

    /**
     * Sets the createdBy property value. Identity of the user who enrolled the device to the tenant.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the device was enrolled to the tenant.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the currentUser property value. The signed-in user on the device.
     *  @param TeamworkUserIdentity|null $value Value to set for the currentUser property.
    */
    public function setCurrentUser(?TeamworkUserIdentity $value ): void {
        $this->currentUser = $value;
    }

    /**
     * Sets the deviceType property value. The type of device. The possible values are: unknown, ipPhone, teamsRoom, surfaceHub, collaborationBar, teamsDisplay, touchConsole, lowCostPhone, teamsPanel, sip, unknownFutureValue.
     *  @param TeamworkDeviceType|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?TeamworkDeviceType $value ): void {
        $this->deviceType = $value;
    }

    /**
     * Sets the hardwareDetail property value. The hardwareDetail property
     *  @param TeamworkHardwareDetail|null $value Value to set for the hardwareDetail property.
    */
    public function setHardwareDetail(?TeamworkHardwareDetail $value ): void {
        $this->hardwareDetail = $value;
    }

    /**
     * Sets the health property value. The health properties of the device.
     *  @param TeamworkDeviceHealth|null $value Value to set for the health property.
    */
    public function setHealth(?TeamworkDeviceHealth $value ): void {
        $this->health = $value;
    }

    /**
     * Sets the healthStatus property value. The health status of the device. The possible values are: unknown, offline, critical, nonUrgent, healthy, unknownFutureValue.
     *  @param TeamworkDeviceHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?TeamworkDeviceHealthStatus $value ): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who last modified the device details.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The UTC date and time when the device detail was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the notes property value. The notes added by the admin to the device.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the operations property value. The async operations on the device.
     *  @param array<TeamworkDeviceOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

}
