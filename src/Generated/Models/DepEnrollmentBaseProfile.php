<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepEnrollmentBaseProfile extends EnrollmentProfile 
{
    /** @var bool|null $appleIdDisabled Indicates if Apple id setup pane is disabled */
    private ?bool $appleIdDisabled = null;
    
    /** @var bool|null $applePayDisabled Indicates if Apple pay setup pane is disabled */
    private ?bool $applePayDisabled = null;
    
    /** @var bool|null $configurationWebUrl URL for setup assistant login */
    private ?bool $configurationWebUrl = null;
    
    /** @var string|null $deviceNameTemplate Sets a literal or name pattern. */
    private ?string $deviceNameTemplate = null;
    
    /** @var bool|null $diagnosticsDisabled Indicates if diagnostics setup pane is disabled */
    private ?bool $diagnosticsDisabled = null;
    
    /** @var bool|null $displayToneSetupDisabled Indicates if displaytone setup screen is disabled */
    private ?bool $displayToneSetupDisabled = null;
    
    /** @var bool|null $isDefault Indicates if this is the default profile */
    private ?bool $isDefault = null;
    
    /** @var bool|null $isMandatory Indicates if the profile is mandatory */
    private ?bool $isMandatory = null;
    
    /** @var bool|null $locationDisabled Indicates if Location service setup pane is disabled */
    private ?bool $locationDisabled = null;
    
    /** @var bool|null $privacyPaneDisabled Indicates if privacy screen is disabled */
    private ?bool $privacyPaneDisabled = null;
    
    /** @var bool|null $profileRemovalDisabled Indicates if the profile removal option is disabled */
    private ?bool $profileRemovalDisabled = null;
    
    /** @var bool|null $restoreBlocked Indicates if Restore setup pane is blocked */
    private ?bool $restoreBlocked = null;
    
    /** @var bool|null $screenTimeScreenDisabled Indicates if screen timeout setup is disabled */
    private ?bool $screenTimeScreenDisabled = null;
    
    /** @var bool|null $siriDisabled Indicates if siri setup pane is disabled */
    private ?bool $siriDisabled = null;
    
    /** @var bool|null $supervisedModeEnabled Supervised mode, True to enable, false otherwise. See Enroll devices in Microsoft Intune for additional information. */
    private ?bool $supervisedModeEnabled = null;
    
    /** @var string|null $supportDepartment Support department information */
    private ?string $supportDepartment = null;
    
    /** @var string|null $supportPhoneNumber Support phone number */
    private ?string $supportPhoneNumber = null;
    
    /** @var bool|null $termsAndConditionsDisabled Indicates if 'Terms and Conditions' setup pane is disabled */
    private ?bool $termsAndConditionsDisabled = null;
    
    /** @var bool|null $touchIdDisabled Indicates if touch id setup pane is disabled */
    private ?bool $touchIdDisabled = null;
    
    /**
     * Instantiates a new depEnrollmentBaseProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepEnrollmentBaseProfile
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DepEnrollmentBaseProfile {
        return new DepEnrollmentBaseProfile();
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
     * Gets the configurationWebUrl property value. URL for setup assistant login
     * @return bool|null
    */
    public function getConfigurationWebUrl(): ?bool {
        return $this->configurationWebUrl;
    }

    /**
     * Gets the deviceNameTemplate property value. Sets a literal or name pattern.
     * @return string|null
    */
    public function getDeviceNameTemplate(): ?string {
        return $this->deviceNameTemplate;
    }

    /**
     * Gets the diagnosticsDisabled property value. Indicates if diagnostics setup pane is disabled
     * @return bool|null
    */
    public function getDiagnosticsDisabled(): ?bool {
        return $this->diagnosticsDisabled;
    }

    /**
     * Gets the displayToneSetupDisabled property value. Indicates if displaytone setup screen is disabled
     * @return bool|null
    */
    public function getDisplayToneSetupDisabled(): ?bool {
        return $this->displayToneSetupDisabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'appleIdDisabled' => function (self $o, ParseNode $n) { $o->setAppleIdDisabled($n->getBooleanValue()); },
            'applePayDisabled' => function (self $o, ParseNode $n) { $o->setApplePayDisabled($n->getBooleanValue()); },
            'configurationWebUrl' => function (self $o, ParseNode $n) { $o->setConfigurationWebUrl($n->getBooleanValue()); },
            'deviceNameTemplate' => function (self $o, ParseNode $n) { $o->setDeviceNameTemplate($n->getStringValue()); },
            'diagnosticsDisabled' => function (self $o, ParseNode $n) { $o->setDiagnosticsDisabled($n->getBooleanValue()); },
            'displayToneSetupDisabled' => function (self $o, ParseNode $n) { $o->setDisplayToneSetupDisabled($n->getBooleanValue()); },
            'isDefault' => function (self $o, ParseNode $n) { $o->setIsDefault($n->getBooleanValue()); },
            'isMandatory' => function (self $o, ParseNode $n) { $o->setIsMandatory($n->getBooleanValue()); },
            'locationDisabled' => function (self $o, ParseNode $n) { $o->setLocationDisabled($n->getBooleanValue()); },
            'privacyPaneDisabled' => function (self $o, ParseNode $n) { $o->setPrivacyPaneDisabled($n->getBooleanValue()); },
            'profileRemovalDisabled' => function (self $o, ParseNode $n) { $o->setProfileRemovalDisabled($n->getBooleanValue()); },
            'restoreBlocked' => function (self $o, ParseNode $n) { $o->setRestoreBlocked($n->getBooleanValue()); },
            'screenTimeScreenDisabled' => function (self $o, ParseNode $n) { $o->setScreenTimeScreenDisabled($n->getBooleanValue()); },
            'siriDisabled' => function (self $o, ParseNode $n) { $o->setSiriDisabled($n->getBooleanValue()); },
            'supervisedModeEnabled' => function (self $o, ParseNode $n) { $o->setSupervisedModeEnabled($n->getBooleanValue()); },
            'supportDepartment' => function (self $o, ParseNode $n) { $o->setSupportDepartment($n->getStringValue()); },
            'supportPhoneNumber' => function (self $o, ParseNode $n) { $o->setSupportPhoneNumber($n->getStringValue()); },
            'termsAndConditionsDisabled' => function (self $o, ParseNode $n) { $o->setTermsAndConditionsDisabled($n->getBooleanValue()); },
            'touchIdDisabled' => function (self $o, ParseNode $n) { $o->setTouchIdDisabled($n->getBooleanValue()); },
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
     * Gets the locationDisabled property value. Indicates if Location service setup pane is disabled
     * @return bool|null
    */
    public function getLocationDisabled(): ?bool {
        return $this->locationDisabled;
    }

    /**
     * Gets the privacyPaneDisabled property value. Indicates if privacy screen is disabled
     * @return bool|null
    */
    public function getPrivacyPaneDisabled(): ?bool {
        return $this->privacyPaneDisabled;
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
     * Gets the screenTimeScreenDisabled property value. Indicates if screen timeout setup is disabled
     * @return bool|null
    */
    public function getScreenTimeScreenDisabled(): ?bool {
        return $this->screenTimeScreenDisabled;
    }

    /**
     * Gets the siriDisabled property value. Indicates if siri setup pane is disabled
     * @return bool|null
    */
    public function getSiriDisabled(): ?bool {
        return $this->siriDisabled;
    }

    /**
     * Gets the supervisedModeEnabled property value. Supervised mode, True to enable, false otherwise. See Enroll devices in Microsoft Intune for additional information.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appleIdDisabled', $this->appleIdDisabled);
        $writer->writeBooleanValue('applePayDisabled', $this->applePayDisabled);
        $writer->writeBooleanValue('configurationWebUrl', $this->configurationWebUrl);
        $writer->writeStringValue('deviceNameTemplate', $this->deviceNameTemplate);
        $writer->writeBooleanValue('diagnosticsDisabled', $this->diagnosticsDisabled);
        $writer->writeBooleanValue('displayToneSetupDisabled', $this->displayToneSetupDisabled);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeBooleanValue('isMandatory', $this->isMandatory);
        $writer->writeBooleanValue('locationDisabled', $this->locationDisabled);
        $writer->writeBooleanValue('privacyPaneDisabled', $this->privacyPaneDisabled);
        $writer->writeBooleanValue('profileRemovalDisabled', $this->profileRemovalDisabled);
        $writer->writeBooleanValue('restoreBlocked', $this->restoreBlocked);
        $writer->writeBooleanValue('screenTimeScreenDisabled', $this->screenTimeScreenDisabled);
        $writer->writeBooleanValue('siriDisabled', $this->siriDisabled);
        $writer->writeBooleanValue('supervisedModeEnabled', $this->supervisedModeEnabled);
        $writer->writeStringValue('supportDepartment', $this->supportDepartment);
        $writer->writeStringValue('supportPhoneNumber', $this->supportPhoneNumber);
        $writer->writeBooleanValue('termsAndConditionsDisabled', $this->termsAndConditionsDisabled);
        $writer->writeBooleanValue('touchIdDisabled', $this->touchIdDisabled);
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
     * Sets the configurationWebUrl property value. URL for setup assistant login
     *  @param bool|null $value Value to set for the configurationWebUrl property.
    */
    public function setConfigurationWebUrl(?bool $value ): void {
        $this->configurationWebUrl = $value;
    }

    /**
     * Sets the deviceNameTemplate property value. Sets a literal or name pattern.
     *  @param string|null $value Value to set for the deviceNameTemplate property.
    */
    public function setDeviceNameTemplate(?string $value ): void {
        $this->deviceNameTemplate = $value;
    }

    /**
     * Sets the diagnosticsDisabled property value. Indicates if diagnostics setup pane is disabled
     *  @param bool|null $value Value to set for the diagnosticsDisabled property.
    */
    public function setDiagnosticsDisabled(?bool $value ): void {
        $this->diagnosticsDisabled = $value;
    }

    /**
     * Sets the displayToneSetupDisabled property value. Indicates if displaytone setup screen is disabled
     *  @param bool|null $value Value to set for the displayToneSetupDisabled property.
    */
    public function setDisplayToneSetupDisabled(?bool $value ): void {
        $this->displayToneSetupDisabled = $value;
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
     * Sets the locationDisabled property value. Indicates if Location service setup pane is disabled
     *  @param bool|null $value Value to set for the locationDisabled property.
    */
    public function setLocationDisabled(?bool $value ): void {
        $this->locationDisabled = $value;
    }

    /**
     * Sets the privacyPaneDisabled property value. Indicates if privacy screen is disabled
     *  @param bool|null $value Value to set for the privacyPaneDisabled property.
    */
    public function setPrivacyPaneDisabled(?bool $value ): void {
        $this->privacyPaneDisabled = $value;
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
     * Sets the screenTimeScreenDisabled property value. Indicates if screen timeout setup is disabled
     *  @param bool|null $value Value to set for the screenTimeScreenDisabled property.
    */
    public function setScreenTimeScreenDisabled(?bool $value ): void {
        $this->screenTimeScreenDisabled = $value;
    }

    /**
     * Sets the siriDisabled property value. Indicates if siri setup pane is disabled
     *  @param bool|null $value Value to set for the siriDisabled property.
    */
    public function setSiriDisabled(?bool $value ): void {
        $this->siriDisabled = $value;
    }

    /**
     * Sets the supervisedModeEnabled property value. Supervised mode, True to enable, false otherwise. See Enroll devices in Microsoft Intune for additional information.
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

}
