<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsAutopilotDeploymentProfile extends Entity implements Parsable 
{
    /**
     * @var array<WindowsAutopilotDeviceIdentity>|null $assignedDevices The list of assigned devices for the profile.
    */
    private ?array $assignedDevices = null;
    
    /**
     * @var array<WindowsAutopilotDeploymentProfileAssignment>|null $assignments The list of group assignments for the profile.
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime Profile creation time
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Description of the profile
    */
    private ?string $description = null;
    
    /**
     * @var string|null $deviceNameTemplate The template used to name the AutoPilot Device. This can be a custom text and can also contain either the serial number of the device, or a randomly generated number. The total length of the text generated by the template can be no more than 15 characters.
    */
    private ?string $deviceNameTemplate = null;
    
    /**
     * @var WindowsAutopilotDeviceType|null $deviceType The AutoPilot device type that this profile is applicable to. Possible values are: windowsPc, surfaceHub2.
    */
    private ?WindowsAutopilotDeviceType $deviceType = null;
    
    /**
     * @var string|null $displayName Name of the profile
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enableWhiteGlove Enable Autopilot White Glove for the profile.
    */
    private ?bool $enableWhiteGlove = null;
    
    /**
     * @var WindowsEnrollmentStatusScreenSettings|null $enrollmentStatusScreenSettings Enrollment status screen setting
    */
    private ?WindowsEnrollmentStatusScreenSettings $enrollmentStatusScreenSettings = null;
    
    /**
     * @var bool|null $extractHardwareHash HardwareHash Extraction for the profile
    */
    private ?bool $extractHardwareHash = null;
    
    /**
     * @var string|null $language Language configured on the device
    */
    private ?string $language = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Profile last modified time
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $managementServiceAppId AzureAD management app ID used during client device-based enrollment discovery
    */
    private ?string $managementServiceAppId = null;
    
    /**
     * @var OutOfBoxExperienceSettings|null $outOfBoxExperienceSettings Out of box experience setting
    */
    private ?OutOfBoxExperienceSettings $outOfBoxExperienceSettings = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds Scope tags for the profile.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * Instantiates a new windowsAutopilotDeploymentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAutopilotDeploymentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAutopilotDeploymentProfile {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.activeDirectoryWindowsAutopilotDeploymentProfile': return new ActiveDirectoryWindowsAutopilotDeploymentProfile();
                case '#microsoft.graph.azureADWindowsAutopilotDeploymentProfile': return new AzureADWindowsAutopilotDeploymentProfile();
            }
        }
        return new WindowsAutopilotDeploymentProfile();
    }

    /**
     * Gets the assignedDevices property value. The list of assigned devices for the profile.
     * @return array<WindowsAutopilotDeviceIdentity>|null
    */
    public function getAssignedDevices(): ?array {
        return $this->assignedDevices;
    }

    /**
     * Gets the assignments property value. The list of group assignments for the profile.
     * @return array<WindowsAutopilotDeploymentProfileAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. Profile creation time
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description of the profile
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceNameTemplate property value. The template used to name the AutoPilot Device. This can be a custom text and can also contain either the serial number of the device, or a randomly generated number. The total length of the text generated by the template can be no more than 15 characters.
     * @return string|null
    */
    public function getDeviceNameTemplate(): ?string {
        return $this->deviceNameTemplate;
    }

    /**
     * Gets the deviceType property value. The AutoPilot device type that this profile is applicable to. Possible values are: windowsPc, surfaceHub2.
     * @return WindowsAutopilotDeviceType|null
    */
    public function getDeviceType(): ?WindowsAutopilotDeviceType {
        return $this->deviceType;
    }

    /**
     * Gets the displayName property value. Name of the profile
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enableWhiteGlove property value. Enable Autopilot White Glove for the profile.
     * @return bool|null
    */
    public function getEnableWhiteGlove(): ?bool {
        return $this->enableWhiteGlove;
    }

    /**
     * Gets the enrollmentStatusScreenSettings property value. Enrollment status screen setting
     * @return WindowsEnrollmentStatusScreenSettings|null
    */
    public function getEnrollmentStatusScreenSettings(): ?WindowsEnrollmentStatusScreenSettings {
        return $this->enrollmentStatusScreenSettings;
    }

    /**
     * Gets the extractHardwareHash property value. HardwareHash Extraction for the profile
     * @return bool|null
    */
    public function getExtractHardwareHash(): ?bool {
        return $this->extractHardwareHash;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedDevices' => function (ParseNode $n) use ($o) { $o->setAssignedDevices($n->getCollectionOfObjectValues(array(WindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'))); },
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(WindowsAutopilotDeploymentProfileAssignment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'deviceNameTemplate' => function (ParseNode $n) use ($o) { $o->setDeviceNameTemplate($n->getStringValue()); },
            'deviceType' => function (ParseNode $n) use ($o) { $o->setDeviceType($n->getEnumValue(WindowsAutopilotDeviceType::class)); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enableWhiteGlove' => function (ParseNode $n) use ($o) { $o->setEnableWhiteGlove($n->getBooleanValue()); },
            'enrollmentStatusScreenSettings' => function (ParseNode $n) use ($o) { $o->setEnrollmentStatusScreenSettings($n->getObjectValue(array(WindowsEnrollmentStatusScreenSettings::class, 'createFromDiscriminatorValue'))); },
            'extractHardwareHash' => function (ParseNode $n) use ($o) { $o->setExtractHardwareHash($n->getBooleanValue()); },
            'language' => function (ParseNode $n) use ($o) { $o->setLanguage($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'managementServiceAppId' => function (ParseNode $n) use ($o) { $o->setManagementServiceAppId($n->getStringValue()); },
            'outOfBoxExperienceSettings' => function (ParseNode $n) use ($o) { $o->setOutOfBoxExperienceSettings($n->getObjectValue(array(OutOfBoxExperienceSettings::class, 'createFromDiscriminatorValue'))); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the language property value. Language configured on the device
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Gets the lastModifiedDateTime property value. Profile last modified time
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the managementServiceAppId property value. AzureAD management app ID used during client device-based enrollment discovery
     * @return string|null
    */
    public function getManagementServiceAppId(): ?string {
        return $this->managementServiceAppId;
    }

    /**
     * Gets the outOfBoxExperienceSettings property value. Out of box experience setting
     * @return OutOfBoxExperienceSettings|null
    */
    public function getOutOfBoxExperienceSettings(): ?OutOfBoxExperienceSettings {
        return $this->outOfBoxExperienceSettings;
    }

    /**
     * Gets the roleScopeTagIds property value. Scope tags for the profile.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignedDevices', $this->assignedDevices);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('deviceNameTemplate', $this->deviceNameTemplate);
        $writer->writeEnumValue('deviceType', $this->deviceType);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('enableWhiteGlove', $this->enableWhiteGlove);
        $writer->writeObjectValue('enrollmentStatusScreenSettings', $this->enrollmentStatusScreenSettings);
        $writer->writeBooleanValue('extractHardwareHash', $this->extractHardwareHash);
        $writer->writeStringValue('language', $this->language);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('managementServiceAppId', $this->managementServiceAppId);
        $writer->writeObjectValue('outOfBoxExperienceSettings', $this->outOfBoxExperienceSettings);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
    }

    /**
     * Sets the assignedDevices property value. The list of assigned devices for the profile.
     *  @param array<WindowsAutopilotDeviceIdentity>|null $value Value to set for the assignedDevices property.
    */
    public function setAssignedDevices(?array $value ): void {
        $this->assignedDevices = $value;
    }

    /**
     * Sets the assignments property value. The list of group assignments for the profile.
     *  @param array<WindowsAutopilotDeploymentProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. Profile creation time
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description of the profile
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceNameTemplate property value. The template used to name the AutoPilot Device. This can be a custom text and can also contain either the serial number of the device, or a randomly generated number. The total length of the text generated by the template can be no more than 15 characters.
     *  @param string|null $value Value to set for the deviceNameTemplate property.
    */
    public function setDeviceNameTemplate(?string $value ): void {
        $this->deviceNameTemplate = $value;
    }

    /**
     * Sets the deviceType property value. The AutoPilot device type that this profile is applicable to. Possible values are: windowsPc, surfaceHub2.
     *  @param WindowsAutopilotDeviceType|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?WindowsAutopilotDeviceType $value ): void {
        $this->deviceType = $value;
    }

    /**
     * Sets the displayName property value. Name of the profile
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enableWhiteGlove property value. Enable Autopilot White Glove for the profile.
     *  @param bool|null $value Value to set for the enableWhiteGlove property.
    */
    public function setEnableWhiteGlove(?bool $value ): void {
        $this->enableWhiteGlove = $value;
    }

    /**
     * Sets the enrollmentStatusScreenSettings property value. Enrollment status screen setting
     *  @param WindowsEnrollmentStatusScreenSettings|null $value Value to set for the enrollmentStatusScreenSettings property.
    */
    public function setEnrollmentStatusScreenSettings(?WindowsEnrollmentStatusScreenSettings $value ): void {
        $this->enrollmentStatusScreenSettings = $value;
    }

    /**
     * Sets the extractHardwareHash property value. HardwareHash Extraction for the profile
     *  @param bool|null $value Value to set for the extractHardwareHash property.
    */
    public function setExtractHardwareHash(?bool $value ): void {
        $this->extractHardwareHash = $value;
    }

    /**
     * Sets the language property value. Language configured on the device
     *  @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value ): void {
        $this->language = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Profile last modified time
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the managementServiceAppId property value. AzureAD management app ID used during client device-based enrollment discovery
     *  @param string|null $value Value to set for the managementServiceAppId property.
    */
    public function setManagementServiceAppId(?string $value ): void {
        $this->managementServiceAppId = $value;
    }

    /**
     * Sets the outOfBoxExperienceSettings property value. Out of box experience setting
     *  @param OutOfBoxExperienceSettings|null $value Value to set for the outOfBoxExperienceSettings property.
    */
    public function setOutOfBoxExperienceSettings(?OutOfBoxExperienceSettings $value ): void {
        $this->outOfBoxExperienceSettings = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. Scope tags for the profile.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

}