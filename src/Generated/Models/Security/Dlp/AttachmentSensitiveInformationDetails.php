<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AttachmentSensitiveInformationDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AttachmentSensitiveInformationDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentSensitiveInformationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentSensitiveInformationDetails {
        return new AttachmentSensitiveInformationDetails();
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
            'sensitiveInformationDetailedClassificationAttributes' => fn(ParseNode $n) => $o->setSensitiveInformationDetailedClassificationAttributes($n->getCollectionOfObjectValues([SensitiveInformationDetailedConfidenceLevelResult::class, 'createFromDiscriminatorValue'])),
            'sensitiveInformationDetectionIndices' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setSensitiveInformationDetectionIndices($val);
            },
            'sensitiveType' => fn(ParseNode $n) => $o->setSensitiveType($n->getStringValue()),
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
     * Gets the sensitiveInformationDetailedClassificationAttributes property value. The sensitiveInformationDetailedClassificationAttributes property
     * @return array<SensitiveInformationDetailedConfidenceLevelResult>|null
    */
    public function getSensitiveInformationDetailedClassificationAttributes(): ?array {
        $val = $this->getBackingStore()->get('sensitiveInformationDetailedClassificationAttributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SensitiveInformationDetailedConfidenceLevelResult::class);
            /** @var array<SensitiveInformationDetailedConfidenceLevelResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveInformationDetailedClassificationAttributes'");
    }

    /**
     * Gets the sensitiveInformationDetectionIndices property value. The sensitiveInformationDetectionIndices property
     * @return array<int>|null
    */
    public function getSensitiveInformationDetectionIndices(): ?array {
        $val = $this->getBackingStore()->get('sensitiveInformationDetectionIndices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'int');
            /** @var array<int>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveInformationDetectionIndices'");
    }

    /**
     * Gets the sensitiveType property value. The sensitiveType property
     * @return string|null
    */
    public function getSensitiveType(): ?string {
        $val = $this->getBackingStore()->get('sensitiveType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('sensitiveInformationDetailedClassificationAttributes', $this->getSensitiveInformationDetailedClassificationAttributes());
        $writer->writeCollectionOfPrimitiveValues('sensitiveInformationDetectionIndices', $this->getSensitiveInformationDetectionIndices());
        $writer->writeStringValue('sensitiveType', $this->getSensitiveType());
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
     * Sets the sensitiveInformationDetailedClassificationAttributes property value. The sensitiveInformationDetailedClassificationAttributes property
     * @param array<SensitiveInformationDetailedConfidenceLevelResult>|null $value Value to set for the sensitiveInformationDetailedClassificationAttributes property.
    */
    public function setSensitiveInformationDetailedClassificationAttributes(?array $value): void {
        $this->getBackingStore()->set('sensitiveInformationDetailedClassificationAttributes', $value);
    }

    /**
     * Sets the sensitiveInformationDetectionIndices property value. The sensitiveInformationDetectionIndices property
     * @param array<int>|null $value Value to set for the sensitiveInformationDetectionIndices property.
    */
    public function setSensitiveInformationDetectionIndices(?array $value): void {
        $this->getBackingStore()->set('sensitiveInformationDetectionIndices', $value);
    }

    /**
     * Sets the sensitiveType property value. The sensitiveType property
     * @param string|null $value Value to set for the sensitiveType property.
    */
    public function setSensitiveType(?string $value): void {
        $this->getBackingStore()->set('sensitiveType', $value);
    }

}
