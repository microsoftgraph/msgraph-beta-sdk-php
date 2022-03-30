<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsManagementApp extends Entity 
{
    /** @var string|null $availableVersion Windows management app available version. */
    private ?string $availableVersion = null;
    
    /** @var array<WindowsManagementAppHealthState>|null $healthStates The list of health states for installed Windows management app. */
    private ?array $healthStates = null;
    
    /** @var ManagedInstallerStatus|null $managedInstaller Managed Installer Status. Possible values are: disabled, enabled. */
    private ?ManagedInstallerStatus $managedInstaller = null;
    
    /** @var string|null $managedInstallerConfiguredDateTime Managed Installer Configured Date Time */
    private ?string $managedInstallerConfiguredDateTime = null;
    
    /**
     * Instantiates a new windowsManagementApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsManagementApp
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsManagementApp {
        return new WindowsManagementApp();
    }

    /**
     * Gets the availableVersion property value. Windows management app available version.
     * @return string|null
    */
    public function getAvailableVersion(): ?string {
        return $this->availableVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'availableVersion' => function (self $o, ParseNode $n) { $o->setAvailableVersion($n->getStringValue()); },
            'healthStates' => function (self $o, ParseNode $n) { $o->setHealthStates($n->getCollectionOfObjectValues(WindowsManagementAppHealthState::class)); },
            'managedInstaller' => function (self $o, ParseNode $n) { $o->setManagedInstaller($n->getEnumValue(ManagedInstallerStatus::class)); },
            'managedInstallerConfiguredDateTime' => function (self $o, ParseNode $n) { $o->setManagedInstallerConfiguredDateTime($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the healthStates property value. The list of health states for installed Windows management app.
     * @return array<WindowsManagementAppHealthState>|null
    */
    public function getHealthStates(): ?array {
        return $this->healthStates;
    }

    /**
     * Gets the managedInstaller property value. Managed Installer Status. Possible values are: disabled, enabled.
     * @return ManagedInstallerStatus|null
    */
    public function getManagedInstaller(): ?ManagedInstallerStatus {
        return $this->managedInstaller;
    }

    /**
     * Gets the managedInstallerConfiguredDateTime property value. Managed Installer Configured Date Time
     * @return string|null
    */
    public function getManagedInstallerConfiguredDateTime(): ?string {
        return $this->managedInstallerConfiguredDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('availableVersion', $this->availableVersion);
        $writer->writeCollectionOfObjectValues('healthStates', $this->healthStates);
        $writer->writeEnumValue('managedInstaller', $this->managedInstaller);
        $writer->writeStringValue('managedInstallerConfiguredDateTime', $this->managedInstallerConfiguredDateTime);
    }

    /**
     * Sets the availableVersion property value. Windows management app available version.
     *  @param string|null $value Value to set for the availableVersion property.
    */
    public function setAvailableVersion(?string $value ): void {
        $this->availableVersion = $value;
    }

    /**
     * Sets the healthStates property value. The list of health states for installed Windows management app.
     *  @param array<WindowsManagementAppHealthState>|null $value Value to set for the healthStates property.
    */
    public function setHealthStates(?array $value ): void {
        $this->healthStates = $value;
    }

    /**
     * Sets the managedInstaller property value. Managed Installer Status. Possible values are: disabled, enabled.
     *  @param ManagedInstallerStatus|null $value Value to set for the managedInstaller property.
    */
    public function setManagedInstaller(?ManagedInstallerStatus $value ): void {
        $this->managedInstaller = $value;
    }

    /**
     * Sets the managedInstallerConfiguredDateTime property value. Managed Installer Configured Date Time
     *  @param string|null $value Value to set for the managedInstallerConfiguredDateTime property.
    */
    public function setManagedInstallerConfiguredDateTime(?string $value ): void {
        $this->managedInstallerConfiguredDateTime = $value;
    }

}
