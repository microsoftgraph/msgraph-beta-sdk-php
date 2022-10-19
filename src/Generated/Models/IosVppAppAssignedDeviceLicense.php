<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosVppAppAssignedDeviceLicense extends IosVppAppAssignedLicense implements Parsable 
{
    /**
     * @var string|null $deviceName The device name.
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $managedDeviceId The managed device ID.
    */
    private ?string $managedDeviceId = null;
    
    /**
     * Instantiates a new IosVppAppAssignedDeviceLicense and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosVppAppAssignedDeviceLicense');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVppAppAssignedDeviceLicense
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVppAppAssignedDeviceLicense {
        return new IosVppAppAssignedDeviceLicense();
    }

    /**
     * Gets the deviceName property value. The device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedDeviceId property value. The managed device ID.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
    }

    /**
     * Sets the deviceName property value. The device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the managedDeviceId property value. The managed device ID.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

}
