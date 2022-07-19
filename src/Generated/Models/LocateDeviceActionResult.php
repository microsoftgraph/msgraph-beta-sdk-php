<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LocateDeviceActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * @var DeviceGeoLocation|null $deviceLocation device location
    */
    private ?DeviceGeoLocation $deviceLocation = null;
    
    /**
     * Instantiates a new LocateDeviceActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.locateDeviceActionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocateDeviceActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocateDeviceActionResult {
        return new LocateDeviceActionResult();
    }

    /**
     * Gets the deviceLocation property value. device location
     * @return DeviceGeoLocation|null
    */
    public function getDeviceLocation(): ?DeviceGeoLocation {
        return $this->deviceLocation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceLocation' => function (ParseNode $n) use ($o) { $o->setDeviceLocation($n->getObjectValue(array(DeviceGeoLocation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('deviceLocation', $this->deviceLocation);
    }

    /**
     * Sets the deviceLocation property value. device location
     *  @param DeviceGeoLocation|null $value Value to set for the deviceLocation property.
    */
    public function setDeviceLocation(?DeviceGeoLocation $value ): void {
        $this->deviceLocation = $value;
    }

}
