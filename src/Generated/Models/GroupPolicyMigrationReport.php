<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyMigrationReport extends Entity implements Parsable 
{
    /**
     * Instantiates a new groupPolicyMigrationReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyMigrationReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyMigrationReport {
        return new GroupPolicyMigrationReport();
    }

    /**
     * Gets the createdDateTime property value. The date and time at which the GroupPolicyMigrationReport was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the displayName property value. The name of Group Policy Object from the GPO Xml Content
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
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'groupPolicyCreatedDateTime' => fn(ParseNode $n) => $o->setGroupPolicyCreatedDateTime($n->getDateTimeValue()),
            'groupPolicyLastModifiedDateTime' => fn(ParseNode $n) => $o->setGroupPolicyLastModifiedDateTime($n->getDateTimeValue()),
            'groupPolicyObjectId' => fn(ParseNode $n) => $o->setGroupPolicyObjectId($n->getObjectValue([Guid::class, 'createFromDiscriminatorValue'])),
            'groupPolicySettingMappings' => fn(ParseNode $n) => $o->setGroupPolicySettingMappings($n->getCollectionOfObjectValues([GroupPolicySettingMapping::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'migrationReadiness' => fn(ParseNode $n) => $o->setMigrationReadiness($n->getEnumValue(GroupPolicyMigrationReadiness::class)),
            'ouDistinguishedName' => fn(ParseNode $n) => $o->setOuDistinguishedName($n->getStringValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'supportedSettingsCount' => fn(ParseNode $n) => $o->setSupportedSettingsCount($n->getIntegerValue()),
            'supportedSettingsPercent' => fn(ParseNode $n) => $o->setSupportedSettingsPercent($n->getIntegerValue()),
            'targetedInActiveDirectory' => fn(ParseNode $n) => $o->setTargetedInActiveDirectory($n->getBooleanValue()),
            'totalSettingsCount' => fn(ParseNode $n) => $o->setTotalSettingsCount($n->getIntegerValue()),
            'unsupportedGroupPolicyExtensions' => fn(ParseNode $n) => $o->setUnsupportedGroupPolicyExtensions($n->getCollectionOfObjectValues([UnsupportedGroupPolicyExtension::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupPolicyCreatedDateTime property value. The date and time at which the GroupPolicyMigrationReport was created.
     * @return DateTime|null
    */
    public function getGroupPolicyCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('groupPolicyCreatedDateTime');
    }

    /**
     * Gets the groupPolicyLastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     * @return DateTime|null
    */
    public function getGroupPolicyLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('groupPolicyLastModifiedDateTime');
    }

    /**
     * Gets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     * @return Guid|null
    */
    public function getGroupPolicyObjectId(): ?Guid {
        return $this->getBackingStore()->get('groupPolicyObjectId');
    }

    /**
     * Gets the groupPolicySettingMappings property value. A list of group policy settings to MDM/Intune mappings.
     * @return array<GroupPolicySettingMapping>|null
    */
    public function getGroupPolicySettingMappings(): ?array {
        return $this->getBackingStore()->get('groupPolicySettingMappings');
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the migrationReadiness property value. Indicates if the Group Policy Object file is covered and ready for Intune migration.
     * @return GroupPolicyMigrationReadiness|null
    */
    public function getMigrationReadiness(): ?GroupPolicyMigrationReadiness {
        return $this->getBackingStore()->get('migrationReadiness');
    }

    /**
     * Gets the ouDistinguishedName property value. The distinguished name of the OU.
     * @return string|null
    */
    public function getOuDistinguishedName(): ?string {
        return $this->getBackingStore()->get('ouDistinguishedName');
    }

    /**
     * Gets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the supportedSettingsCount property value. The number of Group Policy Settings supported by Intune.
     * @return int|null
    */
    public function getSupportedSettingsCount(): ?int {
        return $this->getBackingStore()->get('supportedSettingsCount');
    }

    /**
     * Gets the supportedSettingsPercent property value. The Percentage of Group Policy Settings supported by Intune.
     * @return int|null
    */
    public function getSupportedSettingsPercent(): ?int {
        return $this->getBackingStore()->get('supportedSettingsPercent');
    }

    /**
     * Gets the targetedInActiveDirectory property value. The Targeted in AD property from GPO Xml Content
     * @return bool|null
    */
    public function getTargetedInActiveDirectory(): ?bool {
        return $this->getBackingStore()->get('targetedInActiveDirectory');
    }

    /**
     * Gets the totalSettingsCount property value. The total number of Group Policy Settings from GPO file.
     * @return int|null
    */
    public function getTotalSettingsCount(): ?int {
        return $this->getBackingStore()->get('totalSettingsCount');
    }

    /**
     * Gets the unsupportedGroupPolicyExtensions property value. A list of unsupported group policy extensions inside the Group Policy Object.
     * @return array<UnsupportedGroupPolicyExtension>|null
    */
    public function getUnsupportedGroupPolicyExtensions(): ?array {
        return $this->getBackingStore()->get('unsupportedGroupPolicyExtensions');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('groupPolicyCreatedDateTime', $this->getGroupPolicyCreatedDateTime());
        $writer->writeDateTimeValue('groupPolicyLastModifiedDateTime', $this->getGroupPolicyLastModifiedDateTime());
        $writer->writeStringValue('groupPolicyObjectId', $this->getGroupPolicyObjectId());
        $writer->writeCollectionOfObjectValues('groupPolicySettingMappings', $this->getGroupPolicySettingMappings());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('migrationReadiness', $this->getMigrationReadiness());
        $writer->writeStringValue('ouDistinguishedName', $this->getOuDistinguishedName());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeIntegerValue('supportedSettingsCount', $this->getSupportedSettingsCount());
        $writer->writeIntegerValue('supportedSettingsPercent', $this->getSupportedSettingsPercent());
        $writer->writeBooleanValue('targetedInActiveDirectory', $this->getTargetedInActiveDirectory());
        $writer->writeIntegerValue('totalSettingsCount', $this->getTotalSettingsCount());
        $writer->writeCollectionOfObjectValues('unsupportedGroupPolicyExtensions', $this->getUnsupportedGroupPolicyExtensions());
    }

    /**
     * Sets the createdDateTime property value. The date and time at which the GroupPolicyMigrationReport was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The name of Group Policy Object from the GPO Xml Content
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the groupPolicyCreatedDateTime property value. The date and time at which the GroupPolicyMigrationReport was created.
     *  @param DateTime|null $value Value to set for the groupPolicyCreatedDateTime property.
    */
    public function setGroupPolicyCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('groupPolicyCreatedDateTime', $value);
    }

    /**
     * Sets the groupPolicyLastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     *  @param DateTime|null $value Value to set for the groupPolicyLastModifiedDateTime property.
    */
    public function setGroupPolicyLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('groupPolicyLastModifiedDateTime', $value);
    }

    /**
     * Sets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     *  @param Guid|null $value Value to set for the groupPolicyObjectId property.
    */
    public function setGroupPolicyObjectId(?Guid $value): void {
        $this->getBackingStore()->set('groupPolicyObjectId', $value);
    }

    /**
     * Sets the groupPolicySettingMappings property value. A list of group policy settings to MDM/Intune mappings.
     *  @param array<GroupPolicySettingMapping>|null $value Value to set for the groupPolicySettingMappings property.
    */
    public function setGroupPolicySettingMappings(?array $value): void {
        $this->getBackingStore()->set('groupPolicySettingMappings', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the migrationReadiness property value. Indicates if the Group Policy Object file is covered and ready for Intune migration.
     *  @param GroupPolicyMigrationReadiness|null $value Value to set for the migrationReadiness property.
    */
    public function setMigrationReadiness(?GroupPolicyMigrationReadiness $value): void {
        $this->getBackingStore()->set('migrationReadiness', $value);
    }

    /**
     * Sets the ouDistinguishedName property value. The distinguished name of the OU.
     *  @param string|null $value Value to set for the ouDistinguishedName property.
    */
    public function setOuDistinguishedName(?string $value): void {
        $this->getBackingStore()->set('ouDistinguishedName', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. The list of scope tags for the configuration.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the supportedSettingsCount property value. The number of Group Policy Settings supported by Intune.
     *  @param int|null $value Value to set for the supportedSettingsCount property.
    */
    public function setSupportedSettingsCount(?int $value): void {
        $this->getBackingStore()->set('supportedSettingsCount', $value);
    }

    /**
     * Sets the supportedSettingsPercent property value. The Percentage of Group Policy Settings supported by Intune.
     *  @param int|null $value Value to set for the supportedSettingsPercent property.
    */
    public function setSupportedSettingsPercent(?int $value): void {
        $this->getBackingStore()->set('supportedSettingsPercent', $value);
    }

    /**
     * Sets the targetedInActiveDirectory property value. The Targeted in AD property from GPO Xml Content
     *  @param bool|null $value Value to set for the targetedInActiveDirectory property.
    */
    public function setTargetedInActiveDirectory(?bool $value): void {
        $this->getBackingStore()->set('targetedInActiveDirectory', $value);
    }

    /**
     * Sets the totalSettingsCount property value. The total number of Group Policy Settings from GPO file.
     *  @param int|null $value Value to set for the totalSettingsCount property.
    */
    public function setTotalSettingsCount(?int $value): void {
        $this->getBackingStore()->set('totalSettingsCount', $value);
    }

    /**
     * Sets the unsupportedGroupPolicyExtensions property value. A list of unsupported group policy extensions inside the Group Policy Object.
     *  @param array<UnsupportedGroupPolicyExtension>|null $value Value to set for the unsupportedGroupPolicyExtensions property.
    */
    public function setUnsupportedGroupPolicyExtensions(?array $value): void {
        $this->getBackingStore()->set('unsupportedGroupPolicyExtensions', $value);
    }

}
