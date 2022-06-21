<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewScheduleSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AccessReviewApplyAction>|null $applyActions Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
    */
    private ?array $applyActions = null;
    
    /**
     * @var bool|null $autoApplyDecisionsEnabled Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.
    */
    private ?bool $autoApplyDecisionsEnabled = null;
    
    /**
     * @var bool|null $decisionHistoriesForReviewersEnabled Indicates whether decisions on previous access review stages are available for reviewers on an accessReviewInstance with multiple subsequent stages. If not provided, the default is disabled (false).
    */
    private ?bool $decisionHistoriesForReviewersEnabled = null;
    
    /**
     * @var string|null $defaultDecision Decision chosen if defaultDecisionEnabled is enabled. Can be one of Approve, Deny, or Recommendation.
    */
    private ?string $defaultDecision = null;
    
    /**
     * @var bool|null $defaultDecisionEnabled Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.
    */
    private ?bool $defaultDecisionEnabled = null;
    
    /**
     * @var int|null $instanceDurationInDays Duration of each recurrence of review (accessReviewInstance) in number of days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its durationInDays setting will be used instead of the value of this property.
    */
    private ?int $instanceDurationInDays = null;
    
    /**
     * @var bool|null $justificationRequiredOnApproval Indicates whether reviewers are required to provide justification with their decision. Default value is false.
    */
    private ?bool $justificationRequiredOnApproval = null;
    
    /**
     * @var bool|null $mailNotificationsEnabled Indicates whether emails are enabled or disabled. Default value is false.
    */
    private ?bool $mailNotificationsEnabled = null;
    
    /**
     * @var array<AccessReviewRecommendationInsightSetting>|null $recommendationInsightSettings Optional. Describes the types of insights that aid reviewers to make access review decisions. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationInsightSettings setting will be used instead of the value of this property.
    */
    private ?array $recommendationInsightSettings = null;
    
    /**
     * @var DateInterval|null $recommendationLookBackDuration Optional field. Indicates the period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationLookBackDuration setting will be used instead of the value of this property.
    */
    private ?DateInterval $recommendationLookBackDuration = null;
    
    /**
     * @var bool|null $recommendationsEnabled Indicates whether decision recommendations are enabled or disabled. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationsEnabled setting will be used instead of the value of this property.
    */
    private ?bool $recommendationsEnabled = null;
    
    /**
     * @var PatternedRecurrence|null $recurrence Detailed settings for recurrence using the standard Outlook recurrence object. Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
    */
    private ?PatternedRecurrence $recurrence = null;
    
    /**
     * @var bool|null $reminderNotificationsEnabled Indicates whether reminders are enabled or disabled. Default value is false.
    */
    private ?bool $reminderNotificationsEnabled = null;
    
    /**
     * Instantiates a new accessReviewScheduleSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewScheduleSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewScheduleSettings {
        return new AccessReviewScheduleSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applyActions property value. Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
     * @return array<AccessReviewApplyAction>|null
    */
    public function getApplyActions(): ?array {
        return $this->applyActions;
    }

    /**
     * Gets the autoApplyDecisionsEnabled property value. Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.
     * @return bool|null
    */
    public function getAutoApplyDecisionsEnabled(): ?bool {
        return $this->autoApplyDecisionsEnabled;
    }

    /**
     * Gets the decisionHistoriesForReviewersEnabled property value. Indicates whether decisions on previous access review stages are available for reviewers on an accessReviewInstance with multiple subsequent stages. If not provided, the default is disabled (false).
     * @return bool|null
    */
    public function getDecisionHistoriesForReviewersEnabled(): ?bool {
        return $this->decisionHistoriesForReviewersEnabled;
    }

    /**
     * Gets the defaultDecision property value. Decision chosen if defaultDecisionEnabled is enabled. Can be one of Approve, Deny, or Recommendation.
     * @return string|null
    */
    public function getDefaultDecision(): ?string {
        return $this->defaultDecision;
    }

    /**
     * Gets the defaultDecisionEnabled property value. Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.
     * @return bool|null
    */
    public function getDefaultDecisionEnabled(): ?bool {
        return $this->defaultDecisionEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applyActions' => function (ParseNode $n) use ($o) { $o->setApplyActions($n->getCollectionOfObjectValues(array(AccessReviewApplyAction::class, 'createFromDiscriminatorValue'))); },
            'autoApplyDecisionsEnabled' => function (ParseNode $n) use ($o) { $o->setAutoApplyDecisionsEnabled($n->getBooleanValue()); },
            'decisionHistoriesForReviewersEnabled' => function (ParseNode $n) use ($o) { $o->setDecisionHistoriesForReviewersEnabled($n->getBooleanValue()); },
            'defaultDecision' => function (ParseNode $n) use ($o) { $o->setDefaultDecision($n->getStringValue()); },
            'defaultDecisionEnabled' => function (ParseNode $n) use ($o) { $o->setDefaultDecisionEnabled($n->getBooleanValue()); },
            'instanceDurationInDays' => function (ParseNode $n) use ($o) { $o->setInstanceDurationInDays($n->getIntegerValue()); },
            'justificationRequiredOnApproval' => function (ParseNode $n) use ($o) { $o->setJustificationRequiredOnApproval($n->getBooleanValue()); },
            'mailNotificationsEnabled' => function (ParseNode $n) use ($o) { $o->setMailNotificationsEnabled($n->getBooleanValue()); },
            'recommendationInsightSettings' => function (ParseNode $n) use ($o) { $o->setRecommendationInsightSettings($n->getCollectionOfObjectValues(array(AccessReviewRecommendationInsightSetting::class, 'createFromDiscriminatorValue'))); },
            'recommendationLookBackDuration' => function (ParseNode $n) use ($o) { $o->setRecommendationLookBackDuration($n->getDateIntervalValue()); },
            'recommendationsEnabled' => function (ParseNode $n) use ($o) { $o->setRecommendationsEnabled($n->getBooleanValue()); },
            'recurrence' => function (ParseNode $n) use ($o) { $o->setRecurrence($n->getObjectValue(array(PatternedRecurrence::class, 'createFromDiscriminatorValue'))); },
            'reminderNotificationsEnabled' => function (ParseNode $n) use ($o) { $o->setReminderNotificationsEnabled($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the instanceDurationInDays property value. Duration of each recurrence of review (accessReviewInstance) in number of days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its durationInDays setting will be used instead of the value of this property.
     * @return int|null
    */
    public function getInstanceDurationInDays(): ?int {
        return $this->instanceDurationInDays;
    }

    /**
     * Gets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide justification with their decision. Default value is false.
     * @return bool|null
    */
    public function getJustificationRequiredOnApproval(): ?bool {
        return $this->justificationRequiredOnApproval;
    }

    /**
     * Gets the mailNotificationsEnabled property value. Indicates whether emails are enabled or disabled. Default value is false.
     * @return bool|null
    */
    public function getMailNotificationsEnabled(): ?bool {
        return $this->mailNotificationsEnabled;
    }

    /**
     * Gets the recommendationInsightSettings property value. Optional. Describes the types of insights that aid reviewers to make access review decisions. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationInsightSettings setting will be used instead of the value of this property.
     * @return array<AccessReviewRecommendationInsightSetting>|null
    */
    public function getRecommendationInsightSettings(): ?array {
        return $this->recommendationInsightSettings;
    }

    /**
     * Gets the recommendationLookBackDuration property value. Optional field. Indicates the period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationLookBackDuration setting will be used instead of the value of this property.
     * @return DateInterval|null
    */
    public function getRecommendationLookBackDuration(): ?DateInterval {
        return $this->recommendationLookBackDuration;
    }

    /**
     * Gets the recommendationsEnabled property value. Indicates whether decision recommendations are enabled or disabled. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationsEnabled setting will be used instead of the value of this property.
     * @return bool|null
    */
    public function getRecommendationsEnabled(): ?bool {
        return $this->recommendationsEnabled;
    }

    /**
     * Gets the recurrence property value. Detailed settings for recurrence using the standard Outlook recurrence object. Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the reminderNotificationsEnabled property value. Indicates whether reminders are enabled or disabled. Default value is false.
     * @return bool|null
    */
    public function getReminderNotificationsEnabled(): ?bool {
        return $this->reminderNotificationsEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('applyActions', $this->applyActions);
        $writer->writeBooleanValue('autoApplyDecisionsEnabled', $this->autoApplyDecisionsEnabled);
        $writer->writeBooleanValue('decisionHistoriesForReviewersEnabled', $this->decisionHistoriesForReviewersEnabled);
        $writer->writeStringValue('defaultDecision', $this->defaultDecision);
        $writer->writeBooleanValue('defaultDecisionEnabled', $this->defaultDecisionEnabled);
        $writer->writeIntegerValue('instanceDurationInDays', $this->instanceDurationInDays);
        $writer->writeBooleanValue('justificationRequiredOnApproval', $this->justificationRequiredOnApproval);
        $writer->writeBooleanValue('mailNotificationsEnabled', $this->mailNotificationsEnabled);
        $writer->writeCollectionOfObjectValues('recommendationInsightSettings', $this->recommendationInsightSettings);
        $writer->writeDateIntervalValue('recommendationLookBackDuration', $this->recommendationLookBackDuration);
        $writer->writeBooleanValue('recommendationsEnabled', $this->recommendationsEnabled);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeBooleanValue('reminderNotificationsEnabled', $this->reminderNotificationsEnabled);
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
     * Sets the applyActions property value. Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
     *  @param array<AccessReviewApplyAction>|null $value Value to set for the applyActions property.
    */
    public function setApplyActions(?array $value ): void {
        $this->applyActions = $value;
    }

    /**
     * Sets the autoApplyDecisionsEnabled property value. Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.
     *  @param bool|null $value Value to set for the autoApplyDecisionsEnabled property.
    */
    public function setAutoApplyDecisionsEnabled(?bool $value ): void {
        $this->autoApplyDecisionsEnabled = $value;
    }

    /**
     * Sets the decisionHistoriesForReviewersEnabled property value. Indicates whether decisions on previous access review stages are available for reviewers on an accessReviewInstance with multiple subsequent stages. If not provided, the default is disabled (false).
     *  @param bool|null $value Value to set for the decisionHistoriesForReviewersEnabled property.
    */
    public function setDecisionHistoriesForReviewersEnabled(?bool $value ): void {
        $this->decisionHistoriesForReviewersEnabled = $value;
    }

    /**
     * Sets the defaultDecision property value. Decision chosen if defaultDecisionEnabled is enabled. Can be one of Approve, Deny, or Recommendation.
     *  @param string|null $value Value to set for the defaultDecision property.
    */
    public function setDefaultDecision(?string $value ): void {
        $this->defaultDecision = $value;
    }

    /**
     * Sets the defaultDecisionEnabled property value. Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.
     *  @param bool|null $value Value to set for the defaultDecisionEnabled property.
    */
    public function setDefaultDecisionEnabled(?bool $value ): void {
        $this->defaultDecisionEnabled = $value;
    }

    /**
     * Sets the instanceDurationInDays property value. Duration of each recurrence of review (accessReviewInstance) in number of days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its durationInDays setting will be used instead of the value of this property.
     *  @param int|null $value Value to set for the instanceDurationInDays property.
    */
    public function setInstanceDurationInDays(?int $value ): void {
        $this->instanceDurationInDays = $value;
    }

    /**
     * Sets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide justification with their decision. Default value is false.
     *  @param bool|null $value Value to set for the justificationRequiredOnApproval property.
    */
    public function setJustificationRequiredOnApproval(?bool $value ): void {
        $this->justificationRequiredOnApproval = $value;
    }

    /**
     * Sets the mailNotificationsEnabled property value. Indicates whether emails are enabled or disabled. Default value is false.
     *  @param bool|null $value Value to set for the mailNotificationsEnabled property.
    */
    public function setMailNotificationsEnabled(?bool $value ): void {
        $this->mailNotificationsEnabled = $value;
    }

    /**
     * Sets the recommendationInsightSettings property value. Optional. Describes the types of insights that aid reviewers to make access review decisions. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationInsightSettings setting will be used instead of the value of this property.
     *  @param array<AccessReviewRecommendationInsightSetting>|null $value Value to set for the recommendationInsightSettings property.
    */
    public function setRecommendationInsightSettings(?array $value ): void {
        $this->recommendationInsightSettings = $value;
    }

    /**
     * Sets the recommendationLookBackDuration property value. Optional field. Indicates the period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationLookBackDuration setting will be used instead of the value of this property.
     *  @param DateInterval|null $value Value to set for the recommendationLookBackDuration property.
    */
    public function setRecommendationLookBackDuration(?DateInterval $value ): void {
        $this->recommendationLookBackDuration = $value;
    }

    /**
     * Sets the recommendationsEnabled property value. Indicates whether decision recommendations are enabled or disabled. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationsEnabled setting will be used instead of the value of this property.
     *  @param bool|null $value Value to set for the recommendationsEnabled property.
    */
    public function setRecommendationsEnabled(?bool $value ): void {
        $this->recommendationsEnabled = $value;
    }

    /**
     * Sets the recurrence property value. Detailed settings for recurrence using the standard Outlook recurrence object. Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the reminderNotificationsEnabled property value. Indicates whether reminders are enabled or disabled. Default value is false.
     *  @param bool|null $value Value to set for the reminderNotificationsEnabled property.
    */
    public function setReminderNotificationsEnabled(?bool $value ): void {
        $this->reminderNotificationsEnabled = $value;
    }

}
