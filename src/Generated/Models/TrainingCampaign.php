<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrainingCampaign extends Entity implements Parsable 
{
    /**
     * Instantiates a new TrainingCampaign and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrainingCampaign
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrainingCampaign {
        return new TrainingCampaign();
    }

    /**
     * Gets the campaignSchedule property value. The campaignSchedule property
     * @return CampaignSchedule|null
    */
    public function getCampaignSchedule(): ?CampaignSchedule {
        $val = $this->getBackingStore()->get('campaignSchedule');
        if (is_null($val) || $val instanceof CampaignSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'campaignSchedule'");
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return EmailIdentity|null
    */
    public function getCreatedBy(): ?EmailIdentity {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof EmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. The description property
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
     * Gets the displayName property value. The displayName property
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
     * Gets the endUserNotificationSetting property value. The endUserNotificationSetting property
     * @return EndUserNotificationSetting|null
    */
    public function getEndUserNotificationSetting(): ?EndUserNotificationSetting {
        $val = $this->getBackingStore()->get('endUserNotificationSetting');
        if (is_null($val) || $val instanceof EndUserNotificationSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endUserNotificationSetting'");
    }

    /**
     * Gets the excludedAccountTarget property value. The excludedAccountTarget property
     * @return AccountTargetContent|null
    */
    public function getExcludedAccountTarget(): ?AccountTargetContent {
        $val = $this->getBackingStore()->get('excludedAccountTarget');
        if (is_null($val) || $val instanceof AccountTargetContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedAccountTarget'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'campaignSchedule' => fn(ParseNode $n) => $o->setCampaignSchedule($n->getObjectValue([CampaignSchedule::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endUserNotificationSetting' => fn(ParseNode $n) => $o->setEndUserNotificationSetting($n->getObjectValue([EndUserNotificationSetting::class, 'createFromDiscriminatorValue'])),
            'excludedAccountTarget' => fn(ParseNode $n) => $o->setExcludedAccountTarget($n->getObjectValue([AccountTargetContent::class, 'createFromDiscriminatorValue'])),
            'includedAccountTarget' => fn(ParseNode $n) => $o->setIncludedAccountTarget($n->getObjectValue([AccountTargetContent::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'report' => fn(ParseNode $n) => $o->setReport($n->getObjectValue([TrainingCampaignReport::class, 'createFromDiscriminatorValue'])),
            'trainingSetting' => fn(ParseNode $n) => $o->setTrainingSetting($n->getObjectValue([TrainingSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the includedAccountTarget property value. The includedAccountTarget property
     * @return AccountTargetContent|null
    */
    public function getIncludedAccountTarget(): ?AccountTargetContent {
        $val = $this->getBackingStore()->get('includedAccountTarget');
        if (is_null($val) || $val instanceof AccountTargetContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includedAccountTarget'");
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return EmailIdentity|null
    */
    public function getLastModifiedBy(): ?EmailIdentity {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof EmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the report property value. The report property
     * @return TrainingCampaignReport|null
    */
    public function getReport(): ?TrainingCampaignReport {
        $val = $this->getBackingStore()->get('report');
        if (is_null($val) || $val instanceof TrainingCampaignReport) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'report'");
    }

    /**
     * Gets the trainingSetting property value. The trainingSetting property
     * @return TrainingSetting|null
    */
    public function getTrainingSetting(): ?TrainingSetting {
        $val = $this->getBackingStore()->get('trainingSetting');
        if (is_null($val) || $val instanceof TrainingSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingSetting'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('campaignSchedule', $this->getCampaignSchedule());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('endUserNotificationSetting', $this->getEndUserNotificationSetting());
        $writer->writeObjectValue('excludedAccountTarget', $this->getExcludedAccountTarget());
        $writer->writeObjectValue('includedAccountTarget', $this->getIncludedAccountTarget());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('report', $this->getReport());
        $writer->writeObjectValue('trainingSetting', $this->getTrainingSetting());
    }

    /**
     * Sets the campaignSchedule property value. The campaignSchedule property
     * @param CampaignSchedule|null $value Value to set for the campaignSchedule property.
    */
    public function setCampaignSchedule(?CampaignSchedule $value): void {
        $this->getBackingStore()->set('campaignSchedule', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endUserNotificationSetting property value. The endUserNotificationSetting property
     * @param EndUserNotificationSetting|null $value Value to set for the endUserNotificationSetting property.
    */
    public function setEndUserNotificationSetting(?EndUserNotificationSetting $value): void {
        $this->getBackingStore()->set('endUserNotificationSetting', $value);
    }

    /**
     * Sets the excludedAccountTarget property value. The excludedAccountTarget property
     * @param AccountTargetContent|null $value Value to set for the excludedAccountTarget property.
    */
    public function setExcludedAccountTarget(?AccountTargetContent $value): void {
        $this->getBackingStore()->set('excludedAccountTarget', $value);
    }

    /**
     * Sets the includedAccountTarget property value. The includedAccountTarget property
     * @param AccountTargetContent|null $value Value to set for the includedAccountTarget property.
    */
    public function setIncludedAccountTarget(?AccountTargetContent $value): void {
        $this->getBackingStore()->set('includedAccountTarget', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the report property value. The report property
     * @param TrainingCampaignReport|null $value Value to set for the report property.
    */
    public function setReport(?TrainingCampaignReport $value): void {
        $this->getBackingStore()->set('report', $value);
    }

    /**
     * Sets the trainingSetting property value. The trainingSetting property
     * @param TrainingSetting|null $value Value to set for the trainingSetting property.
    */
    public function setTrainingSetting(?TrainingSetting $value): void {
        $this->getBackingStore()->set('trainingSetting', $value);
    }

}
