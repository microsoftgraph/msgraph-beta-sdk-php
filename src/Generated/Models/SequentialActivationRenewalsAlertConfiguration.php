<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SequentialActivationRenewalsAlertConfiguration extends UnifiedRoleManagementAlertConfiguration implements Parsable 
{
    /**
     * Instantiates a new SequentialActivationRenewalsAlertConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sequentialActivationRenewalsAlertConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SequentialActivationRenewalsAlertConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SequentialActivationRenewalsAlertConfiguration {
        return new SequentialActivationRenewalsAlertConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sequentialActivationCounterThreshold' => fn(ParseNode $n) => $o->setSequentialActivationCounterThreshold($n->getIntegerValue()),
            'timeIntervalBetweenActivations' => fn(ParseNode $n) => $o->setTimeIntervalBetweenActivations($n->getDateIntervalValue()),
        ]);
    }

    /**
     * Gets the sequentialActivationCounterThreshold property value. The minimum number of activations within the timeIntervalBetweenActivations period to trigger an alert.
     * @return int|null
    */
    public function getSequentialActivationCounterThreshold(): ?int {
        return $this->getBackingStore()->get('sequentialActivationCounterThreshold');
    }

    /**
     * Gets the timeIntervalBetweenActivations property value. Time interval between activations to trigger an alert.
     * @return DateInterval|null
    */
    public function getTimeIntervalBetweenActivations(): ?DateInterval {
        return $this->getBackingStore()->get('timeIntervalBetweenActivations');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('sequentialActivationCounterThreshold', $this->getSequentialActivationCounterThreshold());
        $writer->writeDateIntervalValue('timeIntervalBetweenActivations', $this->getTimeIntervalBetweenActivations());
    }

    /**
     * Sets the sequentialActivationCounterThreshold property value. The minimum number of activations within the timeIntervalBetweenActivations period to trigger an alert.
     * @param int|null $value Value to set for the sequentialActivationCounterThreshold property.
    */
    public function setSequentialActivationCounterThreshold(?int $value): void {
        $this->getBackingStore()->set('sequentialActivationCounterThreshold', $value);
    }

    /**
     * Sets the timeIntervalBetweenActivations property value. Time interval between activations to trigger an alert.
     * @param DateInterval|null $value Value to set for the timeIntervalBetweenActivations property.
    */
    public function setTimeIntervalBetweenActivations(?DateInterval $value): void {
        $this->getBackingStore()->set('timeIntervalBetweenActivations', $value);
    }

}
