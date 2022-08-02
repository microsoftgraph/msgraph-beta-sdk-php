<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10NetworkBoundaryConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var WindowsNetworkIsolationPolicy|null $windowsNetworkIsolationPolicy Windows Network Isolation Policy
    */
    private ?WindowsNetworkIsolationPolicy $windowsNetworkIsolationPolicy = null;
    
    /**
     * Instantiates a new Windows10NetworkBoundaryConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10NetworkBoundaryConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10NetworkBoundaryConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10NetworkBoundaryConfiguration {
        return new Windows10NetworkBoundaryConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'windowsNetworkIsolationPolicy' => function (ParseNode $n) use ($o) { $o->setWindowsNetworkIsolationPolicy($n->getObjectValue(array(WindowsNetworkIsolationPolicy::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the windowsNetworkIsolationPolicy property value. Windows Network Isolation Policy
     * @return WindowsNetworkIsolationPolicy|null
    */
    public function getWindowsNetworkIsolationPolicy(): ?WindowsNetworkIsolationPolicy {
        return $this->windowsNetworkIsolationPolicy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('windowsNetworkIsolationPolicy', $this->windowsNetworkIsolationPolicy);
    }

    /**
     * Sets the windowsNetworkIsolationPolicy property value. Windows Network Isolation Policy
     *  @param WindowsNetworkIsolationPolicy|null $value Value to set for the windowsNetworkIsolationPolicy property.
    */
    public function setWindowsNetworkIsolationPolicy(?WindowsNetworkIsolationPolicy $value ): void {
        $this->windowsNetworkIsolationPolicy = $value;
    }

}
