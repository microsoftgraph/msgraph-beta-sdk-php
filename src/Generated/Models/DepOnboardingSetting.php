<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepOnboardingSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new DepOnboardingSetting and sets the default values.
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
        return $this->getBackingStore()->get('appleIdentifier');
    }

    /**
     * Gets the dataSharingConsentGranted property value. Consent granted for data sharing with Apple Dep Service
     * @return bool|null
    */
    public function getDataSharingConsentGranted(): ?bool {
        return $this->getBackingStore()->get('dataSharingConsentGranted');
    }

    /**
     * Gets the defaultIosEnrollmentProfile property value. Default iOS Enrollment Profile
     * @return DepIOSEnrollmentProfile|null
    */
    public function getDefaultIosEnrollmentProfile(): ?DepIOSEnrollmentProfile {
        return $this->getBackingStore()->get('defaultIosEnrollmentProfile');
    }

    /**
     * Gets the defaultMacOsEnrollmentProfile property value. Default MacOs Enrollment Profile
     * @return DepMacOSEnrollmentProfile|null
    */
    public function getDefaultMacOsEnrollmentProfile(): ?DepMacOSEnrollmentProfile {
        return $this->getBackingStore()->get('defaultMacOsEnrollmentProfile');
    }

    /**
     * Gets the enrollmentProfiles property value. The enrollment profiles.
     * @return array<EnrollmentProfile>|null
    */
    public function getEnrollmentProfiles(): ?array {
        return $this->getBackingStore()->get('enrollmentProfiles');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appleIdentifier' => fn(ParseNode $n) => $o->setAppleIdentifier($n->getStringValue()),
            'dataSharingConsentGranted' => fn(ParseNode $n) => $o->setDataSharingConsentGranted($n->getBooleanValue()),
            'defaultIosEnrollmentProfile' => fn(ParseNode $n) => $o->setDefaultIosEnrollmentProfile($n->getObjectValue([DepIOSEnrollmentProfile::class, 'createFromDiscriminatorValue'])),
            'defaultMacOsEnrollmentProfile' => fn(ParseNode $n) => $o->setDefaultMacOsEnrollmentProfile($n->getObjectValue([DepMacOSEnrollmentProfile::class, 'createFromDiscriminatorValue'])),
            'enrollmentProfiles' => fn(ParseNode $n) => $o->setEnrollmentProfiles($n->getCollectionOfObjectValues([EnrollmentProfile::class, 'createFromDiscriminatorValue'])),
            'importedAppleDeviceIdentities' => fn(ParseNode $n) => $o->setImportedAppleDeviceIdentities($n->getCollectionOfObjectValues([ImportedAppleDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lastSuccessfulSyncDateTime' => fn(ParseNode $n) => $o->setLastSuccessfulSyncDateTime($n->getDateTimeValue()),
            'lastSyncErrorCode' => fn(ParseNode $n) => $o->setLastSyncErrorCode($n->getIntegerValue()),
            'lastSyncTriggeredDateTime' => fn(ParseNode $n) => $o->setLastSyncTriggeredDateTime($n->getDateTimeValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'shareTokenWithSchoolDataSyncService' => fn(ParseNode $n) => $o->setShareTokenWithSchoolDataSyncService($n->getBooleanValue()),
            'syncedDeviceCount' => fn(ParseNode $n) => $o->setSyncedDeviceCount($n->getIntegerValue()),
            'tokenExpirationDateTime' => fn(ParseNode $n) => $o->setTokenExpirationDateTime($n->getDateTimeValue()),
            'tokenName' => fn(ParseNode $n) => $o->setTokenName($n->getStringValue()),
            'tokenType' => fn(ParseNode $n) => $o->setTokenType($n->getEnumValue(DepTokenType::class)),
        ]);
    }

    /**
     * Gets the importedAppleDeviceIdentities property value. The imported Apple device identities.
     * @return array<ImportedAppleDeviceIdentity>|null
    */
    public function getImportedAppleDeviceIdentities(): ?array {
        return $this->getBackingStore()->get('importedAppleDeviceIdentities');
    }

    /**
     * Gets the lastModifiedDateTime property value. When the service was onboarded.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the lastSuccessfulSyncDateTime property value. When the service last syned with Intune
     * @return DateTime|null
    */
    public function getLastSuccessfulSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSuccessfulSyncDateTime');
    }

    /**
     * Gets the lastSyncErrorCode property value. Error code reported by Apple during last dep sync.
     * @return int|null
    */
    public function getLastSyncErrorCode(): ?int {
        return $this->getBackingStore()->get('lastSyncErrorCode');
    }

    /**
     * Gets the lastSyncTriggeredDateTime property value. When Intune last requested a sync.
     * @return DateTime|null
    */
    public function getLastSyncTriggeredDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSyncTriggeredDateTime');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the shareTokenWithSchoolDataSyncService property value. Whether or not the Dep token sharing is enabled with the School Data Sync service.
     * @return bool|null
    */
    public function getShareTokenWithSchoolDataSyncService(): ?bool {
        return $this->getBackingStore()->get('shareTokenWithSchoolDataSyncService');
    }

    /**
     * Gets the syncedDeviceCount property value. Gets synced device count
     * @return int|null
    */
    public function getSyncedDeviceCount(): ?int {
        return $this->getBackingStore()->get('syncedDeviceCount');
    }

    /**
     * Gets the tokenExpirationDateTime property value. When the token will expire.
     * @return DateTime|null
    */
    public function getTokenExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('tokenExpirationDateTime');
    }

    /**
     * Gets the tokenName property value. Friendly Name for Dep Token
     * @return string|null
    */
    public function getTokenName(): ?string {
        return $this->getBackingStore()->get('tokenName');
    }

    /**
     * Gets the tokenType property value. The tokenType property
     * @return DepTokenType|null
    */
    public function getTokenType(): ?DepTokenType {
        return $this->getBackingStore()->get('tokenType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appleIdentifier', $this->getAppleIdentifier());
        $writer->writeBooleanValue('dataSharingConsentGranted', $this->getDataSharingConsentGranted());
        $writer->writeObjectValue('defaultIosEnrollmentProfile', $this->getDefaultIosEnrollmentProfile());
        $writer->writeObjectValue('defaultMacOsEnrollmentProfile', $this->getDefaultMacOsEnrollmentProfile());
        $writer->writeCollectionOfObjectValues('enrollmentProfiles', $this->getEnrollmentProfiles());
        $writer->writeCollectionOfObjectValues('importedAppleDeviceIdentities', $this->getImportedAppleDeviceIdentities());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('lastSuccessfulSyncDateTime', $this->getLastSuccessfulSyncDateTime());
        $writer->writeIntegerValue('lastSyncErrorCode', $this->getLastSyncErrorCode());
        $writer->writeDateTimeValue('lastSyncTriggeredDateTime', $this->getLastSyncTriggeredDateTime());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeBooleanValue('shareTokenWithSchoolDataSyncService', $this->getShareTokenWithSchoolDataSyncService());
        $writer->writeIntegerValue('syncedDeviceCount', $this->getSyncedDeviceCount());
        $writer->writeDateTimeValue('tokenExpirationDateTime', $this->getTokenExpirationDateTime());
        $writer->writeStringValue('tokenName', $this->getTokenName());
        $writer->writeEnumValue('tokenType', $this->getTokenType());
    }

    /**
     * Sets the appleIdentifier property value. The Apple ID used to obtain the current token.
     * @param string|null $value Value to set for the appleIdentifier property.
    */
    public function setAppleIdentifier(?string $value): void {
        $this->getBackingStore()->set('appleIdentifier', $value);
    }

    /**
     * Sets the dataSharingConsentGranted property value. Consent granted for data sharing with Apple Dep Service
     * @param bool|null $value Value to set for the dataSharingConsentGranted property.
    */
    public function setDataSharingConsentGranted(?bool $value): void {
        $this->getBackingStore()->set('dataSharingConsentGranted', $value);
    }

    /**
     * Sets the defaultIosEnrollmentProfile property value. Default iOS Enrollment Profile
     * @param DepIOSEnrollmentProfile|null $value Value to set for the defaultIosEnrollmentProfile property.
    */
    public function setDefaultIosEnrollmentProfile(?DepIOSEnrollmentProfile $value): void {
        $this->getBackingStore()->set('defaultIosEnrollmentProfile', $value);
    }

    /**
     * Sets the defaultMacOsEnrollmentProfile property value. Default MacOs Enrollment Profile
     * @param DepMacOSEnrollmentProfile|null $value Value to set for the defaultMacOsEnrollmentProfile property.
    */
    public function setDefaultMacOsEnrollmentProfile(?DepMacOSEnrollmentProfile $value): void {
        $this->getBackingStore()->set('defaultMacOsEnrollmentProfile', $value);
    }

    /**
     * Sets the enrollmentProfiles property value. The enrollment profiles.
     * @param array<EnrollmentProfile>|null $value Value to set for the enrollmentProfiles property.
    */
    public function setEnrollmentProfiles(?array $value): void {
        $this->getBackingStore()->set('enrollmentProfiles', $value);
    }

    /**
     * Sets the importedAppleDeviceIdentities property value. The imported Apple device identities.
     * @param array<ImportedAppleDeviceIdentity>|null $value Value to set for the importedAppleDeviceIdentities property.
    */
    public function setImportedAppleDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('importedAppleDeviceIdentities', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. When the service was onboarded.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastSuccessfulSyncDateTime property value. When the service last syned with Intune
     * @param DateTime|null $value Value to set for the lastSuccessfulSyncDateTime property.
    */
    public function setLastSuccessfulSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSuccessfulSyncDateTime', $value);
    }

    /**
     * Sets the lastSyncErrorCode property value. Error code reported by Apple during last dep sync.
     * @param int|null $value Value to set for the lastSyncErrorCode property.
    */
    public function setLastSyncErrorCode(?int $value): void {
        $this->getBackingStore()->set('lastSyncErrorCode', $value);
    }

    /**
     * Sets the lastSyncTriggeredDateTime property value. When Intune last requested a sync.
     * @param DateTime|null $value Value to set for the lastSyncTriggeredDateTime property.
    */
    public function setLastSyncTriggeredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncTriggeredDateTime', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the shareTokenWithSchoolDataSyncService property value. Whether or not the Dep token sharing is enabled with the School Data Sync service.
     * @param bool|null $value Value to set for the shareTokenWithSchoolDataSyncService property.
    */
    public function setShareTokenWithSchoolDataSyncService(?bool $value): void {
        $this->getBackingStore()->set('shareTokenWithSchoolDataSyncService', $value);
    }

    /**
     * Sets the syncedDeviceCount property value. Gets synced device count
     * @param int|null $value Value to set for the syncedDeviceCount property.
    */
    public function setSyncedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('syncedDeviceCount', $value);
    }

    /**
     * Sets the tokenExpirationDateTime property value. When the token will expire.
     * @param DateTime|null $value Value to set for the tokenExpirationDateTime property.
    */
    public function setTokenExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('tokenExpirationDateTime', $value);
    }

    /**
     * Sets the tokenName property value. Friendly Name for Dep Token
     * @param string|null $value Value to set for the tokenName property.
    */
    public function setTokenName(?string $value): void {
        $this->getBackingStore()->set('tokenName', $value);
    }

    /**
     * Sets the tokenType property value. The tokenType property
     * @param DepTokenType|null $value Value to set for the tokenType property.
    */
    public function setTokenType(?DepTokenType $value): void {
        $this->getBackingStore()->set('tokenType', $value);
    }

}
