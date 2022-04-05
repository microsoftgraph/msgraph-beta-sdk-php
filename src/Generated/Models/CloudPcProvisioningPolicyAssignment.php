<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcProvisioningPolicyAssignment extends Entity 
{
    /** @var CloudPcManagementAssignmentTarget|null $target The assignment target for the provisioning policy. Currently, the only target supported for this policy is a user group. For details, see cloudPcManagementGroupAssignmentTarget. */
    private ?CloudPcManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new cloudPcProvisioningPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcProvisioningPolicyAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcProvisioningPolicyAssignment {
        return new CloudPcProvisioningPolicyAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'target' => function (self $o, ParseNode $n) { $o->setTarget($n->getObjectValue(CloudPcManagementAssignmentTarget::class)); },
        ]);
    }

    /**
     * Gets the target property value. The assignment target for the provisioning policy. Currently, the only target supported for this policy is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
     * @return CloudPcManagementAssignmentTarget|null
    */
    public function getTarget(): ?CloudPcManagementAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the target property value. The assignment target for the provisioning policy. Currently, the only target supported for this policy is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
     *  @param CloudPcManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?CloudPcManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
