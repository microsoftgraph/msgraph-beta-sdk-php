<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicySettingMapping extends Entity 
{
    /** @var string|null $admxSettingDefinitionId Admx Group Policy Id */
    private ?string $admxSettingDefinitionId = null;
    
    /** @var array<string>|null $childIdList List of Child Ids of the group policy setting. */
    private ?array $childIdList = null;
    
    /** @var string|null $intuneSettingDefinitionId The Intune Setting Definition Id */
    private ?string $intuneSettingDefinitionId = null;
    
    /** @var array<string>|null $intuneSettingUriList The list of Intune Setting URIs this group policy setting maps to */
    private ?array $intuneSettingUriList = null;
    
    /** @var bool|null $isMdmSupported Indicates if the setting is supported by Intune or not */
    private ?bool $isMdmSupported = null;
    
    /** @var string|null $mdmCspName The CSP name this group policy setting maps to. */
    private ?string $mdmCspName = null;
    
    /** @var int|null $mdmMinimumOSVersion The minimum OS version this mdm setting supports. */
    private ?int $mdmMinimumOSVersion = null;
    
    /** @var string|null $mdmSettingUri The MDM CSP URI this group policy setting maps to. */
    private ?string $mdmSettingUri = null;
    
    /** @var MdmSupportedState|null $mdmSupportedState Indicates if the setting is supported in Mdm or not. Possible values are: unknown, supported, unsupported, deprecated. */
    private ?MdmSupportedState $mdmSupportedState = null;
    
    /** @var string|null $parentId Parent Id of the group policy setting. */
    private ?string $parentId = null;
    
    /** @var string|null $settingCategory The category the group policy setting is in. */
    private ?string $settingCategory = null;
    
    /** @var string|null $settingDisplayName The display name of this group policy setting. */
    private ?string $settingDisplayName = null;
    
    /** @var string|null $settingDisplayValue The display value of this group policy setting. */
    private ?string $settingDisplayValue = null;
    
    /** @var string|null $settingDisplayValueType The display value type of this group policy setting. */
    private ?string $settingDisplayValueType = null;
    
    /** @var string|null $settingName The name of this group policy setting. */
    private ?string $settingName = null;
    
    /** @var GroupPolicySettingScope|null $settingScope The scope of the setting. Possible values are: unknown, device, user. */
    private ?GroupPolicySettingScope $settingScope = null;
    
    /** @var GroupPolicySettingType|null $settingType The setting type (security or admx) of the Group Policy. Possible values are: unknown, policy, account, securityOptions, userRightsAssignment, auditSetting, windowsFirewallSettings, appLockerRuleCollection, dataSourcesSettings, devicesSettings, driveMapSettings, environmentVariables, filesSettings, folderOptions, folders, iniFiles, internetOptions, localUsersAndGroups, networkOptions, networkShares, ntServices, powerOptions, printers, regionalOptionsSettings, registrySettings, scheduledTasks, shortcutSettings, startMenuSettings. */
    private ?GroupPolicySettingType $settingType = null;
    
    /** @var string|null $settingValue The value of this group policy setting. */
    private ?string $settingValue = null;
    
    /** @var string|null $settingValueDisplayUnits The display units of this group policy setting value */
    private ?string $settingValueDisplayUnits = null;
    
    /** @var string|null $settingValueType The value type of this group policy setting. */
    private ?string $settingValueType = null;
    
    /**
     * Instantiates a new groupPolicySettingMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicySettingMapping
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicySettingMapping {
        return new GroupPolicySettingMapping();
    }

    /**
     * Gets the admxSettingDefinitionId property value. Admx Group Policy Id
     * @return string|null
    */
    public function getAdmxSettingDefinitionId(): ?string {
        return $this->admxSettingDefinitionId;
    }

    /**
     * Gets the childIdList property value. List of Child Ids of the group policy setting.
     * @return array<string>|null
    */
    public function getChildIdList(): ?array {
        return $this->childIdList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'admxSettingDefinitionId' => function (self $o, ParseNode $n) { $o->setAdmxSettingDefinitionId($n->getStringValue()); },
            'childIdList' => function (self $o, ParseNode $n) { $o->setChildIdList($n->getCollectionOfPrimitiveValues()); },
            'intuneSettingDefinitionId' => function (self $o, ParseNode $n) { $o->setIntuneSettingDefinitionId($n->getStringValue()); },
            'intuneSettingUriList' => function (self $o, ParseNode $n) { $o->setIntuneSettingUriList($n->getCollectionOfPrimitiveValues()); },
            'isMdmSupported' => function (self $o, ParseNode $n) { $o->setIsMdmSupported($n->getBooleanValue()); },
            'mdmCspName' => function (self $o, ParseNode $n) { $o->setMdmCspName($n->getStringValue()); },
            'mdmMinimumOSVersion' => function (self $o, ParseNode $n) { $o->setMdmMinimumOSVersion($n->getIntegerValue()); },
            'mdmSettingUri' => function (self $o, ParseNode $n) { $o->setMdmSettingUri($n->getStringValue()); },
            'mdmSupportedState' => function (self $o, ParseNode $n) { $o->setMdmSupportedState($n->getEnumValue(MdmSupportedState::class)); },
            'parentId' => function (self $o, ParseNode $n) { $o->setParentId($n->getStringValue()); },
            'settingCategory' => function (self $o, ParseNode $n) { $o->setSettingCategory($n->getStringValue()); },
            'settingDisplayName' => function (self $o, ParseNode $n) { $o->setSettingDisplayName($n->getStringValue()); },
            'settingDisplayValue' => function (self $o, ParseNode $n) { $o->setSettingDisplayValue($n->getStringValue()); },
            'settingDisplayValueType' => function (self $o, ParseNode $n) { $o->setSettingDisplayValueType($n->getStringValue()); },
            'settingName' => function (self $o, ParseNode $n) { $o->setSettingName($n->getStringValue()); },
            'settingScope' => function (self $o, ParseNode $n) { $o->setSettingScope($n->getEnumValue(GroupPolicySettingScope::class)); },
            'settingType' => function (self $o, ParseNode $n) { $o->setSettingType($n->getEnumValue(GroupPolicySettingType::class)); },
            'settingValue' => function (self $o, ParseNode $n) { $o->setSettingValue($n->getStringValue()); },
            'settingValueDisplayUnits' => function (self $o, ParseNode $n) { $o->setSettingValueDisplayUnits($n->getStringValue()); },
            'settingValueType' => function (self $o, ParseNode $n) { $o->setSettingValueType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the intuneSettingDefinitionId property value. The Intune Setting Definition Id
     * @return string|null
    */
    public function getIntuneSettingDefinitionId(): ?string {
        return $this->intuneSettingDefinitionId;
    }

    /**
     * Gets the intuneSettingUriList property value. The list of Intune Setting URIs this group policy setting maps to
     * @return array<string>|null
    */
    public function getIntuneSettingUriList(): ?array {
        return $this->intuneSettingUriList;
    }

    /**
     * Gets the isMdmSupported property value. Indicates if the setting is supported by Intune or not
     * @return bool|null
    */
    public function getIsMdmSupported(): ?bool {
        return $this->isMdmSupported;
    }

    /**
     * Gets the mdmCspName property value. The CSP name this group policy setting maps to.
     * @return string|null
    */
    public function getMdmCspName(): ?string {
        return $this->mdmCspName;
    }

    /**
     * Gets the mdmMinimumOSVersion property value. The minimum OS version this mdm setting supports.
     * @return int|null
    */
    public function getMdmMinimumOSVersion(): ?int {
        return $this->mdmMinimumOSVersion;
    }

    /**
     * Gets the mdmSettingUri property value. The MDM CSP URI this group policy setting maps to.
     * @return string|null
    */
    public function getMdmSettingUri(): ?string {
        return $this->mdmSettingUri;
    }

    /**
     * Gets the mdmSupportedState property value. Indicates if the setting is supported in Mdm or not. Possible values are: unknown, supported, unsupported, deprecated.
     * @return MdmSupportedState|null
    */
    public function getMdmSupportedState(): ?MdmSupportedState {
        return $this->mdmSupportedState;
    }

    /**
     * Gets the parentId property value. Parent Id of the group policy setting.
     * @return string|null
    */
    public function getParentId(): ?string {
        return $this->parentId;
    }

    /**
     * Gets the settingCategory property value. The category the group policy setting is in.
     * @return string|null
    */
    public function getSettingCategory(): ?string {
        return $this->settingCategory;
    }

    /**
     * Gets the settingDisplayName property value. The display name of this group policy setting.
     * @return string|null
    */
    public function getSettingDisplayName(): ?string {
        return $this->settingDisplayName;
    }

    /**
     * Gets the settingDisplayValue property value. The display value of this group policy setting.
     * @return string|null
    */
    public function getSettingDisplayValue(): ?string {
        return $this->settingDisplayValue;
    }

    /**
     * Gets the settingDisplayValueType property value. The display value type of this group policy setting.
     * @return string|null
    */
    public function getSettingDisplayValueType(): ?string {
        return $this->settingDisplayValueType;
    }

    /**
     * Gets the settingName property value. The name of this group policy setting.
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Gets the settingScope property value. The scope of the setting. Possible values are: unknown, device, user.
     * @return GroupPolicySettingScope|null
    */
    public function getSettingScope(): ?GroupPolicySettingScope {
        return $this->settingScope;
    }

    /**
     * Gets the settingType property value. The setting type (security or admx) of the Group Policy. Possible values are: unknown, policy, account, securityOptions, userRightsAssignment, auditSetting, windowsFirewallSettings, appLockerRuleCollection, dataSourcesSettings, devicesSettings, driveMapSettings, environmentVariables, filesSettings, folderOptions, folders, iniFiles, internetOptions, localUsersAndGroups, networkOptions, networkShares, ntServices, powerOptions, printers, regionalOptionsSettings, registrySettings, scheduledTasks, shortcutSettings, startMenuSettings.
     * @return GroupPolicySettingType|null
    */
    public function getSettingType(): ?GroupPolicySettingType {
        return $this->settingType;
    }

    /**
     * Gets the settingValue property value. The value of this group policy setting.
     * @return string|null
    */
    public function getSettingValue(): ?string {
        return $this->settingValue;
    }

    /**
     * Gets the settingValueDisplayUnits property value. The display units of this group policy setting value
     * @return string|null
    */
    public function getSettingValueDisplayUnits(): ?string {
        return $this->settingValueDisplayUnits;
    }

    /**
     * Gets the settingValueType property value. The value type of this group policy setting.
     * @return string|null
    */
    public function getSettingValueType(): ?string {
        return $this->settingValueType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('admxSettingDefinitionId', $this->admxSettingDefinitionId);
        $writer->writeCollectionOfPrimitiveValues('childIdList', $this->childIdList);
        $writer->writeStringValue('intuneSettingDefinitionId', $this->intuneSettingDefinitionId);
        $writer->writeCollectionOfPrimitiveValues('intuneSettingUriList', $this->intuneSettingUriList);
        $writer->writeBooleanValue('isMdmSupported', $this->isMdmSupported);
        $writer->writeStringValue('mdmCspName', $this->mdmCspName);
        $writer->writeIntegerValue('mdmMinimumOSVersion', $this->mdmMinimumOSVersion);
        $writer->writeStringValue('mdmSettingUri', $this->mdmSettingUri);
        $writer->writeEnumValue('mdmSupportedState', $this->mdmSupportedState);
        $writer->writeStringValue('parentId', $this->parentId);
        $writer->writeStringValue('settingCategory', $this->settingCategory);
        $writer->writeStringValue('settingDisplayName', $this->settingDisplayName);
        $writer->writeStringValue('settingDisplayValue', $this->settingDisplayValue);
        $writer->writeStringValue('settingDisplayValueType', $this->settingDisplayValueType);
        $writer->writeStringValue('settingName', $this->settingName);
        $writer->writeEnumValue('settingScope', $this->settingScope);
        $writer->writeEnumValue('settingType', $this->settingType);
        $writer->writeStringValue('settingValue', $this->settingValue);
        $writer->writeStringValue('settingValueDisplayUnits', $this->settingValueDisplayUnits);
        $writer->writeStringValue('settingValueType', $this->settingValueType);
    }

    /**
     * Sets the admxSettingDefinitionId property value. Admx Group Policy Id
     *  @param string|null $value Value to set for the admxSettingDefinitionId property.
    */
    public function setAdmxSettingDefinitionId(?string $value ): void {
        $this->admxSettingDefinitionId = $value;
    }

    /**
     * Sets the childIdList property value. List of Child Ids of the group policy setting.
     *  @param array<string>|null $value Value to set for the childIdList property.
    */
    public function setChildIdList(?array $value ): void {
        $this->childIdList = $value;
    }

    /**
     * Sets the intuneSettingDefinitionId property value. The Intune Setting Definition Id
     *  @param string|null $value Value to set for the intuneSettingDefinitionId property.
    */
    public function setIntuneSettingDefinitionId(?string $value ): void {
        $this->intuneSettingDefinitionId = $value;
    }

    /**
     * Sets the intuneSettingUriList property value. The list of Intune Setting URIs this group policy setting maps to
     *  @param array<string>|null $value Value to set for the intuneSettingUriList property.
    */
    public function setIntuneSettingUriList(?array $value ): void {
        $this->intuneSettingUriList = $value;
    }

    /**
     * Sets the isMdmSupported property value. Indicates if the setting is supported by Intune or not
     *  @param bool|null $value Value to set for the isMdmSupported property.
    */
    public function setIsMdmSupported(?bool $value ): void {
        $this->isMdmSupported = $value;
    }

    /**
     * Sets the mdmCspName property value. The CSP name this group policy setting maps to.
     *  @param string|null $value Value to set for the mdmCspName property.
    */
    public function setMdmCspName(?string $value ): void {
        $this->mdmCspName = $value;
    }

    /**
     * Sets the mdmMinimumOSVersion property value. The minimum OS version this mdm setting supports.
     *  @param int|null $value Value to set for the mdmMinimumOSVersion property.
    */
    public function setMdmMinimumOSVersion(?int $value ): void {
        $this->mdmMinimumOSVersion = $value;
    }

    /**
     * Sets the mdmSettingUri property value. The MDM CSP URI this group policy setting maps to.
     *  @param string|null $value Value to set for the mdmSettingUri property.
    */
    public function setMdmSettingUri(?string $value ): void {
        $this->mdmSettingUri = $value;
    }

    /**
     * Sets the mdmSupportedState property value. Indicates if the setting is supported in Mdm or not. Possible values are: unknown, supported, unsupported, deprecated.
     *  @param MdmSupportedState|null $value Value to set for the mdmSupportedState property.
    */
    public function setMdmSupportedState(?MdmSupportedState $value ): void {
        $this->mdmSupportedState = $value;
    }

    /**
     * Sets the parentId property value. Parent Id of the group policy setting.
     *  @param string|null $value Value to set for the parentId property.
    */
    public function setParentId(?string $value ): void {
        $this->parentId = $value;
    }

    /**
     * Sets the settingCategory property value. The category the group policy setting is in.
     *  @param string|null $value Value to set for the settingCategory property.
    */
    public function setSettingCategory(?string $value ): void {
        $this->settingCategory = $value;
    }

    /**
     * Sets the settingDisplayName property value. The display name of this group policy setting.
     *  @param string|null $value Value to set for the settingDisplayName property.
    */
    public function setSettingDisplayName(?string $value ): void {
        $this->settingDisplayName = $value;
    }

    /**
     * Sets the settingDisplayValue property value. The display value of this group policy setting.
     *  @param string|null $value Value to set for the settingDisplayValue property.
    */
    public function setSettingDisplayValue(?string $value ): void {
        $this->settingDisplayValue = $value;
    }

    /**
     * Sets the settingDisplayValueType property value. The display value type of this group policy setting.
     *  @param string|null $value Value to set for the settingDisplayValueType property.
    */
    public function setSettingDisplayValueType(?string $value ): void {
        $this->settingDisplayValueType = $value;
    }

    /**
     * Sets the settingName property value. The name of this group policy setting.
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

    /**
     * Sets the settingScope property value. The scope of the setting. Possible values are: unknown, device, user.
     *  @param GroupPolicySettingScope|null $value Value to set for the settingScope property.
    */
    public function setSettingScope(?GroupPolicySettingScope $value ): void {
        $this->settingScope = $value;
    }

    /**
     * Sets the settingType property value. The setting type (security or admx) of the Group Policy. Possible values are: unknown, policy, account, securityOptions, userRightsAssignment, auditSetting, windowsFirewallSettings, appLockerRuleCollection, dataSourcesSettings, devicesSettings, driveMapSettings, environmentVariables, filesSettings, folderOptions, folders, iniFiles, internetOptions, localUsersAndGroups, networkOptions, networkShares, ntServices, powerOptions, printers, regionalOptionsSettings, registrySettings, scheduledTasks, shortcutSettings, startMenuSettings.
     *  @param GroupPolicySettingType|null $value Value to set for the settingType property.
    */
    public function setSettingType(?GroupPolicySettingType $value ): void {
        $this->settingType = $value;
    }

    /**
     * Sets the settingValue property value. The value of this group policy setting.
     *  @param string|null $value Value to set for the settingValue property.
    */
    public function setSettingValue(?string $value ): void {
        $this->settingValue = $value;
    }

    /**
     * Sets the settingValueDisplayUnits property value. The display units of this group policy setting value
     *  @param string|null $value Value to set for the settingValueDisplayUnits property.
    */
    public function setSettingValueDisplayUnits(?string $value ): void {
        $this->settingValueDisplayUnits = $value;
    }

    /**
     * Sets the settingValueType property value. The value type of this group policy setting.
     *  @param string|null $value Value to set for the settingValueType property.
    */
    public function setSettingValueType(?string $value ): void {
        $this->settingValueType = $value;
    }

}
