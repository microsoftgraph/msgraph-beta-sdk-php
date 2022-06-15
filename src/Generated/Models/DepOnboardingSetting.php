<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepOnboardingSetting extends Entity implements Parsable 
{
    /**
     * @var string|null $appleIdentifier The Apple ID used to obtain the current token.
    */
    private ?string $appleIdentifier = null;
    
    /**
     * @var bool|null $dataSharingConsentGranted Consent granted for data sharing with Apple Dep Service
    */
    private ?bool $dataSharingConsentGranted = null;
    
    /**
     * @var DepIOSEnrollmentProfile|null $defaultIosEnrollmentProfile Default iOS Enrollment Profile
    */
    private ?DepIOSEnrollmentProfile $defaultIosEnrollmentProfile = null;
    
    /**
     * @var DepMacOSEnrollmentProfile|null $defaultMacOsEnrollmentProfile Default MacOs Enrollment Profile
    */
    private ?DepMacOSEnrollmentProfile $defaultMacOsEnrollmentProfile = null;
    
    /**
     * @var array<EnrollmentProfile>|null $enrollmentProfiles The enrollment profiles.
    */
    private ?array $enrollmentProfiles = null;
    
    /**
     * @var array<ImportedAppleDeviceIdentity>|null $importedAppleDeviceIdentities The imported Apple device identities.
    */
    private ?array $importedAppleDeviceIdentities = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime When the service was onboarded.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $lastSuccessfulSyncDateTime When the service last syned with Intune
    */
    private ?DateTime $lastSuccessfulSyncDateTime = null;
    
    /**
     * @var int|null $lastSyncErrorCode Error code reported by Apple during last dep sync.
    */
    private ?int $lastSyncErrorCode = null;
    
    /**
     * @var DateTime|null $lastSyncTriggeredDateTime When Intune last requested a sync.
    */
    private ?DateTime $lastSyncTriggeredDateTime = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tags for this Entity instance.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var bool|null $shareTokenWithSchoolDataSyncService Whether or not the Dep token sharing is enabled with the School Data Sync service.
    */
    private ?bool $shareTokenWithSchoolDataSyncService = null;
    
    /**
     * @var int|null $syncedDeviceCount Gets synced device count
    */
    private ?int $syncedDeviceCount = null;
    
    /**
     * @var DateTime|null $tokenExpirationDateTime When the token will expire.
    */
    private ?DateTime $tokenExpirationDateTime = null;
    
    /**
     * @var string|null $tokenName Friendly Name for Dep Token
    */
    private ?string $tokenName = null;
    
    /**
     * @var DepTokenType|null $tokenType Gets or sets the Dep Token Type. Possible values are: none, dep, appleSchoolManager.
    */
    private ?DepTokenType $tokenType = null;
    
    /**
     * Instantiates a new depOnboardingSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepOnboardingSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DepOnboardingSetting {
        return new DepOnboardingSetting();
    }

    /**
     * Gets the appleIdentifier property value. The Apple ID used to obtain the current token.
     * @return string|null
    */
    public function getAppleIdentifier(): ?string {
        return $this->appleIdentifier;
    }

    /**
     * Gets the dataSharingConsentGranted property value. Consent granted for data sharing with Apple Dep Service
     * @return bool|null
    */
    public function getDataSharingConsentGranted(): ?bool {
        return $this->dataSharingConsentGranted;
    }

    /**
     * Gets the defaultIosEnrollmentProfile property value. Default iOS Enrollment Profile
     * @return DepIOSEnrollmentProfile|null
    */
    public function getDefaultIosEnrollmentProfile(): ?DepIOSEnrollmentProfile {
        return $this->defaultIosEnrollmentProfile;
    }

    /**
     * Gets the defaultMacOsEnrollmentProfile property value. Default MacOs Enrollment Profile
     * @return DepMacOSEnrollmentProfile|null
    */
    public function getDefaultMacOsEnrollmentProfile(): ?DepMacOSEnrollmentProfile {
        return $this->defaultMacOsEnrollmentProfile;
    }

    /**
     * Gets the enrollmentProfiles property value. The enrollment profiles.
     * @return array<EnrollmentProfile>|null
    */
    public function getEnrollmentProfiles(): ?array {
        return $this->enrollmentProfiles;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appleIdentifier' => function (ParseNode $n) use ($o) { $o->setAppleIdentifier($n->getStringValue()); },
            'dataSharingConsentGranted' => function (ParseNode $n) use ($o) { $o->setDataSharingConsentGranted($n->getBooleanValue()); },
            'defaultIosEnrollmentProfile' => function (ParseNode $n) use ($o) { $o->setDefaultIosEnrollmentProfile($n->getObjectValue(array(DepIOSEnrollmentProfile::class, 'createFromDiscriminatorValue'))); },
            'defaultMacOsEnrollmentProfile' => function (ParseNode $n) use ($o) { $o->setDefaultMacOsEnrollmentProfile($n->getObjectValue(array(DepMacOSEnrollmentProfile::class, 'createFromDiscriminatorValue'))); },
            'enrollmentProfiles' => function (ParseNode $n) use ($o) { $o->setEnrollmentProfiles($n->getCollectionOfObjectValues(array(EnrollmentProfile::class, 'createFromDiscriminatorValue'))); },
            'importedAppleDeviceIdentities' => function (ParseNode $n) use ($o) { $o->setImportedAppleDeviceIdentities($n->getCollectionOfObjectValues(array(ImportedAppleDeviceIdentity::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'lastSuccessfulSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSuccessfulSyncDateTime($n->getDateTimeValue()); },
            'lastSyncErrorCode' => function (ParseNode $n) use ($o) { $o->setLastSyncErrorCode($n->getIntegerValue()); },
            'lastSyncTriggeredDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncTriggeredDateTime($n->getDateTimeValue()); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'shareTokenWithSchoolDataSyncService' => function (ParseNode $n) use ($o) { $o->setShareTokenWithSchoolDataSyncService($n->getBooleanValue()); },
            'syncedDeviceCount' => function (ParseNode $n) use ($o) { $o->setSyncedDeviceCount($n->getIntegerValue()); },
            'tokenExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setTokenExpirationDateTime($n->getDateTimeValue()); },
            'tokenName' => function (ParseNode $n) use ($o) { $o->setTokenName($n->getStringValue()); },
            'tokenType' => function (ParseNode $n) use ($o) { $o->setTokenType($n->getEnumValue(DepTokenType::class)); },
        ]);
    }

    /**
     * Gets the importedAppleDeviceIdentities property value. The imported Apple device identities.
     * @return array<ImportedAppleDeviceIdentity>|null
    */
    public function getImportedAppleDeviceIdentities(): ?array {
        return $this->importedAppleDeviceIdentities;
    }

    /**
     * Gets the lastModifiedDateTime property value. When the service was onboarded.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the lastSuccessfulSyncDateTime property value. When the service last syned with Intune
     * @return DateTime|null
    */
    public function getLastSuccessfulSyncDateTime(): ?DateTime {
        return $this->lastSuccessfulSyncDateTime;
    }

    /**
     * Gets the lastSyncErrorCode property value. Error code reported by Apple during last dep sync.
     * @return int|null
    */
    public function getLastSyncErrorCode(): ?int {
        return $this->lastSyncErrorCode;
    }

    /**
     * Gets the lastSyncTriggeredDateTime property value. When Intune last requested a sync.
     * @return DateTime|null
    */
    public function getLastSyncTriggeredDateTime(): ?DateTime {
        return $this->lastSyncTriggeredDateTime;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the shareTokenWithSchoolDataSyncService property value. Whether or not the Dep token sharing is enabled with the School Data Sync service.
     * @return bool|null
    */
    public function getShareTokenWithSchoolDataSyncService(): ?bool {
        return $this->shareTokenWithSchoolDataSyncService;
    }

    /**
     * Gets the syncedDeviceCount property value. Gets synced device count
     * @return int|null
    */
    public function getSyncedDeviceCount(): ?int {
        return $this->syncedDeviceCount;
    }

    /**
     * Gets the tokenExpirationDateTime property value. When the token will expire.
     * @return DateTime|null
    */
    public function getTokenExpirationDateTime(): ?DateTime {
        return $this->tokenExpirationDateTime;
    }

    /**
     * Gets the tokenName property value. Friendly Name for Dep Token
     * @return string|null
    */
    public function getTokenName(): ?string {
        return $this->tokenName;
    }

    /**
     * Gets the tokenType property value. Gets or sets the Dep Token Type. Possible values are: none, dep, appleSchoolManager.
     * @return DepTokenType|null
    */
    public function getTokenType(): ?DepTokenType {
        return $this->tokenType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appleIdentifier', $this->appleIdentifier);
        $writer->writeBooleanValue('dataSharingConsentGranted', $this->dataSharingConsentGranted);
        $writer->writeObjectValue('defaultIosEnrollmentProfile', $this->defaultIosEnrollmentProfile);
        $writer->writeObjectValue('defaultMacOsEnrollmentProfile', $this->defaultMacOsEnrollmentProfile);
        $writer->writeCollectionOfObjectValues('enrollmentProfiles', $this->enrollmentProfiles);
        $writer->writeCollectionOfObjectValues('importedAppleDeviceIdentities', $this->importedAppleDeviceIdentities);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('lastSuccessfulSyncDateTime', $this->lastSuccessfulSyncDateTime);
        $writer->writeIntegerValue('lastSyncErrorCode', $this->lastSyncErrorCode);
        $writer->writeDateTimeValue('lastSyncTriggeredDateTime', $this->lastSyncTriggeredDateTime);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeBooleanValue('shareTokenWithSchoolDataSyncService', $this->shareTokenWithSchoolDataSyncService);
        $writer->writeIntegerValue('syncedDeviceCount', $this->syncedDeviceCount);
        $writer->writeDateTimeValue('tokenExpirationDateTime', $this->tokenExpirationDateTime);
        $writer->writeStringValue('tokenName', $this->tokenName);
        $writer->writeEnumValue('tokenType', $this->tokenType);
    }

    /**
     * Sets the appleIdentifier property value. The Apple ID used to obtain the current token.
     *  @param string|null $value Value to set for the appleIdentifier property.
    */
    public function setAppleIdentifier(?string $value ): void {
        $this->appleIdentifier = $value;
    }

    /**
     * Sets the dataSharingConsentGranted property value. Consent granted for data sharing with Apple Dep Service
     *  @param bool|null $value Value to set for the dataSharingConsentGranted property.
    */
    public function setDataSharingConsentGranted(?bool $value ): void {
        $this->dataSharingConsentGranted = $value;
    }

    /**
     * Sets the defaultIosEnrollmentProfile property value. Default iOS Enrollment Profile
     *  @param DepIOSEnrollmentProfile|null $value Value to set for the defaultIosEnrollmentProfile property.
    */
    public function setDefaultIosEnrollmentProfile(?DepIOSEnrollmentProfile $value ): void {
        $this->defaultIosEnrollmentProfile = $value;
    }

    /**
     * Sets the defaultMacOsEnrollmentProfile property value. Default MacOs Enrollment Profile
     *  @param DepMacOSEnrollmentProfile|null $value Value to set for the defaultMacOsEnrollmentProfile property.
    */
    public function setDefaultMacOsEnrollmentProfile(?DepMacOSEnrollmentProfile $value ): void {
        $this->defaultMacOsEnrollmentProfile = $value;
    }

    /**
     * Sets the enrollmentProfiles property value. The enrollment profiles.
     *  @param array<EnrollmentProfile>|null $value Value to set for the enrollmentProfiles property.
    */
    public function setEnrollmentProfiles(?array $value ): void {
        $this->enrollmentProfiles = $value;
    }

    /**
     * Sets the importedAppleDeviceIdentities property value. The imported Apple device identities.
     *  @param array<ImportedAppleDeviceIdentity>|null $value Value to set for the importedAppleDeviceIdentities property.
    */
    public function setImportedAppleDeviceIdentities(?array $value ): void {
        $this->importedAppleDeviceIdentities = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. When the service was onboarded.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the lastSuccessfulSyncDateTime property value. When the service last syned with Intune
     *  @param DateTime|null $value Value to set for the lastSuccessfulSyncDateTime property.
    */
    public function setLastSuccessfulSyncDateTime(?DateTime $value ): void {
        $this->lastSuccessfulSyncDateTime = $value;
    }

    /**
     * Sets the lastSyncErrorCode property value. Error code reported by Apple during last dep sync.
     *  @param int|null $value Value to set for the lastSyncErrorCode property.
    */
    public function setLastSyncErrorCode(?int $value ): void {
        $this->lastSyncErrorCode = $value;
    }

    /**
     * Sets the lastSyncTriggeredDateTime property value. When Intune last requested a sync.
     *  @param DateTime|null $value Value to set for the lastSyncTriggeredDateTime property.
    */
    public function setLastSyncTriggeredDateTime(?DateTime $value ): void {
        $this->lastSyncTriggeredDateTime = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the shareTokenWithSchoolDataSyncService property value. Whether or not the Dep token sharing is enabled with the School Data Sync service.
     *  @param bool|null $value Value to set for the shareTokenWithSchoolDataSyncService property.
    */
    public function setShareTokenWithSchoolDataSyncService(?bool $value ): void {
        $this->shareTokenWithSchoolDataSyncService = $value;
    }

    /**
     * Sets the syncedDeviceCount property value. Gets synced device count
     *  @param int|null $value Value to set for the syncedDeviceCount property.
    */
    public function setSyncedDeviceCount(?int $value ): void {
        $this->syncedDeviceCount = $value;
    }

    /**
     * Sets the tokenExpirationDateTime property value. When the token will expire.
     *  @param DateTime|null $value Value to set for the tokenExpirationDateTime property.
    */
    public function setTokenExpirationDateTime(?DateTime $value ): void {
        $this->tokenExpirationDateTime = $value;
    }

    /**
     * Sets the tokenName property value. Friendly Name for Dep Token
     *  @param string|null $value Value to set for the tokenName property.
    */
    public function setTokenName(?string $value ): void {
        $this->tokenName = $value;
    }

    /**
     * Sets the tokenType property value. Gets or sets the Dep Token Type. Possible values are: none, dep, appleSchoolManager.
     *  @param DepTokenType|null $value Value to set for the tokenType property.
    */
    public function setTokenType(?DepTokenType $value ): void {
        $this->tokenType = $value;
    }

}
