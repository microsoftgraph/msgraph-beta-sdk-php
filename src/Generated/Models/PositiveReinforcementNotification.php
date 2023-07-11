<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PositiveReinforcementNotification extends BaseEndUserNotification implements Parsable 
{
    /**
     * Instantiates a new positiveReinforcementNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.positiveReinforcementNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PositiveReinforcementNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PositiveReinforcementNotification {
        return new PositiveReinforcementNotification();
    }

    /**
     * Gets the deliveryPreference property value. The deliveryPreference property
     * @return NotificationDeliveryPreference|null
    */
    public function getDeliveryPreference(): ?NotificationDeliveryPreference {
        $val = $this->getBackingStore()->get('deliveryPreference');
        if (is_null($val) || $val instanceof NotificationDeliveryPreference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryPreference'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deliveryPreference' => fn(ParseNode $n) => $o->setDeliveryPreference($n->getEnumValue(NotificationDeliveryPreference::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deliveryPreference', $this->getDeliveryPreference());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the deliveryPreference property value. The deliveryPreference property
     * @param NotificationDeliveryPreference|null $value Value to set for the deliveryPreference property.
    */
    public function setDeliveryPreference(?NotificationDeliveryPreference $value): void {
        $this->getBackingStore()->set('deliveryPreference', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
