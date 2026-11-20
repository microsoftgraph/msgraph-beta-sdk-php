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

/**
 * Lifecycle tracking for a verification event, indicating who triggered it and its current state.
*/
class VerificationEventLifecycle implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new VerificationEventLifecycle and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerificationEventLifecycle
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerificationEventLifecycle {
        return new VerificationEventLifecycle();
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
            'invalidatedDateTime' => fn(ParseNode $n) => $o->setInvalidatedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(VerificationLifecycleSource::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(VerificationEventLifecycleState::class)),
        ];
    }

    /**
     * Gets the invalidatedDateTime property value. The service-populated timestamp for an event in the invalidated lifecycle state. Otherwise, null. Read-only.
     * @return DateTime|null
    */
    public function getInvalidatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('invalidatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invalidatedDateTime'");
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
     * Gets the source property value. The source property
     * @return VerificationLifecycleSource|null
    */
    public function getSource(): ?VerificationLifecycleSource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof VerificationLifecycleSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the state property value. The state property
     * @return VerificationEventLifecycleState|null
    */
    public function getState(): ?VerificationEventLifecycleState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof VerificationEventLifecycleState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('source', $this->getSource());
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
     * Sets the invalidatedDateTime property value. The service-populated timestamp for an event in the invalidated lifecycle state. Otherwise, null. Read-only.
     * @param DateTime|null $value Value to set for the invalidatedDateTime property.
    */
    public function setInvalidatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('invalidatedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the source property value. The source property
     * @param VerificationLifecycleSource|null $value Value to set for the source property.
    */
    public function setSource(?VerificationLifecycleSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param VerificationEventLifecycleState|null $value Value to set for the state property.
    */
    public function setState(?VerificationEventLifecycleState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
