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

class BlastRadiusRisk implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new BlastRadiusRisk and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BlastRadiusRisk
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BlastRadiusRisk {
        return new BlastRadiusRisk();
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
            'riskIndicators' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRiskIndicators($val);
            },
            'riskLevel' => fn(ParseNode $n) => $o->setRiskLevel($n->getEnumValue(RiskLevel::class)),
            'riskRecommendations' => fn(ParseNode $n) => $o->setRiskRecommendations($n->getCollectionOfObjectValues([RiskRecommendation::class, 'createFromDiscriminatorValue'])),
            'riskUrl' => fn(ParseNode $n) => $o->setRiskUrl($n->getStringValue()),
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
     * Gets the riskIndicators property value. The riskIndicators property
     * @return array<string>|null
    */
    public function getRiskIndicators(): ?array {
        $val = $this->getBackingStore()->get('riskIndicators');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskIndicators'");
    }

    /**
     * Gets the riskLevel property value. The riskLevel property
     * @return RiskLevel|null
    */
    public function getRiskLevel(): ?RiskLevel {
        $val = $this->getBackingStore()->get('riskLevel');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskLevel'");
    }

    /**
     * Gets the riskRecommendations property value. The riskRecommendations property
     * @return array<RiskRecommendation>|null
    */
    public function getRiskRecommendations(): ?array {
        $val = $this->getBackingStore()->get('riskRecommendations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RiskRecommendation::class);
            /** @var array<RiskRecommendation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskRecommendations'");
    }

    /**
     * Gets the riskUrl property value. The riskUrl property
     * @return string|null
    */
    public function getRiskUrl(): ?string {
        $val = $this->getBackingStore()->get('riskUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('riskIndicators', $this->getRiskIndicators());
        $writer->writeEnumValue('riskLevel', $this->getRiskLevel());
        $writer->writeCollectionOfObjectValues('riskRecommendations', $this->getRiskRecommendations());
        $writer->writeStringValue('riskUrl', $this->getRiskUrl());
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
     * Sets the riskIndicators property value. The riskIndicators property
     * @param array<string>|null $value Value to set for the riskIndicators property.
    */
    public function setRiskIndicators(?array $value): void {
        $this->getBackingStore()->set('riskIndicators', $value);
    }

    /**
     * Sets the riskLevel property value. The riskLevel property
     * @param RiskLevel|null $value Value to set for the riskLevel property.
    */
    public function setRiskLevel(?RiskLevel $value): void {
        $this->getBackingStore()->set('riskLevel', $value);
    }

    /**
     * Sets the riskRecommendations property value. The riskRecommendations property
     * @param array<RiskRecommendation>|null $value Value to set for the riskRecommendations property.
    */
    public function setRiskRecommendations(?array $value): void {
        $this->getBackingStore()->set('riskRecommendations', $value);
    }

    /**
     * Sets the riskUrl property value. The riskUrl property
     * @param string|null $value Value to set for the riskUrl property.
    */
    public function setRiskUrl(?string $value): void {
        $this->getBackingStore()->set('riskUrl', $value);
    }

}
