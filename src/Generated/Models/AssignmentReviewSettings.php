<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AssignmentReviewSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AssignmentReviewSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentReviewSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentReviewSettings {
        return new AssignmentReviewSettings();
    }

    /**
     * Gets the accessReviewTimeoutBehavior property value. The default decision to apply if the request isn't reviewed within the period specified in durationInDays. The possible values are: acceptAccessRecommendation, keepAccess, removeAccess, and unknownFutureValue.
     * @return AccessReviewTimeoutBehavior|null
    */
    public function getAccessReviewTimeoutBehavior(): ?AccessReviewTimeoutBehavior {
        $val = $this->getBackingStore()->get('accessReviewTimeoutBehavior');
        if (is_null($val) || $val instanceof AccessReviewTimeoutBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessReviewTimeoutBehavior'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the durationInDays property value. The number of days within which reviewers should provide input.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        $val = $this->getBackingStore()->get('durationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationInDays'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessReviewTimeoutBehavior' => fn(ParseNode $n) => $o->setAccessReviewTimeoutBehavior($n->getEnumValue(AccessReviewTimeoutBehavior::class)),
            'durationInDays' => fn(ParseNode $n) => $o->setDurationInDays($n->getIntegerValue()),
            'isAccessRecommendationEnabled' => fn(ParseNode $n) => $o->setIsAccessRecommendationEnabled($n->getBooleanValue()),
            'isAgenticExperienceEnabled' => fn(ParseNode $n) => $o->setIsAgenticExperienceEnabled($n->getBooleanValue()),
            'isApprovalJustificationRequired' => fn(ParseNode $n) => $o->setIsApprovalJustificationRequired($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recurrenceType' => fn(ParseNode $n) => $o->setRecurrenceType($n->getStringValue()),
            'reviewers' => fn(ParseNode $n) => $o->setReviewers($n->getCollectionOfObjectValues([UserSet::class, 'createFromDiscriminatorValue'])),
            'reviewerType' => fn(ParseNode $n) => $o->setReviewerType($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the isAccessRecommendationEnabled property value. Specifies whether to display recommendations to the reviewer. The default value is true
     * @return bool|null
    */
    public function getIsAccessRecommendationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isAccessRecommendationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAccessRecommendationEnabled'");
    }

    /**
     * Gets the isAgenticExperienceEnabled property value. The isAgenticExperienceEnabled property
     * @return bool|null
    */
    public function getIsAgenticExperienceEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isAgenticExperienceEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAgenticExperienceEnabled'");
    }

    /**
     * Gets the isApprovalJustificationRequired property value. Specifies whether the reviewer must provide justification for the approval. The default value is true.
     * @return bool|null
    */
    public function getIsApprovalJustificationRequired(): ?bool {
        $val = $this->getBackingStore()->get('isApprovalJustificationRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApprovalJustificationRequired'");
    }

    /**
     * Gets the isEnabled property value. If true, access reviews are required for assignments from this policy.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the recurrenceType property value. The interval for recurrence, such as monthly or quarterly.
     * @return string|null
    */
    public function getRecurrenceType(): ?string {
        $val = $this->getBackingStore()->get('recurrenceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrenceType'");
    }

    /**
     * Gets the reviewers property value. If the reviewerType is Reviewers, this collection specifies the users who will be reviewers, either by ID or as members of a group, using a collection of singleUser and groupMembers.
     * @return array<UserSet>|null
    */
    public function getReviewers(): ?array {
        $val = $this->getBackingStore()->get('reviewers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSet::class);
            /** @var array<UserSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewers'");
    }

    /**
     * Gets the reviewerType property value. Who should be asked to do the review, either Self, Reviewers or Manager.
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
     * Gets the startDateTime property value. When the first review should start.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessReviewTimeoutBehavior', $this->getAccessReviewTimeoutBehavior());
        $writer->writeIntegerValue('durationInDays', $this->getDurationInDays());
        $writer->writeBooleanValue('isAccessRecommendationEnabled', $this->getIsAccessRecommendationEnabled());
        $writer->writeBooleanValue('isAgenticExperienceEnabled', $this->getIsAgenticExperienceEnabled());
        $writer->writeBooleanValue('isApprovalJustificationRequired', $this->getIsApprovalJustificationRequired());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('recurrenceType', $this->getRecurrenceType());
        $writer->writeCollectionOfObjectValues('reviewers', $this->getReviewers());
        $writer->writeStringValue('reviewerType', $this->getReviewerType());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessReviewTimeoutBehavior property value. The default decision to apply if the request isn't reviewed within the period specified in durationInDays. The possible values are: acceptAccessRecommendation, keepAccess, removeAccess, and unknownFutureValue.
     * @param AccessReviewTimeoutBehavior|null $value Value to set for the accessReviewTimeoutBehavior property.
    */
    public function setAccessReviewTimeoutBehavior(?AccessReviewTimeoutBehavior $value): void {
        $this->getBackingStore()->set('accessReviewTimeoutBehavior', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the durationInDays property value. The number of days within which reviewers should provide input.
     * @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value): void {
        $this->getBackingStore()->set('durationInDays', $value);
    }

    /**
     * Sets the isAccessRecommendationEnabled property value. Specifies whether to display recommendations to the reviewer. The default value is true
     * @param bool|null $value Value to set for the isAccessRecommendationEnabled property.
    */
    public function setIsAccessRecommendationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isAccessRecommendationEnabled', $value);
    }

    /**
     * Sets the isAgenticExperienceEnabled property value. The isAgenticExperienceEnabled property
     * @param bool|null $value Value to set for the isAgenticExperienceEnabled property.
    */
    public function setIsAgenticExperienceEnabled(?bool $value): void {
        $this->getBackingStore()->set('isAgenticExperienceEnabled', $value);
    }

    /**
     * Sets the isApprovalJustificationRequired property value. Specifies whether the reviewer must provide justification for the approval. The default value is true.
     * @param bool|null $value Value to set for the isApprovalJustificationRequired property.
    */
    public function setIsApprovalJustificationRequired(?bool $value): void {
        $this->getBackingStore()->set('isApprovalJustificationRequired', $value);
    }

    /**
     * Sets the isEnabled property value. If true, access reviews are required for assignments from this policy.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recurrenceType property value. The interval for recurrence, such as monthly or quarterly.
     * @param string|null $value Value to set for the recurrenceType property.
    */
    public function setRecurrenceType(?string $value): void {
        $this->getBackingStore()->set('recurrenceType', $value);
    }

    /**
     * Sets the reviewers property value. If the reviewerType is Reviewers, this collection specifies the users who will be reviewers, either by ID or as members of a group, using a collection of singleUser and groupMembers.
     * @param array<UserSet>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value): void {
        $this->getBackingStore()->set('reviewers', $value);
    }

    /**
     * Sets the reviewerType property value. Who should be asked to do the review, either Self, Reviewers or Manager.
     * @param string|null $value Value to set for the reviewerType property.
    */
    public function setReviewerType(?string $value): void {
        $this->getBackingStore()->set('reviewerType', $value);
    }

    /**
     * Sets the startDateTime property value. When the first review should start.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
