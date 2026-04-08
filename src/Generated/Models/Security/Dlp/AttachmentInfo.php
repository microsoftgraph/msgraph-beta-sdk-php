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

class AttachmentInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AttachmentInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentInfo {
        return new AttachmentInfo();
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
     * Gets the checksum property value. The checksum property
     * @return int|null
    */
    public function getChecksum(): ?int {
        $val = $this->getBackingStore()->get('checksum');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checksum'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'checksum' => fn(ParseNode $n) => $o->setChecksum($n->getIntegerValue()),
            'labelNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLabelNames($val);
            },
            'labels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLabels($val);
            },
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sensitiveInformationDetails' => fn(ParseNode $n) => $o->setSensitiveInformationDetails($n->getCollectionOfObjectValues([AttachmentSensitiveInformationDetails::class, 'createFromDiscriminatorValue'])),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the labelNames property value. The labelNames property
     * @return array<string>|null
    */
    public function getLabelNames(): ?array {
        $val = $this->getBackingStore()->get('labelNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'labelNames'");
    }

    /**
     * Gets the labels property value. The labels property
     * @return array<string>|null
    */
    public function getLabels(): ?array {
        $val = $this->getBackingStore()->get('labels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'labels'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the sensitiveInformationDetails property value. The sensitiveInformationDetails property
     * @return array<AttachmentSensitiveInformationDetails>|null
    */
    public function getSensitiveInformationDetails(): ?array {
        $val = $this->getBackingStore()->get('sensitiveInformationDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttachmentSensitiveInformationDetails::class);
            /** @var array<AttachmentSensitiveInformationDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveInformationDetails'");
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        $val = $this->getBackingStore()->get('size');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'size'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('checksum', $this->getChecksum());
        $writer->writeCollectionOfPrimitiveValues('labelNames', $this->getLabelNames());
        $writer->writeCollectionOfPrimitiveValues('labels', $this->getLabels());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('sensitiveInformationDetails', $this->getSensitiveInformationDetails());
        $writer->writeIntegerValue('size', $this->getSize());
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
     * Sets the checksum property value. The checksum property
     * @param int|null $value Value to set for the checksum property.
    */
    public function setChecksum(?int $value): void {
        $this->getBackingStore()->set('checksum', $value);
    }

    /**
     * Sets the labelNames property value. The labelNames property
     * @param array<string>|null $value Value to set for the labelNames property.
    */
    public function setLabelNames(?array $value): void {
        $this->getBackingStore()->set('labelNames', $value);
    }

    /**
     * Sets the labels property value. The labels property
     * @param array<string>|null $value Value to set for the labels property.
    */
    public function setLabels(?array $value): void {
        $this->getBackingStore()->set('labels', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sensitiveInformationDetails property value. The sensitiveInformationDetails property
     * @param array<AttachmentSensitiveInformationDetails>|null $value Value to set for the sensitiveInformationDetails property.
    */
    public function setSensitiveInformationDetails(?array $value): void {
        $this->getBackingStore()->set('sensitiveInformationDetails', $value);
    }

    /**
     * Sets the size property value. The size property
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

}
