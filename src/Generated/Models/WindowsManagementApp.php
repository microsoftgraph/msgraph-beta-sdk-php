<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Windows management app entity.
*/
class WindowsManagementApp extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsManagementApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsManagementApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsManagementApp {
        return new WindowsManagementApp();
    }

    /**
     * Gets the availableVersion property value. Windows management app available version.
     * @return string|null
    */
    public function getAvailableVersion(): ?string {
        $val = $this->getBackingStore()->get('availableVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availableVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availableVersion' => fn(ParseNode $n) => $o->setAvailableVersion($n->getStringValue()),
            'healthStates' => fn(ParseNode $n) => $o->setHealthStates($n->getCollectionOfObjectValues([WindowsManagementAppHealthState::class, 'createFromDiscriminatorValue'])),
            'managedInstaller' => fn(ParseNode $n) => $o->setManagedInstaller($n->getEnumValue(ManagedInstallerStatus::class)),
            'managedInstallerConfiguredDateTime' => fn(ParseNode $n) => $o->setManagedInstallerConfiguredDateTime($n->getStringValue()),
        ]);
    }

    /**
     * Gets the healthStates property value. The list of health states for installed Windows management app.
     * @return array<WindowsManagementAppHealthState>|null
    */
    public function getHealthStates(): ?array {
        $val = $this->getBackingStore()->get('healthStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsManagementAppHealthState::class);
            /** @var array<WindowsManagementAppHealthState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthStates'");
    }

    /**
     * Gets the managedInstaller property value. ManagedInstallerStatus
     * @return ManagedInstallerStatus|null
    */
    public function getManagedInstaller(): ?ManagedInstallerStatus {
        $val = $this->getBackingStore()->get('managedInstaller');
        if (is_null($val) || $val instanceof ManagedInstallerStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedInstaller'");
    }

    /**
     * Gets the managedInstallerConfiguredDateTime property value. Managed Installer Configured Date Time
     * @return string|null
    */
    public function getManagedInstallerConfiguredDateTime(): ?string {
        $val = $this->getBackingStore()->get('managedInstallerConfiguredDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedInstallerConfiguredDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('availableVersion', $this->getAvailableVersion());
        $writer->writeCollectionOfObjectValues('healthStates', $this->getHealthStates());
        $writer->writeEnumValue('managedInstaller', $this->getManagedInstaller());
        $writer->writeStringValue('managedInstallerConfiguredDateTime', $this->getManagedInstallerConfiguredDateTime());
    }

    /**
     * Sets the availableVersion property value. Windows management app available version.
     * @param string|null $value Value to set for the availableVersion property.
    */
    public function setAvailableVersion(?string $value): void {
        $this->getBackingStore()->set('availableVersion', $value);
    }

    /**
     * Sets the healthStates property value. The list of health states for installed Windows management app.
     * @param array<WindowsManagementAppHealthState>|null $value Value to set for the healthStates property.
    */
    public function setHealthStates(?array $value): void {
        $this->getBackingStore()->set('healthStates', $value);
    }

    /**
     * Sets the managedInstaller property value. ManagedInstallerStatus
     * @param ManagedInstallerStatus|null $value Value to set for the managedInstaller property.
    */
    public function setManagedInstaller(?ManagedInstallerStatus $value): void {
        $this->getBackingStore()->set('managedInstaller', $value);
    }

    /**
     * Sets the managedInstallerConfiguredDateTime property value. Managed Installer Configured Date Time
     * @param string|null $value Value to set for the managedInstallerConfiguredDateTime property.
    */
    public function setManagedInstallerConfiguredDateTime(?string $value): void {
        $this->getBackingStore()->set('managedInstallerConfiguredDateTime', $value);
    }

}
