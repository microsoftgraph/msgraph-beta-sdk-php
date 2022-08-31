<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $accessRecommendationsEnabled Indicates whether showing recommendations to reviewers is enabled.
    */
    private ?bool $accessRecommendationsEnabled = null;
    
    /**
     * @var int|null $activityDurationInDays The number of days of user activities to show to reviewers.
    */
    private ?int $activityDurationInDays = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $autoApplyReviewResultsEnabled Indicates whether the auto-apply capability, to automatically change the target object access resource, is enabled.  If not enabled, a user must, after the review completes, apply the access review.
    */
    private ?bool $autoApplyReviewResultsEnabled = null;
    
    /**
     * @var bool|null $autoReviewEnabled Indicates whether a decision should be set if the reviewer did not supply one. For use when auto-apply is enabled. If you don't want to have a review decision recorded unless the reviewer makes an explicit choice, set it to false.
    */
    private ?bool $autoReviewEnabled = null;
    
    /**
     * @var AutoReviewSettings|null $autoReviewSettings Detailed settings for how the feature should set the review decision. For use when auto-apply is enabled.
    */
    private ?AutoReviewSettings $autoReviewSettings = null;
    
    /**
     * @var bool|null $justificationRequiredOnApproval Indicates whether reviewers are required to provide a justification when reviewing access.
    */
    private ?bool $justificationRequiredOnApproval = null;
    
    /**
     * @var bool|null $mailNotificationsEnabled Indicates whether sending mails to reviewers and the review creator is enabled.
    */
    private ?bool $mailNotificationsEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var AccessReviewRecurrenceSettings|null $recurrenceSettings Detailed settings for recurrence.
    */
    private ?AccessReviewRecurrenceSettings $recurrenceSettings = null;
    
    /**
     * @var bool|null $remindersEnabled Indicates whether sending reminder emails to reviewers is enabled.
    */
    private ?bool $remindersEnabled = null;
    
    /**
     * Instantiates a new accessReviewSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.accessReviewSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewSettings {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.businessFlowSettings': return new BusinessFlowSettings();
            }
        }
        return new AccessReviewSettings();
    }

    /**
     * Gets the accessRecommendationsEnabled property value. Indicates whether showing recommendations to reviewers is enabled.
     * @return bool|null
    */
    public function getAccessRecommendationsEnabled(): ?bool {
        return $this->accessRecommendationsEnabled;
    }

    /**
     * Gets the activityDurationInDays property value. The number of days of user activities to show to reviewers.
     * @return int|null
    */
    public function getActivityDurationInDays(): ?int {
        return $this->activityDurationInDays;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the autoApplyReviewResultsEnabled property value. Indicates whether the auto-apply capability, to automatically change the target object access resource, is enabled.  If not enabled, a user must, after the review completes, apply the access review.
     * @return bool|null
    */
    public function getAutoApplyReviewResultsEnabled(): ?bool {
        return $this->autoApplyReviewResultsEnabled;
    }

    /**
     * Gets the autoReviewEnabled property value. Indicates whether a decision should be set if the reviewer did not supply one. For use when auto-apply is enabled. If you don't want to have a review decision recorded unless the reviewer makes an explicit choice, set it to false.
     * @return bool|null
    */
    public function getAutoReviewEnabled(): ?bool {
        return $this->autoReviewEnabled;
    }

    /**
     * Gets the autoReviewSettings property value. Detailed settings for how the feature should set the review decision. For use when auto-apply is enabled.
     * @return AutoReviewSettings|null
    */
    public function getAutoReviewSettings(): ?AutoReviewSettings {
        return $this->autoReviewSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessRecommendationsEnabled' => function (ParseNode $n) use ($o) { $o->setAccessRecommendationsEnabled($n->getBooleanValue()); },
            'activityDurationInDays' => function (ParseNode $n) use ($o) { $o->setActivityDurationInDays($n->getIntegerValue()); },
            'autoApplyReviewResultsEnabled' => function (ParseNode $n) use ($o) { $o->setAutoApplyReviewResultsEnabled($n->getBooleanValue()); },
            'autoReviewEnabled' => function (ParseNode $n) use ($o) { $o->setAutoReviewEnabled($n->getBooleanValue()); },
            'autoReviewSettings' => function (ParseNode $n) use ($o) { $o->setAutoReviewSettings($n->getObjectValue(array(AutoReviewSettings::class, 'createFromDiscriminatorValue'))); },
            'justificationRequiredOnApproval' => function (ParseNode $n) use ($o) { $o->setJustificationRequiredOnApproval($n->getBooleanValue()); },
            'mailNotificationsEnabled' => function (ParseNode $n) use ($o) { $o->setMailNotificationsEnabled($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'recurrenceSettings' => function (ParseNode $n) use ($o) { $o->setRecurrenceSettings($n->getObjectValue(array(AccessReviewRecurrenceSettings::class, 'createFromDiscriminatorValue'))); },
            'remindersEnabled' => function (ParseNode $n) use ($o) { $o->setRemindersEnabled($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide a justification when reviewing access.
     * @return bool|null
    */
    public function getJustificationRequiredOnApproval(): ?bool {
        return $this->justificationRequiredOnApproval;
    }

    /**
     * Gets the mailNotificationsEnabled property value. Indicates whether sending mails to reviewers and the review creator is enabled.
     * @return bool|null
    */
    public function getMailNotificationsEnabled(): ?bool {
        return $this->mailNotificationsEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the recurrenceSettings property value. Detailed settings for recurrence.
     * @return AccessReviewRecurrenceSettings|null
    */
    public function getRecurrenceSettings(): ?AccessReviewRecurrenceSettings {
        return $this->recurrenceSettings;
    }

    /**
     * Gets the remindersEnabled property value. Indicates whether sending reminder emails to reviewers is enabled.
     * @return bool|null
    */
    public function getRemindersEnabled(): ?bool {
        return $this->remindersEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('accessRecommendationsEnabled', $this->accessRecommendationsEnabled);
        $writer->writeIntegerValue('activityDurationInDays', $this->activityDurationInDays);
        $writer->writeBooleanValue('autoApplyReviewResultsEnabled', $this->autoApplyReviewResultsEnabled);
        $writer->writeBooleanValue('autoReviewEnabled', $this->autoReviewEnabled);
        $writer->writeObjectValue('autoReviewSettings', $this->autoReviewSettings);
        $writer->writeBooleanValue('justificationRequiredOnApproval', $this->justificationRequiredOnApproval);
        $writer->writeBooleanValue('mailNotificationsEnabled', $this->mailNotificationsEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('recurrenceSettings', $this->recurrenceSettings);
        $writer->writeBooleanValue('remindersEnabled', $this->remindersEnabled);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessRecommendationsEnabled property value. Indicates whether showing recommendations to reviewers is enabled.
     *  @param bool|null $value Value to set for the accessRecommendationsEnabled property.
    */
    public function setAccessRecommendationsEnabled(?bool $value ): void {
        $this->accessRecommendationsEnabled = $value;
    }

    /**
     * Sets the activityDurationInDays property value. The number of days of user activities to show to reviewers.
     *  @param int|null $value Value to set for the activityDurationInDays property.
    */
    public function setActivityDurationInDays(?int $value ): void {
        $this->activityDurationInDays = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the autoApplyReviewResultsEnabled property value. Indicates whether the auto-apply capability, to automatically change the target object access resource, is enabled.  If not enabled, a user must, after the review completes, apply the access review.
     *  @param bool|null $value Value to set for the autoApplyReviewResultsEnabled property.
    */
    public function setAutoApplyReviewResultsEnabled(?bool $value ): void {
        $this->autoApplyReviewResultsEnabled = $value;
    }

    /**
     * Sets the autoReviewEnabled property value. Indicates whether a decision should be set if the reviewer did not supply one. For use when auto-apply is enabled. If you don't want to have a review decision recorded unless the reviewer makes an explicit choice, set it to false.
     *  @param bool|null $value Value to set for the autoReviewEnabled property.
    */
    public function setAutoReviewEnabled(?bool $value ): void {
        $this->autoReviewEnabled = $value;
    }

    /**
     * Sets the autoReviewSettings property value. Detailed settings for how the feature should set the review decision. For use when auto-apply is enabled.
     *  @param AutoReviewSettings|null $value Value to set for the autoReviewSettings property.
    */
    public function setAutoReviewSettings(?AutoReviewSettings $value ): void {
        $this->autoReviewSettings = $value;
    }

    /**
     * Sets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide a justification when reviewing access.
     *  @param bool|null $value Value to set for the justificationRequiredOnApproval property.
    */
    public function setJustificationRequiredOnApproval(?bool $value ): void {
        $this->justificationRequiredOnApproval = $value;
    }

    /**
     * Sets the mailNotificationsEnabled property value. Indicates whether sending mails to reviewers and the review creator is enabled.
     *  @param bool|null $value Value to set for the mailNotificationsEnabled property.
    */
    public function setMailNotificationsEnabled(?bool $value ): void {
        $this->mailNotificationsEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the recurrenceSettings property value. Detailed settings for recurrence.
     *  @param AccessReviewRecurrenceSettings|null $value Value to set for the recurrenceSettings property.
    */
    public function setRecurrenceSettings(?AccessReviewRecurrenceSettings $value ): void {
        $this->recurrenceSettings = $value;
    }

    /**
     * Sets the remindersEnabled property value. Indicates whether sending reminder emails to reviewers is enabled.
     *  @param bool|null $value Value to set for the remindersEnabled property.
    */
    public function setRemindersEnabled(?bool $value ): void {
        $this->remindersEnabled = $value;
    }

}
