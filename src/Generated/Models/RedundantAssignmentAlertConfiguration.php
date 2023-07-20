<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RedundantAssignmentAlertConfiguration extends UnifiedRoleManagementAlertConfiguration implements Parsable 
{
    /**
     * Instantiates a new redundantAssignmentAlertConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.redundantAssignmentAlertConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedundantAssignmentAlertConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RedundantAssignmentAlertConfiguration {
        return new RedundantAssignmentAlertConfiguration();
    }

    /**
     * Gets the duration property value. The number of days without activation to look back on from current timestamp.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getDateIntervalValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('duration', $this->getDuration());
    }

    /**
     * Sets the duration property value. The number of days without activation to look back on from current timestamp.
     * @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

}
