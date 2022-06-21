<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewDecision extends Entity 
{
    /** @var string|null $accessRecommendation The feature- generated recommendation shown to the reviewer, one of Approve, Deny or NotAvailable. */
    private ?string $accessRecommendation = null;
    
    /** @var string|null $accessReviewId The feature-generated id of the access review. */
    private ?string $accessReviewId = null;
    
    /** @var UserIdentity|null $appliedBy When the review completes, if the results were manually applied, the user identity of the user who applied the decision. If the review was auto-applied, the userPrincipalName is empty. */
    private ?UserIdentity $appliedBy = null;
    
    /** @var DateTime|null $appliedDateTime The date and time when the review decision was applied. */
    private ?DateTime $appliedDateTime = null;
    
    /** @var string|null $applyResult The outcome of applying the decision, one of NotApplied, Success, Failed, NotFound or NotSupported. */
    private ?string $applyResult = null;
    
    /** @var string|null $justification The reviewer's business justification, if supplied. */
    private ?string $justification = null;
    
    /** @var UserIdentity|null $reviewedBy The identity of the reviewer. If the recommendation was used as the review, the userPrincipalName is empty. */
    private ?UserIdentity $reviewedBy = null;
    
    /** @var DateTime|null $reviewedDateTime The reviewedDateTime property */
    private ?DateTime $reviewedDateTime = null;
    
    /** @var string|null $reviewResult The result of the review, one of NotReviewed, Deny, DontKnow or Approve. */
    private ?string $reviewResult = null;
    
    /**
     * Instantiates a new accessReviewDecision and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewDecision
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewDecision {
        return new AccessReviewDecision();
    }

    /**
     * Gets the accessRecommendation property value. The feature- generated recommendation shown to the reviewer, one of Approve, Deny or NotAvailable.
     * @return string|null
    */
    public function getAccessRecommendation(): ?string {
        return $this->accessRecommendation;
    }

    /**
     * Gets the accessReviewId property value. The feature-generated id of the access review.
     * @return string|null
    */
    public function getAccessReviewId(): ?string {
        return $this->accessReviewId;
    }

    /**
     * Gets the appliedBy property value. When the review completes, if the results were manually applied, the user identity of the user who applied the decision. If the review was auto-applied, the userPrincipalName is empty.
     * @return UserIdentity|null
    */
    public function getAppliedBy(): ?UserIdentity {
        return $this->appliedBy;
    }

    /**
     * Gets the appliedDateTime property value. The date and time when the review decision was applied.
     * @return DateTime|null
    */
    public function getAppliedDateTime(): ?DateTime {
        return $this->appliedDateTime;
    }

    /**
     * Gets the applyResult property value. The outcome of applying the decision, one of NotApplied, Success, Failed, NotFound or NotSupported.
     * @return string|null
    */
    public function getApplyResult(): ?string {
        return $this->applyResult;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accessRecommendation' => function (self $o, ParseNode $n) { $o->setAccessRecommendation($n->getStringValue()); },
            'accessReviewId' => function (self $o, ParseNode $n) { $o->setAccessReviewId($n->getStringValue()); },
            'appliedBy' => function (self $o, ParseNode $n) { $o->setAppliedBy($n->getObjectValue(UserIdentity::class)); },
            'appliedDateTime' => function (self $o, ParseNode $n) { $o->setAppliedDateTime($n->getDateTimeValue()); },
            'applyResult' => function (self $o, ParseNode $n) { $o->setApplyResult($n->getStringValue()); },
            'justification' => function (self $o, ParseNode $n) { $o->setJustification($n->getStringValue()); },
            'reviewedBy' => function (self $o, ParseNode $n) { $o->setReviewedBy($n->getObjectValue(UserIdentity::class)); },
            'reviewedDateTime' => function (self $o, ParseNode $n) { $o->setReviewedDateTime($n->getDateTimeValue()); },
            'reviewResult' => function (self $o, ParseNode $n) { $o->setReviewResult($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the justification property value. The reviewer's business justification, if supplied.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the reviewedBy property value. The identity of the reviewer. If the recommendation was used as the review, the userPrincipalName is empty.
     * @return UserIdentity|null
    */
    public function getReviewedBy(): ?UserIdentity {
        return $this->reviewedBy;
    }

    /**
     * Gets the reviewedDateTime property value. The reviewedDateTime property
     * @return DateTime|null
    */
    public function getReviewedDateTime(): ?DateTime {
        return $this->reviewedDateTime;
    }

    /**
     * Gets the reviewResult property value. The result of the review, one of NotReviewed, Deny, DontKnow or Approve.
     * @return string|null
    */
    public function getReviewResult(): ?string {
        return $this->reviewResult;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessRecommendation', $this->accessRecommendation);
        $writer->writeStringValue('accessReviewId', $this->accessReviewId);
        $writer->writeObjectValue('appliedBy', $this->appliedBy);
        $writer->writeDateTimeValue('appliedDateTime', $this->appliedDateTime);
        $writer->writeStringValue('applyResult', $this->applyResult);
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeObjectValue('reviewedBy', $this->reviewedBy);
        $writer->writeDateTimeValue('reviewedDateTime', $this->reviewedDateTime);
        $writer->writeStringValue('reviewResult', $this->reviewResult);
    }

    /**
     * Sets the accessRecommendation property value. The feature- generated recommendation shown to the reviewer, one of Approve, Deny or NotAvailable.
     *  @param string|null $value Value to set for the accessRecommendation property.
    */
    public function setAccessRecommendation(?string $value ): void {
        $this->accessRecommendation = $value;
    }

    /**
     * Sets the accessReviewId property value. The feature-generated id of the access review.
     *  @param string|null $value Value to set for the accessReviewId property.
    */
    public function setAccessReviewId(?string $value ): void {
        $this->accessReviewId = $value;
    }

    /**
     * Sets the appliedBy property value. When the review completes, if the results were manually applied, the user identity of the user who applied the decision. If the review was auto-applied, the userPrincipalName is empty.
     *  @param UserIdentity|null $value Value to set for the appliedBy property.
    */
    public function setAppliedBy(?UserIdentity $value ): void {
        $this->appliedBy = $value;
    }

    /**
     * Sets the appliedDateTime property value. The date and time when the review decision was applied.
     *  @param DateTime|null $value Value to set for the appliedDateTime property.
    */
    public function setAppliedDateTime(?DateTime $value ): void {
        $this->appliedDateTime = $value;
    }

    /**
     * Sets the applyResult property value. The outcome of applying the decision, one of NotApplied, Success, Failed, NotFound or NotSupported.
     *  @param string|null $value Value to set for the applyResult property.
    */
    public function setApplyResult(?string $value ): void {
        $this->applyResult = $value;
    }

    /**
     * Sets the justification property value. The reviewer's business justification, if supplied.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the reviewedBy property value. The identity of the reviewer. If the recommendation was used as the review, the userPrincipalName is empty.
     *  @param UserIdentity|null $value Value to set for the reviewedBy property.
    */
    public function setReviewedBy(?UserIdentity $value ): void {
        $this->reviewedBy = $value;
    }

    /**
     * Sets the reviewedDateTime property value. The reviewedDateTime property
     *  @param DateTime|null $value Value to set for the reviewedDateTime property.
    */
    public function setReviewedDateTime(?DateTime $value ): void {
        $this->reviewedDateTime = $value;
    }

    /**
     * Sets the reviewResult property value. The result of the review, one of NotReviewed, Deny, DontKnow or Approve.
     *  @param string|null $value Value to set for the reviewResult property.
    */
    public function setReviewResult(?string $value ): void {
        $this->reviewResult = $value;
    }

}
