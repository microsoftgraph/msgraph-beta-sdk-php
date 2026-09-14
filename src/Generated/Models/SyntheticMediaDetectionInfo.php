<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SyntheticMediaDetectionInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SyntheticMediaDetectionInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SyntheticMediaDetectionInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SyntheticMediaDetectionInfo {
        return new SyntheticMediaDetectionInfo();
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
     * Gets the detectionId property value. Unique identifier for the detection event. This property correlates with the id parameter that the detection bot passed to reportSyntheticMedia.
     * @return string|null
    */
    public function getDetectionId(): ?string {
        $val = $this->getBackingStore()->get('detectionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionId'");
    }

    /**
     * Gets the detectorBot property value. Identifier of the detection bot that produced this result.
     * @return string|null
    */
    public function getDetectorBot(): ?string {
        $val = $this->getBackingStore()->get('detectorBot');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectorBot'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'detectionId' => fn(ParseNode $n) => $o->setDetectionId($n->getStringValue()),
            'detectorBot' => fn(ParseNode $n) => $o->setDetectorBot($n->getStringValue()),
            'isParticipantTrusted' => fn(ParseNode $n) => $o->setIsParticipantTrusted($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'syntheticConfidence' => fn(ParseNode $n) => $o->setSyntheticConfidence($n->getFloatValue()),
        ];
    }

    /**
     * Gets the isParticipantTrusted property value. Set to true if the participant is classified as trusted or reliable (for example, a known internal user); otherwise, false.
     * @return bool|null
    */
    public function getIsParticipantTrusted(): ?bool {
        $val = $this->getBackingStore()->get('isParticipantTrusted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isParticipantTrusted'");
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
     * Gets the syntheticConfidence property value. Confidence score (0.0 to 1.0) that the participant's media is synthetic.
     * @return float|null
    */
    public function getSyntheticConfidence(): ?float {
        $val = $this->getBackingStore()->get('syntheticConfidence');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'syntheticConfidence'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('detectionId', $this->getDetectionId());
        $writer->writeStringValue('detectorBot', $this->getDetectorBot());
        $writer->writeBooleanValue('isParticipantTrusted', $this->getIsParticipantTrusted());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('syntheticConfidence', $this->getSyntheticConfidence());
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
     * Sets the detectionId property value. Unique identifier for the detection event. This property correlates with the id parameter that the detection bot passed to reportSyntheticMedia.
     * @param string|null $value Value to set for the detectionId property.
    */
    public function setDetectionId(?string $value): void {
        $this->getBackingStore()->set('detectionId', $value);
    }

    /**
     * Sets the detectorBot property value. Identifier of the detection bot that produced this result.
     * @param string|null $value Value to set for the detectorBot property.
    */
    public function setDetectorBot(?string $value): void {
        $this->getBackingStore()->set('detectorBot', $value);
    }

    /**
     * Sets the isParticipantTrusted property value. Set to true if the participant is classified as trusted or reliable (for example, a known internal user); otherwise, false.
     * @param bool|null $value Value to set for the isParticipantTrusted property.
    */
    public function setIsParticipantTrusted(?bool $value): void {
        $this->getBackingStore()->set('isParticipantTrusted', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the syntheticConfidence property value. Confidence score (0.0 to 1.0) that the participant's media is synthetic.
     * @param float|null $value Value to set for the syntheticConfidence property.
    */
    public function setSyntheticConfidence(?float $value): void {
        $this->getBackingStore()->set('syntheticConfidence', $value);
    }

}
