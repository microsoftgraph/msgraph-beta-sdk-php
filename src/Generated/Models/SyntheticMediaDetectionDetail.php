<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SyntheticMediaDetectionDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SyntheticMediaDetectionDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SyntheticMediaDetectionDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SyntheticMediaDetectionDetail {
        return new SyntheticMediaDetectionDetail();
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
     * Gets the confidence property value. The confidence property
     * @return float|null
    */
    public function getConfidence(): ?float {
        $val = $this->getBackingStore()->get('confidence');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'confidence'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'confidence' => fn(ParseNode $n) => $o->setConfidence($n->getFloatValue()),
            'modality' => fn(ParseNode $n) => $o->setModality($n->getEnumValue(ContentModality::class)),
            'modelName' => fn(ParseNode $n) => $o->setModelName($n->getStringValue()),
            'modelTasks' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setModelTasks($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'segment' => fn(ParseNode $n) => $o->setSegment($n->getObjectValue([MediaSegment::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the modality property value. The modality property
     * @return ContentModality|null
    */
    public function getModality(): ?ContentModality {
        $val = $this->getBackingStore()->get('modality');
        if (is_null($val) || $val instanceof ContentModality) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modality'");
    }

    /**
     * Gets the modelName property value. The modelName property
     * @return string|null
    */
    public function getModelName(): ?string {
        $val = $this->getBackingStore()->get('modelName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modelName'");
    }

    /**
     * Gets the modelTasks property value. The modelTasks property
     * @return array<string>|null
    */
    public function getModelTasks(): ?array {
        $val = $this->getBackingStore()->get('modelTasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modelTasks'");
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
     * Gets the segment property value. The segment property
     * @return MediaSegment|null
    */
    public function getSegment(): ?MediaSegment {
        $val = $this->getBackingStore()->get('segment');
        if (is_null($val) || $val instanceof MediaSegment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'segment'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('confidence', $this->getConfidence());
        $writer->writeEnumValue('modality', $this->getModality());
        $writer->writeStringValue('modelName', $this->getModelName());
        $writer->writeCollectionOfPrimitiveValues('modelTasks', $this->getModelTasks());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('segment', $this->getSegment());
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
     * Sets the confidence property value. The confidence property
     * @param float|null $value Value to set for the confidence property.
    */
    public function setConfidence(?float $value): void {
        $this->getBackingStore()->set('confidence', $value);
    }

    /**
     * Sets the modality property value. The modality property
     * @param ContentModality|null $value Value to set for the modality property.
    */
    public function setModality(?ContentModality $value): void {
        $this->getBackingStore()->set('modality', $value);
    }

    /**
     * Sets the modelName property value. The modelName property
     * @param string|null $value Value to set for the modelName property.
    */
    public function setModelName(?string $value): void {
        $this->getBackingStore()->set('modelName', $value);
    }

    /**
     * Sets the modelTasks property value. The modelTasks property
     * @param array<string>|null $value Value to set for the modelTasks property.
    */
    public function setModelTasks(?array $value): void {
        $this->getBackingStore()->set('modelTasks', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the segment property value. The segment property
     * @param MediaSegment|null $value Value to set for the segment property.
    */
    public function setSegment(?MediaSegment $value): void {
        $this->getBackingStore()->set('segment', $value);
    }

}
