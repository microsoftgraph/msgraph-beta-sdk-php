<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidManagedStoreAccountEnterpriseSettings extends Entity implements Parsable 
{
    /**
     * @var bool|null $androidDeviceOwnerFullyManagedEnrollmentEnabled Company codes for AndroidManagedStoreAccountEnterpriseSettings
    */
    private ?bool $androidDeviceOwnerFullyManagedEnrollmentEnabled = null;
    
    /**
     * @var AndroidManagedStoreAccountBindStatus|null $bindStatus Bind status of the tenant with the Google EMM API
    */
    private ?AndroidManagedStoreAccountBindStatus $bindStatus = null;
    
    /**
     * @var array<AndroidEnrollmentCompanyCode>|null $companyCodes Company codes for AndroidManagedStoreAccountEnterpriseSettings
    */
    private ?array $companyCodes = null;
    
    /**
     * @var bool|null $deviceOwnerManagementEnabled Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
    */
    private ?bool $deviceOwnerManagementEnabled = null;
    
    /**
     * @var AndroidManagedStoreAccountEnrollmentTarget|null $enrollmentTarget Android for Work device management targeting type for the account
    */
    private ?AndroidManagedStoreAccountEnrollmentTarget $enrollmentTarget = null;
    
    /**
     * @var DateTime|null $lastAppSyncDateTime Last completion time for app sync
    */
    private ?DateTime $lastAppSyncDateTime = null;
    
    /**
     * @var AndroidManagedStoreAccountAppSyncStatus|null $lastAppSyncStatus Sync status of the tenant with the Google EMM API
    */
    private ?AndroidManagedStoreAccountAppSyncStatus $lastAppSyncStatus = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Last modification time for Android enterprise settings
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<string>|null $managedGooglePlayInitialScopeTagIds Initial scope tags for MGP apps
    */
    private ?array $managedGooglePlayInitialScopeTagIds = null;
    
    /**
     * @var string|null $ownerOrganizationName Organization name used when onboarding Android Enterprise
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
     * Instantiates a new androidManagedStoreAccountEnterpriseSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidManagedStoreAccountEnterpriseSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedStoreAccountEnterpriseSettings {
        return new AndroidManagedStoreAccountEnterpriseSettings();
    }

    /**
     * Gets the androidDeviceOwnerFullyManagedEnrollmentEnabled property value. Company codes for AndroidManagedStoreAccountEnterpriseSettings
     * @return bool|null
    */
    public function getAndroidDeviceOwnerFullyManagedEnrollmentEnabled(): ?bool {
        return $this->androidDeviceOwnerFullyManagedEnrollmentEnabled;
    }

    /**
     * Gets the bindStatus property value. Bind status of the tenant with the Google EMM API
     * @return AndroidManagedStoreAccountBindStatus|null
    */
    public function getBindStatus(): ?AndroidManagedStoreAccountBindStatus {
        return $this->bindStatus;
    }

    /**
     * Gets the companyCodes property value. Company codes for AndroidManagedStoreAccountEnterpriseSettings
     * @return array<AndroidEnrollmentCompanyCode>|null
    */
    public function getCompanyCodes(): ?array {
        return $this->companyCodes;
    }

    /**
     * Gets the deviceOwnerManagementEnabled property value. Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
     * @return bool|null
    */
    public function getDeviceOwnerManagementEnabled(): ?bool {
        return $this->deviceOwnerManagementEnabled;
    }

    /**
     * Gets the enrollmentTarget property value. Android for Work device management targeting type for the account
     * @return AndroidManagedStoreAccountEnrollmentTarget|null
    */
    public function getEnrollmentTarget(): ?AndroidManagedStoreAccountEnrollmentTarget {
        return $this->enrollmentTarget;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidDeviceOwnerFullyManagedEnrollmentEnabled' => fn(ParseNode $n) => $o->setAndroidDeviceOwnerFullyManagedEnrollmentEnabled($n->getBooleanValue()),
            'bindStatus' => fn(ParseNode $n) => $o->setBindStatus($n->getEnumValue(AndroidManagedStoreAccountBindStatus::class)),
            'companyCodes' => fn(ParseNode $n) => $o->setCompanyCodes($n->getCollectionOfObjectValues([AndroidEnrollmentCompanyCode::class, 'createFromDiscriminatorValue'])),
            'deviceOwnerManagementEnabled' => fn(ParseNode $n) => $o->setDeviceOwnerManagementEnabled($n->getBooleanValue()),
            'enrollmentTarget' => fn(ParseNode $n) => $o->setEnrollmentTarget($n->getEnumValue(AndroidManagedStoreAccountEnrollmentTarget::class)),
            'lastAppSyncDateTime' => fn(ParseNode $n) => $o->setLastAppSyncDateTime($n->getDateTimeValue()),
            'lastAppSyncStatus' => fn(ParseNode $n) => $o->setLastAppSyncStatus($n->getEnumValue(AndroidManagedStoreAccountAppSyncStatus::class)),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'managedGooglePlayInitialScopeTagIds' => fn(ParseNode $n) => $o->setManagedGooglePlayInitialScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'ownerOrganizationName' => fn(ParseNode $n) => $o->setOwnerOrganizationName($n->getStringValue()),
            'ownerUserPrincipalName' => fn(ParseNode $n) => $o->setOwnerUserPrincipalName($n->getStringValue()),
            'targetGroupIds' => fn(ParseNode $n) => $o->setTargetGroupIds($n->getCollectionOfPrimitiveValues()),
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
     * Gets the lastAppSyncStatus property value. Sync status of the tenant with the Google EMM API
     * @return AndroidManagedStoreAccountAppSyncStatus|null
    */
    public function getLastAppSyncStatus(): ?AndroidManagedStoreAccountAppSyncStatus {
        return $this->lastAppSyncStatus;
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modification time for Android enterprise settings
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the managedGooglePlayInitialScopeTagIds property value. Initial scope tags for MGP apps
     * @return array<string>|null
    */
    public function getManagedGooglePlayInitialScopeTagIds(): ?array {
        return $this->managedGooglePlayInitialScopeTagIds;
    }

    /**
     * Gets the ownerOrganizationName property value. Organization name used when onboarding Android Enterprise
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
        $writer->writeBooleanValue('androidDeviceOwnerFullyManagedEnrollmentEnabled', $this->androidDeviceOwnerFullyManagedEnrollmentEnabled);
        $writer->writeEnumValue('bindStatus', $this->bindStatus);
        $writer->writeCollectionOfObjectValues('companyCodes', $this->companyCodes);
        $writer->writeBooleanValue('deviceOwnerManagementEnabled', $this->deviceOwnerManagementEnabled);
        $writer->writeEnumValue('enrollmentTarget', $this->enrollmentTarget);
        $writer->writeDateTimeValue('lastAppSyncDateTime', $this->lastAppSyncDateTime);
        $writer->writeEnumValue('lastAppSyncStatus', $this->lastAppSyncStatus);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfPrimitiveValues('managedGooglePlayInitialScopeTagIds', $this->managedGooglePlayInitialScopeTagIds);
        $writer->writeStringValue('ownerOrganizationName', $this->ownerOrganizationName);
        $writer->writeStringValue('ownerUserPrincipalName', $this->ownerUserPrincipalName);
        $writer->writeCollectionOfPrimitiveValues('targetGroupIds', $this->targetGroupIds);
    }

    /**
     * Sets the androidDeviceOwnerFullyManagedEnrollmentEnabled property value. Company codes for AndroidManagedStoreAccountEnterpriseSettings
     *  @param bool|null $value Value to set for the androidDeviceOwnerFullyManagedEnrollmentEnabled property.
    */
    public function setAndroidDeviceOwnerFullyManagedEnrollmentEnabled(?bool $value ): void {
        $this->androidDeviceOwnerFullyManagedEnrollmentEnabled = $value;
    }

    /**
     * Sets the bindStatus property value. Bind status of the tenant with the Google EMM API
     *  @param AndroidManagedStoreAccountBindStatus|null $value Value to set for the bindStatus property.
    */
    public function setBindStatus(?AndroidManagedStoreAccountBindStatus $value ): void {
        $this->bindStatus = $value;
    }

    /**
     * Sets the companyCodes property value. Company codes for AndroidManagedStoreAccountEnterpriseSettings
     *  @param array<AndroidEnrollmentCompanyCode>|null $value Value to set for the companyCodes property.
    */
    public function setCompanyCodes(?array $value ): void {
        $this->companyCodes = $value;
    }

    /**
     * Sets the deviceOwnerManagementEnabled property value. Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
     *  @param bool|null $value Value to set for the deviceOwnerManagementEnabled property.
    */
    public function setDeviceOwnerManagementEnabled(?bool $value ): void {
        $this->deviceOwnerManagementEnabled = $value;
    }

    /**
     * Sets the enrollmentTarget property value. Android for Work device management targeting type for the account
     *  @param AndroidManagedStoreAccountEnrollmentTarget|null $value Value to set for the enrollmentTarget property.
    */
    public function setEnrollmentTarget(?AndroidManagedStoreAccountEnrollmentTarget $value ): void {
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
     * Sets the lastAppSyncStatus property value. Sync status of the tenant with the Google EMM API
     *  @param AndroidManagedStoreAccountAppSyncStatus|null $value Value to set for the lastAppSyncStatus property.
    */
    public function setLastAppSyncStatus(?AndroidManagedStoreAccountAppSyncStatus $value ): void {
        $this->lastAppSyncStatus = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modification time for Android enterprise settings
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the managedGooglePlayInitialScopeTagIds property value. Initial scope tags for MGP apps
     *  @param array<string>|null $value Value to set for the managedGooglePlayInitialScopeTagIds property.
    */
    public function setManagedGooglePlayInitialScopeTagIds(?array $value ): void {
        $this->managedGooglePlayInitialScopeTagIds = $value;
    }

    /**
     * Sets the ownerOrganizationName property value. Organization name used when onboarding Android Enterprise
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
