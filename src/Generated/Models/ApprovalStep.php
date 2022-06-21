<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApprovalStep extends Entity implements Parsable 
{
    /**
     * @var bool|null $assignedToMe Indicates whether the step is assigned to the calling user to review. Read-only.
    */
    private ?bool $assignedToMe = null;
    
    /**
     * @var string|null $displayName The label provided by the policy creator to identify an approval step. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $justification The justification associated with the approval step decision.
    */
    private ?string $justification = null;
    
    /**
     * @var Identity|null $reviewedBy The identifier of the reviewer. Read-only.
    */
    private ?Identity $reviewedBy = null;
    
    /**
     * @var DateTime|null $reviewedDateTime The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $reviewedDateTime = null;
    
    /**
     * @var string|null $reviewResult The result of this approval record. Possible values include: NotReviewed, Approved, Denied.
    */
    private ?string $reviewResult = null;
    
    /**
     * @var string|null $status The step status. Possible values: InProgress, Initializing, Completed, Expired. Read-only.
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new approvalStep and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalStep {
        return new ApprovalStep();
    }

    /**
     * Gets the assignedToMe property value. Indicates whether the step is assigned to the calling user to review. Read-only.
     * @return bool|null
    */
    public function getAssignedToMe(): ?bool {
        return $this->assignedToMe;
    }

    /**
     * Gets the displayName property value. The label provided by the policy creator to identify an approval step. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedToMe' => function (ParseNode $n) use ($o) { $o->setAssignedToMe($n->getBooleanValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'justification' => function (ParseNode $n) use ($o) { $o->setJustification($n->getStringValue()); },
            'reviewedBy' => function (ParseNode $n) use ($o) { $o->setReviewedBy($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'reviewedDateTime' => function (ParseNode $n) use ($o) { $o->setReviewedDateTime($n->getDateTimeValue()); },
            'reviewResult' => function (ParseNode $n) use ($o) { $o->setReviewResult($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the justification property value. The justification associated with the approval step decision.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the reviewedBy property value. The identifier of the reviewer. Read-only.
     * @return Identity|null
    */
    public function getReviewedBy(): ?Identity {
        return $this->reviewedBy;
    }

    /**
     * Gets the reviewedDateTime property value. The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getReviewedDateTime(): ?DateTime {
        return $this->reviewedDateTime;
    }

    /**
     * Gets the reviewResult property value. The result of this approval record. Possible values include: NotReviewed, Approved, Denied.
     * @return string|null
    */
    public function getReviewResult(): ?string {
        return $this->reviewResult;
    }

    /**
     * Gets the status property value. The step status. Possible values: InProgress, Initializing, Completed, Expired. Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('assignedToMe', $this->assignedToMe);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeObjectValue('reviewedBy', $this->reviewedBy);
        $writer->writeDateTimeValue('reviewedDateTime', $this->reviewedDateTime);
        $writer->writeStringValue('reviewResult', $this->reviewResult);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the assignedToMe property value. Indicates whether the step is assigned to the calling user to review. Read-only.
     *  @param bool|null $value Value to set for the assignedToMe property.
    */
    public function setAssignedToMe(?bool $value ): void {
        $this->assignedToMe = $value;
    }

    /**
     * Sets the displayName property value. The label provided by the policy creator to identify an approval step. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the justification property value. The justification associated with the approval step decision.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the reviewedBy property value. The identifier of the reviewer. Read-only.
     *  @param Identity|null $value Value to set for the reviewedBy property.
    */
    public function setReviewedBy(?Identity $value ): void {
        $this->reviewedBy = $value;
    }

    /**
     * Sets the reviewedDateTime property value. The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the reviewedDateTime property.
    */
    public function setReviewedDateTime(?DateTime $value ): void {
        $this->reviewedDateTime = $value;
    }

    /**
     * Sets the reviewResult property value. The result of this approval record. Possible values include: NotReviewed, Approved, Denied.
     *  @param string|null $value Value to set for the reviewResult property.
    */
    public function setReviewResult(?string $value ): void {
        $this->reviewResult = $value;
    }

    /**
     * Sets the status property value. The step status. Possible values: InProgress, Initializing, Completed, Expired. Read-only.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
