<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcBulkActionSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cloudPcBulkActionSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkActionSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkActionSummary {
        return new CloudPcBulkActionSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the failedCount property value. The failedCount property
     * @return int|null
    */
    public function getFailedCount(): ?int {
        return $this->getBackingStore()->get('failedCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedCount' => fn(ParseNode $n) => $o->setFailedCount($n->getIntegerValue()),
            'inProgressCount' => fn(ParseNode $n) => $o->setInProgressCount($n->getIntegerValue()),
            'notSupportedCount' => fn(ParseNode $n) => $o->setNotSupportedCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pendingCount' => fn(ParseNode $n) => $o->setPendingCount($n->getIntegerValue()),
            'successfulCount' => fn(ParseNode $n) => $o->setSuccessfulCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inProgressCount property value. The inProgressCount property
     * @return int|null
    */
    public function getInProgressCount(): ?int {
        return $this->getBackingStore()->get('inProgressCount');
    }

    /**
     * Gets the notSupportedCount property value. The notSupportedCount property
     * @return int|null
    */
    public function getNotSupportedCount(): ?int {
        return $this->getBackingStore()->get('notSupportedCount');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the pendingCount property value. The pendingCount property
     * @return int|null
    */
    public function getPendingCount(): ?int {
        return $this->getBackingStore()->get('pendingCount');
    }

    /**
     * Gets the successfulCount property value. The successfulCount property
     * @return int|null
    */
    public function getSuccessfulCount(): ?int {
        return $this->getBackingStore()->get('successfulCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedCount', $this->getFailedCount());
        $writer->writeIntegerValue('inProgressCount', $this->getInProgressCount());
        $writer->writeIntegerValue('notSupportedCount', $this->getNotSupportedCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('pendingCount', $this->getPendingCount());
        $writer->writeIntegerValue('successfulCount', $this->getSuccessfulCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the failedCount property value. The failedCount property
     * @param int|null $value Value to set for the failedCount property.
    */
    public function setFailedCount(?int $value): void {
        $this->getBackingStore()->set('failedCount', $value);
    }

    /**
     * Sets the inProgressCount property value. The inProgressCount property
     * @param int|null $value Value to set for the inProgressCount property.
    */
    public function setInProgressCount(?int $value): void {
        $this->getBackingStore()->set('inProgressCount', $value);
    }

    /**
     * Sets the notSupportedCount property value. The notSupportedCount property
     * @param int|null $value Value to set for the notSupportedCount property.
    */
    public function setNotSupportedCount(?int $value): void {
        $this->getBackingStore()->set('notSupportedCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pendingCount property value. The pendingCount property
     * @param int|null $value Value to set for the pendingCount property.
    */
    public function setPendingCount(?int $value): void {
        $this->getBackingStore()->set('pendingCount', $value);
    }

    /**
     * Sets the successfulCount property value. The successfulCount property
     * @param int|null $value Value to set for the successfulCount property.
    */
    public function setSuccessfulCount(?int $value): void {
        $this->getBackingStore()->set('successfulCount', $value);
    }

}
