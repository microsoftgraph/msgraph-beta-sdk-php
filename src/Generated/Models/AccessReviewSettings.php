<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessReviewSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessReviewSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
        $val = $this->getBackingStore()->get('accessRecommendationsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessRecommendationsEnabled'");
    }

    /**
     * Gets the activityDurationInDays property value. The number of days of user activities to show to reviewers.
     * @return int|null
    */
    public function getActivityDurationInDays(): ?int {
        $val = $this->getBackingStore()->get('activityDurationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDurationInDays'");
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the autoApplyReviewResultsEnabled property value. Indicates whether the auto-apply capability, to automatically change the target object access resource, is enabled.  If not enabled, a user must, after the review completes, apply the access review.
     * @return bool|null
    */
    public function getAutoApplyReviewResultsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('autoApplyReviewResultsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoApplyReviewResultsEnabled'");
    }

    /**
     * Gets the autoReviewEnabled property value. Indicates whether a decision should be set if the reviewer did not supply one. For use when auto-apply is enabled. If you don't want to have a review decision recorded unless the reviewer makes an explicit choice, set it to false.
     * @return bool|null
    */
    public function getAutoReviewEnabled(): ?bool {
        $val = $this->getBackingStore()->get('autoReviewEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoReviewEnabled'");
    }

    /**
     * Gets the autoReviewSettings property value. Detailed settings for how the feature should set the review decision. For use when auto-apply is enabled.
     * @return AutoReviewSettings|null
    */
    public function getAutoReviewSettings(): ?AutoReviewSettings {
        $val = $this->getBackingStore()->get('autoReviewSettings');
        if (is_null($val) || $val instanceof AutoReviewSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoReviewSettings'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessRecommendationsEnabled' => fn(ParseNode $n) => $o->setAccessRecommendationsEnabled($n->getBooleanValue()),
            'activityDurationInDays' => fn(ParseNode $n) => $o->setActivityDurationInDays($n->getIntegerValue()),
            'autoApplyReviewResultsEnabled' => fn(ParseNode $n) => $o->setAutoApplyReviewResultsEnabled($n->getBooleanValue()),
            'autoReviewEnabled' => fn(ParseNode $n) => $o->setAutoReviewEnabled($n->getBooleanValue()),
            'autoReviewSettings' => fn(ParseNode $n) => $o->setAutoReviewSettings($n->getObjectValue([AutoReviewSettings::class, 'createFromDiscriminatorValue'])),
            'justificationRequiredOnApproval' => fn(ParseNode $n) => $o->setJustificationRequiredOnApproval($n->getBooleanValue()),
            'mailNotificationsEnabled' => fn(ParseNode $n) => $o->setMailNotificationsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recurrenceSettings' => fn(ParseNode $n) => $o->setRecurrenceSettings($n->getObjectValue([AccessReviewRecurrenceSettings::class, 'createFromDiscriminatorValue'])),
            'remindersEnabled' => fn(ParseNode $n) => $o->setRemindersEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide a justification when reviewing access.
     * @return bool|null
    */
    public function getJustificationRequiredOnApproval(): ?bool {
        $val = $this->getBackingStore()->get('justificationRequiredOnApproval');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justificationRequiredOnApproval'");
    }

    /**
     * Gets the mailNotificationsEnabled property value. Indicates whether sending mails to reviewers and the review creator is enabled.
     * @return bool|null
    */
    public function getMailNotificationsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('mailNotificationsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailNotificationsEnabled'");
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
     * Gets the recurrenceSettings property value. Detailed settings for recurrence.
     * @return AccessReviewRecurrenceSettings|null
    */
    public function getRecurrenceSettings(): ?AccessReviewRecurrenceSettings {
        $val = $this->getBackingStore()->get('recurrenceSettings');
        if (is_null($val) || $val instanceof AccessReviewRecurrenceSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrenceSettings'");
    }

    /**
     * Gets the remindersEnabled property value. Indicates whether sending reminder emails to reviewers is enabled.
     * @return bool|null
    */
    public function getRemindersEnabled(): ?bool {
        $val = $this->getBackingStore()->get('remindersEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remindersEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('accessRecommendationsEnabled', $this->getAccessRecommendationsEnabled());
        $writer->writeIntegerValue('activityDurationInDays', $this->getActivityDurationInDays());
        $writer->writeBooleanValue('autoApplyReviewResultsEnabled', $this->getAutoApplyReviewResultsEnabled());
        $writer->writeBooleanValue('autoReviewEnabled', $this->getAutoReviewEnabled());
        $writer->writeObjectValue('autoReviewSettings', $this->getAutoReviewSettings());
        $writer->writeBooleanValue('justificationRequiredOnApproval', $this->getJustificationRequiredOnApproval());
        $writer->writeBooleanValue('mailNotificationsEnabled', $this->getMailNotificationsEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('recurrenceSettings', $this->getRecurrenceSettings());
        $writer->writeBooleanValue('remindersEnabled', $this->getRemindersEnabled());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessRecommendationsEnabled property value. Indicates whether showing recommendations to reviewers is enabled.
     * @param bool|null $value Value to set for the accessRecommendationsEnabled property.
    */
    public function setAccessRecommendationsEnabled(?bool $value): void {
        $this->getBackingStore()->set('accessRecommendationsEnabled', $value);
    }

    /**
     * Sets the activityDurationInDays property value. The number of days of user activities to show to reviewers.
     * @param int|null $value Value to set for the activityDurationInDays property.
    */
    public function setActivityDurationInDays(?int $value): void {
        $this->getBackingStore()->set('activityDurationInDays', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the autoApplyReviewResultsEnabled property value. Indicates whether the auto-apply capability, to automatically change the target object access resource, is enabled.  If not enabled, a user must, after the review completes, apply the access review.
     * @param bool|null $value Value to set for the autoApplyReviewResultsEnabled property.
    */
    public function setAutoApplyReviewResultsEnabled(?bool $value): void {
        $this->getBackingStore()->set('autoApplyReviewResultsEnabled', $value);
    }

    /**
     * Sets the autoReviewEnabled property value. Indicates whether a decision should be set if the reviewer did not supply one. For use when auto-apply is enabled. If you don't want to have a review decision recorded unless the reviewer makes an explicit choice, set it to false.
     * @param bool|null $value Value to set for the autoReviewEnabled property.
    */
    public function setAutoReviewEnabled(?bool $value): void {
        $this->getBackingStore()->set('autoReviewEnabled', $value);
    }

    /**
     * Sets the autoReviewSettings property value. Detailed settings for how the feature should set the review decision. For use when auto-apply is enabled.
     * @param AutoReviewSettings|null $value Value to set for the autoReviewSettings property.
    */
    public function setAutoReviewSettings(?AutoReviewSettings $value): void {
        $this->getBackingStore()->set('autoReviewSettings', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the justificationRequiredOnApproval property value. Indicates whether reviewers are required to provide a justification when reviewing access.
     * @param bool|null $value Value to set for the justificationRequiredOnApproval property.
    */
    public function setJustificationRequiredOnApproval(?bool $value): void {
        $this->getBackingStore()->set('justificationRequiredOnApproval', $value);
    }

    /**
     * Sets the mailNotificationsEnabled property value. Indicates whether sending mails to reviewers and the review creator is enabled.
     * @param bool|null $value Value to set for the mailNotificationsEnabled property.
    */
    public function setMailNotificationsEnabled(?bool $value): void {
        $this->getBackingStore()->set('mailNotificationsEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recurrenceSettings property value. Detailed settings for recurrence.
     * @param AccessReviewRecurrenceSettings|null $value Value to set for the recurrenceSettings property.
    */
    public function setRecurrenceSettings(?AccessReviewRecurrenceSettings $value): void {
        $this->getBackingStore()->set('recurrenceSettings', $value);
    }

    /**
     * Sets the remindersEnabled property value. Indicates whether sending reminder emails to reviewers is enabled.
     * @param bool|null $value Value to set for the remindersEnabled property.
    */
    public function setRemindersEnabled(?bool $value): void {
        $this->getBackingStore()->set('remindersEnabled', $value);
    }

}
