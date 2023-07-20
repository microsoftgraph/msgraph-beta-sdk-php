<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties used to assign an Mac VPP mobile app to a group.
*/
class MacOsVppAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new macOsVppAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOsVppAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOsVppAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOsVppAppAssignmentSettings {
        return new MacOsVppAppAssignmentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'preventAutoAppUpdate' => fn(ParseNode $n) => $o->setPreventAutoAppUpdate($n->getBooleanValue()),
            'preventManagedAppBackup' => fn(ParseNode $n) => $o->setPreventManagedAppBackup($n->getBooleanValue()),
            'uninstallOnDeviceRemoval' => fn(ParseNode $n) => $o->setUninstallOnDeviceRemoval($n->getBooleanValue()),
            'useDeviceLicensing' => fn(ParseNode $n) => $o->setUseDeviceLicensing($n->getBooleanValue()),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('preventAutoAppUpdate', $this->getPreventAutoAppUpdate());
        $writer->writeBooleanValue('preventManagedAppBackup', $this->getPreventManagedAppBackup());
        $writer->writeBooleanValue('uninstallOnDeviceRemoval', $this->getUninstallOnDeviceRemoval());
        $writer->writeBooleanValue('useDeviceLicensing', $this->getUseDeviceLicensing());
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

}
