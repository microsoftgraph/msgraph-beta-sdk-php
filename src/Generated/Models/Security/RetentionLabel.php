<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RetentionLabel extends Entity implements Parsable 
{
    /**
     * @var ActionAfterRetentionPeriod|null $actionAfterRetentionPeriod Specifies the action to take on a document with this label applied during the retention period. The possible values are: none, delete, startDispositionReview, unknownFutureValue.
    */
    private ?ActionAfterRetentionPeriod $actionAfterRetentionPeriod = null;
    
    /**
     * @var BehaviorDuringRetentionPeriod|null $behaviorDuringRetentionPeriod Specifies how the behavior of a document with this label should be during the retention period. The possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue.
    */
    private ?BehaviorDuringRetentionPeriod $behaviorDuringRetentionPeriod = null;
    
    /**
     * @var IdentitySet|null $createdBy Represents the user who created the retentionLabel.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime Represents the date and time in which the retentionLabel is created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DefaultRecordBehavior|null $defaultRecordBehavior Specifies the locked or unlocked state of a record label when it is created.The possible values are: startLocked, startUnlocked, unknownFutureValue.
    */
    private ?DefaultRecordBehavior $defaultRecordBehavior = null;
    
    /**
     * @var string|null $descriptionForAdmins Provides label information for the admin. Optional.
    */
    private ?string $descriptionForAdmins = null;
    
    /**
     * @var string|null $descriptionForUsers Provides the label information for the user. Optional.
    */
    private ?string $descriptionForUsers = null;
    
    /**
     * @var string|null $displayName Unique string that defines a label name.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<DispositionReviewStage>|null $dispositionReviewStages Review stages during which reviewers are notified to determine whether a document must be deleted or retained.
    */
    private ?array $dispositionReviewStages = null;
    
    /**
     * @var bool|null $isInUse Specifies whether the label is currently being used.
    */
    private ?bool $isInUse = null;
    
    /**
     * @var string|null $labelToBeApplied Specifies the replacement label to be applied automatically after the retention period of the current label ends.
    */
    private ?string $labelToBeApplied = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The user who last modified the retentionLabel.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The latest date time when the retentionLabel was modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var RetentionDuration|null $retentionDuration Specifies the number of days to retain the content.
    */
    private ?RetentionDuration $retentionDuration = null;
    
    /**
     * @var RetentionEventType|null $retentionEventType The retentionEventType property
    */
    private ?RetentionEventType $retentionEventType = null;
    
    /**
     * @var RetentionTrigger|null $retentionTrigger Specifies whether the retention duration is calculated from the content creation date, labeled date, or last modification date. The possible values are: dateLabeled, dateCreated, dateModified, dateOfEvent, unknownFutureValue.
    */
    private ?RetentionTrigger $retentionTrigger = null;
    
    /**
     * Instantiates a new retentionLabel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionLabel {
        return new RetentionLabel();
    }

    /**
     * Gets the actionAfterRetentionPeriod property value. Specifies the action to take on a document with this label applied during the retention period. The possible values are: none, delete, startDispositionReview, unknownFutureValue.
     * @return ActionAfterRetentionPeriod|null
    */
    public function getActionAfterRetentionPeriod(): ?ActionAfterRetentionPeriod {
        return $this->actionAfterRetentionPeriod;
    }

    /**
     * Gets the behaviorDuringRetentionPeriod property value. Specifies how the behavior of a document with this label should be during the retention period. The possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue.
     * @return BehaviorDuringRetentionPeriod|null
    */
    public function getBehaviorDuringRetentionPeriod(): ?BehaviorDuringRetentionPeriod {
        return $this->behaviorDuringRetentionPeriod;
    }

    /**
     * Gets the createdBy property value. Represents the user who created the retentionLabel.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Represents the date and time in which the retentionLabel is created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the defaultRecordBehavior property value. Specifies the locked or unlocked state of a record label when it is created.The possible values are: startLocked, startUnlocked, unknownFutureValue.
     * @return DefaultRecordBehavior|null
    */
    public function getDefaultRecordBehavior(): ?DefaultRecordBehavior {
        return $this->defaultRecordBehavior;
    }

    /**
     * Gets the descriptionForAdmins property value. Provides label information for the admin. Optional.
     * @return string|null
    */
    public function getDescriptionForAdmins(): ?string {
        return $this->descriptionForAdmins;
    }

    /**
     * Gets the descriptionForUsers property value. Provides the label information for the user. Optional.
     * @return string|null
    */
    public function getDescriptionForUsers(): ?string {
        return $this->descriptionForUsers;
    }

    /**
     * Gets the displayName property value. Unique string that defines a label name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the dispositionReviewStages property value. Review stages during which reviewers are notified to determine whether a document must be deleted or retained.
     * @return array<DispositionReviewStage>|null
    */
    public function getDispositionReviewStages(): ?array {
        return $this->dispositionReviewStages;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionAfterRetentionPeriod' => function (ParseNode $n) use ($o) { $o->setActionAfterRetentionPeriod($n->getEnumValue(ActionAfterRetentionPeriod::class)); },
            'behaviorDuringRetentionPeriod' => function (ParseNode $n) use ($o) { $o->setBehaviorDuringRetentionPeriod($n->getEnumValue(BehaviorDuringRetentionPeriod::class)); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'defaultRecordBehavior' => function (ParseNode $n) use ($o) { $o->setDefaultRecordBehavior($n->getEnumValue(DefaultRecordBehavior::class)); },
            'descriptionForAdmins' => function (ParseNode $n) use ($o) { $o->setDescriptionForAdmins($n->getStringValue()); },
            'descriptionForUsers' => function (ParseNode $n) use ($o) { $o->setDescriptionForUsers($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'dispositionReviewStages' => function (ParseNode $n) use ($o) { $o->setDispositionReviewStages($n->getCollectionOfObjectValues(array(DispositionReviewStage::class, 'createFromDiscriminatorValue'))); },
            'isInUse' => function (ParseNode $n) use ($o) { $o->setIsInUse($n->getBooleanValue()); },
            'labelToBeApplied' => function (ParseNode $n) use ($o) { $o->setLabelToBeApplied($n->getStringValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'retentionDuration' => function (ParseNode $n) use ($o) { $o->setRetentionDuration($n->getObjectValue(array(RetentionDuration::class, 'createFromDiscriminatorValue'))); },
            'retentionEventType' => function (ParseNode $n) use ($o) { $o->setRetentionEventType($n->getObjectValue(array(RetentionEventType::class, 'createFromDiscriminatorValue'))); },
            'retentionTrigger' => function (ParseNode $n) use ($o) { $o->setRetentionTrigger($n->getEnumValue(RetentionTrigger::class)); },
        ]);
    }

    /**
     * Gets the isInUse property value. Specifies whether the label is currently being used.
     * @return bool|null
    */
    public function getIsInUse(): ?bool {
        return $this->isInUse;
    }

    /**
     * Gets the labelToBeApplied property value. Specifies the replacement label to be applied automatically after the retention period of the current label ends.
     * @return string|null
    */
    public function getLabelToBeApplied(): ?string {
        return $this->labelToBeApplied;
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the retentionLabel.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The latest date time when the retentionLabel was modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the retentionDuration property value. Specifies the number of days to retain the content.
     * @return RetentionDuration|null
    */
    public function getRetentionDuration(): ?RetentionDuration {
        return $this->retentionDuration;
    }

    /**
     * Gets the retentionEventType property value. The retentionEventType property
     * @return RetentionEventType|null
    */
    public function getRetentionEventType(): ?RetentionEventType {
        return $this->retentionEventType;
    }

    /**
     * Gets the retentionTrigger property value. Specifies whether the retention duration is calculated from the content creation date, labeled date, or last modification date. The possible values are: dateLabeled, dateCreated, dateModified, dateOfEvent, unknownFutureValue.
     * @return RetentionTrigger|null
    */
    public function getRetentionTrigger(): ?RetentionTrigger {
        return $this->retentionTrigger;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionAfterRetentionPeriod', $this->actionAfterRetentionPeriod);
        $writer->writeEnumValue('behaviorDuringRetentionPeriod', $this->behaviorDuringRetentionPeriod);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeEnumValue('defaultRecordBehavior', $this->defaultRecordBehavior);
        $writer->writeStringValue('descriptionForAdmins', $this->descriptionForAdmins);
        $writer->writeStringValue('descriptionForUsers', $this->descriptionForUsers);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('dispositionReviewStages', $this->dispositionReviewStages);
        $writer->writeBooleanValue('isInUse', $this->isInUse);
        $writer->writeStringValue('labelToBeApplied', $this->labelToBeApplied);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('retentionDuration', $this->retentionDuration);
        $writer->writeObjectValue('retentionEventType', $this->retentionEventType);
        $writer->writeEnumValue('retentionTrigger', $this->retentionTrigger);
    }

    /**
     * Sets the actionAfterRetentionPeriod property value. Specifies the action to take on a document with this label applied during the retention period. The possible values are: none, delete, startDispositionReview, unknownFutureValue.
     *  @param ActionAfterRetentionPeriod|null $value Value to set for the actionAfterRetentionPeriod property.
    */
    public function setActionAfterRetentionPeriod(?ActionAfterRetentionPeriod $value ): void {
        $this->actionAfterRetentionPeriod = $value;
    }

    /**
     * Sets the behaviorDuringRetentionPeriod property value. Specifies how the behavior of a document with this label should be during the retention period. The possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue.
     *  @param BehaviorDuringRetentionPeriod|null $value Value to set for the behaviorDuringRetentionPeriod property.
    */
    public function setBehaviorDuringRetentionPeriod(?BehaviorDuringRetentionPeriod $value ): void {
        $this->behaviorDuringRetentionPeriod = $value;
    }

    /**
     * Sets the createdBy property value. Represents the user who created the retentionLabel.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Represents the date and time in which the retentionLabel is created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the defaultRecordBehavior property value. Specifies the locked or unlocked state of a record label when it is created.The possible values are: startLocked, startUnlocked, unknownFutureValue.
     *  @param DefaultRecordBehavior|null $value Value to set for the defaultRecordBehavior property.
    */
    public function setDefaultRecordBehavior(?DefaultRecordBehavior $value ): void {
        $this->defaultRecordBehavior = $value;
    }

    /**
     * Sets the descriptionForAdmins property value. Provides label information for the admin. Optional.
     *  @param string|null $value Value to set for the descriptionForAdmins property.
    */
    public function setDescriptionForAdmins(?string $value ): void {
        $this->descriptionForAdmins = $value;
    }

    /**
     * Sets the descriptionForUsers property value. Provides the label information for the user. Optional.
     *  @param string|null $value Value to set for the descriptionForUsers property.
    */
    public function setDescriptionForUsers(?string $value ): void {
        $this->descriptionForUsers = $value;
    }

    /**
     * Sets the displayName property value. Unique string that defines a label name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the dispositionReviewStages property value. Review stages during which reviewers are notified to determine whether a document must be deleted or retained.
     *  @param array<DispositionReviewStage>|null $value Value to set for the dispositionReviewStages property.
    */
    public function setDispositionReviewStages(?array $value ): void {
        $this->dispositionReviewStages = $value;
    }

    /**
     * Sets the isInUse property value. Specifies whether the label is currently being used.
     *  @param bool|null $value Value to set for the isInUse property.
    */
    public function setIsInUse(?bool $value ): void {
        $this->isInUse = $value;
    }

    /**
     * Sets the labelToBeApplied property value. Specifies the replacement label to be applied automatically after the retention period of the current label ends.
     *  @param string|null $value Value to set for the labelToBeApplied property.
    */
    public function setLabelToBeApplied(?string $value ): void {
        $this->labelToBeApplied = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the retentionLabel.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The latest date time when the retentionLabel was modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the retentionDuration property value. Specifies the number of days to retain the content.
     *  @param RetentionDuration|null $value Value to set for the retentionDuration property.
    */
    public function setRetentionDuration(?RetentionDuration $value ): void {
        $this->retentionDuration = $value;
    }

    /**
     * Sets the retentionEventType property value. The retentionEventType property
     *  @param RetentionEventType|null $value Value to set for the retentionEventType property.
    */
    public function setRetentionEventType(?RetentionEventType $value ): void {
        $this->retentionEventType = $value;
    }

    /**
     * Sets the retentionTrigger property value. Specifies whether the retention duration is calculated from the content creation date, labeled date, or last modification date. The possible values are: dateLabeled, dateCreated, dateModified, dateOfEvent, unknownFutureValue.
     *  @param RetentionTrigger|null $value Value to set for the retentionTrigger property.
    */
    public function setRetentionTrigger(?RetentionTrigger $value ): void {
        $this->retentionTrigger = $value;
    }

}
