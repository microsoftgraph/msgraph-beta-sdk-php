<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class QualityUpdateCveSeverityInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new qualityUpdateCveSeverityInformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QualityUpdateCveSeverityInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QualityUpdateCveSeverityInformation {
        return new QualityUpdateCveSeverityInformation();
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
     * Gets the exploitedCves property value. The exploitedCves property
     * @return array<CveInformation>|null
    */
    public function getExploitedCves(): ?array {
        $val = $this->getBackingStore()->get('exploitedCves');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CveInformation::class);
            /** @var array<CveInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exploitedCves'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'exploitedCves' => fn(ParseNode $n) => $o->setExploitedCves($n->getCollectionOfObjectValues([CveInformation::class, 'createFromDiscriminatorValue'])),
            'maxBaseScore' => fn(ParseNode $n) => $o->setMaxBaseScore($n->getFloatValue()),
            'maxSeverity' => fn(ParseNode $n) => $o->setMaxSeverity($n->getEnumValue(QualityUpdateCveSeverityInformation_maxSeverity::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the maxBaseScore property value. Highest base score that occurs of any CVE addressed by the quality update. Read-only.
     * @return float|null
    */
    public function getMaxBaseScore(): ?float {
        $val = $this->getBackingStore()->get('maxBaseScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxBaseScore'");
    }

    /**
     * Gets the maxSeverity property value. The maxSeverity property
     * @return QualityUpdateCveSeverityInformation_maxSeverity|null
    */
    public function getMaxSeverity(): ?QualityUpdateCveSeverityInformation_maxSeverity {
        $val = $this->getBackingStore()->get('maxSeverity');
        if (is_null($val) || $val instanceof QualityUpdateCveSeverityInformation_maxSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxSeverity'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('exploitedCves', $this->getExploitedCves());
        $writer->writeFloatValue('maxBaseScore', $this->getMaxBaseScore());
        $writer->writeEnumValue('maxSeverity', $this->getMaxSeverity());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the exploitedCves property value. The exploitedCves property
     * @param array<CveInformation>|null $value Value to set for the exploitedCves property.
    */
    public function setExploitedCves(?array $value): void {
        $this->getBackingStore()->set('exploitedCves', $value);
    }

    /**
     * Sets the maxBaseScore property value. Highest base score that occurs of any CVE addressed by the quality update. Read-only.
     * @param float|null $value Value to set for the maxBaseScore property.
    */
    public function setMaxBaseScore(?float $value): void {
        $this->getBackingStore()->set('maxBaseScore', $value);
    }

    /**
     * Sets the maxSeverity property value. The maxSeverity property
     * @param QualityUpdateCveSeverityInformation_maxSeverity|null $value Value to set for the maxSeverity property.
    */
    public function setMaxSeverity(?QualityUpdateCveSeverityInformation_maxSeverity $value): void {
        $this->getBackingStore()->set('maxSeverity', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
