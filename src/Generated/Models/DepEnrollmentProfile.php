<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepEnrollmentProfile extends EnrollmentProfile implements Parsable 
{
    /**
     * Instantiates a new DepEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.depEnrollmentProfile');
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
     * Gets the appleIdDisabled property value. Indicates if Apple id setup pane is disabled
     * @return bool|null
    */
    public function getAppleIdDisabled(): ?bool {
        return $this->getBackingStore()->get('appleIdDisabled');
    }

    /**
     * Gets the applePayDisabled property value. Indicates if Apple pay setup pane is disabled
     * @return bool|null
    */
    public function getApplePayDisabled(): ?bool {
        return $this->getBackingStore()->get('applePayDisabled');
    }

    /**
     * Gets the awaitDeviceConfiguredConfirmation property value. Indicates if the device will need to wait for configured confirmation
     * @return bool|null
    */
    public function getAwaitDeviceConfiguredConfirmation(): ?bool {
        return $this->getBackingStore()->get('awaitDeviceConfiguredConfirmation');
    }

    /**
     * Gets the diagnosticsDisabled property value. Indicates if diagnostics setup pane is disabled
     * @return bool|null
    */
    public function getDiagnosticsDisabled(): ?bool {
        return $this->getBackingStore()->get('diagnosticsDisabled');
    }

    /**
     * Gets the enableSharedIPad property value. This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
     * @return bool|null
    */
    public function getEnableSharedIPad(): ?bool {
        return $this->getBackingStore()->get('enableSharedIPad');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appleIdDisabled' => fn(ParseNode $n) => $o->setAppleIdDisabled($n->getBooleanValue()),
            'applePayDisabled' => fn(ParseNode $n) => $o->setApplePayDisabled($n->getBooleanValue()),
            'awaitDeviceConfiguredConfirmation' => fn(ParseNode $n) => $o->setAwaitDeviceConfiguredConfirmation($n->getBooleanValue()),
            'diagnosticsDisabled' => fn(ParseNode $n) => $o->setDiagnosticsDisabled($n->getBooleanValue()),
            'enableSharedIPad' => fn(ParseNode $n) => $o->setEnableSharedIPad($n->getBooleanValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'isMandatory' => fn(ParseNode $n) => $o->setIsMandatory($n->getBooleanValue()),
            'iTunesPairingMode' => fn(ParseNode $n) => $o->setITunesPairingMode($n->getEnumValue(ITunesPairingMode::class)),
            'locationDisabled' => fn(ParseNode $n) => $o->setLocationDisabled($n->getBooleanValue()),
            'macOSFileVaultDisabled' => fn(ParseNode $n) => $o->setMacOSFileVaultDisabled($n->getBooleanValue()),
            'macOSRegistrationDisabled' => fn(ParseNode $n) => $o->setMacOSRegistrationDisabled($n->getBooleanValue()),
            'managementCertificates' => fn(ParseNode $n) => $o->setManagementCertificates($n->getCollectionOfObjectValues([ManagementCertificateWithThumbprint::class, 'createFromDiscriminatorValue'])),
            'passCodeDisabled' => fn(ParseNode $n) => $o->setPassCodeDisabled($n->getBooleanValue()),
            'profileRemovalDisabled' => fn(ParseNode $n) => $o->setProfileRemovalDisabled($n->getBooleanValue()),
            'restoreBlocked' => fn(ParseNode $n) => $o->setRestoreBlocked($n->getBooleanValue()),
            'restoreFromAndroidDisabled' => fn(ParseNode $n) => $o->setRestoreFromAndroidDisabled($n->getBooleanValue()),
            'sharedIPadMaximumUserCount' => fn(ParseNode $n) => $o->setSharedIPadMaximumUserCount($n->getIntegerValue()),
            'siriDisabled' => fn(ParseNode $n) => $o->setSiriDisabled($n->getBooleanValue()),
            'supervisedModeEnabled' => fn(ParseNode $n) => $o->setSupervisedModeEnabled($n->getBooleanValue()),
            'supportDepartment' => fn(ParseNode $n) => $o->setSupportDepartment($n->getStringValue()),
            'supportPhoneNumber' => fn(ParseNode $n) => $o->setSupportPhoneNumber($n->getStringValue()),
            'termsAndConditionsDisabled' => fn(ParseNode $n) => $o->setTermsAndConditionsDisabled($n->getBooleanValue()),
            'touchIdDisabled' => fn(ParseNode $n) => $o->setTouchIdDisabled($n->getBooleanValue()),
            'zoomDisabled' => fn(ParseNode $n) => $o->setZoomDisabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isDefault property value. Indicates if this is the default profile
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->getBackingStore()->get('isDefault');
    }

    /**
     * Gets the isMandatory property value. Indicates if the profile is mandatory
     * @return bool|null
    */
    public function getIsMandatory(): ?bool {
        return $this->getBackingStore()->get('isMandatory');
    }

    /**
     * Gets the iTunesPairingMode property value. The iTunesPairingMode property
     * @return ITunesPairingMode|null
    */
    public function getITunesPairingMode(): ?ITunesPairingMode {
        return $this->getBackingStore()->get('iTunesPairingMode');
    }

    /**
     * Gets the locationDisabled property value. Indicates if Location service setup pane is disabled
     * @return bool|null
    */
    public function getLocationDisabled(): ?bool {
        return $this->getBackingStore()->get('locationDisabled');
    }

    /**
     * Gets the macOSFileVaultDisabled property value. Indicates if Mac OS file vault is disabled
     * @return bool|null
    */
    public function getMacOSFileVaultDisabled(): ?bool {
        return $this->getBackingStore()->get('macOSFileVaultDisabled');
    }

    /**
     * Gets the macOSRegistrationDisabled property value. Indicates if Mac OS registration is disabled
     * @return bool|null
    */
    public function getMacOSRegistrationDisabled(): ?bool {
        return $this->getBackingStore()->get('macOSRegistrationDisabled');
    }

    /**
     * Gets the managementCertificates property value. Management certificates for Apple Configurator
     * @return array<ManagementCertificateWithThumbprint>|null
    */
    public function getManagementCertificates(): ?array {
        return $this->getBackingStore()->get('managementCertificates');
    }

    /**
     * Gets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @return bool|null
    */
    public function getPassCodeDisabled(): ?bool {
        return $this->getBackingStore()->get('passCodeDisabled');
    }

    /**
     * Gets the profileRemovalDisabled property value. Indicates if the profile removal option is disabled
     * @return bool|null
    */
    public function getProfileRemovalDisabled(): ?bool {
        return $this->getBackingStore()->get('profileRemovalDisabled');
    }

    /**
     * Gets the restoreBlocked property value. Indicates if Restore setup pane is blocked
     * @return bool|null
    */
    public function getRestoreBlocked(): ?bool {
        return $this->getBackingStore()->get('restoreBlocked');
    }

    /**
     * Gets the restoreFromAndroidDisabled property value. Indicates if Restore from Android is disabled
     * @return bool|null
    */
    public function getRestoreFromAndroidDisabled(): ?bool {
        return $this->getBackingStore()->get('restoreFromAndroidDisabled');
    }

    /**
     * Gets the sharedIPadMaximumUserCount property value. This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
     * @return int|null
    */
    public function getSharedIPadMaximumUserCount(): ?int {
        return $this->getBackingStore()->get('sharedIPadMaximumUserCount');
    }

    /**
     * Gets the siriDisabled property value. Indicates if siri setup pane is disabled
     * @return bool|null
    */
    public function getSiriDisabled(): ?bool {
        return $this->getBackingStore()->get('siriDisabled');
    }

    /**
     * Gets the supervisedModeEnabled property value. Supervised mode, True to enable, false otherwise. See https://learn.microsoft.com/intune/deploy-use/enroll-devices-in-microsoft-intune for additional information.
     * @return bool|null
    */
    public function getSupervisedModeEnabled(): ?bool {
        return $this->getBackingStore()->get('supervisedModeEnabled');
    }

    /**
     * Gets the supportDepartment property value. Support department information
     * @return string|null
    */
    public function getSupportDepartment(): ?string {
        return $this->getBackingStore()->get('supportDepartment');
    }

    /**
     * Gets the supportPhoneNumber property value. Support phone number
     * @return string|null
    */
    public function getSupportPhoneNumber(): ?string {
        return $this->getBackingStore()->get('supportPhoneNumber');
    }

    /**
     * Gets the termsAndConditionsDisabled property value. Indicates if 'Terms and Conditions' setup pane is disabled
     * @return bool|null
    */
    public function getTermsAndConditionsDisabled(): ?bool {
        return $this->getBackingStore()->get('termsAndConditionsDisabled');
    }

    /**
     * Gets the touchIdDisabled property value. Indicates if touch id setup pane is disabled
     * @return bool|null
    */
    public function getTouchIdDisabled(): ?bool {
        return $this->getBackingStore()->get('touchIdDisabled');
    }

    /**
     * Gets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     * @return bool|null
    */
    public function getZoomDisabled(): ?bool {
        return $this->getBackingStore()->get('zoomDisabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appleIdDisabled', $this->getAppleIdDisabled());
        $writer->writeBooleanValue('applePayDisabled', $this->getApplePayDisabled());
        $writer->writeBooleanValue('awaitDeviceConfiguredConfirmation', $this->getAwaitDeviceConfiguredConfirmation());
        $writer->writeBooleanValue('diagnosticsDisabled', $this->getDiagnosticsDisabled());
        $writer->writeBooleanValue('enableSharedIPad', $this->getEnableSharedIPad());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeBooleanValue('isMandatory', $this->getIsMandatory());
        $writer->writeEnumValue('iTunesPairingMode', $this->getITunesPairingMode());
        $writer->writeBooleanValue('locationDisabled', $this->getLocationDisabled());
        $writer->writeBooleanValue('macOSFileVaultDisabled', $this->getMacOSFileVaultDisabled());
        $writer->writeBooleanValue('macOSRegistrationDisabled', $this->getMacOSRegistrationDisabled());
        $writer->writeCollectionOfObjectValues('managementCertificates', $this->getManagementCertificates());
        $writer->writeBooleanValue('passCodeDisabled', $this->getPassCodeDisabled());
        $writer->writeBooleanValue('profileRemovalDisabled', $this->getProfileRemovalDisabled());
        $writer->writeBooleanValue('restoreBlocked', $this->getRestoreBlocked());
        $writer->writeBooleanValue('restoreFromAndroidDisabled', $this->getRestoreFromAndroidDisabled());
        $writer->writeIntegerValue('sharedIPadMaximumUserCount', $this->getSharedIPadMaximumUserCount());
        $writer->writeBooleanValue('siriDisabled', $this->getSiriDisabled());
        $writer->writeBooleanValue('supervisedModeEnabled', $this->getSupervisedModeEnabled());
        $writer->writeStringValue('supportDepartment', $this->getSupportDepartment());
        $writer->writeStringValue('supportPhoneNumber', $this->getSupportPhoneNumber());
        $writer->writeBooleanValue('termsAndConditionsDisabled', $this->getTermsAndConditionsDisabled());
        $writer->writeBooleanValue('touchIdDisabled', $this->getTouchIdDisabled());
        $writer->writeBooleanValue('zoomDisabled', $this->getZoomDisabled());
    }

    /**
     * Sets the appleIdDisabled property value. Indicates if Apple id setup pane is disabled
     *  @param bool|null $value Value to set for the appleIdDisabled property.
    */
    public function setAppleIdDisabled(?bool $value): void {
        $this->getBackingStore()->set('appleIdDisabled', $value);
    }

    /**
     * Sets the applePayDisabled property value. Indicates if Apple pay setup pane is disabled
     *  @param bool|null $value Value to set for the applePayDisabled property.
    */
    public function setApplePayDisabled(?bool $value): void {
        $this->getBackingStore()->set('applePayDisabled', $value);
    }

    /**
     * Sets the awaitDeviceConfiguredConfirmation property value. Indicates if the device will need to wait for configured confirmation
     *  @param bool|null $value Value to set for the awaitDeviceConfiguredConfirmation property.
    */
    public function setAwaitDeviceConfiguredConfirmation(?bool $value): void {
        $this->getBackingStore()->set('awaitDeviceConfiguredConfirmation', $value);
    }

    /**
     * Sets the diagnosticsDisabled property value. Indicates if diagnostics setup pane is disabled
     *  @param bool|null $value Value to set for the diagnosticsDisabled property.
    */
    public function setDiagnosticsDisabled(?bool $value): void {
        $this->getBackingStore()->set('diagnosticsDisabled', $value);
    }

    /**
     * Sets the enableSharedIPad property value. This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
     *  @param bool|null $value Value to set for the enableSharedIPad property.
    */
    public function setEnableSharedIPad(?bool $value): void {
        $this->getBackingStore()->set('enableSharedIPad', $value);
    }

    /**
     * Sets the isDefault property value. Indicates if this is the default profile
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the isMandatory property value. Indicates if the profile is mandatory
     *  @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value): void {
        $this->getBackingStore()->set('isMandatory', $value);
    }

    /**
     * Sets the iTunesPairingMode property value. The iTunesPairingMode property
     *  @param ITunesPairingMode|null $value Value to set for the iTunesPairingMode property.
    */
    public function setITunesPairingMode(?ITunesPairingMode $value): void {
        $this->getBackingStore()->set('iTunesPairingMode', $value);
    }

    /**
     * Sets the locationDisabled property value. Indicates if Location service setup pane is disabled
     *  @param bool|null $value Value to set for the locationDisabled property.
    */
    public function setLocationDisabled(?bool $value): void {
        $this->getBackingStore()->set('locationDisabled', $value);
    }

    /**
     * Sets the macOSFileVaultDisabled property value. Indicates if Mac OS file vault is disabled
     *  @param bool|null $value Value to set for the macOSFileVaultDisabled property.
    */
    public function setMacOSFileVaultDisabled(?bool $value): void {
        $this->getBackingStore()->set('macOSFileVaultDisabled', $value);
    }

    /**
     * Sets the macOSRegistrationDisabled property value. Indicates if Mac OS registration is disabled
     *  @param bool|null $value Value to set for the macOSRegistrationDisabled property.
    */
    public function setMacOSRegistrationDisabled(?bool $value): void {
        $this->getBackingStore()->set('macOSRegistrationDisabled', $value);
    }

    /**
     * Sets the managementCertificates property value. Management certificates for Apple Configurator
     *  @param array<ManagementCertificateWithThumbprint>|null $value Value to set for the managementCertificates property.
    */
    public function setManagementCertificates(?array $value): void {
        $this->getBackingStore()->set('managementCertificates', $value);
    }

    /**
     * Sets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     *  @param bool|null $value Value to set for the passCodeDisabled property.
    */
    public function setPassCodeDisabled(?bool $value): void {
        $this->getBackingStore()->set('passCodeDisabled', $value);
    }

    /**
     * Sets the profileRemovalDisabled property value. Indicates if the profile removal option is disabled
     *  @param bool|null $value Value to set for the profileRemovalDisabled property.
    */
    public function setProfileRemovalDisabled(?bool $value): void {
        $this->getBackingStore()->set('profileRemovalDisabled', $value);
    }

    /**
     * Sets the restoreBlocked property value. Indicates if Restore setup pane is blocked
     *  @param bool|null $value Value to set for the restoreBlocked property.
    */
    public function setRestoreBlocked(?bool $value): void {
        $this->getBackingStore()->set('restoreBlocked', $value);
    }

    /**
     * Sets the restoreFromAndroidDisabled property value. Indicates if Restore from Android is disabled
     *  @param bool|null $value Value to set for the restoreFromAndroidDisabled property.
    */
    public function setRestoreFromAndroidDisabled(?bool $value): void {
        $this->getBackingStore()->set('restoreFromAndroidDisabled', $value);
    }

    /**
     * Sets the sharedIPadMaximumUserCount property value. This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
     *  @param int|null $value Value to set for the sharedIPadMaximumUserCount property.
    */
    public function setSharedIPadMaximumUserCount(?int $value): void {
        $this->getBackingStore()->set('sharedIPadMaximumUserCount', $value);
    }

    /**
     * Sets the siriDisabled property value. Indicates if siri setup pane is disabled
     *  @param bool|null $value Value to set for the siriDisabled property.
    */
    public function setSiriDisabled(?bool $value): void {
        $this->getBackingStore()->set('siriDisabled', $value);
    }

    /**
     * Sets the supervisedModeEnabled property value. Supervised mode, True to enable, false otherwise. See https://learn.microsoft.com/intune/deploy-use/enroll-devices-in-microsoft-intune for additional information.
     *  @param bool|null $value Value to set for the supervisedModeEnabled property.
    */
    public function setSupervisedModeEnabled(?bool $value): void {
        $this->getBackingStore()->set('supervisedModeEnabled', $value);
    }

    /**
     * Sets the supportDepartment property value. Support department information
     *  @param string|null $value Value to set for the supportDepartment property.
    */
    public function setSupportDepartment(?string $value): void {
        $this->getBackingStore()->set('supportDepartment', $value);
    }

    /**
     * Sets the supportPhoneNumber property value. Support phone number
     *  @param string|null $value Value to set for the supportPhoneNumber property.
    */
    public function setSupportPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('supportPhoneNumber', $value);
    }

    /**
     * Sets the termsAndConditionsDisabled property value. Indicates if 'Terms and Conditions' setup pane is disabled
     *  @param bool|null $value Value to set for the termsAndConditionsDisabled property.
    */
    public function setTermsAndConditionsDisabled(?bool $value): void {
        $this->getBackingStore()->set('termsAndConditionsDisabled', $value);
    }

    /**
     * Sets the touchIdDisabled property value. Indicates if touch id setup pane is disabled
     *  @param bool|null $value Value to set for the touchIdDisabled property.
    */
    public function setTouchIdDisabled(?bool $value): void {
        $this->getBackingStore()->set('touchIdDisabled', $value);
    }

    /**
     * Sets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     *  @param bool|null $value Value to set for the zoomDisabled property.
    */
    public function setZoomDisabled(?bool $value): void {
        $this->getBackingStore()->set('zoomDisabled', $value);
    }

}
