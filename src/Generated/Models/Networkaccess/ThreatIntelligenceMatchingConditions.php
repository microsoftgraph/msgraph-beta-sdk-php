<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ThreatIntelligenceMatchingConditions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ThreatIntelligenceMatchingConditions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatIntelligenceMatchingConditions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatIntelligenceMatchingConditions {
        return new ThreatIntelligenceMatchingConditions();
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
     * Gets the destinations property value. A collection of destinations that are considered potential threats for network access evaluation.
     * @return array<ThreatIntelligenceDestination>|null
    */
    public function getDestinations(): ?array {
        $val = $this->getBackingStore()->get('destinations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ThreatIntelligenceDestination::class);
            /** @var array<ThreatIntelligenceDestination>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'destinations' => fn(ParseNode $n) => $o->setDestinations($n->getCollectionOfObjectValues([ThreatIntelligenceDestination::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(ThreatIntelligenceSeverity::class)),
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
     * Gets the severity property value. The severity level of the threat associated with the destinations. Higher severity levels typically result in stricter security controls. The possible values are: low, medium, high, unknownFutureValue.
     * @return ThreatIntelligenceSeverity|null
    */
    public function getSeverity(): ?ThreatIntelligenceSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof ThreatIntelligenceSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('destinations', $this->getDestinations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('severity', $this->getSeverity());
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
     * Sets the destinations property value. A collection of destinations that are considered potential threats for network access evaluation.
     * @param array<ThreatIntelligenceDestination>|null $value Value to set for the destinations property.
    */
    public function setDestinations(?array $value): void {
        $this->getBackingStore()->set('destinations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the severity property value. The severity level of the threat associated with the destinations. Higher severity levels typically result in stricter security controls. The possible values are: low, medium, high, unknownFutureValue.
     * @param ThreatIntelligenceSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?ThreatIntelligenceSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

}
