<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This topic provides descriptions of the declared methods, properties and relationships exposed by the AndroidDeviceOwnerAOSPDeviceConfiguration resource.
*/
class AospDeviceOwnerDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new aospDeviceOwnerDeviceConfiguration and sets the default values.
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
        $val = $this->getBackingStore()->get('appsBlockInstallFromUnknownSources');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsBlockInstallFromUnknownSources'");
    }

    /**
     * Gets the bluetoothBlockConfiguration property value. Indicates whether or not to block a user from configuring bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlockConfiguration(): ?bool {
        $val = $this->getBackingStore()->get('bluetoothBlockConfiguration');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bluetoothBlockConfiguration'");
    }

    /**
     * Gets the bluetoothBlocked property value. Indicates whether or not to disable the use of bluetooth. When set to true, bluetooth cannot be enabled on the device.
     * @return bool|null
    */
    public function getBluetoothBlocked(): ?bool {
        $val = $this->getBackingStore()->get('bluetoothBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bluetoothBlocked'");
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to disable the use of the camera.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        $val = $this->getBackingStore()->get('cameraBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cameraBlocked'");
    }

    /**
     * Gets the factoryResetBlocked property value. Indicates whether or not the factory reset option in settings is disabled.
     * @return bool|null
    */
    public function getFactoryResetBlocked(): ?bool {
        $val = $this->getBackingStore()->get('factoryResetBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'factoryResetBlocked'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('passwordMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLength'");
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeScreenTimeout');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesOfInactivityBeforeScreenTimeout'");
    }

    /**
     * Gets the passwordRequiredType property value. Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @return AndroidDeviceOwnerRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidDeviceOwnerRequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof AndroidDeviceOwnerRequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        $val = $this->getBackingStore()->get('passwordSignInFailureCountBeforeFactoryReset');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordSignInFailureCountBeforeFactoryReset'");
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to disable the capability to take screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        $val = $this->getBackingStore()->get('screenCaptureBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'screenCaptureBlocked'");
    }

    /**
     * Gets the securityAllowDebuggingFeatures property value. Indicates whether or not to block the user from enabling debugging features on the device.
     * @return bool|null
    */
    public function getSecurityAllowDebuggingFeatures(): ?bool {
        $val = $this->getBackingStore()->get('securityAllowDebuggingFeatures');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityAllowDebuggingFeatures'");
    }

    /**
     * Gets the storageBlockExternalMedia property value. Indicates whether or not to block external media.
     * @return bool|null
    */
    public function getStorageBlockExternalMedia(): ?bool {
        $val = $this->getBackingStore()->get('storageBlockExternalMedia');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageBlockExternalMedia'");
    }

    /**
     * Gets the storageBlockUsbFileTransfer property value. Indicates whether or not to block USB file transfer.
     * @return bool|null
    */
    public function getStorageBlockUsbFileTransfer(): ?bool {
        $val = $this->getBackingStore()->get('storageBlockUsbFileTransfer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageBlockUsbFileTransfer'");
    }

    /**
     * Gets the wifiBlockEditConfigurations property value. Indicates whether or not to block the user from editing the wifi connection settings.
     * @return bool|null
    */
    public function getWifiBlockEditConfigurations(): ?bool {
        $val = $this->getBackingStore()->get('wifiBlockEditConfigurations');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiBlockEditConfigurations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appsBlockInstallFromUnknownSources', $this->getAppsBlockInstallFromUnknownSources());
        $writer->writeBooleanValue('bluetoothBlockConfiguration', $this->getBluetoothBlockConfiguration());
        $writer->writeBooleanValue('bluetoothBlocked', $this->getBluetoothBlocked());
        $writer->writeBooleanValue('cameraBlocked', $this->getCameraBlocked());
        $writer->writeBooleanValue('factoryResetBlocked', $this->getFactoryResetBlocked());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->getPasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeBooleanValue('securityAllowDebuggingFeatures', $this->getSecurityAllowDebuggingFeatures());
        $writer->writeBooleanValue('storageBlockExternalMedia', $this->getStorageBlockExternalMedia());
        $writer->writeBooleanValue('storageBlockUsbFileTransfer', $this->getStorageBlockUsbFileTransfer());
        $writer->writeBooleanValue('wifiBlockEditConfigurations', $this->getWifiBlockEditConfigurations());
    }

    /**
     * Sets the appsBlockInstallFromUnknownSources property value. Indicates whether or not the user is allowed to enable unknown sources setting. When set to true, user is not allowed to enable unknown sources settings.
     * @param bool|null $value Value to set for the appsBlockInstallFromUnknownSources property.
    */
    public function setAppsBlockInstallFromUnknownSources(?bool $value): void {
        $this->getBackingStore()->set('appsBlockInstallFromUnknownSources', $value);
    }

    /**
     * Sets the bluetoothBlockConfiguration property value. Indicates whether or not to block a user from configuring bluetooth.
     * @param bool|null $value Value to set for the bluetoothBlockConfiguration property.
    */
    public function setBluetoothBlockConfiguration(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockConfiguration', $value);
    }

    /**
     * Sets the bluetoothBlocked property value. Indicates whether or not to disable the use of bluetooth. When set to true, bluetooth cannot be enabled on the device.
     * @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlocked', $value);
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to disable the use of the camera.
     * @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value): void {
        $this->getBackingStore()->set('cameraBlocked', $value);
    }

    /**
     * Sets the factoryResetBlocked property value. Indicates whether or not the factory reset option in settings is disabled.
     * @param bool|null $value Value to set for the factoryResetBlocked property.
    */
    public function setFactoryResetBlocked(?bool $value): void {
        $this->getBackingStore()->set('factoryResetBlocked', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Indicates the minimum length of the password required on the device. Valid values 4 to 16
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @param AndroidDeviceOwnerRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidDeviceOwnerRequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
     * @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('passwordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to disable the capability to take screenshots.
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the securityAllowDebuggingFeatures property value. Indicates whether or not to block the user from enabling debugging features on the device.
     * @param bool|null $value Value to set for the securityAllowDebuggingFeatures property.
    */
    public function setSecurityAllowDebuggingFeatures(?bool $value): void {
        $this->getBackingStore()->set('securityAllowDebuggingFeatures', $value);
    }

    /**
     * Sets the storageBlockExternalMedia property value. Indicates whether or not to block external media.
     * @param bool|null $value Value to set for the storageBlockExternalMedia property.
    */
    public function setStorageBlockExternalMedia(?bool $value): void {
        $this->getBackingStore()->set('storageBlockExternalMedia', $value);
    }

    /**
     * Sets the storageBlockUsbFileTransfer property value. Indicates whether or not to block USB file transfer.
     * @param bool|null $value Value to set for the storageBlockUsbFileTransfer property.
    */
    public function setStorageBlockUsbFileTransfer(?bool $value): void {
        $this->getBackingStore()->set('storageBlockUsbFileTransfer', $value);
    }

    /**
     * Sets the wifiBlockEditConfigurations property value. Indicates whether or not to block the user from editing the wifi connection settings.
     * @param bool|null $value Value to set for the wifiBlockEditConfigurations property.
    */
    public function setWifiBlockEditConfigurations(?bool $value): void {
        $this->getBackingStore()->set('wifiBlockEditConfigurations', $value);
    }

}
