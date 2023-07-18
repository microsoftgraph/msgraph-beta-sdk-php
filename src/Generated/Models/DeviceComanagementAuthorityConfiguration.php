<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows 10 Co-Management Authority Page Configuration
*/
class DeviceComanagementAuthorityConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceComanagementAuthorityConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceComanagementAuthorityConfiguration');
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
        $val = $this->getBackingStore()->get('configurationManagerAgentCommandLineArgument');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationManagerAgentCommandLineArgument'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationManagerAgentCommandLineArgument' => fn(ParseNode $n) => $o->setConfigurationManagerAgentCommandLineArgument($n->getStringValue()),
            'installConfigurationManagerAgent' => fn(ParseNode $n) => $o->setInstallConfigurationManagerAgent($n->getBooleanValue()),
            'managedDeviceAuthority' => fn(ParseNode $n) => $o->setManagedDeviceAuthority($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the installConfigurationManagerAgent property value. CoManagement Authority configuration InstallConfigurationManagerAgent
     * @return bool|null
    */
    public function getInstallConfigurationManagerAgent(): ?bool {
        $val = $this->getBackingStore()->get('installConfigurationManagerAgent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installConfigurationManagerAgent'");
    }

    /**
     * Gets the managedDeviceAuthority property value. CoManagement Authority configuration ManagedDeviceAuthority
     * @return int|null
    */
    public function getManagedDeviceAuthority(): ?int {
        $val = $this->getBackingStore()->get('managedDeviceAuthority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceAuthority'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('configurationManagerAgentCommandLineArgument', $this->getConfigurationManagerAgentCommandLineArgument());
        $writer->writeBooleanValue('installConfigurationManagerAgent', $this->getInstallConfigurationManagerAgent());
        $writer->writeIntegerValue('managedDeviceAuthority', $this->getManagedDeviceAuthority());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the configurationManagerAgentCommandLineArgument property value. CoManagement Authority configuration ConfigurationManagerAgentCommandLineArgument
     * @param string|null $value Value to set for the configurationManagerAgentCommandLineArgument property.
    */
    public function setConfigurationManagerAgentCommandLineArgument(?string $value): void {
        $this->getBackingStore()->set('configurationManagerAgentCommandLineArgument', $value);
    }

    /**
     * Sets the installConfigurationManagerAgent property value. CoManagement Authority configuration InstallConfigurationManagerAgent
     * @param bool|null $value Value to set for the installConfigurationManagerAgent property.
    */
    public function setInstallConfigurationManagerAgent(?bool $value): void {
        $this->getBackingStore()->set('installConfigurationManagerAgent', $value);
    }

    /**
     * Sets the managedDeviceAuthority property value. CoManagement Authority configuration ManagedDeviceAuthority
     * @param int|null $value Value to set for the managedDeviceAuthority property.
    */
    public function setManagedDeviceAuthority(?int $value): void {
        $this->getBackingStore()->set('managedDeviceAuthority', $value);
    }

}
