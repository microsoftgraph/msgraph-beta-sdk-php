<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentConfiguration extends Entity implements Parsable 
{
    /**
     * @var array<EnrollmentConfigurationAssignment>|null $assignments The list of group assignments for the device configuration profile
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime Created date time in UTC of the device enrollment configuration
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description of the device enrollment configuration
    */
    private ?string $description = null;
    
    /**
     * @var DeviceEnrollmentConfigurationType|null $deviceEnrollmentConfigurationType Describes the TemplateFamily for the Template entity
    */
    private ?DeviceEnrollmentConfigurationType $deviceEnrollmentConfigurationType = null;
    
    /**
     * @var string|null $displayName The display name of the device enrollment configuration
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Last modified date time in UTC of the device enrollment configuration
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var int|null $priority Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value.
    */
    private ?int $priority = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds Optional role scope tags for the enrollment restrictions.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var int|null $version The version of the device enrollment configuration
    */
    private ?int $version = null;
    
    /**
     * Instantiates a new DeviceEnrollmentConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceEnrollmentConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEnrollmentConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEnrollmentConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceComanagementAuthorityConfiguration': return new DeviceComanagementAuthorityConfiguration();
                case '#microsoft.graph.deviceEnrollmentLimitConfiguration': return new DeviceEnrollmentLimitConfiguration();
                case '#microsoft.graph.deviceEnrollmentNotificationConfiguration': return new DeviceEnrollmentNotificationConfiguration();
                case '#microsoft.graph.deviceEnrollmentPlatformRestrictionConfiguration': return new DeviceEnrollmentPlatformRestrictionConfiguration();
                case '#microsoft.graph.deviceEnrollmentPlatformRestrictionsConfiguration': return new DeviceEnrollmentPlatformRestrictionsConfiguration();
                case '#microsoft.graph.deviceEnrollmentWindowsHelloForBusinessConfiguration': return new DeviceEnrollmentWindowsHelloForBusinessConfiguration();
                case '#microsoft.graph.windows10EnrollmentCompletionPageConfiguration': return new Windows10EnrollmentCompletionPageConfiguration();
            }
        }
        return new DeviceEnrollmentConfiguration();
    }

    /**
     * Gets the assignments property value. The list of group assignments for the device configuration profile
     * @return array<EnrollmentConfigurationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. Created date time in UTC of the device enrollment configuration
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of the device enrollment configuration
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceEnrollmentConfigurationType property value. Describes the TemplateFamily for the Template entity
     * @return DeviceEnrollmentConfigurationType|null
    */
    public function getDeviceEnrollmentConfigurationType(): ?DeviceEnrollmentConfigurationType {
        return $this->deviceEnrollmentConfigurationType;
    }

    /**
     * Gets the displayName property value. The display name of the device enrollment configuration
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
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(EnrollmentConfigurationAssignment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'deviceEnrollmentConfigurationType' => function (ParseNode $n) use ($o) { $o->setDeviceEnrollmentConfigurationType($n->getEnumValue(DeviceEnrollmentConfigurationType::class)); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getIntegerValue()); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified date time in UTC of the device enrollment configuration
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the priority property value. Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the roleScopeTagIds property value. Optional role scope tags for the enrollment restrictions.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the version property value. The version of the device enrollment configuration
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
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('deviceEnrollmentConfigurationType', $this->deviceEnrollmentConfigurationType);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the assignments property value. The list of group assignments for the device configuration profile
     *  @param array<EnrollmentConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. Created date time in UTC of the device enrollment configuration
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of the device enrollment configuration
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceEnrollmentConfigurationType property value. Describes the TemplateFamily for the Template entity
     *  @param DeviceEnrollmentConfigurationType|null $value Value to set for the deviceEnrollmentConfigurationType property.
    */
    public function setDeviceEnrollmentConfigurationType(?DeviceEnrollmentConfigurationType $value ): void {
        $this->deviceEnrollmentConfigurationType = $value;
    }

    /**
     * Sets the displayName property value. The display name of the device enrollment configuration
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified date time in UTC of the device enrollment configuration
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the priority property value. Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value.
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. Optional role scope tags for the enrollment restrictions.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the version property value. The version of the device enrollment configuration
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
