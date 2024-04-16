<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewDecision extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessReviewDecision and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewDecision
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewDecision {
        return new AccessReviewDecision();
    }

    /**
     * Gets the accessRecommendation property value. The feature- generated recommendation shown to the reviewer, one of: Approve, Deny, NotAvailable.
     * @return string|null
    */
    public function getAccessRecommendation(): ?string {
        $val = $this->getBackingStore()->get('accessRecommendation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessRecommendation'");
    }

    /**
     * Gets the accessReviewId property value. The feature-generated ID of the access review.
     * @return string|null
    */
    public function getAccessReviewId(): ?string {
        $val = $this->getBackingStore()->get('accessReviewId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessReviewId'");
    }

    /**
     * Gets the appliedBy property value. When the review completes, if the results were manually applied, the user identity of the user who applied the decision. If the review was autoapplied, the userPrincipalName is empty.
     * @return UserIdentity|null
    */
    public function getAppliedBy(): ?UserIdentity {
        $val = $this->getBackingStore()->get('appliedBy');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedBy'");
    }

    /**
     * Gets the appliedDateTime property value. The date and time when the review decision was applied.
     * @return DateTime|null
    */
    public function getAppliedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('appliedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedDateTime'");
    }

    /**
     * Gets the applyResult property value. The outcome of applying the decision, one of: NotApplied, Success, Failed, NotFound, NotSupported.
     * @return string|null
    */
    public function getApplyResult(): ?string {
        $val = $this->getBackingStore()->get('applyResult');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applyResult'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessRecommendation' => fn(ParseNode $n) => $o->setAccessRecommendation($n->getStringValue()),
            'accessReviewId' => fn(ParseNode $n) => $o->setAccessReviewId($n->getStringValue()),
            'appliedBy' => fn(ParseNode $n) => $o->setAppliedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'appliedDateTime' => fn(ParseNode $n) => $o->setAppliedDateTime($n->getDateTimeValue()),
            'applyResult' => fn(ParseNode $n) => $o->setApplyResult($n->getStringValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'reviewedBy' => fn(ParseNode $n) => $o->setReviewedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'reviewedDateTime' => fn(ParseNode $n) => $o->setReviewedDateTime($n->getDateTimeValue()),
            'reviewResult' => fn(ParseNode $n) => $o->setReviewResult($n->getStringValue()),
        ]);
    }

    /**
     * Gets the justification property value. The reviewer's business justification, if supplied.
     * @return string|null
    */
    public function getJustification(): ?string {
        $val = $this->getBackingStore()->get('justification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justification'");
    }

    /**
     * Gets the reviewedBy property value. The identity of the reviewer. If the recommendation was used as the review, the userPrincipalName is empty.
     * @return UserIdentity|null
    */
    public function getReviewedBy(): ?UserIdentity {
        $val = $this->getBackingStore()->get('reviewedBy');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewedBy'");
    }

    /**
     * Gets the reviewedDateTime property value. The reviewedDateTime property
     * @return DateTime|null
    */
    public function getReviewedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('reviewedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewedDateTime'");
    }

    /**
     * Gets the reviewResult property value. The result of the review, one of NotReviewed, Deny, DontKnow or Approve.
     * @return string|null
    */
    public function getReviewResult(): ?string {
        $val = $this->getBackingStore()->get('reviewResult');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewResult'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessRecommendation', $this->getAccessRecommendation());
        $writer->writeStringValue('accessReviewId', $this->getAccessReviewId());
        $writer->writeObjectValue('appliedBy', $this->getAppliedBy());
        $writer->writeDateTimeValue('appliedDateTime', $this->getAppliedDateTime());
        $writer->writeStringValue('applyResult', $this->getApplyResult());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeObjectValue('reviewedBy', $this->getReviewedBy());
        $writer->writeDateTimeValue('reviewedDateTime', $this->getReviewedDateTime());
        $writer->writeStringValue('reviewResult', $this->getReviewResult());
    }

    /**
     * Sets the accessRecommendation property value. The feature- generated recommendation shown to the reviewer, one of: Approve, Deny, NotAvailable.
     * @param string|null $value Value to set for the accessRecommendation property.
    */
    public function setAccessRecommendation(?string $value): void {
        $this->getBackingStore()->set('accessRecommendation', $value);
    }

    /**
     * Sets the accessReviewId property value. The feature-generated ID of the access review.
     * @param string|null $value Value to set for the accessReviewId property.
    */
    public function setAccessReviewId(?string $value): void {
        $this->getBackingStore()->set('accessReviewId', $value);
    }

    /**
     * Sets the appliedBy property value. When the review completes, if the results were manually applied, the user identity of the user who applied the decision. If the review was autoapplied, the userPrincipalName is empty.
     * @param UserIdentity|null $value Value to set for the appliedBy property.
    */
    public function setAppliedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('appliedBy', $value);
    }

    /**
     * Sets the appliedDateTime property value. The date and time when the review decision was applied.
     * @param DateTime|null $value Value to set for the appliedDateTime property.
    */
    public function setAppliedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('appliedDateTime', $value);
    }

    /**
     * Sets the applyResult property value. The outcome of applying the decision, one of: NotApplied, Success, Failed, NotFound, NotSupported.
     * @param string|null $value Value to set for the applyResult property.
    */
    public function setApplyResult(?string $value): void {
        $this->getBackingStore()->set('applyResult', $value);
    }

    /**
     * Sets the justification property value. The reviewer's business justification, if supplied.
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the reviewedBy property value. The identity of the reviewer. If the recommendation was used as the review, the userPrincipalName is empty.
     * @param UserIdentity|null $value Value to set for the reviewedBy property.
    */
    public function setReviewedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('reviewedBy', $value);
    }

    /**
     * Sets the reviewedDateTime property value. The reviewedDateTime property
     * @param DateTime|null $value Value to set for the reviewedDateTime property.
    */
    public function setReviewedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewedDateTime', $value);
    }

    /**
     * Sets the reviewResult property value. The result of the review, one of NotReviewed, Deny, DontKnow or Approve.
     * @param string|null $value Value to set for the reviewResult property.
    */
    public function setReviewResult(?string $value): void {
        $this->getBackingStore()->set('reviewResult', $value);
    }

}
