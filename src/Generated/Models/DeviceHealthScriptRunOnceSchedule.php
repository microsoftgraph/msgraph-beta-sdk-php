<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class DeviceHealthScriptRunOnceSchedule extends DeviceHealthScriptTimeSchedule implements Parsable 
{
    /**
     * Instantiates a new DeviceHealthScriptRunOnceSchedule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceHealthScriptRunOnceSchedule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptRunOnceSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptRunOnceSchedule {
        return new DeviceHealthScriptRunOnceSchedule();
    }

    /**
     * Gets the date property value. The date the script is scheduled to run. This collection can contain a maximum of 20 elements.
     * @return Date|null
    */
    public function getDate(): ?Date {
        $val = $this->getBackingStore()->get('date');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'date'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'date' => fn(ParseNode $n) => $o->setDate($n->getDateValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateValue('date', $this->getDate());
    }

    /**
     * Sets the date property value. The date the script is scheduled to run. This collection can contain a maximum of 20 elements.
     * @param Date|null $value Value to set for the date property.
    */
    public function setDate(?Date $value): void {
        $this->getBackingStore()->set('date', $value);
    }

}
