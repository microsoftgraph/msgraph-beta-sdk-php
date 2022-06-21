<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRoleAssignmentRequestStatus implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $status The status of the role assignment request. The value can be InProgress or Closed. */
    private ?string $status = null;
    
    /** @var array<KeyValue>|null $statusDetails The details of the status of the role assignment request. It represents the evaluation results of different rules. */
    private ?array $statusDetails = null;
    
    /** @var string|null $subStatus The sub status of the role assignment request. The values can be Accepted, PendingEvaluation, Granted, Denied, PendingProvisioning, Provisioned, PendingRevocation, Revoked, Canceled, Failed, PendingApprovalProvisioning, PendingApproval, FailedAsResourceIsLocked, PendingAdminDecision, AdminApproved, AdminDenied, TimedOut, and ProvisioningStarted. */
    private ?string $subStatus = null;
    
    /**
     * Instantiates a new governanceRoleAssignmentRequestStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRoleAssignmentRequestStatus
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRoleAssignmentRequestStatus {
        return new GovernanceRoleAssignmentRequestStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'statusDetails' => function (self $o, ParseNode $n) { $o->setStatusDetails($n->getCollectionOfObjectValues(KeyValue::class)); },
            'subStatus' => function (self $o, ParseNode $n) { $o->setSubStatus($n->getStringValue()); },
        ];
    }

    /**
     * Gets the status property value. The status of the role assignment request. The value can be InProgress or Closed.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the statusDetails property value. The details of the status of the role assignment request. It represents the evaluation results of different rules.
     * @return array<KeyValue>|null
    */
    public function getStatusDetails(): ?array {
        return $this->statusDetails;
    }

    /**
     * Gets the subStatus property value. The sub status of the role assignment request. The values can be Accepted, PendingEvaluation, Granted, Denied, PendingProvisioning, Provisioned, PendingRevocation, Revoked, Canceled, Failed, PendingApprovalProvisioning, PendingApproval, FailedAsResourceIsLocked, PendingAdminDecision, AdminApproved, AdminDenied, TimedOut, and ProvisioningStarted.
     * @return string|null
    */
    public function getSubStatus(): ?string {
        return $this->subStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('status', $this->status);
        $writer->writeCollectionOfObjectValues('statusDetails', $this->statusDetails);
        $writer->writeStringValue('subStatus', $this->subStatus);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the status property value. The status of the role assignment request. The value can be InProgress or Closed.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the statusDetails property value. The details of the status of the role assignment request. It represents the evaluation results of different rules.
     *  @param array<KeyValue>|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?array $value ): void {
        $this->statusDetails = $value;
    }

    /**
     * Sets the subStatus property value. The sub status of the role assignment request. The values can be Accepted, PendingEvaluation, Granted, Denied, PendingProvisioning, Provisioned, PendingRevocation, Revoked, Canceled, Failed, PendingApprovalProvisioning, PendingApproval, FailedAsResourceIsLocked, PendingAdminDecision, AdminApproved, AdminDenied, TimedOut, and ProvisioningStarted.
     *  @param string|null $value Value to set for the subStatus property.
    */
    public function setSubStatus(?string $value ): void {
        $this->subStatus = $value;
    }

}
