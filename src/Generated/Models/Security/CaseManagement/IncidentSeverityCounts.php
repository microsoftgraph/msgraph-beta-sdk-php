<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IncidentSeverityCounts implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IncidentSeverityCounts and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IncidentSeverityCounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IncidentSeverityCounts {
        return new IncidentSeverityCounts();
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
            'high' => fn(ParseNode $n) => $o->setHigh($n->getIntegerValue()),
            'informational' => fn(ParseNode $n) => $o->setInformational($n->getIntegerValue()),
            'low' => fn(ParseNode $n) => $o->setLow($n->getIntegerValue()),
            'medium' => fn(ParseNode $n) => $o->setMedium($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'unknown' => fn(ParseNode $n) => $o->setUnknown($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the high property value. The number of alerts with high severity.
     * @return int|null
    */
    public function getHigh(): ?int {
        $val = $this->getBackingStore()->get('high');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'high'");
    }

    /**
     * Gets the informational property value. The number of alerts with informational severity.
     * @return int|null
    */
    public function getInformational(): ?int {
        $val = $this->getBackingStore()->get('informational');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'informational'");
    }

    /**
     * Gets the low property value. The number of alerts with low severity.
     * @return int|null
    */
    public function getLow(): ?int {
        $val = $this->getBackingStore()->get('low');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'low'");
    }

    /**
     * Gets the medium property value. The number of alerts with medium severity.
     * @return int|null
    */
    public function getMedium(): ?int {
        $val = $this->getBackingStore()->get('medium');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'medium'");
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
     * Gets the unknown property value. The number of alerts with unknown severity.
     * @return int|null
    */
    public function getUnknown(): ?int {
        $val = $this->getBackingStore()->get('unknown');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknown'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('high', $this->getHigh());
        $writer->writeIntegerValue('informational', $this->getInformational());
        $writer->writeIntegerValue('low', $this->getLow());
        $writer->writeIntegerValue('medium', $this->getMedium());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('unknown', $this->getUnknown());
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
     * Sets the high property value. The number of alerts with high severity.
     * @param int|null $value Value to set for the high property.
    */
    public function setHigh(?int $value): void {
        $this->getBackingStore()->set('high', $value);
    }

    /**
     * Sets the informational property value. The number of alerts with informational severity.
     * @param int|null $value Value to set for the informational property.
    */
    public function setInformational(?int $value): void {
        $this->getBackingStore()->set('informational', $value);
    }

    /**
     * Sets the low property value. The number of alerts with low severity.
     * @param int|null $value Value to set for the low property.
    */
    public function setLow(?int $value): void {
        $this->getBackingStore()->set('low', $value);
    }

    /**
     * Sets the medium property value. The number of alerts with medium severity.
     * @param int|null $value Value to set for the medium property.
    */
    public function setMedium(?int $value): void {
        $this->getBackingStore()->set('medium', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the unknown property value. The number of alerts with unknown severity.
     * @param int|null $value Value to set for the unknown property.
    */
    public function setUnknown(?int $value): void {
        $this->getBackingStore()->set('unknown', $value);
    }

}
