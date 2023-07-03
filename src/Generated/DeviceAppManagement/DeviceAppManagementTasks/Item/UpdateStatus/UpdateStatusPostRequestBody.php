<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\DeviceAppManagementTasks\Item\UpdateStatus;

use Microsoft\Graph\Beta\Generated\Models\DeviceAppManagementTaskStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateStatusPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new updateStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateStatusPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateStatusPostRequestBody {
        return new UpdateStatusPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'note' => fn(ParseNode $n) => $o->setNote($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DeviceAppManagementTaskStatus::class)),
        ];
    }

    /**
     * Gets the note property value. The note property
     * @return string|null
    */
    public function getNote(): ?string {
        $val = $this->getBackingStore()->get('note');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'note'");
    }

    /**
     * Gets the status property value. Device app management task status.
     * @return DeviceAppManagementTaskStatus|null
    */
    public function getStatus(): ?DeviceAppManagementTaskStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DeviceAppManagementTaskStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('note', $this->getNote());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the note property value. The note property
     * @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value): void {
        $this->getBackingStore()->set('note', $value);
    }

    /**
     * Sets the status property value. Device app management task status.
     * @param DeviceAppManagementTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceAppManagementTaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
