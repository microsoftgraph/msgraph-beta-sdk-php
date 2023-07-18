<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessReview extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new accessReview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('businessFlowTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'businessFlowTemplateId'");
    }

    /**
     * Gets the createdBy property value. The user who created this review.
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the decisions property value. The collection of decisions for this access review.
     * @return array<AccessReviewDecision>|null
    */
    public function getDecisions(): ?array {
        $val = $this->getBackingStore()->get('decisions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewDecision::class);
            /** @var array<AccessReviewDecision>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decisions'");
    }

    /**
     * Gets the description property value. The description provided by the access review creator, to show to the reviewers.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The access review name. Required on create.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the endDateTime property value. The DateTime when the review is scheduled to end. This must be at least one day later than the start date.  Required on create.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('instances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReview::class);
            /** @var array<AccessReview>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'instances'");
    }

    /**
     * Gets the myDecisions property value. The collection of decisions for the caller, if the caller is a reviewer.
     * @return array<AccessReviewDecision>|null
    */
    public function getMyDecisions(): ?array {
        $val = $this->getBackingStore()->get('myDecisions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewDecision::class);
            /** @var array<AccessReviewDecision>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'myDecisions'");
    }

    /**
     * Gets the reviewedEntity property value. The object for which the access reviews is reviewing the access rights assignments. This can be the group for the review of memberships of users in a group, or the app for a review of assignments of users to an application. Required on create.
     * @return Identity|null
    */
    public function getReviewedEntity(): ?Identity {
        $val = $this->getBackingStore()->get('reviewedEntity');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewedEntity'");
    }

    /**
     * Gets the reviewers property value. The collection of reviewers for an access review, if access review reviewerType is of type delegated.
     * @return array<AccessReviewReviewer>|null
    */
    public function getReviewers(): ?array {
        $val = $this->getBackingStore()->get('reviewers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewReviewer::class);
            /** @var array<AccessReviewReviewer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewers'");
    }

    /**
     * Gets the reviewerType property value. The relationship type of reviewer to the target object, one of self, delegated or entityOwners. Required on create.
     * @return string|null
    */
    public function getReviewerType(): ?string {
        $val = $this->getBackingStore()->get('reviewerType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewerType'");
    }

    /**
     * Gets the settings property value. The settings of an accessReview, see type definition below.
     * @return AccessReviewSettings|null
    */
    public function getSettings(): ?AccessReviewSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof AccessReviewSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the startDateTime property value. The DateTime when the review is scheduled to be start.  This could be a date in the future.  Required on create.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting,InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('reviewedEntity', $this->getReviewedEntity());
        $writer->writeCollectionOfObjectValues('reviewers', $this->getReviewers());
        $writer->writeStringValue('reviewerType', $this->getReviewerType());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the businessFlowTemplateId property value. The business flow template identifier. Required on create.  This value is case sensitive.
     * @param string|null $value Value to set for the businessFlowTemplateId property.
    */
    public function setBusinessFlowTemplateId(?string $value): void {
        $this->getBackingStore()->set('businessFlowTemplateId', $value);
    }

    /**
     * Sets the createdBy property value. The user who created this review.
     * @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the decisions property value. The collection of decisions for this access review.
     * @param array<AccessReviewDecision>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value): void {
        $this->getBackingStore()->set('decisions', $value);
    }

    /**
     * Sets the description property value. The description provided by the access review creator, to show to the reviewers.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The access review name. Required on create.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDateTime property value. The DateTime when the review is scheduled to end. This must be at least one day later than the start date.  Required on create.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the instances property value. The collection of access reviews instances past, present and future, if this object is a recurring access review.
     * @param array<AccessReview>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value): void {
        $this->getBackingStore()->set('instances', $value);
    }

    /**
     * Sets the myDecisions property value. The collection of decisions for the caller, if the caller is a reviewer.
     * @param array<AccessReviewDecision>|null $value Value to set for the myDecisions property.
    */
    public function setMyDecisions(?array $value): void {
        $this->getBackingStore()->set('myDecisions', $value);
    }

    /**
     * Sets the reviewedEntity property value. The object for which the access reviews is reviewing the access rights assignments. This can be the group for the review of memberships of users in a group, or the app for a review of assignments of users to an application. Required on create.
     * @param Identity|null $value Value to set for the reviewedEntity property.
    */
    public function setReviewedEntity(?Identity $value): void {
        $this->getBackingStore()->set('reviewedEntity', $value);
    }

    /**
     * Sets the reviewers property value. The collection of reviewers for an access review, if access review reviewerType is of type delegated.
     * @param array<AccessReviewReviewer>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value): void {
        $this->getBackingStore()->set('reviewers', $value);
    }

    /**
     * Sets the reviewerType property value. The relationship type of reviewer to the target object, one of self, delegated or entityOwners. Required on create.
     * @param string|null $value Value to set for the reviewerType property.
    */
    public function setReviewerType(?string $value): void {
        $this->getBackingStore()->set('reviewerType', $value);
    }

    /**
     * Sets the settings property value. The settings of an accessReview, see type definition below.
     * @param AccessReviewSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?AccessReviewSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the startDateTime property value. The DateTime when the review is scheduled to be start.  This could be a date in the future.  Required on create.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting,InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
