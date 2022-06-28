<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReview extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $businessFlowTemplateId The business flow template identifier. Required on create.  This value is case sensitive.
    */
    private ?string $businessFlowTemplateId = null;
    
    /**
     * @var UserIdentity|null $createdBy The user who created this review.
    */
    private ?UserIdentity $createdBy = null;
    
    /**
     * @var array<AccessReviewDecision>|null $decisions The collection of decisions for this access review.
    */
    private ?array $decisions = null;
    
    /**
     * @var string|null $description The description provided by the access review creator, to show to the reviewers.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The access review name. Required on create.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $endDateTime The DateTime when the review is scheduled to end. This must be at least one day later than the start date.  Required on create.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var array<AccessReview>|null $instances The collection of access reviews instances past, present and future, if this object is a recurring access review.
    */
    private ?array $instances = null;
    
    /**
     * @var array<AccessReviewDecision>|null $myDecisions The collection of decisions for the caller, if the caller is a reviewer.
    */
    private ?array $myDecisions = null;
    
    /**
     * @var Identity|null $reviewedEntity The object for which the access reviews is reviewing the access rights assignments. This can be the group for the review of memberships of users in a group, or the app for a review of assignments of users to an application. Required on create.
    */
    private ?Identity $reviewedEntity = null;
    
    /**
     * @var array<AccessReviewReviewer>|null $reviewers The collection of reviewers for an access review, if access review reviewerType is of type delegated.
    */
    private ?array $reviewers = null;
    
    /**
     * @var string|null $reviewerType The relationship type of reviewer to the target object, one of self, delegated or entityOwners. Required on create.
    */
    private ?string $reviewerType = null;
    
    /**
     * @var AccessReviewSettings|null $settings The settings of an accessReview, see type definition below.
    */
    private ?AccessReviewSettings $settings = null;
    
    /**
     * @var DateTime|null $startDateTime The DateTime when the review is scheduled to be start.  This could be a date in the future.  Required on create.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $status This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting,InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new AccessReview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the businessFlowTemplateId property value. The business flow template identifier. Required on create.  This value is case sensitive.
     * @return string|null
    */
    public function getBusinessFlowTemplateId(): ?string {
        return $this->businessFlowTemplateId;
    }

    /**
     * Gets the createdBy property value. The user who created this review.
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the decisions property value. The collection of decisions for this access review.
     * @return array<AccessReviewDecision>|null
    */
    public function getDecisions(): ?array {
        return $this->decisions;
    }

    /**
     * Gets the description property value. The description provided by the access review creator, to show to the reviewers.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The access review name. Required on create.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endDateTime property value. The DateTime when the review is scheduled to end. This must be at least one day later than the start date.  Required on create.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'businessFlowTemplateId' => function (ParseNode $n) use ($o) { $o->setBusinessFlowTemplateId($n->getStringValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(UserIdentity::class, 'createFromDiscriminatorValue'))); },
            'decisions' => function (ParseNode $n) use ($o) { $o->setDecisions($n->getCollectionOfObjectValues(array(AccessReviewDecision::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'instances' => function (ParseNode $n) use ($o) { $o->setInstances($n->getCollectionOfObjectValues(array(AccessReview::class, 'createFromDiscriminatorValue'))); },
            'myDecisions' => function (ParseNode $n) use ($o) { $o->setMyDecisions($n->getCollectionOfObjectValues(array(AccessReviewDecision::class, 'createFromDiscriminatorValue'))); },
            'reviewedEntity' => function (ParseNode $n) use ($o) { $o->setReviewedEntity($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'reviewers' => function (ParseNode $n) use ($o) { $o->setReviewers($n->getCollectionOfObjectValues(array(AccessReviewReviewer::class, 'createFromDiscriminatorValue'))); },
            'reviewerType' => function (ParseNode $n) use ($o) { $o->setReviewerType($n->getStringValue()); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(AccessReviewSettings::class, 'createFromDiscriminatorValue'))); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the instances property value. The collection of access reviews instances past, present and future, if this object is a recurring access review.
     * @return array<AccessReview>|null
    */
    public function getInstances(): ?array {
        return $this->instances;
    }

    /**
     * Gets the myDecisions property value. The collection of decisions for the caller, if the caller is a reviewer.
     * @return array<AccessReviewDecision>|null
    */
    public function getMyDecisions(): ?array {
        return $this->myDecisions;
    }

    /**
     * Gets the reviewedEntity property value. The object for which the access reviews is reviewing the access rights assignments. This can be the group for the review of memberships of users in a group, or the app for a review of assignments of users to an application. Required on create.
     * @return Identity|null
    */
    public function getReviewedEntity(): ?Identity {
        return $this->reviewedEntity;
    }

    /**
     * Gets the reviewers property value. The collection of reviewers for an access review, if access review reviewerType is of type delegated.
     * @return array<AccessReviewReviewer>|null
    */
    public function getReviewers(): ?array {
        return $this->reviewers;
    }

    /**
     * Gets the reviewerType property value. The relationship type of reviewer to the target object, one of self, delegated or entityOwners. Required on create.
     * @return string|null
    */
    public function getReviewerType(): ?string {
        return $this->reviewerType;
    }

    /**
     * Gets the settings property value. The settings of an accessReview, see type definition below.
     * @return AccessReviewSettings|null
    */
    public function getSettings(): ?AccessReviewSettings {
        return $this->settings;
    }

    /**
     * Gets the startDateTime property value. The DateTime when the review is scheduled to be start.  This could be a date in the future.  Required on create.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting,InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
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
        $writer->writeStringValue('businessFlowTemplateId', $this->businessFlowTemplateId);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeCollectionOfObjectValues('decisions', $this->decisions);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeCollectionOfObjectValues('instances', $this->instances);
        $writer->writeCollectionOfObjectValues('myDecisions', $this->myDecisions);
        $writer->writeObjectValue('reviewedEntity', $this->reviewedEntity);
        $writer->writeCollectionOfObjectValues('reviewers', $this->reviewers);
        $writer->writeStringValue('reviewerType', $this->reviewerType);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('status', $this->status);
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
     * Sets the businessFlowTemplateId property value. The business flow template identifier. Required on create.  This value is case sensitive.
     *  @param string|null $value Value to set for the businessFlowTemplateId property.
    */
    public function setBusinessFlowTemplateId(?string $value ): void {
        $this->businessFlowTemplateId = $value;
    }

    /**
     * Sets the createdBy property value. The user who created this review.
     *  @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the decisions property value. The collection of decisions for this access review.
     *  @param array<AccessReviewDecision>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value ): void {
        $this->decisions = $value;
    }

    /**
     * Sets the description property value. The description provided by the access review creator, to show to the reviewers.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The access review name. Required on create.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endDateTime property value. The DateTime when the review is scheduled to end. This must be at least one day later than the start date.  Required on create.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the instances property value. The collection of access reviews instances past, present and future, if this object is a recurring access review.
     *  @param array<AccessReview>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value ): void {
        $this->instances = $value;
    }

    /**
     * Sets the myDecisions property value. The collection of decisions for the caller, if the caller is a reviewer.
     *  @param array<AccessReviewDecision>|null $value Value to set for the myDecisions property.
    */
    public function setMyDecisions(?array $value ): void {
        $this->myDecisions = $value;
    }

    /**
     * Sets the reviewedEntity property value. The object for which the access reviews is reviewing the access rights assignments. This can be the group for the review of memberships of users in a group, or the app for a review of assignments of users to an application. Required on create.
     *  @param Identity|null $value Value to set for the reviewedEntity property.
    */
    public function setReviewedEntity(?Identity $value ): void {
        $this->reviewedEntity = $value;
    }

    /**
     * Sets the reviewers property value. The collection of reviewers for an access review, if access review reviewerType is of type delegated.
     *  @param array<AccessReviewReviewer>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value ): void {
        $this->reviewers = $value;
    }

    /**
     * Sets the reviewerType property value. The relationship type of reviewer to the target object, one of self, delegated or entityOwners. Required on create.
     *  @param string|null $value Value to set for the reviewerType property.
    */
    public function setReviewerType(?string $value ): void {
        $this->reviewerType = $value;
    }

    /**
     * Sets the settings property value. The settings of an accessReview, see type definition below.
     *  @param AccessReviewSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?AccessReviewSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the startDateTime property value. The DateTime when the review is scheduled to be start.  This could be a date in the future.  Required on create.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting,InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
