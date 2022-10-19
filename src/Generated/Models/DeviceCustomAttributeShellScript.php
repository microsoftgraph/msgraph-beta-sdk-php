<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class DeviceCustomAttributeShellScript extends Entity implements Parsable 
{
    /**
     * @var array<DeviceManagementScriptAssignment>|null $assignments The list of group assignments for the device management script.
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the device management script was created. This property is read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $customAttributeName The name of the custom attribute.
    */
    private ?string $customAttributeName = null;
    
    /**
     * @var DeviceCustomAttributeValueType|null $customAttributeType Represents the expected type for a macOS custom attribute script value.
    */
    private ?DeviceCustomAttributeValueType $customAttributeType = null;
    
    /**
     * @var string|null $description Optional description for the device management script.
    */
    private ?string $description = null;
    
    /**
     * @var array<DeviceManagementScriptDeviceState>|null $deviceRunStates List of run states for this script across all devices.
    */
    private ?array $deviceRunStates = null;
    
    /**
     * @var string|null $displayName Name of the device management script.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $fileName Script file name.
    */
    private ?string $fileName = null;
    
    /**
     * @var array<DeviceManagementScriptGroupAssignment>|null $groupAssignments The list of group assignments for the device management script.
    */
    private ?array $groupAssignments = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time the device management script was last modified. This property is read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tag IDs for this PowerShellScript instance.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var RunAsAccountType|null $runAsAccount Indicates the type of execution context the app runs in.
    */
    private ?RunAsAccountType $runAsAccount = null;
    
    /**
     * @var DeviceManagementScriptRunSummary|null $runSummary Run summary for device management script.
    */
    private ?DeviceManagementScriptRunSummary $runSummary = null;
    
    /**
     * @var StreamInterface|null $scriptContent The script content.
    */
    private ?StreamInterface $scriptContent = null;
    
    /**
     * @var array<DeviceManagementScriptUserState>|null $userRunStates List of run states for this script across all users.
    */
    private ?array $userRunStates = null;
    
    /**
     * Instantiates a new deviceCustomAttributeShellScript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceCustomAttributeShellScript');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceCustomAttributeShellScript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceCustomAttributeShellScript {
        return new DeviceCustomAttributeShellScript();
    }

    /**
     * Gets the assignments property value. The list of group assignments for the device management script.
     * @return array<DeviceManagementScriptAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. The date and time the device management script was created. This property is read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the customAttributeName property value. The name of the custom attribute.
     * @return string|null
    */
    public function getCustomAttributeName(): ?string {
        return $this->customAttributeName;
    }

    /**
     * Gets the customAttributeType property value. Represents the expected type for a macOS custom attribute script value.
     * @return DeviceCustomAttributeValueType|null
    */
    public function getCustomAttributeType(): ?DeviceCustomAttributeValueType {
        return $this->customAttributeType;
    }

    /**
     * Gets the description property value. Optional description for the device management script.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceRunStates property value. List of run states for this script across all devices.
     * @return array<DeviceManagementScriptDeviceState>|null
    */
    public function getDeviceRunStates(): ?array {
        return $this->deviceRunStates;
    }

    /**
     * Gets the displayName property value. Name of the device management script.
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
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceManagementScriptAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customAttributeName' => fn(ParseNode $n) => $o->setCustomAttributeName($n->getStringValue()),
            'customAttributeType' => fn(ParseNode $n) => $o->setCustomAttributeType($n->getEnumValue(DeviceCustomAttributeValueType::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceRunStates' => fn(ParseNode $n) => $o->setDeviceRunStates($n->getCollectionOfObjectValues([DeviceManagementScriptDeviceState::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'groupAssignments' => fn(ParseNode $n) => $o->setGroupAssignments($n->getCollectionOfObjectValues([DeviceManagementScriptGroupAssignment::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
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
        return $this->fileName;
    }

    /**
     * Gets the groupAssignments property value. The list of group assignments for the device management script.
     * @return array<DeviceManagementScriptGroupAssignment>|null
    */
    public function getGroupAssignments(): ?array {
        return $this->groupAssignments;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the device management script was last modified. This property is read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tag IDs for this PowerShellScript instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the runAsAccount property value. Indicates the type of execution context the app runs in.
     * @return RunAsAccountType|null
    */
    public function getRunAsAccount(): ?RunAsAccountType {
        return $this->runAsAccount;
    }

    /**
     * Gets the runSummary property value. Run summary for device management script.
     * @return DeviceManagementScriptRunSummary|null
    */
    public function getRunSummary(): ?DeviceManagementScriptRunSummary {
        return $this->runSummary;
    }

    /**
     * Gets the scriptContent property value. The script content.
     * @return StreamInterface
    */
    public function getScriptContent(): StreamInterface {
        return $this->scriptContent;
    }

    /**
     * Gets the userRunStates property value. List of run states for this script across all users.
     * @return array<DeviceManagementScriptUserState>|null
    */
    public function getUserRunStates(): ?array {
        return $this->userRunStates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeStringValue('customAttributeName', $this->customAttributeName);
        $writer->writeEnumValue('customAttributeType', $this->customAttributeType);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfObjectValues('deviceRunStates', $this->deviceRunStates);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeCollectionOfObjectValues('groupAssignments', $this->groupAssignments);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeEnumValue('runAsAccount', $this->runAsAccount);
        $writer->writeObjectValue('runSummary', $this->runSummary);
        $writer->writeBinaryContent('scriptContent', $this->scriptContent);
        $writer->writeCollectionOfObjectValues('userRunStates', $this->userRunStates);
    }

    /**
     * Sets the assignments property value. The list of group assignments for the device management script.
     *  @param array<DeviceManagementScriptAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the device management script was created. This property is read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the customAttributeName property value. The name of the custom attribute.
     *  @param string|null $value Value to set for the customAttributeName property.
    */
    public function setCustomAttributeName(?string $value ): void {
        $this->customAttributeName = $value;
    }

    /**
     * Sets the customAttributeType property value. Represents the expected type for a macOS custom attribute script value.
     *  @param DeviceCustomAttributeValueType|null $value Value to set for the customAttributeType property.
    */
    public function setCustomAttributeType(?DeviceCustomAttributeValueType $value ): void {
        $this->customAttributeType = $value;
    }

    /**
     * Sets the description property value. Optional description for the device management script.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceRunStates property value. List of run states for this script across all devices.
     *  @param array<DeviceManagementScriptDeviceState>|null $value Value to set for the deviceRunStates property.
    */
    public function setDeviceRunStates(?array $value ): void {
        $this->deviceRunStates = $value;
    }

    /**
     * Sets the displayName property value. Name of the device management script.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the fileName property value. Script file name.
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the groupAssignments property value. The list of group assignments for the device management script.
     *  @param array<DeviceManagementScriptGroupAssignment>|null $value Value to set for the groupAssignments property.
    */
    public function setGroupAssignments(?array $value ): void {
        $this->groupAssignments = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the device management script was last modified. This property is read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tag IDs for this PowerShellScript instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the runAsAccount property value. Indicates the type of execution context the app runs in.
     *  @param RunAsAccountType|null $value Value to set for the runAsAccount property.
    */
    public function setRunAsAccount(?RunAsAccountType $value ): void {
        $this->runAsAccount = $value;
    }

    /**
     * Sets the runSummary property value. Run summary for device management script.
     *  @param DeviceManagementScriptRunSummary|null $value Value to set for the runSummary property.
    */
    public function setRunSummary(?DeviceManagementScriptRunSummary $value ): void {
        $this->runSummary = $value;
    }

    /**
     * Sets the scriptContent property value. The script content.
     *  @param StreamInterface|null $value Value to set for the scriptContent property.
    */
    public function setScriptContent(?StreamInterface $value ): void {
        $this->scriptContent = $value;
    }

    /**
     * Sets the userRunStates property value. List of run states for this script across all users.
     *  @param array<DeviceManagementScriptUserState>|null $value Value to set for the userRunStates property.
    */
    public function setUserRunStates(?array $value ): void {
        $this->userRunStates = $value;
    }

}
