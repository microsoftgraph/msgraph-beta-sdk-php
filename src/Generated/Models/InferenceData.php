<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class InferenceData implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new InferenceData and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InferenceData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InferenceData {
        return new InferenceData();
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
     * Gets the confidenceScore property value. Confidence score reflecting the accuracy of the data inferred about the user.
     * @return InferenceData_confidenceScore|null
    */
    public function getConfidenceScore(): ?InferenceData_confidenceScore {
        $val = $this->getBackingStore()->get('confidenceScore');
        if (is_null($val) || $val instanceof InferenceData_confidenceScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'confidenceScore'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'confidenceScore' => fn(ParseNode $n) => $o->setConfidenceScore($n->getObjectValue([InferenceData_confidenceScore::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'userHasVerifiedAccuracy' => fn(ParseNode $n) => $o->setUserHasVerifiedAccuracy($n->getBooleanValue()),
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
     * Gets the userHasVerifiedAccuracy property value. Records if the user has confirmed this inference as being True or False.
     * @return bool|null
    */
    public function getUserHasVerifiedAccuracy(): ?bool {
        $val = $this->getBackingStore()->get('userHasVerifiedAccuracy');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userHasVerifiedAccuracy'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('confidenceScore', $this->getConfidenceScore());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('userHasVerifiedAccuracy', $this->getUserHasVerifiedAccuracy());
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
     * Sets the confidenceScore property value. Confidence score reflecting the accuracy of the data inferred about the user.
     * @param InferenceData_confidenceScore|null $value Value to set for the confidenceScore property.
    */
    public function setConfidenceScore(?InferenceData_confidenceScore $value): void {
        $this->getBackingStore()->set('confidenceScore', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the userHasVerifiedAccuracy property value. Records if the user has confirmed this inference as being True or False.
     * @param bool|null $value Value to set for the userHasVerifiedAccuracy property.
    */
    public function setUserHasVerifiedAccuracy(?bool $value): void {
        $this->getBackingStore()->set('userHasVerifiedAccuracy', $value);
    }

}
