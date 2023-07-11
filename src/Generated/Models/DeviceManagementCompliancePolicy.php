<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Device Management Compliance Policy
*/
class DeviceManagementCompliancePolicy extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceManagementCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementCompliancePolicy {
        return new DeviceManagementCompliancePolicy();
    }

    /**
     * Gets the assignments property value. Policy assignments
     * @return array<DeviceManagementConfigurationPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationPolicyAssignment::class);
            /** @var array<DeviceManagementConfigurationPolicyAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the createdDateTime property value. Policy creation date and time. This property is read-only.
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
     * Gets the creationSource property value. Policy creation source
     * @return string|null
    */
    public function getCreationSource(): ?string {
        $val = $this->getBackingStore()->get('creationSource');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationSource'");
    }

    /**
     * Gets the description property value. Policy description
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceManagementConfigurationPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'creationSource' => fn(ParseNode $n) => $o->setCreationSource($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'platforms' => fn(ParseNode $n) => $o->setPlatforms($n->getEnumValue(DeviceManagementConfigurationPlatforms::class)),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'scheduledActionsForRule' => fn(ParseNode $n) => $o->setScheduledActionsForRule($n->getCollectionOfObjectValues([DeviceManagementComplianceScheduledActionForRule::class, 'createFromDiscriminatorValue'])),
            'settingCount' => fn(ParseNode $n) => $o->setSettingCount($n->getIntegerValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([DeviceManagementConfigurationSetting::class, 'createFromDiscriminatorValue'])),
            'technologies' => fn(ParseNode $n) => $o->setTechnologies($n->getEnumValue(DeviceManagementConfigurationTechnologies::class)),
        ]);
    }

    /**
     * Gets the isAssigned property value. Policy assignment status. This property is read-only.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        $val = $this->getBackingStore()->get('isAssigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAssigned'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Policy last modification date and time. This property is read-only.
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
     * Gets the name property value. Policy name
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the platforms property value. Supported platform types.
     * @return DeviceManagementConfigurationPlatforms|null
    */
    public function getPlatforms(): ?DeviceManagementConfigurationPlatforms {
        $val = $this->getBackingStore()->get('platforms');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationPlatforms) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platforms'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
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
     * Gets the scheduledActionsForRule property value. The list of scheduled action for this rule
     * @return array<DeviceManagementComplianceScheduledActionForRule>|null
    */
    public function getScheduledActionsForRule(): ?array {
        $val = $this->getBackingStore()->get('scheduledActionsForRule');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementComplianceScheduledActionForRule::class);
            /** @var array<DeviceManagementComplianceScheduledActionForRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledActionsForRule'");
    }

    /**
     * Gets the settingCount property value. Number of settings. This property is read-only.
     * @return int|null
    */
    public function getSettingCount(): ?int {
        $val = $this->getBackingStore()->get('settingCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingCount'");
    }

    /**
     * Gets the settings property value. Policy settings
     * @return array<DeviceManagementConfigurationSetting>|null
    */
    public function getSettings(): ?array {
        $val = $this->getBackingStore()->get('settings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSetting::class);
            /** @var array<DeviceManagementConfigurationSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the technologies property value. Describes which technology this setting can be deployed with
     * @return DeviceManagementConfigurationTechnologies|null
    */
    public function getTechnologies(): ?DeviceManagementConfigurationTechnologies {
        $val = $this->getBackingStore()->get('technologies');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationTechnologies) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'technologies'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeStringValue('creationSource', $this->getCreationSource());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('platforms', $this->getPlatforms());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeCollectionOfObjectValues('scheduledActionsForRule', $this->getScheduledActionsForRule());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
        $writer->writeEnumValue('technologies', $this->getTechnologies());
    }

    /**
     * Sets the assignments property value. Policy assignments
     * @param array<DeviceManagementConfigurationPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. Policy creation date and time. This property is read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the creationSource property value. Policy creation source
     * @param string|null $value Value to set for the creationSource property.
    */
    public function setCreationSource(?string $value): void {
        $this->getBackingStore()->set('creationSource', $value);
    }

    /**
     * Sets the description property value. Policy description
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the isAssigned property value. Policy assignment status. This property is read-only.
     * @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value): void {
        $this->getBackingStore()->set('isAssigned', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Policy last modification date and time. This property is read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the name property value. Policy name
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the platforms property value. Supported platform types.
     * @param DeviceManagementConfigurationPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?DeviceManagementConfigurationPlatforms $value): void {
        $this->getBackingStore()->set('platforms', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the scheduledActionsForRule property value. The list of scheduled action for this rule
     * @param array<DeviceManagementComplianceScheduledActionForRule>|null $value Value to set for the scheduledActionsForRule property.
    */
    public function setScheduledActionsForRule(?array $value): void {
        $this->getBackingStore()->set('scheduledActionsForRule', $value);
    }

    /**
     * Sets the settingCount property value. Number of settings. This property is read-only.
     * @param int|null $value Value to set for the settingCount property.
    */
    public function setSettingCount(?int $value): void {
        $this->getBackingStore()->set('settingCount', $value);
    }

    /**
     * Sets the settings property value. Policy settings
     * @param array<DeviceManagementConfigurationSetting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the technologies property value. Describes which technology this setting can be deployed with
     * @param DeviceManagementConfigurationTechnologies|null $value Value to set for the technologies property.
    */
    public function setTechnologies(?DeviceManagementConfigurationTechnologies $value): void {
        $this->getBackingStore()->set('technologies', $value);
    }

}
