<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * GroupId Support Types
*/
class DeliveryOptimizationGroupIdSourceOptions extends DeliveryOptimizationGroupIdSource implements Parsable 
{
    /**
     * Instantiates a new deliveryOptimizationGroupIdSourceOptions and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deliveryOptimizationGroupIdSourceOptions');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationGroupIdSourceOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationGroupIdSourceOptions {
        return new DeliveryOptimizationGroupIdSourceOptions();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupIdSourceOption' => fn(ParseNode $n) => $o->setGroupIdSourceOption($n->getEnumValue(DeliveryOptimizationGroupIdOptionsType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupIdSourceOption property value. Possible values for the DeliveryOptimizationGroupIdOptionsType setting.
     * @return DeliveryOptimizationGroupIdOptionsType|null
    */
    public function getGroupIdSourceOption(): ?DeliveryOptimizationGroupIdOptionsType {
        $val = $this->getBackingStore()->get('groupIdSourceOption');
        if (is_null($val) || $val instanceof DeliveryOptimizationGroupIdOptionsType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupIdSourceOption'");
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
        $writer->writeEnumValue('groupIdSourceOption', $this->getGroupIdSourceOption());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the groupIdSourceOption property value. Possible values for the DeliveryOptimizationGroupIdOptionsType setting.
     * @param DeliveryOptimizationGroupIdOptionsType|null $value Value to set for the groupIdSourceOption property.
    */
    public function setGroupIdSourceOption(?DeliveryOptimizationGroupIdOptionsType $value): void {
        $this->getBackingStore()->set('groupIdSourceOption', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
