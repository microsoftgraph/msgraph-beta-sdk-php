<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RateDrivenRolloutSettings extends GradualRolloutSettings implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new rateDrivenRolloutSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.rateDrivenRolloutSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RateDrivenRolloutSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RateDrivenRolloutSettings {
        return new RateDrivenRolloutSettings();
    }

    /**
     * Gets the devicesPerOffer property value. Specifies the number of devices that are offered at the same time. When not set, all devices in the deployment are offered content at the same time.
     * @return int|null
    */
    public function getDevicesPerOffer(): ?int {
        $val = $this->getBackingStore()->get('devicesPerOffer');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devicesPerOffer'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'devicesPerOffer' => fn(ParseNode $n) => $o->setDevicesPerOffer($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('devicesPerOffer', $this->getDevicesPerOffer());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the devicesPerOffer property value. Specifies the number of devices that are offered at the same time. When not set, all devices in the deployment are offered content at the same time.
     * @param int|null $value Value to set for the devicesPerOffer property.
    */
    public function setDevicesPerOffer(?int $value): void {
        $this->getBackingStore()->set('devicesPerOffer', $value);
    }

}
