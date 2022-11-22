<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcManagementGroupAssignmentTarget extends CloudPcManagementAssignmentTarget implements Parsable 
{
    /**
     * Instantiates a new CloudPcManagementGroupAssignmentTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcManagementGroupAssignmentTarget');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcManagementGroupAssignmentTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcManagementGroupAssignmentTarget {
        return new CloudPcManagementGroupAssignmentTarget();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'servicePlanId' => fn(ParseNode $n) => $o->setServicePlanId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupId property value. The id of the assignment's target group
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->getBackingStore()->get('groupId');
    }

    /**
     * Gets the servicePlanId property value. The servicePlanId property
     * @return string|null
    */
    public function getServicePlanId(): ?string {
        return $this->getBackingStore()->get('servicePlanId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('servicePlanId', $this->getServicePlanId());
    }

    /**
     * Sets the groupId property value. The id of the assignment's target group
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the servicePlanId property value. The servicePlanId property
     *  @param string|null $value Value to set for the servicePlanId property.
    */
    public function setServicePlanId(?string $value): void {
        $this->getBackingStore()->set('servicePlanId', $value);
    }

}
