<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceEncryptionState extends Entity implements Parsable 
{
    /**
     * @var AdvancedBitLockerState|null $advancedBitLockerStates Advanced BitLocker State. Possible values are: success, noUserConsent, osVolumeUnprotected, osVolumeTpmRequired, osVolumeTpmOnlyRequired, osVolumeTpmPinRequired, osVolumeTpmStartupKeyRequired, osVolumeTpmPinStartupKeyRequired, osVolumeEncryptionMethodMismatch, recoveryKeyBackupFailed, fixedDriveNotEncrypted, fixedDriveEncryptionMethodMismatch, loggedOnUserNonAdmin, windowsRecoveryEnvironmentNotConfigured, tpmNotAvailable, tpmNotReady, networkError.
    */
    private ?AdvancedBitLockerState $advancedBitLockerStates = null;
    
    /**
     * @var string|null $deviceName Device name
    */
    private ?string $deviceName = null;
    
    /**
     * @var DeviceTypes|null $deviceType Device type.
    */
    private ?DeviceTypes $deviceType = null;
    
    /**
     * @var ComplianceStatus|null $encryptionPolicySettingState The encryptionPolicySettingState property
    */
    private ?ComplianceStatus $encryptionPolicySettingState = null;
    
    /**
     * @var EncryptionReadinessState|null $encryptionReadinessState Encryption readiness state
    */
    private ?EncryptionReadinessState $encryptionReadinessState = null;
    
    /**
     * @var EncryptionState|null $encryptionState Encryption state
    */
    private ?EncryptionState $encryptionState = null;
    
    /**
     * @var FileVaultState|null $fileVaultStates FileVault State. Possible values are: success, driveEncryptedByUser, userDeferredEncryption, escrowNotEnabled.
    */
    private ?FileVaultState $fileVaultStates = null;
    
    /**
     * @var string|null $osVersion Operating system version of the device
    */
    private ?string $osVersion = null;
    
    /**
     * @var array<EncryptionReportPolicyDetails>|null $policyDetails Policy Details
    */
    private ?array $policyDetails = null;
    
    /**
     * @var string|null $tpmSpecificationVersion Device TPM Version
    */
    private ?string $tpmSpecificationVersion = null;
    
    /**
     * @var string|null $userPrincipalName User name
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new managedDeviceEncryptionState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedDeviceEncryptionState');
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
        return $this->advancedBitLockerStates;
    }

    /**
     * Gets the deviceName property value. Device name
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the deviceType property value. Device type.
     * @return DeviceTypes|null
    */
    public function getDeviceType(): ?DeviceTypes {
        return $this->deviceType;
    }

    /**
     * Gets the encryptionPolicySettingState property value. The encryptionPolicySettingState property
     * @return ComplianceStatus|null
    */
    public function getEncryptionPolicySettingState(): ?ComplianceStatus {
        return $this->encryptionPolicySettingState;
    }

    /**
     * Gets the encryptionReadinessState property value. Encryption readiness state
     * @return EncryptionReadinessState|null
    */
    public function getEncryptionReadinessState(): ?EncryptionReadinessState {
        return $this->encryptionReadinessState;
    }

    /**
     * Gets the encryptionState property value. Encryption state
     * @return EncryptionState|null
    */
    public function getEncryptionState(): ?EncryptionState {
        return $this->encryptionState;
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
        return $this->fileVaultStates;
    }

    /**
     * Gets the osVersion property value. Operating system version of the device
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the policyDetails property value. Policy Details
     * @return array<EncryptionReportPolicyDetails>|null
    */
    public function getPolicyDetails(): ?array {
        return $this->policyDetails;
    }

    /**
     * Gets the tpmSpecificationVersion property value. Device TPM Version
     * @return string|null
    */
    public function getTpmSpecificationVersion(): ?string {
        return $this->tpmSpecificationVersion;
    }

    /**
     * Gets the userPrincipalName property value. User name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('advancedBitLockerStates', $this->advancedBitLockerStates);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeEnumValue('deviceType', $this->deviceType);
        $writer->writeEnumValue('encryptionPolicySettingState', $this->encryptionPolicySettingState);
        $writer->writeEnumValue('encryptionReadinessState', $this->encryptionReadinessState);
        $writer->writeEnumValue('encryptionState', $this->encryptionState);
        $writer->writeEnumValue('fileVaultStates', $this->fileVaultStates);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeCollectionOfObjectValues('policyDetails', $this->policyDetails);
        $writer->writeStringValue('tpmSpecificationVersion', $this->tpmSpecificationVersion);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the advancedBitLockerStates property value. Advanced BitLocker State. Possible values are: success, noUserConsent, osVolumeUnprotected, osVolumeTpmRequired, osVolumeTpmOnlyRequired, osVolumeTpmPinRequired, osVolumeTpmStartupKeyRequired, osVolumeTpmPinStartupKeyRequired, osVolumeEncryptionMethodMismatch, recoveryKeyBackupFailed, fixedDriveNotEncrypted, fixedDriveEncryptionMethodMismatch, loggedOnUserNonAdmin, windowsRecoveryEnvironmentNotConfigured, tpmNotAvailable, tpmNotReady, networkError.
     *  @param AdvancedBitLockerState|null $value Value to set for the advancedBitLockerStates property.
    */
    public function setAdvancedBitLockerStates(?AdvancedBitLockerState $value ): void {
        $this->advancedBitLockerStates = $value;
    }

    /**
     * Sets the deviceName property value. Device name
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the deviceType property value. Device type.
     *  @param DeviceTypes|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?DeviceTypes $value ): void {
        $this->deviceType = $value;
    }

    /**
     * Sets the encryptionPolicySettingState property value. The encryptionPolicySettingState property
     *  @param ComplianceStatus|null $value Value to set for the encryptionPolicySettingState property.
    */
    public function setEncryptionPolicySettingState(?ComplianceStatus $value ): void {
        $this->encryptionPolicySettingState = $value;
    }

    /**
     * Sets the encryptionReadinessState property value. Encryption readiness state
     *  @param EncryptionReadinessState|null $value Value to set for the encryptionReadinessState property.
    */
    public function setEncryptionReadinessState(?EncryptionReadinessState $value ): void {
        $this->encryptionReadinessState = $value;
    }

    /**
     * Sets the encryptionState property value. Encryption state
     *  @param EncryptionState|null $value Value to set for the encryptionState property.
    */
    public function setEncryptionState(?EncryptionState $value ): void {
        $this->encryptionState = $value;
    }

    /**
     * Sets the fileVaultStates property value. FileVault State. Possible values are: success, driveEncryptedByUser, userDeferredEncryption, escrowNotEnabled.
     *  @param FileVaultState|null $value Value to set for the fileVaultStates property.
    */
    public function setFileVaultStates(?FileVaultState $value ): void {
        $this->fileVaultStates = $value;
    }

    /**
     * Sets the osVersion property value. Operating system version of the device
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the policyDetails property value. Policy Details
     *  @param array<EncryptionReportPolicyDetails>|null $value Value to set for the policyDetails property.
    */
    public function setPolicyDetails(?array $value ): void {
        $this->policyDetails = $value;
    }

    /**
     * Sets the tpmSpecificationVersion property value. Device TPM Version
     *  @param string|null $value Value to set for the tpmSpecificationVersion property.
    */
    public function setTpmSpecificationVersion(?string $value ): void {
        $this->tpmSpecificationVersion = $value;
    }

    /**
     * Sets the userPrincipalName property value. User name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
