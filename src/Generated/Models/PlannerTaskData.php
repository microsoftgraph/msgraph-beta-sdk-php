<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlannerTaskData implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PlannerTaskData and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskData {
        return new PlannerTaskData();
    }

    /**
     * Gets the activeChecklistItemCount property value. The activeChecklistItemCount property
     * @return int|null
    */
    public function getActiveChecklistItemCount(): ?int {
        $val = $this->getBackingStore()->get('activeChecklistItemCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeChecklistItemCount'");
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
     * Gets the appliedCategories property value. The appliedCategories property
     * @return PlannerAppliedCategories|null
    */
    public function getAppliedCategories(): ?PlannerAppliedCategories {
        $val = $this->getBackingStore()->get('appliedCategories');
        if (is_null($val) || $val instanceof PlannerAppliedCategories) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedCategories'");
    }

    /**
     * Gets the archivalInfo property value. The archivalInfo property
     * @return PlannerArchivalInfo|null
    */
    public function getArchivalInfo(): ?PlannerArchivalInfo {
        $val = $this->getBackingStore()->get('archivalInfo');
        if (is_null($val) || $val instanceof PlannerArchivalInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivalInfo'");
    }

    /**
     * Gets the assignments property value. The assignments property
     * @return PlannerAssignments|null
    */
    public function getAssignments(): ?PlannerAssignments {
        $val = $this->getBackingStore()->get('assignments');
        if (is_null($val) || $val instanceof PlannerAssignments) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bucketId property value. The bucketId property
     * @return string|null
    */
    public function getBucketId(): ?string {
        $val = $this->getBackingStore()->get('bucketId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bucketId'");
    }

    /**
     * Gets the checklistItemCount property value. The checklistItemCount property
     * @return int|null
    */
    public function getChecklistItemCount(): ?int {
        $val = $this->getBackingStore()->get('checklistItemCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checklistItemCount'");
    }

    /**
     * Gets the completedBy property value. The completedBy property
     * @return IdentitySet|null
    */
    public function getCompletedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('completedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedBy'");
    }

    /**
     * Gets the completedDateTime property value. The completedDateTime property
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the conversationThreadId property value. The conversationThreadId property
     * @return string|null
    */
    public function getConversationThreadId(): ?string {
        $val = $this->getBackingStore()->get('conversationThreadId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversationThreadId'");
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
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
     * Gets the creationSource property value. The creationSource property
     * @return PlannerTaskCreation|null
    */
    public function getCreationSource(): ?PlannerTaskCreation {
        $val = $this->getBackingStore()->get('creationSource');
        if (is_null($val) || $val instanceof PlannerTaskCreation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationSource'");
    }

    /**
     * Gets the details property value. The details property
     * @return PlannerTaskDetailsData|null
    */
    public function getDetails(): ?PlannerTaskDetailsData {
        $val = $this->getBackingStore()->get('details');
        if (is_null($val) || $val instanceof PlannerTaskDetailsData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * Gets the dueDateTime property value. The dueDateTime property
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activeChecklistItemCount' => fn(ParseNode $n) => $o->setActiveChecklistItemCount($n->getIntegerValue()),
            'appliedCategories' => fn(ParseNode $n) => $o->setAppliedCategories($n->getObjectValue([PlannerAppliedCategories::class, 'createFromDiscriminatorValue'])),
            'archivalInfo' => fn(ParseNode $n) => $o->setArchivalInfo($n->getObjectValue([PlannerArchivalInfo::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getObjectValue([PlannerAssignments::class, 'createFromDiscriminatorValue'])),
            'bucketId' => fn(ParseNode $n) => $o->setBucketId($n->getStringValue()),
            'checklistItemCount' => fn(ParseNode $n) => $o->setChecklistItemCount($n->getIntegerValue()),
            'completedBy' => fn(ParseNode $n) => $o->setCompletedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'conversationThreadId' => fn(ParseNode $n) => $o->setConversationThreadId($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'creationSource' => fn(ParseNode $n) => $o->setCreationSource($n->getObjectValue([PlannerTaskCreation::class, 'createFromDiscriminatorValue'])),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([PlannerTaskDetailsData::class, 'createFromDiscriminatorValue'])),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getDateTimeValue()),
            'hasChat' => fn(ParseNode $n) => $o->setHasChat($n->getBooleanValue()),
            'hasDescription' => fn(ParseNode $n) => $o->setHasDescription($n->getBooleanValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'orderHint' => fn(ParseNode $n) => $o->setOrderHint($n->getStringValue()),
            'percentComplete' => fn(ParseNode $n) => $o->setPercentComplete($n->getIntegerValue()),
            'previewType' => fn(ParseNode $n) => $o->setPreviewType($n->getEnumValue(PlannerPreviewType::class)),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getObjectValue([PlannerTaskRecurrence::class, 'createFromDiscriminatorValue'])),
            'referenceCount' => fn(ParseNode $n) => $o->setReferenceCount($n->getIntegerValue()),
            'specifiedCompletionRequirements' => fn(ParseNode $n) => $o->setSpecifiedCompletionRequirements($n->getEnumValue(PlannerTaskCompletionRequirements::class)),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the hasChat property value. The hasChat property
     * @return bool|null
    */
    public function getHasChat(): ?bool {
        $val = $this->getBackingStore()->get('hasChat');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasChat'");
    }

    /**
     * Gets the hasDescription property value. The hasDescription property
     * @return bool|null
    */
    public function getHasDescription(): ?bool {
        $val = $this->getBackingStore()->get('hasDescription');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasDescription'");
    }

    /**
     * Gets the isArchived property value. The isArchived property
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        $val = $this->getBackingStore()->get('isArchived');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isArchived'");
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
     * Gets the orderHint property value. The orderHint property
     * @return string|null
    */
    public function getOrderHint(): ?string {
        $val = $this->getBackingStore()->get('orderHint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orderHint'");
    }

    /**
     * Gets the percentComplete property value. The percentComplete property
     * @return int|null
    */
    public function getPercentComplete(): ?int {
        $val = $this->getBackingStore()->get('percentComplete');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'percentComplete'");
    }

    /**
     * Gets the previewType property value. The previewType property
     * @return PlannerPreviewType|null
    */
    public function getPreviewType(): ?PlannerPreviewType {
        $val = $this->getBackingStore()->get('previewType');
        if (is_null($val) || $val instanceof PlannerPreviewType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previewType'");
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the recurrence property value. The recurrence property
     * @return PlannerTaskRecurrence|null
    */
    public function getRecurrence(): ?PlannerTaskRecurrence {
        $val = $this->getBackingStore()->get('recurrence');
        if (is_null($val) || $val instanceof PlannerTaskRecurrence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrence'");
    }

    /**
     * Gets the referenceCount property value. The referenceCount property
     * @return int|null
    */
    public function getReferenceCount(): ?int {
        $val = $this->getBackingStore()->get('referenceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceCount'");
    }

    /**
     * Gets the specifiedCompletionRequirements property value. The specifiedCompletionRequirements property
     * @return PlannerTaskCompletionRequirements|null
    */
    public function getSpecifiedCompletionRequirements(): ?PlannerTaskCompletionRequirements {
        $val = $this->getBackingStore()->get('specifiedCompletionRequirements');
        if (is_null($val) || $val instanceof PlannerTaskCompletionRequirements) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'specifiedCompletionRequirements'");
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
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
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('activeChecklistItemCount', $this->getActiveChecklistItemCount());
        $writer->writeObjectValue('appliedCategories', $this->getAppliedCategories());
        $writer->writeObjectValue('archivalInfo', $this->getArchivalInfo());
        $writer->writeObjectValue('assignments', $this->getAssignments());
        $writer->writeStringValue('bucketId', $this->getBucketId());
        $writer->writeIntegerValue('checklistItemCount', $this->getChecklistItemCount());
        $writer->writeObjectValue('completedBy', $this->getCompletedBy());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeStringValue('conversationThreadId', $this->getConversationThreadId());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('creationSource', $this->getCreationSource());
        $writer->writeObjectValue('details', $this->getDetails());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeBooleanValue('hasChat', $this->getHasChat());
        $writer->writeBooleanValue('hasDescription', $this->getHasDescription());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('orderHint', $this->getOrderHint());
        $writer->writeIntegerValue('percentComplete', $this->getPercentComplete());
        $writer->writeEnumValue('previewType', $this->getPreviewType());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('recurrence', $this->getRecurrence());
        $writer->writeIntegerValue('referenceCount', $this->getReferenceCount());
        $writer->writeEnumValue('specifiedCompletionRequirements', $this->getSpecifiedCompletionRequirements());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activeChecklistItemCount property value. The activeChecklistItemCount property
     * @param int|null $value Value to set for the activeChecklistItemCount property.
    */
    public function setActiveChecklistItemCount(?int $value): void {
        $this->getBackingStore()->set('activeChecklistItemCount', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the appliedCategories property value. The appliedCategories property
     * @param PlannerAppliedCategories|null $value Value to set for the appliedCategories property.
    */
    public function setAppliedCategories(?PlannerAppliedCategories $value): void {
        $this->getBackingStore()->set('appliedCategories', $value);
    }

    /**
     * Sets the archivalInfo property value. The archivalInfo property
     * @param PlannerArchivalInfo|null $value Value to set for the archivalInfo property.
    */
    public function setArchivalInfo(?PlannerArchivalInfo $value): void {
        $this->getBackingStore()->set('archivalInfo', $value);
    }

    /**
     * Sets the assignments property value. The assignments property
     * @param PlannerAssignments|null $value Value to set for the assignments property.
    */
    public function setAssignments(?PlannerAssignments $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bucketId property value. The bucketId property
     * @param string|null $value Value to set for the bucketId property.
    */
    public function setBucketId(?string $value): void {
        $this->getBackingStore()->set('bucketId', $value);
    }

    /**
     * Sets the checklistItemCount property value. The checklistItemCount property
     * @param int|null $value Value to set for the checklistItemCount property.
    */
    public function setChecklistItemCount(?int $value): void {
        $this->getBackingStore()->set('checklistItemCount', $value);
    }

    /**
     * Sets the completedBy property value. The completedBy property
     * @param IdentitySet|null $value Value to set for the completedBy property.
    */
    public function setCompletedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('completedBy', $value);
    }

    /**
     * Sets the completedDateTime property value. The completedDateTime property
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the conversationThreadId property value. The conversationThreadId property
     * @param string|null $value Value to set for the conversationThreadId property.
    */
    public function setConversationThreadId(?string $value): void {
        $this->getBackingStore()->set('conversationThreadId', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
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
     * Sets the creationSource property value. The creationSource property
     * @param PlannerTaskCreation|null $value Value to set for the creationSource property.
    */
    public function setCreationSource(?PlannerTaskCreation $value): void {
        $this->getBackingStore()->set('creationSource', $value);
    }

    /**
     * Sets the details property value. The details property
     * @param PlannerTaskDetailsData|null $value Value to set for the details property.
    */
    public function setDetails(?PlannerTaskDetailsData $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the dueDateTime property value. The dueDateTime property
     * @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the hasChat property value. The hasChat property
     * @param bool|null $value Value to set for the hasChat property.
    */
    public function setHasChat(?bool $value): void {
        $this->getBackingStore()->set('hasChat', $value);
    }

    /**
     * Sets the hasDescription property value. The hasDescription property
     * @param bool|null $value Value to set for the hasDescription property.
    */
    public function setHasDescription(?bool $value): void {
        $this->getBackingStore()->set('hasDescription', $value);
    }

    /**
     * Sets the isArchived property value. The isArchived property
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the orderHint property value. The orderHint property
     * @param string|null $value Value to set for the orderHint property.
    */
    public function setOrderHint(?string $value): void {
        $this->getBackingStore()->set('orderHint', $value);
    }

    /**
     * Sets the percentComplete property value. The percentComplete property
     * @param int|null $value Value to set for the percentComplete property.
    */
    public function setPercentComplete(?int $value): void {
        $this->getBackingStore()->set('percentComplete', $value);
    }

    /**
     * Sets the previewType property value. The previewType property
     * @param PlannerPreviewType|null $value Value to set for the previewType property.
    */
    public function setPreviewType(?PlannerPreviewType $value): void {
        $this->getBackingStore()->set('previewType', $value);
    }

    /**
     * Sets the priority property value. The priority property
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the recurrence property value. The recurrence property
     * @param PlannerTaskRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PlannerTaskRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the referenceCount property value. The referenceCount property
     * @param int|null $value Value to set for the referenceCount property.
    */
    public function setReferenceCount(?int $value): void {
        $this->getBackingStore()->set('referenceCount', $value);
    }

    /**
     * Sets the specifiedCompletionRequirements property value. The specifiedCompletionRequirements property
     * @param PlannerTaskCompletionRequirements|null $value Value to set for the specifiedCompletionRequirements property.
    */
    public function setSpecifiedCompletionRequirements(?PlannerTaskCompletionRequirements $value): void {
        $this->getBackingStore()->set('specifiedCompletionRequirements', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
