<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkSettings extends Entity implements Parsable 
{
    /**
     * @var AndroidForWorkBindStatus|null $bindStatus Bind status of the tenant with the Google EMM API. Possible values are: notBound, bound, boundAndValidated, unbinding.
    */
    private ?AndroidForWorkBindStatus $bindStatus = null;
    
    /**
     * @var bool|null $deviceOwnerManagementEnabled Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
    */
    private ?bool $deviceOwnerManagementEnabled = null;
    
    /**
     * @var AndroidForWorkEnrollmentTarget|null $enrollmentTarget Indicates which users can enroll devices in Android for Work device management. Possible values are: none, all, targeted, targetedAsEnrollmentRestrictions.
    */
    private ?AndroidForWorkEnrollmentTarget $enrollmentTarget = null;
    
    /**
     * @var DateTime|null $lastAppSyncDateTime Last completion time for app sync
    */
    private ?DateTime $lastAppSyncDateTime = null;
    
    /**
     * @var AndroidForWorkSyncStatus|null $lastAppSyncStatus Last application sync result. Possible values are: success, credentialsNotValid, androidForWorkApiError, managementServiceError, unknownError, none.
    */
    private ?AndroidForWorkSyncStatus $lastAppSyncStatus = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Last modification time for Android for Work settings
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $ownerOrganizationName Organization name used when onboarding Android for Work
    */
    private ?string $ownerOrganizationName = null;
    
    /**
     * @var string|null $ownerUserPrincipalName Owner UPN that created the enterprise
    */
    private ?string $ownerUserPrincipalName = null;
    
    /**
     * @var array<string>|null $targetGroupIds Specifies which AAD groups can enroll devices in Android for Work device management if enrollmentTarget is set to 'Targeted'
    */
    private ?array $targetGroupIds = null;
    
    /**
     * Instantiates a new AndroidForWorkSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkSettings {
        return new AndroidForWorkSettings();
    }

    /**
     * Gets the bindStatus property value. Bind status of the tenant with the Google EMM API. Possible values are: notBound, bound, boundAndValidated, unbinding.
     * @return AndroidForWorkBindStatus|null
    */
    public function getBindStatus(): ?AndroidForWorkBindStatus {
        return $this->bindStatus;
    }

    /**
     * Gets the deviceOwnerManagementEnabled property value. Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
     * @return bool|null
    */
    public function getDeviceOwnerManagementEnabled(): ?bool {
        return $this->deviceOwnerManagementEnabled;
    }

    /**
     * Gets the enrollmentTarget property value. Indicates which users can enroll devices in Android for Work device management. Possible values are: none, all, targeted, targetedAsEnrollmentRestrictions.
     * @return AndroidForWorkEnrollmentTarget|null
    */
    public function getEnrollmentTarget(): ?AndroidForWorkEnrollmentTarget {
        return $this->enrollmentTarget;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bindStatus' => function (ParseNode $n) use ($o) { $o->setBindStatus($n->getEnumValue(AndroidForWorkBindStatus::class)); },
            'deviceOwnerManagementEnabled' => function (ParseNode $n) use ($o) { $o->setDeviceOwnerManagementEnabled($n->getBooleanValue()); },
            'enrollmentTarget' => function (ParseNode $n) use ($o) { $o->setEnrollmentTarget($n->getEnumValue(AndroidForWorkEnrollmentTarget::class)); },
            'lastAppSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastAppSyncDateTime($n->getDateTimeValue()); },
            'lastAppSyncStatus' => function (ParseNode $n) use ($o) { $o->setLastAppSyncStatus($n->getEnumValue(AndroidForWorkSyncStatus::class)); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'ownerOrganizationName' => function (ParseNode $n) use ($o) { $o->setOwnerOrganizationName($n->getStringValue()); },
            'ownerUserPrincipalName' => function (ParseNode $n) use ($o) { $o->setOwnerUserPrincipalName($n->getStringValue()); },
            'targetGroupIds' => function (ParseNode $n) use ($o) { $o->setTargetGroupIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the lastAppSyncDateTime property value. Last completion time for app sync
     * @return DateTime|null
    */
    public function getLastAppSyncDateTime(): ?DateTime {
        return $this->lastAppSyncDateTime;
    }

    /**
     * Gets the lastAppSyncStatus property value. Last application sync result. Possible values are: success, credentialsNotValid, androidForWorkApiError, managementServiceError, unknownError, none.
     * @return AndroidForWorkSyncStatus|null
    */
    public function getLastAppSyncStatus(): ?AndroidForWorkSyncStatus {
        return $this->lastAppSyncStatus;
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modification time for Android for Work settings
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the ownerOrganizationName property value. Organization name used when onboarding Android for Work
     * @return string|null
    */
    public function getOwnerOrganizationName(): ?string {
        return $this->ownerOrganizationName;
    }

    /**
     * Gets the ownerUserPrincipalName property value. Owner UPN that created the enterprise
     * @return string|null
    */
    public function getOwnerUserPrincipalName(): ?string {
        return $this->ownerUserPrincipalName;
    }

    /**
     * Gets the targetGroupIds property value. Specifies which AAD groups can enroll devices in Android for Work device management if enrollmentTarget is set to 'Targeted'
     * @return array<string>|null
    */
    public function getTargetGroupIds(): ?array {
        return $this->targetGroupIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('bindStatus', $this->bindStatus);
        $writer->writeBooleanValue('deviceOwnerManagementEnabled', $this->deviceOwnerManagementEnabled);
        $writer->writeEnumValue('enrollmentTarget', $this->enrollmentTarget);
        $writer->writeDateTimeValue('lastAppSyncDateTime', $this->lastAppSyncDateTime);
        $writer->writeEnumValue('lastAppSyncStatus', $this->lastAppSyncStatus);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('ownerOrganizationName', $this->ownerOrganizationName);
        $writer->writeStringValue('ownerUserPrincipalName', $this->ownerUserPrincipalName);
        $writer->writeCollectionOfPrimitiveValues('targetGroupIds', $this->targetGroupIds);
    }

    /**
     * Sets the bindStatus property value. Bind status of the tenant with the Google EMM API. Possible values are: notBound, bound, boundAndValidated, unbinding.
     *  @param AndroidForWorkBindStatus|null $value Value to set for the bindStatus property.
    */
    public function setBindStatus(?AndroidForWorkBindStatus $value ): void {
        $this->bindStatus = $value;
    }

    /**
     * Sets the deviceOwnerManagementEnabled property value. Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
     *  @param bool|null $value Value to set for the deviceOwnerManagementEnabled property.
    */
    public function setDeviceOwnerManagementEnabled(?bool $value ): void {
        $this->deviceOwnerManagementEnabled = $value;
    }

    /**
     * Sets the enrollmentTarget property value. Indicates which users can enroll devices in Android for Work device management. Possible values are: none, all, targeted, targetedAsEnrollmentRestrictions.
     *  @param AndroidForWorkEnrollmentTarget|null $value Value to set for the enrollmentTarget property.
    */
    public function setEnrollmentTarget(?AndroidForWorkEnrollmentTarget $value ): void {
        $this->enrollmentTarget = $value;
    }

    /**
     * Sets the lastAppSyncDateTime property value. Last completion time for app sync
     *  @param DateTime|null $value Value to set for the lastAppSyncDateTime property.
    */
    public function setLastAppSyncDateTime(?DateTime $value ): void {
        $this->lastAppSyncDateTime = $value;
    }

    /**
     * Sets the lastAppSyncStatus property value. Last application sync result. Possible values are: success, credentialsNotValid, androidForWorkApiError, managementServiceError, unknownError, none.
     *  @param AndroidForWorkSyncStatus|null $value Value to set for the lastAppSyncStatus property.
    */
    public function setLastAppSyncStatus(?AndroidForWorkSyncStatus $value ): void {
        $this->lastAppSyncStatus = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modification time for Android for Work settings
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the ownerOrganizationName property value. Organization name used when onboarding Android for Work
     *  @param string|null $value Value to set for the ownerOrganizationName property.
    */
    public function setOwnerOrganizationName(?string $value ): void {
        $this->ownerOrganizationName = $value;
    }

    /**
     * Sets the ownerUserPrincipalName property value. Owner UPN that created the enterprise
     *  @param string|null $value Value to set for the ownerUserPrincipalName property.
    */
    public function setOwnerUserPrincipalName(?string $value ): void {
        $this->ownerUserPrincipalName = $value;
    }

    /**
     * Sets the targetGroupIds property value. Specifies which AAD groups can enroll devices in Android for Work device management if enrollmentTarget is set to 'Targeted'
     *  @param array<string>|null $value Value to set for the targetGroupIds property.
    */
    public function setTargetGroupIds(?array $value ): void {
        $this->targetGroupIds = $value;
    }

}
