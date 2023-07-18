<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The depOnboardingSetting represents an instance of the Apple DEP service being onboarded to Intune. The onboarded service instance manages an Apple Token used to synchronize data between Apple and Intune.
*/
class DepOnboardingSetting extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
        $val = $this->getBackingStore()->get('appleIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appleIdentifier'");
    }

    /**
     * Gets the dataSharingConsentGranted property value. Consent granted for data sharing with Apple Dep Service
     * @return bool|null
    */
    public function getDataSharingConsentGranted(): ?bool {
        $val = $this->getBackingStore()->get('dataSharingConsentGranted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataSharingConsentGranted'");
    }

    /**
     * Gets the defaultIosEnrollmentProfile property value. Default iOS Enrollment Profile
     * @return DepIOSEnrollmentProfile|null
    */
    public function getDefaultIosEnrollmentProfile(): ?DepIOSEnrollmentProfile {
        $val = $this->getBackingStore()->get('defaultIosEnrollmentProfile');
        if (is_null($val) || $val instanceof DepIOSEnrollmentProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultIosEnrollmentProfile'");
    }

    /**
     * Gets the defaultMacOsEnrollmentProfile property value. Default MacOs Enrollment Profile
     * @return DepMacOSEnrollmentProfile|null
    */
    public function getDefaultMacOsEnrollmentProfile(): ?DepMacOSEnrollmentProfile {
        $val = $this->getBackingStore()->get('defaultMacOsEnrollmentProfile');
        if (is_null($val) || $val instanceof DepMacOSEnrollmentProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultMacOsEnrollmentProfile'");
    }

    /**
     * Gets the enrollmentProfiles property value. The enrollment profiles.
     * @return array<EnrollmentProfile>|null
    */
    public function getEnrollmentProfiles(): ?array {
        $val = $this->getBackingStore()->get('enrollmentProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EnrollmentProfile::class);
            /** @var array<EnrollmentProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentProfiles'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
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
        $val = $this->getBackingStore()->get('importedAppleDeviceIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImportedAppleDeviceIdentity::class);
            /** @var array<ImportedAppleDeviceIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importedAppleDeviceIdentities'");
    }

    /**
     * Gets the lastModifiedDateTime property value. When the service was onboarded.
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
     * Gets the lastSuccessfulSyncDateTime property value. When the service last syned with Intune
     * @return DateTime|null
    */
    public function getLastSuccessfulSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSuccessfulSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSuccessfulSyncDateTime'");
    }

    /**
     * Gets the lastSyncErrorCode property value. Error code reported by Apple during last dep sync.
     * @return int|null
    */
    public function getLastSyncErrorCode(): ?int {
        $val = $this->getBackingStore()->get('lastSyncErrorCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncErrorCode'");
    }

    /**
     * Gets the lastSyncTriggeredDateTime property value. When Intune last requested a sync.
     * @return DateTime|null
    */
    public function getLastSyncTriggeredDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncTriggeredDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncTriggeredDateTime'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the shareTokenWithSchoolDataSyncService property value. Whether or not the Dep token sharing is enabled with the School Data Sync service.
     * @return bool|null
    */
    public function getShareTokenWithSchoolDataSyncService(): ?bool {
        $val = $this->getBackingStore()->get('shareTokenWithSchoolDataSyncService');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shareTokenWithSchoolDataSyncService'");
    }

    /**
     * Gets the syncedDeviceCount property value. Gets synced device count
     * @return int|null
    */
    public function getSyncedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('syncedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'syncedDeviceCount'");
    }

    /**
     * Gets the tokenExpirationDateTime property value. When the token will expire.
     * @return DateTime|null
    */
    public function getTokenExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('tokenExpirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenExpirationDateTime'");
    }

    /**
     * Gets the tokenName property value. Friendly Name for Dep Token
     * @return string|null
    */
    public function getTokenName(): ?string {
        $val = $this->getBackingStore()->get('tokenName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenName'");
    }

    /**
     * Gets the tokenType property value. The tokenType property
     * @return DepTokenType|null
    */
    public function getTokenType(): ?DepTokenType {
        $val = $this->getBackingStore()->get('tokenType');
        if (is_null($val) || $val instanceof DepTokenType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenType'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
