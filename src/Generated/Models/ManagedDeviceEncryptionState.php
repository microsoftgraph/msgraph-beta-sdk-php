<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceEncryptionState extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedDeviceEncryptionState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceEncryptionState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceEncryptionState {
        return new ManagedDeviceEncryptionState();
    }

    /**
     * Gets the advancedBitLockerStates property value. Advanced BitLocker State. Possible values are: success, noUserConsent, osVolumeUnprotected, osVolumeTpmRequired, osVolumeTpmOnlyRequired, osVolumeTpmPinRequired, osVolumeTpmStartupKeyRequired, osVolumeTpmPinStartupKeyRequired, osVolumeEncryptionMethodMismatch, recoveryKeyBackupFailed, fixedDriveNotEncrypted, fixedDriveEncryptionMethodMismatch, loggedOnUserNonAdmin, windowsRecoveryEnvironmentNotConfigured, tpmNotAvailable, tpmNotReady, networkError.
     * @return AdvancedBitLockerState|null
    */
    public function getAdvancedBitLockerStates(): ?AdvancedBitLockerState {
        return $this->getBackingStore()->get('advancedBitLockerStates');
    }

    /**
     * Gets the deviceName property value. Device name
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the deviceType property value. Device type.
     * @return DeviceTypes|null
    */
    public function getDeviceType(): ?DeviceTypes {
        return $this->getBackingStore()->get('deviceType');
    }

    /**
     * Gets the encryptionPolicySettingState property value. The encryptionPolicySettingState property
     * @return ComplianceStatus|null
    */
    public function getEncryptionPolicySettingState(): ?ComplianceStatus {
        return $this->getBackingStore()->get('encryptionPolicySettingState');
    }

    /**
     * Gets the encryptionReadinessState property value. Encryption readiness state
     * @return EncryptionReadinessState|null
    */
    public function getEncryptionReadinessState(): ?EncryptionReadinessState {
        return $this->getBackingStore()->get('encryptionReadinessState');
    }

    /**
     * Gets the encryptionState property value. Encryption state
     * @return EncryptionState|null
    */
    public function getEncryptionState(): ?EncryptionState {
        return $this->getBackingStore()->get('encryptionState');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedBitLockerStates' => fn(ParseNode $n) => $o->setAdvancedBitLockerStates($n->getEnumValue(AdvancedBitLockerState::class)),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getEnumValue(DeviceTypes::class)),
            'encryptionPolicySettingState' => fn(ParseNode $n) => $o->setEncryptionPolicySettingState($n->getEnumValue(ComplianceStatus::class)),
            'encryptionReadinessState' => fn(ParseNode $n) => $o->setEncryptionReadinessState($n->getEnumValue(EncryptionReadinessState::class)),
            'encryptionState' => fn(ParseNode $n) => $o->setEncryptionState($n->getEnumValue(EncryptionState::class)),
            'fileVaultStates' => fn(ParseNode $n) => $o->setFileVaultStates($n->getEnumValue(FileVaultState::class)),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'policyDetails' => fn(ParseNode $n) => $o->setPolicyDetails($n->getCollectionOfObjectValues([EncryptionReportPolicyDetails::class, 'createFromDiscriminatorValue'])),
            'tpmSpecificationVersion' => fn(ParseNode $n) => $o->setTpmSpecificationVersion($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileVaultStates property value. FileVault State. Possible values are: success, driveEncryptedByUser, userDeferredEncryption, escrowNotEnabled.
     * @return FileVaultState|null
    */
    public function getFileVaultStates(): ?FileVaultState {
        return $this->getBackingStore()->get('fileVaultStates');
    }

    /**
     * Gets the osVersion property value. Operating system version of the device
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the policyDetails property value. Policy Details
     * @return array<EncryptionReportPolicyDetails>|null
    */
    public function getPolicyDetails(): ?array {
        return $this->getBackingStore()->get('policyDetails');
    }

    /**
     * Gets the tpmSpecificationVersion property value. Device TPM Version
     * @return string|null
    */
    public function getTpmSpecificationVersion(): ?string {
        return $this->getBackingStore()->get('tpmSpecificationVersion');
    }

    /**
     * Gets the userPrincipalName property value. User name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('advancedBitLockerStates', $this->getAdvancedBitLockerStates());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeEnumValue('deviceType', $this->getDeviceType());
        $writer->writeEnumValue('encryptionPolicySettingState', $this->getEncryptionPolicySettingState());
        $writer->writeEnumValue('encryptionReadinessState', $this->getEncryptionReadinessState());
        $writer->writeEnumValue('encryptionState', $this->getEncryptionState());
        $writer->writeEnumValue('fileVaultStates', $this->getFileVaultStates());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeCollectionOfObjectValues('policyDetails', $this->getPolicyDetails());
        $writer->writeStringValue('tpmSpecificationVersion', $this->getTpmSpecificationVersion());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the advancedBitLockerStates property value. Advanced BitLocker State. Possible values are: success, noUserConsent, osVolumeUnprotected, osVolumeTpmRequired, osVolumeTpmOnlyRequired, osVolumeTpmPinRequired, osVolumeTpmStartupKeyRequired, osVolumeTpmPinStartupKeyRequired, osVolumeEncryptionMethodMismatch, recoveryKeyBackupFailed, fixedDriveNotEncrypted, fixedDriveEncryptionMethodMismatch, loggedOnUserNonAdmin, windowsRecoveryEnvironmentNotConfigured, tpmNotAvailable, tpmNotReady, networkError.
     *  @param AdvancedBitLockerState|null $value Value to set for the advancedBitLockerStates property.
    */
    public function setAdvancedBitLockerStates(?AdvancedBitLockerState $value): void {
        $this->getBackingStore()->set('advancedBitLockerStates', $value);
    }

    /**
     * Sets the deviceName property value. Device name
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceType property value. Device type.
     *  @param DeviceTypes|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?DeviceTypes $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the encryptionPolicySettingState property value. The encryptionPolicySettingState property
     *  @param ComplianceStatus|null $value Value to set for the encryptionPolicySettingState property.
    */
    public function setEncryptionPolicySettingState(?ComplianceStatus $value): void {
        $this->getBackingStore()->set('encryptionPolicySettingState', $value);
    }

    /**
     * Sets the encryptionReadinessState property value. Encryption readiness state
     *  @param EncryptionReadinessState|null $value Value to set for the encryptionReadinessState property.
    */
    public function setEncryptionReadinessState(?EncryptionReadinessState $value): void {
        $this->getBackingStore()->set('encryptionReadinessState', $value);
    }

    /**
     * Sets the encryptionState property value. Encryption state
     *  @param EncryptionState|null $value Value to set for the encryptionState property.
    */
    public function setEncryptionState(?EncryptionState $value): void {
        $this->getBackingStore()->set('encryptionState', $value);
    }

    /**
     * Sets the fileVaultStates property value. FileVault State. Possible values are: success, driveEncryptedByUser, userDeferredEncryption, escrowNotEnabled.
     *  @param FileVaultState|null $value Value to set for the fileVaultStates property.
    */
    public function setFileVaultStates(?FileVaultState $value): void {
        $this->getBackingStore()->set('fileVaultStates', $value);
    }

    /**
     * Sets the osVersion property value. Operating system version of the device
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the policyDetails property value. Policy Details
     *  @param array<EncryptionReportPolicyDetails>|null $value Value to set for the policyDetails property.
    */
    public function setPolicyDetails(?array $value): void {
        $this->getBackingStore()->set('policyDetails', $value);
    }

    /**
     * Sets the tpmSpecificationVersion property value. Device TPM Version
     *  @param string|null $value Value to set for the tpmSpecificationVersion property.
    */
    public function setTpmSpecificationVersion(?string $value): void {
        $this->getBackingStore()->set('tpmSpecificationVersion', $value);
    }

    /**
     * Sets the userPrincipalName property value. User name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
