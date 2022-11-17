<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamworkDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamworkDevice');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDevice {
        return new TeamworkDevice();
    }

    /**
     * Gets the activity property value. The activity properties that change based on the device usage.
     * @return TeamworkDeviceActivity|null
    */
    public function getActivity(): ?TeamworkDeviceActivity {
        return $this->getBackingStore()->get('activity');
    }

    /**
     * Gets the activityState property value. The activity state of the device. The possible values are: unknown, busy, idle, unavailable, unknownFutureValue.
     * @return TeamworkDeviceActivityState|null
    */
    public function getActivityState(): ?TeamworkDeviceActivityState {
        return $this->getBackingStore()->get('activityState');
    }

    /**
     * Gets the companyAssetTag property value. The company asset tag assigned by the admin on the device.
     * @return string|null
    */
    public function getCompanyAssetTag(): ?string {
        return $this->getBackingStore()->get('companyAssetTag');
    }

    /**
     * Gets the configuration property value. The configuration properties of the device.
     * @return TeamworkDeviceConfiguration|null
    */
    public function getConfiguration(): ?TeamworkDeviceConfiguration {
        return $this->getBackingStore()->get('configuration');
    }

    /**
     * Gets the createdBy property value. Identity of the user who enrolled the device to the tenant.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the device was enrolled to the tenant.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the currentUser property value. The signed-in user on the device.
     * @return TeamworkUserIdentity|null
    */
    public function getCurrentUser(): ?TeamworkUserIdentity {
        return $this->getBackingStore()->get('currentUser');
    }

    /**
     * Gets the deviceType property value. The deviceType property
     * @return TeamworkDeviceType|null
    */
    public function getDeviceType(): ?TeamworkDeviceType {
        return $this->getBackingStore()->get('deviceType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getObjectValue([TeamworkDeviceActivity::class, 'createFromDiscriminatorValue'])),
            'activityState' => fn(ParseNode $n) => $o->setActivityState($n->getEnumValue(TeamworkDeviceActivityState::class)),
            'companyAssetTag' => fn(ParseNode $n) => $o->setCompanyAssetTag($n->getStringValue()),
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([TeamworkDeviceConfiguration::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'currentUser' => fn(ParseNode $n) => $o->setCurrentUser($n->getObjectValue([TeamworkUserIdentity::class, 'createFromDiscriminatorValue'])),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getEnumValue(TeamworkDeviceType::class)),
            'hardwareDetail' => fn(ParseNode $n) => $o->setHardwareDetail($n->getObjectValue([TeamworkHardwareDetail::class, 'createFromDiscriminatorValue'])),
            'health' => fn(ParseNode $n) => $o->setHealth($n->getObjectValue([TeamworkDeviceHealth::class, 'createFromDiscriminatorValue'])),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(TeamworkDeviceHealthStatus::class)),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([TeamworkDeviceOperation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hardwareDetail property value. The hardwareDetail property
     * @return TeamworkHardwareDetail|null
    */
    public function getHardwareDetail(): ?TeamworkHardwareDetail {
        return $this->getBackingStore()->get('hardwareDetail');
    }

    /**
     * Gets the health property value. The health properties of the device.
     * @return TeamworkDeviceHealth|null
    */
    public function getHealth(): ?TeamworkDeviceHealth {
        return $this->getBackingStore()->get('health');
    }

    /**
     * Gets the healthStatus property value. The health status of the device. The possible values are: unknown, offline, critical, nonUrgent, healthy, unknownFutureValue.
     * @return TeamworkDeviceHealthStatus|null
    */
    public function getHealthStatus(): ?TeamworkDeviceHealthStatus {
        return $this->getBackingStore()->get('healthStatus');
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who last modified the device details.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. The UTC date and time when the device detail was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the notes property value. The notes added by the admin to the device.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->getBackingStore()->get('notes');
    }

    /**
     * Gets the operations property value. The async operations on the device.
     * @return array<TeamworkDeviceOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activity', $this->getActivity());
        $writer->writeEnumValue('activityState', $this->getActivityState());
        $writer->writeStringValue('companyAssetTag', $this->getCompanyAssetTag());
        $writer->writeObjectValue('configuration', $this->getConfiguration());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('currentUser', $this->getCurrentUser());
        $writer->writeEnumValue('deviceType', $this->getDeviceType());
        $writer->writeObjectValue('hardwareDetail', $this->getHardwareDetail());
        $writer->writeObjectValue('health', $this->getHealth());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
    }

    /**
     * Sets the activity property value. The activity properties that change based on the device usage.
     *  @param TeamworkDeviceActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?TeamworkDeviceActivity $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the activityState property value. The activity state of the device. The possible values are: unknown, busy, idle, unavailable, unknownFutureValue.
     *  @param TeamworkDeviceActivityState|null $value Value to set for the activityState property.
    */
    public function setActivityState(?TeamworkDeviceActivityState $value): void {
        $this->getBackingStore()->set('activityState', $value);
    }

    /**
     * Sets the companyAssetTag property value. The company asset tag assigned by the admin on the device.
     *  @param string|null $value Value to set for the companyAssetTag property.
    */
    public function setCompanyAssetTag(?string $value): void {
        $this->getBackingStore()->set('companyAssetTag', $value);
    }

    /**
     * Sets the configuration property value. The configuration properties of the device.
     *  @param TeamworkDeviceConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?TeamworkDeviceConfiguration $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user who enrolled the device to the tenant.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the device was enrolled to the tenant.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the currentUser property value. The signed-in user on the device.
     *  @param TeamworkUserIdentity|null $value Value to set for the currentUser property.
    */
    public function setCurrentUser(?TeamworkUserIdentity $value): void {
        $this->getBackingStore()->set('currentUser', $value);
    }

    /**
     * Sets the deviceType property value. The deviceType property
     *  @param TeamworkDeviceType|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?TeamworkDeviceType $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the hardwareDetail property value. The hardwareDetail property
     *  @param TeamworkHardwareDetail|null $value Value to set for the hardwareDetail property.
    */
    public function setHardwareDetail(?TeamworkHardwareDetail $value): void {
        $this->getBackingStore()->set('hardwareDetail', $value);
    }

    /**
     * Sets the health property value. The health properties of the device.
     *  @param TeamworkDeviceHealth|null $value Value to set for the health property.
    */
    public function setHealth(?TeamworkDeviceHealth $value): void {
        $this->getBackingStore()->set('health', $value);
    }

    /**
     * Sets the healthStatus property value. The health status of the device. The possible values are: unknown, offline, critical, nonUrgent, healthy, unknownFutureValue.
     *  @param TeamworkDeviceHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?TeamworkDeviceHealthStatus $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who last modified the device details.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The UTC date and time when the device detail was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the notes property value. The notes added by the admin to the device.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the operations property value. The async operations on the device.
     *  @param array<TeamworkDeviceOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

}
