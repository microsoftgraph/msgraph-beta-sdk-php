<?php

namespace Microsoft\Graph\Beta\Generated\Me\InformationProtection\DataLossPreventionPolicies\Evaluate;

use Microsoft\Graph\Beta\Generated\Models\DlpEvaluationInput;
use Microsoft\Graph\Beta\Generated\Models\DlpNotification;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EvaluatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new evaluatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluatePostRequestBody {
        return new EvaluatePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the evaluationInput property value. The evaluationInput property
     * @return DlpEvaluationInput|null
    */
    public function getEvaluationInput(): ?DlpEvaluationInput {
        return $this->getBackingStore()->get('evaluationInput');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'evaluationInput' => fn(ParseNode $n) => $o->setEvaluationInput($n->getObjectValue([DlpEvaluationInput::class, 'createFromDiscriminatorValue'])),
            'notificationInfo' => fn(ParseNode $n) => $o->setNotificationInfo($n->getObjectValue([DlpNotification::class, 'createFromDiscriminatorValue'])),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getStringValue()),
        ];
    }

    /**
     * Gets the notificationInfo property value. The notificationInfo property
     * @return DlpNotification|null
    */
    public function getNotificationInfo(): ?DlpNotification {
        return $this->getBackingStore()->get('notificationInfo');
    }

    /**
     * Gets the target property value. The target property
     * @return string|null
    */
    public function getTarget(): ?string {
        return $this->getBackingStore()->get('target');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('evaluationInput', $this->getEvaluationInput());
        $writer->writeObjectValue('notificationInfo', $this->getNotificationInfo());
        $writer->writeStringValue('target', $this->getTarget());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the evaluationInput property value. The evaluationInput property
     *  @param DlpEvaluationInput|null $value Value to set for the evaluationInput property.
    */
    public function setEvaluationInput(?DlpEvaluationInput $value): void {
        $this->getBackingStore()->set('evaluationInput', $value);
    }

    /**
     * Sets the notificationInfo property value. The notificationInfo property
     *  @param DlpNotification|null $value Value to set for the notificationInfo property.
    */
    public function setNotificationInfo(?DlpNotification $value): void {
        $this->getBackingStore()->set('notificationInfo', $value);
    }

    /**
     * Sets the target property value. The target property
     *  @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
