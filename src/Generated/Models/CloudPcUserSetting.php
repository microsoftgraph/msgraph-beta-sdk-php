<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcUserSetting extends Entity implements Parsable 
{
    /**
     * @var array<CloudPcUserSettingAssignment>|null $assignments Represents the set of Microsoft 365 groups and security groups in Azure AD that have cloudPCUserSetting assigned. Returned only on $expand. For an example, see Get cloudPcUserSettingample.
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the setting was created. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName The setting name displayed in the user interface.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The last date and time the setting was modified. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var bool|null $localAdminEnabled Indicates whether the local admin option is enabled. Default value is false. To enable the local admin option, change the setting to true. If the local admin option is enabled, the end user can be an admin of the Cloud PC device.
    */
    private ?bool $localAdminEnabled = null;
    
    /**
     * @var CloudPcRestorePointSetting|null $restorePointSetting Defines how frequently a restore point is created that is, a snapshot is taken) for users' provisioned Cloud PCs (default is 12 hours), and whether the user is allowed to restore their own Cloud PCs to a backup made at a specific point in time.
    */
    private ?CloudPcRestorePointSetting $restorePointSetting = null;
    
    /**
     * @var bool|null $selfServiceEnabled Indicates whether the self-service option is enabled. Default value is false. To enable the self-service option, change the setting to true. If the self-service option is enabled, the end user is allowed to perform some self-service operations, such as upgrading the Cloud PC through the end user portal.
    */
    private ?bool $selfServiceEnabled = null;
    
    /**
     * Instantiates a new cloudPcUserSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcUserSetting');
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
     * Gets the assignments property value. Represents the set of Microsoft 365 groups and security groups in Azure AD that have cloudPCUserSetting assigned. Returned only on $expand. For an example, see Get cloudPcUserSettingample.
     * @return array<CloudPcUserSettingAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. The date and time the setting was created. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The setting name displayed in the user interface.
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
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(CloudPcUserSettingAssignment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'localAdminEnabled' => function (ParseNode $n) use ($o) { $o->setLocalAdminEnabled($n->getBooleanValue()); },
            'restorePointSetting' => function (ParseNode $n) use ($o) { $o->setRestorePointSetting($n->getObjectValue(array(CloudPcRestorePointSetting::class, 'createFromDiscriminatorValue'))); },
            'selfServiceEnabled' => function (ParseNode $n) use ($o) { $o->setSelfServiceEnabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The last date and time the setting was modified. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the localAdminEnabled property value. Indicates whether the local admin option is enabled. Default value is false. To enable the local admin option, change the setting to true. If the local admin option is enabled, the end user can be an admin of the Cloud PC device.
     * @return bool|null
    */
    public function getLocalAdminEnabled(): ?bool {
        return $this->localAdminEnabled;
    }

    /**
     * Gets the restorePointSetting property value. Defines how frequently a restore point is created that is, a snapshot is taken) for users' provisioned Cloud PCs (default is 12 hours), and whether the user is allowed to restore their own Cloud PCs to a backup made at a specific point in time.
     * @return CloudPcRestorePointSetting|null
    */
    public function getRestorePointSetting(): ?CloudPcRestorePointSetting {
        return $this->restorePointSetting;
    }

    /**
     * Gets the selfServiceEnabled property value. Indicates whether the self-service option is enabled. Default value is false. To enable the self-service option, change the setting to true. If the self-service option is enabled, the end user is allowed to perform some self-service operations, such as upgrading the Cloud PC through the end user portal.
     * @return bool|null
    */
    public function getSelfServiceEnabled(): ?bool {
        return $this->selfServiceEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeBooleanValue('localAdminEnabled', $this->localAdminEnabled);
        $writer->writeObjectValue('restorePointSetting', $this->restorePointSetting);
        $writer->writeBooleanValue('selfServiceEnabled', $this->selfServiceEnabled);
    }

    /**
     * Sets the assignments property value. Represents the set of Microsoft 365 groups and security groups in Azure AD that have cloudPCUserSetting assigned. Returned only on $expand. For an example, see Get cloudPcUserSettingample.
     *  @param array<CloudPcUserSettingAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the setting was created. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The setting name displayed in the user interface.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The last date and time the setting was modified. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the localAdminEnabled property value. Indicates whether the local admin option is enabled. Default value is false. To enable the local admin option, change the setting to true. If the local admin option is enabled, the end user can be an admin of the Cloud PC device.
     *  @param bool|null $value Value to set for the localAdminEnabled property.
    */
    public function setLocalAdminEnabled(?bool $value ): void {
        $this->localAdminEnabled = $value;
    }

    /**
     * Sets the restorePointSetting property value. Defines how frequently a restore point is created that is, a snapshot is taken) for users' provisioned Cloud PCs (default is 12 hours), and whether the user is allowed to restore their own Cloud PCs to a backup made at a specific point in time.
     *  @param CloudPcRestorePointSetting|null $value Value to set for the restorePointSetting property.
    */
    public function setRestorePointSetting(?CloudPcRestorePointSetting $value ): void {
        $this->restorePointSetting = $value;
    }

    /**
     * Sets the selfServiceEnabled property value. Indicates whether the self-service option is enabled. Default value is false. To enable the self-service option, change the setting to true. If the self-service option is enabled, the end user is allowed to perform some self-service operations, such as upgrading the Cloud PC through the end user portal.
     *  @param bool|null $value Value to set for the selfServiceEnabled property.
    */
    public function setSelfServiceEnabled(?bool $value ): void {
        $this->selfServiceEnabled = $value;
    }

}
