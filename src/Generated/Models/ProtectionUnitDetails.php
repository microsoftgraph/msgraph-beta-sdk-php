<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ProtectionUnitDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ProtectionUnitDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProtectionUnitDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProtectionUnitDetails {
        return new ProtectionUnitDetails();
    }

    /**
     * Gets the addedCount property value. The addedCount property
     * @return int|null
    */
    public function getAddedCount(): ?int {
        $val = $this->getBackingStore()->get('addedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addedCount'");
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
     * Gets the backupConfigurationType property value. The backupConfigurationType property
     * @return string|null
    */
    public function getBackupConfigurationType(): ?string {
        $val = $this->getBackingStore()->get('backupConfigurationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'backupConfigurationType'");
    }

    /**
     * Gets the failedCount property value. The failedCount property
     * @return int|null
    */
    public function getFailedCount(): ?int {
        $val = $this->getBackingStore()->get('failedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addedCount' => fn(ParseNode $n) => $o->setAddedCount($n->getIntegerValue()),
            'backupConfigurationType' => fn(ParseNode $n) => $o->setBackupConfigurationType($n->getStringValue()),
            'failedCount' => fn(ParseNode $n) => $o->setFailedCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'removedCount' => fn(ParseNode $n) => $o->setRemovedCount($n->getIntegerValue()),
            'requestedToAddCount' => fn(ParseNode $n) => $o->setRequestedToAddCount($n->getIntegerValue()),
            'requestedToRemoveCount' => fn(ParseNode $n) => $o->setRequestedToRemoveCount($n->getIntegerValue()),
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
     * Gets the removedCount property value. The removedCount property
     * @return int|null
    */
    public function getRemovedCount(): ?int {
        $val = $this->getBackingStore()->get('removedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removedCount'");
    }

    /**
     * Gets the requestedToAddCount property value. The requestedToAddCount property
     * @return int|null
    */
    public function getRequestedToAddCount(): ?int {
        $val = $this->getBackingStore()->get('requestedToAddCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedToAddCount'");
    }

    /**
     * Gets the requestedToRemoveCount property value. The requestedToRemoveCount property
     * @return int|null
    */
    public function getRequestedToRemoveCount(): ?int {
        $val = $this->getBackingStore()->get('requestedToRemoveCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedToRemoveCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('addedCount', $this->getAddedCount());
        $writer->writeStringValue('backupConfigurationType', $this->getBackupConfigurationType());
        $writer->writeIntegerValue('failedCount', $this->getFailedCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('removedCount', $this->getRemovedCount());
        $writer->writeIntegerValue('requestedToAddCount', $this->getRequestedToAddCount());
        $writer->writeIntegerValue('requestedToRemoveCount', $this->getRequestedToRemoveCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the addedCount property value. The addedCount property
     * @param int|null $value Value to set for the addedCount property.
    */
    public function setAddedCount(?int $value): void {
        $this->getBackingStore()->set('addedCount', $value);
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
     * Sets the backupConfigurationType property value. The backupConfigurationType property
     * @param string|null $value Value to set for the backupConfigurationType property.
    */
    public function setBackupConfigurationType(?string $value): void {
        $this->getBackingStore()->set('backupConfigurationType', $value);
    }

    /**
     * Sets the failedCount property value. The failedCount property
     * @param int|null $value Value to set for the failedCount property.
    */
    public function setFailedCount(?int $value): void {
        $this->getBackingStore()->set('failedCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the removedCount property value. The removedCount property
     * @param int|null $value Value to set for the removedCount property.
    */
    public function setRemovedCount(?int $value): void {
        $this->getBackingStore()->set('removedCount', $value);
    }

    /**
     * Sets the requestedToAddCount property value. The requestedToAddCount property
     * @param int|null $value Value to set for the requestedToAddCount property.
    */
    public function setRequestedToAddCount(?int $value): void {
        $this->getBackingStore()->set('requestedToAddCount', $value);
    }

    /**
     * Sets the requestedToRemoveCount property value. The requestedToRemoveCount property
     * @param int|null $value Value to set for the requestedToRemoveCount property.
    */
    public function setRequestedToRemoveCount(?int $value): void {
        $this->getBackingStore()->set('requestedToRemoveCount', $value);
    }

}
