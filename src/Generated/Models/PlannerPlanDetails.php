<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerPlanDetails extends PlannerDelta implements Parsable 
{
    /**
     * @var PlannerCategoryDescriptions|null $categoryDescriptions An object that specifies the descriptions of the 25 categories that can be associated with tasks in the plan
    */
    private ?PlannerCategoryDescriptions $categoryDescriptions = null;
    
    /**
     * @var PlannerPlanContextDetailsCollection|null $contextDetails Read-only. A collection of additional information associated with plannerPlanContext entries that are defined for the plannerPlan container.
    */
    private ?PlannerPlanContextDetailsCollection $contextDetails = null;
    
    /**
     * @var PlannerUserIds|null $sharedWith The set of user IDs that this plan is shared with. If you are using Microsoft 365 groups, use the groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection, although it is not required in order for them to access the plan owned by the group.
    */
    private ?PlannerUserIds $sharedWith = null;
    
    /**
     * Instantiates a new plannerPlanDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerPlanDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerPlanDetails {
        return new PlannerPlanDetails();
    }

    /**
     * Gets the categoryDescriptions property value. An object that specifies the descriptions of the 25 categories that can be associated with tasks in the plan
     * @return PlannerCategoryDescriptions|null
    */
    public function getCategoryDescriptions(): ?PlannerCategoryDescriptions {
        return $this->categoryDescriptions;
    }

    /**
     * Gets the contextDetails property value. Read-only. A collection of additional information associated with plannerPlanContext entries that are defined for the plannerPlan container.
     * @return PlannerPlanContextDetailsCollection|null
    */
    public function getContextDetails(): ?PlannerPlanContextDetailsCollection {
        return $this->contextDetails;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categoryDescriptions' => function (ParseNode $n) use ($o) { $o->setCategoryDescriptions($n->getObjectValue(array(PlannerCategoryDescriptions::class, 'createFromDiscriminatorValue'))); },
            'contextDetails' => function (ParseNode $n) use ($o) { $o->setContextDetails($n->getObjectValue(array(PlannerPlanContextDetailsCollection::class, 'createFromDiscriminatorValue'))); },
            'sharedWith' => function (ParseNode $n) use ($o) { $o->setSharedWith($n->getObjectValue(array(PlannerUserIds::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the sharedWith property value. The set of user IDs that this plan is shared with. If you are using Microsoft 365 groups, use the groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection, although it is not required in order for them to access the plan owned by the group.
     * @return PlannerUserIds|null
    */
    public function getSharedWith(): ?PlannerUserIds {
        return $this->sharedWith;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('categoryDescriptions', $this->categoryDescriptions);
        $writer->writeObjectValue('contextDetails', $this->contextDetails);
        $writer->writeObjectValue('sharedWith', $this->sharedWith);
    }

    /**
     * Sets the categoryDescriptions property value. An object that specifies the descriptions of the 25 categories that can be associated with tasks in the plan
     *  @param PlannerCategoryDescriptions|null $value Value to set for the categoryDescriptions property.
    */
    public function setCategoryDescriptions(?PlannerCategoryDescriptions $value ): void {
        $this->categoryDescriptions = $value;
    }

    /**
     * Sets the contextDetails property value. Read-only. A collection of additional information associated with plannerPlanContext entries that are defined for the plannerPlan container.
     *  @param PlannerPlanContextDetailsCollection|null $value Value to set for the contextDetails property.
    */
    public function setContextDetails(?PlannerPlanContextDetailsCollection $value ): void {
        $this->contextDetails = $value;
    }

    /**
     * Sets the sharedWith property value. The set of user IDs that this plan is shared with. If you are using Microsoft 365 groups, use the groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection, although it is not required in order for them to access the plan owned by the group.
     *  @param PlannerUserIds|null $value Value to set for the sharedWith property.
    */
    public function setSharedWith(?PlannerUserIds $value ): void {
        $this->sharedWith = $value;
    }

}
