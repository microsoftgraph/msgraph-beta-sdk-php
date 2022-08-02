<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOsVppAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * @var bool|null $uninstallOnDeviceRemoval Whether or not to uninstall the app when device is removed from Intune.
    */
    private ?bool $uninstallOnDeviceRemoval = null;
    
    /**
     * @var bool|null $useDeviceLicensing Whether or not to use device licensing.
    */
    private ?bool $useDeviceLicensing = null;
    
    /**
     * Instantiates a new MacOsVppAppAssignmentSettings and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'uninstallOnDeviceRemoval' => function (ParseNode $n) use ($o) { $o->setUninstallOnDeviceRemoval($n->getBooleanValue()); },
            'useDeviceLicensing' => function (ParseNode $n) use ($o) { $o->setUseDeviceLicensing($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the uninstallOnDeviceRemoval property value. Whether or not to uninstall the app when device is removed from Intune.
     * @return bool|null
    */
    public function getUninstallOnDeviceRemoval(): ?bool {
        return $this->uninstallOnDeviceRemoval;
    }

    /**
     * Gets the useDeviceLicensing property value. Whether or not to use device licensing.
     * @return bool|null
    */
    public function getUseDeviceLicensing(): ?bool {
        return $this->useDeviceLicensing;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('uninstallOnDeviceRemoval', $this->uninstallOnDeviceRemoval);
        $writer->writeBooleanValue('useDeviceLicensing', $this->useDeviceLicensing);
    }

    /**
     * Sets the uninstallOnDeviceRemoval property value. Whether or not to uninstall the app when device is removed from Intune.
     *  @param bool|null $value Value to set for the uninstallOnDeviceRemoval property.
    */
    public function setUninstallOnDeviceRemoval(?bool $value ): void {
        $this->uninstallOnDeviceRemoval = $value;
    }

    /**
     * Sets the useDeviceLicensing property value. Whether or not to use device licensing.
     *  @param bool|null $value Value to set for the useDeviceLicensing property.
    */
    public function setUseDeviceLicensing(?bool $value ): void {
        $this->useDeviceLicensing = $value;
    }

}
