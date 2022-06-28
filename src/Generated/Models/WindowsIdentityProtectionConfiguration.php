<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsIdentityProtectionConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $enhancedAntiSpoofingForFacialFeaturesEnabled Boolean value used to enable enhanced anti-spoofing for facial feature recognition on Windows Hello face authentication.
    */
    private ?bool $enhancedAntiSpoofingForFacialFeaturesEnabled = null;
    
    /**
     * @var int|null $pinExpirationInDays Integer value specifies the period (in days) that a PIN can be used before the system requires the user to change it. Valid values are 0 to 730 inclusive. Valid values 0 to 730
    */
    private ?int $pinExpirationInDays = null;
    
    /**
     * @var ConfigurationUsage|null $pinLowercaseCharactersUsage This value configures the use of lowercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
    */
    private ?ConfigurationUsage $pinLowercaseCharactersUsage = null;
    
    /**
     * @var int|null $pinMaximumLength Integer value that sets the maximum number of characters allowed for the work PIN. Valid values are 4 to 127 inclusive and greater than or equal to the value set for the minimum PIN. Valid values 4 to 127
    */
    private ?int $pinMaximumLength = null;
    
    /**
     * @var int|null $pinMinimumLength Integer value that sets the minimum number of characters required for the Windows Hello for Business PIN. Valid values are 4 to 127 inclusive and less than or equal to the value set for the maximum PIN. Valid values 4 to 127
    */
    private ?int $pinMinimumLength = null;
    
    /**
     * @var int|null $pinPreviousBlockCount Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset. Valid values 0 to 50
    */
    private ?int $pinPreviousBlockCount = null;
    
    /**
     * @var bool|null $pinRecoveryEnabled Boolean value that enables a user to change their PIN by using the Windows Hello for Business PIN recovery service.
    */
    private ?bool $pinRecoveryEnabled = null;
    
    /**
     * @var ConfigurationUsage|null $pinSpecialCharactersUsage Controls the ability to use special characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
    */
    private ?ConfigurationUsage $pinSpecialCharactersUsage = null;
    
    /**
     * @var ConfigurationUsage|null $pinUppercaseCharactersUsage This value configures the use of uppercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
    */
    private ?ConfigurationUsage $pinUppercaseCharactersUsage = null;
    
    /**
     * @var bool|null $securityDeviceRequired Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
    */
    private ?bool $securityDeviceRequired = null;
    
    /**
     * @var bool|null $unlockWithBiometricsEnabled Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
    */
    private ?bool $unlockWithBiometricsEnabled = null;
    
    /**
     * @var bool|null $useCertificatesForOnPremisesAuthEnabled Boolean value that enables Windows Hello for Business to use certificates to authenticate on-premise resources.
    */
    private ?bool $useCertificatesForOnPremisesAuthEnabled = null;
    
    /**
     * @var bool|null $useSecurityKeyForSignin Boolean value used to enable the Windows Hello security key as a logon credential.
    */
    private ?bool $useSecurityKeyForSignin = null;
    
    /**
     * @var bool|null $windowsHelloForBusinessBlocked Boolean value that blocks Windows Hello for Business as a method for signing into Windows.
    */
    private ?bool $windowsHelloForBusinessBlocked = null;
    
    /**
     * Instantiates a new WindowsIdentityProtectionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsIdentityProtectionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsIdentityProtectionConfiguration {
        return new WindowsIdentityProtectionConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enhancedAntiSpoofingForFacialFeaturesEnabled property value. Boolean value used to enable enhanced anti-spoofing for facial feature recognition on Windows Hello face authentication.
     * @return bool|null
    */
    public function getEnhancedAntiSpoofingForFacialFeaturesEnabled(): ?bool {
        return $this->enhancedAntiSpoofingForFacialFeaturesEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enhancedAntiSpoofingForFacialFeaturesEnabled' => function (ParseNode $n) use ($o) { $o->setEnhancedAntiSpoofingForFacialFeaturesEnabled($n->getBooleanValue()); },
            'pinExpirationInDays' => function (ParseNode $n) use ($o) { $o->setPinExpirationInDays($n->getIntegerValue()); },
            'pinLowercaseCharactersUsage' => function (ParseNode $n) use ($o) { $o->setPinLowercaseCharactersUsage($n->getEnumValue(ConfigurationUsage::class)); },
            'pinMaximumLength' => function (ParseNode $n) use ($o) { $o->setPinMaximumLength($n->getIntegerValue()); },
            'pinMinimumLength' => function (ParseNode $n) use ($o) { $o->setPinMinimumLength($n->getIntegerValue()); },
            'pinPreviousBlockCount' => function (ParseNode $n) use ($o) { $o->setPinPreviousBlockCount($n->getIntegerValue()); },
            'pinRecoveryEnabled' => function (ParseNode $n) use ($o) { $o->setPinRecoveryEnabled($n->getBooleanValue()); },
            'pinSpecialCharactersUsage' => function (ParseNode $n) use ($o) { $o->setPinSpecialCharactersUsage($n->getEnumValue(ConfigurationUsage::class)); },
            'pinUppercaseCharactersUsage' => function (ParseNode $n) use ($o) { $o->setPinUppercaseCharactersUsage($n->getEnumValue(ConfigurationUsage::class)); },
            'securityDeviceRequired' => function (ParseNode $n) use ($o) { $o->setSecurityDeviceRequired($n->getBooleanValue()); },
            'unlockWithBiometricsEnabled' => function (ParseNode $n) use ($o) { $o->setUnlockWithBiometricsEnabled($n->getBooleanValue()); },
            'useCertificatesForOnPremisesAuthEnabled' => function (ParseNode $n) use ($o) { $o->setUseCertificatesForOnPremisesAuthEnabled($n->getBooleanValue()); },
            'useSecurityKeyForSignin' => function (ParseNode $n) use ($o) { $o->setUseSecurityKeyForSignin($n->getBooleanValue()); },
            'windowsHelloForBusinessBlocked' => function (ParseNode $n) use ($o) { $o->setWindowsHelloForBusinessBlocked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the pinExpirationInDays property value. Integer value specifies the period (in days) that a PIN can be used before the system requires the user to change it. Valid values are 0 to 730 inclusive. Valid values 0 to 730
     * @return int|null
    */
    public function getPinExpirationInDays(): ?int {
        return $this->pinExpirationInDays;
    }

    /**
     * Gets the pinLowercaseCharactersUsage property value. This value configures the use of lowercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
     * @return ConfigurationUsage|null
    */
    public function getPinLowercaseCharactersUsage(): ?ConfigurationUsage {
        return $this->pinLowercaseCharactersUsage;
    }

    /**
     * Gets the pinMaximumLength property value. Integer value that sets the maximum number of characters allowed for the work PIN. Valid values are 4 to 127 inclusive and greater than or equal to the value set for the minimum PIN. Valid values 4 to 127
     * @return int|null
    */
    public function getPinMaximumLength(): ?int {
        return $this->pinMaximumLength;
    }

    /**
     * Gets the pinMinimumLength property value. Integer value that sets the minimum number of characters required for the Windows Hello for Business PIN. Valid values are 4 to 127 inclusive and less than or equal to the value set for the maximum PIN. Valid values 4 to 127
     * @return int|null
    */
    public function getPinMinimumLength(): ?int {
        return $this->pinMinimumLength;
    }

    /**
     * Gets the pinPreviousBlockCount property value. Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset. Valid values 0 to 50
     * @return int|null
    */
    public function getPinPreviousBlockCount(): ?int {
        return $this->pinPreviousBlockCount;
    }

    /**
     * Gets the pinRecoveryEnabled property value. Boolean value that enables a user to change their PIN by using the Windows Hello for Business PIN recovery service.
     * @return bool|null
    */
    public function getPinRecoveryEnabled(): ?bool {
        return $this->pinRecoveryEnabled;
    }

    /**
     * Gets the pinSpecialCharactersUsage property value. Controls the ability to use special characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
     * @return ConfigurationUsage|null
    */
    public function getPinSpecialCharactersUsage(): ?ConfigurationUsage {
        return $this->pinSpecialCharactersUsage;
    }

    /**
     * Gets the pinUppercaseCharactersUsage property value. This value configures the use of uppercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
     * @return ConfigurationUsage|null
    */
    public function getPinUppercaseCharactersUsage(): ?ConfigurationUsage {
        return $this->pinUppercaseCharactersUsage;
    }

    /**
     * Gets the securityDeviceRequired property value. Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
     * @return bool|null
    */
    public function getSecurityDeviceRequired(): ?bool {
        return $this->securityDeviceRequired;
    }

    /**
     * Gets the unlockWithBiometricsEnabled property value. Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
     * @return bool|null
    */
    public function getUnlockWithBiometricsEnabled(): ?bool {
        return $this->unlockWithBiometricsEnabled;
    }

    /**
     * Gets the useCertificatesForOnPremisesAuthEnabled property value. Boolean value that enables Windows Hello for Business to use certificates to authenticate on-premise resources.
     * @return bool|null
    */
    public function getUseCertificatesForOnPremisesAuthEnabled(): ?bool {
        return $this->useCertificatesForOnPremisesAuthEnabled;
    }

    /**
     * Gets the useSecurityKeyForSignin property value. Boolean value used to enable the Windows Hello security key as a logon credential.
     * @return bool|null
    */
    public function getUseSecurityKeyForSignin(): ?bool {
        return $this->useSecurityKeyForSignin;
    }

    /**
     * Gets the windowsHelloForBusinessBlocked property value. Boolean value that blocks Windows Hello for Business as a method for signing into Windows.
     * @return bool|null
    */
    public function getWindowsHelloForBusinessBlocked(): ?bool {
        return $this->windowsHelloForBusinessBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enhancedAntiSpoofingForFacialFeaturesEnabled', $this->enhancedAntiSpoofingForFacialFeaturesEnabled);
        $writer->writeIntegerValue('pinExpirationInDays', $this->pinExpirationInDays);
        $writer->writeEnumValue('pinLowercaseCharactersUsage', $this->pinLowercaseCharactersUsage);
        $writer->writeIntegerValue('pinMaximumLength', $this->pinMaximumLength);
        $writer->writeIntegerValue('pinMinimumLength', $this->pinMinimumLength);
        $writer->writeIntegerValue('pinPreviousBlockCount', $this->pinPreviousBlockCount);
        $writer->writeBooleanValue('pinRecoveryEnabled', $this->pinRecoveryEnabled);
        $writer->writeEnumValue('pinSpecialCharactersUsage', $this->pinSpecialCharactersUsage);
        $writer->writeEnumValue('pinUppercaseCharactersUsage', $this->pinUppercaseCharactersUsage);
        $writer->writeBooleanValue('securityDeviceRequired', $this->securityDeviceRequired);
        $writer->writeBooleanValue('unlockWithBiometricsEnabled', $this->unlockWithBiometricsEnabled);
        $writer->writeBooleanValue('useCertificatesForOnPremisesAuthEnabled', $this->useCertificatesForOnPremisesAuthEnabled);
        $writer->writeBooleanValue('useSecurityKeyForSignin', $this->useSecurityKeyForSignin);
        $writer->writeBooleanValue('windowsHelloForBusinessBlocked', $this->windowsHelloForBusinessBlocked);
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
     * Sets the enhancedAntiSpoofingForFacialFeaturesEnabled property value. Boolean value used to enable enhanced anti-spoofing for facial feature recognition on Windows Hello face authentication.
     *  @param bool|null $value Value to set for the enhancedAntiSpoofingForFacialFeaturesEnabled property.
    */
    public function setEnhancedAntiSpoofingForFacialFeaturesEnabled(?bool $value ): void {
        $this->enhancedAntiSpoofingForFacialFeaturesEnabled = $value;
    }

    /**
     * Sets the pinExpirationInDays property value. Integer value specifies the period (in days) that a PIN can be used before the system requires the user to change it. Valid values are 0 to 730 inclusive. Valid values 0 to 730
     *  @param int|null $value Value to set for the pinExpirationInDays property.
    */
    public function setPinExpirationInDays(?int $value ): void {
        $this->pinExpirationInDays = $value;
    }

    /**
     * Sets the pinLowercaseCharactersUsage property value. This value configures the use of lowercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
     *  @param ConfigurationUsage|null $value Value to set for the pinLowercaseCharactersUsage property.
    */
    public function setPinLowercaseCharactersUsage(?ConfigurationUsage $value ): void {
        $this->pinLowercaseCharactersUsage = $value;
    }

    /**
     * Sets the pinMaximumLength property value. Integer value that sets the maximum number of characters allowed for the work PIN. Valid values are 4 to 127 inclusive and greater than or equal to the value set for the minimum PIN. Valid values 4 to 127
     *  @param int|null $value Value to set for the pinMaximumLength property.
    */
    public function setPinMaximumLength(?int $value ): void {
        $this->pinMaximumLength = $value;
    }

    /**
     * Sets the pinMinimumLength property value. Integer value that sets the minimum number of characters required for the Windows Hello for Business PIN. Valid values are 4 to 127 inclusive and less than or equal to the value set for the maximum PIN. Valid values 4 to 127
     *  @param int|null $value Value to set for the pinMinimumLength property.
    */
    public function setPinMinimumLength(?int $value ): void {
        $this->pinMinimumLength = $value;
    }

    /**
     * Sets the pinPreviousBlockCount property value. Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset. Valid values 0 to 50
     *  @param int|null $value Value to set for the pinPreviousBlockCount property.
    */
    public function setPinPreviousBlockCount(?int $value ): void {
        $this->pinPreviousBlockCount = $value;
    }

    /**
     * Sets the pinRecoveryEnabled property value. Boolean value that enables a user to change their PIN by using the Windows Hello for Business PIN recovery service.
     *  @param bool|null $value Value to set for the pinRecoveryEnabled property.
    */
    public function setPinRecoveryEnabled(?bool $value ): void {
        $this->pinRecoveryEnabled = $value;
    }

    /**
     * Sets the pinSpecialCharactersUsage property value. Controls the ability to use special characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
     *  @param ConfigurationUsage|null $value Value to set for the pinSpecialCharactersUsage property.
    */
    public function setPinSpecialCharactersUsage(?ConfigurationUsage $value ): void {
        $this->pinSpecialCharactersUsage = $value;
    }

    /**
     * Sets the pinUppercaseCharactersUsage property value. This value configures the use of uppercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
     *  @param ConfigurationUsage|null $value Value to set for the pinUppercaseCharactersUsage property.
    */
    public function setPinUppercaseCharactersUsage(?ConfigurationUsage $value ): void {
        $this->pinUppercaseCharactersUsage = $value;
    }

    /**
     * Sets the securityDeviceRequired property value. Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
     *  @param bool|null $value Value to set for the securityDeviceRequired property.
    */
    public function setSecurityDeviceRequired(?bool $value ): void {
        $this->securityDeviceRequired = $value;
    }

    /**
     * Sets the unlockWithBiometricsEnabled property value. Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
     *  @param bool|null $value Value to set for the unlockWithBiometricsEnabled property.
    */
    public function setUnlockWithBiometricsEnabled(?bool $value ): void {
        $this->unlockWithBiometricsEnabled = $value;
    }

    /**
     * Sets the useCertificatesForOnPremisesAuthEnabled property value. Boolean value that enables Windows Hello for Business to use certificates to authenticate on-premise resources.
     *  @param bool|null $value Value to set for the useCertificatesForOnPremisesAuthEnabled property.
    */
    public function setUseCertificatesForOnPremisesAuthEnabled(?bool $value ): void {
        $this->useCertificatesForOnPremisesAuthEnabled = $value;
    }

    /**
     * Sets the useSecurityKeyForSignin property value. Boolean value used to enable the Windows Hello security key as a logon credential.
     *  @param bool|null $value Value to set for the useSecurityKeyForSignin property.
    */
    public function setUseSecurityKeyForSignin(?bool $value ): void {
        $this->useSecurityKeyForSignin = $value;
    }

    /**
     * Sets the windowsHelloForBusinessBlocked property value. Boolean value that blocks Windows Hello for Business as a method for signing into Windows.
     *  @param bool|null $value Value to set for the windowsHelloForBusinessBlocked property.
    */
    public function setWindowsHelloForBusinessBlocked(?bool $value ): void {
        $this->windowsHelloForBusinessBlocked = $value;
    }

}
