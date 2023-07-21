<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Custom group id type
*/
class DeliveryOptimizationGroupIdCustom extends DeliveryOptimizationGroupIdSource implements Parsable 
{
    /**
     * Instantiates a new deliveryOptimizationGroupIdCustom and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deliveryOptimizationGroupIdCustom');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationGroupIdCustom
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationGroupIdCustom {
        return new DeliveryOptimizationGroupIdCustom();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupIdCustom' => fn(ParseNode $n) => $o->setGroupIdCustom($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupIdCustom property value. Specifies an arbitrary group ID that the device belongs to
     * @return string|null
    */
    public function getGroupIdCustom(): ?string {
        $val = $this->getBackingStore()->get('groupIdCustom');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupIdCustom'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('groupIdCustom', $this->getGroupIdCustom());
    }

    /**
     * Sets the groupIdCustom property value. Specifies an arbitrary group ID that the device belongs to
     * @param string|null $value Value to set for the groupIdCustom property.
    */
    public function setGroupIdCustom(?string $value): void {
        $this->getBackingStore()->set('groupIdCustom', $value);
    }

}
