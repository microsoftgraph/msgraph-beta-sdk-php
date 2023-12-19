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

class SubjectRightsRequestHistory implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new subjectRightsRequestHistory and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectRightsRequestHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectRightsRequestHistory {
        return new SubjectRightsRequestHistory();
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
     * Gets the changedBy property value. Identity of the user who changed the  subject rights request.
     * @return IdentitySet|null
    */
    public function getChangedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('changedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changedBy'");
    }

    /**
     * Gets the eventDateTime property value. Data and time when the entity was changed.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'changedBy' => fn(ParseNode $n) => $o->setChangedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'stage' => fn(ParseNode $n) => $o->setStage($n->getEnumValue(SubjectRightsRequestHistory_stage::class)),
            'stageStatus' => fn(ParseNode $n) => $o->setStageStatus($n->getEnumValue(SubjectRightsRequestHistory_stageStatus::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
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
     * Gets the stage property value. The stage when the entity was changed. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue, approval. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: approval.
     * @return SubjectRightsRequestHistory_stage|null
    */
    public function getStage(): ?SubjectRightsRequestHistory_stage {
        $val = $this->getBackingStore()->get('stage');
        if (is_null($val) || $val instanceof SubjectRightsRequestHistory_stage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stage'");
    }

    /**
     * Gets the stageStatus property value. The status of the stage when the entity was changed. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     * @return SubjectRightsRequestHistory_stageStatus|null
    */
    public function getStageStatus(): ?SubjectRightsRequestHistory_stageStatus {
        $val = $this->getBackingStore()->get('stageStatus');
        if (is_null($val) || $val instanceof SubjectRightsRequestHistory_stageStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stageStatus'");
    }

    /**
     * Gets the type property value. Type of history.
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('changedBy', $this->getChangedBy());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('stage', $this->getStage());
        $writer->writeEnumValue('stageStatus', $this->getStageStatus());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeAdditionalData($this->getAdditionalData());
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
     * Sets the changedBy property value. Identity of the user who changed the  subject rights request.
     * @param IdentitySet|null $value Value to set for the changedBy property.
    */
    public function setChangedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('changedBy', $value);
    }

    /**
     * Sets the eventDateTime property value. Data and time when the entity was changed.
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the stage property value. The stage when the entity was changed. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue, approval. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: approval.
     * @param SubjectRightsRequestHistory_stage|null $value Value to set for the stage property.
    */
    public function setStage(?SubjectRightsRequestHistory_stage $value): void {
        $this->getBackingStore()->set('stage', $value);
    }

    /**
     * Sets the stageStatus property value. The status of the stage when the entity was changed. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     * @param SubjectRightsRequestHistory_stageStatus|null $value Value to set for the stageStatus property.
    */
    public function setStageStatus(?SubjectRightsRequestHistory_stageStatus $value): void {
        $this->getBackingStore()->set('stageStatus', $value);
    }

    /**
     * Sets the type property value. Type of history.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
