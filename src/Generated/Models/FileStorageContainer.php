<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FileStorageContainer extends Entity implements Parsable 
{
    /**
     * Instantiates a new FileStorageContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileStorageContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileStorageContainer {
        return new FileStorageContainer();
    }

    /**
     * Gets the archivalDetails property value. The archivalDetails property
     * @return SiteArchivalDetails|null
    */
    public function getArchivalDetails(): ?SiteArchivalDetails {
        $val = $this->getBackingStore()->get('archivalDetails');
        if (is_null($val) || $val instanceof SiteArchivalDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivalDetails'");
    }

    /**
     * Gets the assignedSensitivityLabel property value. Sensitivity label assigned to the fileStorageContainer. Read-write.
     * @return AssignedLabel|null
    */
    public function getAssignedSensitivityLabel(): ?AssignedLabel {
        $val = $this->getBackingStore()->get('assignedSensitivityLabel');
        if (is_null($val) || $val instanceof AssignedLabel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedSensitivityLabel'");
    }

    /**
     * Gets the columns property value. The set of custom structured metadata supported by the fileStorageContainer. Read-write.
     * @return array<ColumnDefinition>|null
    */
    public function getColumns(): ?array {
        $val = $this->getBackingStore()->get('columns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ColumnDefinition::class);
            /** @var array<ColumnDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columns'");
    }

    /**
     * Gets the containerTypeId property value. Container type ID of the fileStorageContainer. Each container must have only one container type. Read-only.
     * @return string|null
    */
    public function getContainerTypeId(): ?string {
        $val = $this->getBackingStore()->get('containerTypeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerTypeId'");
    }

    /**
     * Gets the createdDateTime property value. Date and time of the fileStorageContainer creation. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the customProperties property value. Custom property collection for the fileStorageContainer. Read-write.
     * @return FileStorageContainerCustomPropertyDictionary|null
    */
    public function getCustomProperties(): ?FileStorageContainerCustomPropertyDictionary {
        $val = $this->getBackingStore()->get('customProperties');
        if (is_null($val) || $val instanceof FileStorageContainerCustomPropertyDictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customProperties'");
    }

    /**
     * Gets the description property value. Provides a user-visible description of the fileStorageContainer. Read-write.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the fileStorageContainer. Read-write.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the drive property value. The drive of the resource fileStorageContainer. Read-only.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        $val = $this->getBackingStore()->get('drive');
        if (is_null($val) || $val instanceof Drive) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drive'");
    }

    /**
     * Gets the externalGroupId property value. The externalGroupId property
     * @return string|null
    */
    public function getExternalGroupId(): ?string {
        $val = $this->getBackingStore()->get('externalGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalGroupId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'archivalDetails' => fn(ParseNode $n) => $o->setArchivalDetails($n->getObjectValue([SiteArchivalDetails::class, 'createFromDiscriminatorValue'])),
            'assignedSensitivityLabel' => fn(ParseNode $n) => $o->setAssignedSensitivityLabel($n->getObjectValue([AssignedLabel::class, 'createFromDiscriminatorValue'])),
            'columns' => fn(ParseNode $n) => $o->setColumns($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'containerTypeId' => fn(ParseNode $n) => $o->setContainerTypeId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customProperties' => fn(ParseNode $n) => $o->setCustomProperties($n->getObjectValue([FileStorageContainerCustomPropertyDictionary::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'drive' => fn(ParseNode $n) => $o->setDrive($n->getObjectValue([Drive::class, 'createFromDiscriminatorValue'])),
            'externalGroupId' => fn(ParseNode $n) => $o->setExternalGroupId($n->getStringValue()),
            'isItemVersioningEnabled' => fn(ParseNode $n) => $o->setIsItemVersioningEnabled($n->getBooleanValue()),
            'itemMajorVersionLimit' => fn(ParseNode $n) => $o->setItemMajorVersionLimit($n->getIntegerValue()),
            'lockState' => fn(ParseNode $n) => $o->setLockState($n->getEnumValue(SiteLockState::class)),
            'migrationJobs' => fn(ParseNode $n) => $o->setMigrationJobs($n->getCollectionOfObjectValues([SharePointMigrationJob::class, 'createFromDiscriminatorValue'])),
            'owners' => fn(ParseNode $n) => $o->setOwners($n->getCollectionOfObjectValues([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'ownershipType' => fn(ParseNode $n) => $o->setOwnershipType($n->getEnumValue(FileStorageContainerOwnershipType::class)),
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getCollectionOfObjectValues([Permission::class, 'createFromDiscriminatorValue'])),
            'recycleBin' => fn(ParseNode $n) => $o->setRecycleBin($n->getObjectValue([RecycleBin::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([FileStorageContainerSettings::class, 'createFromDiscriminatorValue'])),
            'sharePointGroups' => fn(ParseNode $n) => $o->setSharePointGroups($n->getCollectionOfObjectValues([SharePointGroup::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FileStorageContainerStatus::class)),
            'storageUsedInBytes' => fn(ParseNode $n) => $o->setStorageUsedInBytes($n->getIntegerValue()),
            'viewpoint' => fn(ParseNode $n) => $o->setViewpoint($n->getObjectValue([FileStorageContainerViewpoint::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isItemVersioningEnabled property value. The isItemVersioningEnabled property
     * @return bool|null
    */
    public function getIsItemVersioningEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isItemVersioningEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isItemVersioningEnabled'");
    }

    /**
     * Gets the itemMajorVersionLimit property value. The itemMajorVersionLimit property
     * @return int|null
    */
    public function getItemMajorVersionLimit(): ?int {
        $val = $this->getBackingStore()->get('itemMajorVersionLimit');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemMajorVersionLimit'");
    }

    /**
     * Gets the lockState property value. Indicates the lock state of the fileStorageContainer. The possible values are unlocked and lockedReadOnly. Read-only.
     * @return SiteLockState|null
    */
    public function getLockState(): ?SiteLockState {
        $val = $this->getBackingStore()->get('lockState');
        if (is_null($val) || $val instanceof SiteLockState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockState'");
    }

    /**
     * Gets the migrationJobs property value. The migrationJobs property
     * @return array<SharePointMigrationJob>|null
    */
    public function getMigrationJobs(): ?array {
        $val = $this->getBackingStore()->get('migrationJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharePointMigrationJob::class);
            /** @var array<SharePointMigrationJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'migrationJobs'");
    }

    /**
     * Gets the owners property value. List of users who own the fileStorageContainer. Read-only.
     * @return array<UserIdentity>|null
    */
    public function getOwners(): ?array {
        $val = $this->getBackingStore()->get('owners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserIdentity::class);
            /** @var array<UserIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owners'");
    }

    /**
     * Gets the ownershipType property value. Ownership type of the fileStorageContainer. The possible values are: tenantOwned. Read-only.
     * @return FileStorageContainerOwnershipType|null
    */
    public function getOwnershipType(): ?FileStorageContainerOwnershipType {
        $val = $this->getBackingStore()->get('ownershipType');
        if (is_null($val) || $val instanceof FileStorageContainerOwnershipType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownershipType'");
    }

    /**
     * Gets the permissions property value. The set of permissions for users in the fileStorageContainer. The permission for each user is set by the roles property. The possible values are reader, writer, manager, and owner. Read-write.
     * @return array<Permission>|null
    */
    public function getPermissions(): ?array {
        $val = $this->getBackingStore()->get('permissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Permission::class);
            /** @var array<Permission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissions'");
    }

    /**
     * Gets the recycleBin property value. Recycle bin of the fileStorageContainer. Read-only.
     * @return RecycleBin|null
    */
    public function getRecycleBin(): ?RecycleBin {
        $val = $this->getBackingStore()->get('recycleBin');
        if (is_null($val) || $val instanceof RecycleBin) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recycleBin'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return FileStorageContainerSettings|null
    */
    public function getSettings(): ?FileStorageContainerSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof FileStorageContainerSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the sharePointGroups property value. The collection of sharePointGroup objects local to the container. Read-write.
     * @return array<SharePointGroup>|null
    */
    public function getSharePointGroups(): ?array {
        $val = $this->getBackingStore()->get('sharePointGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharePointGroup::class);
            /** @var array<SharePointGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointGroups'");
    }

    /**
     * Gets the status property value. Status of the fileStorageContainer. Containers are created as inactive and require activation. Inactive containers are subjected to automatic deletion in 24 hours. The possible values are: inactive, active. Read-only.
     * @return FileStorageContainerStatus|null
    */
    public function getStatus(): ?FileStorageContainerStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof FileStorageContainerStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the storageUsedInBytes property value. Storage used in the fileStorageContainer, in bytes. Read-only.
     * @return int|null
    */
    public function getStorageUsedInBytes(): ?int {
        $val = $this->getBackingStore()->get('storageUsedInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageUsedInBytes'");
    }

    /**
     * Gets the viewpoint property value. Data specific to the current user. Read-only.
     * @return FileStorageContainerViewpoint|null
    */
    public function getViewpoint(): ?FileStorageContainerViewpoint {
        $val = $this->getBackingStore()->get('viewpoint');
        if (is_null($val) || $val instanceof FileStorageContainerViewpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'viewpoint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('archivalDetails', $this->getArchivalDetails());
        $writer->writeObjectValue('assignedSensitivityLabel', $this->getAssignedSensitivityLabel());
        $writer->writeCollectionOfObjectValues('columns', $this->getColumns());
        $writer->writeStringValue('containerTypeId', $this->getContainerTypeId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('customProperties', $this->getCustomProperties());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('drive', $this->getDrive());
        $writer->writeStringValue('externalGroupId', $this->getExternalGroupId());
        $writer->writeBooleanValue('isItemVersioningEnabled', $this->getIsItemVersioningEnabled());
        $writer->writeIntegerValue('itemMajorVersionLimit', $this->getItemMajorVersionLimit());
        $writer->writeEnumValue('lockState', $this->getLockState());
        $writer->writeCollectionOfObjectValues('migrationJobs', $this->getMigrationJobs());
        $writer->writeCollectionOfObjectValues('owners', $this->getOwners());
        $writer->writeEnumValue('ownershipType', $this->getOwnershipType());
        $writer->writeCollectionOfObjectValues('permissions', $this->getPermissions());
        $writer->writeObjectValue('recycleBin', $this->getRecycleBin());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeCollectionOfObjectValues('sharePointGroups', $this->getSharePointGroups());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeIntegerValue('storageUsedInBytes', $this->getStorageUsedInBytes());
        $writer->writeObjectValue('viewpoint', $this->getViewpoint());
    }

    /**
     * Sets the archivalDetails property value. The archivalDetails property
     * @param SiteArchivalDetails|null $value Value to set for the archivalDetails property.
    */
    public function setArchivalDetails(?SiteArchivalDetails $value): void {
        $this->getBackingStore()->set('archivalDetails', $value);
    }

    /**
     * Sets the assignedSensitivityLabel property value. Sensitivity label assigned to the fileStorageContainer. Read-write.
     * @param AssignedLabel|null $value Value to set for the assignedSensitivityLabel property.
    */
    public function setAssignedSensitivityLabel(?AssignedLabel $value): void {
        $this->getBackingStore()->set('assignedSensitivityLabel', $value);
    }

    /**
     * Sets the columns property value. The set of custom structured metadata supported by the fileStorageContainer. Read-write.
     * @param array<ColumnDefinition>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value): void {
        $this->getBackingStore()->set('columns', $value);
    }

    /**
     * Sets the containerTypeId property value. Container type ID of the fileStorageContainer. Each container must have only one container type. Read-only.
     * @param string|null $value Value to set for the containerTypeId property.
    */
    public function setContainerTypeId(?string $value): void {
        $this->getBackingStore()->set('containerTypeId', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time of the fileStorageContainer creation. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customProperties property value. Custom property collection for the fileStorageContainer. Read-write.
     * @param FileStorageContainerCustomPropertyDictionary|null $value Value to set for the customProperties property.
    */
    public function setCustomProperties(?FileStorageContainerCustomPropertyDictionary $value): void {
        $this->getBackingStore()->set('customProperties', $value);
    }

    /**
     * Sets the description property value. Provides a user-visible description of the fileStorageContainer. Read-write.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the fileStorageContainer. Read-write.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the drive property value. The drive of the resource fileStorageContainer. Read-only.
     * @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value): void {
        $this->getBackingStore()->set('drive', $value);
    }

    /**
     * Sets the externalGroupId property value. The externalGroupId property
     * @param string|null $value Value to set for the externalGroupId property.
    */
    public function setExternalGroupId(?string $value): void {
        $this->getBackingStore()->set('externalGroupId', $value);
    }

    /**
     * Sets the isItemVersioningEnabled property value. The isItemVersioningEnabled property
     * @param bool|null $value Value to set for the isItemVersioningEnabled property.
    */
    public function setIsItemVersioningEnabled(?bool $value): void {
        $this->getBackingStore()->set('isItemVersioningEnabled', $value);
    }

    /**
     * Sets the itemMajorVersionLimit property value. The itemMajorVersionLimit property
     * @param int|null $value Value to set for the itemMajorVersionLimit property.
    */
    public function setItemMajorVersionLimit(?int $value): void {
        $this->getBackingStore()->set('itemMajorVersionLimit', $value);
    }

    /**
     * Sets the lockState property value. Indicates the lock state of the fileStorageContainer. The possible values are unlocked and lockedReadOnly. Read-only.
     * @param SiteLockState|null $value Value to set for the lockState property.
    */
    public function setLockState(?SiteLockState $value): void {
        $this->getBackingStore()->set('lockState', $value);
    }

    /**
     * Sets the migrationJobs property value. The migrationJobs property
     * @param array<SharePointMigrationJob>|null $value Value to set for the migrationJobs property.
    */
    public function setMigrationJobs(?array $value): void {
        $this->getBackingStore()->set('migrationJobs', $value);
    }

    /**
     * Sets the owners property value. List of users who own the fileStorageContainer. Read-only.
     * @param array<UserIdentity>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value): void {
        $this->getBackingStore()->set('owners', $value);
    }

    /**
     * Sets the ownershipType property value. Ownership type of the fileStorageContainer. The possible values are: tenantOwned. Read-only.
     * @param FileStorageContainerOwnershipType|null $value Value to set for the ownershipType property.
    */
    public function setOwnershipType(?FileStorageContainerOwnershipType $value): void {
        $this->getBackingStore()->set('ownershipType', $value);
    }

    /**
     * Sets the permissions property value. The set of permissions for users in the fileStorageContainer. The permission for each user is set by the roles property. The possible values are reader, writer, manager, and owner. Read-write.
     * @param array<Permission>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the recycleBin property value. Recycle bin of the fileStorageContainer. Read-only.
     * @param RecycleBin|null $value Value to set for the recycleBin property.
    */
    public function setRecycleBin(?RecycleBin $value): void {
        $this->getBackingStore()->set('recycleBin', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param FileStorageContainerSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?FileStorageContainerSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the sharePointGroups property value. The collection of sharePointGroup objects local to the container. Read-write.
     * @param array<SharePointGroup>|null $value Value to set for the sharePointGroups property.
    */
    public function setSharePointGroups(?array $value): void {
        $this->getBackingStore()->set('sharePointGroups', $value);
    }

    /**
     * Sets the status property value. Status of the fileStorageContainer. Containers are created as inactive and require activation. Inactive containers are subjected to automatic deletion in 24 hours. The possible values are: inactive, active. Read-only.
     * @param FileStorageContainerStatus|null $value Value to set for the status property.
    */
    public function setStatus(?FileStorageContainerStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the storageUsedInBytes property value. Storage used in the fileStorageContainer, in bytes. Read-only.
     * @param int|null $value Value to set for the storageUsedInBytes property.
    */
    public function setStorageUsedInBytes(?int $value): void {
        $this->getBackingStore()->set('storageUsedInBytes', $value);
    }

    /**
     * Sets the viewpoint property value. Data specific to the current user. Read-only.
     * @param FileStorageContainerViewpoint|null $value Value to set for the viewpoint property.
    */
    public function setViewpoint(?FileStorageContainerViewpoint $value): void {
        $this->getBackingStore()->set('viewpoint', $value);
    }

}
