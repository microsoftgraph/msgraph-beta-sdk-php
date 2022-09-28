<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementReusablePolicySetting extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime reusable setting creation date and time. This property is read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description reusable setting description supplied by user.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName reusable setting display name supplied by user.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime date and time when reusable setting was last modified. This property is read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<DeviceManagementConfigurationPolicy>|null $referencingConfigurationPolicies configuration policies referencing the current reusable setting. This property is read-only.
    */
    private ?array $referencingConfigurationPolicies = null;
    
    /**
     * @var int|null $referencingConfigurationPolicyCount count of configuration policies referencing the current reusable setting. Valid values 0 to 2147483647. This property is read-only.
    */
    private ?int $referencingConfigurationPolicyCount = null;
    
    /**
     * @var string|null $settingDefinitionId setting definition id associated with this reusable setting.
    */
    private ?string $settingDefinitionId = null;
    
    /**
     * @var DeviceManagementConfigurationSettingInstance|null $settingInstance reusable setting configuration instance
    */
    private ?DeviceManagementConfigurationSettingInstance $settingInstance = null;
    
    /**
     * @var int|null $version version number for reusable setting. Valid values 0 to 2147483647. This property is read-only.
    */
    private ?int $version = null;
    
    /**
     * Instantiates a new deviceManagementReusablePolicySetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementReusablePolicySetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementReusablePolicySetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementReusablePolicySetting {
        return new DeviceManagementReusablePolicySetting();
    }

    /**
     * Gets the createdDateTime property value. reusable setting creation date and time. This property is read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. reusable setting description supplied by user.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. reusable setting display name supplied by user.
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
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'referencingConfigurationPolicies' => function (ParseNode $n) use ($o) { $o->setReferencingConfigurationPolicies($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationPolicy::class, 'createFromDiscriminatorValue'))); },
            'referencingConfigurationPolicyCount' => function (ParseNode $n) use ($o) { $o->setReferencingConfigurationPolicyCount($n->getIntegerValue()); },
            'settingDefinitionId' => function (ParseNode $n) use ($o) { $o->setSettingDefinitionId($n->getStringValue()); },
            'settingInstance' => function (ParseNode $n) use ($o) { $o->setSettingInstance($n->getObjectValue(array(DeviceManagementConfigurationSettingInstance::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. date and time when reusable setting was last modified. This property is read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the referencingConfigurationPolicies property value. configuration policies referencing the current reusable setting. This property is read-only.
     * @return array<DeviceManagementConfigurationPolicy>|null
    */
    public function getReferencingConfigurationPolicies(): ?array {
        return $this->referencingConfigurationPolicies;
    }

    /**
     * Gets the referencingConfigurationPolicyCount property value. count of configuration policies referencing the current reusable setting. Valid values 0 to 2147483647. This property is read-only.
     * @return int|null
    */
    public function getReferencingConfigurationPolicyCount(): ?int {
        return $this->referencingConfigurationPolicyCount;
    }

    /**
     * Gets the settingDefinitionId property value. setting definition id associated with this reusable setting.
     * @return string|null
    */
    public function getSettingDefinitionId(): ?string {
        return $this->settingDefinitionId;
    }

    /**
     * Gets the settingInstance property value. reusable setting configuration instance
     * @return DeviceManagementConfigurationSettingInstance|null
    */
    public function getSettingInstance(): ?DeviceManagementConfigurationSettingInstance {
        return $this->settingInstance;
    }

    /**
     * Gets the version property value. version number for reusable setting. Valid values 0 to 2147483647. This property is read-only.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('referencingConfigurationPolicies', $this->referencingConfigurationPolicies);
        $writer->writeStringValue('settingDefinitionId', $this->settingDefinitionId);
        $writer->writeObjectValue('settingInstance', $this->settingInstance);
    }

    /**
     * Sets the createdDateTime property value. reusable setting creation date and time. This property is read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. reusable setting description supplied by user.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. reusable setting display name supplied by user.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. date and time when reusable setting was last modified. This property is read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the referencingConfigurationPolicies property value. configuration policies referencing the current reusable setting. This property is read-only.
     *  @param array<DeviceManagementConfigurationPolicy>|null $value Value to set for the referencingConfigurationPolicies property.
    */
    public function setReferencingConfigurationPolicies(?array $value ): void {
        $this->referencingConfigurationPolicies = $value;
    }

    /**
     * Sets the referencingConfigurationPolicyCount property value. count of configuration policies referencing the current reusable setting. Valid values 0 to 2147483647. This property is read-only.
     *  @param int|null $value Value to set for the referencingConfigurationPolicyCount property.
    */
    public function setReferencingConfigurationPolicyCount(?int $value ): void {
        $this->referencingConfigurationPolicyCount = $value;
    }

    /**
     * Sets the settingDefinitionId property value. setting definition id associated with this reusable setting.
     *  @param string|null $value Value to set for the settingDefinitionId property.
    */
    public function setSettingDefinitionId(?string $value ): void {
        $this->settingDefinitionId = $value;
    }

    /**
     * Sets the settingInstance property value. reusable setting configuration instance
     *  @param DeviceManagementConfigurationSettingInstance|null $value Value to set for the settingInstance property.
    */
    public function setSettingInstance(?DeviceManagementConfigurationSettingInstance $value ): void {
        $this->settingInstance = $value;
    }

    /**
     * Sets the version property value. version number for reusable setting. Valid values 0 to 2147483647. This property is read-only.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
