<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * Intune will provide customer the ability to run their Powershell scripts on the enrolled windows 10 Azure Active Directory joined devices. The script can be run once or periodically.
*/
class DeviceManagementScript extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementScript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementScript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScript {
        return new DeviceManagementScript();
    }

    /**
     * Gets the assignments property value. The list of group assignments for the device management script.
     * @return array<DeviceManagementScriptAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementScriptAssignment::class);
            /** @var array<DeviceManagementScriptAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the device management script was created. This property is read-only.
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
     * Gets the description property value. Optional description for the device management script.
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
     * Gets the deviceRunStates property value. List of run states for this script across all devices.
     * @return array<DeviceManagementScriptDeviceState>|null
    */
    public function getDeviceRunStates(): ?array {
        $val = $this->getBackingStore()->get('deviceRunStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementScriptDeviceState::class);
            /** @var array<DeviceManagementScriptDeviceState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceRunStates'");
    }

    /**
     * Gets the displayName property value. Name of the device management script.
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
     * Gets the enforceSignatureCheck property value. Indicate whether the script signature needs be checked.
     * @return bool|null
    */
    public function getEnforceSignatureCheck(): ?bool {
        $val = $this->getBackingStore()->get('enforceSignatureCheck');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforceSignatureCheck'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceManagementScriptAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceRunStates' => fn(ParseNode $n) => $o->setDeviceRunStates($n->getCollectionOfObjectValues([DeviceManagementScriptDeviceState::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enforceSignatureCheck' => fn(ParseNode $n) => $o->setEnforceSignatureCheck($n->getBooleanValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'groupAssignments' => fn(ParseNode $n) => $o->setGroupAssignments($n->getCollectionOfObjectValues([DeviceManagementScriptGroupAssignment::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'runAs32Bit' => fn(ParseNode $n) => $o->setRunAs32Bit($n->getBooleanValue()),
            'runAsAccount' => fn(ParseNode $n) => $o->setRunAsAccount($n->getEnumValue(RunAsAccountType::class)),
            'runSummary' => fn(ParseNode $n) => $o->setRunSummary($n->getObjectValue([DeviceManagementScriptRunSummary::class, 'createFromDiscriminatorValue'])),
            'scriptContent' => fn(ParseNode $n) => $o->setScriptContent($n->getBinaryContent()),
            'userRunStates' => fn(ParseNode $n) => $o->setUserRunStates($n->getCollectionOfObjectValues([DeviceManagementScriptUserState::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fileName property value. Script file name.
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
     * Gets the groupAssignments property value. The list of group assignments for the device management script.
     * @return array<DeviceManagementScriptGroupAssignment>|null
    */
    public function getGroupAssignments(): ?array {
        $val = $this->getBackingStore()->get('groupAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementScriptGroupAssignment::class);
            /** @var array<DeviceManagementScriptGroupAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupAssignments'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the device management script was last modified. This property is read-only.
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
     * Gets the roleScopeTagIds property value. List of Scope Tag IDs for this PowerShellScript instance.
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
     * Gets the runAs32Bit property value. A value indicating whether the PowerShell script should run as 32-bit
     * @return bool|null
    */
    public function getRunAs32Bit(): ?bool {
        $val = $this->getBackingStore()->get('runAs32Bit');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runAs32Bit'");
    }

    /**
     * Gets the runAsAccount property value. Indicates the type of execution context the app runs in.
     * @return RunAsAccountType|null
    */
    public function getRunAsAccount(): ?RunAsAccountType {
        $val = $this->getBackingStore()->get('runAsAccount');
        if (is_null($val) || $val instanceof RunAsAccountType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runAsAccount'");
    }

    /**
     * Gets the runSummary property value. Run summary for device management script.
     * @return DeviceManagementScriptRunSummary|null
    */
    public function getRunSummary(): ?DeviceManagementScriptRunSummary {
        $val = $this->getBackingStore()->get('runSummary');
        if (is_null($val) || $val instanceof DeviceManagementScriptRunSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runSummary'");
    }

    /**
     * Gets the scriptContent property value. The script content.
     * @return StreamInterface|null
    */
    public function getScriptContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('scriptContent');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scriptContent'");
    }

    /**
     * Gets the userRunStates property value. List of run states for this script across all users.
     * @return array<DeviceManagementScriptUserState>|null
    */
    public function getUserRunStates(): ?array {
        $val = $this->getBackingStore()->get('userRunStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementScriptUserState::class);
            /** @var array<DeviceManagementScriptUserState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRunStates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('deviceRunStates', $this->getDeviceRunStates());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('enforceSignatureCheck', $this->getEnforceSignatureCheck());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeCollectionOfObjectValues('groupAssignments', $this->getGroupAssignments());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeBooleanValue('runAs32Bit', $this->getRunAs32Bit());
        $writer->writeEnumValue('runAsAccount', $this->getRunAsAccount());
        $writer->writeObjectValue('runSummary', $this->getRunSummary());
        $writer->writeBinaryContent('scriptContent', $this->getScriptContent());
        $writer->writeCollectionOfObjectValues('userRunStates', $this->getUserRunStates());
    }

    /**
     * Sets the assignments property value. The list of group assignments for the device management script.
     * @param array<DeviceManagementScriptAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the device management script was created. This property is read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Optional description for the device management script.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceRunStates property value. List of run states for this script across all devices.
     * @param array<DeviceManagementScriptDeviceState>|null $value Value to set for the deviceRunStates property.
    */
    public function setDeviceRunStates(?array $value): void {
        $this->getBackingStore()->set('deviceRunStates', $value);
    }

    /**
     * Sets the displayName property value. Name of the device management script.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enforceSignatureCheck property value. Indicate whether the script signature needs be checked.
     * @param bool|null $value Value to set for the enforceSignatureCheck property.
    */
    public function setEnforceSignatureCheck(?bool $value): void {
        $this->getBackingStore()->set('enforceSignatureCheck', $value);
    }

    /**
     * Sets the fileName property value. Script file name.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the groupAssignments property value. The list of group assignments for the device management script.
     * @param array<DeviceManagementScriptGroupAssignment>|null $value Value to set for the groupAssignments property.
    */
    public function setGroupAssignments(?array $value): void {
        $this->getBackingStore()->set('groupAssignments', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the device management script was last modified. This property is read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tag IDs for this PowerShellScript instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the runAs32Bit property value. A value indicating whether the PowerShell script should run as 32-bit
     * @param bool|null $value Value to set for the runAs32Bit property.
    */
    public function setRunAs32Bit(?bool $value): void {
        $this->getBackingStore()->set('runAs32Bit', $value);
    }

    /**
     * Sets the runAsAccount property value. Indicates the type of execution context the app runs in.
     * @param RunAsAccountType|null $value Value to set for the runAsAccount property.
    */
    public function setRunAsAccount(?RunAsAccountType $value): void {
        $this->getBackingStore()->set('runAsAccount', $value);
    }

    /**
     * Sets the runSummary property value. Run summary for device management script.
     * @param DeviceManagementScriptRunSummary|null $value Value to set for the runSummary property.
    */
    public function setRunSummary(?DeviceManagementScriptRunSummary $value): void {
        $this->getBackingStore()->set('runSummary', $value);
    }

    /**
     * Sets the scriptContent property value. The script content.
     * @param StreamInterface|null $value Value to set for the scriptContent property.
    */
    public function setScriptContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('scriptContent', $value);
    }

    /**
     * Sets the userRunStates property value. List of run states for this script across all users.
     * @param array<DeviceManagementScriptUserState>|null $value Value to set for the userRunStates property.
    */
    public function setUserRunStates(?array $value): void {
        $this->getBackingStore()->set('userRunStates', $value);
    }

}
