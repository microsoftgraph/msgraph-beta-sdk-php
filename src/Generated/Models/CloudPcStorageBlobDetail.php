<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcStorageBlobDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcStorageBlobDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcStorageBlobDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcStorageBlobDetail {
        return new CloudPcStorageBlobDetail();
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
     * Gets the containerName property value. Indicates the name of the container. For example, mycontainer.
     * @return string|null
    */
    public function getContainerName(): ?string {
        $val = $this->getBackingStore()->get('containerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'containerName' => fn(ParseNode $n) => $o->setContainerName($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'storageAccountId' => fn(ParseNode $n) => $o->setStorageAccountId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileName property value. The name of the file stored in the container. For example, myexportedvm.vhd.
     * @return string|null
    */
    public function getFileName(): ?string {
        $val = $this->getBackingStore()->get('fileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileName'");
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
     * Gets the storageAccountId property value. Indicates the unique identifier for the Azure storage account. For example, /subscriptions/0231ef39-1113-4772-bffe-26e7d8a15c9e/resourceGroups/myresourcegroup/providers/Microsoft.Storage/storageAccounts/mystorageaccount.
     * @return string|null
    */
    public function getStorageAccountId(): ?string {
        $val = $this->getBackingStore()->get('storageAccountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageAccountId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('containerName', $this->getContainerName());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('storageAccountId', $this->getStorageAccountId());
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
     * Sets the containerName property value. Indicates the name of the container. For example, mycontainer.
     * @param string|null $value Value to set for the containerName property.
    */
    public function setContainerName(?string $value): void {
        $this->getBackingStore()->set('containerName', $value);
    }

    /**
     * Sets the fileName property value. The name of the file stored in the container. For example, myexportedvm.vhd.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the storageAccountId property value. Indicates the unique identifier for the Azure storage account. For example, /subscriptions/0231ef39-1113-4772-bffe-26e7d8a15c9e/resourceGroups/myresourcegroup/providers/Microsoft.Storage/storageAccounts/mystorageaccount.
     * @param string|null $value Value to set for the storageAccountId property.
    */
    public function setStorageAccountId(?string $value): void {
        $this->getBackingStore()->set('storageAccountId', $value);
    }

}
