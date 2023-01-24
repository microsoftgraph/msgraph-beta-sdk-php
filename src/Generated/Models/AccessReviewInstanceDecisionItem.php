<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessReviewInstanceDecisionItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItem {
        return new AccessReviewInstanceDecisionItem();
    }

    /**
     * Gets the accessReviewId property value. The identifier of the accessReviewInstance parent. Supports $select. Read-only.
     * @return string|null
    */
    public function getAccessReviewId(): ?string {
        return $this->getBackingStore()->get('accessReviewId');
    }

    /**
     * Gets the appliedBy property value. The identifier of the user who applied the decision. 00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't applied the decision or it was automatically applied. Read-only.
     * @return UserIdentity|null
    */
    public function getAppliedBy(): ?UserIdentity {
        return $this->getBackingStore()->get('appliedBy');
    }

    /**
     * Gets the appliedDateTime property value. The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getAppliedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('appliedDateTime');
    }

    /**
     * Gets the applyResult property value. The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getApplyResult(): ?string {
        return $this->getBackingStore()->get('applyResult');
    }

    /**
     * Gets the decision property value. Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
     * @return string|null
    */
    public function getDecision(): ?string {
        return $this->getBackingStore()->get('decision');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessReviewId' => fn(ParseNode $n) => $o->setAccessReviewId($n->getStringValue()),
            'appliedBy' => fn(ParseNode $n) => $o->setAppliedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'appliedDateTime' => fn(ParseNode $n) => $o->setAppliedDateTime($n->getDateTimeValue()),
            'applyResult' => fn(ParseNode $n) => $o->setApplyResult($n->getStringValue()),
            'decision' => fn(ParseNode $n) => $o->setDecision($n->getStringValue()),
            'insights' => fn(ParseNode $n) => $o->setInsights($n->getCollectionOfObjectValues([GovernanceInsight::class, 'createFromDiscriminatorValue'])),
            'instance' => fn(ParseNode $n) => $o->setInstance($n->getObjectValue([AccessReviewInstance::class, 'createFromDiscriminatorValue'])),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'principal' => fn(ParseNode $n) => $o->setPrincipal($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'principalLink' => fn(ParseNode $n) => $o->setPrincipalLink($n->getStringValue()),
            'principalResourceMembership' => fn(ParseNode $n) => $o->setPrincipalResourceMembership($n->getObjectValue([DecisionItemPrincipalResourceMembership::class, 'createFromDiscriminatorValue'])),
            'recommendation' => fn(ParseNode $n) => $o->setRecommendation($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([AccessReviewInstanceDecisionItemResource::class, 'createFromDiscriminatorValue'])),
            'resourceLink' => fn(ParseNode $n) => $o->setResourceLink($n->getStringValue()),
            'reviewedBy' => fn(ParseNode $n) => $o->setReviewedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'reviewedDateTime' => fn(ParseNode $n) => $o->setReviewedDateTime($n->getDateTimeValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([AccessReviewInstanceDecisionItemTarget::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the insights property value. Insights are recommendations to reviewers on whether to approve or deny a decision. There can be multiple insights associated with an accessReviewInstanceDecisionItem.
     * @return array<GovernanceInsight>|null
    */
    public function getInsights(): ?array {
        return $this->getBackingStore()->get('insights');
    }

    /**
     * Gets the instance property value. There is exactly one accessReviewInstance associated with each decision. The instance is the parent of the decision item, representing the recurrence of the access review the decision is made on.
     * @return AccessReviewInstance|null
    */
    public function getInstance(): ?AccessReviewInstance {
        return $this->getBackingStore()->get('instance');
    }

    /**
     * Gets the justification property value. Justification left by the reviewer when they made the decision.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->getBackingStore()->get('justification');
    }

    /**
     * Gets the principal property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
     * @return Identity|null
    */
    public function getPrincipal(): ?Identity {
        return $this->getBackingStore()->get('principal');
    }

    /**
     * Gets the principalLink property value. Link to the principal object. For example: https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
     * @return string|null
    */
    public function getPrincipalLink(): ?string {
        return $this->getBackingStore()->get('principalLink');
    }

    /**
     * Gets the principalResourceMembership property value. Every decision item in an access review represents a principal's membership to a resource. This property provides the details of the membership. For example, whether the principal has direct access or indirect access to the resource. Supports $select. Read-only.
     * @return DecisionItemPrincipalResourceMembership|null
    */
    public function getPrincipalResourceMembership(): ?DecisionItemPrincipalResourceMembership {
        return $this->getBackingStore()->get('principalResourceMembership');
    }

    /**
     * Gets the recommendation property value. A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getRecommendation(): ?string {
        return $this->getBackingStore()->get('recommendation');
    }

    /**
     * Gets the resource property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
     * @return AccessReviewInstanceDecisionItemResource|null
    */
    public function getResource(): ?AccessReviewInstanceDecisionItemResource {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Gets the resourceLink property value. A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
     * @return string|null
    */
    public function getResourceLink(): ?string {
        return $this->getBackingStore()->get('resourceLink');
    }

    /**
     * Gets the reviewedBy property value. The identifier of the reviewer. 00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Supports $select. Read-only.
     * @return UserIdentity|null
    */
    public function getReviewedBy(): ?UserIdentity {
        return $this->getBackingStore()->get('reviewedBy');
    }

    /**
     * Gets the reviewedDateTime property value. The timestamp when the review decision occurred. Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getReviewedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('reviewedDateTime');
    }

    /**
     * Gets the target property value. The target of this specific decision. Decision targets can be of different types – each one with its own specific properties. See accessReviewInstanceDecisionItemTarget. Read-only.  This property has been replaced by the principal and resource properties in v1.0.
     * @return AccessReviewInstanceDecisionItemTarget|null
    */
    public function getTarget(): ?AccessReviewInstanceDecisionItemTarget {
        return $this->getBackingStore()->get('target');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessReviewId', $this->getAccessReviewId());
        $writer->writeObjectValue('appliedBy', $this->getAppliedBy());
        $writer->writeDateTimeValue('appliedDateTime', $this->getAppliedDateTime());
        $writer->writeStringValue('applyResult', $this->getApplyResult());
        $writer->writeStringValue('decision', $this->getDecision());
        $writer->writeCollectionOfObjectValues('insights', $this->getInsights());
        $writer->writeObjectValue('instance', $this->getInstance());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeObjectValue('principal', $this->getPrincipal());
        $writer->writeStringValue('principalLink', $this->getPrincipalLink());
        $writer->writeObjectValue('principalResourceMembership', $this->getPrincipalResourceMembership());
        $writer->writeStringValue('recommendation', $this->getRecommendation());
        $writer->writeObjectValue('resource', $this->getResource());
        $writer->writeStringValue('resourceLink', $this->getResourceLink());
        $writer->writeObjectValue('reviewedBy', $this->getReviewedBy());
        $writer->writeDateTimeValue('reviewedDateTime', $this->getReviewedDateTime());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the accessReviewId property value. The identifier of the accessReviewInstance parent. Supports $select. Read-only.
     * @param string|null $value Value to set for the accessReviewId property.
    */
    public function setAccessReviewId(?string $value): void {
        $this->getBackingStore()->set('accessReviewId', $value);
    }

    /**
     * Sets the appliedBy property value. The identifier of the user who applied the decision. 00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't applied the decision or it was automatically applied. Read-only.
     * @param UserIdentity|null $value Value to set for the appliedBy property.
    */
    public function setAppliedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('appliedBy', $value);
    }

    /**
     * Sets the appliedDateTime property value. The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
     * @param DateTime|null $value Value to set for the appliedDateTime property.
    */
    public function setAppliedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('appliedDateTime', $value);
    }

    /**
     * Sets the applyResult property value. The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
     * @param string|null $value Value to set for the applyResult property.
    */
    public function setApplyResult(?string $value): void {
        $this->getBackingStore()->set('applyResult', $value);
    }

    /**
     * Sets the decision property value. Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
     * @param string|null $value Value to set for the decision property.
    */
    public function setDecision(?string $value): void {
        $this->getBackingStore()->set('decision', $value);
    }

    /**
     * Sets the insights property value. Insights are recommendations to reviewers on whether to approve or deny a decision. There can be multiple insights associated with an accessReviewInstanceDecisionItem.
     * @param array<GovernanceInsight>|null $value Value to set for the insights property.
    */
    public function setInsights(?array $value): void {
        $this->getBackingStore()->set('insights', $value);
    }

    /**
     * Sets the instance property value. There is exactly one accessReviewInstance associated with each decision. The instance is the parent of the decision item, representing the recurrence of the access review the decision is made on.
     * @param AccessReviewInstance|null $value Value to set for the instance property.
    */
    public function setInstance(?AccessReviewInstance $value): void {
        $this->getBackingStore()->set('instance', $value);
    }

    /**
     * Sets the justification property value. Justification left by the reviewer when they made the decision.
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the principal property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
     * @param Identity|null $value Value to set for the principal property.
    */
    public function setPrincipal(?Identity $value): void {
        $this->getBackingStore()->set('principal', $value);
    }

    /**
     * Sets the principalLink property value. Link to the principal object. For example: https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
     * @param string|null $value Value to set for the principalLink property.
    */
    public function setPrincipalLink(?string $value): void {
        $this->getBackingStore()->set('principalLink', $value);
    }

    /**
     * Sets the principalResourceMembership property value. Every decision item in an access review represents a principal's membership to a resource. This property provides the details of the membership. For example, whether the principal has direct access or indirect access to the resource. Supports $select. Read-only.
     * @param DecisionItemPrincipalResourceMembership|null $value Value to set for the principalResourceMembership property.
    */
    public function setPrincipalResourceMembership(?DecisionItemPrincipalResourceMembership $value): void {
        $this->getBackingStore()->set('principalResourceMembership', $value);
    }

    /**
     * Sets the recommendation property value. A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
     * @param string|null $value Value to set for the recommendation property.
    */
    public function setRecommendation(?string $value): void {
        $this->getBackingStore()->set('recommendation', $value);
    }

    /**
     * Sets the resource property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
     * @param AccessReviewInstanceDecisionItemResource|null $value Value to set for the resource property.
    */
    public function setResource(?AccessReviewInstanceDecisionItemResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceLink property value. A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
     * @param string|null $value Value to set for the resourceLink property.
    */
    public function setResourceLink(?string $value): void {
        $this->getBackingStore()->set('resourceLink', $value);
    }

    /**
     * Sets the reviewedBy property value. The identifier of the reviewer. 00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Supports $select. Read-only.
     * @param UserIdentity|null $value Value to set for the reviewedBy property.
    */
    public function setReviewedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('reviewedBy', $value);
    }

    /**
     * Sets the reviewedDateTime property value. The timestamp when the review decision occurred. Supports $select. Read-only.
     * @param DateTime|null $value Value to set for the reviewedDateTime property.
    */
    public function setReviewedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewedDateTime', $value);
    }

    /**
     * Sets the target property value. The target of this specific decision. Decision targets can be of different types – each one with its own specific properties. See accessReviewInstanceDecisionItemTarget. Read-only.  This property has been replaced by the principal and resource properties in v1.0.
     * @param AccessReviewInstanceDecisionItemTarget|null $value Value to set for the target property.
    */
    public function setTarget(?AccessReviewInstanceDecisionItemTarget $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
