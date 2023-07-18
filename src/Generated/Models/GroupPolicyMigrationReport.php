<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The Group Policy migration report.
*/
class GroupPolicyMigrationReport extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. The name of Group Policy Object from the GPO Xml Content
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'groupPolicyCreatedDateTime' => fn(ParseNode $n) => $o->setGroupPolicyCreatedDateTime($n->getDateTimeValue()),
            'groupPolicyLastModifiedDateTime' => fn(ParseNode $n) => $o->setGroupPolicyLastModifiedDateTime($n->getDateTimeValue()),
            'groupPolicyObjectId' => fn(ParseNode $n) => $o->setGroupPolicyObjectId($n->getStringValue()),
            'groupPolicySettingMappings' => fn(ParseNode $n) => $o->setGroupPolicySettingMappings($n->getCollectionOfObjectValues([GroupPolicySettingMapping::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'migrationReadiness' => fn(ParseNode $n) => $o->setMigrationReadiness($n->getEnumValue(GroupPolicyMigrationReadiness::class)),
            'ouDistinguishedName' => fn(ParseNode $n) => $o->setOuDistinguishedName($n->getStringValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
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
        $val = $this->getBackingStore()->get('groupPolicyCreatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyCreatedDateTime'");
    }

    /**
     * Gets the groupPolicyLastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     * @return DateTime|null
    */
    public function getGroupPolicyLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('groupPolicyLastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyLastModifiedDateTime'");
    }

    /**
     * Gets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     * @return string|null
    */
    public function getGroupPolicyObjectId(): ?string {
        $val = $this->getBackingStore()->get('groupPolicyObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyObjectId'");
    }

    /**
     * Gets the groupPolicySettingMappings property value. A list of group policy settings to MDM/Intune mappings.
     * @return array<GroupPolicySettingMapping>|null
    */
    public function getGroupPolicySettingMappings(): ?array {
        $val = $this->getBackingStore()->get('groupPolicySettingMappings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicySettingMapping::class);
            /** @var array<GroupPolicySettingMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicySettingMappings'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the migrationReadiness property value. Indicates if the Group Policy Object file is covered and ready for Intune migration.
     * @return GroupPolicyMigrationReadiness|null
    */
    public function getMigrationReadiness(): ?GroupPolicyMigrationReadiness {
        $val = $this->getBackingStore()->get('migrationReadiness');
        if (is_null($val) || $val instanceof GroupPolicyMigrationReadiness) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'migrationReadiness'");
    }

    /**
     * Gets the ouDistinguishedName property value. The distinguished name of the OU.
     * @return string|null
    */
    public function getOuDistinguishedName(): ?string {
        $val = $this->getBackingStore()->get('ouDistinguishedName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ouDistinguishedName'");
    }

    /**
     * Gets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the supportedSettingsCount property value. The number of Group Policy Settings supported by Intune.
     * @return int|null
    */
    public function getSupportedSettingsCount(): ?int {
        $val = $this->getBackingStore()->get('supportedSettingsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedSettingsCount'");
    }

    /**
     * Gets the supportedSettingsPercent property value. The Percentage of Group Policy Settings supported by Intune.
     * @return int|null
    */
    public function getSupportedSettingsPercent(): ?int {
        $val = $this->getBackingStore()->get('supportedSettingsPercent');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedSettingsPercent'");
    }

    /**
     * Gets the targetedInActiveDirectory property value. The Targeted in AD property from GPO Xml Content
     * @return bool|null
    */
    public function getTargetedInActiveDirectory(): ?bool {
        $val = $this->getBackingStore()->get('targetedInActiveDirectory');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedInActiveDirectory'");
    }

    /**
     * Gets the totalSettingsCount property value. The total number of Group Policy Settings from GPO file.
     * @return int|null
    */
    public function getTotalSettingsCount(): ?int {
        $val = $this->getBackingStore()->get('totalSettingsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalSettingsCount'");
    }

    /**
     * Gets the unsupportedGroupPolicyExtensions property value. A list of unsupported group policy extensions inside the Group Policy Object.
     * @return array<UnsupportedGroupPolicyExtension>|null
    */
    public function getUnsupportedGroupPolicyExtensions(): ?array {
        $val = $this->getBackingStore()->get('unsupportedGroupPolicyExtensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnsupportedGroupPolicyExtension::class);
            /** @var array<UnsupportedGroupPolicyExtension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unsupportedGroupPolicyExtensions'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The name of Group Policy Object from the GPO Xml Content
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the groupPolicyCreatedDateTime property value. The date and time at which the GroupPolicyMigrationReport was created.
     * @param DateTime|null $value Value to set for the groupPolicyCreatedDateTime property.
    */
    public function setGroupPolicyCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('groupPolicyCreatedDateTime', $value);
    }

    /**
     * Sets the groupPolicyLastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     * @param DateTime|null $value Value to set for the groupPolicyLastModifiedDateTime property.
    */
    public function setGroupPolicyLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('groupPolicyLastModifiedDateTime', $value);
    }

    /**
     * Sets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     * @param string|null $value Value to set for the groupPolicyObjectId property.
    */
    public function setGroupPolicyObjectId(?string $value): void {
        $this->getBackingStore()->set('groupPolicyObjectId', $value);
    }

    /**
     * Sets the groupPolicySettingMappings property value. A list of group policy settings to MDM/Intune mappings.
     * @param array<GroupPolicySettingMapping>|null $value Value to set for the groupPolicySettingMappings property.
    */
    public function setGroupPolicySettingMappings(?array $value): void {
        $this->getBackingStore()->set('groupPolicySettingMappings', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the migrationReadiness property value. Indicates if the Group Policy Object file is covered and ready for Intune migration.
     * @param GroupPolicyMigrationReadiness|null $value Value to set for the migrationReadiness property.
    */
    public function setMigrationReadiness(?GroupPolicyMigrationReadiness $value): void {
        $this->getBackingStore()->set('migrationReadiness', $value);
    }

    /**
     * Sets the ouDistinguishedName property value. The distinguished name of the OU.
     * @param string|null $value Value to set for the ouDistinguishedName property.
    */
    public function setOuDistinguishedName(?string $value): void {
        $this->getBackingStore()->set('ouDistinguishedName', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the supportedSettingsCount property value. The number of Group Policy Settings supported by Intune.
     * @param int|null $value Value to set for the supportedSettingsCount property.
    */
    public function setSupportedSettingsCount(?int $value): void {
        $this->getBackingStore()->set('supportedSettingsCount', $value);
    }

    /**
     * Sets the supportedSettingsPercent property value. The Percentage of Group Policy Settings supported by Intune.
     * @param int|null $value Value to set for the supportedSettingsPercent property.
    */
    public function setSupportedSettingsPercent(?int $value): void {
        $this->getBackingStore()->set('supportedSettingsPercent', $value);
    }

    /**
     * Sets the targetedInActiveDirectory property value. The Targeted in AD property from GPO Xml Content
     * @param bool|null $value Value to set for the targetedInActiveDirectory property.
    */
    public function setTargetedInActiveDirectory(?bool $value): void {
        $this->getBackingStore()->set('targetedInActiveDirectory', $value);
    }

    /**
     * Sets the totalSettingsCount property value. The total number of Group Policy Settings from GPO file.
     * @param int|null $value Value to set for the totalSettingsCount property.
    */
    public function setTotalSettingsCount(?int $value): void {
        $this->getBackingStore()->set('totalSettingsCount', $value);
    }

    /**
     * Sets the unsupportedGroupPolicyExtensions property value. A list of unsupported group policy extensions inside the Group Policy Object.
     * @param array<UnsupportedGroupPolicyExtension>|null $value Value to set for the unsupportedGroupPolicyExtensions property.
    */
    public function setUnsupportedGroupPolicyExtensions(?array $value): void {
        $this->getBackingStore()->set('unsupportedGroupPolicyExtensions', $value);
    }

}
