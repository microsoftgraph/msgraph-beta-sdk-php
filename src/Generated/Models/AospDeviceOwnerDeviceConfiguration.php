<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AospDeviceOwnerDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $appsBlockInstallFromUnknownSources Indicates whether or not the user is allowed to enable unknown sources setting. When set to true, user is not allowed to enable unknown sources settings.
    */
    private ?bool $appsBlockInstallFromUnknownSources = null;
    
    /**
     * @var bool|null $bluetoothBlockConfiguration Indicates whether or not to block a user from configuring bluetooth.
    */
    private ?bool $bluetoothBlockConfiguration = null;
    
    /**
     * @var bool|null $bluetoothBlocked Indicates whether or not to disable the use of bluetooth. When set to true, bluetooth cannot be enabled on the device.
    */
    private ?bool $bluetoothBlocked = null;
    
    /**
     * @var bool|null $cameraBlocked Indicates whether or not to disable the use of the camera.
    */
    private ?bool $cameraBlocked = null;
    
    /**
     * @var bool|null $factoryResetBlocked Indicates whether or not the factory reset option in settings is disabled.
    */
    private ?bool $factoryResetBlocked = null;
    
    /**
     * @var int|null $passwordMinimumLength Indicates the minimum length of the password required on the device. Valid values 4 to 16
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before the screen times out.
    */
    private ?int $passwordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var AndroidDeviceOwnerRequiredPasswordType|null $passwordRequiredType Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    */
    private ?AndroidDeviceOwnerRequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var int|null $passwordSignInFailureCountBeforeFactoryReset Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
    */
    private ?int $passwordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var bool|null $screenCaptureBlocked Indicates whether or not to disable the capability to take screenshots.
    */
    private ?bool $screenCaptureBlocked = null;
    
    /**
     * @var bool|null $securityAllowDebuggingFeatures Indicates whether or not to block the user from enabling debugging features on the device.
    */
    private ?bool $securityAllowDebuggingFeatures = null;
    
    /**
     * @var bool|null $storageBlockExternalMedia Indicates whether or not to block external media.
    */
    private ?bool $storageBlockExternalMedia = null;
    
    /**
     * @var bool|null $storageBlockUsbFileTransfer Indicates whether or not to block USB file transfer.
    */
    private ?bool $storageBlockUsbFileTransfer = null;
    
    /**
     * @var bool|null $wifiBlockEditConfigurations Indicates whether or not to block the user from editing the wifi connection settings.
    */
    private ?bool $wifiBlockEditConfigurations = null;
    
    /**
     * Instantiates a new AospDeviceOwnerDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.aospDeviceOwnerDeviceConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AospDeviceOwnerDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AospDeviceOwnerDeviceConfiguration {
        return new AospDeviceOwnerDeviceConfiguration();
    }

    /**
     * Gets the appsBlockInstallFromUnknownSources property value. Indicates whether or not the user is allowed to enable unknown sources setting. When set to true, user is not allowed to enable unknown sources settings.
     * @return bool|null
    */
    public function getAppsBlockInstallFromUnknownSources(): ?bool {
        return $this->appsBlockInstallFromUnknownSources;
    }

    /**
     * Gets the bluetoothBlockConfiguration property value. Indicates whether or not to block a user from configuring bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlockConfiguration(): ?bool {
        return $this->bluetoothBlockConfiguration;
    }

    /**
     * Gets the bluetoothBlocked property value. Indicates whether or not to disable the use of bluetooth. When set to true, bluetooth cannot be enabled on the device.
     * @return bool|null
    */
    public function getBluetoothBlocked(): ?bool {
        return $this->bluetoothBlocked;
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to disable the use of the camera.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->cameraBlocked;
    }

    /**
     * Gets the factoryResetBlocked property value. Indicates whether or not the factory reset option in settings is disabled.
     * @return bool|null
    */
    public function getFactoryResetBlocked(): ?bool {
        return $this->factoryResetBlocked;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appsBlockInstallFromUnknownSources' => fn(ParseNode $n) => $o->setAppsBlockInstallFromUnknownSources($n->getBooleanValue()),
            'bluetoothBlockConfiguration' => fn(ParseNode $n) => $o->setBluetoothBlockConfiguration($n->getBooleanValue()),
            'bluetoothBlocked' => fn(ParseNode $n) => $o->setBluetoothBlocked($n->getBooleanValue()),
            'cameraBlocked' => fn(ParseNode $n) => $o->setCameraBlocked($n->getBooleanValue()),
            'factoryResetBlocked' => fn(ParseNode $n) => $o->setFactoryResetBlocked($n->getBooleanValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordType::class)),
            'passwordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'securityAllowDebuggingFeatures' => fn(ParseNode $n) => $o->setSecurityAllowDebuggingFeatures($n->getBooleanValue()),
            'storageBlockExternalMedia' => fn(ParseNode $n) => $o->setStorageBlockExternalMedia($n->getBooleanValue()),
            'storageBlockUsbFileTransfer' => fn(ParseNode $n) => $o->setStorageBlockUsbFileTransfer($n->getBooleanValue()),
            'wifiBlockEditConfigurations' => fn(ParseNode $n) => $o->setWifiBlockEditConfigurations($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the passwordMinimumLength property value. Indicates the minimum length of the password required on the device. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passwordRequiredType property value. Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @return AndroidDeviceOwnerRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidDeviceOwnerRequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to disable the capability to take screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Gets the securityAllowDebuggingFeatures property value. Indicates whether or not to block the user from enabling debugging features on the device.
     * @return bool|null
    */
    public function getSecurityAllowDebuggingFeatures(): ?bool {
        return $this->securityAllowDebuggingFeatures;
    }

    /**
     * Gets the storageBlockExternalMedia property value. Indicates whether or not to block external media.
     * @return bool|null
    */
    public function getStorageBlockExternalMedia(): ?bool {
        return $this->storageBlockExternalMedia;
    }

    /**
     * Gets the storageBlockUsbFileTransfer property value. Indicates whether or not to block USB file transfer.
     * @return bool|null
    */
    public function getStorageBlockUsbFileTransfer(): ?bool {
        return $this->storageBlockUsbFileTransfer;
    }

    /**
     * Gets the wifiBlockEditConfigurations property value. Indicates whether or not to block the user from editing the wifi connection settings.
     * @return bool|null
    */
    public function getWifiBlockEditConfigurations(): ?bool {
        return $this->wifiBlockEditConfigurations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appsBlockInstallFromUnknownSources', $this->appsBlockInstallFromUnknownSources);
        $writer->writeBooleanValue('bluetoothBlockConfiguration', $this->bluetoothBlockConfiguration);
        $writer->writeBooleanValue('bluetoothBlocked', $this->bluetoothBlocked);
        $writer->writeBooleanValue('cameraBlocked', $this->cameraBlocked);
        $writer->writeBooleanValue('factoryResetBlocked', $this->factoryResetBlocked);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->passwordSignInFailureCountBeforeFactoryReset);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
        $writer->writeBooleanValue('securityAllowDebuggingFeatures', $this->securityAllowDebuggingFeatures);
        $writer->writeBooleanValue('storageBlockExternalMedia', $this->storageBlockExternalMedia);
        $writer->writeBooleanValue('storageBlockUsbFileTransfer', $this->storageBlockUsbFileTransfer);
        $writer->writeBooleanValue('wifiBlockEditConfigurations', $this->wifiBlockEditConfigurations);
    }

    /**
     * Sets the appsBlockInstallFromUnknownSources property value. Indicates whether or not the user is allowed to enable unknown sources setting. When set to true, user is not allowed to enable unknown sources settings.
     *  @param bool|null $value Value to set for the appsBlockInstallFromUnknownSources property.
    */
    public function setAppsBlockInstallFromUnknownSources(?bool $value ): void {
        $this->appsBlockInstallFromUnknownSources = $value;
    }

    /**
     * Sets the bluetoothBlockConfiguration property value. Indicates whether or not to block a user from configuring bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlockConfiguration property.
    */
    public function setBluetoothBlockConfiguration(?bool $value ): void {
        $this->bluetoothBlockConfiguration = $value;
    }

    /**
     * Sets the bluetoothBlocked property value. Indicates whether or not to disable the use of bluetooth. When set to true, bluetooth cannot be enabled on the device.
     *  @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value ): void {
        $this->bluetoothBlocked = $value;
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to disable the use of the camera.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value ): void {
        $this->cameraBlocked = $value;
    }

    /**
     * Sets the factoryResetBlocked property value. Indicates whether or not the factory reset option in settings is disabled.
     *  @param bool|null $value Value to set for the factoryResetBlocked property.
    */
    public function setFactoryResetBlocked(?bool $value ): void {
        $this->factoryResetBlocked = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Indicates the minimum length of the password required on the device. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     *  @param AndroidDeviceOwnerRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidDeviceOwnerRequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->passwordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to disable the capability to take screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

    /**
     * Sets the securityAllowDebuggingFeatures property value. Indicates whether or not to block the user from enabling debugging features on the device.
     *  @param bool|null $value Value to set for the securityAllowDebuggingFeatures property.
    */
    public function setSecurityAllowDebuggingFeatures(?bool $value ): void {
        $this->securityAllowDebuggingFeatures = $value;
    }

    /**
     * Sets the storageBlockExternalMedia property value. Indicates whether or not to block external media.
     *  @param bool|null $value Value to set for the storageBlockExternalMedia property.
    */
    public function setStorageBlockExternalMedia(?bool $value ): void {
        $this->storageBlockExternalMedia = $value;
    }

    /**
     * Sets the storageBlockUsbFileTransfer property value. Indicates whether or not to block USB file transfer.
     *  @param bool|null $value Value to set for the storageBlockUsbFileTransfer property.
    */
    public function setStorageBlockUsbFileTransfer(?bool $value ): void {
        $this->storageBlockUsbFileTransfer = $value;
    }

    /**
     * Sets the wifiBlockEditConfigurations property value. Indicates whether or not to block the user from editing the wifi connection settings.
     *  @param bool|null $value Value to set for the wifiBlockEditConfigurations property.
    */
    public function setWifiBlockEditConfigurations(?bool $value ): void {
        $this->wifiBlockEditConfigurations = $value;
    }

}
