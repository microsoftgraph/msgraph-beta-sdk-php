<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewStageSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $decisionsThatWillMoveToNextStage Indicate which decisions will go to the next stage. Can be a sub-set of Approve, Deny, Recommendation, or NotReviewed. If not provided, all decisions will go to the next stage. Optional. */
    private ?array $decisionsThatWillMoveToNextStage = null;
    
    /** @var array<string>|null $dependsOn Defines the sequential or parallel order of the stages and depends on the stageId. Only sequential stages are currently supported. For example, if stageId is 2, then dependsOn must be 1. If stageId is 1, do not specify dependsOn. Required if stageId is not 1. */
    private ?array $dependsOn = null;
    
    /** @var int|null $durationInDays The duration of the stage. Required.  NOTE: The cumulative value of this property across all stages  1. Will override the instanceDurationInDays setting on the accessReviewScheduleDefinition object. 2. Cannot exceed the length of one recurrence. That is, if the review recurs weekly, the cumulative durationInDays cannot exceed 7. */
    private ?int $durationInDays = null;
    
    /** @var array<AccessReviewReviewerScope>|null $fallbackReviewers If provided, the fallback reviewers are asked to complete a review if the primary reviewers do not exist. For example, if managers are selected as reviewers and a principal under review does not have a manager in Azure AD, the fallback reviewers are asked to review that principal. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition object. */
    private ?array $fallbackReviewers = null;
    
    /** @var array<AccessReviewRecommendationInsightSetting>|null $recommendationInsightSettings The recommendationInsightSettings property */
    private ?array $recommendationInsightSettings = null;
    
    /** @var DateInterval|null $recommendationLookBackDuration Optional field. Indicates the time period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition object. */
    private ?DateInterval $recommendationLookBackDuration = null;
    
    /** @var bool|null $recommendationsEnabled Indicates whether showing recommendations to reviewers is enabled. Required. NOTE: The value of this property will override override the corresponding setting on the accessReviewScheduleDefinition object. */
    private ?bool $recommendationsEnabled = null;
    
    /** @var array<AccessReviewReviewerScope>|null $reviewers Defines who the reviewers are. If none are specified, the review is a self-review (users review their own access).  For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition. */
    private ?array $reviewers = null;
    
    /** @var string|null $stageId Unique identifier of the accessReviewStageSettings. The stageId will be used in dependsOn property to indicate the stage relationship. Required. */
    private ?string $stageId = null;
    
    /**
     * Instantiates a new accessReviewStageSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewStageSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewStageSettings {
        return new AccessReviewStageSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the decisionsThatWillMoveToNextStage property value. Indicate which decisions will go to the next stage. Can be a sub-set of Approve, Deny, Recommendation, or NotReviewed. If not provided, all decisions will go to the next stage. Optional.
     * @return array<string>|null
    */
    public function getDecisionsThatWillMoveToNextStage(): ?array {
        return $this->decisionsThatWillMoveToNextStage;
    }

    /**
     * Gets the dependsOn property value. Defines the sequential or parallel order of the stages and depends on the stageId. Only sequential stages are currently supported. For example, if stageId is 2, then dependsOn must be 1. If stageId is 1, do not specify dependsOn. Required if stageId is not 1.
     * @return array<string>|null
    */
    public function getDependsOn(): ?array {
        return $this->dependsOn;
    }

    /**
     * Gets the durationInDays property value. The duration of the stage. Required.  NOTE: The cumulative value of this property across all stages  1. Will override the instanceDurationInDays setting on the accessReviewScheduleDefinition object. 2. Cannot exceed the length of one recurrence. That is, if the review recurs weekly, the cumulative durationInDays cannot exceed 7.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        return $this->durationInDays;
    }

    /**
     * Gets the fallbackReviewers property value. If provided, the fallback reviewers are asked to complete a review if the primary reviewers do not exist. For example, if managers are selected as reviewers and a principal under review does not have a manager in Azure AD, the fallback reviewers are asked to review that principal. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition object.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getFallbackReviewers(): ?array {
        return $this->fallbackReviewers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'decisionsThatWillMoveToNextStage' => function (self $o, ParseNode $n) { $o->setDecisionsThatWillMoveToNextStage($n->getCollectionOfPrimitiveValues()); },
            'dependsOn' => function (self $o, ParseNode $n) { $o->setDependsOn($n->getCollectionOfPrimitiveValues()); },
            'durationInDays' => function (self $o, ParseNode $n) { $o->setDurationInDays($n->getIntegerValue()); },
            'fallbackReviewers' => function (self $o, ParseNode $n) { $o->setFallbackReviewers($n->getCollectionOfObjectValues(AccessReviewReviewerScope::class)); },
            'recommendationInsightSettings' => function (self $o, ParseNode $n) { $o->setRecommendationInsightSettings($n->getCollectionOfObjectValues(AccessReviewRecommendationInsightSetting::class)); },
            'recommendationLookBackDuration' => function (self $o, ParseNode $n) { $o->setRecommendationLookBackDuration($n->getDateIntervalValue()); },
            'recommendationsEnabled' => function (self $o, ParseNode $n) { $o->setRecommendationsEnabled($n->getBooleanValue()); },
            'reviewers' => function (self $o, ParseNode $n) { $o->setReviewers($n->getCollectionOfObjectValues(AccessReviewReviewerScope::class)); },
            'stageId' => function (self $o, ParseNode $n) { $o->setStageId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the recommendationInsightSettings property value. The recommendationInsightSettings property
     * @return array<AccessReviewRecommendationInsightSetting>|null
    */
    public function getRecommendationInsightSettings(): ?array {
        return $this->recommendationInsightSettings;
    }

    /**
     * Gets the recommendationLookBackDuration property value. Optional field. Indicates the time period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition object.
     * @return DateInterval|null
    */
    public function getRecommendationLookBackDuration(): ?DateInterval {
        return $this->recommendationLookBackDuration;
    }

    /**
     * Gets the recommendationsEnabled property value. Indicates whether showing recommendations to reviewers is enabled. Required. NOTE: The value of this property will override override the corresponding setting on the accessReviewScheduleDefinition object.
     * @return bool|null
    */
    public function getRecommendationsEnabled(): ?bool {
        return $this->recommendationsEnabled;
    }

    /**
     * Gets the reviewers property value. Defines who the reviewers are. If none are specified, the review is a self-review (users review their own access).  For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getReviewers(): ?array {
        return $this->reviewers;
    }

    /**
     * Gets the stageId property value. Unique identifier of the accessReviewStageSettings. The stageId will be used in dependsOn property to indicate the stage relationship. Required.
     * @return string|null
    */
    public function getStageId(): ?string {
        return $this->stageId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('decisionsThatWillMoveToNextStage', $this->decisionsThatWillMoveToNextStage);
        $writer->writeCollectionOfPrimitiveValues('dependsOn', $this->dependsOn);
        $writer->writeIntegerValue('durationInDays', $this->durationInDays);
        $writer->writeCollectionOfObjectValues('fallbackReviewers', $this->fallbackReviewers);
        $writer->writeCollectionOfObjectValues('recommendationInsightSettings', $this->recommendationInsightSettings);
        $writer->writeDateIntervalValue('recommendationLookBackDuration', $this->recommendationLookBackDuration);
        $writer->writeBooleanValue('recommendationsEnabled', $this->recommendationsEnabled);
        $writer->writeCollectionOfObjectValues('reviewers', $this->reviewers);
        $writer->writeStringValue('stageId', $this->stageId);
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
     * Sets the decisionsThatWillMoveToNextStage property value. Indicate which decisions will go to the next stage. Can be a sub-set of Approve, Deny, Recommendation, or NotReviewed. If not provided, all decisions will go to the next stage. Optional.
     *  @param array<string>|null $value Value to set for the decisionsThatWillMoveToNextStage property.
    */
    public function setDecisionsThatWillMoveToNextStage(?array $value ): void {
        $this->decisionsThatWillMoveToNextStage = $value;
    }

    /**
     * Sets the dependsOn property value. Defines the sequential or parallel order of the stages and depends on the stageId. Only sequential stages are currently supported. For example, if stageId is 2, then dependsOn must be 1. If stageId is 1, do not specify dependsOn. Required if stageId is not 1.
     *  @param array<string>|null $value Value to set for the dependsOn property.
    */
    public function setDependsOn(?array $value ): void {
        $this->dependsOn = $value;
    }

    /**
     * Sets the durationInDays property value. The duration of the stage. Required.  NOTE: The cumulative value of this property across all stages  1. Will override the instanceDurationInDays setting on the accessReviewScheduleDefinition object. 2. Cannot exceed the length of one recurrence. That is, if the review recurs weekly, the cumulative durationInDays cannot exceed 7.
     *  @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value ): void {
        $this->durationInDays = $value;
    }

    /**
     * Sets the fallbackReviewers property value. If provided, the fallback reviewers are asked to complete a review if the primary reviewers do not exist. For example, if managers are selected as reviewers and a principal under review does not have a manager in Azure AD, the fallback reviewers are asked to review that principal. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition object.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value ): void {
        $this->fallbackReviewers = $value;
    }

    /**
     * Sets the recommendationInsightSettings property value. The recommendationInsightSettings property
     *  @param array<AccessReviewRecommendationInsightSetting>|null $value Value to set for the recommendationInsightSettings property.
    */
    public function setRecommendationInsightSettings(?array $value ): void {
        $this->recommendationInsightSettings = $value;
    }

    /**
     * Sets the recommendationLookBackDuration property value. Optional field. Indicates the time period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition object.
     *  @param DateInterval|null $value Value to set for the recommendationLookBackDuration property.
    */
    public function setRecommendationLookBackDuration(?DateInterval $value ): void {
        $this->recommendationLookBackDuration = $value;
    }

    /**
     * Sets the recommendationsEnabled property value. Indicates whether showing recommendations to reviewers is enabled. Required. NOTE: The value of this property will override override the corresponding setting on the accessReviewScheduleDefinition object.
     *  @param bool|null $value Value to set for the recommendationsEnabled property.
    */
    public function setRecommendationsEnabled(?bool $value ): void {
        $this->recommendationsEnabled = $value;
    }

    /**
     * Sets the reviewers property value. Defines who the reviewers are. If none are specified, the review is a self-review (users review their own access).  For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value ): void {
        $this->reviewers = $value;
    }

    /**
     * Sets the stageId property value. Unique identifier of the accessReviewStageSettings. The stageId will be used in dependsOn property to indicate the stage relationship. Required.
     *  @param string|null $value Value to set for the stageId property.
    */
    public function setStageId(?string $value ): void {
        $this->stageId = $value;
    }

}
