<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlaceOperationProgress implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PlaceOperationProgress and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlaceOperationProgress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlaceOperationProgress {
        return new PlaceOperationProgress();
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
     * Gets the failedPlaceCount property value. The count of places failed to upsert.
     * @return int|null
    */
    public function getFailedPlaceCount(): ?int {
        $val = $this->getBackingStore()->get('failedPlaceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedPlaceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedPlaceCount' => fn(ParseNode $n) => $o->setFailedPlaceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'succeededPlaceCount' => fn(ParseNode $n) => $o->setSucceededPlaceCount($n->getIntegerValue()),
            'totalPlaceCount' => fn(ParseNode $n) => $o->setTotalPlaceCount($n->getIntegerValue()),
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
     * Gets the succeededPlaceCount property value. The count of places succeeded to upsert.
     * @return int|null
    */
    public function getSucceededPlaceCount(): ?int {
        $val = $this->getBackingStore()->get('succeededPlaceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'succeededPlaceCount'");
    }

    /**
     * Gets the totalPlaceCount property value. The total count of places in the request.
     * @return int|null
    */
    public function getTotalPlaceCount(): ?int {
        $val = $this->getBackingStore()->get('totalPlaceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalPlaceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedPlaceCount', $this->getFailedPlaceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('succeededPlaceCount', $this->getSucceededPlaceCount());
        $writer->writeIntegerValue('totalPlaceCount', $this->getTotalPlaceCount());
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
     * Sets the failedPlaceCount property value. The count of places failed to upsert.
     * @param int|null $value Value to set for the failedPlaceCount property.
    */
    public function setFailedPlaceCount(?int $value): void {
        $this->getBackingStore()->set('failedPlaceCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the succeededPlaceCount property value. The count of places succeeded to upsert.
     * @param int|null $value Value to set for the succeededPlaceCount property.
    */
    public function setSucceededPlaceCount(?int $value): void {
        $this->getBackingStore()->set('succeededPlaceCount', $value);
    }

    /**
     * Sets the totalPlaceCount property value. The total count of places in the request.
     * @param int|null $value Value to set for the totalPlaceCount property.
    */
    public function setTotalPlaceCount(?int $value): void {
        $this->getBackingStore()->set('totalPlaceCount', $value);
    }

}
