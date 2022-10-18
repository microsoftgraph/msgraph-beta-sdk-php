<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnmanagedDeviceDiscoveryTask extends DeviceAppManagementTask implements Parsable 
{
    /**
     * @var array<UnmanagedDevice>|null $unmanagedDevices Unmanaged devices discovered in the network.
    */
    private ?array $unmanagedDevices = null;
    
    /**
     * Instantiates a new UnmanagedDeviceDiscoveryTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unmanagedDeviceDiscoveryTask');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnmanagedDeviceDiscoveryTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnmanagedDeviceDiscoveryTask {
        return new UnmanagedDeviceDiscoveryTask();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'unmanagedDevices' => fn(ParseNode $n) => $o->setUnmanagedDevices($n->getCollectionOfObjectValues([UnmanagedDevice::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the unmanagedDevices property value. Unmanaged devices discovered in the network.
     * @return array<UnmanagedDevice>|null
    */
    public function getUnmanagedDevices(): ?array {
        return $this->unmanagedDevices;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('unmanagedDevices', $this->unmanagedDevices);
    }

    /**
     * Sets the unmanagedDevices property value. Unmanaged devices discovered in the network.
     *  @param array<UnmanagedDevice>|null $value Value to set for the unmanagedDevices property.
    */
    public function setUnmanagedDevices(?array $value ): void {
        $this->unmanagedDevices = $value;
    }

}
