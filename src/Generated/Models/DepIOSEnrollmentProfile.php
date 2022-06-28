<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepIOSEnrollmentProfile extends DepEnrollmentBaseProfile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $appearanceScreenDisabled Indicates if Apperance screen is disabled
    */
    private ?bool $appearanceScreenDisabled = null;
    
    /**
     * @var bool|null $awaitDeviceConfiguredConfirmation Indicates if the device will need to wait for configured confirmation
    */
    private ?bool $awaitDeviceConfiguredConfirmation = null;
    
    /**
     * @var string|null $carrierActivationUrl Carrier URL for activating device eSIM.
    */
    private ?string $carrierActivationUrl = null;
    
    /**
     * @var string|null $companyPortalVppTokenId If set, indicates which Vpp token should be used to deploy the Company Portal w/ device licensing. 'enableAuthenticationViaCompanyPortal' must be set in order for this property to be set.
    */
    private ?string $companyPortalVppTokenId = null;
    
    /**
     * @var bool|null $deviceToDeviceMigrationDisabled Indicates if Device To Device Migration is disabled
    */
    private ?bool $deviceToDeviceMigrationDisabled = null;
    
    /**
     * @var bool|null $enableSharedIPad This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
    */
    private ?bool $enableSharedIPad = null;
    
    /**
     * @var bool|null $enableSingleAppEnrollmentMode Tells the device to enable single app mode and apply app-lock during enrollment. Default is false. 'enableAuthenticationViaCompanyPortal' and 'companyPortalVppTokenId' must be set for this property to be set.
    */
    private ?bool $enableSingleAppEnrollmentMode = null;
    
    /**
     * @var bool|null $expressLanguageScreenDisabled Indicates if Express Language screen is disabled
    */
    private ?bool $expressLanguageScreenDisabled = null;
    
    /**
     * @var bool|null $forceTemporarySession Indicates if temporary sessions is enabled
    */
    private ?bool $forceTemporarySession = null;
    
    /**
     * @var bool|null $homeButtonScreenDisabled Indicates if home button sensitivity screen is disabled
    */
    private ?bool $homeButtonScreenDisabled = null;
    
    /**
     * @var bool|null $iMessageAndFaceTimeScreenDisabled Indicates if iMessage and FaceTime screen is disabled
    */
    private ?bool $iMessageAndFaceTimeScreenDisabled = null;
    
    /**
     * @var ITunesPairingMode|null $iTunesPairingMode Indicates the iTunes pairing mode. Possible values are: disallow, allow, requiresCertificate.
    */
    private ?ITunesPairingMode $iTunesPairingMode = null;
    
    /**
     * @var array<ManagementCertificateWithThumbprint>|null $managementCertificates Management certificates for Apple Configurator
    */
    private ?array $managementCertificates = null;
    
    /**
     * @var bool|null $onBoardingScreenDisabled Indicates if onboarding setup screen is disabled
    */
    private ?bool $onBoardingScreenDisabled = null;
    
    /**
     * @var bool|null $passCodeDisabled Indicates if Passcode setup pane is disabled
    */
    private ?bool $passCodeDisabled = null;
    
    /**
     * @var int|null $passcodeLockGracePeriodInSeconds Indicates timeout before locked screen requires the user to enter the device passocde to unlock it
    */
    private ?int $passcodeLockGracePeriodInSeconds = null;
    
    /**
     * @var bool|null $preferredLanguageScreenDisabled Indicates if Preferred language screen is disabled
    */
    private ?bool $preferredLanguageScreenDisabled = null;
    
    /**
     * @var bool|null $restoreCompletedScreenDisabled Indicates if Weclome screen is disabled
    */
    private ?bool $restoreCompletedScreenDisabled = null;
    
    /**
     * @var bool|null $restoreFromAndroidDisabled Indicates if Restore from Android is disabled
    */
    private ?bool $restoreFromAndroidDisabled = null;
    
    /**
     * @var int|null $sharedIPadMaximumUserCount This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
    */
    private ?int $sharedIPadMaximumUserCount = null;
    
    /**
     * @var bool|null $simSetupScreenDisabled Indicates if the SIMSetup screen is disabled
    */
    private ?bool $simSetupScreenDisabled = null;
    
    /**
     * @var bool|null $softwareUpdateScreenDisabled Indicates if the mandatory sofware update screen is disabled
    */
    private ?bool $softwareUpdateScreenDisabled = null;
    
    /**
     * @var int|null $temporarySessionTimeoutInSeconds Indicates timeout of temporary session
    */
    private ?int $temporarySessionTimeoutInSeconds = null;
    
    /**
     * @var bool|null $updateCompleteScreenDisabled Indicates if Weclome screen is disabled
    */
    private ?bool $updateCompleteScreenDisabled = null;
    
    /**
     * @var bool|null $userlessSharedAadModeEnabled Indicates that this apple device is designated to support 'shared device mode' scenarios. This is distinct from the 'shared iPad' scenario. See https://docs.microsoft.com/mem/intune/enrollment/device-enrollment-shared-ios
    */
    private ?bool $userlessSharedAadModeEnabled = null;
    
    /**
     * @var int|null $userSessionTimeoutInSeconds Indicates timeout of temporary session
    */
    private ?int $userSessionTimeoutInSeconds = null;
    
    /**
     * @var bool|null $watchMigrationScreenDisabled Indicates if the watch migration screen is disabled
    */
    private ?bool $watchMigrationScreenDisabled = null;
    
    /**
     * @var bool|null $welcomeScreenDisabled Indicates if Weclome screen is disabled
    */
    private ?bool $welcomeScreenDisabled = null;
    
    /**
     * @var bool|null $zoomDisabled Indicates if zoom setup pane is disabled
    */
    private ?bool $zoomDisabled = null;
    
    /**
     * Instantiates a new DepIOSEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appearanceScreenDisabled property value. Indicates if Apperance screen is disabled
     * @return bool|null
    */
    public function getAppearanceScreenDisabled(): ?bool {
        return $this->appearanceScreenDisabled;
    }

    /**
     * Gets the awaitDeviceConfiguredConfirmation property value. Indicates if the device will need to wait for configured confirmation
     * @return bool|null
    */
    public function getAwaitDeviceConfiguredConfirmation(): ?bool {
        return $this->awaitDeviceConfiguredConfirmation;
    }

    /**
     * Gets the carrierActivationUrl property value. Carrier URL for activating device eSIM.
     * @return string|null
    */
    public function getCarrierActivationUrl(): ?string {
        return $this->carrierActivationUrl;
    }

    /**
     * Gets the companyPortalVppTokenId property value. If set, indicates which Vpp token should be used to deploy the Company Portal w/ device licensing. 'enableAuthenticationViaCompanyPortal' must be set in order for this property to be set.
     * @return string|null
    */
    public function getCompanyPortalVppTokenId(): ?string {
        return $this->companyPortalVppTokenId;
    }

    /**
     * Gets the deviceToDeviceMigrationDisabled property value. Indicates if Device To Device Migration is disabled
     * @return bool|null
    */
    public function getDeviceToDeviceMigrationDisabled(): ?bool {
        return $this->deviceToDeviceMigrationDisabled;
    }

    /**
     * Gets the enableSharedIPad property value. This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
     * @return bool|null
    */
    public function getEnableSharedIPad(): ?bool {
        return $this->enableSharedIPad;
    }

    /**
     * Gets the enableSingleAppEnrollmentMode property value. Tells the device to enable single app mode and apply app-lock during enrollment. Default is false. 'enableAuthenticationViaCompanyPortal' and 'companyPortalVppTokenId' must be set for this property to be set.
     * @return bool|null
    */
    public function getEnableSingleAppEnrollmentMode(): ?bool {
        return $this->enableSingleAppEnrollmentMode;
    }

    /**
     * Gets the expressLanguageScreenDisabled property value. Indicates if Express Language screen is disabled
     * @return bool|null
    */
    public function getExpressLanguageScreenDisabled(): ?bool {
        return $this->expressLanguageScreenDisabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appearanceScreenDisabled' => function (ParseNode $n) use ($o) { $o->setAppearanceScreenDisabled($n->getBooleanValue()); },
            'awaitDeviceConfiguredConfirmation' => function (ParseNode $n) use ($o) { $o->setAwaitDeviceConfiguredConfirmation($n->getBooleanValue()); },
            'carrierActivationUrl' => function (ParseNode $n) use ($o) { $o->setCarrierActivationUrl($n->getStringValue()); },
            'companyPortalVppTokenId' => function (ParseNode $n) use ($o) { $o->setCompanyPortalVppTokenId($n->getStringValue()); },
            'deviceToDeviceMigrationDisabled' => function (ParseNode $n) use ($o) { $o->setDeviceToDeviceMigrationDisabled($n->getBooleanValue()); },
            'enableSharedIPad' => function (ParseNode $n) use ($o) { $o->setEnableSharedIPad($n->getBooleanValue()); },
            'enableSingleAppEnrollmentMode' => function (ParseNode $n) use ($o) { $o->setEnableSingleAppEnrollmentMode($n->getBooleanValue()); },
            'expressLanguageScreenDisabled' => function (ParseNode $n) use ($o) { $o->setExpressLanguageScreenDisabled($n->getBooleanValue()); },
            'forceTemporarySession' => function (ParseNode $n) use ($o) { $o->setForceTemporarySession($n->getBooleanValue()); },
            'homeButtonScreenDisabled' => function (ParseNode $n) use ($o) { $o->setHomeButtonScreenDisabled($n->getBooleanValue()); },
            'iMessageAndFaceTimeScreenDisabled' => function (ParseNode $n) use ($o) { $o->setIMessageAndFaceTimeScreenDisabled($n->getBooleanValue()); },
            'iTunesPairingMode' => function (ParseNode $n) use ($o) { $o->setITunesPairingMode($n->getEnumValue(ITunesPairingMode::class)); },
            'managementCertificates' => function (ParseNode $n) use ($o) { $o->setManagementCertificates($n->getCollectionOfObjectValues(array(ManagementCertificateWithThumbprint::class, 'createFromDiscriminatorValue'))); },
            'onBoardingScreenDisabled' => function (ParseNode $n) use ($o) { $o->setOnBoardingScreenDisabled($n->getBooleanValue()); },
            'passCodeDisabled' => function (ParseNode $n) use ($o) { $o->setPassCodeDisabled($n->getBooleanValue()); },
            'passcodeLockGracePeriodInSeconds' => function (ParseNode $n) use ($o) { $o->setPasscodeLockGracePeriodInSeconds($n->getIntegerValue()); },
            'preferredLanguageScreenDisabled' => function (ParseNode $n) use ($o) { $o->setPreferredLanguageScreenDisabled($n->getBooleanValue()); },
            'restoreCompletedScreenDisabled' => function (ParseNode $n) use ($o) { $o->setRestoreCompletedScreenDisabled($n->getBooleanValue()); },
            'restoreFromAndroidDisabled' => function (ParseNode $n) use ($o) { $o->setRestoreFromAndroidDisabled($n->getBooleanValue()); },
            'sharedIPadMaximumUserCount' => function (ParseNode $n) use ($o) { $o->setSharedIPadMaximumUserCount($n->getIntegerValue()); },
            'simSetupScreenDisabled' => function (ParseNode $n) use ($o) { $o->setSimSetupScreenDisabled($n->getBooleanValue()); },
            'softwareUpdateScreenDisabled' => function (ParseNode $n) use ($o) { $o->setSoftwareUpdateScreenDisabled($n->getBooleanValue()); },
            'temporarySessionTimeoutInSeconds' => function (ParseNode $n) use ($o) { $o->setTemporarySessionTimeoutInSeconds($n->getIntegerValue()); },
            'updateCompleteScreenDisabled' => function (ParseNode $n) use ($o) { $o->setUpdateCompleteScreenDisabled($n->getBooleanValue()); },
            'userlessSharedAadModeEnabled' => function (ParseNode $n) use ($o) { $o->setUserlessSharedAadModeEnabled($n->getBooleanValue()); },
            'userSessionTimeoutInSeconds' => function (ParseNode $n) use ($o) { $o->setUserSessionTimeoutInSeconds($n->getIntegerValue()); },
            'watchMigrationScreenDisabled' => function (ParseNode $n) use ($o) { $o->setWatchMigrationScreenDisabled($n->getBooleanValue()); },
            'welcomeScreenDisabled' => function (ParseNode $n) use ($o) { $o->setWelcomeScreenDisabled($n->getBooleanValue()); },
            'zoomDisabled' => function (ParseNode $n) use ($o) { $o->setZoomDisabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the forceTemporarySession property value. Indicates if temporary sessions is enabled
     * @return bool|null
    */
    public function getForceTemporarySession(): ?bool {
        return $this->forceTemporarySession;
    }

    /**
     * Gets the homeButtonScreenDisabled property value. Indicates if home button sensitivity screen is disabled
     * @return bool|null
    */
    public function getHomeButtonScreenDisabled(): ?bool {
        return $this->homeButtonScreenDisabled;
    }

    /**
     * Gets the iMessageAndFaceTimeScreenDisabled property value. Indicates if iMessage and FaceTime screen is disabled
     * @return bool|null
    */
    public function getIMessageAndFaceTimeScreenDisabled(): ?bool {
        return $this->iMessageAndFaceTimeScreenDisabled;
    }

    /**
     * Gets the iTunesPairingMode property value. Indicates the iTunes pairing mode. Possible values are: disallow, allow, requiresCertificate.
     * @return ITunesPairingMode|null
    */
    public function getITunesPairingMode(): ?ITunesPairingMode {
        return $this->iTunesPairingMode;
    }

    /**
     * Gets the managementCertificates property value. Management certificates for Apple Configurator
     * @return array<ManagementCertificateWithThumbprint>|null
    */
    public function getManagementCertificates(): ?array {
        return $this->managementCertificates;
    }

    /**
     * Gets the onBoardingScreenDisabled property value. Indicates if onboarding setup screen is disabled
     * @return bool|null
    */
    public function getOnBoardingScreenDisabled(): ?bool {
        return $this->onBoardingScreenDisabled;
    }

    /**
     * Gets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @return bool|null
    */
    public function getPassCodeDisabled(): ?bool {
        return $this->passCodeDisabled;
    }

    /**
     * Gets the passcodeLockGracePeriodInSeconds property value. Indicates timeout before locked screen requires the user to enter the device passocde to unlock it
     * @return int|null
    */
    public function getPasscodeLockGracePeriodInSeconds(): ?int {
        return $this->passcodeLockGracePeriodInSeconds;
    }

    /**
     * Gets the preferredLanguageScreenDisabled property value. Indicates if Preferred language screen is disabled
     * @return bool|null
    */
    public function getPreferredLanguageScreenDisabled(): ?bool {
        return $this->preferredLanguageScreenDisabled;
    }

    /**
     * Gets the restoreCompletedScreenDisabled property value. Indicates if Weclome screen is disabled
     * @return bool|null
    */
    public function getRestoreCompletedScreenDisabled(): ?bool {
        return $this->restoreCompletedScreenDisabled;
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
     * Gets the simSetupScreenDisabled property value. Indicates if the SIMSetup screen is disabled
     * @return bool|null
    */
    public function getSimSetupScreenDisabled(): ?bool {
        return $this->simSetupScreenDisabled;
    }

    /**
     * Gets the softwareUpdateScreenDisabled property value. Indicates if the mandatory sofware update screen is disabled
     * @return bool|null
    */
    public function getSoftwareUpdateScreenDisabled(): ?bool {
        return $this->softwareUpdateScreenDisabled;
    }

    /**
     * Gets the temporarySessionTimeoutInSeconds property value. Indicates timeout of temporary session
     * @return int|null
    */
    public function getTemporarySessionTimeoutInSeconds(): ?int {
        return $this->temporarySessionTimeoutInSeconds;
    }

    /**
     * Gets the updateCompleteScreenDisabled property value. Indicates if Weclome screen is disabled
     * @return bool|null
    */
    public function getUpdateCompleteScreenDisabled(): ?bool {
        return $this->updateCompleteScreenDisabled;
    }

    /**
     * Gets the userlessSharedAadModeEnabled property value. Indicates that this apple device is designated to support 'shared device mode' scenarios. This is distinct from the 'shared iPad' scenario. See https://docs.microsoft.com/mem/intune/enrollment/device-enrollment-shared-ios
     * @return bool|null
    */
    public function getUserlessSharedAadModeEnabled(): ?bool {
        return $this->userlessSharedAadModeEnabled;
    }

    /**
     * Gets the userSessionTimeoutInSeconds property value. Indicates timeout of temporary session
     * @return int|null
    */
    public function getUserSessionTimeoutInSeconds(): ?int {
        return $this->userSessionTimeoutInSeconds;
    }

    /**
     * Gets the watchMigrationScreenDisabled property value. Indicates if the watch migration screen is disabled
     * @return bool|null
    */
    public function getWatchMigrationScreenDisabled(): ?bool {
        return $this->watchMigrationScreenDisabled;
    }

    /**
     * Gets the welcomeScreenDisabled property value. Indicates if Weclome screen is disabled
     * @return bool|null
    */
    public function getWelcomeScreenDisabled(): ?bool {
        return $this->welcomeScreenDisabled;
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
        $writer->writeBooleanValue('appearanceScreenDisabled', $this->appearanceScreenDisabled);
        $writer->writeBooleanValue('awaitDeviceConfiguredConfirmation', $this->awaitDeviceConfiguredConfirmation);
        $writer->writeStringValue('carrierActivationUrl', $this->carrierActivationUrl);
        $writer->writeStringValue('companyPortalVppTokenId', $this->companyPortalVppTokenId);
        $writer->writeBooleanValue('deviceToDeviceMigrationDisabled', $this->deviceToDeviceMigrationDisabled);
        $writer->writeBooleanValue('enableSharedIPad', $this->enableSharedIPad);
        $writer->writeBooleanValue('enableSingleAppEnrollmentMode', $this->enableSingleAppEnrollmentMode);
        $writer->writeBooleanValue('expressLanguageScreenDisabled', $this->expressLanguageScreenDisabled);
        $writer->writeBooleanValue('forceTemporarySession', $this->forceTemporarySession);
        $writer->writeBooleanValue('homeButtonScreenDisabled', $this->homeButtonScreenDisabled);
        $writer->writeBooleanValue('iMessageAndFaceTimeScreenDisabled', $this->iMessageAndFaceTimeScreenDisabled);
        $writer->writeEnumValue('iTunesPairingMode', $this->iTunesPairingMode);
        $writer->writeCollectionOfObjectValues('managementCertificates', $this->managementCertificates);
        $writer->writeBooleanValue('onBoardingScreenDisabled', $this->onBoardingScreenDisabled);
        $writer->writeBooleanValue('passCodeDisabled', $this->passCodeDisabled);
        $writer->writeIntegerValue('passcodeLockGracePeriodInSeconds', $this->passcodeLockGracePeriodInSeconds);
        $writer->writeBooleanValue('preferredLanguageScreenDisabled', $this->preferredLanguageScreenDisabled);
        $writer->writeBooleanValue('restoreCompletedScreenDisabled', $this->restoreCompletedScreenDisabled);
        $writer->writeBooleanValue('restoreFromAndroidDisabled', $this->restoreFromAndroidDisabled);
        $writer->writeIntegerValue('sharedIPadMaximumUserCount', $this->sharedIPadMaximumUserCount);
        $writer->writeBooleanValue('simSetupScreenDisabled', $this->simSetupScreenDisabled);
        $writer->writeBooleanValue('softwareUpdateScreenDisabled', $this->softwareUpdateScreenDisabled);
        $writer->writeIntegerValue('temporarySessionTimeoutInSeconds', $this->temporarySessionTimeoutInSeconds);
        $writer->writeBooleanValue('updateCompleteScreenDisabled', $this->updateCompleteScreenDisabled);
        $writer->writeBooleanValue('userlessSharedAadModeEnabled', $this->userlessSharedAadModeEnabled);
        $writer->writeIntegerValue('userSessionTimeoutInSeconds', $this->userSessionTimeoutInSeconds);
        $writer->writeBooleanValue('watchMigrationScreenDisabled', $this->watchMigrationScreenDisabled);
        $writer->writeBooleanValue('welcomeScreenDisabled', $this->welcomeScreenDisabled);
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
     * Sets the appearanceScreenDisabled property value. Indicates if Apperance screen is disabled
     *  @param bool|null $value Value to set for the appearanceScreenDisabled property.
    */
    public function setAppearanceScreenDisabled(?bool $value ): void {
        $this->appearanceScreenDisabled = $value;
    }

    /**
     * Sets the awaitDeviceConfiguredConfirmation property value. Indicates if the device will need to wait for configured confirmation
     *  @param bool|null $value Value to set for the awaitDeviceConfiguredConfirmation property.
    */
    public function setAwaitDeviceConfiguredConfirmation(?bool $value ): void {
        $this->awaitDeviceConfiguredConfirmation = $value;
    }

    /**
     * Sets the carrierActivationUrl property value. Carrier URL for activating device eSIM.
     *  @param string|null $value Value to set for the carrierActivationUrl property.
    */
    public function setCarrierActivationUrl(?string $value ): void {
        $this->carrierActivationUrl = $value;
    }

    /**
     * Sets the companyPortalVppTokenId property value. If set, indicates which Vpp token should be used to deploy the Company Portal w/ device licensing. 'enableAuthenticationViaCompanyPortal' must be set in order for this property to be set.
     *  @param string|null $value Value to set for the companyPortalVppTokenId property.
    */
    public function setCompanyPortalVppTokenId(?string $value ): void {
        $this->companyPortalVppTokenId = $value;
    }

    /**
     * Sets the deviceToDeviceMigrationDisabled property value. Indicates if Device To Device Migration is disabled
     *  @param bool|null $value Value to set for the deviceToDeviceMigrationDisabled property.
    */
    public function setDeviceToDeviceMigrationDisabled(?bool $value ): void {
        $this->deviceToDeviceMigrationDisabled = $value;
    }

    /**
     * Sets the enableSharedIPad property value. This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
     *  @param bool|null $value Value to set for the enableSharedIPad property.
    */
    public function setEnableSharedIPad(?bool $value ): void {
        $this->enableSharedIPad = $value;
    }

    /**
     * Sets the enableSingleAppEnrollmentMode property value. Tells the device to enable single app mode and apply app-lock during enrollment. Default is false. 'enableAuthenticationViaCompanyPortal' and 'companyPortalVppTokenId' must be set for this property to be set.
     *  @param bool|null $value Value to set for the enableSingleAppEnrollmentMode property.
    */
    public function setEnableSingleAppEnrollmentMode(?bool $value ): void {
        $this->enableSingleAppEnrollmentMode = $value;
    }

    /**
     * Sets the expressLanguageScreenDisabled property value. Indicates if Express Language screen is disabled
     *  @param bool|null $value Value to set for the expressLanguageScreenDisabled property.
    */
    public function setExpressLanguageScreenDisabled(?bool $value ): void {
        $this->expressLanguageScreenDisabled = $value;
    }

    /**
     * Sets the forceTemporarySession property value. Indicates if temporary sessions is enabled
     *  @param bool|null $value Value to set for the forceTemporarySession property.
    */
    public function setForceTemporarySession(?bool $value ): void {
        $this->forceTemporarySession = $value;
    }

    /**
     * Sets the homeButtonScreenDisabled property value. Indicates if home button sensitivity screen is disabled
     *  @param bool|null $value Value to set for the homeButtonScreenDisabled property.
    */
    public function setHomeButtonScreenDisabled(?bool $value ): void {
        $this->homeButtonScreenDisabled = $value;
    }

    /**
     * Sets the iMessageAndFaceTimeScreenDisabled property value. Indicates if iMessage and FaceTime screen is disabled
     *  @param bool|null $value Value to set for the iMessageAndFaceTimeScreenDisabled property.
    */
    public function setIMessageAndFaceTimeScreenDisabled(?bool $value ): void {
        $this->iMessageAndFaceTimeScreenDisabled = $value;
    }

    /**
     * Sets the iTunesPairingMode property value. Indicates the iTunes pairing mode. Possible values are: disallow, allow, requiresCertificate.
     *  @param ITunesPairingMode|null $value Value to set for the iTunesPairingMode property.
    */
    public function setITunesPairingMode(?ITunesPairingMode $value ): void {
        $this->iTunesPairingMode = $value;
    }

    /**
     * Sets the managementCertificates property value. Management certificates for Apple Configurator
     *  @param array<ManagementCertificateWithThumbprint>|null $value Value to set for the managementCertificates property.
    */
    public function setManagementCertificates(?array $value ): void {
        $this->managementCertificates = $value;
    }

    /**
     * Sets the onBoardingScreenDisabled property value. Indicates if onboarding setup screen is disabled
     *  @param bool|null $value Value to set for the onBoardingScreenDisabled property.
    */
    public function setOnBoardingScreenDisabled(?bool $value ): void {
        $this->onBoardingScreenDisabled = $value;
    }

    /**
     * Sets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     *  @param bool|null $value Value to set for the passCodeDisabled property.
    */
    public function setPassCodeDisabled(?bool $value ): void {
        $this->passCodeDisabled = $value;
    }

    /**
     * Sets the passcodeLockGracePeriodInSeconds property value. Indicates timeout before locked screen requires the user to enter the device passocde to unlock it
     *  @param int|null $value Value to set for the passcodeLockGracePeriodInSeconds property.
    */
    public function setPasscodeLockGracePeriodInSeconds(?int $value ): void {
        $this->passcodeLockGracePeriodInSeconds = $value;
    }

    /**
     * Sets the preferredLanguageScreenDisabled property value. Indicates if Preferred language screen is disabled
     *  @param bool|null $value Value to set for the preferredLanguageScreenDisabled property.
    */
    public function setPreferredLanguageScreenDisabled(?bool $value ): void {
        $this->preferredLanguageScreenDisabled = $value;
    }

    /**
     * Sets the restoreCompletedScreenDisabled property value. Indicates if Weclome screen is disabled
     *  @param bool|null $value Value to set for the restoreCompletedScreenDisabled property.
    */
    public function setRestoreCompletedScreenDisabled(?bool $value ): void {
        $this->restoreCompletedScreenDisabled = $value;
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
     * Sets the simSetupScreenDisabled property value. Indicates if the SIMSetup screen is disabled
     *  @param bool|null $value Value to set for the simSetupScreenDisabled property.
    */
    public function setSimSetupScreenDisabled(?bool $value ): void {
        $this->simSetupScreenDisabled = $value;
    }

    /**
     * Sets the softwareUpdateScreenDisabled property value. Indicates if the mandatory sofware update screen is disabled
     *  @param bool|null $value Value to set for the softwareUpdateScreenDisabled property.
    */
    public function setSoftwareUpdateScreenDisabled(?bool $value ): void {
        $this->softwareUpdateScreenDisabled = $value;
    }

    /**
     * Sets the temporarySessionTimeoutInSeconds property value. Indicates timeout of temporary session
     *  @param int|null $value Value to set for the temporarySessionTimeoutInSeconds property.
    */
    public function setTemporarySessionTimeoutInSeconds(?int $value ): void {
        $this->temporarySessionTimeoutInSeconds = $value;
    }

    /**
     * Sets the updateCompleteScreenDisabled property value. Indicates if Weclome screen is disabled
     *  @param bool|null $value Value to set for the updateCompleteScreenDisabled property.
    */
    public function setUpdateCompleteScreenDisabled(?bool $value ): void {
        $this->updateCompleteScreenDisabled = $value;
    }

    /**
     * Sets the userlessSharedAadModeEnabled property value. Indicates that this apple device is designated to support 'shared device mode' scenarios. This is distinct from the 'shared iPad' scenario. See https://docs.microsoft.com/mem/intune/enrollment/device-enrollment-shared-ios
     *  @param bool|null $value Value to set for the userlessSharedAadModeEnabled property.
    */
    public function setUserlessSharedAadModeEnabled(?bool $value ): void {
        $this->userlessSharedAadModeEnabled = $value;
    }

    /**
     * Sets the userSessionTimeoutInSeconds property value. Indicates timeout of temporary session
     *  @param int|null $value Value to set for the userSessionTimeoutInSeconds property.
    */
    public function setUserSessionTimeoutInSeconds(?int $value ): void {
        $this->userSessionTimeoutInSeconds = $value;
    }

    /**
     * Sets the watchMigrationScreenDisabled property value. Indicates if the watch migration screen is disabled
     *  @param bool|null $value Value to set for the watchMigrationScreenDisabled property.
    */
    public function setWatchMigrationScreenDisabled(?bool $value ): void {
        $this->watchMigrationScreenDisabled = $value;
    }

    /**
     * Sets the welcomeScreenDisabled property value. Indicates if Weclome screen is disabled
     *  @param bool|null $value Value to set for the welcomeScreenDisabled property.
    */
    public function setWelcomeScreenDisabled(?bool $value ): void {
        $this->welcomeScreenDisabled = $value;
    }

    /**
     * Sets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     *  @param bool|null $value Value to set for the zoomDisabled property.
    */
    public function setZoomDisabled(?bool $value ): void {
        $this->zoomDisabled = $value;
    }

}
