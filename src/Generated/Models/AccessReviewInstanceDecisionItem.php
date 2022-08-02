<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItem extends Entity implements Parsable 
{
    /**
     * @var string|null $accessReviewId The identifier of the accessReviewInstance parent. Supports $select. Read-only.
    */
    private ?string $accessReviewId = null;
    
    /**
     * @var UserIdentity|null $appliedBy The identifier of the user who applied the decision. Read-only.
    */
    private ?UserIdentity $appliedBy = null;
    
    /**
     * @var DateTime|null $appliedDateTime The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
    */
    private ?DateTime $appliedDateTime = null;
    
    /**
     * @var string|null $applyResult The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
    */
    private ?string $applyResult = null;
    
    /**
     * @var string|null $decision Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
    */
    private ?string $decision = null;
    
    /**
     * @var array<GovernanceInsight>|null $insights Insights are recommendations to reviewers on whether to approve or deny a decision. There can be multiple insights associated with an accessReviewInstanceDecisionItem.
    */
    private ?array $insights = null;
    
    /**
     * @var AccessReviewInstance|null $instance There is exactly one accessReviewInstance associated with each decision. The instance is the parent of the decision item, representing the recurrence of the access review the decision is made on.
    */
    private ?AccessReviewInstance $instance = null;
    
    /**
     * @var string|null $justification Justification left by the reviewer when they made the decision.
    */
    private ?string $justification = null;
    
    /**
     * @var Identity|null $principal Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
    */
    private ?Identity $principal = null;
    
    /**
     * @var string|null $principalLink Link to the principal object. For example: https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
    */
    private ?string $principalLink = null;
    
    /**
     * @var DecisionItemPrincipalResourceMembership|null $principalResourceMembership Every decision item in an access review represents a principal's membership to a resource. This property provides the details of the membership. For example, whether the principal has direct access or indirect access to the resource. Supports $select. Read-only.
    */
    private ?DecisionItemPrincipalResourceMembership $principalResourceMembership = null;
    
    /**
     * @var string|null $recommendation A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
    */
    private ?string $recommendation = null;
    
    /**
     * @var AccessReviewInstanceDecisionItemResource|null $resource Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
    */
    private ?AccessReviewInstanceDecisionItemResource $resource = null;
    
    /**
     * @var string|null $resourceLink A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
    */
    private ?string $resourceLink = null;
    
    /**
     * @var UserIdentity|null $reviewedBy The identifier of the reviewer. Supports $select. Read-only.
    */
    private ?UserIdentity $reviewedBy = null;
    
    /**
     * @var DateTime|null $reviewedDateTime The timestamp when the review decision occurred. Supports $select. Read-only.
    */
    private ?DateTime $reviewedDateTime = null;
    
    /**
     * @var AccessReviewInstanceDecisionItemTarget|null $target The target of this specific decision. Decision targets can be of different types – each one with its own specific properties. See accessReviewInstanceDecisionItemTarget. Read-only.  This property has been replaced by the principal and resource properties in v1.0.
    */
    private ?AccessReviewInstanceDecisionItemTarget $target = null;
    
    /**
     * Instantiates a new accessReviewInstanceDecisionItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewInstanceDecisionItem');
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
        return $this->accessReviewId;
    }

    /**
     * Gets the appliedBy property value. The identifier of the user who applied the decision. Read-only.
     * @return UserIdentity|null
    */
    public function getAppliedBy(): ?UserIdentity {
        return $this->appliedBy;
    }

    /**
     * Gets the appliedDateTime property value. The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getAppliedDateTime(): ?DateTime {
        return $this->appliedDateTime;
    }

    /**
     * Gets the applyResult property value. The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getApplyResult(): ?string {
        return $this->applyResult;
    }

    /**
     * Gets the decision property value. Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
     * @return string|null
    */
    public function getDecision(): ?string {
        return $this->decision;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessReviewId' => function (ParseNode $n) use ($o) { $o->setAccessReviewId($n->getStringValue()); },
            'appliedBy' => function (ParseNode $n) use ($o) { $o->setAppliedBy($n->getObjectValue(array(UserIdentity::class, 'createFromDiscriminatorValue'))); },
            'appliedDateTime' => function (ParseNode $n) use ($o) { $o->setAppliedDateTime($n->getDateTimeValue()); },
            'applyResult' => function (ParseNode $n) use ($o) { $o->setApplyResult($n->getStringValue()); },
            'decision' => function (ParseNode $n) use ($o) { $o->setDecision($n->getStringValue()); },
            'insights' => function (ParseNode $n) use ($o) { $o->setInsights($n->getCollectionOfObjectValues(array(GovernanceInsight::class, 'createFromDiscriminatorValue'))); },
            'instance' => function (ParseNode $n) use ($o) { $o->setInstance($n->getObjectValue(array(AccessReviewInstance::class, 'createFromDiscriminatorValue'))); },
            'justification' => function (ParseNode $n) use ($o) { $o->setJustification($n->getStringValue()); },
            'principal' => function (ParseNode $n) use ($o) { $o->setPrincipal($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'principalLink' => function (ParseNode $n) use ($o) { $o->setPrincipalLink($n->getStringValue()); },
            'principalResourceMembership' => function (ParseNode $n) use ($o) { $o->setPrincipalResourceMembership($n->getObjectValue(array(DecisionItemPrincipalResourceMembership::class, 'createFromDiscriminatorValue'))); },
            'recommendation' => function (ParseNode $n) use ($o) { $o->setRecommendation($n->getStringValue()); },
            'resource' => function (ParseNode $n) use ($o) { $o->setResource($n->getObjectValue(array(AccessReviewInstanceDecisionItemResource::class, 'createFromDiscriminatorValue'))); },
            'resourceLink' => function (ParseNode $n) use ($o) { $o->setResourceLink($n->getStringValue()); },
            'reviewedBy' => function (ParseNode $n) use ($o) { $o->setReviewedBy($n->getObjectValue(array(UserIdentity::class, 'createFromDiscriminatorValue'))); },
            'reviewedDateTime' => function (ParseNode $n) use ($o) { $o->setReviewedDateTime($n->getDateTimeValue()); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(AccessReviewInstanceDecisionItemTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the insights property value. Insights are recommendations to reviewers on whether to approve or deny a decision. There can be multiple insights associated with an accessReviewInstanceDecisionItem.
     * @return array<GovernanceInsight>|null
    */
    public function getInsights(): ?array {
        return $this->insights;
    }

    /**
     * Gets the instance property value. There is exactly one accessReviewInstance associated with each decision. The instance is the parent of the decision item, representing the recurrence of the access review the decision is made on.
     * @return AccessReviewInstance|null
    */
    public function getInstance(): ?AccessReviewInstance {
        return $this->instance;
    }

    /**
     * Gets the justification property value. Justification left by the reviewer when they made the decision.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the principal property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
     * @return Identity|null
    */
    public function getPrincipal(): ?Identity {
        return $this->principal;
    }

    /**
     * Gets the principalLink property value. Link to the principal object. For example: https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
     * @return string|null
    */
    public function getPrincipalLink(): ?string {
        return $this->principalLink;
    }

    /**
     * Gets the principalResourceMembership property value. Every decision item in an access review represents a principal's membership to a resource. This property provides the details of the membership. For example, whether the principal has direct access or indirect access to the resource. Supports $select. Read-only.
     * @return DecisionItemPrincipalResourceMembership|null
    */
    public function getPrincipalResourceMembership(): ?DecisionItemPrincipalResourceMembership {
        return $this->principalResourceMembership;
    }

    /**
     * Gets the recommendation property value. A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getRecommendation(): ?string {
        return $this->recommendation;
    }

    /**
     * Gets the resource property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
     * @return AccessReviewInstanceDecisionItemResource|null
    */
    public function getResource(): ?AccessReviewInstanceDecisionItemResource {
        return $this->resource;
    }

    /**
     * Gets the resourceLink property value. A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
     * @return string|null
    */
    public function getResourceLink(): ?string {
        return $this->resourceLink;
    }

    /**
     * Gets the reviewedBy property value. The identifier of the reviewer. Supports $select. Read-only.
     * @return UserIdentity|null
    */
    public function getReviewedBy(): ?UserIdentity {
        return $this->reviewedBy;
    }

    /**
     * Gets the reviewedDateTime property value. The timestamp when the review decision occurred. Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getReviewedDateTime(): ?DateTime {
        return $this->reviewedDateTime;
    }

    /**
     * Gets the target property value. The target of this specific decision. Decision targets can be of different types – each one with its own specific properties. See accessReviewInstanceDecisionItemTarget. Read-only.  This property has been replaced by the principal and resource properties in v1.0.
     * @return AccessReviewInstanceDecisionItemTarget|null
    */
    public function getTarget(): ?AccessReviewInstanceDecisionItemTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessReviewId', $this->accessReviewId);
        $writer->writeObjectValue('appliedBy', $this->appliedBy);
        $writer->writeDateTimeValue('appliedDateTime', $this->appliedDateTime);
        $writer->writeStringValue('applyResult', $this->applyResult);
        $writer->writeStringValue('decision', $this->decision);
        $writer->writeCollectionOfObjectValues('insights', $this->insights);
        $writer->writeObjectValue('instance', $this->instance);
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeObjectValue('principal', $this->principal);
        $writer->writeStringValue('principalLink', $this->principalLink);
        $writer->writeObjectValue('principalResourceMembership', $this->principalResourceMembership);
        $writer->writeStringValue('recommendation', $this->recommendation);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeStringValue('resourceLink', $this->resourceLink);
        $writer->writeObjectValue('reviewedBy', $this->reviewedBy);
        $writer->writeDateTimeValue('reviewedDateTime', $this->reviewedDateTime);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the accessReviewId property value. The identifier of the accessReviewInstance parent. Supports $select. Read-only.
     *  @param string|null $value Value to set for the accessReviewId property.
    */
    public function setAccessReviewId(?string $value ): void {
        $this->accessReviewId = $value;
    }

    /**
     * Sets the appliedBy property value. The identifier of the user who applied the decision. Read-only.
     *  @param UserIdentity|null $value Value to set for the appliedBy property.
    */
    public function setAppliedBy(?UserIdentity $value ): void {
        $this->appliedBy = $value;
    }

    /**
     * Sets the appliedDateTime property value. The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
     *  @param DateTime|null $value Value to set for the appliedDateTime property.
    */
    public function setAppliedDateTime(?DateTime $value ): void {
        $this->appliedDateTime = $value;
    }

    /**
     * Sets the applyResult property value. The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
     *  @param string|null $value Value to set for the applyResult property.
    */
    public function setApplyResult(?string $value ): void {
        $this->applyResult = $value;
    }

    /**
     * Sets the decision property value. Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
     *  @param string|null $value Value to set for the decision property.
    */
    public function setDecision(?string $value ): void {
        $this->decision = $value;
    }

    /**
     * Sets the insights property value. Insights are recommendations to reviewers on whether to approve or deny a decision. There can be multiple insights associated with an accessReviewInstanceDecisionItem.
     *  @param array<GovernanceInsight>|null $value Value to set for the insights property.
    */
    public function setInsights(?array $value ): void {
        $this->insights = $value;
    }

    /**
     * Sets the instance property value. There is exactly one accessReviewInstance associated with each decision. The instance is the parent of the decision item, representing the recurrence of the access review the decision is made on.
     *  @param AccessReviewInstance|null $value Value to set for the instance property.
    */
    public function setInstance(?AccessReviewInstance $value ): void {
        $this->instance = $value;
    }

    /**
     * Sets the justification property value. Justification left by the reviewer when they made the decision.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the principal property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
     *  @param Identity|null $value Value to set for the principal property.
    */
    public function setPrincipal(?Identity $value ): void {
        $this->principal = $value;
    }

    /**
     * Sets the principalLink property value. Link to the principal object. For example: https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
     *  @param string|null $value Value to set for the principalLink property.
    */
    public function setPrincipalLink(?string $value ): void {
        $this->principalLink = $value;
    }

    /**
     * Sets the principalResourceMembership property value. Every decision item in an access review represents a principal's membership to a resource. This property provides the details of the membership. For example, whether the principal has direct access or indirect access to the resource. Supports $select. Read-only.
     *  @param DecisionItemPrincipalResourceMembership|null $value Value to set for the principalResourceMembership property.
    */
    public function setPrincipalResourceMembership(?DecisionItemPrincipalResourceMembership $value ): void {
        $this->principalResourceMembership = $value;
    }

    /**
     * Sets the recommendation property value. A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
     *  @param string|null $value Value to set for the recommendation property.
    */
    public function setRecommendation(?string $value ): void {
        $this->recommendation = $value;
    }

    /**
     * Sets the resource property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
     *  @param AccessReviewInstanceDecisionItemResource|null $value Value to set for the resource property.
    */
    public function setResource(?AccessReviewInstanceDecisionItemResource $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceLink property value. A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
     *  @param string|null $value Value to set for the resourceLink property.
    */
    public function setResourceLink(?string $value ): void {
        $this->resourceLink = $value;
    }

    /**
     * Sets the reviewedBy property value. The identifier of the reviewer. Supports $select. Read-only.
     *  @param UserIdentity|null $value Value to set for the reviewedBy property.
    */
    public function setReviewedBy(?UserIdentity $value ): void {
        $this->reviewedBy = $value;
    }

    /**
     * Sets the reviewedDateTime property value. The timestamp when the review decision occurred. Supports $select. Read-only.
     *  @param DateTime|null $value Value to set for the reviewedDateTime property.
    */
    public function setReviewedDateTime(?DateTime $value ): void {
        $this->reviewedDateTime = $value;
    }

    /**
     * Sets the target property value. The target of this specific decision. Decision targets can be of different types – each one with its own specific properties. See accessReviewInstanceDecisionItemTarget. Read-only.  This property has been replaced by the principal and resource properties in v1.0.
     *  @param AccessReviewInstanceDecisionItemTarget|null $value Value to set for the target property.
    */
    public function setTarget(?AccessReviewInstanceDecisionItemTarget $value ): void {
        $this->target = $value;
    }

}
