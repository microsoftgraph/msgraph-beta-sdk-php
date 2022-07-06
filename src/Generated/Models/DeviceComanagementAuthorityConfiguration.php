<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComanagementAuthorityConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * @var string|null $configurationManagerAgentCommandLineArgument CoManagement Authority configuration ConfigurationManagerAgentCommandLineArgument
    */
    private ?string $configurationManagerAgentCommandLineArgument = null;
    
    /**
     * @var bool|null $installConfigurationManagerAgent CoManagement Authority configuration InstallConfigurationManagerAgent
    */
    private ?bool $installConfigurationManagerAgent = null;
    
    /**
     * @var int|null $managedDeviceAuthority CoManagement Authority configuration ManagedDeviceAuthority
    */
    private ?int $managedDeviceAuthority = null;
    
    /**
     * Instantiates a new DeviceComanagementAuthorityConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComanagementAuthorityConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComanagementAuthorityConfiguration {
        return new DeviceComanagementAuthorityConfiguration();
    }

    /**
     * Gets the configurationManagerAgentCommandLineArgument property value. CoManagement Authority configuration ConfigurationManagerAgentCommandLineArgument
     * @return string|null
    */
    public function getConfigurationManagerAgentCommandLineArgument(): ?string {
        return $this->configurationManagerAgentCommandLineArgument;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationManagerAgentCommandLineArgument' => function (ParseNode $n) use ($o) { $o->setConfigurationManagerAgentCommandLineArgument($n->getStringValue()); },
            'installConfigurationManagerAgent' => function (ParseNode $n) use ($o) { $o->setInstallConfigurationManagerAgent($n->getBooleanValue()); },
            'managedDeviceAuthority' => function (ParseNode $n) use ($o) { $o->setManagedDeviceAuthority($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the installConfigurationManagerAgent property value. CoManagement Authority configuration InstallConfigurationManagerAgent
     * @return bool|null
    */
    public function getInstallConfigurationManagerAgent(): ?bool {
        return $this->installConfigurationManagerAgent;
    }

    /**
     * Gets the managedDeviceAuthority property value. CoManagement Authority configuration ManagedDeviceAuthority
     * @return int|null
    */
    public function getManagedDeviceAuthority(): ?int {
        return $this->managedDeviceAuthority;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('configurationManagerAgentCommandLineArgument', $this->configurationManagerAgentCommandLineArgument);
        $writer->writeBooleanValue('installConfigurationManagerAgent', $this->installConfigurationManagerAgent);
        $writer->writeIntegerValue('managedDeviceAuthority', $this->managedDeviceAuthority);
    }

    /**
     * Sets the configurationManagerAgentCommandLineArgument property value. CoManagement Authority configuration ConfigurationManagerAgentCommandLineArgument
     *  @param string|null $value Value to set for the configurationManagerAgentCommandLineArgument property.
    */
    public function setConfigurationManagerAgentCommandLineArgument(?string $value ): void {
        $this->configurationManagerAgentCommandLineArgument = $value;
    }

    /**
     * Sets the installConfigurationManagerAgent property value. CoManagement Authority configuration InstallConfigurationManagerAgent
     *  @param bool|null $value Value to set for the installConfigurationManagerAgent property.
    */
    public function setInstallConfigurationManagerAgent(?bool $value ): void {
        $this->installConfigurationManagerAgent = $value;
    }

    /**
     * Sets the managedDeviceAuthority property value. CoManagement Authority configuration ManagedDeviceAuthority
     *  @param int|null $value Value to set for the managedDeviceAuthority property.
    */
    public function setManagedDeviceAuthority(?int $value ): void {
        $this->managedDeviceAuthority = $value;
    }

}
