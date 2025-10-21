<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties used to assign an iOS VPP mobile app to a group.
*/
class IosVppAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new IosVppAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosVppAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVppAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVppAppAssignmentSettings {
        return new IosVppAppAssignmentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isRemovable' => fn(ParseNode $n) => $o->setIsRemovable($n->getBooleanValue()),
            'preventAutoAppUpdate' => fn(ParseNode $n) => $o->setPreventAutoAppUpdate($n->getBooleanValue()),
            'preventManagedAppBackup' => fn(ParseNode $n) => $o->setPreventManagedAppBackup($n->getBooleanValue()),
            'uninstallOnDeviceRemoval' => fn(ParseNode $n) => $o->setUninstallOnDeviceRemoval($n->getBooleanValue()),
            'useDeviceLicensing' => fn(ParseNode $n) => $o->setUseDeviceLicensing($n->getBooleanValue()),
            'vpnConfigurationId' => fn(ParseNode $n) => $o->setVpnConfigurationId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isRemovable property value. Whether or not the app can be removed by the user.
     * @return bool|null
    */
    public function getIsRemovable(): ?bool {
        $val = $this->getBackingStore()->get('isRemovable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRemovable'");
    }

    /**
     * Gets the preventAutoAppUpdate property value. When TRUE, indicates that the app should not be automatically updated with the latest version from Apple app store. When FALSE, indicates that the app may be auto updated. By default, this property is set to null which internally is treated as FALSE.
     * @return bool|null
    */
    public function getPreventAutoAppUpdate(): ?bool {
        $val = $this->getBackingStore()->get('preventAutoAppUpdate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preventAutoAppUpdate'");
    }

    /**
     * Gets the preventManagedAppBackup property value. When TRUE, indicates that the app should not be backed up to iCloud. When FALSE, indicates that the app may be backed up to iCloud. By default, this property is set to null which internally is treated as FALSE.
     * @return bool|null
    */
    public function getPreventManagedAppBackup(): ?bool {
        $val = $this->getBackingStore()->get('preventManagedAppBackup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preventManagedAppBackup'");
    }

    /**
     * Gets the uninstallOnDeviceRemoval property value. Whether or not to uninstall the app when device is removed from Intune.
     * @return bool|null
    */
    public function getUninstallOnDeviceRemoval(): ?bool {
        $val = $this->getBackingStore()->get('uninstallOnDeviceRemoval');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uninstallOnDeviceRemoval'");
    }

    /**
     * Gets the useDeviceLicensing property value. Whether or not to use device licensing.
     * @return bool|null
    */
    public function getUseDeviceLicensing(): ?bool {
        $val = $this->getBackingStore()->get('useDeviceLicensing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useDeviceLicensing'");
    }

    /**
     * Gets the vpnConfigurationId property value. The VPN Configuration Id to apply for this app.
     * @return string|null
    */
    public function getVpnConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('vpnConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vpnConfigurationId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isRemovable', $this->getIsRemovable());
        $writer->writeBooleanValue('preventAutoAppUpdate', $this->getPreventAutoAppUpdate());
        $writer->writeBooleanValue('preventManagedAppBackup', $this->getPreventManagedAppBackup());
        $writer->writeBooleanValue('uninstallOnDeviceRemoval', $this->getUninstallOnDeviceRemoval());
        $writer->writeBooleanValue('useDeviceLicensing', $this->getUseDeviceLicensing());
        $writer->writeStringValue('vpnConfigurationId', $this->getVpnConfigurationId());
    }

    /**
     * Sets the isRemovable property value. Whether or not the app can be removed by the user.
     * @param bool|null $value Value to set for the isRemovable property.
    */
    public function setIsRemovable(?bool $value): void {
        $this->getBackingStore()->set('isRemovable', $value);
    }

    /**
     * Sets the preventAutoAppUpdate property value. When TRUE, indicates that the app should not be automatically updated with the latest version from Apple app store. When FALSE, indicates that the app may be auto updated. By default, this property is set to null which internally is treated as FALSE.
     * @param bool|null $value Value to set for the preventAutoAppUpdate property.
    */
    public function setPreventAutoAppUpdate(?bool $value): void {
        $this->getBackingStore()->set('preventAutoAppUpdate', $value);
    }

    /**
     * Sets the preventManagedAppBackup property value. When TRUE, indicates that the app should not be backed up to iCloud. When FALSE, indicates that the app may be backed up to iCloud. By default, this property is set to null which internally is treated as FALSE.
     * @param bool|null $value Value to set for the preventManagedAppBackup property.
    */
    public function setPreventManagedAppBackup(?bool $value): void {
        $this->getBackingStore()->set('preventManagedAppBackup', $value);
    }

    /**
     * Sets the uninstallOnDeviceRemoval property value. Whether or not to uninstall the app when device is removed from Intune.
     * @param bool|null $value Value to set for the uninstallOnDeviceRemoval property.
    */
    public function setUninstallOnDeviceRemoval(?bool $value): void {
        $this->getBackingStore()->set('uninstallOnDeviceRemoval', $value);
    }

    /**
     * Sets the useDeviceLicensing property value. Whether or not to use device licensing.
     * @param bool|null $value Value to set for the useDeviceLicensing property.
    */
    public function setUseDeviceLicensing(?bool $value): void {
        $this->getBackingStore()->set('useDeviceLicensing', $value);
    }

    /**
     * Sets the vpnConfigurationId property value. The VPN Configuration Id to apply for this app.
     * @param string|null $value Value to set for the vpnConfigurationId property.
    */
    public function setVpnConfigurationId(?string $value): void {
        $this->getBackingStore()->set('vpnConfigurationId', $value);
    }

}
