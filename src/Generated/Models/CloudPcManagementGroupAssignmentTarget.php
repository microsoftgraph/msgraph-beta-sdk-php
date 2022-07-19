<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcManagementGroupAssignmentTarget extends CloudPcManagementAssignmentTarget implements Parsable 
{
    /**
     * @var string|null $groupId The id of the assignment's target group
    */
    private ?string $groupId = null;
    
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
            'groupId' => function (ParseNode $n) use ($o) { $o->setGroupId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the groupId property value. The id of the assignment's target group
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('groupId', $this->groupId);
    }

    /**
     * Sets the groupId property value. The id of the assignment's target group
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value ): void {
        $this->groupId = $value;
    }

}
