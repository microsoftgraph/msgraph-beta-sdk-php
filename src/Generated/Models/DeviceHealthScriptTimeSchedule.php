<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

/**
 * Base type of Device health script time schedule.
*/
class DeviceHealthScriptTimeSchedule extends DeviceHealthScriptRunSchedule implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceHealthScriptTimeSchedule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceHealthScriptTimeSchedule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptTimeSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptTimeSchedule {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceHealthScriptDailySchedule': return new DeviceHealthScriptDailySchedule();
                case '#microsoft.graph.deviceHealthScriptRunOnceSchedule': return new DeviceHealthScriptRunOnceSchedule();
            }
        }
        return new DeviceHealthScriptTimeSchedule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'time' => fn(ParseNode $n) => $o->setTime($n->getTimeValue()),
            'useUtc' => fn(ParseNode $n) => $o->setUseUtc($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the time property value. At what time the script is scheduled to run. This collection can contain a maximum of 20 elements.
     * @return Time|null
    */
    public function getTime(): ?Time {
        $val = $this->getBackingStore()->get('time');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'time'");
    }

    /**
     * Gets the useUtc property value. Indicate if the time is Utc or client local time.
     * @return bool|null
    */
    public function getUseUtc(): ?bool {
        $val = $this->getBackingStore()->get('useUtc');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useUtc'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeTimeValue('time', $this->getTime());
        $writer->writeBooleanValue('useUtc', $this->getUseUtc());
    }

    /**
     * Sets the time property value. At what time the script is scheduled to run. This collection can contain a maximum of 20 elements.
     * @param Time|null $value Value to set for the time property.
    */
    public function setTime(?Time $value): void {
        $this->getBackingStore()->set('time', $value);
    }

    /**
     * Sets the useUtc property value. Indicate if the time is Utc or client local time.
     * @param bool|null $value Value to set for the useUtc property.
    */
    public function setUseUtc(?bool $value): void {
        $this->getBackingStore()->set('useUtc', $value);
    }

}
