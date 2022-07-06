<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerDelta extends Entity implements Parsable 
{
    /**
     * Instantiates a new plannerDelta and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerDelta
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerDelta {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.plannerAssignedToTaskBoardTaskFormat': return new PlannerAssignedToTaskBoardTaskFormat();
                case '#microsoft.graph.plannerBucket': return new PlannerBucket();
                case '#microsoft.graph.plannerBucketTaskBoardTaskFormat': return new PlannerBucketTaskBoardTaskFormat();
                case '#microsoft.graph.plannerPlan': return new PlannerPlan();
                case '#microsoft.graph.plannerPlanDetails': return new PlannerPlanDetails();
                case '#microsoft.graph.plannerProgressTaskBoardTaskFormat': return new PlannerProgressTaskBoardTaskFormat();
                case '#microsoft.graph.plannerTask': return new PlannerTask();
                case '#microsoft.graph.plannerTaskDetails': return new PlannerTaskDetails();
                case '#microsoft.graph.plannerUser': return new PlannerUser();
            }
        }
        return new PlannerDelta();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
