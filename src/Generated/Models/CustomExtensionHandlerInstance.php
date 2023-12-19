<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CustomExtensionHandlerInstance implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new customExtensionHandlerInstance and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomExtensionHandlerInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomExtensionHandlerInstance {
        return new CustomExtensionHandlerInstance();
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
     * Gets the customExtensionId property value. Identifier of the customAccessPackageWorkflowExtension triggered at this instance.
     * @return string|null
    */
    public function getCustomExtensionId(): ?string {
        $val = $this->getBackingStore()->get('customExtensionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionId'");
    }

    /**
     * Gets the externalCorrelationId property value. The unique run ID for the logic app.
     * @return string|null
    */
    public function getExternalCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('externalCorrelationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalCorrelationId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customExtensionId' => fn(ParseNode $n) => $o->setCustomExtensionId($n->getStringValue()),
            'externalCorrelationId' => fn(ParseNode $n) => $o->setExternalCorrelationId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'stage' => fn(ParseNode $n) => $o->setStage($n->getEnumValue(CustomExtensionHandlerInstance_stage::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CustomExtensionHandlerInstance_status::class)),
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
     * Gets the stage property value. Indicates the stage of the request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
     * @return CustomExtensionHandlerInstance_stage|null
    */
    public function getStage(): ?CustomExtensionHandlerInstance_stage {
        $val = $this->getBackingStore()->get('stage');
        if (is_null($val) || $val instanceof CustomExtensionHandlerInstance_stage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stage'");
    }

    /**
     * Gets the status property value. Status of the request to run the access package custom extension workflow that is associated with the logic app. The possible values are: requestSent, requestReceived, unknownFutureValue.
     * @return CustomExtensionHandlerInstance_status|null
    */
    public function getStatus(): ?CustomExtensionHandlerInstance_status {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CustomExtensionHandlerInstance_status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('customExtensionId', $this->getCustomExtensionId());
        $writer->writeStringValue('externalCorrelationId', $this->getExternalCorrelationId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('stage', $this->getStage());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the customExtensionId property value. Identifier of the customAccessPackageWorkflowExtension triggered at this instance.
     * @param string|null $value Value to set for the customExtensionId property.
    */
    public function setCustomExtensionId(?string $value): void {
        $this->getBackingStore()->set('customExtensionId', $value);
    }

    /**
     * Sets the externalCorrelationId property value. The unique run ID for the logic app.
     * @param string|null $value Value to set for the externalCorrelationId property.
    */
    public function setExternalCorrelationId(?string $value): void {
        $this->getBackingStore()->set('externalCorrelationId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the stage property value. Indicates the stage of the request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
     * @param CustomExtensionHandlerInstance_stage|null $value Value to set for the stage property.
    */
    public function setStage(?CustomExtensionHandlerInstance_stage $value): void {
        $this->getBackingStore()->set('stage', $value);
    }

    /**
     * Sets the status property value. Status of the request to run the access package custom extension workflow that is associated with the logic app. The possible values are: requestSent, requestReceived, unknownFutureValue.
     * @param CustomExtensionHandlerInstance_status|null $value Value to set for the status property.
    */
    public function setStatus(?CustomExtensionHandlerInstance_status $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
