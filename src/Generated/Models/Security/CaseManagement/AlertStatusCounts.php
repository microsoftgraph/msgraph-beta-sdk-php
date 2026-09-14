<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AlertStatusCounts implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AlertStatusCounts and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertStatusCounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertStatusCounts {
        return new AlertStatusCounts();
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
     * Gets the new property value. The number of new alerts.
     * @return int|null
    */
    public function getEscapedNew(): ?int {
        $val = $this->getBackingStore()->get('escapedNew');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedNew'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'new' => fn(ParseNode $n) => $o->setEscapedNew($n->getIntegerValue()),
            'inProgress' => fn(ParseNode $n) => $o->setInProgress($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resolved' => fn(ParseNode $n) => $o->setResolved($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inProgress property value. The number of alerts that are in progress.
     * @return int|null
    */
    public function getInProgress(): ?int {
        $val = $this->getBackingStore()->get('inProgress');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inProgress'");
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
     * Gets the resolved property value. The number of resolved alerts.
     * @return int|null
    */
    public function getResolved(): ?int {
        $val = $this->getBackingStore()->get('resolved');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resolved'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('new', $this->getEscapedNew());
        $writer->writeIntegerValue('inProgress', $this->getInProgress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('resolved', $this->getResolved());
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
     * Sets the new property value. The number of new alerts.
     * @param int|null $value Value to set for the new property.
    */
    public function setEscapedNew(?int $value): void {
        $this->getBackingStore()->set('escapedNew', $value);
    }

    /**
     * Sets the inProgress property value. The number of alerts that are in progress.
     * @param int|null $value Value to set for the inProgress property.
    */
    public function setInProgress(?int $value): void {
        $this->getBackingStore()->set('inProgress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resolved property value. The number of resolved alerts.
     * @param int|null $value Value to set for the resolved property.
    */
    public function setResolved(?int $value): void {
        $this->getBackingStore()->set('resolved', $value);
    }

}
