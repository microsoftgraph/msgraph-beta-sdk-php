<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepEnrollmentBaseProfile extends EnrollmentProfile implements Parsable 
{
    /**
     * Instantiates a new DepEnrollmentBaseProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.depEnrollmentBaseProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepEnrollmentBaseProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DepEnrollmentBaseProfile {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.depIOSEnrollmentProfile': return new DepIOSEnrollmentProfile();
                case '#microsoft.graph.depMacOSEnrollmentProfile': return new DepMacOSEnrollmentProfile();
            }
        }
        return new DepEnrollmentBaseProfile();
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
     * Gets the configurationWebUrl property value. URL for setup assistant login
     * @return bool|null
    */
    public function getConfigurationWebUrl(): ?bool {
        return $this->getBackingStore()->get('configurationWebUrl');
    }

    /**
     * Gets the deviceNameTemplate property value. Sets a literal or name pattern.
     * @return string|null
    */
    public function getDeviceNameTemplate(): ?string {
        return $this->getBackingStore()->get('deviceNameTemplate');
    }

    /**
     * Gets the diagnosticsDisabled property value. Indicates if diagnostics setup pane is disabled
     * @return bool|null
    */
    public function getDiagnosticsDisabled(): ?bool {
        return $this->getBackingStore()->get('diagnosticsDisabled');
    }

    /**
     * Gets the displayToneSetupDisabled property value. Indicates if displaytone setup screen is disabled
     * @return bool|null
    */
    public function getDisplayToneSetupDisabled(): ?bool {
        return $this->getBackingStore()->get('displayToneSetupDisabled');
    }

    /**
     * Gets the enabledSkipKeys property value. enabledSkipKeys contains all the enabled skip keys as strings
     * @return array<string>|null
    */
    public function getEnabledSkipKeys(): ?array {
        return $this->getBackingStore()->get('enabledSkipKeys');
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
            'configurationWebUrl' => fn(ParseNode $n) => $o->setConfigurationWebUrl($n->getBooleanValue()),
            'deviceNameTemplate' => fn(ParseNode $n) => $o->setDeviceNameTemplate($n->getStringValue()),
            'diagnosticsDisabled' => fn(ParseNode $n) => $o->setDiagnosticsDisabled($n->getBooleanValue()),
            'displayToneSetupDisabled' => fn(ParseNode $n) => $o->setDisplayToneSetupDisabled($n->getBooleanValue()),
            'enabledSkipKeys' => fn(ParseNode $n) => $o->setEnabledSkipKeys($n->getCollectionOfPrimitiveValues()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'isMandatory' => fn(ParseNode $n) => $o->setIsMandatory($n->getBooleanValue()),
            'locationDisabled' => fn(ParseNode $n) => $o->setLocationDisabled($n->getBooleanValue()),
            'privacyPaneDisabled' => fn(ParseNode $n) => $o->setPrivacyPaneDisabled($n->getBooleanValue()),
            'profileRemovalDisabled' => fn(ParseNode $n) => $o->setProfileRemovalDisabled($n->getBooleanValue()),
            'restoreBlocked' => fn(ParseNode $n) => $o->setRestoreBlocked($n->getBooleanValue()),
            'screenTimeScreenDisabled' => fn(ParseNode $n) => $o->setScreenTimeScreenDisabled($n->getBooleanValue()),
            'siriDisabled' => fn(ParseNode $n) => $o->setSiriDisabled($n->getBooleanValue()),
            'supervisedModeEnabled' => fn(ParseNode $n) => $o->setSupervisedModeEnabled($n->getBooleanValue()),
            'supportDepartment' => fn(ParseNode $n) => $o->setSupportDepartment($n->getStringValue()),
            'supportPhoneNumber' => fn(ParseNode $n) => $o->setSupportPhoneNumber($n->getStringValue()),
            'termsAndConditionsDisabled' => fn(ParseNode $n) => $o->setTermsAndConditionsDisabled($n->getBooleanValue()),
            'touchIdDisabled' => fn(ParseNode $n) => $o->setTouchIdDisabled($n->getBooleanValue()),
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
     * Gets the locationDisabled property value. Indicates if Location service setup pane is disabled
     * @return bool|null
    */
    public function getLocationDisabled(): ?bool {
        return $this->getBackingStore()->get('locationDisabled');
    }

    /**
     * Gets the privacyPaneDisabled property value. Indicates if privacy screen is disabled
     * @return bool|null
    */
    public function getPrivacyPaneDisabled(): ?bool {
        return $this->getBackingStore()->get('privacyPaneDisabled');
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
     * Gets the screenTimeScreenDisabled property value. Indicates if screen timeout setup is disabled
     * @return bool|null
    */
    public function getScreenTimeScreenDisabled(): ?bool {
        return $this->getBackingStore()->get('screenTimeScreenDisabled');
    }

    /**
     * Gets the siriDisabled property value. Indicates if siri setup pane is disabled
     * @return bool|null
    */
    public function getSiriDisabled(): ?bool {
        return $this->getBackingStore()->get('siriDisabled');
    }

    /**
     * Gets the supervisedModeEnabled property value. Supervised mode, True to enable, false otherwise. See hhttps://learn.microsoft.com/mem/intune/enrollment/device-enrollment for additional information.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appleIdDisabled', $this->getAppleIdDisabled());
        $writer->writeBooleanValue('applePayDisabled', $this->getApplePayDisabled());
        $writer->writeBooleanValue('configurationWebUrl', $this->getConfigurationWebUrl());
        $writer->writeStringValue('deviceNameTemplate', $this->getDeviceNameTemplate());
        $writer->writeBooleanValue('diagnosticsDisabled', $this->getDiagnosticsDisabled());
        $writer->writeBooleanValue('displayToneSetupDisabled', $this->getDisplayToneSetupDisabled());
        $writer->writeCollectionOfPrimitiveValues('enabledSkipKeys', $this->getEnabledSkipKeys());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeBooleanValue('isMandatory', $this->getIsMandatory());
        $writer->writeBooleanValue('locationDisabled', $this->getLocationDisabled());
        $writer->writeBooleanValue('privacyPaneDisabled', $this->getPrivacyPaneDisabled());
        $writer->writeBooleanValue('profileRemovalDisabled', $this->getProfileRemovalDisabled());
        $writer->writeBooleanValue('restoreBlocked', $this->getRestoreBlocked());
        $writer->writeBooleanValue('screenTimeScreenDisabled', $this->getScreenTimeScreenDisabled());
        $writer->writeBooleanValue('siriDisabled', $this->getSiriDisabled());
        $writer->writeBooleanValue('supervisedModeEnabled', $this->getSupervisedModeEnabled());
        $writer->writeStringValue('supportDepartment', $this->getSupportDepartment());
        $writer->writeStringValue('supportPhoneNumber', $this->getSupportPhoneNumber());
        $writer->writeBooleanValue('termsAndConditionsDisabled', $this->getTermsAndConditionsDisabled());
        $writer->writeBooleanValue('touchIdDisabled', $this->getTouchIdDisabled());
    }

    /**
     * Sets the appleIdDisabled property value. Indicates if Apple id setup pane is disabled
     * @param bool|null $value Value to set for the appleIdDisabled property.
    */
    public function setAppleIdDisabled(?bool $value): void {
        $this->getBackingStore()->set('appleIdDisabled', $value);
    }

    /**
     * Sets the applePayDisabled property value. Indicates if Apple pay setup pane is disabled
     * @param bool|null $value Value to set for the applePayDisabled property.
    */
    public function setApplePayDisabled(?bool $value): void {
        $this->getBackingStore()->set('applePayDisabled', $value);
    }

    /**
     * Sets the configurationWebUrl property value. URL for setup assistant login
     * @param bool|null $value Value to set for the configurationWebUrl property.
    */
    public function setConfigurationWebUrl(?bool $value): void {
        $this->getBackingStore()->set('configurationWebUrl', $value);
    }

    /**
     * Sets the deviceNameTemplate property value. Sets a literal or name pattern.
     * @param string|null $value Value to set for the deviceNameTemplate property.
    */
    public function setDeviceNameTemplate(?string $value): void {
        $this->getBackingStore()->set('deviceNameTemplate', $value);
    }

    /**
     * Sets the diagnosticsDisabled property value. Indicates if diagnostics setup pane is disabled
     * @param bool|null $value Value to set for the diagnosticsDisabled property.
    */
    public function setDiagnosticsDisabled(?bool $value): void {
        $this->getBackingStore()->set('diagnosticsDisabled', $value);
    }

    /**
     * Sets the displayToneSetupDisabled property value. Indicates if displaytone setup screen is disabled
     * @param bool|null $value Value to set for the displayToneSetupDisabled property.
    */
    public function setDisplayToneSetupDisabled(?bool $value): void {
        $this->getBackingStore()->set('displayToneSetupDisabled', $value);
    }

    /**
     * Sets the enabledSkipKeys property value. enabledSkipKeys contains all the enabled skip keys as strings
     * @param array<string>|null $value Value to set for the enabledSkipKeys property.
    */
    public function setEnabledSkipKeys(?array $value): void {
        $this->getBackingStore()->set('enabledSkipKeys', $value);
    }

    /**
     * Sets the isDefault property value. Indicates if this is the default profile
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the isMandatory property value. Indicates if the profile is mandatory
     * @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value): void {
        $this->getBackingStore()->set('isMandatory', $value);
    }

    /**
     * Sets the locationDisabled property value. Indicates if Location service setup pane is disabled
     * @param bool|null $value Value to set for the locationDisabled property.
    */
    public function setLocationDisabled(?bool $value): void {
        $this->getBackingStore()->set('locationDisabled', $value);
    }

    /**
     * Sets the privacyPaneDisabled property value. Indicates if privacy screen is disabled
     * @param bool|null $value Value to set for the privacyPaneDisabled property.
    */
    public function setPrivacyPaneDisabled(?bool $value): void {
        $this->getBackingStore()->set('privacyPaneDisabled', $value);
    }

    /**
     * Sets the profileRemovalDisabled property value. Indicates if the profile removal option is disabled
     * @param bool|null $value Value to set for the profileRemovalDisabled property.
    */
    public function setProfileRemovalDisabled(?bool $value): void {
        $this->getBackingStore()->set('profileRemovalDisabled', $value);
    }

    /**
     * Sets the restoreBlocked property value. Indicates if Restore setup pane is blocked
     * @param bool|null $value Value to set for the restoreBlocked property.
    */
    public function setRestoreBlocked(?bool $value): void {
        $this->getBackingStore()->set('restoreBlocked', $value);
    }

    /**
     * Sets the screenTimeScreenDisabled property value. Indicates if screen timeout setup is disabled
     * @param bool|null $value Value to set for the screenTimeScreenDisabled property.
    */
    public function setScreenTimeScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('screenTimeScreenDisabled', $value);
    }

    /**
     * Sets the siriDisabled property value. Indicates if siri setup pane is disabled
     * @param bool|null $value Value to set for the siriDisabled property.
    */
    public function setSiriDisabled(?bool $value): void {
        $this->getBackingStore()->set('siriDisabled', $value);
    }

    /**
     * Sets the supervisedModeEnabled property value. Supervised mode, True to enable, false otherwise. See hhttps://learn.microsoft.com/mem/intune/enrollment/device-enrollment for additional information.
     * @param bool|null $value Value to set for the supervisedModeEnabled property.
    */
    public function setSupervisedModeEnabled(?bool $value): void {
        $this->getBackingStore()->set('supervisedModeEnabled', $value);
    }

    /**
     * Sets the supportDepartment property value. Support department information
     * @param string|null $value Value to set for the supportDepartment property.
    */
    public function setSupportDepartment(?string $value): void {
        $this->getBackingStore()->set('supportDepartment', $value);
    }

    /**
     * Sets the supportPhoneNumber property value. Support phone number
     * @param string|null $value Value to set for the supportPhoneNumber property.
    */
    public function setSupportPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('supportPhoneNumber', $value);
    }

    /**
     * Sets the termsAndConditionsDisabled property value. Indicates if 'Terms and Conditions' setup pane is disabled
     * @param bool|null $value Value to set for the termsAndConditionsDisabled property.
    */
    public function setTermsAndConditionsDisabled(?bool $value): void {
        $this->getBackingStore()->set('termsAndConditionsDisabled', $value);
    }

    /**
     * Sets the touchIdDisabled property value. Indicates if touch id setup pane is disabled
     * @param bool|null $value Value to set for the touchIdDisabled property.
    */
    public function setTouchIdDisabled(?bool $value): void {
        $this->getBackingStore()->set('touchIdDisabled', $value);
    }

}
