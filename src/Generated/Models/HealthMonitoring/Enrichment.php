<?php

namespace Microsoft\Graph\Beta\Generated\Models\HealthMonitoring;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Enrichment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Enrichment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Enrichment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Enrichment {
        return new Enrichment();
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
            'impacts' => fn(ParseNode $n) => $o->setImpacts($n->getCollectionOfObjectValues([ResourceImpactSummary::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(EnrichmentState::class)),
            'supportingData' => fn(ParseNode $n) => $o->setSupportingData($n->getObjectValue([SupportingData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the impacts property value. The impacts property
     * @return array<ResourceImpactSummary>|null
    */
    public function getImpacts(): ?array {
        $val = $this->getBackingStore()->get('impacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourceImpactSummary::class);
            /** @var array<ResourceImpactSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impacts'");
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
     * Gets the state property value. The state property
     * @return EnrichmentState|null
    */
    public function getState(): ?EnrichmentState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof EnrichmentState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the supportingData property value. The supportingData property
     * @return SupportingData|null
    */
    public function getSupportingData(): ?SupportingData {
        $val = $this->getBackingStore()->get('supportingData');
        if (is_null($val) || $val instanceof SupportingData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportingData'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('impacts', $this->getImpacts());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeObjectValue('supportingData', $this->getSupportingData());
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
     * Sets the impacts property value. The impacts property
     * @param array<ResourceImpactSummary>|null $value Value to set for the impacts property.
    */
    public function setImpacts(?array $value): void {
        $this->getBackingStore()->set('impacts', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param EnrichmentState|null $value Value to set for the state property.
    */
    public function setState(?EnrichmentState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the supportingData property value. The supportingData property
     * @param SupportingData|null $value Value to set for the supportingData property.
    */
    public function setSupportingData(?SupportingData $value): void {
        $this->getBackingStore()->set('supportingData', $value);
    }

}
