<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties used to assign a macOS Declarative Device Management (DDM) VPP mobile app to a group.
*/
class MacOsDdmVppAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new MacOsDdmVppAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOsDdmVppAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOsDdmVppAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOsDdmVppAppAssignmentSettings {
        return new MacOsDdmVppAppAssignmentSettings();
    }

    /**
     * Gets the automaticAppUpdates property value. Specifies whether the device automatically updates the app. Possible values are: 'alwaysOn', 'alwaysOff', 'storeSettings'. By default, this value is set to 'storeSettings'.
     * @return DdmAppAutomaticAppUpdates|null
    */
    public function getAutomaticAppUpdates(): ?DdmAppAutomaticAppUpdates {
        $val = $this->getBackingStore()->get('automaticAppUpdates');
        if (is_null($val) || $val instanceof DdmAppAutomaticAppUpdates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automaticAppUpdates'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'automaticAppUpdates' => fn(ParseNode $n) => $o->setAutomaticAppUpdates($n->getEnumValue(DdmAppAutomaticAppUpdates::class)),
            'isIosApp' => fn(ParseNode $n) => $o->setIsIosApp($n->getBooleanValue()),
            'useDeviceLicensing' => fn(ParseNode $n) => $o->setUseDeviceLicensing($n->getBooleanValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the isIosApp property value. If true, the device installs an iOS or iPadOS app that runs on a Mac with Apple Silicon. This is only used when the app is a VPP app. Default is false.
     * @return bool|null
    */
    public function getIsIosApp(): ?bool {
        $val = $this->getBackingStore()->get('isIosApp');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isIosApp'");
    }

    /**
     * Gets the useDeviceLicensing property value. When TRUE, indicates that the app should be assigned using device licensing. When FALSE, indicates that the app should be assigned using user licensing. By default, this property is set to FALSE.
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
     * Gets the version property value. Specifies the version of the VPP app to install. When not set, the device installs the latest version. When set, the device installs the specified version. The device never installs an older version of the app over a newer version. This property maps to the Version key in Apple's AppManagedInstallBehaviorObject declaration.
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('automaticAppUpdates', $this->getAutomaticAppUpdates());
        $writer->writeBooleanValue('isIosApp', $this->getIsIosApp());
        $writer->writeBooleanValue('useDeviceLicensing', $this->getUseDeviceLicensing());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the automaticAppUpdates property value. Specifies whether the device automatically updates the app. Possible values are: 'alwaysOn', 'alwaysOff', 'storeSettings'. By default, this value is set to 'storeSettings'.
     * @param DdmAppAutomaticAppUpdates|null $value Value to set for the automaticAppUpdates property.
    */
    public function setAutomaticAppUpdates(?DdmAppAutomaticAppUpdates $value): void {
        $this->getBackingStore()->set('automaticAppUpdates', $value);
    }

    /**
     * Sets the isIosApp property value. If true, the device installs an iOS or iPadOS app that runs on a Mac with Apple Silicon. This is only used when the app is a VPP app. Default is false.
     * @param bool|null $value Value to set for the isIosApp property.
    */
    public function setIsIosApp(?bool $value): void {
        $this->getBackingStore()->set('isIosApp', $value);
    }

    /**
     * Sets the useDeviceLicensing property value. When TRUE, indicates that the app should be assigned using device licensing. When FALSE, indicates that the app should be assigned using user licensing. By default, this property is set to FALSE.
     * @param bool|null $value Value to set for the useDeviceLicensing property.
    */
    public function setUseDeviceLicensing(?bool $value): void {
        $this->getBackingStore()->set('useDeviceLicensing', $value);
    }

    /**
     * Sets the version property value. Specifies the version of the VPP app to install. When not set, the device installs the latest version. When set, the device installs the specified version. The device never installs an older version of the app over a newer version. This property maps to the Version key in Apple's AppManagedInstallBehaviorObject declaration.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
