<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TrainingCampaignReportOverview implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TrainingCampaignReportOverview and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrainingCampaignReportOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrainingCampaignReportOverview {
        return new TrainingCampaignReportOverview();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'trainingModuleCompletion' => fn(ParseNode $n) => $o->setTrainingModuleCompletion($n->getObjectValue([TrainingEventsContent::class, 'createFromDiscriminatorValue'])),
            'trainingNotificationDeliveryStatus' => fn(ParseNode $n) => $o->setTrainingNotificationDeliveryStatus($n->getObjectValue([TrainingNotificationDelivery::class, 'createFromDiscriminatorValue'])),
            'userCompletionStatus' => fn(ParseNode $n) => $o->setUserCompletionStatus($n->getObjectValue([UserTrainingCompletionSummary::class, 'createFromDiscriminatorValue'])),
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
     * Gets the trainingModuleCompletion property value. Aggregate data of training completion.
     * @return TrainingEventsContent|null
    */
    public function getTrainingModuleCompletion(): ?TrainingEventsContent {
        $val = $this->getBackingStore()->get('trainingModuleCompletion');
        if (is_null($val) || $val instanceof TrainingEventsContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingModuleCompletion'");
    }

    /**
     * Gets the trainingNotificationDeliveryStatus property value. Aggregate data of training mail delivery over the course of the training campaign.
     * @return TrainingNotificationDelivery|null
    */
    public function getTrainingNotificationDeliveryStatus(): ?TrainingNotificationDelivery {
        $val = $this->getBackingStore()->get('trainingNotificationDeliveryStatus');
        if (is_null($val) || $val instanceof TrainingNotificationDelivery) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingNotificationDeliveryStatus'");
    }

    /**
     * Gets the userCompletionStatus property value. Aggregate data of users training progress.
     * @return UserTrainingCompletionSummary|null
    */
    public function getUserCompletionStatus(): ?UserTrainingCompletionSummary {
        $val = $this->getBackingStore()->get('userCompletionStatus');
        if (is_null($val) || $val instanceof UserTrainingCompletionSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userCompletionStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('trainingModuleCompletion', $this->getTrainingModuleCompletion());
        $writer->writeObjectValue('trainingNotificationDeliveryStatus', $this->getTrainingNotificationDeliveryStatus());
        $writer->writeObjectValue('userCompletionStatus', $this->getUserCompletionStatus());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the trainingModuleCompletion property value. Aggregate data of training completion.
     * @param TrainingEventsContent|null $value Value to set for the trainingModuleCompletion property.
    */
    public function setTrainingModuleCompletion(?TrainingEventsContent $value): void {
        $this->getBackingStore()->set('trainingModuleCompletion', $value);
    }

    /**
     * Sets the trainingNotificationDeliveryStatus property value. Aggregate data of training mail delivery over the course of the training campaign.
     * @param TrainingNotificationDelivery|null $value Value to set for the trainingNotificationDeliveryStatus property.
    */
    public function setTrainingNotificationDeliveryStatus(?TrainingNotificationDelivery $value): void {
        $this->getBackingStore()->set('trainingNotificationDeliveryStatus', $value);
    }

    /**
     * Sets the userCompletionStatus property value. Aggregate data of users training progress.
     * @param UserTrainingCompletionSummary|null $value Value to set for the userCompletionStatus property.
    */
    public function setUserCompletionStatus(?UserTrainingCompletionSummary $value): void {
        $this->getBackingStore()->set('userCompletionStatus', $value);
    }

}
