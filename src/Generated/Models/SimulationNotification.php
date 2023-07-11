<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationNotification extends BaseEndUserNotification implements Parsable 
{
    /**
     * Instantiates a new simulationNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.simulationNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SimulationNotification {
        return new SimulationNotification();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'targettedUserType' => fn(ParseNode $n) => $o->setTargettedUserType($n->getEnumValue(TargettedUserType::class)),
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
     * Gets the targettedUserType property value. The targettedUserType property
     * @return TargettedUserType|null
    */
    public function getTargettedUserType(): ?TargettedUserType {
        $val = $this->getBackingStore()->get('targettedUserType');
        if (is_null($val) || $val instanceof TargettedUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targettedUserType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('targettedUserType', $this->getTargettedUserType());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the targettedUserType property value. The targettedUserType property
     * @param TargettedUserType|null $value Value to set for the targettedUserType property.
    */
    public function setTargettedUserType(?TargettedUserType $value): void {
        $this->getBackingStore()->set('targettedUserType', $value);
    }

}
