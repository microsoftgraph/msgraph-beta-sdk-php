<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnmanagedDeviceDiscoveryTask extends DeviceAppManagementTask implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<UnmanagedDevice>|null $unmanagedDevices Unmanaged devices discovered in the network.
    */
    private ?array $unmanagedDevices = null;
    
    /**
     * Instantiates a new UnmanagedDeviceDiscoveryTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'unmanagedDevices' => function (ParseNode $n) use ($o) { $o->setUnmanagedDevices($n->getCollectionOfObjectValues(array(UnmanagedDevice::class, 'createFromDiscriminatorValue'))); },
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
     * Sets the unmanagedDevices property value. Unmanaged devices discovered in the network.
     *  @param array<UnmanagedDevice>|null $value Value to set for the unmanagedDevices property.
    */
    public function setUnmanagedDevices(?array $value ): void {
        $this->unmanagedDevices = $value;
    }

}
