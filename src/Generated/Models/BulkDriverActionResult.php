<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * A complex type to represent the result of bulk driver action.
*/
class BulkDriverActionResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new bulkDriverActionResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkDriverActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkDriverActionResult {
        return new BulkDriverActionResult();
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
     * Gets the failedDriverIds property value. List of driver Ids where the action is failed.
     * @return array<string>|null
    */
    public function getFailedDriverIds(): ?array {
        return $this->getBackingStore()->get('failedDriverIds');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedDriverIds' => fn(ParseNode $n) => $o->setFailedDriverIds($n->getCollectionOfPrimitiveValues()),
            'notFoundDriverIds' => fn(ParseNode $n) => $o->setNotFoundDriverIds($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successfulDriverIds' => fn(ParseNode $n) => $o->setSuccessfulDriverIds($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the notFoundDriverIds property value. List of driver Ids that are not found.
     * @return array<string>|null
    */
    public function getNotFoundDriverIds(): ?array {
        return $this->getBackingStore()->get('notFoundDriverIds');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the successfulDriverIds property value. List of driver Ids where the action is successful.
     * @return array<string>|null
    */
    public function getSuccessfulDriverIds(): ?array {
        return $this->getBackingStore()->get('successfulDriverIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('failedDriverIds', $this->getFailedDriverIds());
        $writer->writeCollectionOfPrimitiveValues('notFoundDriverIds', $this->getNotFoundDriverIds());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('successfulDriverIds', $this->getSuccessfulDriverIds());
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
     * Sets the failedDriverIds property value. List of driver Ids where the action is failed.
     * @param array<string>|null $value Value to set for the failedDriverIds property.
    */
    public function setFailedDriverIds(?array $value): void {
        $this->getBackingStore()->set('failedDriverIds', $value);
    }

    /**
     * Sets the notFoundDriverIds property value. List of driver Ids that are not found.
     * @param array<string>|null $value Value to set for the notFoundDriverIds property.
    */
    public function setNotFoundDriverIds(?array $value): void {
        $this->getBackingStore()->set('notFoundDriverIds', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the successfulDriverIds property value. List of driver Ids where the action is successful.
     * @param array<string>|null $value Value to set for the successfulDriverIds property.
    */
    public function setSuccessfulDriverIds(?array $value): void {
        $this->getBackingStore()->set('successfulDriverIds', $value);
    }

}
