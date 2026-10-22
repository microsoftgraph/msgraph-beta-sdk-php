<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A threshold expressed as a percentage of the policy's period limit. The value is aninteger from 1 to 100 and carries no unit.
*/
class PercentageCostManagementAlertThreshold extends CostManagementAlertThreshold implements Parsable 
{
    /**
     * Instantiates a new PercentageCostManagementAlertThreshold and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.percentageCostManagementAlertThreshold');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PercentageCostManagementAlertThreshold
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PercentageCostManagementAlertThreshold {
        return new PercentageCostManagementAlertThreshold();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
