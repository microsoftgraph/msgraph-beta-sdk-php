<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentReviewSettings implements AdditionalDataHolder, Parsable 
{
    /** @var AccessReviewTimeoutBehavior|null $accessReviewTimeoutBehavior The default decision to apply if the request is not reviewed within the period specified in durationInDays. The possible values are: acceptAccessRecommendation, keepAccess, removeAccess, and unknownFutureValue. */
    private ?AccessReviewTimeoutBehavior $accessReviewTimeoutBehavior = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $durationInDays The number of days within which reviewers should provide input. */
    private ?int $durationInDays = null;
    
    /** @var bool|null $isAccessRecommendationEnabled Specifies whether to display recommendations to the reviewer. The default value is true */
    private ?bool $isAccessRecommendationEnabled = null;
    
    /** @var bool|null $isApprovalJustificationRequired Specifies whether the reviewer must provide justification for the approval. The default value is true. */
    private ?bool $isApprovalJustificationRequired = null;
    
    /** @var bool|null $isEnabled If true, access reviews are required for assignments from this policy. */
    private ?bool $isEnabled = null;
    
    /** @var string|null $recurrenceType The interval for recurrence, such as monthly or quarterly. */
    private ?string $recurrenceType = null;
    
    /** @var array<UserSet>|null $reviewers If the reviewerType is Reviewers, this collection specifies the users who will be reviewers, either by ID or as members of a group, using a collection of singleUser and groupMembers. */
    private ?array $reviewers = null;
    
    /** @var string|null $reviewerType Who should be asked to do the review, either Self or Reviewers. */
    private ?string $reviewerType = null;
    
    /** @var DateTime|null $startDateTime When the first review should start. */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new assignmentReviewSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentReviewSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentReviewSettings {
        return new AssignmentReviewSettings();
    }

    /**
     * Gets the accessReviewTimeoutBehavior property value. The default decision to apply if the request is not reviewed within the period specified in durationInDays. The possible values are: acceptAccessRecommendation, keepAccess, removeAccess, and unknownFutureValue.
     * @return AccessReviewTimeoutBehavior|null
    */
    public function getAccessReviewTimeoutBehavior(): ?AccessReviewTimeoutBehavior {
        return $this->accessReviewTimeoutBehavior;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the durationInDays property value. The number of days within which reviewers should provide input.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        return $this->durationInDays;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'accessReviewTimeoutBehavior' => function (self $o, ParseNode $n) { $o->setAccessReviewTimeoutBehavior($n->getEnumValue(AccessReviewTimeoutBehavior::class)); },
            'durationInDays' => function (self $o, ParseNode $n) { $o->setDurationInDays($n->getIntegerValue()); },
            'isAccessRecommendationEnabled' => function (self $o, ParseNode $n) { $o->setIsAccessRecommendationEnabled($n->getBooleanValue()); },
            'isApprovalJustificationRequired' => function (self $o, ParseNode $n) { $o->setIsApprovalJustificationRequired($n->getBooleanValue()); },
            'isEnabled' => function (self $o, ParseNode $n) { $o->setIsEnabled($n->getBooleanValue()); },
            'recurrenceType' => function (self $o, ParseNode $n) { $o->setRecurrenceType($n->getStringValue()); },
            'reviewers' => function (self $o, ParseNode $n) { $o->setReviewers($n->getCollectionOfObjectValues(UserSet::class)); },
            'reviewerType' => function (self $o, ParseNode $n) { $o->setReviewerType($n->getStringValue()); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the isAccessRecommendationEnabled property value. Specifies whether to display recommendations to the reviewer. The default value is true
     * @return bool|null
    */
    public function getIsAccessRecommendationEnabled(): ?bool {
        return $this->isAccessRecommendationEnabled;
    }

    /**
     * Gets the isApprovalJustificationRequired property value. Specifies whether the reviewer must provide justification for the approval. The default value is true.
     * @return bool|null
    */
    public function getIsApprovalJustificationRequired(): ?bool {
        return $this->isApprovalJustificationRequired;
    }

    /**
     * Gets the isEnabled property value. If true, access reviews are required for assignments from this policy.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the recurrenceType property value. The interval for recurrence, such as monthly or quarterly.
     * @return string|null
    */
    public function getRecurrenceType(): ?string {
        return $this->recurrenceType;
    }

    /**
     * Gets the reviewers property value. If the reviewerType is Reviewers, this collection specifies the users who will be reviewers, either by ID or as members of a group, using a collection of singleUser and groupMembers.
     * @return array<UserSet>|null
    */
    public function getReviewers(): ?array {
        return $this->reviewers;
    }

    /**
     * Gets the reviewerType property value. Who should be asked to do the review, either Self or Reviewers.
     * @return string|null
    */
    public function getReviewerType(): ?string {
        return $this->reviewerType;
    }

    /**
     * Gets the startDateTime property value. When the first review should start.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessReviewTimeoutBehavior', $this->accessReviewTimeoutBehavior);
        $writer->writeIntegerValue('durationInDays', $this->durationInDays);
        $writer->writeBooleanValue('isAccessRecommendationEnabled', $this->isAccessRecommendationEnabled);
        $writer->writeBooleanValue('isApprovalJustificationRequired', $this->isApprovalJustificationRequired);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeStringValue('recurrenceType', $this->recurrenceType);
        $writer->writeCollectionOfObjectValues('reviewers', $this->reviewers);
        $writer->writeStringValue('reviewerType', $this->reviewerType);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessReviewTimeoutBehavior property value. The default decision to apply if the request is not reviewed within the period specified in durationInDays. The possible values are: acceptAccessRecommendation, keepAccess, removeAccess, and unknownFutureValue.
     *  @param AccessReviewTimeoutBehavior|null $value Value to set for the accessReviewTimeoutBehavior property.
    */
    public function setAccessReviewTimeoutBehavior(?AccessReviewTimeoutBehavior $value ): void {
        $this->accessReviewTimeoutBehavior = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the durationInDays property value. The number of days within which reviewers should provide input.
     *  @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value ): void {
        $this->durationInDays = $value;
    }

    /**
     * Sets the isAccessRecommendationEnabled property value. Specifies whether to display recommendations to the reviewer. The default value is true
     *  @param bool|null $value Value to set for the isAccessRecommendationEnabled property.
    */
    public function setIsAccessRecommendationEnabled(?bool $value ): void {
        $this->isAccessRecommendationEnabled = $value;
    }

    /**
     * Sets the isApprovalJustificationRequired property value. Specifies whether the reviewer must provide justification for the approval. The default value is true.
     *  @param bool|null $value Value to set for the isApprovalJustificationRequired property.
    */
    public function setIsApprovalJustificationRequired(?bool $value ): void {
        $this->isApprovalJustificationRequired = $value;
    }

    /**
     * Sets the isEnabled property value. If true, access reviews are required for assignments from this policy.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the recurrenceType property value. The interval for recurrence, such as monthly or quarterly.
     *  @param string|null $value Value to set for the recurrenceType property.
    */
    public function setRecurrenceType(?string $value ): void {
        $this->recurrenceType = $value;
    }

    /**
     * Sets the reviewers property value. If the reviewerType is Reviewers, this collection specifies the users who will be reviewers, either by ID or as members of a group, using a collection of singleUser and groupMembers.
     *  @param array<UserSet>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value ): void {
        $this->reviewers = $value;
    }

    /**
     * Sets the reviewerType property value. Who should be asked to do the review, either Self or Reviewers.
     *  @param string|null $value Value to set for the reviewerType property.
    */
    public function setReviewerType(?string $value ): void {
        $this->reviewerType = $value;
    }

    /**
     * Sets the startDateTime property value. When the first review should start.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
