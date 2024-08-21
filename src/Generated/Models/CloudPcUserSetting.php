<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcUserSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcUserSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcUserSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcUserSetting {
        return new CloudPcUserSetting();
    }

    /**
     * Gets the assignments property value. Represents the set of Microsoft 365 groups and security groups in Microsoft Entra ID that have cloudPCUserSetting assigned. Returned only on $expand. For an example, see Get cloudPcUserSettingample.
     * @return array<CloudPcUserSettingAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcUserSettingAssignment::class);
            /** @var array<CloudPcUserSettingAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the setting was created. The timestamp type represents the date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
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
     * Gets the crossRegionDisasterRecoverySetting property value. The crossRegionDisasterRecoverySetting property
     * @return CloudPcCrossRegionDisasterRecoverySetting|null
    */
    public function getCrossRegionDisasterRecoverySetting(): ?CloudPcCrossRegionDisasterRecoverySetting {
        $val = $this->getBackingStore()->get('crossRegionDisasterRecoverySetting');
        if (is_null($val) || $val instanceof CloudPcCrossRegionDisasterRecoverySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossRegionDisasterRecoverySetting'");
    }

    /**
     * Gets the displayName property value. The setting name displayed in the user interface.
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
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([CloudPcUserSettingAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'crossRegionDisasterRecoverySetting' => fn(ParseNode $n) => $o->setCrossRegionDisasterRecoverySetting($n->getObjectValue([CloudPcCrossRegionDisasterRecoverySetting::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'localAdminEnabled' => fn(ParseNode $n) => $o->setLocalAdminEnabled($n->getBooleanValue()),
            'notificationSetting' => fn(ParseNode $n) => $o->setNotificationSetting($n->getObjectValue([CloudPcNotificationSetting::class, 'createFromDiscriminatorValue'])),
            'resetEnabled' => fn(ParseNode $n) => $o->setResetEnabled($n->getBooleanValue()),
            'restorePointSetting' => fn(ParseNode $n) => $o->setRestorePointSetting($n->getObjectValue([CloudPcRestorePointSetting::class, 'createFromDiscriminatorValue'])),
            'selfServiceEnabled' => fn(ParseNode $n) => $o->setSelfServiceEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The last date and time the setting was modified. The timestamp type represents the date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
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
     * Gets the localAdminEnabled property value. Indicates whether the local admin option is enabled. Default value is false. To enable the local admin option, change the setting to true. If the local admin option is enabled, the end user can be an admin of the Cloud PC device.
     * @return bool|null
    */
    public function getLocalAdminEnabled(): ?bool {
        $val = $this->getBackingStore()->get('localAdminEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAdminEnabled'");
    }

    /**
     * Gets the notificationSetting property value. The notificationSetting property
     * @return CloudPcNotificationSetting|null
    */
    public function getNotificationSetting(): ?CloudPcNotificationSetting {
        $val = $this->getBackingStore()->get('notificationSetting');
        if (is_null($val) || $val instanceof CloudPcNotificationSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationSetting'");
    }

    /**
     * Gets the resetEnabled property value. Indicates whether an end user is allowed to reset their Cloud PC. When true, the user is allowed to reset their Cloud PC. When false, end-user initiated reset is not allowed. The default value is false.
     * @return bool|null
    */
    public function getResetEnabled(): ?bool {
        $val = $this->getBackingStore()->get('resetEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resetEnabled'");
    }

    /**
     * Gets the restorePointSetting property value. Defines how frequently a restore point is created that is, a snapshot is taken) for users' provisioned Cloud PCs (default is 12 hours), and whether the user is allowed to restore their own Cloud PCs to a backup made at a specific point in time.
     * @return CloudPcRestorePointSetting|null
    */
    public function getRestorePointSetting(): ?CloudPcRestorePointSetting {
        $val = $this->getBackingStore()->get('restorePointSetting');
        if (is_null($val) || $val instanceof CloudPcRestorePointSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointSetting'");
    }

    /**
     * Gets the selfServiceEnabled property value. Indicates whether the self-service option is enabled. Default value is false. To enable the self-service option, change the setting to true. If the self-service option is enabled, the end user is allowed to perform some self-service operations, such as upgrading the Cloud PC through the end user portal. The selfServiceEnabled property is deprecated and will stop returning data on December 1, 2023.
     * @return bool|null
    */
    public function getSelfServiceEnabled(): ?bool {
        $val = $this->getBackingStore()->get('selfServiceEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'selfServiceEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('crossRegionDisasterRecoverySetting', $this->getCrossRegionDisasterRecoverySetting());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeBooleanValue('localAdminEnabled', $this->getLocalAdminEnabled());
        $writer->writeObjectValue('notificationSetting', $this->getNotificationSetting());
        $writer->writeBooleanValue('resetEnabled', $this->getResetEnabled());
        $writer->writeObjectValue('restorePointSetting', $this->getRestorePointSetting());
        $writer->writeBooleanValue('selfServiceEnabled', $this->getSelfServiceEnabled());
    }

    /**
     * Sets the assignments property value. Represents the set of Microsoft 365 groups and security groups in Microsoft Entra ID that have cloudPCUserSetting assigned. Returned only on $expand. For an example, see Get cloudPcUserSettingample.
     * @param array<CloudPcUserSettingAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the setting was created. The timestamp type represents the date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the crossRegionDisasterRecoverySetting property value. The crossRegionDisasterRecoverySetting property
     * @param CloudPcCrossRegionDisasterRecoverySetting|null $value Value to set for the crossRegionDisasterRecoverySetting property.
    */
    public function setCrossRegionDisasterRecoverySetting(?CloudPcCrossRegionDisasterRecoverySetting $value): void {
        $this->getBackingStore()->set('crossRegionDisasterRecoverySetting', $value);
    }

    /**
     * Sets the displayName property value. The setting name displayed in the user interface.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The last date and time the setting was modified. The timestamp type represents the date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the localAdminEnabled property value. Indicates whether the local admin option is enabled. Default value is false. To enable the local admin option, change the setting to true. If the local admin option is enabled, the end user can be an admin of the Cloud PC device.
     * @param bool|null $value Value to set for the localAdminEnabled property.
    */
    public function setLocalAdminEnabled(?bool $value): void {
        $this->getBackingStore()->set('localAdminEnabled', $value);
    }

    /**
     * Sets the notificationSetting property value. The notificationSetting property
     * @param CloudPcNotificationSetting|null $value Value to set for the notificationSetting property.
    */
    public function setNotificationSetting(?CloudPcNotificationSetting $value): void {
        $this->getBackingStore()->set('notificationSetting', $value);
    }

    /**
     * Sets the resetEnabled property value. Indicates whether an end user is allowed to reset their Cloud PC. When true, the user is allowed to reset their Cloud PC. When false, end-user initiated reset is not allowed. The default value is false.
     * @param bool|null $value Value to set for the resetEnabled property.
    */
    public function setResetEnabled(?bool $value): void {
        $this->getBackingStore()->set('resetEnabled', $value);
    }

    /**
     * Sets the restorePointSetting property value. Defines how frequently a restore point is created that is, a snapshot is taken) for users' provisioned Cloud PCs (default is 12 hours), and whether the user is allowed to restore their own Cloud PCs to a backup made at a specific point in time.
     * @param CloudPcRestorePointSetting|null $value Value to set for the restorePointSetting property.
    */
    public function setRestorePointSetting(?CloudPcRestorePointSetting $value): void {
        $this->getBackingStore()->set('restorePointSetting', $value);
    }

    /**
     * Sets the selfServiceEnabled property value. Indicates whether the self-service option is enabled. Default value is false. To enable the self-service option, change the setting to true. If the self-service option is enabled, the end user is allowed to perform some self-service operations, such as upgrading the Cloud PC through the end user portal. The selfServiceEnabled property is deprecated and will stop returning data on December 1, 2023.
     * @param bool|null $value Value to set for the selfServiceEnabled property.
    */
    public function setSelfServiceEnabled(?bool $value): void {
        $this->getBackingStore()->set('selfServiceEnabled', $value);
    }

}
