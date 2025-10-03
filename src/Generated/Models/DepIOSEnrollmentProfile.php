<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The DepIOSEnrollmentProfile resource represents an Apple Device Enrollment Program (DEP) enrollment profile specific to iOS configuration. This type of profile must be assigned to Apple DEP serial numbers before the corresponding devices can enroll via DEP.
*/
class DepIOSEnrollmentProfile extends DepEnrollmentBaseProfile implements Parsable 
{
    /**
     * Instantiates a new DepIOSEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.depIOSEnrollmentProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepIOSEnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DepIOSEnrollmentProfile {
        return new DepIOSEnrollmentProfile();
    }

    /**
     * Gets the appearanceScreenDisabled property value. Indicates if Apperance screen is disabled
     * @return bool|null
    */
    public function getAppearanceScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('appearanceScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appearanceScreenDisabled'");
    }

    /**
     * Gets the awaitDeviceConfiguredConfirmation property value. Indicates if the device will need to wait for configured confirmation
     * @return bool|null
    */
    public function getAwaitDeviceConfiguredConfirmation(): ?bool {
        $val = $this->getBackingStore()->get('awaitDeviceConfiguredConfirmation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'awaitDeviceConfiguredConfirmation'");
    }

    /**
     * Gets the carrierActivationUrl property value. Carrier URL for activating device eSIM.
     * @return string|null
    */
    public function getCarrierActivationUrl(): ?string {
        $val = $this->getBackingStore()->get('carrierActivationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'carrierActivationUrl'");
    }

    /**
     * Gets the companyPortalVppTokenId property value. If set, indicates which Vpp token should be used to deploy the Company Portal w/ device licensing. 'enableAuthenticationViaCompanyPortal' must be set in order for this property to be set.
     * @return string|null
    */
    public function getCompanyPortalVppTokenId(): ?string {
        $val = $this->getBackingStore()->get('companyPortalVppTokenId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyPortalVppTokenId'");
    }

    /**
     * Gets the deviceToDeviceMigrationDisabled property value. Indicates if Device To Device Migration is disabled
     * @return bool|null
    */
    public function getDeviceToDeviceMigrationDisabled(): ?bool {
        $val = $this->getBackingStore()->get('deviceToDeviceMigrationDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceToDeviceMigrationDisabled'");
    }

    /**
     * Gets the enableSharedIPad property value. This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
     * @return bool|null
    */
    public function getEnableSharedIPad(): ?bool {
        $val = $this->getBackingStore()->get('enableSharedIPad');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableSharedIPad'");
    }

    /**
     * Gets the enableSingleAppEnrollmentMode property value. Tells the device to enable single app mode and apply app-lock during enrollment. Default is false. 'enableAuthenticationViaCompanyPortal' and 'companyPortalVppTokenId' must be set for this property to be set.
     * @return bool|null
    */
    public function getEnableSingleAppEnrollmentMode(): ?bool {
        $val = $this->getBackingStore()->get('enableSingleAppEnrollmentMode');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableSingleAppEnrollmentMode'");
    }

    /**
     * Gets the expressLanguageScreenDisabled property value. Indicates if Express Language screen is disabled
     * @return bool|null
    */
    public function getExpressLanguageScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('expressLanguageScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expressLanguageScreenDisabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appearanceScreenDisabled' => fn(ParseNode $n) => $o->setAppearanceScreenDisabled($n->getBooleanValue()),
            'awaitDeviceConfiguredConfirmation' => fn(ParseNode $n) => $o->setAwaitDeviceConfiguredConfirmation($n->getBooleanValue()),
            'carrierActivationUrl' => fn(ParseNode $n) => $o->setCarrierActivationUrl($n->getStringValue()),
            'companyPortalVppTokenId' => fn(ParseNode $n) => $o->setCompanyPortalVppTokenId($n->getStringValue()),
            'deviceToDeviceMigrationDisabled' => fn(ParseNode $n) => $o->setDeviceToDeviceMigrationDisabled($n->getBooleanValue()),
            'enableSharedIPad' => fn(ParseNode $n) => $o->setEnableSharedIPad($n->getBooleanValue()),
            'enableSingleAppEnrollmentMode' => fn(ParseNode $n) => $o->setEnableSingleAppEnrollmentMode($n->getBooleanValue()),
            'expressLanguageScreenDisabled' => fn(ParseNode $n) => $o->setExpressLanguageScreenDisabled($n->getBooleanValue()),
            'forceTemporarySession' => fn(ParseNode $n) => $o->setForceTemporarySession($n->getBooleanValue()),
            'homeButtonScreenDisabled' => fn(ParseNode $n) => $o->setHomeButtonScreenDisabled($n->getBooleanValue()),
            'iMessageAndFaceTimeScreenDisabled' => fn(ParseNode $n) => $o->setIMessageAndFaceTimeScreenDisabled($n->getBooleanValue()),
            'iTunesPairingMode' => fn(ParseNode $n) => $o->setITunesPairingMode($n->getEnumValue(ITunesPairingMode::class)),
            'managementCertificates' => fn(ParseNode $n) => $o->setManagementCertificates($n->getCollectionOfObjectValues([ManagementCertificateWithThumbprint::class, 'createFromDiscriminatorValue'])),
            'onBoardingScreenDisabled' => fn(ParseNode $n) => $o->setOnBoardingScreenDisabled($n->getBooleanValue()),
            'passCodeDisabled' => fn(ParseNode $n) => $o->setPassCodeDisabled($n->getBooleanValue()),
            'passcodeLockGracePeriodInSeconds' => fn(ParseNode $n) => $o->setPasscodeLockGracePeriodInSeconds($n->getIntegerValue()),
            'preferredLanguageScreenDisabled' => fn(ParseNode $n) => $o->setPreferredLanguageScreenDisabled($n->getBooleanValue()),
            'restoreCompletedScreenDisabled' => fn(ParseNode $n) => $o->setRestoreCompletedScreenDisabled($n->getBooleanValue()),
            'restoreFromAndroidDisabled' => fn(ParseNode $n) => $o->setRestoreFromAndroidDisabled($n->getBooleanValue()),
            'sharedIPadMaximumUserCount' => fn(ParseNode $n) => $o->setSharedIPadMaximumUserCount($n->getIntegerValue()),
            'simSetupScreenDisabled' => fn(ParseNode $n) => $o->setSimSetupScreenDisabled($n->getBooleanValue()),
            'softwareUpdateScreenDisabled' => fn(ParseNode $n) => $o->setSoftwareUpdateScreenDisabled($n->getBooleanValue()),
            'temporarySessionTimeoutInSeconds' => fn(ParseNode $n) => $o->setTemporarySessionTimeoutInSeconds($n->getIntegerValue()),
            'updateCompleteScreenDisabled' => fn(ParseNode $n) => $o->setUpdateCompleteScreenDisabled($n->getBooleanValue()),
            'userlessSharedAadModeEnabled' => fn(ParseNode $n) => $o->setUserlessSharedAadModeEnabled($n->getBooleanValue()),
            'userSessionTimeoutInSeconds' => fn(ParseNode $n) => $o->setUserSessionTimeoutInSeconds($n->getIntegerValue()),
            'watchMigrationScreenDisabled' => fn(ParseNode $n) => $o->setWatchMigrationScreenDisabled($n->getBooleanValue()),
            'welcomeScreenDisabled' => fn(ParseNode $n) => $o->setWelcomeScreenDisabled($n->getBooleanValue()),
            'zoomDisabled' => fn(ParseNode $n) => $o->setZoomDisabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the forceTemporarySession property value. Indicates if temporary sessions is enabled
     * @return bool|null
    */
    public function getForceTemporarySession(): ?bool {
        $val = $this->getBackingStore()->get('forceTemporarySession');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forceTemporarySession'");
    }

    /**
     * Gets the homeButtonScreenDisabled property value. Indicates if home button sensitivity screen is disabled
     * @return bool|null
    */
    public function getHomeButtonScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('homeButtonScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homeButtonScreenDisabled'");
    }

    /**
     * Gets the iMessageAndFaceTimeScreenDisabled property value. Indicates if iMessage and FaceTime screen is disabled
     * @return bool|null
    */
    public function getIMessageAndFaceTimeScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('iMessageAndFaceTimeScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iMessageAndFaceTimeScreenDisabled'");
    }

    /**
     * Gets the iTunesPairingMode property value. The iTunesPairingMode property
     * @return ITunesPairingMode|null
    */
    public function getITunesPairingMode(): ?ITunesPairingMode {
        $val = $this->getBackingStore()->get('iTunesPairingMode');
        if (is_null($val) || $val instanceof ITunesPairingMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iTunesPairingMode'");
    }

    /**
     * Gets the managementCertificates property value. Management certificates for Apple Configurator
     * @return array<ManagementCertificateWithThumbprint>|null
    */
    public function getManagementCertificates(): ?array {
        $val = $this->getBackingStore()->get('managementCertificates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagementCertificateWithThumbprint::class);
            /** @var array<ManagementCertificateWithThumbprint>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementCertificates'");
    }

    /**
     * Gets the onBoardingScreenDisabled property value. Indicates if onboarding setup screen is disabled
     * @return bool|null
    */
    public function getOnBoardingScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('onBoardingScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onBoardingScreenDisabled'");
    }

    /**
     * Gets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @return bool|null
    */
    public function getPassCodeDisabled(): ?bool {
        $val = $this->getBackingStore()->get('passCodeDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passCodeDisabled'");
    }

    /**
     * Gets the passcodeLockGracePeriodInSeconds property value. Indicates timeout before locked screen requires the user to enter the device passocde to unlock it
     * @return int|null
    */
    public function getPasscodeLockGracePeriodInSeconds(): ?int {
        $val = $this->getBackingStore()->get('passcodeLockGracePeriodInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcodeLockGracePeriodInSeconds'");
    }

    /**
     * Gets the preferredLanguageScreenDisabled property value. Indicates if Preferred language screen is disabled
     * @return bool|null
    */
    public function getPreferredLanguageScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('preferredLanguageScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredLanguageScreenDisabled'");
    }

    /**
     * Gets the restoreCompletedScreenDisabled property value. Indicates if Weclome screen is disabled
     * @return bool|null
    */
    public function getRestoreCompletedScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('restoreCompletedScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreCompletedScreenDisabled'");
    }

    /**
     * Gets the restoreFromAndroidDisabled property value. Indicates if Restore from Android is disabled
     * @return bool|null
    */
    public function getRestoreFromAndroidDisabled(): ?bool {
        $val = $this->getBackingStore()->get('restoreFromAndroidDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreFromAndroidDisabled'");
    }

    /**
     * Gets the sharedIPadMaximumUserCount property value. This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
     * @return int|null
    */
    public function getSharedIPadMaximumUserCount(): ?int {
        $val = $this->getBackingStore()->get('sharedIPadMaximumUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedIPadMaximumUserCount'");
    }

    /**
     * Gets the simSetupScreenDisabled property value. Indicates if the SIMSetup screen is disabled
     * @return bool|null
    */
    public function getSimSetupScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('simSetupScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simSetupScreenDisabled'");
    }

    /**
     * Gets the softwareUpdateScreenDisabled property value. Indicates if the mandatory sofware update screen is disabled
     * @return bool|null
    */
    public function getSoftwareUpdateScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('softwareUpdateScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softwareUpdateScreenDisabled'");
    }

    /**
     * Gets the temporarySessionTimeoutInSeconds property value. Indicates timeout of temporary session
     * @return int|null
    */
    public function getTemporarySessionTimeoutInSeconds(): ?int {
        $val = $this->getBackingStore()->get('temporarySessionTimeoutInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'temporarySessionTimeoutInSeconds'");
    }

    /**
     * Gets the updateCompleteScreenDisabled property value. Indicates if Weclome screen is disabled
     * @return bool|null
    */
    public function getUpdateCompleteScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('updateCompleteScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateCompleteScreenDisabled'");
    }

    /**
     * Gets the userlessSharedAadModeEnabled property value. Indicates that this apple device is designated to support 'shared device mode' scenarios. This is distinct from the 'shared iPad' scenario. See https://learn.microsoft.com/mem/intune/enrollment/device-enrollment-shared-ios
     * @return bool|null
    */
    public function getUserlessSharedAadModeEnabled(): ?bool {
        $val = $this->getBackingStore()->get('userlessSharedAadModeEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userlessSharedAadModeEnabled'");
    }

    /**
     * Gets the userSessionTimeoutInSeconds property value. Indicates timeout of temporary session
     * @return int|null
    */
    public function getUserSessionTimeoutInSeconds(): ?int {
        $val = $this->getBackingStore()->get('userSessionTimeoutInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSessionTimeoutInSeconds'");
    }

    /**
     * Gets the watchMigrationScreenDisabled property value. Indicates if the watch migration screen is disabled
     * @return bool|null
    */
    public function getWatchMigrationScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('watchMigrationScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'watchMigrationScreenDisabled'");
    }

    /**
     * Gets the welcomeScreenDisabled property value. Indicates if Weclome screen is disabled
     * @return bool|null
    */
    public function getWelcomeScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('welcomeScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'welcomeScreenDisabled'");
    }

    /**
     * Gets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     * @return bool|null
    */
    public function getZoomDisabled(): ?bool {
        $val = $this->getBackingStore()->get('zoomDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zoomDisabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appearanceScreenDisabled', $this->getAppearanceScreenDisabled());
        $writer->writeBooleanValue('awaitDeviceConfiguredConfirmation', $this->getAwaitDeviceConfiguredConfirmation());
        $writer->writeStringValue('carrierActivationUrl', $this->getCarrierActivationUrl());
        $writer->writeStringValue('companyPortalVppTokenId', $this->getCompanyPortalVppTokenId());
        $writer->writeBooleanValue('deviceToDeviceMigrationDisabled', $this->getDeviceToDeviceMigrationDisabled());
        $writer->writeBooleanValue('enableSharedIPad', $this->getEnableSharedIPad());
        $writer->writeBooleanValue('enableSingleAppEnrollmentMode', $this->getEnableSingleAppEnrollmentMode());
        $writer->writeBooleanValue('expressLanguageScreenDisabled', $this->getExpressLanguageScreenDisabled());
        $writer->writeBooleanValue('forceTemporarySession', $this->getForceTemporarySession());
        $writer->writeBooleanValue('homeButtonScreenDisabled', $this->getHomeButtonScreenDisabled());
        $writer->writeBooleanValue('iMessageAndFaceTimeScreenDisabled', $this->getIMessageAndFaceTimeScreenDisabled());
        $writer->writeEnumValue('iTunesPairingMode', $this->getITunesPairingMode());
        $writer->writeCollectionOfObjectValues('managementCertificates', $this->getManagementCertificates());
        $writer->writeBooleanValue('onBoardingScreenDisabled', $this->getOnBoardingScreenDisabled());
        $writer->writeBooleanValue('passCodeDisabled', $this->getPassCodeDisabled());
        $writer->writeIntegerValue('passcodeLockGracePeriodInSeconds', $this->getPasscodeLockGracePeriodInSeconds());
        $writer->writeBooleanValue('preferredLanguageScreenDisabled', $this->getPreferredLanguageScreenDisabled());
        $writer->writeBooleanValue('restoreCompletedScreenDisabled', $this->getRestoreCompletedScreenDisabled());
        $writer->writeBooleanValue('restoreFromAndroidDisabled', $this->getRestoreFromAndroidDisabled());
        $writer->writeIntegerValue('sharedIPadMaximumUserCount', $this->getSharedIPadMaximumUserCount());
        $writer->writeBooleanValue('simSetupScreenDisabled', $this->getSimSetupScreenDisabled());
        $writer->writeBooleanValue('softwareUpdateScreenDisabled', $this->getSoftwareUpdateScreenDisabled());
        $writer->writeIntegerValue('temporarySessionTimeoutInSeconds', $this->getTemporarySessionTimeoutInSeconds());
        $writer->writeBooleanValue('updateCompleteScreenDisabled', $this->getUpdateCompleteScreenDisabled());
        $writer->writeBooleanValue('userlessSharedAadModeEnabled', $this->getUserlessSharedAadModeEnabled());
        $writer->writeIntegerValue('userSessionTimeoutInSeconds', $this->getUserSessionTimeoutInSeconds());
        $writer->writeBooleanValue('watchMigrationScreenDisabled', $this->getWatchMigrationScreenDisabled());
        $writer->writeBooleanValue('welcomeScreenDisabled', $this->getWelcomeScreenDisabled());
        $writer->writeBooleanValue('zoomDisabled', $this->getZoomDisabled());
    }

    /**
     * Sets the appearanceScreenDisabled property value. Indicates if Apperance screen is disabled
     * @param bool|null $value Value to set for the appearanceScreenDisabled property.
    */
    public function setAppearanceScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('appearanceScreenDisabled', $value);
    }

    /**
     * Sets the awaitDeviceConfiguredConfirmation property value. Indicates if the device will need to wait for configured confirmation
     * @param bool|null $value Value to set for the awaitDeviceConfiguredConfirmation property.
    */
    public function setAwaitDeviceConfiguredConfirmation(?bool $value): void {
        $this->getBackingStore()->set('awaitDeviceConfiguredConfirmation', $value);
    }

    /**
     * Sets the carrierActivationUrl property value. Carrier URL for activating device eSIM.
     * @param string|null $value Value to set for the carrierActivationUrl property.
    */
    public function setCarrierActivationUrl(?string $value): void {
        $this->getBackingStore()->set('carrierActivationUrl', $value);
    }

    /**
     * Sets the companyPortalVppTokenId property value. If set, indicates which Vpp token should be used to deploy the Company Portal w/ device licensing. 'enableAuthenticationViaCompanyPortal' must be set in order for this property to be set.
     * @param string|null $value Value to set for the companyPortalVppTokenId property.
    */
    public function setCompanyPortalVppTokenId(?string $value): void {
        $this->getBackingStore()->set('companyPortalVppTokenId', $value);
    }

    /**
     * Sets the deviceToDeviceMigrationDisabled property value. Indicates if Device To Device Migration is disabled
     * @param bool|null $value Value to set for the deviceToDeviceMigrationDisabled property.
    */
    public function setDeviceToDeviceMigrationDisabled(?bool $value): void {
        $this->getBackingStore()->set('deviceToDeviceMigrationDisabled', $value);
    }

    /**
     * Sets the enableSharedIPad property value. This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
     * @param bool|null $value Value to set for the enableSharedIPad property.
    */
    public function setEnableSharedIPad(?bool $value): void {
        $this->getBackingStore()->set('enableSharedIPad', $value);
    }

    /**
     * Sets the enableSingleAppEnrollmentMode property value. Tells the device to enable single app mode and apply app-lock during enrollment. Default is false. 'enableAuthenticationViaCompanyPortal' and 'companyPortalVppTokenId' must be set for this property to be set.
     * @param bool|null $value Value to set for the enableSingleAppEnrollmentMode property.
    */
    public function setEnableSingleAppEnrollmentMode(?bool $value): void {
        $this->getBackingStore()->set('enableSingleAppEnrollmentMode', $value);
    }

    /**
     * Sets the expressLanguageScreenDisabled property value. Indicates if Express Language screen is disabled
     * @param bool|null $value Value to set for the expressLanguageScreenDisabled property.
    */
    public function setExpressLanguageScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('expressLanguageScreenDisabled', $value);
    }

    /**
     * Sets the forceTemporarySession property value. Indicates if temporary sessions is enabled
     * @param bool|null $value Value to set for the forceTemporarySession property.
    */
    public function setForceTemporarySession(?bool $value): void {
        $this->getBackingStore()->set('forceTemporarySession', $value);
    }

    /**
     * Sets the homeButtonScreenDisabled property value. Indicates if home button sensitivity screen is disabled
     * @param bool|null $value Value to set for the homeButtonScreenDisabled property.
    */
    public function setHomeButtonScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('homeButtonScreenDisabled', $value);
    }

    /**
     * Sets the iMessageAndFaceTimeScreenDisabled property value. Indicates if iMessage and FaceTime screen is disabled
     * @param bool|null $value Value to set for the iMessageAndFaceTimeScreenDisabled property.
    */
    public function setIMessageAndFaceTimeScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('iMessageAndFaceTimeScreenDisabled', $value);
    }

    /**
     * Sets the iTunesPairingMode property value. The iTunesPairingMode property
     * @param ITunesPairingMode|null $value Value to set for the iTunesPairingMode property.
    */
    public function setITunesPairingMode(?ITunesPairingMode $value): void {
        $this->getBackingStore()->set('iTunesPairingMode', $value);
    }

    /**
     * Sets the managementCertificates property value. Management certificates for Apple Configurator
     * @param array<ManagementCertificateWithThumbprint>|null $value Value to set for the managementCertificates property.
    */
    public function setManagementCertificates(?array $value): void {
        $this->getBackingStore()->set('managementCertificates', $value);
    }

    /**
     * Sets the onBoardingScreenDisabled property value. Indicates if onboarding setup screen is disabled
     * @param bool|null $value Value to set for the onBoardingScreenDisabled property.
    */
    public function setOnBoardingScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('onBoardingScreenDisabled', $value);
    }

    /**
     * Sets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @param bool|null $value Value to set for the passCodeDisabled property.
    */
    public function setPassCodeDisabled(?bool $value): void {
        $this->getBackingStore()->set('passCodeDisabled', $value);
    }

    /**
     * Sets the passcodeLockGracePeriodInSeconds property value. Indicates timeout before locked screen requires the user to enter the device passocde to unlock it
     * @param int|null $value Value to set for the passcodeLockGracePeriodInSeconds property.
    */
    public function setPasscodeLockGracePeriodInSeconds(?int $value): void {
        $this->getBackingStore()->set('passcodeLockGracePeriodInSeconds', $value);
    }

    /**
     * Sets the preferredLanguageScreenDisabled property value. Indicates if Preferred language screen is disabled
     * @param bool|null $value Value to set for the preferredLanguageScreenDisabled property.
    */
    public function setPreferredLanguageScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('preferredLanguageScreenDisabled', $value);
    }

    /**
     * Sets the restoreCompletedScreenDisabled property value. Indicates if Weclome screen is disabled
     * @param bool|null $value Value to set for the restoreCompletedScreenDisabled property.
    */
    public function setRestoreCompletedScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('restoreCompletedScreenDisabled', $value);
    }

    /**
     * Sets the restoreFromAndroidDisabled property value. Indicates if Restore from Android is disabled
     * @param bool|null $value Value to set for the restoreFromAndroidDisabled property.
    */
    public function setRestoreFromAndroidDisabled(?bool $value): void {
        $this->getBackingStore()->set('restoreFromAndroidDisabled', $value);
    }

    /**
     * Sets the sharedIPadMaximumUserCount property value. This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
     * @param int|null $value Value to set for the sharedIPadMaximumUserCount property.
    */
    public function setSharedIPadMaximumUserCount(?int $value): void {
        $this->getBackingStore()->set('sharedIPadMaximumUserCount', $value);
    }

    /**
     * Sets the simSetupScreenDisabled property value. Indicates if the SIMSetup screen is disabled
     * @param bool|null $value Value to set for the simSetupScreenDisabled property.
    */
    public function setSimSetupScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('simSetupScreenDisabled', $value);
    }

    /**
     * Sets the softwareUpdateScreenDisabled property value. Indicates if the mandatory sofware update screen is disabled
     * @param bool|null $value Value to set for the softwareUpdateScreenDisabled property.
    */
    public function setSoftwareUpdateScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('softwareUpdateScreenDisabled', $value);
    }

    /**
     * Sets the temporarySessionTimeoutInSeconds property value. Indicates timeout of temporary session
     * @param int|null $value Value to set for the temporarySessionTimeoutInSeconds property.
    */
    public function setTemporarySessionTimeoutInSeconds(?int $value): void {
        $this->getBackingStore()->set('temporarySessionTimeoutInSeconds', $value);
    }

    /**
     * Sets the updateCompleteScreenDisabled property value. Indicates if Weclome screen is disabled
     * @param bool|null $value Value to set for the updateCompleteScreenDisabled property.
    */
    public function setUpdateCompleteScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('updateCompleteScreenDisabled', $value);
    }

    /**
     * Sets the userlessSharedAadModeEnabled property value. Indicates that this apple device is designated to support 'shared device mode' scenarios. This is distinct from the 'shared iPad' scenario. See https://learn.microsoft.com/mem/intune/enrollment/device-enrollment-shared-ios
     * @param bool|null $value Value to set for the userlessSharedAadModeEnabled property.
    */
    public function setUserlessSharedAadModeEnabled(?bool $value): void {
        $this->getBackingStore()->set('userlessSharedAadModeEnabled', $value);
    }

    /**
     * Sets the userSessionTimeoutInSeconds property value. Indicates timeout of temporary session
     * @param int|null $value Value to set for the userSessionTimeoutInSeconds property.
    */
    public function setUserSessionTimeoutInSeconds(?int $value): void {
        $this->getBackingStore()->set('userSessionTimeoutInSeconds', $value);
    }

    /**
     * Sets the watchMigrationScreenDisabled property value. Indicates if the watch migration screen is disabled
     * @param bool|null $value Value to set for the watchMigrationScreenDisabled property.
    */
    public function setWatchMigrationScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('watchMigrationScreenDisabled', $value);
    }

    /**
     * Sets the welcomeScreenDisabled property value. Indicates if Weclome screen is disabled
     * @param bool|null $value Value to set for the welcomeScreenDisabled property.
    */
    public function setWelcomeScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('welcomeScreenDisabled', $value);
    }

    /**
     * Sets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     * @param bool|null $value Value to set for the zoomDisabled property.
    */
    public function setZoomDisabled(?bool $value): void {
        $this->getBackingStore()->set('zoomDisabled', $value);
    }

}
