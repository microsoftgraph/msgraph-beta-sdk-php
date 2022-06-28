<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsHealthMonitoringConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Enablement|null $allowDeviceHealthMonitoring Enables device health monitoring on the device. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $allowDeviceHealthMonitoring = null;
    
    /**
     * @var string|null $configDeviceHealthMonitoringCustomScope Specifies custom set of events collected from the device where health monitoring is enabled
    */
    private ?string $configDeviceHealthMonitoringCustomScope = null;
    
    /**
     * @var WindowsHealthMonitoringScope|null $configDeviceHealthMonitoringScope Specifies set of events collected from the device where health monitoring is enabled. Possible values are: undefined, healthMonitoring, bootPerformance, windowsUpdates.
    */
    private ?WindowsHealthMonitoringScope $configDeviceHealthMonitoringScope = null;
    
    /**
     * Instantiates a new WindowsHealthMonitoringConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowDeviceHealthMonitoring property value. Enables device health monitoring on the device. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getAllowDeviceHealthMonitoring(): ?Enablement {
        return $this->allowDeviceHealthMonitoring;
    }

    /**
     * Gets the configDeviceHealthMonitoringCustomScope property value. Specifies custom set of events collected from the device where health monitoring is enabled
     * @return string|null
    */
    public function getConfigDeviceHealthMonitoringCustomScope(): ?string {
        return $this->configDeviceHealthMonitoringCustomScope;
    }

    /**
     * Gets the configDeviceHealthMonitoringScope property value. Specifies set of events collected from the device where health monitoring is enabled. Possible values are: undefined, healthMonitoring, bootPerformance, windowsUpdates.
     * @return WindowsHealthMonitoringScope|null
    */
    public function getConfigDeviceHealthMonitoringScope(): ?WindowsHealthMonitoringScope {
        return $this->configDeviceHealthMonitoringScope;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowDeviceHealthMonitoring' => function (ParseNode $n) use ($o) { $o->setAllowDeviceHealthMonitoring($n->getEnumValue(Enablement::class)); },
            'configDeviceHealthMonitoringCustomScope' => function (ParseNode $n) use ($o) { $o->setConfigDeviceHealthMonitoringCustomScope($n->getStringValue()); },
            'configDeviceHealthMonitoringScope' => function (ParseNode $n) use ($o) { $o->setConfigDeviceHealthMonitoringScope($n->getEnumValue(WindowsHealthMonitoringScope::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowDeviceHealthMonitoring', $this->allowDeviceHealthMonitoring);
        $writer->writeStringValue('configDeviceHealthMonitoringCustomScope', $this->configDeviceHealthMonitoringCustomScope);
        $writer->writeEnumValue('configDeviceHealthMonitoringScope', $this->configDeviceHealthMonitoringScope);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowDeviceHealthMonitoring property value. Enables device health monitoring on the device. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the allowDeviceHealthMonitoring property.
    */
    public function setAllowDeviceHealthMonitoring(?Enablement $value ): void {
        $this->allowDeviceHealthMonitoring = $value;
    }

    /**
     * Sets the configDeviceHealthMonitoringCustomScope property value. Specifies custom set of events collected from the device where health monitoring is enabled
     *  @param string|null $value Value to set for the configDeviceHealthMonitoringCustomScope property.
    */
    public function setConfigDeviceHealthMonitoringCustomScope(?string $value ): void {
        $this->configDeviceHealthMonitoringCustomScope = $value;
    }

    /**
     * Sets the configDeviceHealthMonitoringScope property value. Specifies set of events collected from the device where health monitoring is enabled. Possible values are: undefined, healthMonitoring, bootPerformance, windowsUpdates.
     *  @param WindowsHealthMonitoringScope|null $value Value to set for the configDeviceHealthMonitoringScope property.
    */
    public function setConfigDeviceHealthMonitoringScope(?WindowsHealthMonitoringScope $value ): void {
        $this->configDeviceHealthMonitoringScope = $value;
    }

}
