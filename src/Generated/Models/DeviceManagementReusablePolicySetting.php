<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Graph model for a reusable setting
*/
class DeviceManagementReusablePolicySetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementReusablePolicySetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. reusable setting description supplied by user.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. reusable setting display name supplied by user.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'referencingConfigurationPolicies' => fn(ParseNode $n) => $o->setReferencingConfigurationPolicies($n->getCollectionOfObjectValues([DeviceManagementConfigurationPolicy::class, 'createFromDiscriminatorValue'])),
            'referencingConfigurationPolicyCount' => fn(ParseNode $n) => $o->setReferencingConfigurationPolicyCount($n->getIntegerValue()),
            'settingDefinitionId' => fn(ParseNode $n) => $o->setSettingDefinitionId($n->getStringValue()),
            'settingInstance' => fn(ParseNode $n) => $o->setSettingInstance($n->getObjectValue([DeviceManagementConfigurationSettingInstance::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. date and time when reusable setting was last modified. This property is read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the referencingConfigurationPolicies property value. configuration policies referencing the current reusable setting. This property is read-only.
     * @return array<DeviceManagementConfigurationPolicy>|null
    */
    public function getReferencingConfigurationPolicies(): ?array {
        return $this->getBackingStore()->get('referencingConfigurationPolicies');
    }

    /**
     * Gets the referencingConfigurationPolicyCount property value. count of configuration policies referencing the current reusable setting. Valid values 0 to 2147483647. This property is read-only.
     * @return int|null
    */
    public function getReferencingConfigurationPolicyCount(): ?int {
        return $this->getBackingStore()->get('referencingConfigurationPolicyCount');
    }

    /**
     * Gets the settingDefinitionId property value. setting definition id associated with this reusable setting.
     * @return string|null
    */
    public function getSettingDefinitionId(): ?string {
        return $this->getBackingStore()->get('settingDefinitionId');
    }

    /**
     * Gets the settingInstance property value. reusable setting configuration instance
     * @return DeviceManagementConfigurationSettingInstance|null
    */
    public function getSettingInstance(): ?DeviceManagementConfigurationSettingInstance {
        return $this->getBackingStore()->get('settingInstance');
    }

    /**
     * Gets the version property value. version number for reusable setting. Valid values 0 to 2147483647. This property is read-only.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('referencingConfigurationPolicies', $this->getReferencingConfigurationPolicies());
        $writer->writeStringValue('settingDefinitionId', $this->getSettingDefinitionId());
        $writer->writeObjectValue('settingInstance', $this->getSettingInstance());
    }

    /**
     * Sets the createdDateTime property value. reusable setting creation date and time. This property is read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. reusable setting description supplied by user.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. reusable setting display name supplied by user.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. date and time when reusable setting was last modified. This property is read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the referencingConfigurationPolicies property value. configuration policies referencing the current reusable setting. This property is read-only.
     * @param array<DeviceManagementConfigurationPolicy>|null $value Value to set for the referencingConfigurationPolicies property.
    */
    public function setReferencingConfigurationPolicies(?array $value): void {
        $this->getBackingStore()->set('referencingConfigurationPolicies', $value);
    }

    /**
     * Sets the referencingConfigurationPolicyCount property value. count of configuration policies referencing the current reusable setting. Valid values 0 to 2147483647. This property is read-only.
     * @param int|null $value Value to set for the referencingConfigurationPolicyCount property.
    */
    public function setReferencingConfigurationPolicyCount(?int $value): void {
        $this->getBackingStore()->set('referencingConfigurationPolicyCount', $value);
    }

    /**
     * Sets the settingDefinitionId property value. setting definition id associated with this reusable setting.
     * @param string|null $value Value to set for the settingDefinitionId property.
    */
    public function setSettingDefinitionId(?string $value): void {
        $this->getBackingStore()->set('settingDefinitionId', $value);
    }

    /**
     * Sets the settingInstance property value. reusable setting configuration instance
     * @param DeviceManagementConfigurationSettingInstance|null $value Value to set for the settingInstance property.
    */
    public function setSettingInstance(?DeviceManagementConfigurationSettingInstance $value): void {
        $this->getBackingStore()->set('settingInstance', $value);
    }

    /**
     * Sets the version property value. version number for reusable setting. Valid values 0 to 2147483647. This property is read-only.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
