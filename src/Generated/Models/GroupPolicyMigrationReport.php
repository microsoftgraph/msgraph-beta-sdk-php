<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyMigrationReport extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The date and time at which the GroupPolicyMigrationReport was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName The name of Group Policy Object from the GPO Xml Content
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $groupPolicyCreatedDateTime The date and time at which the GroupPolicyMigrationReport was created.
    */
    private ?DateTime $groupPolicyCreatedDateTime = null;
    
    /**
     * @var DateTime|null $groupPolicyLastModifiedDateTime The date and time at which the GroupPolicyMigrationReport was last modified.
    */
    private ?DateTime $groupPolicyLastModifiedDateTime = null;
    
    /**
     * @var string|null $groupPolicyObjectId The Group Policy Object GUID from GPO Xml content
    */
    private ?string $groupPolicyObjectId = null;
    
    /**
     * @var array<GroupPolicySettingMapping>|null $groupPolicySettingMappings A list of group policy settings to MDM/Intune mappings.
    */
    private ?array $groupPolicySettingMappings = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time at which the GroupPolicyMigrationReport was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var GroupPolicyMigrationReadiness|null $migrationReadiness Indicates if the Group Policy Object file is covered and ready for Intune migration.
    */
    private ?GroupPolicyMigrationReadiness $migrationReadiness = null;
    
    /**
     * @var string|null $ouDistinguishedName The distinguished name of the OU.
    */
    private ?string $ouDistinguishedName = null;
    
    /**
     * @var int|null $supportedSettingsCount The number of Group Policy Settings supported by Intune.
    */
    private ?int $supportedSettingsCount = null;
    
    /**
     * @var int|null $supportedSettingsPercent The Percentage of Group Policy Settings supported by Intune.
    */
    private ?int $supportedSettingsPercent = null;
    
    /**
     * @var bool|null $targetedInActiveDirectory The Targeted in AD property from GPO Xml Content
    */
    private ?bool $targetedInActiveDirectory = null;
    
    /**
     * @var int|null $totalSettingsCount The total number of Group Policy Settings from GPO file.
    */
    private ?int $totalSettingsCount = null;
    
    /**
     * @var array<UnsupportedGroupPolicyExtension>|null $unsupportedGroupPolicyExtensions A list of unsupported group policy extensions inside the Group Policy Object.
    */
    private ?array $unsupportedGroupPolicyExtensions = null;
    
    /**
     * Instantiates a new GroupPolicyMigrationReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyMigrationReport');
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
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The name of Group Policy Object from the GPO Xml Content
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
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'groupPolicyCreatedDateTime' => fn(ParseNode $n) => $o->setGroupPolicyCreatedDateTime($n->getDateTimeValue()),
            'groupPolicyLastModifiedDateTime' => fn(ParseNode $n) => $o->setGroupPolicyLastModifiedDateTime($n->getDateTimeValue()),
            'groupPolicyObjectId' => fn(ParseNode $n) => $o->setGroupPolicyObjectId($n->getStringValue()),
            'groupPolicySettingMappings' => fn(ParseNode $n) => $o->setGroupPolicySettingMappings($n->getCollectionOfObjectValues([GroupPolicySettingMapping::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'migrationReadiness' => fn(ParseNode $n) => $o->setMigrationReadiness($n->getEnumValue(GroupPolicyMigrationReadiness::class)),
            'ouDistinguishedName' => fn(ParseNode $n) => $o->setOuDistinguishedName($n->getStringValue()),
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
        return $this->groupPolicyCreatedDateTime;
    }

    /**
     * Gets the groupPolicyLastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     * @return DateTime|null
    */
    public function getGroupPolicyLastModifiedDateTime(): ?DateTime {
        return $this->groupPolicyLastModifiedDateTime;
    }

    /**
     * Gets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     * @return string|null
    */
    public function getGroupPolicyObjectId(): ?string {
        return $this->groupPolicyObjectId;
    }

    /**
     * Gets the groupPolicySettingMappings property value. A list of group policy settings to MDM/Intune mappings.
     * @return array<GroupPolicySettingMapping>|null
    */
    public function getGroupPolicySettingMappings(): ?array {
        return $this->groupPolicySettingMappings;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the migrationReadiness property value. Indicates if the Group Policy Object file is covered and ready for Intune migration.
     * @return GroupPolicyMigrationReadiness|null
    */
    public function getMigrationReadiness(): ?GroupPolicyMigrationReadiness {
        return $this->migrationReadiness;
    }

    /**
     * Gets the ouDistinguishedName property value. The distinguished name of the OU.
     * @return string|null
    */
    public function getOuDistinguishedName(): ?string {
        return $this->ouDistinguishedName;
    }

    /**
     * Gets the supportedSettingsCount property value. The number of Group Policy Settings supported by Intune.
     * @return int|null
    */
    public function getSupportedSettingsCount(): ?int {
        return $this->supportedSettingsCount;
    }

    /**
     * Gets the supportedSettingsPercent property value. The Percentage of Group Policy Settings supported by Intune.
     * @return int|null
    */
    public function getSupportedSettingsPercent(): ?int {
        return $this->supportedSettingsPercent;
    }

    /**
     * Gets the targetedInActiveDirectory property value. The Targeted in AD property from GPO Xml Content
     * @return bool|null
    */
    public function getTargetedInActiveDirectory(): ?bool {
        return $this->targetedInActiveDirectory;
    }

    /**
     * Gets the totalSettingsCount property value. The total number of Group Policy Settings from GPO file.
     * @return int|null
    */
    public function getTotalSettingsCount(): ?int {
        return $this->totalSettingsCount;
    }

    /**
     * Gets the unsupportedGroupPolicyExtensions property value. A list of unsupported group policy extensions inside the Group Policy Object.
     * @return array<UnsupportedGroupPolicyExtension>|null
    */
    public function getUnsupportedGroupPolicyExtensions(): ?array {
        return $this->unsupportedGroupPolicyExtensions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('groupPolicyCreatedDateTime', $this->groupPolicyCreatedDateTime);
        $writer->writeDateTimeValue('groupPolicyLastModifiedDateTime', $this->groupPolicyLastModifiedDateTime);
        $writer->writeStringValue('groupPolicyObjectId', $this->groupPolicyObjectId);
        $writer->writeCollectionOfObjectValues('groupPolicySettingMappings', $this->groupPolicySettingMappings);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('migrationReadiness', $this->migrationReadiness);
        $writer->writeStringValue('ouDistinguishedName', $this->ouDistinguishedName);
        $writer->writeIntegerValue('supportedSettingsCount', $this->supportedSettingsCount);
        $writer->writeIntegerValue('supportedSettingsPercent', $this->supportedSettingsPercent);
        $writer->writeBooleanValue('targetedInActiveDirectory', $this->targetedInActiveDirectory);
        $writer->writeIntegerValue('totalSettingsCount', $this->totalSettingsCount);
        $writer->writeCollectionOfObjectValues('unsupportedGroupPolicyExtensions', $this->unsupportedGroupPolicyExtensions);
    }

    /**
     * Sets the createdDateTime property value. The date and time at which the GroupPolicyMigrationReport was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The name of Group Policy Object from the GPO Xml Content
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the groupPolicyCreatedDateTime property value. The date and time at which the GroupPolicyMigrationReport was created.
     *  @param DateTime|null $value Value to set for the groupPolicyCreatedDateTime property.
    */
    public function setGroupPolicyCreatedDateTime(?DateTime $value ): void {
        $this->groupPolicyCreatedDateTime = $value;
    }

    /**
     * Sets the groupPolicyLastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     *  @param DateTime|null $value Value to set for the groupPolicyLastModifiedDateTime property.
    */
    public function setGroupPolicyLastModifiedDateTime(?DateTime $value ): void {
        $this->groupPolicyLastModifiedDateTime = $value;
    }

    /**
     * Sets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     *  @param string|null $value Value to set for the groupPolicyObjectId property.
    */
    public function setGroupPolicyObjectId(?string $value ): void {
        $this->groupPolicyObjectId = $value;
    }

    /**
     * Sets the groupPolicySettingMappings property value. A list of group policy settings to MDM/Intune mappings.
     *  @param array<GroupPolicySettingMapping>|null $value Value to set for the groupPolicySettingMappings property.
    */
    public function setGroupPolicySettingMappings(?array $value ): void {
        $this->groupPolicySettingMappings = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time at which the GroupPolicyMigrationReport was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the migrationReadiness property value. Indicates if the Group Policy Object file is covered and ready for Intune migration.
     *  @param GroupPolicyMigrationReadiness|null $value Value to set for the migrationReadiness property.
    */
    public function setMigrationReadiness(?GroupPolicyMigrationReadiness $value ): void {
        $this->migrationReadiness = $value;
    }

    /**
     * Sets the ouDistinguishedName property value. The distinguished name of the OU.
     *  @param string|null $value Value to set for the ouDistinguishedName property.
    */
    public function setOuDistinguishedName(?string $value ): void {
        $this->ouDistinguishedName = $value;
    }

    /**
     * Sets the supportedSettingsCount property value. The number of Group Policy Settings supported by Intune.
     *  @param int|null $value Value to set for the supportedSettingsCount property.
    */
    public function setSupportedSettingsCount(?int $value ): void {
        $this->supportedSettingsCount = $value;
    }

    /**
     * Sets the supportedSettingsPercent property value. The Percentage of Group Policy Settings supported by Intune.
     *  @param int|null $value Value to set for the supportedSettingsPercent property.
    */
    public function setSupportedSettingsPercent(?int $value ): void {
        $this->supportedSettingsPercent = $value;
    }

    /**
     * Sets the targetedInActiveDirectory property value. The Targeted in AD property from GPO Xml Content
     *  @param bool|null $value Value to set for the targetedInActiveDirectory property.
    */
    public function setTargetedInActiveDirectory(?bool $value ): void {
        $this->targetedInActiveDirectory = $value;
    }

    /**
     * Sets the totalSettingsCount property value. The total number of Group Policy Settings from GPO file.
     *  @param int|null $value Value to set for the totalSettingsCount property.
    */
    public function setTotalSettingsCount(?int $value ): void {
        $this->totalSettingsCount = $value;
    }

    /**
     * Sets the unsupportedGroupPolicyExtensions property value. A list of unsupported group policy extensions inside the Group Policy Object.
     *  @param array<UnsupportedGroupPolicyExtension>|null $value Value to set for the unsupportedGroupPolicyExtensions property.
    */
    public function setUnsupportedGroupPolicyExtensions(?array $value ): void {
        $this->unsupportedGroupPolicyExtensions = $value;
    }

}
