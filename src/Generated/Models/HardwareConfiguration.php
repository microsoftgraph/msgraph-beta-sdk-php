<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * BIOS configuration and other settings provides customers the ability to configure hardware/bios settings on the enrolled Windows 10/11 Entra ID joined devices by uploading a configuration file generated with their OEM tool (e.g. Dell Command tool). A BIOS configuration policy can be assigned to multiple devices, allowing admins to remotely control a device's hardware properties (e.g. enable Secure Boot) from the Intune Portal. Supported for Dell only at this time.
*/
class HardwareConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new HardwareConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HardwareConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HardwareConfiguration {
        return new HardwareConfiguration();
    }

    /**
     * Gets the assignments property value. A list of the Entra user group ids that hardware configuration will be applied to. Only security groups and Office 365 Groups are supported. Optional.
     * @return array<HardwareConfigurationAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HardwareConfigurationAssignment::class);
            /** @var array<HardwareConfigurationAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the configurationFileContent property value. The file content contains custom hardware settings that will be applied to the assigned devices' BIOS. Max allowed file size is 5KB. Represented as bytes. Required.
     * @return StreamInterface|null
    */
    public function getConfigurationFileContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('configurationFileContent');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationFileContent'");
    }

    /**
     * Gets the createdDateTime property value. The date and time  of when the BIOS configuration profile was created. The value cannot be modified and is automatically populated when the device is enrolled. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-Only. This property is read-only.
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
     * Gets the description property value. The description of the hardware configuration. Use this to provide context, purpose, applications, etc of the BIOS configuration profile for your organization's admins. Max length is 1000 characters. Optional.
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
     * Gets the deviceRunStates property value. List of run states for the hardware configuration across all devices. Read-Only.
     * @return array<HardwareConfigurationDeviceState>|null
    */
    public function getDeviceRunStates(): ?array {
        $val = $this->getBackingStore()->get('deviceRunStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HardwareConfigurationDeviceState::class);
            /** @var array<HardwareConfigurationDeviceState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceRunStates'");
    }

    /**
     * Gets the displayName property value. The name of the hardware BIOS configuration profile. It serves as user-friendly name to identify hardware BIOS configuration profiles. Max length is 150 characters. Required. Read-Only.
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
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([HardwareConfigurationAssignment::class, 'createFromDiscriminatorValue'])),
            'configurationFileContent' => fn(ParseNode $n) => $o->setConfigurationFileContent($n->getBinaryContent()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceRunStates' => fn(ParseNode $n) => $o->setDeviceRunStates($n->getCollectionOfObjectValues([HardwareConfigurationDeviceState::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'hardwareConfigurationFormat' => fn(ParseNode $n) => $o->setHardwareConfigurationFormat($n->getEnumValue(HardwareConfigurationFormat::class)),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'perDevicePasswordDisabled' => fn(ParseNode $n) => $o->setPerDevicePasswordDisabled($n->getBooleanValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'runSummary' => fn(ParseNode $n) => $o->setRunSummary($n->getObjectValue([HardwareConfigurationRunSummary::class, 'createFromDiscriminatorValue'])),
            'userRunStates' => fn(ParseNode $n) => $o->setUserRunStates($n->getCollectionOfObjectValues([HardwareConfigurationUserState::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the fileName property value. The file name for the BIOS configuration profile's ConfigurationFileContent. Max length is 150 characters. Required.
     * @return string|null
    */
    public function getFileName(): ?string {
        $val = $this->getBackingStore()->get('fileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileName'");
    }

    /**
     * Gets the hardwareConfigurationFormat property value. Indicates the supported oems of hardware configuration
     * @return HardwareConfigurationFormat|null
    */
    public function getHardwareConfigurationFormat(): ?HardwareConfigurationFormat {
        $val = $this->getBackingStore()->get('hardwareConfigurationFormat');
        if (is_null($val) || $val instanceof HardwareConfigurationFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardwareConfigurationFormat'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time  of when the BIOS configuration profile was last modified. The value cannot be modified and is automatically populated when the device is enrolled. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-Only. Read-Only. This property is read-only.
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
     * Gets the perDevicePasswordDisabled property value. When TRUE, indicates whether the policy-assigned devices' passwords are disabled. When FALSE, indicates they are enabled. Default is FALSE. Required.
     * @return bool|null
    */
    public function getPerDevicePasswordDisabled(): ?bool {
        $val = $this->getBackingStore()->get('perDevicePasswordDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'perDevicePasswordDisabled'");
    }

    /**
     * Gets the roleScopeTagIds property value. A list of unique Scope Tag IDs associated with the hardware configuration. Optional.
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
     * Gets the runSummary property value. A summary of the results from an attempt to configure hardware settings. Read-Only.
     * @return HardwareConfigurationRunSummary|null
    */
    public function getRunSummary(): ?HardwareConfigurationRunSummary {
        $val = $this->getBackingStore()->get('runSummary');
        if (is_null($val) || $val instanceof HardwareConfigurationRunSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runSummary'");
    }

    /**
     * Gets the userRunStates property value. List of run states for the hardware configuration across all users. Read-Only.
     * @return array<HardwareConfigurationUserState>|null
    */
    public function getUserRunStates(): ?array {
        $val = $this->getBackingStore()->get('userRunStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HardwareConfigurationUserState::class);
            /** @var array<HardwareConfigurationUserState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRunStates'");
    }

    /**
     * Gets the version property value. The version of the hardware configuration (E.g. 1, 2, 3 ...). This is incremented after a change to the BIOS configuration profile's settings file name (FileName property), settings file content (ConfigurationFileContent property), or the PerDevicePasswordDisabled property. Read-Only.
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeBinaryContent('configurationFileContent', $this->getConfigurationFileContent());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('deviceRunStates', $this->getDeviceRunStates());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeEnumValue('hardwareConfigurationFormat', $this->getHardwareConfigurationFormat());
        $writer->writeBooleanValue('perDevicePasswordDisabled', $this->getPerDevicePasswordDisabled());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeObjectValue('runSummary', $this->getRunSummary());
        $writer->writeCollectionOfObjectValues('userRunStates', $this->getUserRunStates());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the assignments property value. A list of the Entra user group ids that hardware configuration will be applied to. Only security groups and Office 365 Groups are supported. Optional.
     * @param array<HardwareConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the configurationFileContent property value. The file content contains custom hardware settings that will be applied to the assigned devices' BIOS. Max allowed file size is 5KB. Represented as bytes. Required.
     * @param StreamInterface|null $value Value to set for the configurationFileContent property.
    */
    public function setConfigurationFileContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('configurationFileContent', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time  of when the BIOS configuration profile was created. The value cannot be modified and is automatically populated when the device is enrolled. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-Only. This property is read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the hardware configuration. Use this to provide context, purpose, applications, etc of the BIOS configuration profile for your organization's admins. Max length is 1000 characters. Optional.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceRunStates property value. List of run states for the hardware configuration across all devices. Read-Only.
     * @param array<HardwareConfigurationDeviceState>|null $value Value to set for the deviceRunStates property.
    */
    public function setDeviceRunStates(?array $value): void {
        $this->getBackingStore()->set('deviceRunStates', $value);
    }

    /**
     * Sets the displayName property value. The name of the hardware BIOS configuration profile. It serves as user-friendly name to identify hardware BIOS configuration profiles. Max length is 150 characters. Required. Read-Only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the fileName property value. The file name for the BIOS configuration profile's ConfigurationFileContent. Max length is 150 characters. Required.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the hardwareConfigurationFormat property value. Indicates the supported oems of hardware configuration
     * @param HardwareConfigurationFormat|null $value Value to set for the hardwareConfigurationFormat property.
    */
    public function setHardwareConfigurationFormat(?HardwareConfigurationFormat $value): void {
        $this->getBackingStore()->set('hardwareConfigurationFormat', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time  of when the BIOS configuration profile was last modified. The value cannot be modified and is automatically populated when the device is enrolled. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-Only. Read-Only. This property is read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the perDevicePasswordDisabled property value. When TRUE, indicates whether the policy-assigned devices' passwords are disabled. When FALSE, indicates they are enabled. Default is FALSE. Required.
     * @param bool|null $value Value to set for the perDevicePasswordDisabled property.
    */
    public function setPerDevicePasswordDisabled(?bool $value): void {
        $this->getBackingStore()->set('perDevicePasswordDisabled', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. A list of unique Scope Tag IDs associated with the hardware configuration. Optional.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the runSummary property value. A summary of the results from an attempt to configure hardware settings. Read-Only.
     * @param HardwareConfigurationRunSummary|null $value Value to set for the runSummary property.
    */
    public function setRunSummary(?HardwareConfigurationRunSummary $value): void {
        $this->getBackingStore()->set('runSummary', $value);
    }

    /**
     * Sets the userRunStates property value. List of run states for the hardware configuration across all users. Read-Only.
     * @param array<HardwareConfigurationUserState>|null $value Value to set for the userRunStates property.
    */
    public function setUserRunStates(?array $value): void {
        $this->getBackingStore()->set('userRunStates', $value);
    }

    /**
     * Sets the version property value. The version of the hardware configuration (E.g. 1, 2, 3 ...). This is incremented after a change to the BIOS configuration profile's settings file name (FileName property), settings file content (ConfigurationFileContent property), or the PerDevicePasswordDisabled property. Read-Only.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
