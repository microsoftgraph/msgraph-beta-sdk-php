<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * Intune will provide customer the ability to run their Shell scripts on the enrolled Mac OS devices. The script can be run once or periodically.
*/
class DeviceShellScript extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceShellScript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceShellScript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceShellScript {
        return new DeviceShellScript();
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
     * Gets the blockExecutionNotifications property value. Does not notify the user a script is being executed
     * @return bool|null
    */
    public function getBlockExecutionNotifications(): ?bool {
        $val = $this->getBackingStore()->get('blockExecutionNotifications');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockExecutionNotifications'");
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
     * Gets the executionFrequency property value. The interval for script to run. If not defined the script will run once
     * @return DateInterval|null
    */
    public function getExecutionFrequency(): ?DateInterval {
        $val = $this->getBackingStore()->get('executionFrequency');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'executionFrequency'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceManagementScriptAssignment::class, 'createFromDiscriminatorValue'])),
            'blockExecutionNotifications' => fn(ParseNode $n) => $o->setBlockExecutionNotifications($n->getBooleanValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceRunStates' => fn(ParseNode $n) => $o->setDeviceRunStates($n->getCollectionOfObjectValues([DeviceManagementScriptDeviceState::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'executionFrequency' => fn(ParseNode $n) => $o->setExecutionFrequency($n->getDateIntervalValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'groupAssignments' => fn(ParseNode $n) => $o->setGroupAssignments($n->getCollectionOfObjectValues([DeviceManagementScriptGroupAssignment::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'retryCount' => fn(ParseNode $n) => $o->setRetryCount($n->getIntegerValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
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
     * Gets the retryCount property value. Number of times for the script to be retried if it fails
     * @return int|null
    */
    public function getRetryCount(): ?int {
        $val = $this->getBackingStore()->get('retryCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retryCount'");
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
        $writer->writeBooleanValue('blockExecutionNotifications', $this->getBlockExecutionNotifications());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('deviceRunStates', $this->getDeviceRunStates());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateIntervalValue('executionFrequency', $this->getExecutionFrequency());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeCollectionOfObjectValues('groupAssignments', $this->getGroupAssignments());
        $writer->writeIntegerValue('retryCount', $this->getRetryCount());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
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
     * Sets the blockExecutionNotifications property value. Does not notify the user a script is being executed
     * @param bool|null $value Value to set for the blockExecutionNotifications property.
    */
    public function setBlockExecutionNotifications(?bool $value): void {
        $this->getBackingStore()->set('blockExecutionNotifications', $value);
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
     * Sets the executionFrequency property value. The interval for script to run. If not defined the script will run once
     * @param DateInterval|null $value Value to set for the executionFrequency property.
    */
    public function setExecutionFrequency(?DateInterval $value): void {
        $this->getBackingStore()->set('executionFrequency', $value);
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
     * Sets the retryCount property value. Number of times for the script to be retried if it fails
     * @param int|null $value Value to set for the retryCount property.
    */
    public function setRetryCount(?int $value): void {
        $this->getBackingStore()->set('retryCount', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tag IDs for this PowerShellScript instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
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
