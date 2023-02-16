<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceEnrollmentConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the createdDateTime property value. Created date time in UTC of the device enrollment configuration
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. The description of the device enrollment configuration
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the deviceEnrollmentConfigurationType property value. Describes the TemplateFamily for the Template entity
     * @return DeviceEnrollmentConfigurationType|null
    */
    public function getDeviceEnrollmentConfigurationType(): ?DeviceEnrollmentConfigurationType {
        return $this->getBackingStore()->get('deviceEnrollmentConfigurationType');
    }

    /**
     * Gets the displayName property value. The display name of the device enrollment configuration
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
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([EnrollmentConfigurationAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceEnrollmentConfigurationType' => fn(ParseNode $n) => $o->setDeviceEnrollmentConfigurationType($n->getEnumValue(DeviceEnrollmentConfigurationType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified date time in UTC of the device enrollment configuration
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the priority property value. Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the roleScopeTagIds property value. Optional role scope tags for the enrollment restrictions.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the version property value. The version of the device enrollment configuration
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
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('deviceEnrollmentConfigurationType', $this->getDeviceEnrollmentConfigurationType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the assignments property value. The list of group assignments for the device configuration profile
     * @param array<EnrollmentConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. Created date time in UTC of the device enrollment configuration
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the device enrollment configuration
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceEnrollmentConfigurationType property value. Describes the TemplateFamily for the Template entity
     * @param DeviceEnrollmentConfigurationType|null $value Value to set for the deviceEnrollmentConfigurationType property.
    */
    public function setDeviceEnrollmentConfigurationType(?DeviceEnrollmentConfigurationType $value): void {
        $this->getBackingStore()->set('deviceEnrollmentConfigurationType', $value);
    }

    /**
     * Sets the displayName property value. The display name of the device enrollment configuration
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified date time in UTC of the device enrollment configuration
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the priority property value. Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. Optional role scope tags for the enrollment restrictions.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the version property value. The version of the device enrollment configuration
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
