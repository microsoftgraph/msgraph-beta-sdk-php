<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReview extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessReview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReview');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReview {
        return new AccessReview();
    }

    /**
     * Gets the businessFlowTemplateId property value. The business flow template identifier. Required on create.  This value is case sensitive.
     * @return string|null
    */
    public function getBusinessFlowTemplateId(): ?string {
        return $this->getBackingStore()->get('businessFlowTemplateId');
    }

    /**
     * Gets the createdBy property value. The user who created this review.
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the decisions property value. The collection of decisions for this access review.
     * @return array<AccessReviewDecision>|null
    */
    public function getDecisions(): ?array {
        return $this->getBackingStore()->get('decisions');
    }

    /**
     * Gets the description property value. The description provided by the access review creator, to show to the reviewers.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The access review name. Required on create.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the endDateTime property value. The DateTime when the review is scheduled to end. This must be at least one day later than the start date.  Required on create.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'businessFlowTemplateId' => fn(ParseNode $n) => $o->setBusinessFlowTemplateId($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'decisions' => fn(ParseNode $n) => $o->setDecisions($n->getCollectionOfObjectValues([AccessReviewDecision::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'instances' => fn(ParseNode $n) => $o->setInstances($n->getCollectionOfObjectValues([AccessReview::class, 'createFromDiscriminatorValue'])),
            'myDecisions' => fn(ParseNode $n) => $o->setMyDecisions($n->getCollectionOfObjectValues([AccessReviewDecision::class, 'createFromDiscriminatorValue'])),
            'reviewedEntity' => fn(ParseNode $n) => $o->setReviewedEntity($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'reviewers' => fn(ParseNode $n) => $o->setReviewers($n->getCollectionOfObjectValues([AccessReviewReviewer::class, 'createFromDiscriminatorValue'])),
            'reviewerType' => fn(ParseNode $n) => $o->setReviewerType($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([AccessReviewSettings::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the instances property value. The collection of access reviews instances past, present and future, if this object is a recurring access review.
     * @return array<AccessReview>|null
    */
    public function getInstances(): ?array {
        return $this->getBackingStore()->get('instances');
    }

    /**
     * Gets the myDecisions property value. The collection of decisions for the caller, if the caller is a reviewer.
     * @return array<AccessReviewDecision>|null
    */
    public function getMyDecisions(): ?array {
        return $this->getBackingStore()->get('myDecisions');
    }

    /**
     * Gets the reviewedEntity property value. The object for which the access reviews is reviewing the access rights assignments. This can be the group for the review of memberships of users in a group, or the app for a review of assignments of users to an application. Required on create.
     * @return Identity|null
    */
    public function getReviewedEntity(): ?Identity {
        return $this->getBackingStore()->get('reviewedEntity');
    }

    /**
     * Gets the reviewers property value. The collection of reviewers for an access review, if access review reviewerType is of type delegated.
     * @return array<AccessReviewReviewer>|null
    */
    public function getReviewers(): ?array {
        return $this->getBackingStore()->get('reviewers');
    }

    /**
     * Gets the reviewerType property value. The relationship type of reviewer to the target object, one of self, delegated or entityOwners. Required on create.
     * @return string|null
    */
    public function getReviewerType(): ?string {
        return $this->getBackingStore()->get('reviewerType');
    }

    /**
     * Gets the settings property value. The settings of an accessReview, see type definition below.
     * @return AccessReviewSettings|null
    */
    public function getSettings(): ?AccessReviewSettings {
        return $this->getBackingStore()->get('settings');
    }

    /**
     * Gets the startDateTime property value. The DateTime when the review is scheduled to be start.  This could be a date in the future.  Required on create.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the status property value. This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting,InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('businessFlowTemplateId', $this->getBusinessFlowTemplateId());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeCollectionOfObjectValues('decisions', $this->getDecisions());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeCollectionOfObjectValues('instances', $this->getInstances());
        $writer->writeCollectionOfObjectValues('myDecisions', $this->getMyDecisions());
        $writer->writeObjectValue('reviewedEntity', $this->getReviewedEntity());
        $writer->writeCollectionOfObjectValues('reviewers', $this->getReviewers());
        $writer->writeStringValue('reviewerType', $this->getReviewerType());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the businessFlowTemplateId property value. The business flow template identifier. Required on create.  This value is case sensitive.
     *  @param string|null $value Value to set for the businessFlowTemplateId property.
    */
    public function setBusinessFlowTemplateId(?string $value): void {
        $this->getBackingStore()->set('businessFlowTemplateId', $value);
    }

    /**
     * Sets the createdBy property value. The user who created this review.
     *  @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the decisions property value. The collection of decisions for this access review.
     *  @param array<AccessReviewDecision>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value): void {
        $this->getBackingStore()->set('decisions', $value);
    }

    /**
     * Sets the description property value. The description provided by the access review creator, to show to the reviewers.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The access review name. Required on create.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDateTime property value. The DateTime when the review is scheduled to end. This must be at least one day later than the start date.  Required on create.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the instances property value. The collection of access reviews instances past, present and future, if this object is a recurring access review.
     *  @param array<AccessReview>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value): void {
        $this->getBackingStore()->set('instances', $value);
    }

    /**
     * Sets the myDecisions property value. The collection of decisions for the caller, if the caller is a reviewer.
     *  @param array<AccessReviewDecision>|null $value Value to set for the myDecisions property.
    */
    public function setMyDecisions(?array $value): void {
        $this->getBackingStore()->set('myDecisions', $value);
    }

    /**
     * Sets the reviewedEntity property value. The object for which the access reviews is reviewing the access rights assignments. This can be the group for the review of memberships of users in a group, or the app for a review of assignments of users to an application. Required on create.
     *  @param Identity|null $value Value to set for the reviewedEntity property.
    */
    public function setReviewedEntity(?Identity $value): void {
        $this->getBackingStore()->set('reviewedEntity', $value);
    }

    /**
     * Sets the reviewers property value. The collection of reviewers for an access review, if access review reviewerType is of type delegated.
     *  @param array<AccessReviewReviewer>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value): void {
        $this->getBackingStore()->set('reviewers', $value);
    }

    /**
     * Sets the reviewerType property value. The relationship type of reviewer to the target object, one of self, delegated or entityOwners. Required on create.
     *  @param string|null $value Value to set for the reviewerType property.
    */
    public function setReviewerType(?string $value): void {
        $this->getBackingStore()->set('reviewerType', $value);
    }

    /**
     * Sets the settings property value. The settings of an accessReview, see type definition below.
     *  @param AccessReviewSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?AccessReviewSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the startDateTime property value. The DateTime when the review is scheduled to be start.  This could be a date in the future.  Required on create.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting,InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
