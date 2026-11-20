<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ProvenanceChainStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ProvenanceChainStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvenanceChainStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvenanceChainStatus {
        return new ProvenanceChainStatus();
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
     * Gets the breakDetectedAtDateTime property value. The date and time when the service detected that the chain of trust was broken.
     * @return DateTime|null
    */
    public function getBreakDetectedAtDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('breakDetectedAtDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'breakDetectedAtDateTime'");
    }

    /**
     * Gets the breakReason property value. The breakReason property
     * @return ChainBreakReason|null
    */
    public function getBreakReason(): ?ChainBreakReason {
        $val = $this->getBackingStore()->get('breakReason');
        if (is_null($val) || $val instanceof ChainBreakReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'breakReason'");
    }

    /**
     * Gets the breakSource property value. The breakSource property
     * @return ChainBreakSource|null
    */
    public function getBreakSource(): ?ChainBreakSource {
        $val = $this->getBackingStore()->get('breakSource');
        if (is_null($val) || $val instanceof ChainBreakSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'breakSource'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'breakDetectedAtDateTime' => fn(ParseNode $n) => $o->setBreakDetectedAtDateTime($n->getDateTimeValue()),
            'breakReason' => fn(ParseNode $n) => $o->setBreakReason($n->getEnumValue(ChainBreakReason::class)),
            'breakSource' => fn(ParseNode $n) => $o->setBreakSource($n->getEnumValue(ChainBreakSource::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ChainState::class)),
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
     * Gets the state property value. The state property
     * @return ChainState|null
    */
    public function getState(): ?ChainState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof ChainState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('breakDetectedAtDateTime', $this->getBreakDetectedAtDateTime());
        $writer->writeEnumValue('breakReason', $this->getBreakReason());
        $writer->writeEnumValue('breakSource', $this->getBreakSource());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('state', $this->getState());
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
     * Sets the breakDetectedAtDateTime property value. The date and time when the service detected that the chain of trust was broken.
     * @param DateTime|null $value Value to set for the breakDetectedAtDateTime property.
    */
    public function setBreakDetectedAtDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('breakDetectedAtDateTime', $value);
    }

    /**
     * Sets the breakReason property value. The breakReason property
     * @param ChainBreakReason|null $value Value to set for the breakReason property.
    */
    public function setBreakReason(?ChainBreakReason $value): void {
        $this->getBackingStore()->set('breakReason', $value);
    }

    /**
     * Sets the breakSource property value. The breakSource property
     * @param ChainBreakSource|null $value Value to set for the breakSource property.
    */
    public function setBreakSource(?ChainBreakSource $value): void {
        $this->getBackingStore()->set('breakSource', $value);
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
     * @param ChainState|null $value Value to set for the state property.
    */
    public function setState(?ChainState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
