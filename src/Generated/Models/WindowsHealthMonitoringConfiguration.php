<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsHealthMonitoringConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsHealthMonitoringConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsHealthMonitoringConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsHealthMonitoringConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsHealthMonitoringConfiguration {
        return new WindowsHealthMonitoringConfiguration();
    }

    /**
     * Gets the allowDeviceHealthMonitoring property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAllowDeviceHealthMonitoring(): ?Enablement {
        return $this->getBackingStore()->get('allowDeviceHealthMonitoring');
    }

    /**
     * Gets the configDeviceHealthMonitoringCustomScope property value. Specifies custom set of events collected from the device where health monitoring is enabled
     * @return string|null
    */
    public function getConfigDeviceHealthMonitoringCustomScope(): ?string {
        return $this->getBackingStore()->get('configDeviceHealthMonitoringCustomScope');
    }

    /**
     * Gets the configDeviceHealthMonitoringScope property value. Device health monitoring scope
     * @return WindowsHealthMonitoringScope|null
    */
    public function getConfigDeviceHealthMonitoringScope(): ?WindowsHealthMonitoringScope {
        return $this->getBackingStore()->get('configDeviceHealthMonitoringScope');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowDeviceHealthMonitoring' => fn(ParseNode $n) => $o->setAllowDeviceHealthMonitoring($n->getEnumValue(Enablement::class)),
            'configDeviceHealthMonitoringCustomScope' => fn(ParseNode $n) => $o->setConfigDeviceHealthMonitoringCustomScope($n->getStringValue()),
            'configDeviceHealthMonitoringScope' => fn(ParseNode $n) => $o->setConfigDeviceHealthMonitoringScope($n->getEnumValue(WindowsHealthMonitoringScope::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowDeviceHealthMonitoring', $this->getAllowDeviceHealthMonitoring());
        $writer->writeStringValue('configDeviceHealthMonitoringCustomScope', $this->getConfigDeviceHealthMonitoringCustomScope());
        $writer->writeEnumValue('configDeviceHealthMonitoringScope', $this->getConfigDeviceHealthMonitoringScope());
    }

    /**
     * Sets the allowDeviceHealthMonitoring property value. Possible values of a property
     * @param Enablement|null $value Value to set for the allowDeviceHealthMonitoring property.
    */
    public function setAllowDeviceHealthMonitoring(?Enablement $value): void {
        $this->getBackingStore()->set('allowDeviceHealthMonitoring', $value);
    }

    /**
     * Sets the configDeviceHealthMonitoringCustomScope property value. Specifies custom set of events collected from the device where health monitoring is enabled
     * @param string|null $value Value to set for the configDeviceHealthMonitoringCustomScope property.
    */
    public function setConfigDeviceHealthMonitoringCustomScope(?string $value): void {
        $this->getBackingStore()->set('configDeviceHealthMonitoringCustomScope', $value);
    }

    /**
     * Sets the configDeviceHealthMonitoringScope property value. Device health monitoring scope
     * @param WindowsHealthMonitoringScope|null $value Value to set for the configDeviceHealthMonitoringScope property.
    */
    public function setConfigDeviceHealthMonitoringScope(?WindowsHealthMonitoringScope $value): void {
        $this->getBackingStore()->set('configDeviceHealthMonitoringScope', $value);
    }

}
