<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepEnrollmentProfile extends EnrollmentProfile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $appleIdDisabled Indicates if Apple id setup pane is disabled
    */
    private ?bool $appleIdDisabled = null;
    
    /**
     * @var bool|null $applePayDisabled Indicates if Apple pay setup pane is disabled
    */
    private ?bool $applePayDisabled = null;
    
    /**
     * @var bool|null $awaitDeviceConfiguredConfirmation Indicates if the device will need to wait for configured confirmation
    */
    private ?bool $awaitDeviceConfiguredConfirmation = null;
    
    /**
     * @var bool|null $diagnosticsDisabled Indicates if diagnostics setup pane is disabled
    */
    private ?bool $diagnosticsDisabled = null;
    
    /**
     * @var bool|null $enableSharedIPad This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
    */
    private ?bool $enableSharedIPad = null;
    
    /**
     * @var bool|null $isDefault Indicates if this is the default profile
    */
    private ?bool $isDefault = null;
    
    /**
     * @var bool|null $isMandatory Indicates if the profile is mandatory
    */
    private ?bool $isMandatory = null;
    
    /**
     * @var ITunesPairingMode|null $iTunesPairingMode Indicates the iTunes pairing mode. Possible values are: disallow, allow, requiresCertificate.
    */
    private ?ITunesPairingMode $iTunesPairingMode = null;
    
    /**
     * @var bool|null $locationDisabled Indicates if Location service setup pane is disabled
    */
    private ?bool $locationDisabled = null;
    
    /**
     * @var bool|null $macOSFileVaultDisabled Indicates if Mac OS file vault is disabled
    */
    private ?bool $macOSFileVaultDisabled = null;
    
    /**
     * @var bool|null $macOSRegistrationDisabled Indicates if Mac OS registration is disabled
    */
    private ?bool $macOSRegistrationDisabled = null;
    
    /**
     * @var array<ManagementCertificateWithThumbprint>|null $managementCertificates Management certificates for Apple Configurator
    */
    private ?array $managementCertificates = null;
    
    /**
     * @var bool|null $passCodeDisabled Indicates if Passcode setup pane is disabled
    */
    private ?bool $passCodeDisabled = null;
    
    /**
     * @var bool|null $profileRemovalDisabled Indicates if the profile removal option is disabled
    */
    private ?bool $profileRemovalDisabled = null;
    
    /**
     * @var bool|null $restoreBlocked Indicates if Restore setup pane is blocked
    */
    private ?bool $restoreBlocked = null;
    
    /**
     * @var bool|null $restoreFromAndroidDisabled Indicates if Restore from Android is disabled
    */
    private ?bool $restoreFromAndroidDisabled = null;
    
    /**
     * @var int|null $sharedIPadMaximumUserCount This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
    */
    private ?int $sharedIPadMaximumUserCount = null;
    
    /**
     * @var bool|null $siriDisabled Indicates if siri setup pane is disabled
    */
    private ?bool $siriDisabled = null;
    
    /**
     * @var bool|null $supervisedModeEnabled Supervised mode, True to enable, false otherwise. See https://docs.microsoft.com/intune/deploy-use/enroll-devices-in-microsoft-intune for additional information.
    */
    private ?bool $supervisedModeEnabled = null;
    
    /**
     * @var string|null $supportDepartment Support department information
    */
    private ?string $supportDepartment = null;
    
    /**
     * @var string|null $supportPhoneNumber Support phone number
    */
    private ?string $supportPhoneNumber = null;
    
    /**
     * @var bool|null $termsAndConditionsDisabled Indicates if 'Terms and Conditions' setup pane is disabled
    */
    private ?bool $termsAndConditionsDisabled = null;
    
    /**
     * @var bool|null $touchIdDisabled Indicates if touch id setup pane is disabled
    */
    private ?bool $touchIdDisabled = null;
    
    /**
     * @var bool|null $zoomDisabled Indicates if zoom setup pane is disabled
    */
    private ?bool $zoomDisabled = null;
    
    /**
     * Instantiates a new DepEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepEnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DepEnrollmentProfile {
        return new DepEnrollmentProfile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appleIdDisabled property value. Indicates if Apple id setup pane is disabled
     * @return bool|null
    */
    public function getAppleIdDisabled(): ?bool {
        return $this->appleIdDisabled;
    }

    /**
     * Gets the applePayDisabled property value. Indicates if Apple pay setup pane is disabled
     * @return bool|null
    */
    public function getApplePayDisabled(): ?bool {
        return $this->applePayDisabled;
    }

    /**
     * Gets the awaitDeviceConfiguredConfirmation property value. Indicates if the device will need to wait for configured confirmation
     * @return bool|null
    */
    public function getAwaitDeviceConfiguredConfirmation(): ?bool {
        return $this->awaitDeviceConfiguredConfirmation;
    }

    /**
     * Gets the diagnosticsDisabled property value. Indicates if diagnostics setup pane is disabled
     * @return bool|null
    */
    public function getDiagnosticsDisabled(): ?bool {
        return $this->diagnosticsDisabled;
    }

    /**
     * Gets the enableSharedIPad property value. This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
     * @return bool|null
    */
    public function getEnableSharedIPad(): ?bool {
        return $this->enableSharedIPad;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appleIdDisabled' => function (ParseNode $n) use ($o) { $o->setAppleIdDisabled($n->getBooleanValue()); },
            'applePayDisabled' => function (ParseNode $n) use ($o) { $o->setApplePayDisabled($n->getBooleanValue()); },
            'awaitDeviceConfiguredConfirmation' => function (ParseNode $n) use ($o) { $o->setAwaitDeviceConfiguredConfirmation($n->getBooleanValue()); },
            'diagnosticsDisabled' => function (ParseNode $n) use ($o) { $o->setDiagnosticsDisabled($n->getBooleanValue()); },
            'enableSharedIPad' => function (ParseNode $n) use ($o) { $o->setEnableSharedIPad($n->getBooleanValue()); },
            'isDefault' => function (ParseNode $n) use ($o) { $o->setIsDefault($n->getBooleanValue()); },
            'isMandatory' => function (ParseNode $n) use ($o) { $o->setIsMandatory($n->getBooleanValue()); },
            'iTunesPairingMode' => function (ParseNode $n) use ($o) { $o->setITunesPairingMode($n->getEnumValue(ITunesPairingMode::class)); },
            'locationDisabled' => function (ParseNode $n) use ($o) { $o->setLocationDisabled($n->getBooleanValue()); },
            'macOSFileVaultDisabled' => function (ParseNode $n) use ($o) { $o->setMacOSFileVaultDisabled($n->getBooleanValue()); },
            'macOSRegistrationDisabled' => function (ParseNode $n) use ($o) { $o->setMacOSRegistrationDisabled($n->getBooleanValue()); },
            'managementCertificates' => function (ParseNode $n) use ($o) { $o->setManagementCertificates($n->getCollectionOfObjectValues(array(ManagementCertificateWithThumbprint::class, 'createFromDiscriminatorValue'))); },
            'passCodeDisabled' => function (ParseNode $n) use ($o) { $o->setPassCodeDisabled($n->getBooleanValue()); },
            'profileRemovalDisabled' => function (ParseNode $n) use ($o) { $o->setProfileRemovalDisabled($n->getBooleanValue()); },
            'restoreBlocked' => function (ParseNode $n) use ($o) { $o->setRestoreBlocked($n->getBooleanValue()); },
            'restoreFromAndroidDisabled' => function (ParseNode $n) use ($o) { $o->setRestoreFromAndroidDisabled($n->getBooleanValue()); },
            'sharedIPadMaximumUserCount' => function (ParseNode $n) use ($o) { $o->setSharedIPadMaximumUserCount($n->getIntegerValue()); },
            'siriDisabled' => function (ParseNode $n) use ($o) { $o->setSiriDisabled($n->getBooleanValue()); },
            'supervisedModeEnabled' => function (ParseNode $n) use ($o) { $o->setSupervisedModeEnabled($n->getBooleanValue()); },
            'supportDepartment' => function (ParseNode $n) use ($o) { $o->setSupportDepartment($n->getStringValue()); },
            'supportPhoneNumber' => function (ParseNode $n) use ($o) { $o->setSupportPhoneNumber($n->getStringValue()); },
            'termsAndConditionsDisabled' => function (ParseNode $n) use ($o) { $o->setTermsAndConditionsDisabled($n->getBooleanValue()); },
            'touchIdDisabled' => function (ParseNode $n) use ($o) { $o->setTouchIdDisabled($n->getBooleanValue()); },
            'zoomDisabled' => function (ParseNode $n) use ($o) { $o->setZoomDisabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isDefault property value. Indicates if this is the default profile
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the isMandatory property value. Indicates if the profile is mandatory
     * @return bool|null
    */
    public function getIsMandatory(): ?bool {
        return $this->isMandatory;
    }

    /**
     * Gets the iTunesPairingMode property value. Indicates the iTunes pairing mode. Possible values are: disallow, allow, requiresCertificate.
     * @return ITunesPairingMode|null
    */
    public function getITunesPairingMode(): ?ITunesPairingMode {
        return $this->iTunesPairingMode;
    }

    /**
     * Gets the locationDisabled property value. Indicates if Location service setup pane is disabled
     * @return bool|null
    */
    public function getLocationDisabled(): ?bool {
        return $this->locationDisabled;
    }

    /**
     * Gets the macOSFileVaultDisabled property value. Indicates if Mac OS file vault is disabled
     * @return bool|null
    */
    public function getMacOSFileVaultDisabled(): ?bool {
        return $this->macOSFileVaultDisabled;
    }

    /**
     * Gets the macOSRegistrationDisabled property value. Indicates if Mac OS registration is disabled
     * @return bool|null
    */
    public function getMacOSRegistrationDisabled(): ?bool {
        return $this->macOSRegistrationDisabled;
    }

    /**
     * Gets the managementCertificates property value. Management certificates for Apple Configurator
     * @return array<ManagementCertificateWithThumbprint>|null
    */
    public function getManagementCertificates(): ?array {
        return $this->managementCertificates;
    }

    /**
     * Gets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @return bool|null
    */
    public function getPassCodeDisabled(): ?bool {
        return $this->passCodeDisabled;
    }

    /**
     * Gets the profileRemovalDisabled property value. Indicates if the profile removal option is disabled
     * @return bool|null
    */
    public function getProfileRemovalDisabled(): ?bool {
        return $this->profileRemovalDisabled;
    }

    /**
     * Gets the restoreBlocked property value. Indicates if Restore setup pane is blocked
     * @return bool|null
    */
    public function getRestoreBlocked(): ?bool {
        return $this->restoreBlocked;
    }

    /**
     * Gets the restoreFromAndroidDisabled property value. Indicates if Restore from Android is disabled
     * @return bool|null
    */
    public function getRestoreFromAndroidDisabled(): ?bool {
        return $this->restoreFromAndroidDisabled;
    }

    /**
     * Gets the sharedIPadMaximumUserCount property value. This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
     * @return int|null
    */
    public function getSharedIPadMaximumUserCount(): ?int {
        return $this->sharedIPadMaximumUserCount;
    }

    /**
     * Gets the siriDisabled property value. Indicates if siri setup pane is disabled
     * @return bool|null
    */
    public function getSiriDisabled(): ?bool {
        return $this->siriDisabled;
    }

    /**
     * Gets the supervisedModeEnabled property value. Supervised mode, True to enable, false otherwise. See https://docs.microsoft.com/intune/deploy-use/enroll-devices-in-microsoft-intune for additional information.
     * @return bool|null
    */
    public function getSupervisedModeEnabled(): ?bool {
        return $this->supervisedModeEnabled;
    }

    /**
     * Gets the supportDepartment property value. Support department information
     * @return string|null
    */
    public function getSupportDepartment(): ?string {
        return $this->supportDepartment;
    }

    /**
     * Gets the supportPhoneNumber property value. Support phone number
     * @return string|null
    */
    public function getSupportPhoneNumber(): ?string {
        return $this->supportPhoneNumber;
    }

    /**
     * Gets the termsAndConditionsDisabled property value. Indicates if 'Terms and Conditions' setup pane is disabled
     * @return bool|null
    */
    public function getTermsAndConditionsDisabled(): ?bool {
        return $this->termsAndConditionsDisabled;
    }

    /**
     * Gets the touchIdDisabled property value. Indicates if touch id setup pane is disabled
     * @return bool|null
    */
    public function getTouchIdDisabled(): ?bool {
        return $this->touchIdDisabled;
    }

    /**
     * Gets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     * @return bool|null
    */
    public function getZoomDisabled(): ?bool {
        return $this->zoomDisabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appleIdDisabled', $this->appleIdDisabled);
        $writer->writeBooleanValue('applePayDisabled', $this->applePayDisabled);
        $writer->writeBooleanValue('awaitDeviceConfiguredConfirmation', $this->awaitDeviceConfiguredConfirmation);
        $writer->writeBooleanValue('diagnosticsDisabled', $this->diagnosticsDisabled);
        $writer->writeBooleanValue('enableSharedIPad', $this->enableSharedIPad);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeBooleanValue('isMandatory', $this->isMandatory);
        $writer->writeEnumValue('iTunesPairingMode', $this->iTunesPairingMode);
        $writer->writeBooleanValue('locationDisabled', $this->locationDisabled);
        $writer->writeBooleanValue('macOSFileVaultDisabled', $this->macOSFileVaultDisabled);
        $writer->writeBooleanValue('macOSRegistrationDisabled', $this->macOSRegistrationDisabled);
        $writer->writeCollectionOfObjectValues('managementCertificates', $this->managementCertificates);
        $writer->writeBooleanValue('passCodeDisabled', $this->passCodeDisabled);
        $writer->writeBooleanValue('profileRemovalDisabled', $this->profileRemovalDisabled);
        $writer->writeBooleanValue('restoreBlocked', $this->restoreBlocked);
        $writer->writeBooleanValue('restoreFromAndroidDisabled', $this->restoreFromAndroidDisabled);
        $writer->writeIntegerValue('sharedIPadMaximumUserCount', $this->sharedIPadMaximumUserCount);
        $writer->writeBooleanValue('siriDisabled', $this->siriDisabled);
        $writer->writeBooleanValue('supervisedModeEnabled', $this->supervisedModeEnabled);
        $writer->writeStringValue('supportDepartment', $this->supportDepartment);
        $writer->writeStringValue('supportPhoneNumber', $this->supportPhoneNumber);
        $writer->writeBooleanValue('termsAndConditionsDisabled', $this->termsAndConditionsDisabled);
        $writer->writeBooleanValue('touchIdDisabled', $this->touchIdDisabled);
        $writer->writeBooleanValue('zoomDisabled', $this->zoomDisabled);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the appleIdDisabled property value. Indicates if Apple id setup pane is disabled
     *  @param bool|null $value Value to set for the appleIdDisabled property.
    */
    public function setAppleIdDisabled(?bool $value ): void {
        $this->appleIdDisabled = $value;
    }

    /**
     * Sets the applePayDisabled property value. Indicates if Apple pay setup pane is disabled
     *  @param bool|null $value Value to set for the applePayDisabled property.
    */
    public function setApplePayDisabled(?bool $value ): void {
        $this->applePayDisabled = $value;
    }

    /**
     * Sets the awaitDeviceConfiguredConfirmation property value. Indicates if the device will need to wait for configured confirmation
     *  @param bool|null $value Value to set for the awaitDeviceConfiguredConfirmation property.
    */
    public function setAwaitDeviceConfiguredConfirmation(?bool $value ): void {
        $this->awaitDeviceConfiguredConfirmation = $value;
    }

    /**
     * Sets the diagnosticsDisabled property value. Indicates if diagnostics setup pane is disabled
     *  @param bool|null $value Value to set for the diagnosticsDisabled property.
    */
    public function setDiagnosticsDisabled(?bool $value ): void {
        $this->diagnosticsDisabled = $value;
    }

    /**
     * Sets the enableSharedIPad property value. This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
     *  @param bool|null $value Value to set for the enableSharedIPad property.
    */
    public function setEnableSharedIPad(?bool $value ): void {
        $this->enableSharedIPad = $value;
    }

    /**
     * Sets the isDefault property value. Indicates if this is the default profile
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the isMandatory property value. Indicates if the profile is mandatory
     *  @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value ): void {
        $this->isMandatory = $value;
    }

    /**
     * Sets the iTunesPairingMode property value. Indicates the iTunes pairing mode. Possible values are: disallow, allow, requiresCertificate.
     *  @param ITunesPairingMode|null $value Value to set for the iTunesPairingMode property.
    */
    public function setITunesPairingMode(?ITunesPairingMode $value ): void {
        $this->iTunesPairingMode = $value;
    }

    /**
     * Sets the locationDisabled property value. Indicates if Location service setup pane is disabled
     *  @param bool|null $value Value to set for the locationDisabled property.
    */
    public function setLocationDisabled(?bool $value ): void {
        $this->locationDisabled = $value;
    }

    /**
     * Sets the macOSFileVaultDisabled property value. Indicates if Mac OS file vault is disabled
     *  @param bool|null $value Value to set for the macOSFileVaultDisabled property.
    */
    public function setMacOSFileVaultDisabled(?bool $value ): void {
        $this->macOSFileVaultDisabled = $value;
    }

    /**
     * Sets the macOSRegistrationDisabled property value. Indicates if Mac OS registration is disabled
     *  @param bool|null $value Value to set for the macOSRegistrationDisabled property.
    */
    public function setMacOSRegistrationDisabled(?bool $value ): void {
        $this->macOSRegistrationDisabled = $value;
    }

    /**
     * Sets the managementCertificates property value. Management certificates for Apple Configurator
     *  @param array<ManagementCertificateWithThumbprint>|null $value Value to set for the managementCertificates property.
    */
    public function setManagementCertificates(?array $value ): void {
        $this->managementCertificates = $value;
    }

    /**
     * Sets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     *  @param bool|null $value Value to set for the passCodeDisabled property.
    */
    public function setPassCodeDisabled(?bool $value ): void {
        $this->passCodeDisabled = $value;
    }

    /**
     * Sets the profileRemovalDisabled property value. Indicates if the profile removal option is disabled
     *  @param bool|null $value Value to set for the profileRemovalDisabled property.
    */
    public function setProfileRemovalDisabled(?bool $value ): void {
        $this->profileRemovalDisabled = $value;
    }

    /**
     * Sets the restoreBlocked property value. Indicates if Restore setup pane is blocked
     *  @param bool|null $value Value to set for the restoreBlocked property.
    */
    public function setRestoreBlocked(?bool $value ): void {
        $this->restoreBlocked = $value;
    }

    /**
     * Sets the restoreFromAndroidDisabled property value. Indicates if Restore from Android is disabled
     *  @param bool|null $value Value to set for the restoreFromAndroidDisabled property.
    */
    public function setRestoreFromAndroidDisabled(?bool $value ): void {
        $this->restoreFromAndroidDisabled = $value;
    }

    /**
     * Sets the sharedIPadMaximumUserCount property value. This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
     *  @param int|null $value Value to set for the sharedIPadMaximumUserCount property.
    */
    public function setSharedIPadMaximumUserCount(?int $value ): void {
        $this->sharedIPadMaximumUserCount = $value;
    }

    /**
     * Sets the siriDisabled property value. Indicates if siri setup pane is disabled
     *  @param bool|null $value Value to set for the siriDisabled property.
    */
    public function setSiriDisabled(?bool $value ): void {
        $this->siriDisabled = $value;
    }

    /**
     * Sets the supervisedModeEnabled property value. Supervised mode, True to enable, false otherwise. See https://docs.microsoft.com/intune/deploy-use/enroll-devices-in-microsoft-intune for additional information.
     *  @param bool|null $value Value to set for the supervisedModeEnabled property.
    */
    public function setSupervisedModeEnabled(?bool $value ): void {
        $this->supervisedModeEnabled = $value;
    }

    /**
     * Sets the supportDepartment property value. Support department information
     *  @param string|null $value Value to set for the supportDepartment property.
    */
    public function setSupportDepartment(?string $value ): void {
        $this->supportDepartment = $value;
    }

    /**
     * Sets the supportPhoneNumber property value. Support phone number
     *  @param string|null $value Value to set for the supportPhoneNumber property.
    */
    public function setSupportPhoneNumber(?string $value ): void {
        $this->supportPhoneNumber = $value;
    }

    /**
     * Sets the termsAndConditionsDisabled property value. Indicates if 'Terms and Conditions' setup pane is disabled
     *  @param bool|null $value Value to set for the termsAndConditionsDisabled property.
    */
    public function setTermsAndConditionsDisabled(?bool $value ): void {
        $this->termsAndConditionsDisabled = $value;
    }

    /**
     * Sets the touchIdDisabled property value. Indicates if touch id setup pane is disabled
     *  @param bool|null $value Value to set for the touchIdDisabled property.
    */
    public function setTouchIdDisabled(?bool $value ): void {
        $this->touchIdDisabled = $value;
    }

    /**
     * Sets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     *  @param bool|null $value Value to set for the zoomDisabled property.
    */
    public function setZoomDisabled(?bool $value ): void {
        $this->zoomDisabled = $value;
    }

}
