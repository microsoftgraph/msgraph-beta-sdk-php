<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrinterStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PrinterStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterStatus {
        return new PrinterStatus();
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
     * Gets the description property value. A human-readable description of the printer's current processing state. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the details property value. The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
     * @return array<PrinterProcessingStateDetail>|null
    */
    public function getDetails(): ?array {
        $val = $this->getBackingStore()->get('details');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrinterProcessingStateDetail::class);
            /** @var array<PrinterProcessingStateDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfEnumValues(PrinterProcessingStateDetail::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'processingState' => fn(ParseNode $n) => $o->setProcessingState($n->getEnumValue(PrinterProcessingState::class)),
            'processingStateDescription' => fn(ParseNode $n) => $o->setProcessingStateDescription($n->getStringValue()),
            'processingStateReasons' => fn(ParseNode $n) => $o->setProcessingStateReasons($n->getCollectionOfEnumValues(PrinterProcessingStateReason::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PrinterProcessingState::class)),
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
     * Gets the processingState property value. The processingState property
     * @return PrinterProcessingState|null
    */
    public function getProcessingState(): ?PrinterProcessingState {
        $val = $this->getBackingStore()->get('processingState');
        if (is_null($val) || $val instanceof PrinterProcessingState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processingState'");
    }

    /**
     * Gets the processingStateDescription property value. The processingStateDescription property
     * @return string|null
    */
    public function getProcessingStateDescription(): ?string {
        $val = $this->getBackingStore()->get('processingStateDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processingStateDescription'");
    }

    /**
     * Gets the processingStateReasons property value. The processingStateReasons property
     * @return array<PrinterProcessingStateReason>|null
    */
    public function getProcessingStateReasons(): ?array {
        $val = $this->getBackingStore()->get('processingStateReasons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrinterProcessingStateReason::class);
            /** @var array<PrinterProcessingStateReason>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processingStateReasons'");
    }

    /**
     * Gets the state property value. The state property
     * @return PrinterProcessingState|null
    */
    public function getState(): ?PrinterProcessingState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof PrinterProcessingState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfEnumValues('details', $this->getDetails());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('processingState', $this->getProcessingState());
        $writer->writeStringValue('processingStateDescription', $this->getProcessingStateDescription());
        $writer->writeCollectionOfEnumValues('processingStateReasons', $this->getProcessingStateReasons());
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
     * Sets the description property value. A human-readable description of the printer's current processing state. Read-only.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the details property value. The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
     * @param array<PrinterProcessingStateDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the processingState property value. The processingState property
     * @param PrinterProcessingState|null $value Value to set for the processingState property.
    */
    public function setProcessingState(?PrinterProcessingState $value): void {
        $this->getBackingStore()->set('processingState', $value);
    }

    /**
     * Sets the processingStateDescription property value. The processingStateDescription property
     * @param string|null $value Value to set for the processingStateDescription property.
    */
    public function setProcessingStateDescription(?string $value): void {
        $this->getBackingStore()->set('processingStateDescription', $value);
    }

    /**
     * Sets the processingStateReasons property value. The processingStateReasons property
     * @param array<PrinterProcessingStateReason>|null $value Value to set for the processingStateReasons property.
    */
    public function setProcessingStateReasons(?array $value): void {
        $this->getBackingStore()->set('processingStateReasons', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param PrinterProcessingState|null $value Value to set for the state property.
    */
    public function setState(?PrinterProcessingState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
