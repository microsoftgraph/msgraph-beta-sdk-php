<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DateDrivenRolloutSettings extends GradualRolloutSettings implements Parsable 
{
    /**
     * Instantiates a new dateDrivenRolloutSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.dateDrivenRolloutSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DateDrivenRolloutSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DateDrivenRolloutSettings {
        return new DateDrivenRolloutSettings();
    }

    /**
     * Gets the endDateTime property value. Specifies the date before which all devices currently in the deployment are offered the update. Devices added after this date are offered immediately. When the endDateTime isn't set, all devices in the deployment are offered content at the same time.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
    }

    /**
     * Sets the endDateTime property value. Specifies the date before which all devices currently in the deployment are offered the update. Devices added after this date are offered immediately. When the endDateTime isn't set, all devices in the deployment are offered content at the same time.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

}
